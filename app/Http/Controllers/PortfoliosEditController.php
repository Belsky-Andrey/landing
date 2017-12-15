<?php

namespace App\Http\Controllers;

use App\Portfolio;
use Illuminate\Http\Request;
use Validator;

class PortfoliosEditController extends Controller
{
    public function execute (Portfolio $portfolio,Request $request){


        if($request->isMethod('delete')){

            $portfolio->delete();
            return redirect('admin')->with('status','Страница удалена');
        }


        if ($request->isMethod('post')) {

            $input = $request->except('_token');

            $messages = [
                'required' => 'Поле :attribute обязательно к заполнению',
                'unique' => 'Поле :attribute должно быть уникальным'
            ];
dd($input);
            $validator = Validator::make($input, [

                'name' => 'required|max:255',
                'filter' => 'required|max:255' ,


            ], $messages);

            if ($validator->fails()) {
                return redirect()->route('portfoliosEdit', ['portfolio' => $input['id']])->withErrors($validator)->withInput();
            }
            if ($request->hasFile('images')) {

                $file = $request->file('images');
                $file->move(public_path() . '/assets/img', $file->getClientOriginalName());
                $input['images'] = $file->getClientOriginalName();

            } else {
                $input['images'] = $input['old_images'];
            }
            unset($input['old_images']);

            $portfolio->fill($input);

            if($portfolio->update()){
                return redirect('admin')->with('status','Страница обновлена');
            }
        }


        $old = $portfolio->toArray();
        if (view()->exists('admin.potfolios_edit')) {

            $data = [

                'title' => 'Редактирование страницы -' . $old['name'],
                'data' => $old

            ];
            return view('admin.potfolios_edit', $data);
        }
        abort(404);
    }


}

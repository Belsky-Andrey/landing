<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Portfolio;

class PortfoliosAddController extends Controller
{
    public  function execute (Request $request){

        if($request->isMethod('post')){
            $input = $request->except('_token');

            $messages=[
                'required'=>'Поле :attribute обязательно к заполнению',


            ];


            $validator = Validator::make($input, [
                'name' => 'required|max:255',
                'filter' => 'required|max:255',

            ],$messages);

            if ($validator->fails()) {
                return redirect()->route('portfoliosAdd')->withErrors($validator)->withInput();
            }
            if ($request->hasFile('images')) {

                $file = $request->file('images');

                $input['images'] = $file->getClientOriginalName();

                $file->move(public_path() . '/assets/img', $input['images']);

            }

            $page = new Portfolio();
            $page->fill($input);

            if($page->save()){
                return redirect('admin')->with('status','Страница добавлена');
            }
        }











        if (view()->exists('admin.portfolios_add')) {
            $data = [

                'title' => 'Новая страница '

            ];
            return view('admin.portfolios_add', $data);
        }
        abort(404);
    }
}

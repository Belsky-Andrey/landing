<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;
use Validator;

class ServicesAddController extends Controller
{
    public  function execute (Request $request){

        if($request->isMethod('post')){
            $input = $request->except('_token');

            $messages=[
                'required'=>'Поле :attribute обязательно к заполнению',


            ];


            $validator = Validator::make($input, [
                'name' => 'required|max:255',
                'text' => 'required|max:255'


            ],$messages);

            if ($validator->fails()) {
                return redirect()->route('serviceAdd')->withErrors($validator)->withInput();
            }
            if ($request->hasFile('images')) {

                $file = $request->file('images');

                $input['images'] = $file->getClientOriginalName();

                $file->move(public_path() . '/assets/img', $input['images']);

            }

            $page = new Service();
            $page->fill($input);

            if($page->save()){
                return redirect('admin')->with('status','Страница добавлена');
            }
        }

        if (view()->exists('admin.services_add')) {
            $data = [

                'title' => 'Новая страница '

            ];
            return view('admin.services_add', $data);
        }
        abort(404);
    }
}

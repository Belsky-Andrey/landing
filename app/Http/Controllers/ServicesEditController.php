<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;
use Validator;

class ServicesEditController extends Controller
{
    public function execute (Service $service,Request $request){


        if($request->isMethod('delete')){

            $service->delete();
            return redirect('admin')->with('status','Сервис  удален');
        }


        if ($request->isMethod('post')) {

            $input = $request->except('_token');

            $messages = [
                'required' => 'Поле :attribute обязательно к заполнению',

            ];

            $validator = Validator::make($input, [

                'name' => 'required|max:255',
                'text' => 'required|max:255' ,


            ], $messages);

            if ($validator->fails()) {
                return redirect()->route('servicesEdit', ['service' => $input['id']])->withErrors($validator)->withInput();
            }

            $service->fill($input);

            if($service->update()){
                return redirect('admin')->with('status','Страница обновлена');
            }
        }


        $old = $service->toArray();
        if (view()->exists('admin.services_edit')) {

            $data = [

                'title' => 'Редактирование страницы -' . $old['name'],
                'data' => $old

            ];
            return view('admin.services_edit', $data);
        }
        abort(404);
    }
}

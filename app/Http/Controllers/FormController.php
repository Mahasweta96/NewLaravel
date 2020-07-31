<?php

namespace App\Http\Controllers;

use App\Forms;
use Illuminate\Http\Request;

class FormController extends Controller
{
    //
    /*public function show(Request $request)
    {
    	return view('formpage');
    }

    public function save(Request $request)
    {
    	print_r($request->input('name'));
    }
    */

    public function show(Forms $forms)
    {

    	//$forms = Forms::find($id);

    	return view('mahasweta.show',['forms' => $forms]);
    }

    public function create()
    {
    	return view ('mahasweta.create');
    }

    public function store()
    {
        //request()->validate([
        Forms::create($this->validateForms());

       /*Forms::create([
            'name' => request('name'),
            'email' => request('email'),
            'message' => request('message')

        ]);
        */

       /*$forms = new Forms();

       $forms->name = request('name');
       $forms->email = request('email');
       $forms->message = request('message');

       $forms->save();
       */

       return redirect(route('forms.index', $forms));
    }

    public function edit(Forms $forms)
    {
        //$forms = Forms::find($id);

        return view('mahasweta.edit', compact('forms'));
    }

    public function update(Forms $forms)
    {
       $forms->update($this->validateForms());
        //$forms = Forms::find($id);
       //Forms::update(request()->validate([
       // 'name' => 'required',
        //'email' => 'required',
        //'message' => 'required'
    //]));
       //$forms->name = request('name');
       //$forms->email = request('email');
       //$forms->message = request('message');

       //$forms->save();

       return redirect($forms->path());
    }


    //public function store()
    //{
     //  dump(request()->all());
     //}
    /**
     * @return array
     */
    protected function validateForms(): array
    {
        return request()->validate([

            'name' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);
    }
}


/*

    public function show($forms)
    {
    	dd($forms);
    }
}
*/

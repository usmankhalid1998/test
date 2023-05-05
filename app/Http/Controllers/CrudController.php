<?php

namespace App\Http\Controllers;
use App\Models\crud;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function crudshow(crud $c){
        return view('show')->with('showdata',crud::all());
    }

    public function cruddelete(crud $c, $id){
        crud::destroy(array('id',$id));
        return redirect('crudshow');
    }

    public function crudcreate(){
        return view('create');
    }

    public function submit(Request $req){
        $rr = new crud;
        $rr->name = $req->input('name');
        $rr->save();
        $req->session()->flash('msg', 'Data inserted');
        return redirect('crudshow');
    }

    public function edit(crud $c, $id){
        return view('edit')->with('showdata',crud::find($id));
    }

    public function save(Request $req, $id){
        // return view('edit')->with('showdata',crud::find($id));
        // return $req;
        $rr = crud::find($id);
        $rr->name = $req->input('name');
        $rr->save();
        $req->session()->flash('msg', 'Data updated');
        return redirect('crudshow');
    }

}

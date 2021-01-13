<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crud;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $employees = Crud::all()->toArray(); 
        return view('crud.index',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('crud.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'first_name' => 'required',
            'last_name'  => 'required'  
        ]);

        $crud = new Crud([
            'first_name' => $request->get('first_name'),
            'last_name'  => $request->get('last_name')
        ]);

        $crud->save();
        return redirect()->route('crud.index')->with('success', 'Data saved successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $employee = Crud::find($id);
        return view('crud.edit', compact('employee', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
            'first_name'    =>  'required',
            'last_name'     =>  'required'
        ]);
        $employee = Crud::find($id);
        $employee->first_name = $request->get('first_name');
        $employee->last_name = $request->get('last_name');
        $employee->save();
        return redirect()->route('crud.index')->with('success', 'Data updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $employee = Crud::find($id);
        $employee->delete();
        return redirect()->route('crud.index')->with('success', 'Data deleted successfully!');
    }
}

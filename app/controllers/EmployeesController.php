<?php

class EmployeesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$employees = Employee::all();
		return View::make('index', compact('employees'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */

	public function handleCreate()
	{
		$employee = new Employee;
		$employee->first_name = Input::get('first_name');
		$employee->last_name = Input::get('last_name');
		$employee->email = Input::get('email');
		$employee->save();
		return Redirect::action('EmployeesController@index');
	}
	/**
	*
	*@return Response
	*
	**/
	public function create()
	{
		return View::make('create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Employee $employee)
	{
		return View::make('edit', compact('employee'));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function delete(Employee $employee)
	{
		return View::make('delete', compact('employee'));
	}

	public function handleEdit()
	{
		$employee = Employee::findOrFail(Input::get('id'));
		$employee->first_name = Input::get('first_name');
		$employee->last_name = Input::get('last_name');
		$employee->email = Input::get('email');
		$employee->save();

		return Redirect::action('EmployeesController@index');
	}

	public function handleDelete()
	{
		$id = Input::get('employee');
		$employee = Employee::findOrFail($id);
		$employee->delete();
		return Redirect::action('EmployeesController@index');
	}

}

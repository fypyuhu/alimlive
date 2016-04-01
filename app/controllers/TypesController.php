<?php

class TypesController extends \BaseController {

	/**
	 * Display a listing of types
	 *
	 * @return Response
	 */
	public function index()
	{
		$types = Type::all();

		return View::make('admin.types.index', compact('types'));
	}

	/**
	 * Show the form for creating a new type
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.types.create');
	}

	/**
	 * Store a newly created type in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Type::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Type::create($data);

		return Redirect::route('type.index');
	}

	/**
	 * Display the specified type.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$type = Type::findOrFail($id);

		return View::make('admin.types.show', compact('type'));
	}

	/**
	 * Show the form for editing the specified type.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$type = Type::find($id);

		return View::make('admin.types.edit', compact('type'));
	}

	/**
	 * Update the specified type in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$type = Type::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Type::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$type->update($data);

		return Redirect::route('type.index');
	}

	/**
	 * Remove the specified type from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Type::destroy($id);

		return Redirect::route('type.index');
	}

}

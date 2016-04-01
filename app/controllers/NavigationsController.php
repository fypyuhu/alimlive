<?php

class NavigationsController extends \BaseController {

	/**
	 * Display a listing of navigations
	 *
	 * @return Response
	 */
	public function index()
	{
		$navigations = Navigation::all();

		return View::make('admin.navigations.index', compact('navigations'));
	}

	/**
	 * Show the form for creating a new navigation
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.navigations.create');
	}

	/**
	 * Store a newly created navigation in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Navigation::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Navigation::create($data);

		return Redirect::route('navigation.index');
	}

	/**
	 * Display the specified navigation.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$navigation = Navigation::findOrFail($id);

		return View::make('admin.navigations.show', compact('navigation'));
	}

	/**
	 * Show the form for editing the specified navigation.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$navigation = Navigation::find($id);

		return View::make('admin.navigations.edit', compact('navigation'));
	}

	/**
	 * Update the specified navigation in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$navigation = Navigation::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Navigation::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$navigation->update($data);

		return Redirect::route('navigation.index');
	}

	/**
	 * Remove the specified navigation from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Navigation::destroy($id);

		return Redirect::route('navigation.index');
	}

}

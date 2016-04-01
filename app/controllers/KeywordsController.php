<?php

class KeywordsController extends \BaseController {

	/**
	 * Display a listing of keywords
	 *
	 * @return Response
	 */
      public function __construct()
    {
        $this->beforeFilter('admin', ['except' => 'dashboard']);
        
        ///this->beforeFilter('auth', ['only' => 'dashboard']);
        
        
        $this->beforeFilter('csrf', array('on' => 'post'));

    }
	public function index()
	{
		$keywords = Keyword::all();

		return View::make('admin.keywords.index', compact('keywords'));
	}

	/**
	 * Show the form for creating a new keyword
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.keywords.create');
	}

	/**
	 * Store a newly created keyword in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Keyword::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Keyword::create($data);

		return Redirect::route('keyword.index');
	}

	/**
	 * Display the specified keyword.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$keyword = Keyword::findOrFail($id);

		return View::make('admin.keywords.show', compact('keyword'));
	}

	/**
	 * Show the form for editing the specified keyword.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$keyword = Keyword::find($id);

		return View::make('admin.keywords.edit', compact('keyword'));
	}

	/**
	 * Update the specified keyword in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$keyword = Keyword::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Keyword::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$keyword->update($data);

		return Redirect::route('keyword.index');
	}

	/**
	 * Remove the specified keyword from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Keyword::destroy($id);

		return Redirect::route('keyword.index');
	}

}

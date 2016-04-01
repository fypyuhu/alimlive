<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of users
	 *
	 * @return Response
	 */
    public function __construct()
    {
        $this->beforeFilter('admin', ['except' => 'dashboard']);
        
        $this->beforeFilter('auth', ['only' => 'dashboard']);
        
        
        $this->beforeFilter('csrf', array('on' => 'post'));

    }

	public function index()
	{
		$users = User::all();

		return View::make('admin.users.index', compact('users'));
	}

	/**
	 * Show the form for creating a new user
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.users.create');
	}

	/**
	 * Store a newly created user in storage.
	 *
	 * @return Response
	 */
	public function store()
	{ 
		
            
		$validator = Validator::make($data = Input::all(), User::$rules);
                
                
		if ($validator->fails())
		{
                    
                  
			return Redirect::back()->withErrors($validator)->withInput();
		}
                
                User::create($data);

             
		return Redirect::route('user.index');
	}

	/**
	 * Display the specified user.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$user = User::findOrFail($id);

		return View::make('admin.users.show', compact('user'));
	}

	/**
	 * Show the form for editing the specified user.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = User::find($id);

		return View::make('admin.users.edit', compact('user'));
	}

	/**
	 * Update the specified user in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$user = User::findOrFail($id);
                
		$validator = Validator::make($data = Input::all(), User::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$user->update($data);

		return Redirect::route('user.show',$user->id);
	}

	/**
	 * Remove the specified user from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		
                $user = Auth::user();
                
                if($id == $user->id){

                    return Redirect::back()->withErrors(['You Cannot do Sucite']);
                    
                }
                User::destroy($id);
		return Redirect::route('user.index');
	}

}

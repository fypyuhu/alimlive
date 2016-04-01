<?php

class SlidersController extends \BaseController {

	/**
	 * Display a listing of sliders
	 *
	 * @return Response
	 */
	public function index()
	{
		$sliders = Slider::ordered();

		return View::make('admin.sliders.index', compact('sliders'));
	}

	/**
	 * Show the form for creating a new slider
	 *
	 * @return Response
	 */
	public function create()
	{
            
             $orderNo = Slider::guessOrderNo();
             
		return View::make('admin.sliders.create',compact('orderNo'));
	}

	/**
	 * Store a newly created slider in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Slider::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}
                
                
                $uploader = new UploaderController();
              
                $uploader->upload('pic', 'image','/ii');
                
                if($uploader->isFail()){
                    return Redirect::back()->withErrors(['Image not uploaded'])->withInput();
                }
                
                $data['pic'] = $uploader->pathToFile;
		
                Slider::create($data);

		return Redirect::route('slider.index');
	}

	/**
	 * Display the specified slider.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$slider = Slider::findOrFail($id);

		return View::make('admin.sliders.show', compact('slider'));
	}

	/**
	 * Show the form for editing the specified slider.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$slider = Slider::find($id);

		return View::make('admin.sliders.edit', compact('slider'));
	}

	/**
	 * Update the specified slider in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$slider = Slider::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Slider::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}
                
		$slider->update($data);

		return Redirect::route('slider.index');
	}

	/**
	 * Remove the specified slider from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Slider::destroy($id);

		return Redirect::route('slider.index');
	}

}

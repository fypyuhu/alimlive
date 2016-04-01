<?php

class ArticlesController extends \BaseController {

	/**
	 * Display a listing of articles
	 *
	 * @return Response
	 */
	public function index()
	{
		$articles = Article::all();

		return View::make('admin.articles.index', compact('articles'));
	}

	/**
	 * Show the form for creating a new article
	 *
	 * @return Response
	 */
	public function create()
	{
           $orderNo = Article::guessOrderNo();
           $types = Type::hashForOption();
		return View::make('admin.articles.create',compact('orderNo','types'));
	}

	/**
	 * Store a newly created article in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
            
		$validator = Validator::make($data = Input::all(), Article::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}
                
                $data['user_id'] = Auth::user()->id;                
		$data['slag'] = $this->titleToSlag($data['title']);
                Article::create($data);

		return Redirect::route('article.index');
	}

	/**
	 * Display the specified article.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$article = Article::findOrFail($id);

		return View::make('admin.articles.show', compact('article'));
	}

	/**
	 * Show the form for editing the specified article.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$article = Article::find($id);
                
                
                $types = Type::hashForOption();
                $selected = $article->type()->first()->id;
                
		return View::make('admin.articles.edit', compact('article','types','selected'));
	}

	/**
	 * Update the specified article in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$article = Article::findOrFail($id);
                if($article->title == Input::get('title')){
                    $validator = Validator::make($data = Input::all(), Article::$urules);
                }
                else{
                    $validator = Validator::make($data = Input::all(),  Article::$rules);
                    
                    
                }
		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}
                $data['slag']=$this->titleToSlag($data['title']);
		$article->update($data);

		return Redirect::route('article.index');
	}

	/**
	 * Remove the specified article from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Article::destroy($id);
                
		return Redirect::route('article.index');
	}
        
        private function titleToSlag($title){
           $title = strtolower($title);
           for($i=0;$i < strlen($title);$i++ )
           {
               if($title[$i]==' '){
                   $title[$i] = '_';
               }
           }
           return $title;
        
        }
}

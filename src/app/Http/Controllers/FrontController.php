<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\Comments;
use Illuminate\Http\Request;

use App\Http\Requests;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::where('public', '=', 1)->orderBy( \DB::raw('(articles.created_at)'), 'DESC')->limit(12)->get();
        $categories = Category::all();
        return view('site.index', ['articles' => $articles, 'categories' => $categories]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comments = Article::where('public', '=', 1)->find($id)->comments()->where('public', '=', '1')->get();
        $article = Article::where('public', '=', 1)->find($id);
        return view('site.show', ['article' => $article, 'comments' => $comments]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function popular()
    {
        $articles = Article::select(['articles.*', \DB::raw('Count(comments.id) as comments_count')])
            ->leftJoin('comments', 'comments.article_id', '=', 'articles.id')
            ->groupBy('articles.id')
            ->orderBy( \DB::raw('Count(comments.id)'), 'DESC')
            ->limit(10)
            ->get();
        return view('site.popular', ['articles' => $articles]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function gallery()
    {
        $articles = Article::all();
        return view('site.gallery',['articles' => $articles]);
    }

    public function search(Request $request)
    {
        $search = $request->get('search', '');
        $articles = Article::where('title', 'LIKE', "%$search%")->get();
        return view('site.search',['articles' => $articles]);
    }
}

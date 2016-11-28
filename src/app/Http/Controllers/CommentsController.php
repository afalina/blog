<?php

namespace App\Http\Controllers;

use App\Comments;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class CommentsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function show()
    {
        $comments = Comments::FullComments(); //вот здесь и пригодился static метод
        return view('admin.comments.show', ['comments' => $comments]);
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

    public function save(Request $request, $id)
    {
        $this->validate($request, [
            'author' => 'required|max:100|min:5',
            'email' => 'required|email',
            'content' => 'required|min:5|max:400'
        ]);
        $all = $request->all();
        $all['article_id'] = $id;
        Comments::create($all);
        return back()->with('message', 'Спасибо за комментарий. После проверки он будет опубликован');
    }

    public function delete($id)
    {
        if (!in_array(\Auth::user()->role, [User::ROLE_ADMINISTRATOR])) {
            return redirect('/');
        }
        $comment = Comments::find($id);
        $comment->delete();
        return back();
    }

    public function published($id)
    {
        $comment = Comments::find($id);
        $comment->public = 1;
        $comment->save();
        return back();
    }
}

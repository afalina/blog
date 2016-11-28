<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table="articles";
    protected $fillable=['title','content','preview','meta_description','meta_keywords','category_id','comments_enable','public', 'comments_count', 'month', 'year', 'count'];

    public function comments()
    {
        return $this->hasMany('App\Comments','article_id','id');
    }

    static public function preview()
    {
        return $articles=DB::table('articles')
            ->where('articles.public','=','1')
            ->leftJoin('comments',function($query)
            {
                $query->on('comments.article_id','=','articles.id')
                    ->where('comments.public','=','1');
            })
            ->select('articles.*', DB::raw('count(comments.id) as commentsCount'))
            ->groupBy('articles.id')
            ->get();

    }
// запрос будет вот такой select a.title, c.public, count(c.id) commentsCount from articles a left join comments c on (c.article_id=a.id and a.public=1) group by a.id;
}

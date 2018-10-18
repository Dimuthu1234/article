<?php

namespace App\Http\Controllers;

use App\Article;
use App\User;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    protected $articles;
    protected $latestArticles;
    protected $latestArticle;

    public function __construct()
    {
        $this->articles = Article::paginate(6);
        $this->latestArticles = Article::orderBy('id', 'DESC')->get();
        $this->latestArticle = Article::latest()->first();
    }


    public function index() {
        return view('welcome')
            ->withArticles($this->articles)
            ->withArticles2($this->latestArticles)
            ->withArticle2($this->latestArticle);
    }

    public function userShow($id){
        return [User::where('id', $id)->get()->pluck('name', 'id')];
    }

    public function articleShow($slug){
        $article = Article::where('slug', $slug)->first();
        return view('article_show')
        ->with('article', $article);
    }
}

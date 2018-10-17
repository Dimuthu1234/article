<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    protected $articles;
    protected $latestArticles;
    protected $latestArticle;

    public function __construct()
    {
        $this->articles = Article::get();
        $this->latestArticles = Article::orderBy('id', 'DESC')->get();
        $this->latestArticle = Article::latest()->first();
    }


    public function index() {
        return view('welcome')
            ->withArticles($this->articles)
            ->withArticles2($this->latestArticles)
            ->withArticle2($this->latestArticle);
    }
}

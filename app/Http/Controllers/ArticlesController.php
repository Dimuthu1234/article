<?php

namespace App\Http\Controllers;

use App\Article;
use App\MetaKeyword;
use Illuminate\Http\Request;

use Session;

class ArticlesController extends Controller
{
    protected $articles;
    protected $metaKeywordList;

    public function __construct()
    {
        $this->articles = Article::all();
        $this->metaKeywordList = MetaKeyword::get()->pluck('keyword', 'id');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.article.index')
            ->with('articles', $this->articles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.article.create')
            ->with('metaKeywordList', $this->metaKeywordList);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $list = $request->meta_keyword_list;
        $strings_array = [];
        $id_array = [];
        for ($x = 0; $x < sizeof($list); $x++) {
            if (is_numeric($list[$x])) {
                $id_array[] = $list[$x];
            } else {
                $strings_array[] = $list[$x];
            }
        }
        $input = $request->all();
        if ($request->hasFile('thumbnail')){
            $name = $input['title'];
            $formtedName = str_replace([' ','%'], '-', $name);

            $imageName = $formtedName . '-' . (string) rand(00000, 99999)  . '.' . $request->file('thumbnail')->getClientOriginalExtension();
            $request->file('thumbnail')->move(public_path().'/images/article/thumbnail', $imageName);
            $input['thumbnail'] = $imageName;
        }

        if ($request->hasFile('image')){
            $name = $input['title'];
            $formtedName = str_replace([' ','%'], '-', $name);

            $imageName = $formtedName . '-' . (string) rand(00000, 99999)  . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/images/article/image', $imageName);
            $input['image'] = $imageName;
        }


        $article = Article::create($input);
        if ($strings_array == null) {
            $article->metaKeywords()->sync((array) $request->input('meta_keyword_list'));
        }else
        {
            foreach ($strings_array as $sa) {
                $string_labels[] = MetaKeyword::create(['keyword' => $sa]);
            }

            for ($y = 0; $y < sizeof($string_labels); $y++) {
                $string_labels_ids[] = $string_labels[$y]->id;
            }
            $article->metaKeywords()->sync(array_merge((array)$id_array, (array)$string_labels_ids));
        }
        Session::flash('success','Article has been added !');
        return redirect()->route('article.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }
}

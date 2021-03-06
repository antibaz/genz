<?php
/**
 * Created by vlad.
 * Date: 26.07.17
 * Time: 21:51
 */

namespace App\Http\Controllers;

use App\Models\Article;


class ArticleController extends Controller
{
    public function index($slug, $slug2 = null)
    {
        $issetNews = Article::where('link', $slug)->first();
        //dump($issetNews);
        if ($issetNews) {
            return view('articles.detail', [
                'Description' => $issetNews->text,
                'Title' => $issetNews->name,
                'Image' => $issetNews->image,
            ]);
        } else {
            abort(404);
        }

    }
}
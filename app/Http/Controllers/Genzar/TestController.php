<?php
/**
 * Created by vlad.
 * Date: 26.07.17
 * Time: 21:51
 */

namespace App\Http\Controllers;

use App\Models\WpContent;
use App\Models\Article;
use App\Http\Requests;
use Illuminate\Http\Request;


class TestController extends Controller
{
    public function index()
    {
        $query = WpContent::query()
        ->where('post_status', '=', 'publish')
        ->get();

        foreach ($query as $item)
        {
            if($item->post_title)
            {
                $article = new Article();
                $article->name = $item->post_title;
                $article->text = $item->post_content;
                $article->link = $item->post_name;
                $article->save();
                dump($article);
            }


        }
    }
}
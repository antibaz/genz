<?php
/**
 * Created by vlad.
 * Email: vladislav.rodin@mediapark.com
 * Date: 26.07.17
 * Time: 21:51
 */

namespace App\Http\Controllers;

use App\Models\News;
use Psy\Exception\ThrowUpException;


class NewsControl extends Controller
{
    public function index($slug, $slug2 = null)
    {

        $issetNews = News::where('url_link', $slug)->first();
        dump($issetNews);
        if($issetNews)
        {
            return view('news.detail', [
                'Description' => $issetNews->Description,
                'Title' => $issetNews->Title,
                'Image' => $issetNews->Image,
            ]);
        }
        else
        {
            abort(404);
        }

    }
}
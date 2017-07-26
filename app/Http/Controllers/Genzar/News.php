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

        $issetNews = News::where('Title', $slug)->first();

        return view('news.detail');

    }
}
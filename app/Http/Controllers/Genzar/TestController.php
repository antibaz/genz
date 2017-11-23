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
use Illuminate\Support\Facades\App;
use JsonSchema\Uri\Retrievers\Curl;


class TestController extends Controller
{
    public function index()
    {
        /*$postVK = ["type" => "message_reply"];
        $postVK['text'] = "Создан заказ и передан в FastBox под номером";

        $return_vk = http_post_data("https://aredi.ru/include/vk/messages.php", $postVK);
        dump($return_vk);*/

        dump(config('app.url'));
    }
}
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
        $postVK = ["type" => "message_reply"];
        $postVK['text'] = "Создана новая заявка на сайте: \r\n " . "test test nтелефон \r\n\ asdasdas";
        $return_vk = self::curl_expert(config('app.url') . "/vk/message", array(), $postVK);

    }

    public static function curl_expert($url,$params = array(), $data){

        $str = '';
        $str_arr= array();
        foreach($params as $key => $value)
        {
            $str_arr[] = urlencode($key)."=".urlencode($value);
        }
        if(!empty($str_arr))
            $str = '?'.implode('&',$str_arr);

        $Url = $url.$str;

        $ch = curl_init ($Url);
        //curl_setopt ($ch, CURLOPT_COOKIEFILE, $ckfile);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
        /*curl_setopt ($ch, CURLOPT_POST, true);*/
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json'
        ));

        $output = curl_exec ($ch);
        return $output;

    }
}
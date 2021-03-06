<?php
/**
 * Created by vlad.
 * Date: 04.10.17
 * Time: 13:42
 */

namespace App\Http\Controllers;

use App\Models\Modal;
use Dotenv\Dotenv;
use Validator;
use Illuminate\Http\Request;

class ModalController extends Controller
{
    public function index(Request $request)
    {
        //var_dump($request->all());
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required',
            'comment' => 'required',
        ]);

        if ($validator->fails()) {
            return 'Все поля формы обязательны для заполнения.';
        }

        $postVK = ["type" => "message_reply"];
        $postVK['text'] = "Создана новая заявка на сайте: \r\n ";
        $postVK['text'] .= "Имя: " .$request->all()['name']. "\r\n ";
        $postVK['text'] .= "Телефон: " .$request->all()['phone']. "\r\n ";
        $postVK['text'] .= "Комментарий: " .$request->all()['comment']. "\r\n ";

        $modal = new Modal();
        try
        {
            $modal->fill($request->all());
            $modal->save();

            $return_vk = self::curl_expert(config('app.url') . "/vk/message", array(), $postVK);

        }
        catch (\Exception $exception)
        {
            echo $exception->getMessage();
        }

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
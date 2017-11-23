<?php
/**
 * Created by vlad.
 * Date: 04.10.17
 * Time: 13:42
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class VkMessageController extends Controller
{
    public function index(Request $request)
    {
        if (!$request->get('type')) {
            die('Bad params');
        }

//Строка для подтверждения адреса сервера из настроек Callback API
        $confirmation_token = 'b04126c6';

//Ключ доступа сообщества
        $token = 'e357373bcaf61506e370ca0ca3263470234b729790a69c8f35602ee35893816dd2b238202db252f805b39';

//Получаем и декодируем уведомление
        $data = json_decode(file_get_contents('php://input'));

//Проверяем, что находится в поле "type"
        switch ($request->get('type')) {
            //Если это уведомление для подтверждения адреса сервера...
            case 'confirmation':
                //...отправляем строку для подтверждения адреса
                echo $confirmation_token;
                break;

//Если это уведомление о новом сообщении...
            //case 'message_new':
            case 'message_reply':
                //$user_id = $data->object->user_id;
                $user_id = 15579641;
                /* $user_info = json_decode(file_get_contents("https://api.vk.com/method/users.get?user_ids={$user_id}&v=5.52"));

                 $user_name = $user_info->response[0]->first_name; */

                $request_params = array(
                    'message' => $request->get("text"),
                    'user_id' => $user_id,
                    'access_token' => $token,
                    'v' => '5.0'
                );

                $get_params = http_build_query($request_params);

                file_get_contents('https://api.vk.com/method/messages.send?'. $get_params);

                break;
        }
    }
}
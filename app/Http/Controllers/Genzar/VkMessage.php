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
    public function index(Request $request = null)
    {

//Строка для подтверждения адреса сервера из настроек Callback API
        $confirmation_token = '4d4f6a30';

//Ключ доступа сообщества
        $token = '67783a401e97d38c4c353d320f7555f771c3e2978da012a99fa63ae15da5d06398019e636d5d48571ba17';

//Получаем и декодируем уведомление
        $data = json_decode(file_get_contents('php://input'));
        
        if (!$data->type) {
            die('Bad params');
        }

        //Проверяем, что находится в поле "type"
        switch ($data->type) {
            //Если это уведомление для подтверждения адреса сервера...
            case 'confirmation':
                //...отправляем строку для подтверждения адреса
                echo $confirmation_token;
                break;

            //Если это уведомление о новом сообщении...
            //case 'message_new':
            case 'message_reply':
                //$user_id = $data->object->user_id;
                $user_id = 3947625;
                /* $user_info = json_decode(file_get_contents("https://api.vk.com/method/users.get?user_ids={$user_id}&v=5.52"));

                 $user_name = $user_info->response[0]->first_name; */

                $request_params = array(
                    'message' => $data->text,
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
<?php
/**
 * Created by vlad.
 * Date: 04.10.17
 * Time: 13:42
 */

namespace App\Http\Controllers;

use App\Models\Modal;
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

        $modal = new Modal();
        try
        {
            $modal->fill($request->all());
            $modal->save();
        }
        catch (\Exception $exception)
        {
            echo $exception->getMessage();
        }

    }
}
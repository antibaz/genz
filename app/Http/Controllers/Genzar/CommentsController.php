<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 30.11.17
 * Time: 21:49
 */

namespace App\Http\Controllers;

use App\Models\Comments;

class CommentsController extends Controller
{
    public function index()
    {
        $issetComments = Comments::all();

        if ($issetComments) {
            return view('comments.index',$issetComments);
        } else {
            abort(404);
        }
    }
}
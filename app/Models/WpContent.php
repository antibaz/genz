<?php
/**
 * Created by vlad.
 * Email: vladislav.rodin@mediapark.com
 * Date: 22.10.17
 * Time: 13:59
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class WpContent extends Model
{

    protected $table = 'wp_posts';

    protected $hidden = [

    ];

    protected $guarded = [];
}
<?php 


namespace App\Http\Services;


use App\Models\Content;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class ContentServices{



public function get(){
    return Content::get();
}

}
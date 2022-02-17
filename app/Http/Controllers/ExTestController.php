<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExTestController extends Controller
{
    public function index($text, $textnumber)
    {
        if($text = "デフォルトです"){
            return $text;
        }elseif($textnumber >= 10){
            return "テキストは" . "$textnumber" . "文字です";
        }else{
            return "テキストは10文字未満です";
        }
    }
}
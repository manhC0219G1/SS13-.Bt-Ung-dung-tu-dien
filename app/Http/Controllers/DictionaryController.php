<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DictionaryController extends Controller
{
    public function show()
    {
        return view('list');
    }

    public function translate1(Request $request)
    {
        $arrEnglish = ["hello", "rain", "red", "blue"];
        $arrVietnam = ["xin_chao", "mua", "do", "xanh"];
        $from = $request->from;
        for ($index = 0; $index < count($arrVietnam); $index++) {
            if ($from == $arrVietnam[$index]) {
                $to = $arrEnglish[$index];
                return view('translate', compact('to', 'from'));
            }
        }
        $to = "Not_found";
        return view('translate', compact('to', 'from'));
    }
}
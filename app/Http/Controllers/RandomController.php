<?php

namespace App\Http\Controllers;

use App\RandomValue;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RandomController extends Controller
{
    public function generate()
    {
        $randvalue = rand();

        $newrandvalue = new Randomvalue;
        $newrandvalue->val = $randvalue;
        $newrandvalue->save();

        $id = Randomvalue::latest()->value('id');

        return view('generate', ['randvalue' => $randvalue, 'randid' => $id]);
    }

    public function retrieve(Request $request)
    {
        $id = $request->id;

        $val = Randomvalue::where('id', $id)->value('val');

        if ($val !== null) {
            $createdat = Randomvalue::where('id', $id)->value('created_at');
        }else{
            $val = "число не найдено";
            $createdat = "число не найдено";
        }

        return view('retrieve', ['val' => $val, 'createdat' => $createdat,]);
    }
}
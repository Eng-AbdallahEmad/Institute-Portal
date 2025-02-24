<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    function getLang(): string
    {
        return app()->getLocale();
    }

    function dataView() {
        $fName_ar = "عبدالله";
        $sName_ar = "عماد";
        $tName_ar = "فهمي";
        $fName_en = "Abdallah";
        $sName_en = "Emad";
        $tName_en = "Fahmy";
        $email = "abdallahe.fahmy22@thic.com";

        return compact('fName_ar', 'sName_ar', 'tName_ar', 'fName_en', 'sName_en', 'tName_en', 'email');
    }

    function exerciseViewModule(Request $request) {
        $lang = $this->getLang();
        $data = $this->dataView();
        $params = $request->route()->parameters();
        $thirdEndPoint = $params['ex_module'] ?? null;

        return view('app.main.student.module.ex_module_one', [
            'firstNameAR' => $data['fName_ar'],
            'secondNameAR' => $data['sName_ar'],
            'thirdNameAR' => $data['tName_ar'],
            'firstNameEN' => $data['fName_en'],
            'secondNameEN' => $data['sName_en'],
            'thirdNameEN' => $data['tName_en'],
            'email' => $data['email'],
            'language' => $lang,
            'exercise' => $params['exercise'],
            'thirdEndPoint' => $thirdEndPoint
        ]);
    }
}

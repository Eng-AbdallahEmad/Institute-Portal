<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
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

    function getLang(): string
    {
        return app()->getLocale();
    }

    // Index View
    function indexView() {
        $data = $this->dataView();
        $lang = $this->getLang();

        return view('app.main.student.index', [
            'firstNameAR' => $data['fName_ar'],
            'secondNameAR' => $data['sName_ar'],
            'thirdNameAR' => $data['tName_ar'],
            'firstNameEN' => $data['fName_en'],
            'secondNameEN' => $data['sName_en'],
            'thirdNameEN' => $data['tName_en'],
            'email' => $data['email'],
            'language' => $lang
        ]);
    }

    // Exams View
    function examsView() {
        $data = $this->dataView();
        $lang = $this->getLang();

        return view('app.main.student.exams', [
            'firstNameAR' => $data['fName_ar'],
            'secondNameAR' => $data['sName_ar'],
            'thirdNameAR' => $data['tName_ar'],
            'firstNameEN' => $data['fName_en'],
            'secondNameEN' => $data['sName_en'],
            'thirdNameEN' => $data['tName_en'],
            'email' => $data['email'],
            'language' => $lang
        ]);
    }

    // Books View
    function booksView() {
        $data = $this->dataView();
        $lang = $this->getLang();

        return view('app.main.student.books', [
            'firstNameAR' => $data['fName_ar'],
            'secondNameAR' => $data['sName_ar'],
            'thirdNameAR' => $data['tName_ar'],
            'firstNameEN' => $data['fName_en'],
            'secondNameEN' => $data['sName_en'],
            'thirdNameEN' => $data['tName_en'],
            'email' => $data['email'],
            'language' => $lang
        ]);
    }

    // Exercises View
    function exercisesView() {
        $data = $this->dataView();
        $lang = $this->getLang();

        return view('app.main.student.exercises', [
            'firstNameAR' => $data['fName_ar'],
            'secondNameAR' => $data['sName_ar'],
            'thirdNameAR' => $data['tName_ar'],
            'firstNameEN' => $data['fName_en'],
            'secondNameEN' => $data['sName_en'],
            'thirdNameEN' => $data['tName_en'],
            'email' => $data['email'],
            'language' => $lang
        ]);
    }

        // Exercise View
        function exerciseView(Request $request) {
            $data = $this->dataView();
            $lang = $this->getLang();
            $params = $request->route()->parameters();
    
            return view('app.main.student.exercise', [
                'firstNameAR' => $data['fName_ar'],
                'secondNameAR' => $data['sName_ar'],
                'thirdNameAR' => $data['tName_ar'],
                'firstNameEN' => $data['fName_en'],
                'secondNameEN' => $data['sName_en'],
                'thirdNameEN' => $data['tName_en'],
                'email' => $data['email'],
                'language' => $lang,
                'exercise' => $params['exercise'],
            ]);
        }
}

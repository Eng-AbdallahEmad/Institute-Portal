<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExamController extends Controller
{
    //
    function getLang(): string
    {
        return app()->getLocale();
    }

    // Exam View
    public function examView(Request $request)
    {
        $lang = $this->getLang();

        if (!$request->has(['subCode', 'examCode'])) {
            return redirect()->route('exams', ['locale' => $lang]);
        }

        $subCode = str_replace(' ', '', $request->query('subCode'));
        $examCode = str_replace(' ', '', $request->query('examCode'));

        if (empty(trim($subCode)) || empty(trim($examCode))) {
            return redirect()->route('exams', ['locale' => $lang]);
        }

        return view('app.main.student.exam', [
            'subCode' => $subCode,
            'examCode' => $examCode
        ]);
    }
}

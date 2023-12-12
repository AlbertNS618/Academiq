<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\Evaluation;

class ExerciseController extends Controller
{
    public function insertSubject() {
        $subject = new Subject;

        $subject->subject_name = 'ENGLISH';
        $subject->major = 'IPS';
        $subject->image_url = '/img/English.png';

        $subject->save();
        dump($subject);
    }

    public function insertEvaluation() {
        $evaluation = new Evaluation;

        $evaluation->evaluation_num = 'Evaluation Test 8';
        $evaluation->evaluation_name = 'Biotech';
        $evaluation->grade = '12th Grade';
        $evaluation->image_url = '/img/Evaluation.png';
        $evaluation->status = 'not completed';
        $evaluation->subject_id = 3;

        $evaluation->save();
        dump($evaluation);
    }

    public function exerciseView() {
        $grades = ['12th grade', '11th grade', '10th grade'];
        $subjects = Subject::all();
        return view('exercise', ['grades' => $grades, 'subjects' => $subjects])->with('login', Auth::user()->name);
    }

    public function evaluationView(Request $request) {
        $subjectId = $request->input('subjectId');
        $grade = $request->input('grade');

        // Retrieve exercises based on subjectId and grade
        $evaluations = Evaluation::where('subject_id', $subjectId)
                        ->where('grade', $grade)
                        ->orderBy('evaluation_num')
                        ->get();

        $subject = Subject::find($subjectId);

        return view('evaluation', ['evaluations' => $evaluations, 'grade' => $grade, 'major' => $subject->major,
        'subject_name' => $subject->subject_name,])->with('login', Auth::user()->name);
    }
}

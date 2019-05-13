<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function get(Request $request)
    {
        $questions = Question::all();

        return response()->json($questions);
    }


    /**
     * @param Request $request
     */
    public function create(Request $request)
    {
        $question = $request->get('question');

        $newQuestion = new Question();
        $newQuestion->question = $question['question'];
        $newQuestion->answer = $question['answer'];
        $newQuestion->save();

    }


    /**
     * @param Request $request
     */
    public function edit(Request $request)
    {
        $question = $request->get('question');

        $editQuestion = Question::where('id',$question['id'])->first();

        $editQuestion->answer = $question['answer'];
        $editQuestion->question = $question['question'];
        $editQuestion->save();

    }


    /**
     * @param $id
     */
    public function destroy($id)
    {
        Question::where('id',$id)->delete();
    }
}

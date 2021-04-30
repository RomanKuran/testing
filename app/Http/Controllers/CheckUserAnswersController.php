<?php

namespace App\Http\Controllers;

use App\Test;
use Illuminate\Http\Request;

class CheckUserAnswersController extends Controller
{
    public function check(Request $request){
        $userAnswers = $request->userAnswers;
        $testGroupId = $request->testGroupId;
        $tests = Test::where('tests_group_id', $testGroupId)->where('is_deleted', 0)->get();
        $correctAnswersCounter = 0;
        foreach ($tests as $key => $test){
            $correctAnswers = json_decode($test->answers, true)['answers'];
            if(isset($userAnswers[++$key])){
                foreach($correctAnswers as $keyCorrectAnswer => $correctAnswer){
                    if($userAnswers[$key] == $correctAnswer){
                        $correctAnswersCounter++;
                    }
                }
            }

        }
        $countAllTests = $tests->count();
        $percentageOfCorrectAnswers = 100 / $countAllTests * $correctAnswersCounter;

        $percentageOfCorrectAnswers=["percentageOfCorrectAnswers"=>$percentageOfCorrectAnswers];
        $percentageOfCorrectAnswers=json_encode($percentageOfCorrectAnswers, JSON_UNESCAPED_UNICODE);
        return $percentageOfCorrectAnswers;
    }
}

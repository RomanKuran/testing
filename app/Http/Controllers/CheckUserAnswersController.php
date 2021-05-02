<?php

namespace App\Http\Controllers;

use App\Test;
use App\UserTestsAnswer;
use App\TestsGroup;
use App\Mail\ToUser\ResultTest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class CheckUserAnswersController extends Controller
{
    public function check(Request $request){
        $userAnswers = $request->userAnswers;
        $testGroupId = $request->testGroupId;
        $tests = Test::where('tests_group_id', $testGroupId)->where('is_deleted', 0)->get();
        $correctAnswersCounter = 0;
        foreach ($tests as $key => $test){
            $correctAnswers = json_decode($test->answers, true)['answers'];
            if(isset($userAnswers[$test->id])){
                foreach($correctAnswers as $keyCorrectAnswer => $correctAnswer){
                    if($userAnswers[$test->id] == $correctAnswer){
                        $correctAnswersCounter++;
                    }
                }
            }

        }
        $countAllTests = $tests->count();
        $percentageOfCorrectAnswers = round((100 / $countAllTests * $correctAnswersCounter), 1);

        $user = Auth::user();

        $userTestAnswer = new UserTestsAnswer();
        $userTestAnswer->user_id = $user->id;
        $userTestAnswer->tests_group_id = $testGroupId;
        $userTestAnswer->answers = json_encode($userAnswers);
        $userTestAnswer->percentage = $percentageOfCorrectAnswers;
        $userTestAnswer->save();

        $testGroup = TestsGroup::where('id', $testGroupId)->first();

        $mail = new ResultTest($testGroup->name, $percentageOfCorrectAnswers);
        Mail::to($user->email)->send($mail);

        $percentageOfCorrectAnswers=["percentageOfCorrectAnswers"=>$percentageOfCorrectAnswers];
        $percentageOfCorrectAnswers=json_encode($percentageOfCorrectAnswers, JSON_UNESCAPED_UNICODE);
        return $percentageOfCorrectAnswers;
    }
}

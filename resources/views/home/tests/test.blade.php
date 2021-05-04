@extends('layouts.app')

@section('content')
    @foreach($tests as $key => $test)
        <div class="test-item">
            <p>{{$test->name}}</p>
            <div>
                @foreach(json_decode($test->tests, true) as $key => $text)
                    <div>
                        <input class="js-radio-test" data_test_group_id="{{$test->tests_group_id}}" data_test_id="{{$test->id}}" name="test_{{$test->id}}" type="radio" value="{{$key}}" id="test_{{$test->id}}_{{$key}}">
                        <label for="test_{{$test->id}}_{{$key}}">{{$key . ' ' . $text}}</label>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach
    <div class="button-send-test-container">
        <button class="btn btn-success js-send-tests">Здати тест</button>
    </div>
@endSection

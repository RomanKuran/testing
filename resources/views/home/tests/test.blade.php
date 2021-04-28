@extends('layouts.app')

@section('content')
    @foreach($tests as $key => $test)
        <div class="test-item">
            <p>{{$test->name}}</p>
            <div>
                @foreach(json_decode($test->tests, true) as $key => $text)
                    <div>
                        <input name="test_{{$test->id}}" type="radio" value="text" id="test_{{$test->id}}_{{$key}}">
                        <label for="test_{{$test->id}}_{{$key}}">{{$key . ' ' . $text}}</label>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach
@endSection

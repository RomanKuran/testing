<div class="card-columns">
    @foreach($groups as $key => $group)
        <a href="{{route('tests', ['groupId' => $group->id])}}">
            <div class="card">
                <div class="card-body text-center">
                    <p class="card-text">{{$group->name}}</p>
                    @if(isset($group->userTestsAnswer[0]))
                        <div class="container-answer-test">Ваш найкращий результат: <p class="answer-test">{{$group->userTestsAnswer[0]->percentage}}%</p></div>
                    @endif
                </div>
            </div>
        </a>
    @endforeach
</div>

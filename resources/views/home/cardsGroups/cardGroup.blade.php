<div class="card-columns">
    @foreach($groups as $key => $group)
        <a href="{{route('tests', ['groupId' => $group->id])}}">
            <div class="card">
                <div class="card-body text-center">
                    <p class="card-text">{{$group->name}}</p>
                </div>
            </div>
        </a>
    @endforeach
</div>

<select class="form-control js-select-tests-group" id="testsGroups" name="tests_group_id">
    @foreach($testsGroups as $key => $testsGroup)
        <option value="{{$testsGroup->id}}">{{$testsGroup->name}}</option>
    @endforeach
</select>

<table class="table table-bordered table-striped js-table-tests" data-table-name="tests">
    <thead>
    <th>id</th>
    <th>name</th>
    <th>tests</th>
    <th>answers</th>
    <th>is_deleted</th>
    </thead>
    <tbody>
    @foreach($tests as $key => $test)
        <tr class="{{$test->is_deleted? 'deleted_fields' : ''}}" data-test-id="{{$test->id}}">
            <td data-test-id="{{$test->id}}" data-name-field="id" class="drag">
                {{ $test->id }}
            </td>
            <td class="drag js-edit-field js-edit-field" data-test-id="{{$test->id}}" data-name-field="name">
                <textarea disabled>{{$test->name}}</textarea>
            </td>
            <td class="drag js-edit-field js-edit-field" data-test-id="{{$test->id}}" data-name-field="tests">
                <textarea disabled>{{$test->tests}}</textarea>
            </td>
            <td class="drag js-edit-field js-edit-field" data-test-id="{{$test->id}}" data-name-field="answers">
                <textarea disabled>{{$test->answers}}</textarea>
            </td>
            <td class="drag js-edit-field" data-test-id="{{$test->id}}" data-name-field="is_deleted">
                <input class="js-delete-test" type="checkbox" value="{{$test->is_deleted}}" {{$test->is_deleted? 'checked' : ''}} >
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

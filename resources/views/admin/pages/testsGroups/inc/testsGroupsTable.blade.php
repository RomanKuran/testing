<table class="table table-bordered table-striped js-table-tests-groups" data-table-name="tests-groups">
    <thead>
    <th>id</th>
    <th>name</th>
    <th>is_deleted</th>
    </thead>
    <tbody>
    @foreach($testsGroups as $key => $testGroup)
        <tr class="{{$testGroup->is_deleted? 'deleted_fields' : ''}}" data-tests-group-id="{{$testGroup->id}}" data-id="{{$testGroup->sort}}">
            <td data-tests-group-id="{{$testGroup->id}}" data-name-field="id" class="drag">
                {{ $testGroup->id }}
            </td>
            <td class="drag js-edit-field" data-tests-group-id="{{$testGroup->id}}" data-name-field="name">
                <textarea disabled>{{$testGroup->name}}</textarea>
            </td>
            <td class="drag js-edit-field" data-tests-group-id="{{$testGroup->id}}" data-name-field="is_deleted">
                <input class="js-delete-tests-group" type="checkbox" value="{{$testGroup->is_deleted}}" {{$testGroup->is_deleted? 'checked' : ''}} >
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

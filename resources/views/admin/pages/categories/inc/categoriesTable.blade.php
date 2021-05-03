<table class="table table-bordered table-striped js-table-categories" data-table-name="categories">
    <thead>
    <th>id</th>
    <th>name</th>
    <th>is_deleted</th>
    </thead>
    <tbody>
    @foreach($categories as $key => $category)
        <tr class="{{$category->is_deleted? 'deleted_category' : ''}}" data-category-id="{{$category->id}}">
            <td data-category-id="{{$category->id}}" data-name-field="id" class="drag">
                {{ $category->id }}
            </td>
            <td class="drag js-edit-field js-edit-field-category" data-category-id="{{$category->id}}" data-name-field="name">
                <textarea disabled>{{$category->name}}</textarea>
            </td>
            <td class="drag js-edit-field-category" data-category-id="{{$category->id}}" data-name-field="is_deleted">
                <input class="js-delete-category" type="checkbox" value="{{$category->is_deleted}}" {{$category->is_deleted? 'checked' : ''}} >
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

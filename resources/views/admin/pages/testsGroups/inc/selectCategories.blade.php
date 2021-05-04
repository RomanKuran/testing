<select class="form-control js-select-category-in-tests-groups" id="category" name="category_id">
    @foreach($categories as $key => $category)
        <option value="{{$category->id}}">{{$category->name}}</option>
    @endforeach
</select>

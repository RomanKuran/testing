<select class="form-control js-select-category" id="categories" name="category_id">
    @foreach($categories as $key => $category)
        <option value="{{$category->id}}">{{$category->name}}</option>
    @endforeach
</select>

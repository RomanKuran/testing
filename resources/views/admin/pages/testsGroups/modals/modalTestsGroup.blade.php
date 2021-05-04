<div class="modal fade" id="modal-create-tests-group">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title" discount-id="">Створити групу тестів</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <div class="inputs">
                    <form action="{{ route('admin_create_tests_group') }}" method="POST" id="js-modal-creat-tests-group">

                        <select class="form-control js-modal-select-category" id="category" name="category_id">
                            @foreach($categories as $key => $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>

                        <div class="form-group">
                            <label for="name">name</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                    </form>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-success js-creat-tests-group">Створити</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Закрити</button>
            </div>
        </div>
    </div>
</div>

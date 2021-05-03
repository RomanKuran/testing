<div class="modal fade" id="modal-create-category">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title" discount-id="">Створити категорію</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <div class="inputs">
                    <form action="{{ route('admin_create_category') }}" method="POST" id="js-creat-category">

                        <div class="form-group">
                            <label for="name">Назва</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>

                    </form>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-success js-creat-category">Створити</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Закрити</button>
            </div>
        </div>
    </div>
</div>

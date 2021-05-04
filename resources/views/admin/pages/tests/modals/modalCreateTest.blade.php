<div class="modal fade" id="modal-create-test">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title" discount-id="">Створити тест</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <div class="inputs">
                    <form action="{{ route('admin_create_test') }}" method="POST" id="js-creat-test">

                        @include('admin.pages.tests.inc.selectCategories')
                        @include('admin.pages.tests.inc.selectTestsGroups')

                        <div class="form-group">
                            <label for="name">Назва</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="tests">tests</label>
                            <textarea name="tests" id="tests" class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="answers">answers</label>
                            <textarea name="answers" id="answers" class="form-control"></textarea>
                        </div>

                    </form>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-success js-creat-test">Створити</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Закрити</button>
            </div>
        </div>
    </div>
</div>

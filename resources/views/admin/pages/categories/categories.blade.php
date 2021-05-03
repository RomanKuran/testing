@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-between container-header">
        <div></div>
        <div>
            <button type="button" class="btn btn-success js-create-category" data-toggle="modal" data-target="#modal-create-category">Створити Категорію</button>
        </div>
    </div>

    <div class="js-services js-table-edit">
        @include('admin.pages.categories.inc.categoriesTable')
    </div>
    @include('admin.pages.categories.modals.modalCreateCategory')
@endSection

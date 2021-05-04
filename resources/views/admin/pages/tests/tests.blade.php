@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-between container-header">
        @include('admin.pages.tests.inc.selectCategories')
        @include('admin.pages.tests.inc.selectTestsGroups')
        <div>
            <button type="button" class="btn btn-success js-create-test" data-toggle="modal" data-target="#modal-create-test">Створити тест</button>
        </div>
    </div>

    <div class="js-services js-table-edit">
        @include('admin.pages.tests.inc.testsTable')
    </div>
    @include('admin.pages.tests.modals.modalCreateTest')
@endSection
@push('scripts')
    <script src="{{ asset('js/admin/tests.js') }}"></script>
@endpush

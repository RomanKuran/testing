@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-between container-header">
        <div>
            @include('admin.pages.testsGroups.inc.selectCategories')
        </div>
        <div>
            <button type="button" class="btn btn-success js-create-tests-groups" data-toggle="modal" data-target="#modal-create-tests-group">Створити групу тестів</button>
        </div>
    </div>

    <div class="js-services js-table-edit">
        @include('admin.pages.testsGroups.inc.testsGroupsTable')
    </div>
    @include('admin.pages.testsGroups.modals.modalTestsGroup')
@endSection
@push('scripts')
    <script src="{{ asset('js/admin/testsGroups.js') }}"></script>
@endpush

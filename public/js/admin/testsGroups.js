/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*******************************************!*\
  !*** ./resources/js/admin/testsGroups.js ***!
  \*******************************************/
$(document).ready(function (e) {
  //http://127.0.0.1:8000/admin/testsGroups - event create tests group
  $("body").on("click", '.js-creat-tests-group', function () {
    var form_data = $("#js-modal-creat-tests-group").serialize();
    createTestsGroup(form_data);
  }); //----
  //http://127.0.0.1:8000/admin/testsGroups - event check select category

  $('body').on('change', '.js-select-category-in-tests-groups', function () {
    var category_id = $(this).val();
    $.ajax({
      url: route_tests_groups_from_category_id,
      type: 'post',
      dataType: 'json',
      data: {
        categoryId: category_id,
        _token: $('meta[name="csrf-token"]').attr('content')
      },
      success: function success(result) {
        $('.js-table-tests-groups').html(result.testsGroups);
      }
    });
  }); //----
  //http://smmproject/admin/socialCategories - event edit fields tests group

  $('body').on('focusout', '.js-edit-field textarea', function () {
    var field_edit = $(this);
    var tests_group_id = field_edit.parent('td').attr('data-tests-group-id');
    var field_name = field_edit.parent('td').attr('data-name-field');
    var value = field_edit.val();
    field_edit.attr('disabled', 'disabled');
    editTestsGroupFields(tests_group_id, field_name, value);
  }); //----
  //http://127.0.0.1:8000/admin/testsGroups - remove disabled attribute from inputs edit

  $("body").on('dblclick', '.js-edit-field input, .js-edit-field textarea', function (e) {
    $(this).removeAttr("disabled");
  }); //----
  //http://127.0.0.1:8000/admin/testsGroups - event delete tests group

  $("body").on("change", '.js-edit-field .js-delete-tests-group', function () {
    var field_delete = $(this);
    var tests_group_id = field_delete.parent('td').attr('data-tests-group-id');
    var field_name = field_delete.parent('td').attr('data-name-field');
    var value = field_delete.is(':checked') ? 1 : 0;
    editTestsGroupFields(tests_group_id, field_name, value);
  }); //----
}); //http://127.0.0.1:8000/admin/testsGroups - function create tests group

function createTestsGroup(form_data) {
  $.ajax({
    type: "POST",
    url: route_create_tests_group,
    dataType: 'json',
    data: {
      data: form_data,
      _token: $('meta[name="csrf-token"]').attr('content')
    },
    success: function success(result) {
      $('.js-table-tests-groups').replaceWith(result.testsGroups);
    },
    error: function error(result) {
      alert(result.responseJSON.message);
    }
  });
} //----
//http://127.0.0.1:8000/admin/testsGroups - function edit fields tests group


function editTestsGroupFields(tests_group_id, field_name, value) {
  $.ajax({
    type: "POST",
    url: route_edit_tests_group,
    dataType: 'json',
    data: {
      testsGroupId: tests_group_id,
      fieldName: field_name,
      value: value,
      _token: $('meta[name="csrf-token"]').attr('content')
    },
    success: function success(result) {},
    error: function error(result) {
      alert(result.responseJSON.error);
    }
  });
} //----
/******/ })()
;
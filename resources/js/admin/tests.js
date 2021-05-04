$(document).ready(function(e) {
    //http://127.0.0.1:8000/admin/tests - select category
    $('body').on('change', '.js-select-category', function() {
        let category_id = $(this).val();
        $.ajax({
            url:route_categories_from_id,
            type:'post',
            dataType:'json',
            data:{
                categoryId:category_id,
                _token: $('meta[name="csrf-token"]').attr('content')
            },
            success:function(result){
                $('.js-select-tests-group').replaceWith(result.selectTestsGroups);
                $('.js-table-tests').html(result.tests);
                // sortServicesSocialCategories();
            }
        });
    });
    //----

    //http://127.0.0.1:8000/admin/tests - select tests groups
    $('body').on('change', '.js-select-tests-group', function() {
        let test_group_id = $(this).val();
        $.ajax({
            url:route_categories_from_id,
            type:'post',
            dataType:'json',
            data:{
                testGroupId:test_group_id,
                _token: $('meta[name="csrf-token"]').attr('content')
            },
            success:function(result){
                // $('.js-select-tests-group').replaceWith(result.selectTestsGroups);
                $('.js-table-tests').html(result.tests);
                // sortServicesSocialCategories();
            }
        });
    });
    //----

    //http://127.0.0.1:8000/admin/tests - remove disabled attribute from inputs edit
    $("body").on('dblclick', '.js-edit-field input, .js-edit-field textarea', function(e) {
        $(this).removeAttr("disabled");
    });
    //----

    //http://127.0.0.1:8000/admin/tests - event edit fields tests
    $('body').on('focusout', '.js-edit-field textarea', function() {
        let field_edit = $(this);
        let test_id = field_edit.parent('td').attr('data-test-id');
        let field_name = field_edit.parent('td').attr('data-name-field');
        let value = field_edit.val();
        field_edit.attr('disabled','disabled');
        editTestFields(test_id, field_name, value);
    });
    //----

    //http://127.0.0.1:8000/admin/tests - event delete tests
    $("body").on("change", '.js-edit-field .js-delete-test', function() {
        let field_delete = $(this);
        let test_id = field_delete.parent('td').attr('data-test-id');
        let field_name = field_delete.parent('td').attr('data-name-field');
        let value = field_delete.is(':checked') ? 1 : 0;
        editTestFields(test_id, field_name, value);
    });
    //----

    //http://127.0.0.1:8000/admin/tests - event create tests
    $("body").on("click", '.js-creat-test', function() {
        let form_data = $("#js-creat-test").serialize();
        createTest(form_data);
    });
    //----
});

//http://127.0.0.1:8000/admin/tests - function edit fields tests
function editTestFields(test_id, field_name, value){
    $.ajax({
        type: "POST",
        url: route_edit_test,
        dataType: 'json',
        data: {
            testId: test_id,
            fieldName: field_name,
            value: value,
            _token: $('meta[name="csrf-token"]').attr('content')
        },
        success: function (result) {

        },
        error: function (result) {
            alert(result.responseJSON.error);
        }
    });
}
//----

//http://127.0.0.1:8000/admin/tests - function create tests
function createTest(form_data){
    $.ajax({
        type: "POST",
        url: route_create_test,
        dataType: 'json',
        data: {
            data: form_data,
            _token: $('meta[name="csrf-token"]').attr('content')
        },
        success: function (result) {
            $('.js-table-categories').replaceWith(result.categories);
            // $(".js-result-message").addClass("js-success-message");
            // setTimeout(function(){ $.when( $(".js-result-message").animate({right: -100}, 500) ); }, 1000);
        },
        error: function (result) {
            // $(".js-result-message").addClass("js-error-message");
            // setTimeout(function(){ $.when( $(".js-result-message").animate({right: -100}, 500) ); }, 1000);
            alert(result.responseJSON.message);
        }
    });
}
//----

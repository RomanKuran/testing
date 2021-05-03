$(document).ready(function(e) {
    //http://127.0.0.1:8000/admin - event create category
    $("body").on("click", '.js-creat-category', function() {
        let form_data = $("#js-creat-category").serialize();
        createCategory(form_data);
    });
    //----

    //http://127.0.0.1:8000/admin - event edit fields categories
    $('body').on('focusout', '.js-edit-field-category input[type=text], .js-edit-field-category textarea', function() {
        let field_edit = $(this);
        let category_id = field_edit.parent('td').attr('data-category-id');
        let field_name = field_edit.parent('td').attr('data-name-field');
        let value = field_edit.val();
        field_edit.attr('disabled','disabled');
        editCategoryFields(category_id, field_name, value);
    });
    //----

    //http://127.0.0.1:8000/admin - remove disabled attribute from inputs edit
    $("body").on('dblclick', '.js-edit-field input, .js-edit-field textarea', function(e) {
        $(this).removeAttr("disabled");
    });
    //----

    //http://127.0.0.1:8000/admin - event delete category
    $("body").on("change", '.js-edit-field-category .js-delete-category', function() {
        let field_delete = $(this);
        let category_id = field_delete.parent('td').attr('data-category-id');
        let field_name = field_delete.parent('td').attr('data-name-field');
        let value = field_delete.is(':checked') ? 1 : 0;
        editCategoryFields(category_id, field_name, value);
    });
    //----
});

//http://127.0.0.1:8000/admin - function create category
function createCategory(form_data){
    $.ajax({
        type: "POST",
        url: route_create_category,
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

//http://127.0.0.1:8000/admin - function edit fields categories
function editCategoryFields(category_id, field_name, value){
    // $(".js-result-message").attr('class','js-result-message');
    // $(".js-result-message").addClass("js-spin-loader");
    $.when( $(".js-result-message").animate({right: 30}, 500) ).done(function( x ) {
        $.ajax({
            type: "POST",
            url: route_edit_category,
            dataType: 'json',
            data: {
                id: category_id,
                fieldName: field_name,
                value: value,
                _token: $('meta[name="csrf-token"]').attr('content')
            },
            success: function (result) {
                $(".js-result-message").addClass("js-success-message");
                setTimeout(function(){ $.when( $(".js-result-message").animate({right: -100}, 500) ); }, 1000);
            },
            error: function (result) {
                $('td[data-category-id='+category_id+'][data-name-field='+field_name+'] textarea').val(result.responseJSON.service_key);
                // $(".js-result-message").addClass("js-error-message");
                // setTimeout(function(){ $.when( $(".js-result-message").animate({right: -100}, 500) ); }, 1000);
                alert(result.responseJSON.error);
            }
        });
    });
}
//----

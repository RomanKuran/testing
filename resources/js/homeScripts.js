$(document).ready(function() {
    $(document).on('click', '.js-send-tests', function (){
        let user_answers = [];
        $( ".js-radio-test:checked" ).each(function( index ) {
            let test_id = $(this).attr('data_test_id');
            let test_answer = $(this).val();
            user_answers[test_id] = test_answer;
        });
        let group_id = $('.js-radio-test:checked').attr('data_test_group_id');
        checkUserAnswers(user_answers, group_id);
        // let tests = $('.js-radio-test:checked');
        // console.log(tests);
    })

    function checkUserAnswers(user_answers, group_id){
        $.ajax({
            type: "POST",
            url: route_check_user_answers,
            dataType: 'json',
            data: {
                userAnswers: user_answers,
                testGroupId: group_id,
                _token: $('meta[name="csrf-token"]').attr('content')
            },
            success: function (result) {
                alert("Ваш бал: "+result.percentageOfCorrectAnswers+" з 100", "Результат тестування");
            }
        });
    }
});

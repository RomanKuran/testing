/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*************************************!*\
  !*** ./resources/js/homeScripts.js ***!
  \*************************************/
$(document).ready(function () {
  $(document).on('click', '.js-send-tests', function () {
    var user_answers = [];
    $(".js-radio-test:checked").each(function (index) {
      var test_id = $(this).attr('data_test_id');
      var test_answer = $(this).val();
      user_answers[test_id] = test_answer;
    });
    var group_id = $('.js-radio-test:checked').attr('data_test_group_id');
    checkUserAnswers(user_answers, group_id); // let tests = $('.js-radio-test:checked');
    // console.log(tests);
  });

  function checkUserAnswers(user_answers, group_id) {
    $.ajax({
      type: "POST",
      url: route_check_user_answers,
      dataType: 'json',
      data: {
        userAnswers: user_answers,
        testGroupId: group_id,
        _token: $('meta[name="csrf-token"]').attr('content')
      },
      success: function success(result) {
        alert("Ваш бал: " + result.percentageOfCorrectAnswers + " з 100", "Результат тестування");
      }
    });
  }
});
/******/ })()
;
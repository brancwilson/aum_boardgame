document.addEventListener('DOMContentLoaded', function() {

    $("document").ready(function() {
        console.log("JS loaded");
        $("#question-text").text(window.localStorage.get('random_question'));
    });

    $("#play-btn").on("click", function() {
        console.log("categories");
        window.location.href = "/pages/categories.php";
    });

    $("#settings-btn").on("click", function() {
        window.location.href = "/pages/configure_game.php";
    });

    $(".category-btn").on("click", function() {
        window.localStorage.set('random_question', null);
        var questionCategory = $(this).val();
        console.log(questionCategory);

        $.ajax({
            url: '/../../phpfunctions/get_question.php',
            type: 'post',
            data: {questionCategory: questionCategory},
            success: function(random_question) {
                window.localStorage.set('random_question', random_question);
                window.location.href = "/pages/question.php";
            }
        })
    });
});
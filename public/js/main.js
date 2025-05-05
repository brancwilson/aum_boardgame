document.addEventListener('DOMContentLoaded', function() {
    var question = document.cookie;

    $("document").ready(function() {
        console.log("JS loaded");
        $("#question-text").text(question.split('@')[0]);
    });

    $("#play-btn").on("click", function() {
        console.log("categories");
        window.location.href = "/pages/categories.php";
    });

    $("#settings-btn").on("click", function() {
        window.location.href = "/pages/configure_game.php";
    });

    $(".category-btn").on("click", function() {
        document.cookie = "";
        var questionCategory = $(this).val();
        console.log(questionCategory);

        $.ajax({
            url: '/../../phpfunctions/get_question.php',
            type: 'post',
            data: {questionCategory: questionCategory},
            success: function(random_question) {
                document.cookie = random_question;
                console.log(random_question);

                window.location.href = "/pages/question.php";
            }
        })
    });

    $("#reveal-answer-btn").on('click', function() {
        $("#question-text").text(question.split('@')[1])
        $(this).hide();
    });
});
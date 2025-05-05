document.addEventListener('DOMContentLoaded', function() {

    $("document").ready(function() {
        console.log("JS loaded");
        var question = document.cookie;
        $("#question-text").text(question);
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
                console.log(random_question[0][1]);
                document.cookie = random_question[0][0];
                window.location.href = "/pages/question.php";
            }
        })
    });
});
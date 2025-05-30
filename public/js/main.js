document.addEventListener('DOMContentLoaded', function() {
    var question = localStorage.getItem('question')
    console.log("COOKIE: " + question);
    $("#done-btn").hide();
    $("#reveal-answer-btn").show();

    $("document").ready(function() {
        console.log("JS loaded");
        $("#question-text").text(question.split('@')[0]);
        console.log("COOKIE: " + question);
    });

    $("#play-btn").on("click", function() {
        console.log("categories");
        window.location.href = "/pages/categories.php";
    });

    $("#settings-btn").on("click", function() {
        window.location.href = "/pages/configure_game.php";
    });

    $(".category-btn").on("click", function() {
        localStorage.setItem("question", "");
        var questionCategory = $(this).val();
        console.log(questionCategory);

        $.ajax({
            url: '/../../phpfunctions/get_question.php',
            type: 'post',
            data: {questionCategory: questionCategory},
            success: function(random_question) {
                localStorage.setItem("question", "");
                localStorage.setItem("question", random_question);
                console.log("COOKIE: " + question);
                console.log(random_question);

                window.location.href = "/pages/question.php";
            }
        })
    });

    $("#reveal-answer-btn").on('click', function() {
        $("#question-text").text(question.split('@')[1])
        console.log("COOKIE: " + question);
        $(this).hide();
        $("#done-btn").show();
    });

    $("#done-btn").on('click', function() {
        window.location.href = "/pages/categories.php";
        localStorage.setItem("question", "");
        console.log("COOKIE: " + question);
    });
});
document.addEventListener('DOMContentLoaded', function() {

    $("document").ready(function() {
        console.log("JS loaded");
    });

    $("#play-btn").on("click", function() {
        console.log("categories");
        window.location.href = "/pages/categories.php";
    });

    $("#settings-btn").on("click", function() {
        window.location.href = "/pages/configure_game.php";
    });

    $(".category-btn").on("click", function() {
        var questionCategory = $(this).val();
        
        $.ajax({
            url: '/../../phpfunctions/get_question.php',
            type: 'post',
            data: {questionCategory: questionCategory},
            success: function(question) {
                window.location.href = "/pages/question.php";
                $("#question-text").text(question);
                alert($que)
            }
        })
    });
});
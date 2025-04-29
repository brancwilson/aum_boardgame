document.addEventListener('DOMContentLoaded', function() {

    $("document").ready(function() {
        console.log("JS loaded");
    });

    $("#play-btn").on("click", function() {
        console.log("categories");
        window.location.href = "/pages/categories.php";
    });

    $("#test-btn").on("click", function() {
        $.ajax({
            url: '/../phpfunctions/functions.php',
            type: 'post',
            data: {},
            success: function() {
                alert("done");
            }
        })
    });

});
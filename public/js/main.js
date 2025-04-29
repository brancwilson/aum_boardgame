document.addEventListener('DOMContentLoaded', function() {

    $("document").ready(function() {
        console.log("JS loaded");
    });

    $("#play-btn").on("click", function() {
        console.log("categories");
        window.location.href = "/pages/categories.php";
    });

});
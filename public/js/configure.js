document.addEventListener('DOMContentLoaded', function() {
    function loadQuestionTables() {
        get_a_questions();
    }

    function get_a_questions() {
        $.ajax({
            url: '/../phpfunctions/get_a_questions.php',
            type: 'get',
            success: function(response) {
                $("#a-questions-table").append("<tr id='questions-table-labels'><td>Question</td><td>Answer</td><td></td></tr>");
                $("#a-questions-table").append(response);
            }
        })
    }

    loadQuestionTables();

     // .on() is used for dynamically added elements, since the DOM is already loaded
     $(document).on("click", ".delete-question-btn", function() {

        var deleteID = (this.id);
        var deleteQuestion = deleteID.split("-");
        console.log(deleteQuestion[1]);

        $.ajax({
            url: '/../../phpfunctions/deletequestion.php',
            type: 'post',
            data: {deleteQuestionID: deleteQuestion[1], deleteQuestionCategory: deleteQuestion[0]},
            success: function() {
                loadQuestionTables();
                console.log("Question deleted!");
            }
        })
});
document.addEventListener('DOMContentLoaded', function() {
    function loadQuestionTables() {
        get_a_questions();
    }

    function get_a_questions() {
        $.ajax({
            url: '/../phpfunctions/get_a_questions.php',
            type: 'get',
            success: function(response) {
                $("#a-questions-table").append("<tr id='questions-table-labels'><td>Question</td><td>Answer</td><td></td></tr>")
                $("#a-questions-table").append(response);
            }
        })
    }

    loadQuestionTables();
});
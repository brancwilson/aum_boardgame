document.addEventListener('DOMContentLoaded', function() {
    function loadQuestionTables() {
        $("#a-questions-table").empty();
        $("#b-questions-table").empty();
        $("#cd-questions-table").empty();
        $("#e-questions-table").empty();
        $("#f-questions-table").empty();
        $("#g-questions-table").empty();
        get_a_questions();
        get_b_questions();
        get_cd_questions();
        get_e_questions();
        get_f_questions();
        get_g_questions();
    }

    function get_a_questions() {
        $.ajax({
            url: '/../phpfunctions/get_a_questions.php',
            type: 'get',
            success: function(response) {
                $("#a-questions-table").append("<tr id='questions-table-labels'><th id='forty'>Question</th><th id='forty'>Answer</th><th id='twenty'>Edit</th></tr>");
                $("#a-questions-table").append(response);
            }
        })
    }
    function get_b_questions() {
        $.ajax({
            url: '/../phpfunctions/get_b_questions.php',
            type: 'get',
            success: function(response) {
                $("#b-questions-table").append("<tr id='questions-table-labels'><th id='forty'>Question</th><th id='forty'>Answer</th><th id='twenty'>Edit</th></tr>");
                $("#b-questions-table").append(response);
            }
        })
    }
    function get_cd_questions() {
        $.ajax({
            url: '/../phpfunctions/get_cd_questions.php',
            type: 'get',
            success: function(response) {
                $("#cd-questions-table").append("<tr id='questions-table-labels'><th id='forty'>Question</th><th id='forty'>Answer</th><th id='twenty'>Edit</th></tr>");
                $("#cd-questions-table").append(response);
            }
        })
    }
    function get_e_questions() {
        $.ajax({
            url: '/../phpfunctions/get_e_questions.php',
            type: 'get',
            success: function(response) {
                $("#e-questions-table").append("<tr id='questions-table-labels'><th id='forty'>Question</th><th id='forty'>Answer</th><th id='twenty'>Edit</th></tr>");
                $("#e-questions-table").append(response);
            }
        })
    }
    function get_f_questions() {
        $.ajax({
            url: '/../phpfunctions/get_f_questions.php',
            type: 'get',
            success: function(response) {
                $("#f-questions-table").append("<tr id='questions-table-labels'><th id='forty'>Question</th><th id='forty'>Answer</th><th id='twenty'>Edit</th></tr>");
                $("#f-questions-table").append(response);
            }
        })
    }
    function get_g_questions() {
        $.ajax({
            url: '/../phpfunctions/get_g_questions.php',
            type: 'get',
            success: function(response) {
                $("#g-questions-table").append("<tr id='questions-table-labels'><th id='forty'>Question</th><th id='forty'>Answer</th><th id='twenty'>Edit</th></tr>");
                $("#g-questions-table").append(response);
            }
        })
    }



    $("#question-create-btn").on("click", function() {
        //event.preventhefault();

        var question = $("#add-question-question").val();
        var answer = $("#add-question-answer").val();
        var category = $("#add-question-category").val();
        console.log("DATA: " + question + "    " + "   " + answer + "  " + category);

        $.ajax({
            url: '/../../phpfunctions/create_question.php',
            type: 'post',
            data: {question: question, answer: answer, category, category},
            success: function() {
                loadQuestionTables();
                $("#add-question-question").empty();
                $("#add-question-answer").empty();
            }
        })
    })

    loadQuestionTables();

        // .on() is used for dynamically added elements, since the DOM is already loaded
        $(document).on("click", ".delete-question-btn", function() {
        var deleteID = (this.id);
        var deleteQuestion = deleteID.split("-");
        console.log(deleteQuestion[1]);

        $.ajax({
            url: '/../../phpfunctions/delete_question.php',
            type: 'post',
            data: {deleteQuestionID: deleteQuestion[1], deleteQuestionCategory: deleteQuestion[0]},
            success: function() {
                loadQuestionTables();
                console.log("Question deleted!");
            }
        })
    });
})
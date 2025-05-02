<?php
    require_once __DIR__ . '/../templates/header.php';
?>
<h1>Configure Questions</h1>
<button id="test-btn">Click me</button>

<div>
    <div class="questions-container">
        <table class="questions-table" id="a-questions-table">

        </table>
    </div>
    <h3>Add Question</h3>
    <form id="add-question-form">
        <table>
            <tr>
                <td>
                    <p>Question: </p>
                </td>
                <td>
                    <input type="text" id="add-question-question">
                </td>
            </tr>
            <tr>
                <td>
                    <p>Answer: </p>
                </td>
                <td>
                    <input type="text" id="add-question-answer">
                </td>
            </tr>
        </table>
    </form>
</div>

<?php require_once __DIR__ . '/../templates/footer.php'; ?>

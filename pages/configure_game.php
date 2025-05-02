<?php
    require_once __DIR__ . '/../templates/header.php';
?>
<h1>Configure Questions</h1>

<div>
    <div class="questions-container">
        <table class="questions-table" id="a-questions-table">

        </table>
    </div>
    <h3>Add Question</h3>
    <form id="add-question-form" action="/../phpfunctions/create_question.php" method="post">
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
            <tr>
                <td>
                    <select name="category" id="add-question-category">
                        <option value="a">A</option>
                        <option value="b">B</option>
                        <option value="cd">C & D</option>
                        <option value="e">E</option>
                        <option value="f">F</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit">Add</button>
                </td>
            </tr>
        </table>
    </form>
</div>

<?php require_once __DIR__ . '/../templates/footer.php'; ?>

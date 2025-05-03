<?php
    require_once __DIR__ . '/../templates/header.php';
?>
<h1>Configure Questions</h1>

<div>
    <div class="questions-container">
        <h2>A Questions</h2>
        <table class="questions-table" id="a-questions-table">

        </table>
        <h2>B Questions</h2>
        <table class="questions-table" id="b-questions-table">

        </table>
        <h2>CD Questions</h2>
        <table class="questions-table" id="cd-questions-table">

        </table>
        <h2>E Questions</h2>
        <table class="questions-table" id="e-questions-table">

        </table>
        <h2>F Questions</h2>
        <table class="questions-table" id="f-questions-table">

        </table>
        <h2>G Questions</h2>
        <table class="questions-table" id="g-questions-table">

        </table>
    </div>
    <hr>
    <h3>Add Question</h3>
    <div id="add-question-container">
        <form id="add-question-form">
                <p>Question: </p>
                <input type="text" id="add-question-question">
            
                <p>Answer: </p>
                <input type="text" id="add-question-answer">

                <p>Category: </p>
                <select name="category" id="add-question-category">
                    <option value="a">A</option>
                    <option value="b">B</option>
                    <option value="cd">CD</option>
                    <option value="e">E</option>
                    <option value="f">F</option>
                    <option value="g">G</option>
                </select>
                <button id="question-create-btn">Add</button>
        </form>
    </div>
</div>

<?php require_once __DIR__ . '/../templates/footer.php'; ?>

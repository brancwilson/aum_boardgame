<?php
    require_once __DIR__ . '/../templates/header.php';
?>
<a href="/../index.php"><- Menu</a>
<h1>Configure Questions</h1>

<div>
    <div id="add-question-container">
        <form id="add-question-form">
            <h3>Add Question</h3>
            <p>Question: </p>
            <input type="text" id="add-question-question">
        
            <p>Answer: </p>
            <input type="text" id="add-question-answer">

            <p>Category: </p>
            <select name="category" id="add-question-category">
                <option value="a">A - Taylor Center</option>
                <option value="b">B - Business</option>
                <option value="cd">CD - Athletics</option>
                <option value="e">E - Physical Arts</option>
                <option value="f">F - Humanities</option>
                <option value="g">G - Healthcare/Medicine</option>
            </select>
            <button id="question-create-btn">Add</button>
        </form>
    </div>
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
    
</div>

<?php require_once __DIR__ . '/../templates/footer.php'; ?>

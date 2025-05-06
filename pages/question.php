<?php
    require_once __DIR__ . '/../templates/header.php';
?>

<link rel="stylesheet" href="/public/css/question_style.css">
<div id="question-title">
    <h1>Question</h1>
</div>
<div id="question-container">
    <p id="question-text"></p>
</div>
<div id="reveal-answer-container">
    <button id="reveal-answer-btn">Show Answer</button>
    <button id="done-btn">Done</button>
</div>


<?php require_once __DIR__ . '/../templates/footer.php'; ?>
<?php
    require_once __DIR__ . '/../templates/header.php';
?>
<a href="/../index.php"><- Menu</a>

<div id="categories-menu">
    <div id="category-title">
         <h1>Categories</h1>
    </div>

    <div class="category-row">
        <button class="category-btn" value="a">A</button>
        <button class="category-btn" value="b">B</button>
        <button class="category-btn" value="cd">C & D</button>
    </div>
    <div class="category-row">
        <button class="category-btn" value="f">E</button>
        <button class="category-btn" value="e">F</button>
        <button class="category-btn" value="g">G</button>
    </div>
</div>

<?php require_once __DIR__ . '/../templates/footer.php'; ?>
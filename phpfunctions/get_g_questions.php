<?php

require_once __DIR__ . '/../config/config.php';

$db_host = DB_HOST;
$db_port = DB_PORT;
$db_name = DB_NAME;
$db_username = DB_USER;
$db_password = DB_PASS;


try {
    $dsn = "pgsql:host=" . DB_HOST . ";port=" . DB_PORT . ";dbname=" . DB_NAME . ";";
    // make a database connection
    $pdo = new PDO($dsn, DB_USER, DB_PASS, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

    if ($pdo) {
        error_log(">>>>>>>>>> LOADING A QUESTIONS...");
        $data = $pdo->query("SELECT * FROM g_questions")->fetchAll();
        foreach ($data as $row => $key) {
            echo("
            <tr>
                <td>".$key['question']."</td>
                <td>".$key['answer']."</td>
                <td><button class='delete-question-btn' id='g_questions-".$key['question_id']."'>Delete</button></td>
            </tr>
            ");
    }
        
    } else {
        echo "pdo fail...";
    }
} catch (PDOException $e) {
    die($e->getMessage());
} finally {
    if ($pdo) {
        $pdo = null;
    }
}

?>
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
        error_log(">>>>GET RANDOM QUESTION...");
        if ($_POST['questionCategory'] == 'a') {
            error_log(">>>>>> GET A_QUESTIONS QUESTION");
            $sql = "
                SELECT question, answer
                FROM a_questions
                ORDER BY RANDOM()
                LIMIT 1;
            ";
            $question = $pdo->query($sql)->fetchAll();
            error_log(">>>>>>>>>Question: " . $question[0][0]);
            echo $question[0][0];
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
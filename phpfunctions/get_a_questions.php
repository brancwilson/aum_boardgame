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
        $sql = "SELECT * FROM a_questions";

        $data = $pdo->query($sql)->fetchAll();
        foreach ($data as $row => $key) {
            echo("
            <tr>
                <td>".$key['question']."</td>
                <td>".$key['answer']."</td>
                <td><button class='edit-question-btn' id='edit-question".$key['question_id']."'>Edit</button></td>
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
<?php

require_once __DIR__ . '/../config/config.php';

$db_host = DB_HOST;
$db_port = DB_PORT;
$db_name = DB_NAME;
$db_username = DB_USER;
$db_password = DB_PASS;

try {
    $dsn = "pgsql:host=$db_host;port=5432;dbname=$db_name;";
    // make a database connection
    $pdo = new PDO($dsn, $db_username, $db_password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    

    if ($pdo) {
        error_log(">>>>>>>>>>>>>>>>> PDO TRUE");
        if (isset($_POST["question"]) && isset($_POST["answer"]) && isset($_POST["category"])) {
            error_log(">>>>>>>>DATA IS SET");
            $question = $_POST['question'];
            $answer = $_POST['answer'];
            $category = $_POST['category'] . "_questions";

            error_log(">>>>> " . $category . " ---- " . $question . " ---- " . $answer);
            $sql = "INSERT INTO a_questions (answer, question) VALUES (:answer, :question);";
            error_log(message: "SQL STATEMENT: " . $sql);
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                ':category' => $category,
                ':answer' => $answer,
                ':question' => $question
            ]) or die(error_log($stmt->errorInfo(), true));
        }
    
    } else {
        echo "pdo fail...";
    }
} catch (PDOException $e) {
    echo("Error at create_question.php");
    die($e->getMessage());
} finally {
    if ($pdo) {
        $pdo = null;
    }
}

?>
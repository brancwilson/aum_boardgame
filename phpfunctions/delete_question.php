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
        if (isset($_POST["deleteQuestionCategory"]) & isset($_POST["deleteQuestionID"])) {

            $deleteQuestionCategory = $_POST["deleteQuestionCategory"];
            $deleteQuestionID = $_POST["deleteQuestionID"];

            if ($deleteQuestionCategory == 'a_questions') {
                $sql = "DELETE FROM a_questions WHERE question_id = ?";
                $stmt = $pdo->prepare($sql);
                error_log("DELETE FROM " . $deleteQuestionCategory . " WHERE question_id = " . $deleteQuestionID);
                $stmt->execute([$deleteQuestionID]);
            } else if ($deleteQuestionCategory == 'b_questions') {
                $sql = "DELETE FROM b_questions WHERE question_id = ?";
                $stmt = $pdo->prepare($sql);
                error_log("DELETE FROM " . $deleteQuestionCategory . " WHERE question_id = " . $deleteQuestionID);
                $stmt->execute([$deleteQuestionID]);
            } else if ($deleteQuestionCategory == 'cd_questions') {
                $sql = "DELETE FROM cd_questions WHERE question_id = ?";
                $stmt = $pdo->prepare($sql);
                error_log("DELETE FROM " . $deleteQuestionCategory . " WHERE question_id = " . $deleteQuestionID);
                $stmt->execute([$deleteQuestionID]);
            } else if ($deleteQuestionCategory == 'e_questions') {
                $sql = "DELETE FROM e_questions WHERE question_id = ?";
                $stmt = $pdo->prepare($sql);
                error_log("DELETE FROM " . $deleteQuestionCategory . " WHERE question_id = " . $deleteQuestionID);
                $stmt->execute([$deleteQuestionID]);
            } else if ($deleteQuestionCategory == 'f_questions') {
                $sql = "DELETE FROM f_questions WHERE question_id = ?";
                $stmt = $pdo->prepare($sql);
                error_log("DELETE FROM " . $deleteQuestionCategory . " WHERE question_id = " . $deleteQuestionID);
                $stmt->execute([$deleteQuestionID]);
            } else if ($deleteQuestionCategory == 'g_questions') {
                $sql = "DELETE FROM g_questions WHERE question_id = ?";
                $stmt = $pdo->prepare($sql);
                error_log("DELETE FROM " . $deleteQuestionCategory . " WHERE question_id = " . $deleteQuestionID);
                $stmt->execute([$deleteQuestionID]);
            }
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
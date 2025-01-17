<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    require_once "dbh.inc.php";

    $query = "INSERT INTO comments(name, email, phone, message) VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute([
        $_POST["name"],
        $_POST["email"],
        $_POST["phone"],
        $_POST["message"]
    ]);

    header("Location: ../contact.php");
} else {
    header("Location: ../contact.php");
}
?>

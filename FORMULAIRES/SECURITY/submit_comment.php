<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = strip_tags($_POST['name']);
    $comment = strip_tags($_POST['comment'], '<b><i><u><em><strong><p><br>');

    $name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
    $comment = htmlspecialchars($comment, ENT_QUOTES, 'UTF-8');

    if (!isset($_SESSION['comments'])) {
        $_SESSION['comments'] = [];
    }

    $_SESSION['comments'][] = [
        'name' => $name,
        'comment' => $comment
    ];
}

header('Location: commentindex.php');
exit();

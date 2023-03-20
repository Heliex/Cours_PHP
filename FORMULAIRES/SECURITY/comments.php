<?php
session_start();

if (isset($_SESSION['comments'])) {
    echo '<ul>';
    foreach ($_SESSION['comments'] as $comment) {
        echo '<li><strong>' . $comment['name'] . '</strong> : ' . nl2br($comment['comment']) . '</li>';
    }
    echo '</ul>';
}

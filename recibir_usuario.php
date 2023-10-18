<?php
$userId = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($userId > 0) {
    $rutaCarpeta = 'PDF/' . $userId;
    header('Location: '.$rutaCarpeta);
} else {
    echo 'ID de usuario no válido.';
}
?>
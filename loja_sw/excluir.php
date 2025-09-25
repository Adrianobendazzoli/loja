<?php
    require 'conexao.php';

    $id = $_GET['id'];

    $sql = "DELETE FROM produtos WHERE id = :id";
    
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id);
    
     if ($stmt->execute()) {
     header("Location: sucesso.php");
    exit;
    } else {
      header("Location: numdeu.php");
    exit;
    }
?>
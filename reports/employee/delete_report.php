<?php
require '../../db.php';
$id = $_GET['id'];
$sql = 'DELETE FROM dqreports_tbl WHERE id=:id';
$statement = $connection->prepare($sql);
if ($statement->execute([':id' => $id])) {
  header("Location:reports");
}
<?php
$id = $_GET['id'];
$dbc = mysqli_connect('localhost', 'root', '', '22320_db') or die ('Error connect.');
$query = "DELETE FROM nieuwsbrief WHERE id = '$id'";
$result = mysqli_query($dbc,$query) or die ('Error deleting.');
header("location: beheren.php");
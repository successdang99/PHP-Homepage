<?php

require 'dbh.inc.php';

$result = array();
$message = isset($_POST['message']) ? $_POST['message'] : null;
$from = isset($_POST['from']) ? $_POST['from'] : null;

if (!empty($message) && !empty($from)) {
    $sql = "INSERT INTO `chat` (`userName`,`message`,`fromUser`) VALUES ('".$_SESSION['username']."','".$message."','".$from."')";
    $result['send_status'] = $db->query($sql);
}

//write message
$start = isset($_GET['start']) ? intval($_GET['start']) : 0;
$items = $db->query("SELECT * FROM `chat` WHERE `chatId` >". $start); 
while ($row = $items->fetch_assoc()) {
    $result['items'][] = $row;
}

$db->close();

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

echo json_encode($result);
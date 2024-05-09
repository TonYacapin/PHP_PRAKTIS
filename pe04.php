<?php
$conn = new mysqli("localhost", "root", "", "guestbookniton");
if ($conn->connect_error) die('Could not connect: ' . $conn->connect_error);

$result = $conn->query("SELECT `index`, `guestname`, `message`, `dateposted` FROM messages");
echo $result->num_rows > 0 ? array_reduce($result->fetch_all(), fn($a, $b) => $a . implode('<br>', $b) . "<br><br>") : "No records found";

$conn->close();
?>

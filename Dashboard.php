<?php
session_start();
if (!isset($_SESSION['name'])) {
    header("Location: login.php");
    exit;
}
?>

<h2>Welcome, <?php echo $_SESSION['name']; ?>!</h2>
<a href="logout.php">Logout</a>

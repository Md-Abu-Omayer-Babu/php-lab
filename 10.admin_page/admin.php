<?php
    session_start();
    if (!isset($_SESSION['admin_username'])) {
        header("Location: login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html>
<head><title>Admin Panel</title></head>
<body>
    <h2>Welcome to the Admin Panel, <?php echo htmlspecialchars($_SESSION['admin_username']); ?>!</h2>
    <p>This is a demo page.</p>

    <form action="logout.php" method="post" style="display:inline;">
        <button type="submit">Logout</button>
    </form>
</body>
</html>

<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard page</title>
    <link rel="stylesheet" href="dashboardpage.css">
</head>
<body>
<img src="Logo/tasktrek-high-resolution-logo-transparent.png" alt="Tasktrek" class="logo">
<div class="content">
            <h1>TaskTrek</h1>
            <h2>Hello , <?php echo"{$_SESSION['username']}"; ?></h2>
            <p>Clear Vision, Streamlined Work Manage projects with Task Trek.</p>
            <p>Your daily tasks made simple...</p>
</div>
           
            
</body>
</html>
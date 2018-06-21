<?php
include('session.php');
?>

<html>

<head>
    <title>Welcome Page</title>

</head>

<body bgcolor = "#f0f8ff">

<div align = "center">
    <div style = "width:300px; border: solid 1px blue; " align = "left">
        <div style = "background-color:#6495ed; color:white; padding:3px;"><b>Welcome <?php echo $login_session; ?></b></div>

        <div style = "margin:30px">

            <h3><a href = "logout.php">Log Out</a></h3>

        </div>

    </div>

</div>

</body>
</html>

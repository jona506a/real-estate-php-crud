<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>XXX</title>
</head>
<body>

<nav>
    <a <?= $sActive == 'frontpage'?'class="active" ':null; ?>href="frontpage.php">Frontpage</a>
    <a <?= $sActive == 'login'?'class="active" ':null; ?>href="login.php">Login</a>
    <div class="dropdown">
        <button class="dropbtn">Sign up</button>
            <div class="dropdown-content">
                <a href="signup-user.php">Sign up as user</a>
                <a href="signup-agent.php">Sign up as agent</a>
            </div>
    </div> 
    <a <?= $sActive == 'properties'?'class="active" ':null; ?>href="properties.php">Properties</a>

   
</nav>
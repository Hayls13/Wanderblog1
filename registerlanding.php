<?php
?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="/bootstrap/bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>


<form action="register.php" id="form" method="post" name="login">

    <h2>Register</h2>

    <label for="fname" class="ui-hidden-accessible">First name:</label>
    <input id="fname" name="fname" placeholder="first name" type="text"><br>
    <label for="lname" class="ui-hidden-accessible">Last name:</label>
    <input id="lname" name="lname" placeholder="last name" type="text"><br>
    <label for="email" class="ui-hidden-accessible">Email address:</label>
    <input id="email" name="email" placeholder="email" type="text"><br>
    <label for="pswd" class="ui-hidden-accessible">Password:</label>
    <input id="pword" name="pword" placeholder="password" type="password">
    <br>
    <label class="reader">
        <input type="radio" name="usertype" value="reader" checked> Reader
    </label>
    <label class="author">
        <input type="radio" name="usertype" value="author"> Author
    </label>

    <br><input type="submit" value="enter">
</form>

</body>
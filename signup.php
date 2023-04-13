<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <title>Sign Up</title>
    <link rel="icon" href="logo.png">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;900&display=swap');

        input {
            caret-color: red;
        }

        body {
            margin: 0;
            width: 100vw;
            height: 100vh;
            background: #ecf0f3;
            display: flex;
            align-items: center;
            text-align: center;
            justify-content: center;
            place-items: center;
            overflow: hidden;
            font-family: poppins;
        }

        .container {
            position: relative;
            width: 350px;
            height: 760px;
            border-radius: 20px;
            padding: 20px;
            box-sizing: border-box;
            background: #ecf0f3;
            box-shadow: 14px 14px 20px #cbced1, -14px -14px 20px white;
        }

        .logo {
            height: 50px;
            width: 120px;
            background: url("logo.png");
            background-size: cover;
            margin: auto;
            margin-top: 10px;

        }

        .title {
            margin-top: 10px;
            font-weight: 800;
            font-size: 25px;
            color: #1DA1F2;
            letter-spacing: 1px;
        }

        .inputs {
            text-align: left;
            margin-top: 10px;
        }

        label,
        input,
        button,
        select {
            display: block;
            width: 100%;
            padding: 0;
            border: none;
            outline: none;
            box-sizing: border-box;
        }

        label {
            margin-bottom: 4px;
            font-family: sans-serif;
            font-size: 14px;
        }

        label {
            margin-top: 12px;
        }

        input::placeholder {
            color: gray;
        }

        input,
        select {
            background: #ecf0f3;
            padding: 10px;
            padding-left: 20px;
            height: 35px;
            font-size: 14px;
            border-radius: 10px;
            box-shadow: inset 6px 6px 6px #cbced1, inset -6px -6px 6px white;
        }

        button {
            color: white;
            margin-top: 30px;
            background: #1DA1F2;
            height: 40px;
            border-radius: 20px;
            cursor: pointer;
            font-weight: 900;
            box-shadow: 6px 6px 6px #cbced1, -6px -6px 6px white;
            transition: 0.5s;
        }

        button:hover {
            box-shadow: none;
        }


        h1 {
            position: absolute;
            top: 0;
            left: 0;
        }

        a {
            color: #000;
            font-family: sans-serif;
            text-align: right;
        }

        h5 {
            color: #000;
            font-family: sans-serif;
        }
    </style>
</head>

<body>


    <div class="container">
        <div class="title">SIGN UP</div>
        <div class="inputs">
            <form action="signup.php" method="post" enctype="multipart/form-data">
                <label>First Name</label>
                <input type="text" name="fname" placeholder="Enter first name" required>
                <label>Last Name</label>
                <input type="text" name="lname" placeholder="Enter last name" required>
                <label>E-mail</label>
                <input type="email" name="mail" placeholder="Enter email" required>
                <label>Enter Password</label>
                <input type="password" name="pass" placeholder="Enter password" required>
                <label>Retype Password</label>
                <input type="password" name="repass" placeholder="Retype password" required>
                <button type="submit" name="submit">Sign Up</button>
                <h5 style="text-align: center;">Already have account?&ensp;&ensp;<a href="login.html" style="color: blue;">login</a></h5>
            </form>
        </div>
    </div>
</body>

</html>
 -->

<?php
include 'dbconnect.php';

if (isset($_POST["submit"])) {

    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $mail = $_POST["mail"];
    $pass = $_POST["pass"];
    $repass = $_POST["repass"];

    $verifyPassword = strlen($pass);

    if ($verifyPassword >= 8) {
        if ($pass === $repass) {

            $sql = "INSERT INTO register(firstname,lastname,email,password) VALUES('$fname','$lname','$mail','$pass');";

            if ($conn->query($sql) === TRUE) {
                echo "<script>alert ('DATA INSERTED SUCESSFULLY')</script>";
                header("Location : ./login.html");               
            } else {
                echo "Error: " . $conn->$error;
            }
            $conn->close();

        } else {
            echo "<script>alert ('Password is not match')</script>";
        }
    } else {
        echo "<script>alert ('Password is at least 8 character')</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            overflow: hidden;
        }

        .background-container {
            position: fixed;
            width: 100%;
            height: 100%;
            background: url('iphone.jpg') center/cover no-repeat;
            z-index: -1; 
        }

        .container {
            position: relative;
            width: 200%;
            max-width: 650px;
            height: 100%;
            background: #0c0c0c;
            padding: 60px 40px;
            box-sizing: border-box;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(15, 15, 15, 0.5);
            color: #fff;
            text-align: left; 
        }

        .logo-container {
            text-align: center; 
        }

        h1 {
            margin: 20px 0 0; 
            font-size: 28px;
            font-weight: bold;
            color: #ff0000;
            font-family: 'Cosmic Octo', sans-serif;
        }

        h2 {
            margin: 15px 0;
            font-size: 20px;
            font-weight: bold;
            color: #fff;
        }

        p {
            margin: 10px 0; 
            color: #fff;
        }

        input {
            width: 100%;
            padding: 15px;
            margin-bottom: 15px;
            border: none;
            border-radius: 5px;
            background: rgba(255, 255, 255, 0.1);
            color: #fff;
        }

        button {
            width: 100%;
            padding: 15px;
            background: #fff;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            font-weight: bold;
            display: inline-block;
        }

        .continue-btn {
            width: 100%;
            padding: 15px;
            background: #fff;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            font-weight: bold;
            display: inline-block;
        }

        .social-icons {
            display: flex;
            justify-content: space-evenly;
            margin-top: 20px;
        }

        .social-icon {
            font-size: 24px;
            color: #fff;
            cursor: pointer;
            margin-right: 5px; 
        }

        .social-icon a {
            color: #fff; 
            text-decoration: none; 
        }

        .signup {
            margin-top: 20px;
            display: flex;
            align-items: center;
            justify-content: center; 
            text-align: center;
        }

        .signup p {
            margin: 0 10px 0 0;
        }

        .signup a {
            color: #fff;
            font-weight: bold;
            text-decoration: underline;
            
            
        }

        .logo {
            width: 300px; 
            height: auto;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="background-container"></div>
    <div class="container">
        <div class="logo-container">
            <img src="logo_logo.png" alt="Logo" class="logo">
        </div>
        <h1>PHIL TECH RETAIL</h1>
        <h2>Login</h2>
        <p>Let the shopping begin!</p>
        <br>
        <form action="#">
            <input type="email" placeholder="Email">
            <br> 
            <br>
            <input type="password" placeholder="Password">
            <button type="submit" class="continue-btn">Sign In</button>
            <br>
            <br>
            <p><button class="continue-btn" type="button">Continue with email</button></p>
        </form>
        <div class="signup">
            <p>Create an account?</p>
            <a href="#" style="color: #fff; font-weight: bold;">Sign Up?</a>
        </div>
        <div class="social-icons">
            <div class="social-icon"><a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook"></i></a></div>
            <div class="social-icon"><a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a></div>
            <div class="social-icon"><a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></div>
        </div>
    </div>
</body>
</html>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration System</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body, html{
            width:100%;
            height:100%;
            font-family:'Poppins', sans-serif;
            overflow:hidden;
        }

        /* FULL IMAGE BACKGROUND */
        .hero{
            width:100%;
            height:100vh;
            background: url("assets/ne.png") no-repeat center center;
            background-size: cover;
            position:relative;
            display:flex;
            align-items:center;
            justify-content:flex-start;
        }

        /* DARK LAYER ON TOP (so text looks nice) */
        .hero::before{
            content:"";
            position:absolute;
            inset:0;
            background: rgba(0,0,0,0.55);
            backdrop-filter: blur(1px);
            z-index:1;
        }

        /* LEFT CONTENT */
        .left-content{
            position:relative;
            z-index:2;
            padding-left:70px;
            max-width:600px;
        }

        .title{
            font-size:15px;
            letter-spacing:3px;
            text-transform:uppercase;
            color: rgba(255,255,255,0.75);
            margin-bottom:12px;
        }

        .main-text{
            font-size:50px;
            font-weight:700;
            color:#fff;
            line-height:1.1;
            margin-bottom:18px;
            text-shadow: 0 10px 30px rgba(0,0,0,0.6);
        }

        .sub-text{
            font-size:16px;
            color: rgba(255,255,255,0.80);
            margin-bottom:30px;
            max-width:480px;
        }

        /* LOGIN BUTTON */
        .btn-login{
            display:inline-flex;
            align-items:center;
            gap:10px;
            padding:14px 36px;
            border-radius:14px;
            font-size:16px;
            font-weight:600;
            text-decoration:none;
            color:#fff;
            background: linear-gradient(135deg, #ffcc00, #ff7b00);
            box-shadow: 0 15px 40px rgba(255, 140, 0, 0.35);
            transition: all 0.3s ease;
            border: 1px solid rgba(255,255,255,0.12);
        }

        .btn-login:hover{
            transform: translateY(-3px) scale(1.02);
            box-shadow: 0 20px 60px rgba(255, 140, 0, 0.55);
        }

        /* ABOUT US CORNER LINK */
        .about-link{
            position:absolute;
            bottom:25px;
            right:30px;
            z-index:2;
            font-size:14px;
        }

        .about-link a{
            text-decoration:none;
            color: rgba(255,255,255,0.85);
            padding:10px 16px;
            border-radius:12px;
            background: rgba(255,255,255,0.08);
            border: 1px solid rgba(255,255,255,0.15);
            backdrop-filter: blur(10px);
            transition: 0.3s ease;
        }

        .about-link a:hover{
            background: rgba(255,255,255,0.18);
            color:#fff;
        }

        /* RESPONSIVE */
        @media(max-width:768px){
            .left-content{
                padding-left:30px;
                padding-right:20px;
            }

            .main-text{
                font-size:38px;
            }

            .about-link{
                right:15px;
                bottom:15px;
            }
        }
    </style>
</head>

<body>

    <div class="hero">
        <div class="left-content">
            <div class="title">STUDENT REGISTRATION SYSTEM</div>
            <div class="main-text">Online Registration Portal</div>
            <div class="sub-text">
                Register, manage, and track your academic registration easily.
            </div>

            <a class="btn-login" href="login.php">
                Login
                <span style="font-size:18px;">→</span>
            </a>
        </div>

        <div class="about-link">
            <a href="aboutus.php">About Us</a>
        </div>
    </div>

</body>
</html>

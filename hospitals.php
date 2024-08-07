<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> 
    <style>
         body {
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;

            margin: 0;
            padding: 0;
           background-image: url("jk.jpg");
           background-repeat: no-repeat;
            background-size: cover;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            display: flex; 
            justify-content: space-around; 
            align-items: center; 
            flex-direction: column;
            margin-top: 7%;
        }
        .box {
            background-color: rgb(88, 142, 236);
            height: 100px;
            width: 350px;
            color: white;
            border-radius: 5px; 
            border: white;
            border-top: 100px rgb(0, 0, 0);
            position: relative; 
            display: flex; 
            align-items: center; 
            transition: background-color 0.3s, transform 0.3s;
            margin-right: 0;
            margin-bottom: 20px; 
        }

        .box h2{
            align-content: center; 
            padding-left: 20px;
        }
        .icon {
            margin-right: 10px; 
            padding: 10px;
            padding-left: 25px;
            font-size: 48px; 
            color: white; 
        }
        .box:hover {
            background-color: rgba(0, 0, 0, 0.7);
            transform: scale(1.05); 
        }
        @media screen and (max-width: 600px) {
            .container {
                flex-direction: column;
            }
            .box {
                margin-right: 0;
                margin-bottom: 35px; 
            }
        }
        .navbar {
        display: flex;
       
    }
    
    .navbar a {
        color: black;
        text-decoration: none;
        margin-top: 20px;
        margin-left: 20px;
        margin-left: 20px;
    }
    </style>
</head>
<body>
    <header>
        <nav class="navbar">
            <a href="index.php"  style="color: white; float: left;margin-top: 10px; ">Back</a>
        </nav>
    </header>
    <h1 style="text-align: center;padding-top:5%;color:rgb(69, 135, 176);margin-top: -20px;">HOSPITALS</h1>
    <div class="container">
    <a href="search.php" style="text-decoration: none;">
        <div class="box">
            <i class="fas fa-hospital-user icon"></i> 
            <h2 style="text-align: center">View Patient Details</h2>
        </div>
        </a>
        <a href="downloadfile.php" style="text-decoration: none;">
        <div class="box">
            <i class="fas fa-syringe icon"></i> 
            <h2 style="text-align: center">See Patient Medical History</h2>
        </div>
        </a>
    </div>
</body>
</html>

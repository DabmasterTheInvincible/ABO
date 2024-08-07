<!DOCTYPE html>
<html>
<head>
    <title>View Medical History</title>
    <style>
        body
        {
            background-image: url("p3.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            justify-content: center;
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
        .dwnfile
        {
            color: white;
            margin-top: 150px;
        }
        .navbar {
        display: flex;
        align-items: center;
        justify-content: space-between;
        height: 63px;
        padding: 16px 48px;
    }

    .navbar a {
        color: white;
        text-decoration: none;
    }

    .navbar__menu_container {
        display: flex;
        gap: 17px;
    }

    .navbar__menu_container .user_icon {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 25px;
        width: 25px;
        border-radius: 100%;
        border: solid 1px white;
        display: none;
    }

    @media only screen and (max-width: 600px) {
        .navbar__menu_container .user_icon {
            display: flex;
        }
        .link {
            display: none;
        }
    }
    </style>
</head>
<body>
    <header>
        <nav class="navbar">
            <a href="index.php">Back</a>
            <div class="navbar__menu_container">
                        <a href="signIn.php" class="link">Login</a>
                        <a href="loginpage.php" class="link">Sign up</a>
                        <a href="#" class="user_icon">
                            <i class="fas fa-user"></i>
                        </a>     
               </div>
        </nav>
    </header>
    <center>
        <div class="dwnfile">
            <h2>View Medical History</h2>
            <br>
            <br>
             <center><form method="post" action="download.php">
                <label for="name">Patient's Name:</label>
                <input type="text" id="name" name="name" required><br><br>
                <label for="phone">Patient's Phone:</label>
                <input type="text" id="phone" name="phone" required><br><br><br><br>
                <button type="submit" name="submit">Click on submit</button></center> 
            </form>
           </center>
        </div>   
</body>
</html>

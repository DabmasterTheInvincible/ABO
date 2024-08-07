<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Registration </title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url("dr.jpg");
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .content {
            max-width: 350px;
            margin-right: 20px;
            padding: 10px;
            color: white;
            margin-left: 30px;
        }
        .container {
            max-width: fit-content;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-height: fit-content;
        }
        .container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            font-weight: bold;
        }
        .form-group input[type="text"],
        .form-group input[type="email"],
        .form-group input[type="tel"],
        .form-group input[type="password"],
        .form-group textarea {
            width: 100%;
            padding: 8px;
            border-radius: 3px;
            border: 0px;
            border-bottom: 2px solid #ccc;
            box-sizing: border-box;
        }

        .form-group input[type="number"] {
            width: calc(100% - 18px);border: 0px;
            border-bottom: 2px solid #ccc;
            box-sizing: border-box;height: 35px;

        }
        .form-group input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
        }
        .form-group input[type="submit"]:hover {
            background-color: #0056b3;
        }
        li p
        {
            color: white;
            font-size: larger;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-weight: 100;
        }
        li h1
        {
            font-weight: 400; font-size: xx-large;
        }
        @media (max-width: 768px) {
            .content, .container {
                max-width: 100%;
                margin-right: 0;
            }
            .content {
                margin-bottom: 20px; height: 750px;
            }
            body {
                flex-direction: column;
            }
            .oneline div
            {
                flex: 1;
            }
            .sex
            {
                flex: 2 1 auto;
            margin-left: 0;
            }
            .sex label {
            display: block;
        }

        .sex input[type="radio"] {
            margin-right: 5px;
        }
        }
    </style>
</head>
<body>
    <div class="content">
        <h1 style="color: white;">ABO <br><span style="color: black;">The Smart Ambulance System</span></h1>
        <ul style="list-style: none;">
            <li><h2 style="color:black">Patient Priority</h2><p>Urgent cases receive top priority with ABO. Our system dynamically adjusts the queue, ensuring that those in critical need receive the help they deserve first.</p></li>
            <li><h2 style="color:black">Secure Information</h2><p>Rest assured, patient data is treated with the utmost security. Information zips safely between hospitals and ambulances, guarded like top-secret messages, ensuring confidentiality and privacy.</p></li>
        </ul>
    </div>
    <div class="container">
        <h2>Patient Registration</h2>
        <form action="reg3.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="Name">Name: <span style="color: red;">*</span></label>
                <input type="text" id="Name" name="Name" required>
            </div>
            <div class="form-group" class="oneline" style="display: flex; gap: 20px;">
                <div style="flex: 1;">
                    <label for="phoneNumber">Phone Number: <span style="color: red;">*</span></label>
                    <input type="tel" id="phoneNumber" name="phoneNumber" required>
                </div>
                <div style="flex: 1;">
                    <label for="email">Email Address: <span style="color: red;">*</span></label>
                    <input type="email" id="email" name="email" required>
                </div>  
            </div>
            <div class="form-group" class="Patient" style="display: flex; gap: 20px;">
                <div style="flex: 1;">
                    <label for="age" >Age <span style="color: red;">*</span></label>
                    <input type="number" id="age" name="age" required maxlength="5" min="1">
                </div><div style="flex: 1;">
                    <label for="bloodGroup" >Blood Group <span style="color: red;">*</span></label>
                    <input type="text" id="bloodGroup" name="bloodGroup" required maxlength="5">
                </div>
                <div class="sex" style="flex: 2; margin-left: 150px;">
                    <label>Gender: <span style="color: red;">*</span></label>
                    <div style="display: inline-flex; ">
                        <input type="radio" id="male" name="gender" value="male" required>
                        <label for="male">M</label>
                        <input type="radio" id="female" name="gender" value="female">
                        <label for="female">F</label>
                        <input type="radio" id="other" name="gender" value="other">
                        <label for="other">Other</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="address">Address: <span style="color: red;">*</span></label>
                <textarea id="address" name="address" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="GName">Guardian Name: <span style="color: red;">*</span></label>
                <input type="text" id="GName" name="GName" required>
            </div>
            <div class="form-group" style="display: flex; gap: 20px;">
                <div class="form-group">
                    <label for="ageG" >Guardian Age <span style="color: red;">*</span></label>
                    <input type="number" id="ageG" name="ageG" required min="1">
                </div>
                <div style="flex: 1;">
                    <label for="phoneNumberg">Phone Number: <span style="color: red;">*</span></label>
                    <input type="tel" id="phoneNumberg" name="phoneNumberg" required>
                </div>
            </div>
            <div class="form-group">
                <label for="f">Attach your Medical History:</label>
                <input type="file" id="f" name="f"><br>
            </div><br>
            <div class="form-group">
                <label for="password">Password <span style="color: red;">*</span></label>
                <input type="password" id="password" name="password" required maxlength="8">
            </div>
            <div class="form-group">
                <center><input type="submit" name="sub" value="Submit"></center>
            </div>
        </form>
    </div>        
</body>
</html>
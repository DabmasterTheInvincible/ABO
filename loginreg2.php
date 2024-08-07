<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin-left: 0;
            padding: 40px;
           background-image: url("hs2.jpg");
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .content {
            max-width: 350px;
            margin-right: 20px;
            padding: 20px;
            color: white;
            margin-left: 0px;
        }
        .container {
            max-width: fit-content;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-height: fit-content;
            margin-right: -10px;
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
        .form-group textarea {
            width: 100%;
            padding: 8px;
            border-radius: 3px;
            border: 0px;
            border-bottom: 2px solid #ccc;
            box-sizing: border-box;
        }
        .form-group input[type="number"] {
            width: calc(100% - 18px); /* Adjusted to accommodate spinner arrows */
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
        }
        .navbar {
    display: flex;
   
   
}
.navbar a {
    color:white;
    text-decoration: none;
    color:white;
    text-decoration: none;
    margin-top: 0px;
    margin-left: 20px;
    padding-bottom: 730px;
    margin-left: 10px;
    color: #0056b3;
}
    </style>
</head>
<body>
               
<header>
    <nav class="navbar">
        <a href="index.php"  style="color: white; float: left;">Back</a>
    </nav>
</header>
    <div class="content">
        <h1 style="color: white;">ABO <br><span style="color: black;">The Smart Ambulance System</span></h1>
        <ul style="list-style: none;">
            <li><h2 style="color:black">Doctor in Your Pocket </h2><p>ABO goes beyond just transportation. Our AI analyzes vital signs during transit, providing doctors with critical information even before the ambulance arrives. This proactive approach enables medical professionals to prepare and respond swiftly upon arrival.</p></li>
            <li><h2 style="color:black">Secure Information</h2><p>Rest assured, patient data is treated with the utmost security. Information zips safely between hospitals and ambulances, guarded like top-secret messages, ensuring confidentiality and privacy.</p></li>
        </ul>
    </div>
    <div class="container">
        <h2>Hospital Registration</h2>
        <form action="reg2.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="hospitalName">Hospital Name: <span style="color: red;">*</span></label>
                <input type="text" id="hospitalName" name="hospitalName" required>
            </div>
            <div class="form-group" style="display: flex; gap: 20px;">
                <div style="flex: 1;">
                    <label for="email">Email Address: <span style="color: red;">*</span></label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div style="flex: 1;">
                    <label for="phoneNumber">Phone Number: <span style="color: red;">*</span></label>
                    <input type="tel" id="phoneNumber" name="phoneNumber" required>
                </div>
            </div>
 
            <div class="form-group">
                <label for="address">Address: <span style="color: red;">*</span></label>
                <textarea id="address" name="address" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="openHours">Open Hours: <span style="color: red;">*</span></label>
                <textarea id="openHours" name="openHours" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="emergencyResponseTime">Emergency Response Time (minutes): <span style="color: red;">*</span></label>
                <input type="number" id="emergencyResponseTime" name="emergencyResponseTime" min="0" step="5" required>
            </div>
            <div class="form-group">
                <label for="bedsAvailable">Number of Beds Available: <span style="color: red;">*</span></label>
                <input type="number" id="bedsAvailable" name="bedsAvailable" min="5" required>
            </div>
            <div style="display: flex; gap: 20px;">
            <div class="form-group" style="flex: 1;">
                <label for="bloodBank">Blood Bank Presence:</label>
                <select id="bloodBank" name="bloodBank">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
            </div>
            <div class="form-group" style="flex: 1;">
                <label for="organBank">Organ Bank Presence:</label>
                <select id="organBank" name="organBank">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
            </div>
            <div class="form-group">
                <label for="password">Password <span style="color: red;">*</span></label>
                <input type="password" id="password" name="password" required maxlength="8">
            </div>
        </div><br>
            <div class="form-group">
                <center><input type="submit" value="Submit"></center>
            </div>
        </form>
    </div>        
</body>
</html>

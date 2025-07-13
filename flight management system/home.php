<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flight Management System - Home Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
* {
    margin: 0;
    padding: 0;
    font-family: 'Arial', sans-serif;
    box-sizing: border-box;
}

body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    margin: 0;
    background-color: #e3f2fd; 
}

.container {
    width: 100%;
    min-height: 100vh;
    padding: 20px 8%;
    background: linear-gradient(rgba(0, 102, 204, 0.2), rgba(0, 51, 153, 0.2)), url('background1.jpg') center/cover;
    display: flex;
    flex-direction: column;
    align-items: center;
    color: #ffffff;
    text-align: center;
}

nav {
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 8%;
    background-color: rgba(0, 51, 102, 0.8); 
    position: fixed;
    top: 0;
    z-index: 10;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
}

nav .logo {
    font-size: 2rem;
    font-weight: bold;
    color: #ffffff;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    letter-spacing: 2px;
    cursor: pointer;
}

nav .button {
    display: flex;
    gap: 15px;
}

nav .btn {
    padding: 10px 20px;
    background-color: #007acc; 
    color: #fff;
    border: none;
    border-radius: 5px;
    font-weight: bold;
    font-size: 1rem;
    cursor: pointer;
    transition: background 0.3s ease;
}

nav .btn:hover {
    background-color: #005bb5; 
}

.content {
    margin-top: 15%;
    max-width: 700px;
}

.content h1 {
    font-size: 3rem;
    font-weight: 700;
    line-height: 1.2;
    margin-bottom: 20px;
}

.content h4 {
    font-size: 1.5rem;
}

.additional-info {
    margin-top: 40px;
    font-size: 1.2rem;
}

.additional-info h2 {
    margin-bottom: 20px;
}

.additional-info p {
    margin-bottom: 10px;
}

.call-to-action {
    margin-top: 40px;
    padding: 10px 20px;
    background-color: #007acc; 
    color: #fff;
    border: none;
    border-radius: 5px;
    font-size: 1.2rem;
    cursor: pointer;
    transition: background 0.3s ease;
}

.call-to-action:hover {
    background-color: #005bb5; 
}
</style>
<body>
    <div class="container">
        <nav>
            <h2 class="logo">Flight Management</h2>
            <div class="button">
                <button class="btn" type="button" onclick="window.location.href='login.php'">Login</button>
                <button class="btn" type="button" onclick="window.location.href='register.php'">Register</button>
            </div>
        </nav>
        <div class="content">
            <h1>Welcome to</h1>
            <h1>Flight Management System</h1>
            <h4>Effortlessly Manage Flight Schedules and Bookings!</h4>
        </div>
        <div class="additional-info">
            <h2>About Us</h2>
            <p>Our system simplifies the management of flight schedules, ticket bookings, and passenger details.</p>
            <p>We provide tools for real-time updates, efficient schedule coordination, and seamless passenger management.</p>
            
            <h2>Services</h2>
            <p>Our features include:</p>
            <ul style="list-style-type: none; padding: 0;">
                <li>Real-time Flight Schedules</li>
                <li>Passenger Booking Management</li>
                <li>Delayed Flight Notifications</li>
                <li>Comprehensive Reporting</li>
                <li>Customizable Dashboards</li>
            </ul>
        </div>
        <button class="call-to-action" type="button" onclick="window.location.href='login.php'">Manage Flights</button>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sponsorship Request - IEEE DAY 25 Conference</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('bg.jpg'); /* Background image */
            background-size: cover; /* Cover the entire viewport */
            background-repeat: no-repeat; /* Prevent the image from repeating */
        }
        header {
            background-color: #003366; 
            color: white;
            padding: 20px 0;
            text-align: center;
        }
        .container {
            max-width: 600px; /* Set a max width for the form */
            margin: 100px auto; /* Center the container */
            padding: 20px; /* Add padding */
            background-color: rgba(255, 255, 255, 0.8); /* White background with more transparency */
            border-radius: 10px; /* Rounded corners */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2); /* Light shadow */
        }
        h1 {
            text-align: center; /* Center the heading */
            color: #003366; /* Dark Blue */
        }
        label {
            display: block; /* Make labels block elements */
            margin: 10px 0 5px; /* Add margin for spacing */
            color: #003366; /* Dark Blue */
        }
        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%; /* Full width */
            padding: 10px; /* Add padding */
            margin-bottom: 15px; /* Space below inputs */
            border: 1px solid #ccc; /* Light gray border */
            border-radius: 5px; /* Rounded corners */
            box-sizing: border-box; /* Include padding in width */
        }
        textarea {
            height: 100px; /* Set a height for the textarea */
        }
        .submit-button {
            display: inline-block; /* Make the button inline-block */
            padding: 15px 30px; /* Add padding for a larger button */
            background-color: #007BFF; /* Button background color */
            color: white; /* White text */
            text-decoration: none; /* Remove underline */
            border-radius: 5px; /* Rounded corners */
            transition: background-color 0.3s, transform 0.3s; /* Transition effects */
            font-size: 1.2em; /* Increase font size */
            margin-top: 20px; /* Space above the button */
            border: none; /* Remove border */
            cursor: pointer; /* Pointer cursor on hover */
            width: 100%; /* Full width for the button */
        }
        .submit-button:hover {
            background-color: #0056b3; /* Darker shade on hover */
            transform: scale(1.05); /* Slightly enlarge on hover */
        }
        footer {
            background-color: #003366;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: relative;
            bottom: 0;
            width: 100%;
            margin-top: 20px;
        }
        .nav-bar {
            text-align: center;
            margin: 20px 0;
        }
        .nav-bar a {
            margin: 0 15px;
            color: #003366;
            text-decoration: none;
            font-weight: bold;
        }
        .nav-bar a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header>
        <h1>Sponsorship Request</h1>
    </header>
    
    <div class="container">
        <form action="submit_sponsorship.php" method="POST">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Your Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="organization">Organization:</label>
            <input type="text" id="organization" name="organization" required>

<label for="request_details">Request Details:</label>
<textarea id="request_details" name="request_details" required></textarea>

<button type="submit" class="submit-button">Submit Request</button>
</form>
</div>

<div class="nav-bar">
<a href="index.html">Home</a> <!-- Link back to the home page -->
</div>

<footer>
<p>&copy; 2024 IEEE GUB Committee</p>
<div>
<a href="https://www.facebook.com" target="_blank">Facebook</a> | 
<a href="https://www.twitter.com" target="_blank">Twitter</a> | 
<a href="https://www.linkedin.com" target="_blank">LinkedIn</a> | 
<a href="https://www.instagram.com" target="_blank">Instagram</a>
</div>
</footer>
</body>
</html>
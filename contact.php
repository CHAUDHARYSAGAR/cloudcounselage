<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Registration</title>
    <link rel="stylesheet" href="contactstyle.css">
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <header>
    <nav>
        <div>
            <img src="img/CollegeScout-logos.jpeg" style="width: 50px; height: 50px;">
            </div>
        <div class="logo">
            <h1>Welcome to CollegeScout</h1>
        </div>
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="registration.php">Registration</a></li>
       </ul>
    </nav>
</header>
<div class="container">
    <h1>Contact Us</h1>
    <p>If you have any questions or feedback, please feel free to contact us using the form below.</p>
    <form class="contact-form" action="#" method="post">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>
        </div>
        <input type="submit" value="Submit">
    </form>
</div>
    
</body>
</html>

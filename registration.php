<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Registration</title>
    <link rel="stylesheet" href="regstyle.css">
    <link rel="stylesheet" href="style.css">
    
</head>
<?php
$conn = mysqli_connect('localhost','root','','collegescout');
if(isset($_POST['submit'])){
    $temp_name=$_FILES["file"]["tmp_name"];
$imagename=$_FILES["file"]["name"];
$target_path="img/".$imagename;
if(move_uploaded_file($temp_name,$target_path))
{
$cname = $_POST['collegename'];
    $location = $_POST['location'];
    $pincode = $_POST['pincode'];
    $cmission = $_POST['mission'];
    $cvision = $_POST['vision'];
    $contact = $_POST['contact'];
    $url = $_POST['url'];
    mysqli_query ($conn, "insert into `reg` (`logo`,`cname`,`location`,`pincode`,`cmission`,`cvision`,`contact`,`url`) values ('$target_path','$cname','$location','$pincode','$cmission','$cvision','$contact','$url')");
?>
<script>
    alert("registration succsessfull");
</script>
<?php
}
else{
?>
<script>
    alert("registration failed");
</script>
<?php
}
}
?>
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
        <h1>College Registration</h1><br>
        <form action="registration.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
            <label for="collegelogo">College logo:</label>
    <input type="file" id="imageInput" accept="image/*" name="file" onchange="previewImage()" />
</div>
    <center><img src="" id="previewImage" alt="Selected Image" style="max-width: 300px; display: none;"></center>
    
    <script>
        const imageInput = document.getElementById('imageInput');
        const previewImage = document.getElementById('previewImage');
        
        imageInput.addEventListener('change', function () {
            const file = imageInput.files[0];
            
            if (file) {
                const reader = new FileReader();
                
                reader.onload = function (e) {
                    // Display the selected image
                    previewImage.src = e.target.result;
                    previewImage.style.display = 'block';
                };
                
                // Read the image as a data URL
                reader.readAsDataURL(file);
            } else {
                // Clear the image if no file is selected
                previewImage.src = '';
                previewImage.style.display = 'none';
            }
        });
    </script>
            
            <div class="form-group">
                <label for="collegeName">College Name:</label>
                <input type="text" id="collegeName" name="collegename" required>
            </div>
            <div class="form-group">
                <label for="location">Location:</label>
                <input type="text" id="location" name="location" required>
            </div>
            <div class="form-group">
                <label for="pinCode">Pin Code:</label>
                <input type="text" id="pinCode" name="pincode" required>
            </div>
            <div class="form-group">
                <label for="mission">College Mission:</label>
                <textarea id="mission" name="mission" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="vision">College Vision:</label>
                <textarea id="vision" name="vision" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="contact">Contact:</label>
                <input type="text" id="contact" name="contact" required>
            </div>
            <div class="form-group">
                <label for="website">College Website URL:</label>
                <input type="url" id="website" name="url" required>
            </div>
            <input type="submit" value="Submit" name="submit">
        </form>
    </div>
</body>
</html>

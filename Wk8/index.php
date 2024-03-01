<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Omar Decena</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="container">
            <nav>
                <ul>
                    <li><a href="#about">About</a></li>
                    <li><a href="#education">Education</a></li>
                    <li><a href="#skills">Skills</a></li>
                    <li><a href="#projects">Projects</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="about">
        <div class="container">
            <h2>About Me</h2>
            <img src="omar1.png" alt="Profile Picture">
            <p>Hi I'm Omar Decena a 2nd year student at APC under the course of Bachelor of Science Majoring in Computer Science specializing in Software and Systems. I have a variety of interests such as playing games, working out, and solving problems in many ways possibles. I do Cycling, Jiu-Jitsu and Body Building for my workouts and when I have free time in my hand, I help out at our house or i usually just play games that I Enjoy playing.</p>
            <button class="modal-button" onclick="openModal()">Click Me!</button>

        <div id="modal" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeModal()">&times;</span>
                <h2>OMARRIZZ</h2>
                <img src="ricardo.jpg" alt="Profile Picture">
            </div>
        </div>
        </div>
    </section>

    <section id="education">
        <div class="container">
            <h2>Education</h2>
            <div class="education-item">
                <h3>Asia Pacific College</h3>
                <p>Senior High School</p>
                <p>Year: 2020 - 2022</p>
            </div>
            <div class="education-item">
                <h3>Asia Pacific College</h3>
                <p>Degree: Bachelor of Science in Computer Science specializing in Software and Systems</p>
                <p>Year: 2022 - Present</p>
            </div>
            <!-- Add more education items as needed -->
        </div>
    </section>

    <section id="skills">
        <div class="container">
            <h2>Hobbies</h2>
            <ul>
                <li>Learning new knowledge</li>
                <li>Playing Online or Casual Games</li>
                <li>Sports such as Cycling, Badminton, Jiu-Jitsu</li>
                <li>Working out at the gym</li>
                <!-- Add more skills as needed -->
            </ul>
        </div>
    </section>

    <section id="image-carousel">
        <div class="container">
            <h2>Image Carousel</h2>
            <div class="carousel">
                <img src="omar2.png" alt="Image 1">
                <img src="omar3.png" alt="Image 2">
                <img src="ricardo.jpg" alt="Image 3">
            </div>
        </div>
    </section>

    <section id="projects">
        <div class="container">
            <h2>Favorites</h2>
            <div class="project">
                <h3>Takoyaki</h3>
                <p>Takoyaki is a popular Japanese street food that originated in Osaka. It consists of small, round-shaped batter balls filled with diced octopus, green onions, and other savory ingredients. These delicious balls are cooked in a special takoyaki pan, which gives them their signature crispy exterior and soft, gooey interior.</p>
            </div>
            <div class="project">
                <h3>The Weeknd</h3>
                <p>The Weeknd, born Abel Makkonen Tesfaye, is a Canadian singer, songwriter, and record producer renowned for his distinctive voice and genre-blending music. Rising to fame in the early 2010s, he gained widespread acclaim for his dark, atmospheric R&B sound, characterized by emotionally charged lyrics and unconventional production. </p>
            </div>
            <!-- Add more projects as needed -->
        </div>
    </section>

    <?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<div class="container">
    <h2>Contact Me</h2>
    <p><span class="error">* required field</span></p>
    <form id="contact-form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
        <input type="text" name="name" placeholder="Name" value="<?php echo $name;?>" class="form-input">
        <span class="error">* <?php echo $nameErr;?></span>
        <br><br>
        <input type="text" name="email" placeholder="Email" value="<?php echo $email;?>" class="form-input">
        <span class="error">* <?php echo $emailErr;?></span>
        <br><br>
        <input type="text" name="website" placeholder="Website" value="<?php echo $website;?>" class="form-input">
        <span class="error"><?php echo $websiteErr;?></span>
        <br><br>
        <textarea name="comment" placeholder="Comment" rows="5" cols="40" class="form-input"><?php echo $comment;?></textarea>
        <br><br>
        Gender:
        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
        <span class="error">* <?php echo $genderErr;?></span>
        <br><br>
        <button type="submit" name="submit" value="Submit">Submit</button>  
    </form>

    <?php
    echo "<h2>Your Input:</h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $website;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $gender;
    ?>
</div>

<button id="scroll-to-top" onclick="scrollToTop()">Scroll To Top</button>

<footer>
    <div class="container">
        <p>&copy; Omar Rizz Decena</p>
    </div>
</footer>

<script src="script.js"></script>

</body>
</html>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars(trim($_POST["name"]));
        $email = filter_var(trim($_POST["email"]), FILTER_VALIDATE_EMAIL);
        $messageContent = htmlspecialchars(trim($_POST["message"]));
        $rating = htmlspecialchars(trim($_POST["rating"]));

        $to = "micahb2006@gmail.com";
        $subject = "Customer Comment from Ocean's Edge Contact Form";
        $headers = "From: $email\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

        $message = "
            <html>
            <head>
                <title>Kammya's Answer</title>
            </head>
            <body>
                <h2>New Submission</h2>
                <h3><strong>Name:</strong> $name</h3>
                <h3><strong>Email:</strong> $email</h3>
                <h3><strong>Answer:</strong><br>$messageContent</h3>
                <h3><strong>Rating:</strong><br>$rating</h3>
            </body>
            </html>
        ";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset ="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kammya Allissa Mills</title>
    <link rel="stylesheet" href="Kammya.css">
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script defer src="Kammya.js"></script>
</head>
<body class="home">
  <header>
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="About.html">About</a></li>
      </ul>
    </nav>
  </header>
  <main>
      <section class="hero">
          <h1 style="color: gold;">Will You Be My Valentine, Kammya?</h1>
          <img class="main-img" src="20240612_113302.jpg" alt="Micah Barton">
          <h1 style="color: gold;">But before you answer that question, check out the about section. 😉</h1>
          <img class="img-2" src="Screenshot_20230513-175918_Photos.jpg" alt="Kammya Allissa Mills">
          
          <form id="valentineForm" method="post">
              <label for="name">Name:</label>
              <input type="text" id="name" required>
              
              <label for="email">Email:</label>
              <input type="email" id="email" required>
              
              <label for="message">Your Answer:</label>
              <textarea id="message" required></textarea>
              
              <label for="rating">Rate the website:</label>
              <input type="range" id="rating" min="1" max="10">
              <span id="ratingValue">5</span>
              
              <button type="submit">Submit</button>
          </form>
      </section>
  </main>
  <footer>
    <p>&copy; 2025   Be My Valentine?</p>
  </footer>
</body>
</html>	 	
		
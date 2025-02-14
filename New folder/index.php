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
        <li><a href="index.html">Home</a></li>
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
          
          <form id="valentineForm">
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
		
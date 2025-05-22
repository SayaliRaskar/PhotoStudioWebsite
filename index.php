<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Photo Studio</title>
  
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body {
  font-family: 'Roboto', sans-serif;
  line-height: 1.6;
  background-color: #fff;
  color: #333;
}
header { 
  top: 0;
  background-color: #000;
  color: #fff;
  display: flex;
  justify-content: space-between;
  padding: 20px;
  z-index: 1000;
}
.logo{
  font-family: Algerian;
  font-size: 2em;
  text-shadow: 5px 5px 8px  rgb(220, 219, 197);
  color:rgb(245, 147, 8)
}
nav {
  display: flex;
  justify-content: center;  
  background-color: hsl(300, 3%, 7%);
  padding: 10px 0;
  position: relative; 
  font-family:Harlow Solid ;
}
nav a {
  text-decoration: none;
  color: #fff;
  margin: 0 20px;
  font-size: 25px;
  padding: 5px 5px;
  position: relative;
  transition: color 0.3s ease;
}
nav a:hover {
  color: #f5a623;
}
nav a {
  position: relative;
  display: inline-block;
}
nav a:before {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 2px;
  background-color: #ec9912;
  transform: scaleX(0);
  transform-origin: bottom right;
  transition: transform 0.3s ease-in-out;
}
nav a:hover:before {
  transform: scaleX(1);
  transform-origin: bottom left;
}
.hero {
  position: relative;
  height: 100vh;
  background-image: url('GXHa4PWwDPx7tGQG9MDQvK.jpg');
  background-size: cover;
  background-attachment: fixed;
  background-position: center;
  display: flex;
  justify-content: center;
  align-items: center;
  color: white;
  text-align: center;
}
.hero h1 {
  font-size: 4em;
  font-family: Lucida Calligraphy;
  font-weight: 600;
  margin-bottom: 20px;
  animation: fadeInTitle 4s forwards;
}
.hero p {
  font-size: 2em;
  font-family: Lucida Calligraphy;
  margin-bottom: 30px;
}
.hero .button {
  background-color: #ff6600;
  padding: 10px 20px;
  text-decoration: none;
  color: white;
  font-family: Bell MT;
  font-weight: bold;
}
.about {
  display: flex;
  padding: 60px;
  justify-content: space-between;
}
.about-text {
  flex: 1;
  font-size:30px;
  font-family: Harlow Solid;
}
.about-image {
  flex: 1;
}
.about img {
  width: 100%;
  height: auto;
  object-fit: cover;
}
.portfolio {
  padding: 60px;
  background: #f5f5f5;
  text-align: center;
}
.portfolio h2 {
  margin-bottom: 30px;
}
.portfolio-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 20px;
}
.portfolio-item img {
  width: 100%;
  height: auto;
  border-radius: 8px;
}
.services {
  background-color: #f5f5f5;
  padding: 60px;
}
.services h2 {
  text-align: center;
  margin-bottom: 30px;
}
.service {
  display: flex;
  align-items: center;
  margin-bottom: 40px;
  text-align: left;
}
.service img {
  width: 50%;
  height: auto;
  border-radius: 8px;
  margin-right: 20px;
}
.service-text {
  font-family: Harlow Solid;
  flex: 1;
}
.service h3 {
  font-size: 2em;
  margin-bottom: 10px;
}
.service p {
  font-size: 1.1em;
  color: #555;
  font-size:25px;
}
footer {
  background-color: #000;
  color: white;
  text-align: center;
  padding: 20px;
}
footer .socials {
  margin-top: 10px;
}
footer .socials a {
  color: white;
  margin: 0 10px;
  text-decoration: none;
  font-size: 1.2em;
}

/* AOS (Animate on Scroll) styles */
[data-aos] {
  opacity: 0;
  transition-property: opacity, transform;
}

[data-aos="fade-up"] {
  transform: translateY(50px);
}

[data-aos="fade-left"] {
  transform: translateX(-50px);
}

[data-aos="fade-right"] {
  transform: translateX(50px);
}

[data-aos].aos-animate {
  opacity: 1;
  transform: translateY(0);
}
  </style>
</head>
<body>
  <header>
    <div class="logo">S.S Photography</div>
    <nav>
    <a href="service.php">Services</a>
    <a href="gallery.php">Gallery</a>
    <a href="contact.html">Contact</a>
    <a href="Aboutus.php">About us</a> 
    <a href="admin_login.php">Admin Module</a>   
    </nav>
  </header>
  <!-- Hero Section with Parallax -->
  <section class="hero" data-aos="fade-in">
    <div class="hero-content">
      <h1>Capturing Timeless Moments</h1>
      <p>Let us create memories you'll cherish forever.</p>
      <a href="service.php" class="button">Explore Our Work</a>
    </div>
  </section>
  <!-- About Us Section -->
  <section id="about" class="about">
    <div class="about-text" data-aos="fade-up">
      <p>We are passionate photographers who specialize in capturing the best moments in your life. Our studio offers exceptional photography services with a personal touch.</p>
    </div>
    <div class="about-image" data-aos="fade-left">
      <img src="kingfisher-on-the-camera-lens-wallpaper-preview.jpg" alt="About Us">
    </div>
  </section>
  <!-- Services Section -->
  <section id="services" class="services">
    <div class="service" data-aos="fade-right">
      <img src="5-black-white-secrets.jpg" alt="Wedding Photography">
      <div class="service-text">
        <h3>Photography Touch</h3>
        <p>Analyze how photographers can use visual cues, composition, and subject matter to create a sense of intimacy, vulnerability, and emotional resonance in their images.</p>
      </div>
    </div>
    <div class="service" data-aos="fade-left">
      <img src="white-and-red-cherry-blossom-flowers-3979186.jpg" alt="Portrait Photography">
      <div class="service-text">
        <h3>Portrait Photography</h3>
        <p>Personalized portraits that showcase your unique personality and style.Portraits can preserve important moments and milestones in a person's life.</p>
      </div>
    </div>
  </section>
  <!-- Footer with Contact Info -->
  <footer id="contact">
    <p>&copy; 2025 PhotoStudio | All Rights Reserved</p>
  </footer>
  <script>
    AOS.init({
      duration: 1000,
      offset: 200,
    });
  </script>
</body>
</html>
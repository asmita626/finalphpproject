<?php
include('connection.php');
session_start();
 ?>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>4th semester Project</title>
</head>
<body>
  <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="#hero"><h1><span>O</span>nline <span>N</span>otice<span>Board</span></h1></a>
        </div>
        <div class="nav-list">
          <div class="hamburger"><div class="bar"></div></div>
           <ul>
            <li><a href="#hero" data-after="Home">Home</a></li>
            <li><a href="#services" data-after="Service">Services</a></li>
            <li><a href="#contact" data-after="Contact">Contact</a></li>
            <li><a href="registration.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
   <!-- Hero Section  -->
  <section id="hero">
    <div class="hero container">
      <div>
        <h1>Welcome, <span></span></h1>
        <h1>to <span></span></h1>
        <h1>Online Notice Board System <span></span></h1>
      </div>
    </div>
  </section>
  <!-- End Hero Section  -->
  <!--Service section -->
  <section id="services">
    <div class="services container">
      <div class="service-top">
        <h1 class="section-title">Serv<span>i</span>ces</h1>
        <p>Notice board is an essential information gathering system in our life. In our day-to-day life we can see notice boards in various places like, educational institutions, shopping malls,Bus stations, offices etc. </p>
      </div>
      <div class="service-bottom">
        <div class="service-item">
          <h2> Performance Requirements</h2>
          <p>The system in itself does not require anything specific for basic operation, but the complete software with all its components running may have some performance requirements. Except viewing pre-loaded notices and files (in website), an internet connection is needed for the features of the system to become available.</p>
        </div>
        <div class="service-item">
          <h2>Safety Requirements </h2>
          <P>Major attention should be given to the safety and security of the data and information that are   stored in the software. The database must be trustworthy and   non-leakage to ensure no data loss occurs.</P>
        </div>
        <div class="service-item">
          <h2>Security Requirements</h2>
          <p>User authentication must be absolute and non-by-passable. No user should be able to access the software without providing proper authentication. In case of guest users, only public notices and events should be visible. </p>
          </div>
        <div class="service-item">
          <h2>System Quality Attributes </h2>
          <p> Several additional qualities and characteristics of the system will be important to the client and/or the developers, like correctness, maintainability, portability, testability and usability. For correctness, proper care and attention should be given during the design and coding from both developers and customer (should correct some false and unwanted features) side. Usability is achieved by developing the product as user friendly as possible. Similarly, maintainability and testability play vital role in the long life of the software.  </p>
        </div>
      </div>
    </div>
  </section>
  <!--service section end-->
   <!-- Contact Section -->
  <section id="contact">
    <div class="contact container">
      <div><h1 class="section-title">Contact <span>info</span></h1></div>
      <div class="contact-items">
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/phone.png"/></div>
          <div class="contact-info">
            <h1>Phone</h1>
            <h2>9841234598</h2>
            <h2>9849123567</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/new-post.png"/></div>
          <div class="contact-info">
            <h1>Email</h1>
            <h2>studetscan@gmail.com</h2>
            <h2>projectnotice123@gmail.com</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/map-marker.png"/></div>
          <div class="contact-info">
            <h1>Address</h1>
            <h2>Kathmadu,Nepal</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Section -->

  <!-- Footer -->
  <section id="footer">
    <div class="footer container">
      <div class="brand"><h1><span>O</span>nline <span>N</span>otice</h1></div>
      <h2>Solution to spread information</h2>
      <div class="social-icon">
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/facebook-new.png"/></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/instagram-new.png"/></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/twitter.png"/></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/behance.png"/></a>
        </div>
      
  </section>
  <!-- End Footer -->

  <script src="./app.js"></script>
</body>
</html>
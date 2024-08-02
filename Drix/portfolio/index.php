<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Portfolio</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  <style>
    /* Custom CSS for modern UI design */
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f9f9f9;
      color: #333;
      margin: 0;
      padding: 0;
    }

    header {
      background-color: #292929;
      color: #fff;
      padding: 20px 0;
      text-align: center;
    }

    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
    }

    h1, h2, h4 {
      color: #292929;
    }

    .card {
      background-color: #fff;
      border: none;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s;
    }

    .card:hover {
      transform: translateY(-5px);
    }

    .portfolio-item {
      margin-bottom: 20px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    footer {
      background-color: #292929;
      color: #fff;
      text-align: center;
      padding: 10px 0;
      position: fixed;
      bottom: 0;
      width: 100%;
    }

    @keyframes flipping {
      0% {
        transform: rotateY(0);
      }
      50% {
        transform: rotateY(180deg);
      }
      100% {
        transform: rotateY(360deg);
      }
    }

    .flipping-animation {
      animation: flipping 3s linear infinite;
    }
  </style>
</head>

<body>
  <header class="animate__animated animate__fadeInDown">
    <h1>Your Name</h1>
    <p>Web Developer | Designer | Creative Thinker</p>
  </header>

  <section id="about" class="container animate__animated animate__fadeIn">
    <h2>About Me</h2>
    <p>Welcome to my portfolio! I am an IT graduating student aspiring to kickstart a career as a web developer possessing a good understanding of information technology that can help the company’s objective and goal.</p>
    <img src="../Asset/drix.png" alt="Profile Picture" class="img-fluid rounded-circle flipping-animation animate__animated animate__zoomIn" style="width: 150px;">
  </section>

  <section id="experience" class="container animate__animated animate__fadeIn">
    <h2>Experience</h2>
    <div class="portfolio-item">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Web App Development</h4>
          <ul>
            <li>Front End (HTML, CSS, JavaScript, Bootstrap) - Intermediate</li>
            <li>Back End (PHP) - Advanced</li>
            <li>Wireframe (Figma) - Intermediate</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="portfolio-item">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Networking</h4>
          <ul>
            <li>Network Configuration (Router, Switch, LAN cabling, Patch Panel) - Basic</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="portfolio-item">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Multimedia</h4>
          <ul>
            <li>Graphic Design – Intermediate</li>
            <li>Video Editing – Intermediate</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section id="contact" class="container animate__animated animate__fadeIn">
    <h2>Contact Me</h2>
    <p>Feel free to get in touch with me. You can reach me at drixdiocton@gmail.com or through the form below:</p>
    <form action="submit_contact.php" method="post">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="message">Message:</label>
        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
      </div>
      <button type="submit" class="btn btn-primary animate__animated animate__zoomIn">Send</button>
      <a href="/Drix" class="btn btn-primary animate__animated animate__zoomIn">Back</a>
    </form>
    <div id="loader" style="display: none;"></div>
  </section>

  <!-- Link to Bootstrap JS (jQuery is required for Bootstrap JS) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

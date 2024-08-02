<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Protest+Riot&display=swap" rel="stylesheet">
    <title>My Website</title>
    <style>
        body {
            font-family: "Protest Riot", sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            background-image: url('Asset/asd.jpg');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            position: relative;
            overflow: hidden;
        }
       
      .title-container {
    background: url('beach-volley.gif') center center/cover no-repeat;
    padding: 6rem;
    text-align: center;
    border-radius: 20px;
    color: white; /* Optional: Add text color to ensure visibility */
    background-position: 50% 30%; /* Adjust as needed */
}


        @keyframes moveText {
            0% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-50%);
            }
            100% {
                transform: translateY(0);
            }
        }

        .title-content {
            text-align: center;
            margin-top: 50px;
        }

        h1, p {
            animation: moveText 2s linear infinite;
        }

        .title-content {
            max-width: 800px;
            margin: 0 auto;
        }

        .title-content h1 {
            font-size: 2.5rem;
            color: #333;
            margin-bottom: 1rem;
        }

        .title-content .highlight {
            color: #ff7b54;
        }

        .title-content .subtitle {
            font-size: 1.2rem;
            color: #666;
            margin-bottom: 2rem;
        }

        .button {
            display: inline-block;
            padding: 0.8rem 3rem;
            background-color: #ff7b54;
            color: #fff;
            border: none;

            border-radius: 20px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
            
        }

        .button:hover {
            background-color: #0095b6;
        }

        .about-us {
            position: absolute;
            bottom: 20px;
            right: 20px;
            background-color: rgba(0, 0, 0, 0.8);
            padding: 1rem 2rem;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .about-us:hover {
            transform: translateY(-5px);
        }

        .about-us p {
            margin: 0;
            font-size: 1rem;
            color: white;
        }

        .about-us-section {
            display: none; /* Hide the about section by default */
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: rgba(0, 0, 0, 0.7);
            padding: 2rem;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
            transition: transform 0.5s ease; /* Update transition to transform */
            color: #fff;
        }

        .show-about-us {
            display: block; /* Show the about section when the show-about-us class is applied */
        }

        .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 1.5rem;
            cursor: pointer;
            color: #fff;
        }

        .burger-menu {
            display: none; /* Initially hide the burger menu on larger screens */
            background: none;
            border: none;
            font-size: 1.5rem;
            color: white;
            cursor: pointer;
        }

        @media screen and (max-width: 768px) {
            .burger-menu {
                display: block; /* Display the burger menu on smaller screens */
            }

            nav ul {
                display: none; /* Hide the navigation menu by default on smaller screens */
            }

            nav ul.active {
                display: flex; /* Display the navigation menu when the burger menu is clicked */
                flex-direction: column;
                background-color: rgba(0, 0, 0, 0.8);
                position: absolute;
                top: 80px;
                left: 0;
                right: 0;
                z-index: 99;
            }
        }

        @keyframes rotateFast {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }

        #loader {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 999;
            overflow: hidden;
        }

        #loader img {
            width: 220px;
            height: 220px;
            animation: rotateFast 0.5s linear forwards; /* Decrease the duration to make it faster */
        }


    </style>
</head>
<body>
<header>
     <?php include 'header.html'; ?>
</header>
<div class="title-container">
    <div class="title-content">
        <h1>Welcome to <span class="highlight">My Website</span></h1>
        <p class="subtitle">Your one-stop solution for all your web development needs.</p>
        <a href="https://drixport.000webhostapp.com/Drix/portfolio/" class="button">Visit My Portfolio</a>
    </div>
</div>

<div class="about-us">
    <p>About Me</p>
</div>

<div class="about-us-section">
    <span class="close-btn">&times;</span>
    <h2>About Me</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac odio sit amet libero vehicula molestie.</p>
</div>

<div id="loader" style="display: none;">
    <img id="loader-img" src="drix.svg" alt="Loader">
</div>



<script>
    const aboutUsBtn = document.querySelector('.about-us');
    const aboutUsSection = document.querySelector('.about-us-section');
    const closeBtn = document.querySelector('.close-btn');

    aboutUsBtn.addEventListener('click', () => {
        aboutUsSection.classList.toggle('show-about-us');
        if (aboutUsSection.classList.contains('show-about-us')) {
            const closeButton = document.createElement('span');
            closeButton.classList.add('close-btn');
            closeButton.innerHTML = '&times;';
            closeButton.addEventListener('click', () => {
                aboutUsSection.classList.remove('show-about-us');
            });
            aboutUsSection.appendChild(closeButton);
        } else {
            const closeButton = document.querySelector('.about-us-section .close-btn');
            if (closeButton) {
                closeButton.remove();
            }
        }
    });

    const buttons = document.querySelectorAll('.button');
    const loader = document.getElementById('loader');

    buttons.forEach(button => {
        button.addEventListener('click', (event) => {
            event.preventDefault(); // Prevent the default redirection behavior

            loader.style.display = 'flex';

            setTimeout(() => {
                window.location.href = button.href;
            }, 1000); // Wait for 1 second before redirecting (same duration as the rotation animation)
        });
    });
</script>
</body>
</html>
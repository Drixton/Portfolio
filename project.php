<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Protest+Riot&display=swap" rel="stylesheet">
    <title>Sample Project</title>
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
            /* Removed overflow: hidden; */
        }

        .container {
            width: 100%;
            max-width: 800px;
            margin: 0 auto;
            padding: 0 15px; /* Added padding for better mobile view */
           border-radius: 100%; /* Make it circular */
           
        }

        .project-card {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
            margin-bottom: 20px;
            overflow: hidden;
            position: relative;
        }

        .project-card:hover {
            transform: translateY(-5px);
        }

        .project-details {
            padding: 20px;
            text-align: center;
        }

        .project-title {
            font-size: 28px;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }

        .project-description {
            font-size: 18px;
            color: #555;
            margin-bottom: 20px;
        }

        .project-link {
            text-decoration: none;
            color: #ffffff;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            padding: 12px 24px;
            font-size: 20px;
            transition: background-color 0.3s;
            display: inline-block;
            margin-top: 10px;
        }

        .project-link:hover {
            background-color: #0056b3;
        }

        .text-center {
            text-align: center;
        }

        .mb-4 {
            margin-bottom: 8px;
        }

        .row {
            display: flex;
            justify-content: center;
            flex-wrap: wrap; /* Allow items to wrap */
        }

        .col-md-6 {
            flex: 0 0 100%; /* Full width on mobile */
            max-width: 100%; /* Full width on mobile */
        }

        .card-img-top {
            display: block;
            margin-left: auto;
            margin-right: auto;
            transition: transform 0.3s, box-shadow 0.3s;
            max-width: 200px; /* Set maximum width for the image */
            width: 100%; /* Make image responsive */
        }

        /* Add hover effect for image */
        .project-card:hover .card-img-top {
            transform: scale(1.1);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 20);
        }

    </style>
</head>
<body>

<header>
 <?php include 'header.html'; ?> 

</header>

<div class="container">
    <h1 class="text-center mb-4">PAST PROJECTS</h1>
    <div class="row">
        <div class="col-md-6">
            <div class="project-card">
                <div class="project-details">
                    <img src="Asset/project.png" class="card-img-top" alt="Sample Project">
                    <h2 class="project-title">TRACK-WISE</h2>
                    <p class="project-description">Project Description</p>
                    <a href="https://gentle-tires.000webhostapp.com/" class="btn project-link">Visit Project</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="project-card">
                <div class="project-details">
                    <img src="Asset/reserve.jpg" class="card-img-top" alt="Sample Project">
                    <h2 class="project-title">Reservation System</h2>
                    <p class="project-description">System for reservation in Sports categories</p>
                    <a href="https://aepreserve.000webhostapp.com/" class="btn project-link">Visit Project</a>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>

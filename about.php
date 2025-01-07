<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>

    <!-- Add your CSS and JavaScript links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <style>
        /* Dark theme styling */
        body {
            background-color: #121212;
            color: #ffffff;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #1f1f1f;
            border-bottom: 1px solid #333;
        }

        .navbar-brand,
        .nav-link {
            color: #ffffff !important;
        }

        .container {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
        }

        .section-title {
            font-size: 2rem;
            font-weight: bold;
            text-align: center;
            margin-bottom: 30px;
            color: #00bcd4;
        }

        .scrollable-gallery {
            display: flex;
            overflow-x: auto;
            gap: 20px;
            padding: 10px;
            scroll-behavior: smooth;
        }

        .scrollable-gallery img {
            height: 200px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.5);
            transition: transform 0.3s ease;
        }

        .scrollable-gallery img:hover {
            transform: scale(1.1);
        }

        .about-text {
            margin-top: 30px;
            font-size: 1.2rem;
            line-height: 1.8;
        }

        footer {
            background-color: #1f1f1f;
            color: #666;
            text-align: center;
            padding: 20px;
            margin-top: 30px;
            border-top: 1px solid #333;
        }

        footer a {
            color: #00bcd4;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <?php require("nav.php"); ?>

    <!-- About Section -->
    <div class="container">
        <h1 class="section-title">About Our Project</h1>

        <!-- Scrollable Gallery -->
        <div class="scrollable-gallery">
            <img src="1.jpg" alt="Project Image 1">
            <img src="2.jpg" alt="Project Image 2">
            <img src="3.jpg" alt="Project Image 3">
            <img src="4.jpg" alt="Project Image 4">
            <img src="5.jpg" alt="Project Image 5">
        </div>


        <br><br><br><br>
        <!-- Project Description -->
        <div class="about-text">
            <h3>Brief Motivation</h3>
            <hr>
            <p>
                ❑Healthcare staff often face challenges in constant monitoring of
                patient vitals. Senso-Gown automates this process, reducing human
                error and improving efficiency.</p><br>
            <p>❑The real-time tracking and monitoring ensure quicker responses to
                emergencies while reducing nurse burnout and enhancing overall
                hospital efficiency.
            </p>

            <br><br><br>

            <h3>Key Functionalities / Innovative Aspects</h3>
            <hr>
            <p>
                ❑ Real-time health monitoring: Instantly tracks vital signs like
                temperature, pulse, and oxygen levels. </p><br>
            <p> ❑ Automatic alerts: Sends notifications immediately if critical levels
                are detected.</p><br>
            <p> ❑Making a difference: Focused on reducing nurse workload and
                improving patient care.</p><br>
            <p>❑ Data history: Logs data to help doctors manage patients better.
            </p><br>
            <p>
                The use of cutting-edge IoT technology demonstrates our commitment to leveraging innovation for the
                betterment of society.
            </p>



            <br><br><br>

            <h3>Outcomes</h3>
            <hr>
            <p>
                ❑ Real-time health monitoring: Instantly tracks vital signs like
                temperature. </p><br>
            <p> ❑ Improved accessibility of
                patient health information for
                healthcare providers through
                web-based dashboards.</p><br>
            <p> ❑Improved patient monitoring
                capabilities leading to more
                efficient alert systems,
                enhancing patient safety and
                overall care outcomes.</p><br>
            <br>

            <br><br><br>

            <h3> Societal Impact</h3>
            <hr>
            <b> Enhanced Patient Dignity and Comfort
            </b><br>
            <p>
                <b>1.Addressing Vulnerability: </b>Traditional hospital gowns often contribute to
                feelings of vulnerability and loss of control among patients. The Senso
                Gown, by integrating technology into a more comfortable design, helps
                mitigate these feelings, allowing patients to maintain a sense of dignity
                during medical procedures
            </p>
            <p> <b>2. Personalized Care: </b>The shift towards personalised healthcare is
                increasingly recognised as vital in improving patient experiences. The Senso
                Gown embodies this principle by providing real-time health monitoring while
                allowing patients to express their identity and comfort through a more
                thoughtfully designed garment. </p><br>



        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 Health Monitoring Project | Designed by <a href="#">Your Team</a></p>
    </footer>

    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
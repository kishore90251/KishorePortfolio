<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kishore's Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(65deg, rgba(255, 255, 255, 1) 50%, rgba(135, 206, 250, 1) 50%, rgba(173, 216, 230, 1) 100%);
            overflow-x: hidden;
            color: #212121;
        }
        .profile-section {
            padding: 2rem;
            text-align: center;
        }
        .profile-photo {
            border-radius: 50%;
            width: 200px;
            height: 200px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .profile-info h2 {
            color: #37474f;
        }
        .profile-info p {
            color: #455a64;
        }
        .cta-button {
            margin-top: 1rem;
            background-color:rgb(246, 203, 30);
            border: none;
            color: white;
            font-size: 1.2rem;
            padding: 0.8rem 1.5rem;
            border-radius: 50px;
            transition: background-color 0.3s ease-in-out;
        }
        .cta-button:hover {
            background-color:rgb(232, 230, 226);
        }
        .resume-content {
            background-color: #ffffff;
            border-radius: 16px;
            padding: 2rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .carousel-item {
            text-align: center;
            padding: 2rem;
        }
        .carousel-item h3 {
            color:rgb(0, 147, 252);
        }
        .carousel-item p {
            color: #455a64;
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row vh-100">
        <!-- Profile Section -->
        <div class="col-md-6 d-flex align-items-center justify-content-center profile-section">
            <div>
                <img src="{{ asset('img/kishoreprofile.jpg') }}" alt="Kishore G" class="profile-photo">
                <div class="profile-info">
                    <h2 class="mt-3">Kishore G</h2>
                    <p>Software Engineering Graduate</p>
                    <p>No.16, Balaji Nagar, Kundrathur, Chennai-69</p>
                    <p>Phone: 9025193307</p>
                    <p>Email: Kishore90251@gmail.com</p>
                    <h3>My Projects</h3>
                    <a href="https://oecairporttransfers.co.uk" class="btn cta-button" target="_blank">OEC Airport Transfers</a>
                    <a href="https://urcabs.in" class="btn cta-button ms-2" target="_blank">UR Cabs</a>
                </div>
            </div>
        </div>
        <!-- Resume Section -->
        <div class="col-md-6 d-flex align-items-center justify-content-center">
            <div class="resume-content">
                <div id="resumeCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <!-- Overview -->
                        <div class="carousel-item active">
                            <h3>Profile Summary</h3>
                            <p>Software Engineering Graduate with a passion for innovation and problem-solving. Core knowledge in security aspects and pentesting tools like Wireshark, Hydra, Brute-force, and information gathering.</p>
                            <h3>Skills</h3>
                            <p>Java, SQL, PHP, Php-Laravel, C++, Full-Stack Development...</p>
                            <h3>Education</h3>
                            <ul style="list-style-type: none; padding: 0; margin: 0;">
    <li>B E Computer Science Engineering, S. A. Engineering College</li>
    <li>Higher Secondary School, PSBB HR Sec School</li>
</ul>

                        </div>
                        <!-- Work Experience -->
                        <div class="carousel-item">
                            <h3>Work Experience</h3>
                            <p>Worked at <b>SRI Hema Info Tech</b> for over 6 months on live projects, building products tailored to customer requirements.</p>
                        </div>
                        <!-- Cybersecurity -->
                        <div class="carousel-item">
                            <h3>Cybersecurity</h3>
                            <p>Completed Certified Penetration Testing at <b>Red Team Academy</b>. Skilled in vulnerability assessment and ethical hacking.</p>
                            <p><b>Tools:</b> Brute-force, Nmap, Hydra, WPscan</p>
                        </div>
                    </div>
                    <!-- Carousel Controls -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#resumeCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#resumeCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

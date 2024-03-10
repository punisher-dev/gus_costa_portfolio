<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pixelify+Sans:wght@400..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://kit.fontawesome.com/46dcb08984.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style-portfolio.css">
    <title>Portfolio</title>
</head>
<body class="dark">
    <div class="wrapper">
        <header>
            <nav id="main-menu">
                    <h2 id="logo"><a href="#">gus</a></h2>
                <ul>
                    <li><a class="sound-on"><i class="fa-solid fa-volume-off"></i></a></li>
                    <li><a class="sound-off"><i class="fa-solid fa-volume-xmark"></i></a></li>
                    <li><a class="mode-toggle"><i class="fa-solid fa-circle-half-stroke"></i></a></li>
                    <li><a href="#projects">projects</a></li>
                    <li><a href="#experience">experience</a></li>
                    <li id="hamburger"><i class="fa-solid fa-bars"></i></li>
                </ul>

            </nav>
            <div class="overlay">
                <nav>
                    <h2 id="logo"><a href="#">gus</a></h2>
                    <div id="back-button"><a href="#">v</a></div>
                </nav>
                <div class="overlay-links row">
                    <a id="projects-overlay" href="#projects">projects</a>
                    <a id="experience-overlay" href="#experience">experience</a>
                    <a class="mode-toggle"><i class="fa-solid fa-circle-half-stroke"></i></a>
                    <a class="sound-on"><i class="fa-solid fa-volume-off"></i></a>
                    <a class="sound-off"><i class="fa-solid fa-volume-xmark"></i></a>
                </div>
            </div>
        </header>
        <main>
            <div class="intro">
                <h1 id="intro"></h1> 
                <h1 id="intro-description"></h1>
                <div id="start-button"><a>v</a></div>
                <span id="text-cursor">|</span>
            </div>
            <div class="projects">
                <h1 id="projects">projects</h1>
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 d-flex" data-aos="zoom-in" data-aos-duration="1200">
                        <div class="project m-2 d-flex flex-column">
                            <h2>Barbecue Planner App - Front End</h2>
                            <p>CRUD participants and their preferences for drinks and foods, a list of participants is created and a Shopping list reflects quantities. Technologies: React, Vite, NPM, CSS, Bootstrap, fontawesome, Railway.</p>
                            <div class="project-links mt-auto">
                                <i href="https://github.com/Guscosta88/T3A2-B-front-end" class="fa-brands fa-square-github"></i>
                                <!-- <i class="fa-solid fa-arrow-up-right-from-square"></i> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 d-flex" data-aos="zoom-in" data-aos-duration="1200">
                        <div class="project m-2 d-flex flex-column">
                            <h2>Barbecue Planner App - Back End</h2>
                            <p>CRUD Participants endpoints, get Beverages by ID or name, get foods by ID. Technologies: Node.js, MongoDB, Mongoose, Express, cors, dotenv, jest supertest, Postman, Railway.</p>
                            <div class="project-links mt-auto">
                                <i href="https://github.com/Guscosta88/T3A2-B-back-end" class="fa-brands fa-square-github"></i>
                                <!-- <i class="fa-solid fa-arrow-up-right-from-square"></i> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 d-flex" data-aos="zoom-in" data-aos-duration="1200">
                        <div class="project m-2 d-flex flex-column">
                            <h2>Wine and Food Pairing API</h2>
                            <p>CRUD API that allows the user to register, login, add, view, edit, delete, foods and wines, and also choose how they pair. Technologies: Python3, Flask, PostreSQL, SQLAlchemy, Marshallow, bcrypt, jwt, MailTrap, Postman.</p>
                            <div class="project-links mt-auto">
                                <i href="https://github.com/Guscosta88/GusCosta_T2A2" class="fa-brands fa-square-github"></i>
                                <!-- <i class="fa-solid fa-arrow-up-right-from-square"></i> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 d-flex" data-aos="zoom-in" data-aos-duration="1200">
                        <div class="project m-2 d-flex flex-column">
                            <h2>API Weather App</h2>
                            <p>Weather App developed with Vue.js, Node, Bootstrap. It receives the city name in the input and returns weather information from the OpenWeatherMap API.</p>
                            <div class="project-links mt-auto">
                                <i href="https://github.com/Guscosta88/weather" class="fa-brands fa-square-github"></i>
                                <i href="https://gus-weather-app.netlify.app/" class="fa-solid fa-arrow-up-right-from-square"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="experiences">
                <h1 id="experience">experience</h1>
                <div>
                    <?php
                    
                    $json = file_get_contents('experiences.json');
                    $experiences = json_decode($json, true);

                    foreach ($experiences as $experience) {
                        echo '<div class="experience" data-aos="zoom-in" data-aos-duration="1200">';
                        echo '<div class="experience-titles row" data-accordion="accordion-'.$experience['id'].'">';
                        echo '<h2 class="col-sm">' . $experience['title'] . '</h2>';
                        echo '<h2 class="col-sm" id="work-date">' . $experience['date'] . '</h2>';
                        echo '</div>';
                        echo '<div class="accordion" id="accordion-'.$experience['id'].'">';
                        echo '<div class="experience-content">';
                        foreach ($experience['content'] as $paragraph) {
                            echo '<p>' . $paragraph . '</p>';
                        }
                        echo '</div>';
                        echo '<div class="experience-links">';
                        echo '<a class="d-flex align-items-baseline" href="' . $experience['href'] . '"><p>' . $experience['link'] . '</p><i class="fa-solid fa-arrow-up-right-from-square"></i></a>';
                        echo '</div>';
                        echo '<div class="experience-skills row">';
                        foreach ($experience['skills'] as $skill) {
                            echo '<span class="col-sm">' . $skill . '</span>';
                        }
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                    ?>

                </div>
            </div>
            <div class="contact">

            </div>
        </main>
        <footer>
            <ul>
                <li><a href="https://github.com/punisher-dev/"><i class="fa-brands fa-square-github"></i></a></li>
                <li><a href="https://www.linkedin.com/in/gus-dacosta/"><i class="fa-brands fa-linkedin"></i></a></li>
            </ul>
        </footer>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="script-portfolio.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>
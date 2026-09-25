<?php

$name = "Crispol Magos";
$contact = "09056606115";
$email = "polmagos06@gmail.com";
$year = date("Y");

$education = [
    [
        "level" => "Elementary",
        "school" => "M. H. Del Pilar",
        "location" => "Dulag, Leyte",
        "status" => "Graduate",
        "year" => "2016-2017"
    ],
    [
        "level" => "High School",
        "school" => "Dulag National High School",
        "location" => "Dulag, Leyte",
        "status" => "Graduate",
        "year" => "2020-2021"
    ],
    [
        "level" => "Senior High School",
        "school" => "Dulag National High School",
        "location" => "Dulag, Leyte",
        "status" => "Graduate",
        "year" => "2024"
    ],
    [
        "level" => "College",
        "course" => "BS Information Technology (BSIT)",
        "section" => "3B",
        "status" => "Undergraduate"
    ]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $name; ?> | Portfolio</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f4f7fb;
            color: #222;
            line-height: 1.6;
        }

        a {
            text-decoration: none;
        }

        header {
            background: #111827;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .navbar {
            max-width: 1200px;
            margin: auto;
            padding: 18px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            color: white;
            font-size: 24px;
            font-weight: bold;
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 25px;
        }

        .nav-links a {
            color: white;
            font-weight: bold;
            transition: 0.3s;
        }

        .nav-links a:hover {
            color: #60a5fa;
        }

        .home {
            min-height: 90vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 60px 20px;
            background: linear-gradient(135deg, #111827, #1d4ed8);
            color: white;
        }

        .home-content {
            max-width: 850px;
        }

        .welcome {
            font-size: 14px;
            letter-spacing: 4px;
            margin-bottom: 15px;
        }

        .home h1 {
            font-size: 55px;
            margin-bottom: 10px;
        }

        .home h1 span {
            color: #60a5fa;
        }

        .home h2 {
            font-size: 25px;
            margin-bottom: 20px;
        }

        .home p {
            font-size: 18px;
            margin-bottom: 30px;
        }

        .button {
            display: inline-block;
            background: #2563eb;
            color: white;
            padding: 13px 28px;
            border-radius: 7px;
            font-weight: bold;
            transition: 0.3s;
        }

        .button:hover {
            background: #1e40af;
            transform: translateY(-2px);
        }

        section {
            padding: 80px 30px;
        }

        .section-title {
            text-align: center;
            font-size: 36px;
            color: #111827;
            margin-bottom: 45px;
        }

        .container {
            max-width: 1100px;
            margin: auto;
        }

        .about-box {
            background: white;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            text-align: center;
        }

        .about-box h3 {
            font-size: 28px;
            color: #2563eb;
            margin-bottom: 20px;
        }

        .about-box p {
            margin-bottom: 15px;
            font-size: 17px;
        }

        #education {
            background: white;
        }

        .education-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 25px;
        }

        .education-card {
            background: #f4f7fb;
            padding: 30px;
            border-radius: 12px;
            border-left: 6px solid #2563eb;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            transition: 0.3s;
        }

        .education-card:hover {
            transform: translateY(-6px);
        }

        .education-card h3 {
            color: #2563eb;
            font-size: 23px;
            margin-bottom: 15px;
        }

        .education-card p {
            margin-bottom: 8px;
            font-size: 16px;
        }

        .education-card strong {
            color: #111827;
        }

        #skills {
            background: #eef2ff;
        }

        .skills {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        .skill {
            background: white;
            padding: 30px 20px;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            transition: 0.3s;
        }

        .skill:hover {
            transform: translateY(-8px);
        }

        .skill h3 {
            color: #2563eb;
            font-size: 22px;
            margin-bottom: 10px;
        }

        .projects {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }

        .project {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            transition: 0.3s;
        }

        .project:hover {
            transform: translateY(-8px);
        }

        .project h3 {
            color: #2563eb;
            margin-bottom: 12px;
            font-size: 22px;
        }

        #contact {
            background: #eef2ff;
        }

        .contact-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
        }

        .contact-info,
        .contact-form {
            background: white;
            padding: 35px;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
        }

        .contact-info h3 {
            font-size: 26px;
            color: #2563eb;
            margin-bottom: 20px;
        }

        .contact-info p {
            margin-bottom: 18px;
        }

        .contact-info strong {
            color: #111827;
        }

        .contact-info a {
            color: #2563eb;
        }

        .contact-form label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 13px;
            margin-bottom: 18px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 15px;
        }

        .contact-form textarea {
            resize: vertical;
        }

        .contact-form button {
            width: 100%;
            padding: 13px;
            background: #2563eb;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        .contact-form button:hover {
            background: #1e40af;
        }

        footer {
            background: #111827;
            color: white;
            text-align: center;
            padding: 20px;
            width: 100%;
        }

        @media (max-width: 800px) {

            .navbar {
                flex-direction: column;
                gap: 15px;
            }

            .nav-links {
                flex-wrap: wrap;
                justify-content: center;
            }

            .home h1 {
                font-size: 40px;
            }

            .home h2 {
                font-size: 20px;
            }

            .skills {
                grid-template-columns: 1fr 1fr;
            }

            .projects {
                grid-template-columns: 1fr;
            }

            .education-grid {
                grid-template-columns: 1fr;
            }

            .contact-container {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 500px) {

            .skills {
                grid-template-columns: 1fr;
            }

            .home h1 {
                font-size: 32px;
            }

            .nav-links {
                gap: 12px;
                font-size: 14px;
            }
        }
    </style>
</head>

<body>

<header>
    <nav class="navbar">

        <div class="logo">
            <?php echo $name; ?>
        </div>

        <ul class="nav-links">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#education">Education</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>

    </nav>
</header>

<section class="home" id="home">

    <div class="home-content">

        <div class="welcome">
            WELCOME TO MY PORTFOLIO
        </div>

        <h1>
            Hello, I'm
            <span><?php echo $name; ?></span>
        </h1>

        <h2>
            BSIT Student & Aspiring Web Developer
        </h2>

        <p>
            I am passionate about technology,
            programming, web development,
            and creating useful applications.
        </p>

        <a href="#contact" class="button">
            Contact Me
        </a>

    </div>

</section>

<section id="about">

    <div class="container">

        <h2 class="section-title">
            About Me
        </h2>

        <div class="about-box">

            <h3>
                <?php echo $name; ?>
            </h3>

            <p>
                Hello! My name is
                <strong><?php echo $name; ?></strong>.
                I am a BSIT student interested in
                information technology and web development.
            </p>

            <p>
                I am currently developing my skills in
                HTML, CSS, PHP, databases, and programming.
                My goal is to continue learning and create
                useful and creative technology projects.
            </p>

        </div>

    </div>

</section>

<section id="education">

    <div class="container">

        <h2 class="section-title">
            Educational Attainment
        </h2>

        <div class="education-grid">

            <?php foreach ($education as $item): ?>

                <div class="education-card">

                    <h3>
                        <?php echo $item["level"]; ?>
                    </h3>

                    <?php if (isset($item["school"])): ?>
                        <p>
                            <strong>School:</strong>
                            <?php echo $item["school"]; ?>
                        </p>
                    <?php endif; ?>

                    <?php if (isset($item["location"])): ?>
                        <p>
                            <strong>Location:</strong>
                            <?php echo $item["location"]; ?>
                        </p>
                    <?php endif; ?>

                    <?php if (isset($item["course"])): ?>
                        <p>
                            <strong>Course:</strong>
                            <?php echo $item["course"]; ?>
                        </p>
                    <?php endif; ?>

                    <?php if (isset($item["section"])): ?>
                        <p>
                            <strong>Section:</strong>
                            <?php echo $item["section"]; ?>
                        </p>
                    <?php endif; ?>

                    <p>
                        <strong>Status:</strong>
                        <?php echo $item["status"]; ?>
                    </p>

                    <?php if (isset($item["year"])): ?>
                        <p>
                            <strong>Year:</strong>
                            <?php echo $item["year"]; ?>
                        </p>
                    <?php endif; ?>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>

<section id="skills">

    <div class="container">

        <h2 class="section-title">
            My Skills
        </h2>

        <div class="skills">

            <div class="skill">
                <h3>HTML</h3>
                <p>
                    Creating the structure and content of websites.
                </p>
            </div>

            <div class="skill">
                <h3>CSS</h3>
                <p>
                    Designing attractive and responsive websites.
                </p>
            </div>

            <div class="skill">
                <h3>PHP</h3>
                <p>
                    Creating dynamic websites and server-side applications.
                </p>
            </div>

            <div class="skill">
                <h3>Database</h3>
                <p>
                    Managing and storing data for web applications.
                </p>
            </div>

        </div>

    </div>

</section>

<section id="projects">

    <div class="container">

        <h2 class="section-title">
            My Projects
        </h2>

        <div class="projects">

            <div class="project">

                <h3>
                    Personal Portfolio
                </h3>

                <p>
                    A personal portfolio website developed
                    using PHP, HTML, and CSS.
                </p>

            </div>

            <div class="project">

                <h3>
                    Student Information System
                </h3>

                <p>
                    A website designed to organize and
                    display student information.
                </p>

            </div>

            <div class="project">

                <h3>
                    Online Selling Website
                </h3>

                <p>
                    A basic online store where users can
                    view products and product information.
                </p>

            </div>

        </div>

    </div>

</section>

<section id="contact">

    <div class="container">

        <h2 class="section-title">
            Contact Me
        </h2>

        <div class="contact-container">

            <div class="contact-info">

                <h3>
                    Get In Touch
                </h3>

                <p>
                    You can contact me using the
                    information below.
                </p>

                <p>
                    <strong>Name:magos crispol</strong><br>
                    <?php echo $name; ?>
                </p>

                <p>
                    <strong>Contact Number:09123456789</strong><br>
                    <?php echo $contact; ?>
                </p>

                <p>
                    <strong>Email:polmagos06@gmail.com</strong><br>

                    <a href="mailto:<?php echo $email; ?>">
                        <?php echo $email; ?>
                    </a>
                </p>

            </div>

            <div class="contact-form">

                <form>

                    <label for="name">
                        Name
                    </label>

                    <input
                        type="text"
                        id="name"
                        name="name"
                        placeholder="Enter your name"
                    >

                    <label for="email">
                        Email
                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="Enter your email"
                    >

                    <label for="message">
                        Message
                    </label>

                    <textarea
                        id="message"
                        name="message"
                        rows="5"
                        placeholder="Enter your message"
                    ></textarea>

                    <button type="submit">
                        Send Message
                    </button>

                </form>

            </div>

        </div>

    </div>

</section>

<footer>

    <p>
        © <?php echo $year; ?>
        <?php echo $name; ?>.
        All Rights Reserved.
    </p>

</footer>

</body>
</html>
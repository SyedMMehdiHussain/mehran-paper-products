<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <title>Mehran Paper Products</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;   
        }
        body main {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px;
}

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #172323;
        }

        .navbar-logo img {
            height: 60px;
            width: auto;
        }

        .navbar-menu {
            display: flex;
        }

        .navbar-menu a {
            color: #bca569;
            text-decoration: none;
            font-weight: bold;
            padding: 0 15px;
            line-height: 40px;
        }

        .navbar-menu a:hover {
            background-color: #202e2e;
            border-radius: 5px;
        }

        .navbar-toggle {
            display: none;
            background: none;
            border: none;
            cursor: pointer;
            padding: 0;
            margin: 0;
        }

        .navbar-toggle-icon {
            display: block;
            width: 25px;
            height: 3px;
            background-color: #fff;
            margin: 5px auto;
            transition: background-color 0.3s ease;
        }

        .contact-btn {
            position: fixed;
            bottom: 20px;
            right: 20px;
        }

        .contact-btn a {
            display: inline-block;
            width: 50px;
            height: 50px;
            background-color: #172323;
            color: #fff;
            text-align: center;
            line-height: 50px;
            text-decoration: none;
            border-radius: 50%;
            font-size: 18px;
            font-weight: bold;
        }

        .contact-btn a:hover {
            background-color: #202e2e;
        }

        .contact-btn a svg {
            margin-top: 6px;
        }

        @media (max-width: 768px) {
            .navbar-menu {
                display: none;
                flex-direction: column;
                position: absolute;
                top: 60px;
                right: 0;
                width: 100%;
                background-color: #172323;
            }

            .navbar-menu a {
                padding: 15px;
                text-align: center;
                border-top: 1px solid #172323;
            }

            .navbar-menu a:first-child {
                border-top: none;
            }

            .navbar-toggle {
                display: block;
            }

            .navbar-menu.active {
                display: flex;
            }
        }

        /* ////////////////////////////// NAB BAR OR CONTACT BTN/////////////////////////// */

        .footer {
            background-color: #bca569;
            color: #fff;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 20px;
        }

        .footer-section {
            flex: 1;
            margin: 10px;
            min-width: 200px;
        }
        .footer-section1 {
            flex: 1;
            margin: 10px;
            min-width: 200px;
            margin-left: 300px;
        }
        .footer-section1 h3 {
            color: #172323;
            margin-bottom: 10px;
            font-size: 18px;
        }

        .footer-section1 p {
            font-size: 14px;
            line-height: 1.5;
        }

        .footer-section1 ul {
            list-style: none;
            padding: 0;
        }

        .footer-section1 ul li {
            margin-bottom: 8px;
        }

        .footer-section1 ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 14px;
        }

        .footer-section1 ul li a:hover {
            text-decoration: underline;
        }

        .footer-section h3 {
            color: #172323;
            margin-bottom: 10px;
            font-size: 18px;
        }

        .footer-section p {
            font-size: 14px;
            line-height: 1.5;
        }

        .footer-section ul {
            list-style: none;
            padding: 0;
        }

        .footer-section ul li {
            margin-bottom: 8px;
        }

        .footer-section ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 14px;
        }

        .footer-section ul li a:hover {
            text-decoration: underline;
        }

        .social-media a {
            margin-right: 10px;
            font-size: 20px;
            color: #fff;
        }

        .footer a:hover{
            color: #172323;
        }

        @media (max-width: 768px) {
            .footer {
                flex-direction: column;
                align-items: center;
            }

            .footer-section {
                text-align: center;
                margin: 20px 0;
            }
            .footer-section1 {
                text-align: center;
                margin: 20px 0;
            }
        }


        .container1a {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .container1a h1 {
            text-align: center;
            color: #172323;
        }
        .container1a h2 {
            color: #172323;
        }
        .container1a p {
            margin: 15px 0;
        }

        .cc{
            background: #172323;
            color: #bca569;
            padding: 20px 0;
            text-align: center;
            font-size: 16px;
        }

/* //////////////////////////////////////////////main/////////////////////////// */

        .contact-form-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            width: 800px;
            max-width: 800px;
            margin: 20px;
            
        }
        .contact-form h2 {
            margin-bottom: 20px;
            font-size: 24px;
            text-align: center;
            color: #202e2e;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #202e2e;
        }
        .form-group input, .form-group textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 6px;
            box-sizing: border-box;
            resize: vertical;
            transition: border-color 0.3s;
        }
        .form-group input:focus, .form-group textarea:focus {
            border-color: #007BFF;
        }
        #btn1122 {
            width: 100%;
            padding: 12px;
            border: none;
            background-color: #bca569;
            color: #202e2e;
            font-size: 18px;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 1.5s;
        }
        #btn1122:hover {
            color: #bca569;
            background-color: #202e2e;
        }
        .success, .error {
            text-align: center;
            font-size: 16px;
            margin-bottom: 20px;
        }
        .success {
            color: green;
        }
        .error {
            color: red;
        }
        @media (max-width: 600px) {
            .contact-form-container {
                padding: 15px;
            }
        }




        .container-mi {
            display: flex;
            flex-direction: row;
            width: 100%;
            max-width: 800px;
            height: 400px;
            margin: 0 auto;
            border: #bca569 3px solid;
        }
        .left, .right {
            flex: 1;
            padding: 20px;
        }
        .left {
            background-color: #f0f0f0;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .right {
            background-color: #202e2e;
            color: #bca569;
            font-weight: bold;
            padding-bottom: 50px;
            justify-content: center;
            align-items: center;
        }
        iframe {
            width: 100%;
            height: 100%;
            border: none;
        }

        /* Responsive styles */
        @media (max-width: 800px) {
            .container-mi {
                flex-direction: column;
                height: auto;
            }
            .left, .right {
                flex: none;
                height: 50vh;
            }
            iframe {
                height: 100%;
            }
        }
    </style>
</head>

<body>
<header>
        <nav class="navbar">
            <div class="navbar-logo">
                <a href="index.html"><img src="LOGO-removebg-preview.png" alt="Logo"></a>
            </div>
            <button class="navbar-toggle" aria-label="Toggle navigation">
                <span class="navbar-toggle-icon"></span>
                <span class="navbar-toggle-icon"></span>
                <span class="navbar-toggle-icon"></span>
            </button>
            <div class="navbar-menu">
                <a href="index.html">Home</a>
                <a href="about.html">About Us</a>
                <a href="S&P.html">Services & Products</a>
                <a href="contact.php">Contact Us</a>
            </div>
        </nav>
    </header>

    <div class="contact-btn">
        <a href="HTTPS://wa.me/923341025635"><svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                <path fill="#bca569"
                    d="M19.05 4.91A9.82 9.82 0 0 0 12.04 2c-5.46 0-9.91 4.45-9.91 9.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21c5.46 0 9.91-4.45 9.91-9.91c0-2.65-1.03-5.14-2.9-7.01m-7.01 15.24c-1.48 0-2.93-.4-4.2-1.15l-.3-.18l-3.12.82l.83-3.04l-.2-.31a8.26 8.26 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24c2.2 0 4.27.86 5.82 2.42a8.18 8.18 0 0 1 2.41 5.83c.02 4.54-3.68 8.23-8.22 8.23m4.52-6.16c-.25-.12-1.47-.72-1.69-.81c-.23-.08-.39-.12-.56.12c-.17.25-.64.81-.78.97c-.14.17-.29.19-.54.06c-.25-.12-1.05-.39-1.99-1.23c-.74-.66-1.23-1.47-1.38-1.72c-.14-.25-.02-.38.11-.51c.11-.11.25-.29.37-.43s.17-.25.25-.41c.08-.17.04-.31-.02-.43s-.56-1.34-.76-1.84c-.2-.48-.41-.42-.56-.43h-.48c-.17 0-.43.06-.66.31c-.22.25-.86.85-.86 2.07s.89 2.4 1.01 2.56c.12.17 1.75 2.67 4.23 3.74c.59.26 1.05.41 1.41.52c.59.19 1.13.16 1.56.1c.48-.07 1.47-.6 1.67-1.18c.21-.58.21-1.07.14-1.18s-.22-.16-.47-.28" />
            </svg></a>
    </div>




<main>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mpp";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $stmt = $conn->prepare("INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $message);

    // if ($stmt->execute()) {
    //     echo "Thank you, $name. We have received your message!";
    // } else {
    //     echo "Error: " . $stmt->error;
    // }

    $stmt->close();
}

$conn->close();
?>

    
<div class="contact-form-container">
    <form action="" method="post" class="contact-form">
        <h2>Contact Us</h2>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea id="message" name="message" rows="5" required></textarea>
        </div>
        <button type="submit" id="btn1122";><b>Submit</b></button>
    </form>
</div>


</main>
<center>
<div class="container-mi">
        <div class="left">
            <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d396.89731362550685!2d67.08368565031263!3d24.908529985068814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjTCsDU0JzMxLjEiTiA2N8KwMDUnMDEuNiJF!5e1!3m2!1sen!2s!4v1723844072184!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="right"><br><br><br><br>
        <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"><path fill="#bca569" d="M12 11.5A2.5 2.5 0 0 1 9.5 9A2.5 2.5 0 0 1 12 6.5A2.5 2.5 0 0 1 14.5 9a2.5 2.5 0 0 1-2.5 2.5M12 2a7 7 0 0 0-7 7c0 5.25 7 13 7 13s7-7.75 7-13a7 7 0 0 0-7-7"/></svg>
<br><br>
            <p>Office Number A-8 3rd Floor-Al-Ahmead plaza Sb-2 Block-13-C Gulshan-e-Iqbal Karachi Pakistan</p>
<br><br>
            <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"><path fill="#bca569" fill-rule="evenodd" d="M4.063 1.25h3.751a.75.75 0 0 1 .702.486l1.456 3.87a.75.75 0 0 1 .035.401l-.73 3.912c.897 2.108 2.378 3.525 4.833 4.796l3.865-.75a.75.75 0 0 1 .41.036l3.882 1.48a.75.75 0 0 1 .483.7v3.584c0 1.626-1.432 2.945-3.108 2.58c-3.053-.664-8.71-2.353-12.672-6.315c-3.796-3.795-5.068-9.037-5.495-11.87c-.245-1.618 1.052-2.91 2.588-2.91" clip-rule="evenodd"/></svg>
<br><br>
            <p>+92 334 102 5635</p>
        </div>
    </div>
    </center>
<br><br><br>










<footer class="footer">
        <div class="footer-section">
            <h3>About Us</h3>
            <p>Where innovation meets tradition in the art of paper production. Since our inception, we have dedicated ourselves to producing high-quality paper products that meet the diverse needs of our customers. Whether it’s for printing, packaging, or specialized applications, our paper is crafted to perfection, ensuring excellence in every sheet.</p><br><br><br>
            <div class="social-media">
                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                        <path fill="#172323"
                            d="M6.94 5a2 2 0 1 1-4-.002a2 2 0 0 1 4 .002M7 8.48H3V21h4zm6.32 0H9.34V21h3.94v-6.57c0-3.66 4.77-4 4.77 0V21H22v-7.93c0-6.17-7.06-5.94-8.72-2.91z" />
                    </svg></a>
                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                        <path fill="#172323"
                            d="M14 13.5h2.5l1-4H14v-2c0-1.03 0-2 2-2h1.5V2.14c-.326-.043-1.557-.14-2.857-.14C11.928 2 10 3.657 10 6.7v2.8H7v4h3V22h4z" />
                    </svg></i></a>
                <a href="https://www.youtube.com/@MehranPapers"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                        <path fill="#172323"
                            d="m10 15l5.19-3L10 9zm11.56-7.83c.13.47.22 1.1.28 1.9c.07.8.1 1.49.1 2.09L22 12c0 2.19-.16 3.8-.44 4.83c-.25.9-.83 1.48-1.73 1.73c-.47.13-1.33.22-2.65.28c-1.3.07-2.49.1-3.59.1L12 19c-4.19 0-6.8-.16-7.83-.44c-.9-.25-1.48-.83-1.73-1.73c-.13-.47-.22-1.1-.28-1.9c-.07-.8-.1-1.49-.1-2.09L2 12c0-2.19.16-3.8.44-4.83c.25-.9.83-1.48 1.73-1.73c.47-.13 1.33-.22 2.65-.28c1.3-.07 2.49-.1 3.59-.1L12 5c4.19 0 6.8.16 7.83.44c.9.25 1.48.83 1.73 1.73" />
                    </svg></a>
                <a href="https://www.instagram.com/mehranpaperproducts?igsh=MXZoczZ6enY3YWM3Mw=="><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                        <g fill="none" stroke="#172323" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                            color="#172323">
                            <path
                                d="M2.5 12c0-4.478 0-6.718 1.391-8.109S7.521 2.5 12 2.5c4.478 0 6.718 0 8.109 1.391S21.5 7.521 21.5 12c0 4.478 0 6.718-1.391 8.109S16.479 21.5 12 21.5c-4.478 0-6.718 0-8.109-1.391S2.5 16.479 2.5 12" />
                            <path d="M16.5 12a4.5 4.5 0 1 1-9 0a4.5 4.5 0 0 1 9 0m1.008-5.5h-.01" />
                        </g>
                    </svg></i></a>
            </div>
        </div>
        <div class="footer-section1">
            <h3>Company</h3>
            <ul>
                <li><a href="about.html">About Us</a></li>
                <li><a href="our-niche.html">Our Niche</a></li>
                <li><a href="crs.html">CSR</a></li>
                <!-- <li><a href="team.html">Team</a></li> -->
                <li><a href="media.html">Media</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <!-- <li><a href="career.html">Career</a></li> -->
            </ul>
        </div>
        <div class="footer-section">
            <h3>Our Products</h3>
            <ul>
                <li><a href="fluting.html">Fluting</a></li>
                <li><a href="cmp.html">CMP</a></li>
                <li><a href="ultra.fluting">Ultra Fluting</a></li>
                <li><a href="hard-sized-fluting.html">Hard Sized Fluting</a></li>
                <li><a href="test-liner.html">Test Liner</a></li>
                <li><a href="klb.html">KLB</a></li>
                <li><a href="hp-kraft.html">HP Kraft</a></li>
                <li><a href="kraft.html">Kraft</a></li>
                <br><br>
                <li><a href="box-board.html">Box Board</a></li>
                <li><a href="coated.board">Coated Board</a></li>
            </ul>
        </div> 
    </footer>
    <div class="cc"><p>&copy; 2024 <b>Mehran Paper Products</b>. All Rights Reserved.</p></div>








    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const menuToggle = document.querySelector('.navbar-toggle');
            const navbarMenu = document.querySelector('.navbar-menu');

            if (menuToggle) {
                menuToggle.addEventListener('click', function () {
                    navbarMenu.classList.toggle('active');
                });
            }
        });
    </script>
</body>

</html>
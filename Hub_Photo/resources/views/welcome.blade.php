<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sri Lanka School Management</title>

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
            color: #333;
        }

        header {
            background-color: #FF5733;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 36px;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px;
            background-color:rgb(205, 211, 206);
        }

        nav a {
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            margin-left: 10px;
            transition: background-color 0.3s;
        }

        nav .left a {
            margin-left: 0;
            margin-right: 10px;
        }

        nav a:hover {
            background-color: #c84b2e;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            flex-direction: column;
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .school-info, .contact-info, .extra-features {
            background-color: #e9ecef;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
            text-align: center;
        }

        .school-info h2, .contact-info h2, .extra-features h2 {
            margin-top: 0;
            color: #FF5733;
        }

        .school-info p, .contact-info p, .extra-features p {
            font-size: 18px;
            line-height: 1.6;
            margin-right: 45px;
            margin-left: 45px;
        }

        .school-info ul {
            list-style-type: disc;
            padding-left: 20px;
            text-align: left;
        }

        .school-info ul li {
            font-size: 16px;
            margin: 5px 0;
        }

        .school-info img, .contact-info img, .extra-features img {
            width: 100%;
            max-height: 400px;
            object-fit: cover;
            border-radius: 8px;
            margin-top: 15px;
        }

        footer {
            text-align: center;
            padding: 10px;
            background-color: #FF5733;
            color: white;
            margin-top: 20px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color:rgb(51, 180, 255);
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 10px;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #c84b2e;
        }
    </style>
</head>
<body>

<!-- Header -->
<header>
    <h1> AcademiQR - SL School Management</h1>
</header>

<!-- Navigation with AcademiQR, Login, and Register buttons -->
<nav>
    <div class="left">
    <!-- resources/views/welcome.blade.php -->
<a href="{{ url('/employee/see') }}" class="btn">Guest</a>

    </div>
    
    <div class="right">
        <a href="{{ route('login') }}" class="btn">Login</a>
        <a href="{{ route('register') }}" class="btn">Register</a>
    </div>
</nav>

<!-- Main content -->
<div class="container">
    <div class="school-info">
        <h2>School Information</h2>
        <p>Welcome to MGR School, one of the leading educational institutions in Sri Lanka. Our school offers quality education from grade 1 to grade 13. We aim to nurture young minds and prepare them for a bright future.</p>

        <h3>School Overview</h3>
        <ul>
            <li>Established: 1999</li>
            <li>Location: Jaffna, Sri Lanka</li>
            <li>Grades: 1 - 13</li>
            <li>Facilities: Science Lab, Sports Ground, Library, Computer Lab</li>
        </ul>

        <!-- School Image -->
        <img src="{{ asset('images/sc.jpg') }}" alt="School Image">
    </div>

    <div class="contact-info">
        <h3>Contact Information</h3>
        <p>If you have any questions or need assistance, feel free to reach out to us. You will get response within 24 hours ASAP. We're here to help you!</p>
        <p>Phone: +94 77 086 6140 &nbsp;&nbsp;|&nbsp;&nbsp; Mail: Dhanushiiii@outlook.com</p>
        <a href="#" class="btn">Learn More</a>

        <!-- Contact Image -->
        <img src="{{ asset('images/s.png') }}" alt="Contact Image">
    </div>

    <div class="extra-features">
        <h2>School Features</h2>
        <p>Our school offers a range of extracurricular activities, including sports, music, drama, and more. We have state-of-the-art facilities to provide the best learning experience for our students.</p>
        <a href="#" class="btn">Activities</a>

        <!-- Activities Image -->
        <img src="{{ asset('images/sc2.png') }}" alt="Activities Image">
    </div>
</div>

<!-- Footer -->
<footer>
    <p>AcademiQR - SL School Management - Powered by Danusan</p>
</footer>

</body>
</html>

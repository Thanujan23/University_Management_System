<?php

include 'config.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="home.css">
    <title>Home page</title>
</head>

<body>


    <header>
        <div class="navbar">

            <div class="logo-container">
                <img src="image/7791868.jpg" alt="Logo" class="logo">
                <span class="university-name">IEA UNIVERSITY</span>
            </div>
            <nav>
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">ABOUT</a></li>
                    <li><a href="seecourse.php" id="coursesBtn">COURSES</a></li>
                    <li><a href="#" id="facultiesBtn">FACULTIES</a></li>
                    <li><a href="#">STAFF</a></li>
                    <li><a href="profile.php">MY ACCOUNT</a></li>


                    <li class="regi"><a href="regias.php">REGISTER</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container">
        <section class="one">
            <h1
                style="font-size: 30px; font-family: 'Georgia', Sans-seri; margin-bottom: 18%; text-align: center; position: absolute; color: rgba(62, 5, 5, 0.721);">
                “Even the greatest were beginners<br>Don't be afraid to take that first step"</h1>
            <input type="button" class="login" value="LOGIN" id="login">
            <input type="button" class="lmore" value="LEARN MORE">

            <div class="search-container">
                <input type="text" id="searchInput" placeholder="Search...">
                <button id="searchBtn">Search</button>
            </div>
        </section>

        <section class="two">

            <div class="top-boxes">
                <div class="box">
                    <img src="image/istockphoto-1191982308-612x612.jpg" alt="Image 1">
                    <h3>Administration</h3><br>
                </div>

                <div class="box">
                    <img src="image/low-angle-cheerful-team-students-passed-test-by-preparing-all-together.jpg"
                        alt="Image 2">
                    <h3>Acadamic Activities</h3>
                </div>

                <div class="box">
                    <img src="image/pro.jpg" alt="Image 3">
                    <h3>Programs And Courses</h3>
                </div>
            </div>

            <div class="bottom-boxes">
                <div class="box">
                    <img src="image/fac.jpg" alt="Image 4">
                    <h3>Faculties And Staff</h3>
                </div>

                <div class="box">
                    <img src="image/University-campus-facility-and-grounds-1024x682.jpg" alt="Image 5">
                    <h3> Facilities and Resources</h3>
                </div>

                <div class="box">
                    <img src="image/College-Students.jpeg" alt="Image 6">
                    <h3>Events and Achievements</h3>
                </div>
            </div>
        </section>
        </section>

        <section class="three">
            <img src="image/pexels-matthis-volquardsen-2305098.jpg" alt="Image 1" class="boxt">
            <div class="content1">
                <h3>"
                    Explore the vibrant tapestry of university life through our diverse clubs and societies! From
                    academic pursuits to cultural and recreational activities, our clubs cater to a range of interests.
                    Connect with like-minded individuals, build friendships, and enhance your university experience
                    beyond the classroom. Visit our website to discover opportunities for engagement, leadership
                    development, and memorable experiences that will shape your university journey. Join us in creating
                    a well-rounded and unforgettable campus community!"</h3>
            </div>
            <img src="image/pexels-karolina-grabowska-8106679.jpg" alt="Image 1" class="boxt2">
            <div class="content2">
                <h3>"
                    Celebrate your academic journey with us! Discover a supportive and enriching environment at Wilson
                    University, where we empower students to excel and thrive. As you approach graduation, relish in
                    your achievements and the memories created during your time with us. Join the distinguished ranks of
                    our alumni, equipped with the knowledge and skills to navigate the future confidently. Explore the
                    next chapter of your life by staying connected with our vibrant community. Congratulations on
                    reaching this milestone—your success is our pride!"</h3>
            </div>


        </section>

        <section class="four">
            <div class="content3">
                <h2>LOCAL & INTERNATIONAL PARTNERSHIPS</h2>
                <div class="partner-logos">
                    <img src="image/harvard-university-logo-41D451F949-seeklogo.com.png" class="partner-logo">
                    <img src="image/university-of-cambridge-logo-E6ED593FBF-seeklogo.com.png" class="partner-logo">
                    <img src="image/north-south-university-logo-0CA3A4611D-seeklogo.com.png" class="partner-logo">
                    <img src="image/University_of_Sheffield-logo-27226177CB-seeklogo.com.png" class="partner-logo">
                    <img src="image/university-of-rajshahi-logo-4AD89D569F-seeklogo.com.png" class="partner-logo">
                    <img src="image/michigan-state-university-logo-758A0EA568-seeklogo.com.png" class="partner-logo">
                </div>
            </div>
            <section class="footer">
                <div class="bo">
                    <div class="fo1">
                        <h2 href="#">More Links</h2>
                        <h4 href="#">Vacancies</h4>
                        <h4 href="#">Procurement</h4>
                        <h4 href="#">Policise</h4>
                        <h4 href="#">Site Map</h4>
                        <h4 href="#">University Directory</h4>
                    </div>

                    <div class="fo2">
                        <h2 href="#">Other Links</h2>
                        <h4 href="#">University Grants Commision</h4>
                        <h4 href="#">Are you Ready</h4>
                        <h4 href="#">LEARN</h4>
                        <h4 href="#">General Catalogue</h4>
                        <h4 href="#">AHEAD Project</h4>
                        <h4 href="#">Institute of Technology, University of Wilson</h4>

                    </div>

                    <div class="fo3">
                        <h1>Connect With Us</h1>
                        <input type="text" id="email" placeholder="Your Email Address.."><br>
                        <button id="emailbu">SUBSCRIBE</button>
                        <div class="social">
                            <img src="image/facebook.png"
                                style="width: 50px; height: 50px; margin-top: 30px; margin-right: 20px;">
                            <img src="image/youtube.png" style="width: 50px; height: 50px; margin-right: 20px;">
                            <img src="image/linkedin.png" style="width: 50px; height: 50px;margin-right: 20px;">
                            <img src="image/twitter.png" style="width: 50px; height: 50px;margin-right: 20px;">
                            <img src="image/instagram.png" style="width: 50px; height: 50px;">

                        </div>
                    </div>
                </div>
            </section>

        </section>


    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script src="home.js"></script>
</body>

</html>
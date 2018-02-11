<?php include 'header.php'; ?>
<div class="wrapper">
    <div class="header header-filter" style="height:100vh;background-image: url('assets/img/bg2.jpeg');">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="brand">
                        <h1>Resu.me</h1>
                        <h3>A free resume/cv generator</h3>
                        <a class="btn btn-round btn-danger" href="form.php">Create new</a><a class="btn btn-round btn-success" href="#load">View created</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="main">
        <div class="section section-basic">
            <div class="container">
                <div class="title">
                    <h2>Resume generator</h2>
                </div>
                <p class="jumbotron">Creating a CV or a Resume is time consuming and difficult task. We just made it simple for you. You can create your free resume by following few simple stemps. Thus, you can save your time and effort.
                <div class="row">
                <div class="col-md-6">
                    <h2>Create your resume</h2>
                    <p>You can create your free reusme using the form below.</p>
                    <form action="test.php" method="get">
                        <div class="form-group label-floating">
                            <label class="control-label">Enter your name</label>
                            <input class="form-control" name="name" required="required">
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">Profile picture URL</label>
                            <input class="form-control" type="text" name="dp" value="images/default.jpg" required="required">
                        </div>

                        <div class="form-group label-floating">
                            <label class="control-label">Enter your E-mail</label>
                            <input class="form-control" type="email" name="email" required="required">
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">Enter your phone number</label>
                            <input class="form-control" name="phone" required="required">
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">Enter your Father's name</label>
                            <input class="form-control" name="father" required="required">
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">Enter your Mother's name</label>
                            <input class="form-control" name="mother" required="required">
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">Enter your Date of birth</label>
                            <input class="form-control datepicker" value="08/14/1997" name="dob" required="required">
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">Enter your age</label>
                            <input class="form-control" name="age" type="number" required="required">
                        </div>
                        <div class="form-group label-floating">
                        <select name="gender" class="form-control">
                            <option value="Male" selected>Male</option>
                            <option value="Female">Female</option>
                        </select>
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">Enter your country</label>
                            <input class="form-control" name="nation" required="required">
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">Enter languages you know</label>
                            <input class="form-control" name="lang" required="required">
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">House name</label>
                            <input class="form-control" name="house" required="required">
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">Enter your city/street</label>
                            <input class="form-control" name="city" required="required">
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">Enter your district</label>
                            <input class="form-control" name="dist" required="required">
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">Enter your PIN code</label>
                            <input class="form-control" name="pin" required="required">
                        </div>
                        <h2>About me</h2><label>(Allowed HTML tags are, &lt;a&gt;&lt;b&gt;&lt;i&gt;&lt;u&gt;&lt;h3&gt;&lt;h4&gt;&lt;h5&gt;&lt;h6&gt;&lt;strong&gt;&lt;br&gt;&lt;hr&gt;&lt;p&gt;&lt;span&gt;&lt;img&gt;)</label>
                        <textarea class="form-control" name="about" cols="40" rows="8">Seeking a challenging career in an esteemed organization to grow professionally by strengthening my technical and analytical skills, and earning good reputation with whom I work, always keeping in mind the goals of the organization as the prime objective.</textarea>
                        <h2>Professional Skills</h2>
                        <div class="form-group label-floating">
                            <label class="control-label">Enter your basic skills. Eg: Web Developer, Designer, Singer</label>
                            <input class="form-control" type="text" name="basic_skills" required="required">
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">Enter your 1st skill (Eg: HTML)</label>
                            <input class="form-control" name="skill1" type="text" value="HTML"  required="required"/>
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">Rate your 1st skill (0-100)</label>
                            <input class="form-control" width="20px" value="65" name="skill1perc" type="number" required="required">
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">Enter your 2nd skill</label>
                            <input class="form-control" name="skill2" type="text" value="PHP" required="required"/>
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">Rate your 2nd skill</label>                        
                            <input class="form-control" value="65" name="skill2perc" type="number" required="required">
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">Enter your 3rd skill</label>                        
                            <input class="form-control" name="skill3" type="text" value="JS" required="required"/>
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">Rate your 3rd skill</label>                        
                            <input class="form-control" value="65" name="skill3perc" type="number" required="required">
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">Enter your 4th skill</label>
                            <input class="form-control" name="skill4" type="text" value="PhotoShop" required="required"/>
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">Rate your 4th skill</label>
                            <input class="form-control" value="65" name="skill4perc" type="number" required="required">
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">Enter your 5th skill</label>
                            <input class="form-control" name="skill5" type="text" value="BootStarp" required="required"/>
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">Rate your 5th skill</label>
                            <input class="form-control" value="65" name="skill5perc" type="number" required="required">
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">Enter your 6th skill</label>
                            <input class="form-control" name="skill6" type="text" value="Laraval" required="required"/>
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">Rate your 6th skill</label>
                            <input class="form-control" value="65" name="skill6perc" type="number" required="required">
                        </div>

                       
                        <h2>Education</h2>
                        <div class="card card-nav-tabs" style="padding:10px; margin-right:10px; margin-bottom:15px;">
                            <div class="header header-primary">
                                <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
                                <div class="nav-tabs-navigation">
                                    <div class="nav-tabs-wrapper">
                                        <h4 style="text-align:center;">High school</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group label-floating">
                                <label class="control-label">Name of Institution</label>
                                <input class="form-control" name="school" required="required">
                            </div>
                            <div class="form-group label-floating">
                                <label class="control-label">Year of passing</label>
                                <input class="form-control" type="text" value="2012-13" name="schoolduring" required="required">
                            </div>
                            <div class="form-group label-floating">
                                <label class="control-label">Level (Graduation/Diploma/High School/ Highersecondary)</label>
                                <input class="form-control" name="schoolcourse" value="HIGH SCHOOL" required="required">
                            </div>
                            <div class="form-group label-floating">
                                <label class="control-label">Board of Education</label>
                                <input class="form-control" type="text" value="Kerala board of exams" name="schoolbranch" required="required">
                            </div>
                            <div class="form-group label-floating">
                                <label class="control-label">Percentage of Marks</label>
                                <input class="form-control" name="sperc" required="required">
                            </div>
                        </div>
                        <!--Edu 2 -->

                        <div class="card card-nav-tabs" style="padding:10px; margin-right:10px; margin-bottom:15px;">
                            <div class="header header-success">
                                <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
                                <div class="nav-tabs-navigation">
                                    <div class="nav-tabs-wrapper">
                                        <h4 style="text-align:center;">Higher secondary</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group label-floating">
                                <label class="control-label">Name of Institution</label>
                                <input class="form-control" name="hss" required="required">
                            </div>
                            <div class="form-group label-floating">
                                <label class="control-label">Year of Passing</label>
                                <input class="form-control" type="text" value="2013-15" name="hssduring" required="required">
                            </div>
                            <div class="form-group label-floating">
                                <label class="control-label">Level (Graduation/Diploma/High School/ Highersecondary)</label>
                                <input class="form-control" name="hsscourse" value="HIGHER SECONDARY" required="required">
                            </div>
                            <div class="form-group label-floating">
                                <label class="control-label">Board of Education</label>
                                <input class="form-control" type="text" value="Kerala highersecondary board" name="hssbranch" required="required">
                            </div>
                            <div class="form-group label-floating">
                                <label class="control-label">Percentage of marks</label>
                                <input class="form-control" name="hssperc" required="required">
                            </div>
                        </div>
                        <div class="card card-nav-tabs" style="padding:10px; margin-right:10px; margin-bottom:15px;">
                            <div class="header header-info">
                                <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
                                <div class="nav-tabs-navigation">
                                    <div class="nav-tabs-wrapper">
                                        <h4 style="text-align:center;">College</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group label-floating">
                                <label class="control-label">Name of Institution</label>
                                <input class="form-control" name="college" required="required">
                            </div>
                            <div class="form-group label-floating">
                                <label class="control-label">Year of Passing</label>
                                <input class="form-control" type="text" value="2015-18" name="collegeduring" required="required">
                            </div>
                            <div class="form-group label-floating">
                                <label class="control-label">Level (Graduation/Diploma/High School/ Highersecondary)</label>
                                <input class="form-control" name="course" required="required">
                            </div>
                            <div class="form-group label-floating">
                                <label class="control-label">Board of Education</label>
                                <input class="form-control" type="text" value="Mechanical engg" name="branch" required="required">
                            </div>
                            <div class="form-group label-floating">
                                <label class="control-label">Percentage of marks</label>
                                <input class="form-control" name="cgpa" required="required">
                            </div>
                        </div>
                        <br/>
                        <select class="form-control" data-style="btn-success" name="theme">
                            <option value="info" selected>Material Cyan</option>
                            <option value="primary">Dark Green</option>
                            <option value="danger">Material Red</option>
                            <option value="warning">Material Orange</option>
                            <option value="default">Material Grey</option>
                        </select>
                        <input class="btn btn-primary" type="submit" value="create"><br/>
                    </form>
                    </div>
                    <div class="col-md-6" id="load">
                        <h2>View your resume</h2>
                        <p>Assuming that you have already created your reume using Resu.me. Use the form below to fetch it.</p>
                        <div class="card card-nav-tabs" style="padding:10px; margin-right:10px; margin-bottom:15px;">
                            <div class="header header-primary">
                                <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
                                <div class="nav-tabs-navigation">
                                    <div class="nav-tabs-wrapper">
                                        <h4 style="text-align:center;">Load resume</h4>
                                    </div>
                                </div>
                            </div>
                            <form action="load.php" method="post">
                            <div class="form-group label-floating">
                                <label class="control-label">Phone</label>
                                <input class="form-control" name="phone" required="required">
                            </div>
                            <div class="form-group label-floating">
                                <label class="control-label">Date of birth</label>
                                <input class="form-control datepicker" value="01/01/2018" type="text" name="dob" required="required">
                            </div>
                            <input type="submit" value="Load" class="btn btn-primary">
                            </form>
                        </div>
                    </div>

                    <div class="col-md-6">

                    </div>
                    </div>
            </div>
        </div>

    </div>
    </div>


</body>
    <!--   Core JS Files   -->
    <script src="assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/js/material.min.js"></script>

    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="assets/js/nouislider.min.js" type="text/javascript"></script>

    <!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
    <script src="assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

    <!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
    <script src="assets/js/material-kit.js" type="text/javascript"></script>

    <script type="text/javascript">

        $().ready(function(){
            // the body of this function is in assets/material-kit.js
            materialKit.initSliders();
            window_width = $(window).width();

            if (window_width >= 992){
                big_image = $('.wrapper > .header');

                $(window).on('scroll', materialKitDemo.checkScrollForParallax);
            }

        });
    </script>
</html>

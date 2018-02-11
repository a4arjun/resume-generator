<?php
  require_once('config.php');
  $stmt = $db->prepare('SELECT id,name,dp,about,father,mother,email,phone,city,pin,dist,house,dob,age,gender,nation,lang,theme,school,hss,college,sperc,hssperc,cgpa,course,schoolduring,hssduring,collegeduring,schoolcourse,hsscourse,branch,hssbranch,schoolbranch,basic_skills,skill1,skill2,skill3,skill4,skill5,skill6,skill1perc,skill2perc,skill3perc,skill4perc,skill5perc,skill6perc,accesskey FROM resume WHERE id = :id');
  $stmt->execute(array(':id' => $_GET['resume']));
  $row = $stmt->fetch();

  //if post does not exists redirect user.
  if($row['id'] == ''){
    header('Location: ./index.php');
    exit;
  }


  try {
        $stmt = $db->prepare('SELECT id,name,dp,about,father,mother,email,phone,city,pin,dist,house,dob,age,gender,nation,lang,theme,school,hss,college,sperc,hssperc,cgpa,course,schoolduring,hssduring,collegeduring,schoolcourse,hsscourse,branch,hssbranch,schoolbranch,basic_skills,skill1,skill2,skill3,skill4,skill5,skill6,skill1perc,skill2perc,skill3perc,skill4perc,skill5perc,skill6perc,accesskey FROM resume WHERE id = :id');
        $stmt->execute(array(':id' => $_GET['resume']));
        $row = $stmt->fetch();

        {
          }
      } catch(PDOException $e) 
      {
        echo $e->getMessage();
      }
      $page_title = $row['name'];
      $page_content = $row['about'];
 ?>
 <?php
//general
error_reporting(0);
$name = $row['name'];
$dp = $row['dp'];
$about = $row['about'];
$father = $row['father'];
$mother = $row['mother'];
$email = $row['email'];
$phone = $row['phone'];
$city = $row['city'];
$pin = $row['pin'];
$dist = $row['dist'];
$house = $row['house'];
$dob = $row['dob'];
$age = $row['age'];
$gender = $row['gender'];
$nation= $row['nation'];
$lang = $row['lang'];
$theme = $row['theme'];
//education
$school = $row['school'];
$hss = $row['hss'];
$college = $row['college'];
$sperc = $row['sperc'];
$hssperc = $row['hssperc'];
$cgpa = $row['cgpa'];
$course = $row['course'];
$schoolduring = $row['schoolduring'];
$hssduring = $row['hssduring'];
$collegeduring = $row['collegeduring'];
$schoolcourse = $row['schoolcourse'];
$hsscourse = $row['hsscourse'];
$branch = $row['branch'];
$hssbranch = $row['hssbranch'];
$schoolbranch = $row['schoolbranch'];

//Skills
$basic_skills = $row['basic_skills'];
$skill1 = $row['skill1'];
$skill2 = $row['skill2'];
$skill3 = $row['skill3'];
$skill4 = $row['skill4'];
$skill5 = $row['skill5'];
$skill6 = $row['skill6'];
$skill1perc = $row['skill1perc'];
$skill2perc = $row['skill2perc'];
$skill3perc = $row['skill3perc'];
$skill4perc = $row['skill4perc'];
$skill5perc = $row['skill5perc'];
$skill6perc = $row['skill6perc'];
?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $name; ?></title>
    <meta name="description" content="Creative CV is a HTML resume template for professionals. Built with Bootstrap 4, Now UI Kit and FontAwesome, this modern and responsive design template is perfect to showcase your portfolio, skils and experience."/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/aos.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="styles/main.css" rel="stylesheet">
  </head>
  <body id="top">

    <header>
      <div class="profile-page sidebar-collapse">
        <nav class="navbar navbar-expand-lg fixed-top navbar-transparent bg-<?php echo $theme; ?>" color-on-scroll="400">
          <div class="container">
            <div class="navbar-translate"><a class="navbar-brand" href="#" rel="tooltip"><?php echo $name; ?></a>
              <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-bar bar1"></span><span class="navbar-toggler-bar bar2"></span><span class="navbar-toggler-bar bar3"></span></button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">
              <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link smooth-scroll" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link smooth-scroll" href="#skill">Skills</a></li>
                <!--li class="nav-item"><a class="nav-link smooth-scroll" href="#experience">Experience</a></li-->
                <li class="nav-item"><a class="nav-link smooth-scroll" href="#education">Education</a></li>
                <li class="nav-item"><a class="nav-link smooth-scroll" href="#contact">Contact</a></li>
                <button name="submit" class="btn btn-primary btn-round btn-sm" data-toggle="modal" data-target="#myModal">Save resume</button>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <div class="page-content">
      <div>
<div class="profile-page">
  <div class="wrapper">
    <div class="page-header page-header-small" filter-color="green">
      <div class="page-header-image" data-parallax="true" style="background-image: url('images/cc-bg-1.jpg'); background-position:fixed;"></div>
      <div class="container">
        <div class="content-center">
          <div class="cc-profile-image"><a href="#"><img src="<?php echo $dp; ?>" alt="Image"/></a></div>
          <div class="h2 title"><?php echo $name; ?></div>
          <p class="category text-white"><?php echo $basic_skills; ?></p>
        </div>
      </div>
      <div class="section">
        <div class="container">
          <div class="button-container"><a class="btn btn-default btn-round btn-lg btn-icon" href="#" rel="tooltip" title="Follow me on Facebook"><i class="fa fa-facebook"></i></a><a class="btn btn-default btn-round btn-lg btn-icon" href="#" rel="tooltip" title="Follow me on Twitter"><i class="fa fa-twitter"></i></a><a class="btn btn-default btn-round btn-lg btn-icon" href="#" rel="tooltip" title="Follow me on Google+"><i class="fa fa-google-plus"></i></a><a class="btn btn-default btn-round btn-lg btn-icon" href="#" rel="tooltip" title="Follow me on Instagram"><i class="fa fa-instagram"></i></a></div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section" id="about">
  <div class="container">
    <div class="card" data-aos="fade-up" data-aos-offset="10">
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <div class="card-body">
            <div class="h4 mt-0 title">About</div>
            <p>Hello! I am <?php echo $name; ?>. <?php echo $basic_skills; ?>.</p>
            <p><?php echo $about; ?></p>
          </div>
        </div>
        <div class="col-lg-6 col-md-12">
          <div class="card-body">
            <div class="h4 mt-0 title">Basic Information</div>


            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Father:</strong></div>
              <div class="col-sm-8"><?php echo $father; ?></div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Mother:</strong></div>
              <div class="col-sm-8"><?php echo $mother; ?></div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Age:</strong></div>
              <div class="col-sm-8"><?php echo $age; ?></div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Email:</strong></div>
              <div class="col-sm-8"><?php echo $email; ?></div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Phone:</strong></div>
              <div class="col-sm-8"><?php echo $phone; ?></div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Address:</strong></div>
              <div class="col-sm-8"><?php echo $house; ?>, <?php echo $city; ?>, <?php echo $pin; ?></div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Language:</strong></div>
              <div class="col-sm-8"><?php echo $lang; ?></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section" id="skill">
  <div class="container">
    <div class="h4 text-center mb-4 title">Professional Skills</div>
    <div class="card" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <div class="progress-container progress-<?php echo $theme; ?>"><span class="progress-badge"><?php echo $skill1; ?></span>
              <div class="progress">
                <div class="progress-bar progress-bar-<?php echo $theme; ?>" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $skill1perc; ?>%;"></div><span class="progress-value"><?php echo $skill1perc; ?>%</span>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="progress-container progress-<?php echo $theme; ?>"><span class="progress-badge"><?php echo $skill2; ?></span>
              <div class="progress">
                <div class="progress-bar progress-bar-<?php echo $theme; ?>" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $skill2perc; ?>%;"></div><span class="progress-value"><?php echo $skill2perc; ?>%</span>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="progress-container progress-<?php echo $theme; ?>"><span class="progress-badge"><?php echo $skill3; ?></span>
              <div class="progress">
                <div class="progress-bar progress-bar-<?php echo $theme; ?>" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $skill3perc; ?>%;"></div><span class="progress-value"><?php echo $skill3perc; ?>%</span>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="progress-container progress-<?php echo $theme; ?>"><span class="progress-badge"><?php echo $skill4; ?></span>
              <div class="progress">
                <div class="progress-bar progress-bar-<?php echo $theme; ?>" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $skill4perc; ?>%;"></div><span class="progress-value"><?php echo $skill4perc; ?>%</span>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="progress-container progress-<?php echo $theme; ?>"><span class="progress-badge"><?php echo $skill5; ?></span>
              <div class="progress">
                <div class="progress-bar progress-bar-<?php echo $theme; ?>" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $skill5perc; ?>%;"></div><span class="progress-value"><?php echo $skill5perc; ?>%</span>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="progress-container progress-<?php echo $theme; ?>"><span class="progress-badge"><?php echo $skill6; ?></span>
              <div class="progress">
                <div class="progress-bar progress-bar-<?php echo $theme; ?>" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $skill6perc; ?>%;"></div><span class="progress-value"><?php echo $skill6perc; ?>%</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!--div class="section" id="experience">
  <div class="container cc-experience">
    <div class="h4 text-center mb-4 title">Work Experience</div>
    <div class="card">
      <div class="row">
        <div class="col-md-3 bg-<?php echo $theme; ?>" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body cc-experience-header">
            <p>March 2016 - Present</p>
            <div class="h5">CreativeM</div>
          </div>
        </div>
        <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body">
            <div class="h5">Front End Developer</div>
            <p>Euismod massa scelerisque suspendisse fermentum habitant vitae ullamcorper magna quam iaculis, tristique sapien taciti mollis interdum sagittis libero nunc inceptos tellus, hendrerit vel eleifend primis lectus quisque cubilia sed mauris. Lacinia porta vestibulum diam integer quisque eros pulvinar curae, curabitur feugiat arcu vivamus parturient aliquet laoreet at, eu etiam pretium molestie ultricies sollicitudin dui.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="row">
        <div class="col-md-3 bg-<?php echo $theme; ?>" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body cc-experience-header">
            <p>April 2014 - March 2016</p>
            <div class="h5">WebNote</div>
          </div>
        </div>
        <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body">
            <div class="h5">Web Developer</div>
            <p>Euismod massa scelerisque suspendisse fermentum habitant vitae ullamcorper magna quam iaculis, tristique sapien taciti mollis interdum sagittis libero nunc inceptos tellus, hendrerit vel eleifend primis lectus quisque cubilia sed mauris. Lacinia porta vestibulum diam integer quisque eros pulvinar curae, curabitur feugiat arcu vivamus parturient aliquet laoreet at, eu etiam pretium molestie ultricies sollicitudin dui.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="row">
        <div class="col-md-3 bg-<?php echo $theme; ?>" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body cc-experience-header">
            <p>April 2013 - February 2014</p>
            <div class="h5">WEBM</div>
          </div>
        </div>
        <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body">
            <div class="h5">Intern</div>
            <p>Euismod massa scelerisque suspendisse fermentum habitant vitae ullamcorper magna quam iaculis, tristique sapien taciti mollis interdum sagittis libero nunc inceptos tellus, hendrerit vel eleifend primis lectus quisque cubilia sed mauris. Lacinia porta vestibulum diam integer quisque eros pulvinar curae, curabitur feugiat arcu vivamus parturient aliquet laoreet at, eu etiam pretium molestie ultricies sollicitudin dui.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div-->
<div class="section" id="education">
  <div class="container cc-education">
    <div class="h4 text-center mb-4 title">Education</div>
    <div class="card">
      <div class="row">
        <div class="col-md-3 bg-<?php echo $theme; ?>" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body cc-education-header">
            <p><?php echo $collegeduring; ?></p>
            <div class="h5"><?php echo $course; ?></div>
          </div>
        </div>
        <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body">
            <div class="h5"><?php echo $college; ?></div>
            <p class="category"><?php echo $branch; ?></p>
            <p><?php echo $course; ?> from <?php echo $college; ?> with an aggregate of <?php echo $cgpa; ?>%</p>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="row">
        <div class="col-md-3 bg-<?php echo $theme; ?>" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body cc-education-header">
            <p><?php echo $hssduring; ?></p>
            <div class="h5"><?php echo $hsscourse; ?></div>
          </div>
        </div>
        <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body">
            <div class="h5"><?php echo $hss; ?></div>
            <p class="category"><?php echo $hssbranch; ?></p>
            <p>Completed <?php echo $hsscourse; ?> from <?php echo $hss; ?> during the year <?php echo $hssduring; ?> with an aggregate of <?php echo $hssperc;?>%.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="row">
        <div class="col-md-3 bg-<?php echo $theme; ?>" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body cc-education-header">
            <p><?php echo $schoolduring; ?></p>
            <div class="h5"><?php echo $schoolcourse;?></div>
          </div>
        </div>
        <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body">
            <div class="h5"><?php echo $school; ?></div>
            <p class="category"><?php echo $schoolbranch;?></p>
            <p>Completed <?php echo $schoolcourse; ?> from <?php echo $school; ?> during the year <?php echo $schoolduring; ?> with an aggregate of <?php echo $sperc;?>%.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="section" id="contact">
  <div class="cc-contact-information" style="background-image: url('images/staticmap.png');">
    <div class="container">
      <div class="cc-contact">
        <div class="row">
          <div class="col-md-9">
            <div class="card mb-0" data-aos="zoom-in">
              <div class="h4 text-center title">Contact Me</div>
              <div class="row">
                <div class="col-md-6">
                  <div class="card-body">
                    <form action="https://formspree.io/<?php echo $email; ?>" method="POST">
                      <div class="p pb-3"><strong>Feel free to contact me </strong></div>
                      <div class="row mb-3">
                        <div class="col">
                          <div class="input-group"><span class="input-group-addon"><i class="fa fa-user-circle"></i></span>
                            <input class="form-control" type="text" name="name" placeholder="Name" required="required"/>
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col">
                          <div class="input-group"><span class="input-group-addon"><i class="fa fa-file-text"></i></span>
                            <input class="form-control" type="text" name="Subject" placeholder="Subject" required="required"/>
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col">
                          <div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input class="form-control" type="email" name="_replyto" placeholder="E-mail" required="required"/>
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col">
                          <div class="form-group">
                            <textarea class="form-control" name="message" placeholder="Your Message" required="required"></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <button class="btn btn-<?php echo $theme; ?>" type="submit">Send</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card-body">
                    <p class="mb-0"><strong>Address </strong></p>
                    <p class="pb-2"><?php echo $house;?>, <?php echo $city; ?><br/><?php echo $dist; ?>,<?php echo $pin; ?><br/><b><?php echo $nation;?></b></p>
                    <p class="mb-0"><strong>Phone</strong></p>
                    <p class="pb-2"><?php echo $phone; ?></p>
                    <p class="mb-0"><strong>Email</strong></p>
                    <p><?php echo $email; ?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
    </div>
    <footer class="footer">
      <div class="container text-center"><a class="cc-facebook btn btn-link" href="#"><i class="fa fa-facebook fa-2x " aria-hidden="true"></i></a><a class="cc-twitter btn btn-link " href="#"><i class="fa fa-twitter fa-2x " aria-hidden="true"></i></a><a class="cc-google-plus btn btn-link" href="#"><i class="fa fa-google-plus fa-2x" aria-hidden="true"></i></a><a class="cc-instagram btn btn-link" href="#"><i class="fa fa-instagram fa-2x " aria-hidden="true"></i></a></div>
      <div class="h4 title text-center"><?php echo $name; ?></div>
      <div class="text-center text-muted">
        <p>&copy; Creative CV. All rights reserved.<br>Design - <a class="credit" href="https://templateflip.com" target="_blank">TemplateFlip</a></p>
      </div>
    </footer>

   </body>

    <script src="js/core/jquery.3.2.1.min.js"></script>
    <script src="js/core/popper.min.js"></script>
    <script src="js/core/bootstrap.min.js"></script>
    <script src="js/now-ui-kit.js?v=1.1.0"></script>
    <script src="js/aos.js"></script>
    <script src="scripts/main.js"></script>
  </body>
</html>

<?php

  require_once('config.php');
          

          //if form has been submitted process it
          if(isset($_POST['submit'])){

            $_POST = array_map( 'stripslashes', $_POST );

            //collect form data
            extract($_POST);
            $name = strip_tags($_POST['name']);
            $dp = strip_tags($_POST['dp']);
            $about = strip_tags($_POST['about'],'<a><b><i><u><h3><h4><h5><h6><strong><br><hr><p><span><img>');
            $father = strip_tags($_POST['father']);
            $mother = strip_tags($_POST['mother']);
            $email = strip_tags($_POST['email']);
            $phone = strip_tags($_POST['phone']);
            $city = strip_tags($_POST['city']);
            $pin = strip_tags($_POST['pin']);
            $dist = strip_tags($_POST['dist']);
            $house = strip_tags($_POST['house']);
            $dob = strip_tags($_POST['dob']);
            $age = strip_tags($_POST['age']);
            $gender = strip_tags($_POST['gender']);
            $nation= strip_tags($_POST['nation']);
            $lang = strip_tags($_POST['lang']);
            $theme = strip_tags($_POST['theme']);
            //education
            $school = strip_tags($_POST['school']);
            $hss = strip_tags($_POST['hss']);
            $college = strip_tags($_POST['college']);
            $sperc = strip_tags($_POST['sperc']);
            $hssperc = strip_tags($_POST['hssperc']);
            $cgpa = strip_tags($_POST['cgpa']);
            $course = strip_tags($_POST['course']);
            $schoolduring = strip_tags($_POST['schoolduring']);
            $hssduring = strip_tags($_POST['hssduring']);
            $collegeduring = strip_tags($_POST['collegeduring']);
            $schoolcourse = strip_tags($_POST['schoolcourse']);
            $hsscourse = strip_tags($_POST['hsscourse']);
            $branch = strip_tags($_POST['branch']);
            $hssbranch = strip_tags($_POST['hssbranch']);
            $schoolbranch = strip_tags($_POST['schoolbranch']);

            //Skills
            $basic_skills = strip_tags($_POST['basic_skills']);
            $skill1 = strip_tags($_POST['skill1']);
            $skill2 = strip_tags($_POST['skill2']);
            $skill3 = strip_tags($_POST['skill3']);
            $skill4 = strip_tags($_POST['skill4']);
            $skill5 = strip_tags($_POST['skill5']);
            $skill6 = strip_tags($_POST['skill6']);
            $skill1perc = strip_tags($_POST['skill1perc']);
            $skill2perc = strip_tags($_POST['skill2perc']);
            $skill3perc = strip_tags($_POST['skill3perc']);
            $skill4perc = strip_tags($_POST['skill4perc']);
            $skill5perc = strip_tags($_POST['skill5perc']);
            $skill6perc = strip_tags($_POST['skill6perc']);
            $accesskey = strip_tags($_POST['accesskey']);
            //very basic validation
            if($name ==''){
              $error[] = 'Please enter the name.';
            }

            if($about ==''){
              $error[] = 'Please enter the about.';
            }

            if(!isset($error)){

              try {

                //insert into database
                $stmt = $db->prepare('INSERT INTO resume (name,dp,about,father,mother,email,phone,city,pin,dist,house,dob,age,gender,nation,lang,theme,school,hss,college,sperc,hssperc,cgpa,course,schoolduring,hssduring,collegeduring,schoolcourse,hsscourse,branch,hssbranch,schoolbranch,basic_skills,skill1,skill2,skill3,skill4,skill5,skill6,skill1perc,skill2perc,skill3perc,skill4perc,skill5perc,skill6perc,accesskey) VALUES (:name, :dp, :about, :father, :mother, :email, :phone, :city, :pin, :dist, :house, :dob, :age, :gender, :nation, :lang, :theme, :school, :hss, :college, :sperc, :hssperc, :cgpa, :course, :schoolduring, :hssduring, :collegeduring, :schoolcourse, :hsscourse, :branch, :hssbranch, :schoolbranch, :basic_skills, :skill1, :skill2, :skill3, :skill4, :skill5, :skill6, :skill1perc, :skill2perc, :skill3perc, :skill4perc, :skill5perc, :skill6perc, :accesskey)') ;
                $stmt->execute(array(
                  ':name' => $name,
                  ':dp' => $dp,
                  ':about' => $about,
                  ':father' => $father,
                  ':mother' => $mother,
                  ':email' => $email,
                  ':phone' => $phone,
                  ':city' => $city,
                  ':pin' => $pin,
                  ':dist' => $dist,
                  ':house' => $house,
                  ':dob' => $dob,
                  ':age' => $age,
                  ':gender' => $gender,
                  ':nation' => $nation,
                  ':lang' => $lang,
                  ':theme' => $theme,
                  ':school' => $school,
                  ':hss' => $hss,
                  ':college' => $college,
                  ':sperc' => $sperc,
                  ':hssperc' => $hssperc,
                  ':cgpa' => $cgpa,
                  ':course' => $course,
                  ':schoolduring' => $schoolduring,
                  ':hssduring' => $hssduring,
                  ':collegeduring' => $collegeduring,
                  ':schoolcourse' => $schoolcourse,
                  ':hsscourse' => $hsscourse,
                  ':branch' => $branch,
                  ':hssbranch' => $hssbranch,
                  ':schoolbranch' => $schoolbranch,
                  ':basic_skills' => $basic_skills,
                  ':skill1' => $skill1,
                  ':skill2' => $skill2,
                  ':skill3' => $skill3,
                  ':skill4' => $skill4,
                  ':skill5' => $skill5,
                  ':skill6' => $skill6,
                  ':skill1perc' => $skill1perc,
                  ':skill2perc' => $skill2perc,
                  ':skill3perc' => $skill3perc,
                  ':skill4perc' => $skill4perc,
                  ':skill5perc' => $skill5perc,
                  ':skill6perc' => $skill6perc,
                  ':accesskey' => $accesskey


                ));

                //redirect to index page
                header('Location: load.php');
                exit;

              } catch(PDOException $e) {
                  echo $e->getMessage();
              }

            }

          }

          //check for any errors
          if(isset($error)){
            foreach($error as $error){
              echo '<p class="error">'.$error.'</p>';
            }
          }
?>

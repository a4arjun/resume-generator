<?php
  $a= $_POST['phone'];
  $b = $_POST['dob'];
  
  $c = $b.$a;
  require_once('config.php');
  $stmt = $db->prepare('SELECT accesskey, id, name, about FROM resume WHERE accesskey = :accesskey');
  $stmt->execute(array(':accesskey' => $c));
  $row = $stmt->fetch();

  //if post does not exists redirect user.
  if($row['accesskey'] == ''){
    header('Location: ./index.php');
    exit;
  }


  try {
        $stmt = $db->prepare('SELECT accesskey, id, name, about FROM resume WHERE accesskey = :accesskey');
        $stmt->execute(array(':accesskey' => $c));
        $row = $stmt->fetch();

        {
          }
      } catch(PDOException $e) 
      {
        echo $e->getMessage();
      }
      $name = $row['name'];
      $about = $row['about'];
 ?>
 <?php include 'header.php'; ?>
 <div class="wrapper">
    <div class="header header-filter" style="background-image: url('assets/img/bg2.jpeg');">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="brand">
                        <h1>Resu.me</h1>
                        <h3>A free resume/cv generator</h3>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="main">
        <div class="section section-basic">
      <div class="container">
        <h2>Welcome back <b><?php echo $name;?> </b></h2>
        <p><a class="btn btn-round btn-success" href="view.php?resume=<?php echo $row['id'];?>">Click to show my resume</a></p>
        <p><h2>About <?php echo $name; ?></h2></p>
        <p><?php echo $about;?></p>
      </div>
    </div>
 </div>
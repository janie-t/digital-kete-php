<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="Janie Tito | Portfolio" content="">
  <meta name="Janie Tito" content="">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.css" rel="stylesheet">
  <link rel="icon" href="../../favicon.ico">
  <link href="https://fonts.googleapis.com/css?family=Arimo" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
  <link rel="icon" type="image/png" href="images/favicon.ico">
  <link href="styles/main.css" rel="stylesheet">
  <title><?php echo $title ?></title>
</head>

<body>

  <div class="container"><!--Start Container-->
    <div class="row">
      <div class="two columns">
          <img class="logo" src="images/teacup.jpg" alt="teacup" >
      </div>
      <div class="ten columns nav">
        <ul>
          <li class="links"><a href="index.php">Home</a></li>
          <li class="links"><a href="about.php">About</a></li>
          <li class="links"><a href="projects.php">Projects</a></li>
          <li class="links"><a href="personalblog.php">Personal Development</a></li>
          <li class="links"><a href="techblog.php">Learning Code</a></li>
          <li class="links"><a href="contact.php">Contact</a></li>
        </ul>
      </div>
    </div>

    <div class = "header">
      <?php echo $header ?>
    </div>


    <div class="content">
      <?php echo $content ?>
    </div>

  </div><!--end of container-->

</body>
</html>

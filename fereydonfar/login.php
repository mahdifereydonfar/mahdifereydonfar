<?php

require_once 'function.php';


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Material Design for Bootstrap</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="css/mdb.min.css" />
  <!-- Custom styles -->
  <link rel="stylesheet" href="css/style.css" />
</head>


<body>

 <!--Main Navigation-->
 <header>
    <style>
      #intro {
        background: #121212;
        height: 100vh;
      }
    </style>
    <!-- Background image -->
    <div id="intro" class="bg-image shadow-2-strong">
      <div class="mask d-flex align-items-center h-100" style="background-color: rgba(0, 0, 0, 0.8);">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-md-8">

              <?php if (isset($_SESSION['error']) && !empty($_SESSION['error'])) : ?>

                <div class="alert alert-info" style="text-align: right;"><?php echo $_SESSION['error']; ?></div>';

              <?php endif; ?>

              <?php if (isset($_SESSION['top'])) : ?>

                <h3 class="text-white"> back to page</h3>

                <a class="btn btn-info" href="/index.php">input to index</a>
                <a class="btn btn-danger" href="/index.php?exit">exit</a>

              <?php else : ?>

                <form action="check.php" method="post" class="bg-white rounded shadow-5-strong p-5">

                  <div class="form-outline mb-4">
                    <input type="text" id="form1Example1" class="form-control" name="txt_user" value="<?php if (isset($_SESSION['value']) && !empty($_SESSION['value']['txt_user'])) : echo $_SESSION['value']['txt_user'];
                                                                                                      endif; ?>" />
                    <label class="form-label" for="form1Example1">username</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="text" id="form1Example2" class="form-control" name="txt_pass" value="<?php if (isset($_SESSION['value']) && !empty($_SESSION['value']['txt_pass'])) : echo $_SESSION['value']['txt_pass'];
                                                                                                      endif; ?>" />
                    <label class="form-label" for="form1Example2">password</label>
                  </div>

                  <button type="submit" class="btn btn-primary btn-block">input to index</button>

                </form>

              <?php endif; ?>

            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <script type="text/javascript" src="js/mdb.min.js"></script>
</body>



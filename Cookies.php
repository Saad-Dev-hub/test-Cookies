<?php

if ($_GET) {
  setcookie('Body', $_GET['Color'], time() + 24 * 60 * 60, '/');
}
?>
<!doctype html>
<html lang="en">

<head>
  <title>COOKIES</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <style>
    .Red {
      background-color: Red;
      color: #fff;
    }

    .Green {
      background-color: green;
      color: yellow;
    }

    .Blue {
      background-color: blue;
      color: pink;

    }
  </style>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body class="<?php 
           
              
              if (isset($_COOKIE['Body'])) {
                echo $_COOKIE['Body'];
              }
             
              ?>">
  <h1>Change Color</h1>
  <form method="get">
    <select class="form-control w-25" name="Color">
      <option value="Red" <?php
                          //   if ($_GET) {
                          //     if (isset($_COOKIE['Body'])) {
                          //       if($_COOKIE['Body']=='Red') echo 'selected';
                          //     else echo'';
                          //   }
                          // }
                          if (isset($_GET['Color'])) {
                            if ($_GET['Color'] == 'Red') {
                              echo 'selected';
                            } else echo '';
                          }
                          ?>>Red</option>
      <option value="Green" <?php
                            // if ($_GET) {
                            //   if (isset($_COOKIE['Body'])) {
                            //     if($_COOKIE['Body']=='Green') echo 'selected';
                            //   else echo'';
                            // }
                            // }
                            if (isset($_GET['Color'])) {
                              if ($_GET['Color'] == 'Green') {
                                echo 'selected';
                              } else echo '';
                            }

                            ?>>Green</option>
      <option value="Blue" <?php
                            // if ($_GET) {
                            //   if (isset($_COOKIE['Body'])) {
                            //     if($_COOKIE['Body']=='Blue') echo 'selected';
                            //   else echo'';
                            // }
                            // }
                            if (isset($_GET['Color'])) {
                              if ($_GET['Color'] == 'Blue') {
                                echo 'selected';
                              } else echo '';
                            }


                            ?>>Blue</option>
    </select>
    <input class="btn btn-primary mt-2" type="submit">
  </form>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <?php 
      $isAuthenticated = isset($_SESSION['user']) && !empty($_SESSION['user']['email_user']);
      $page = isset($request[1]) ? $request[1] : 'login';
      
      if ($isAuthenticated) {
        switch ($page) {
          case 'home':
            include 'home/home.php';
            break;
          case 'logout':
            include 'logout/logout.php';
            break;
          default:
            include 'home/home.php'; 
        }
      } else {
        switch ($page) {
          case 'login':
            include 'login/login.php';
            break;
          case 'register':
            include 'registration/registration.php';
            break;
          default:
            include 'login/login.php';
        }
      }
    ?>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
<?php require_once(__DIR__  . "/reg.php") ?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>CTF - CH27</title>
  </head>
  <body style="background-color: #333333">
    <nav class="navbar navbar-dark bg-dark">
      <span class="navbar-brand h1 pb-0">CTF - CH27</span>
    </nav>

    <div class="container mt-5">
        <form action="/index.php" method="POST">
            <div class="form-group">
              <?php if (isset($msg)): ?>
                <?= "<label style='color: white;'>$msg</label><br>"; ?>
              <?php endif; ?>

              <input type="text" class="form-control" name="username" placeholder="username" required autofocus>
              <br>
              <input type="password" class="form-control" name="password" placeholder="password" required>
            </div>
            <div class="form-group">
              <a href="/reg.txt">View /reg.php Source Code</a>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
  </body>
</html>

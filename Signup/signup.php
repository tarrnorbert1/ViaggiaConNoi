<?php
    session_start();
?>  
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registrati!</title>
    </head>
    <body>
        <br>
        <h1> Registati subito, è Gratis! </h1>
        <form>
  <div class="form-group">
    <label for="UsernameInput">Username</label>
    <input type="Username" class="form-control" id="username" aria-describedby="Username">
    <small id="UsernameHelp" class="form-text text-muted">Massimo 15 Caratteri!</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
    <small id="passwordHelp" class="form-text text-muted">Per password più sicura inserire Carattere maiuscolo, minuscolo, numero ed un carattere speciale</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Indirizzo Mail</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">non condivideremo nulla senza il tuo consenso</small>
  </div>
  <button type="submit" class="btn btn-primary">Registrati!</button>
  <form action="index.php" method="POST">
    <button type="submit" class="btn btn-primary">Indietro</button>
  </form>
</form>
    </body>
</html>
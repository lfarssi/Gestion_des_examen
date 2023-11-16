<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container w-25 d-block mx-auto mt-5 bg-light rounded p-1">
       <?php 
      echo isset($_GET["Invalide"])?" <p class='alert alert-danger'>Login ou mot de pass est incoreect</p>":"";
       ?>
        <form action="../Routers/router1.php" method="post">
            <div class="form-group">
            <label for="Email" class="form-label">Email address</label>
  <input type="text" class="form-control" id="Email" name="email" >
        <small class="text">@Ofppt-edu.ma</small>
            </div>
            <div class="form-group">
            <label for="Pass" class="form-label">Mot de pass</label>
  <input type="password" class="form-control" id="Pass" name="pass" >

            </div>
            <div class="form-check">
  <input class="form-check-input" type="radio" checked name="type" value="Directeur" id="flexRadioDefault1">
  <label class="form-check-label" for="type">
    Directeur
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="type" value="Formateur" id="flexRadioDefault2" >
  <label class="form-check-label" for="flexRadioDefault2">
    Formateur
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="type" value="Stagiaire" id="flexRadioDefault2" >
  <label class="form-check-label" for="flexRadioDefault2">
    Stagiaire
  </label>
</div>
<button type="submit" name="login" class="btn btn-success mt-4">Login</button>
        </form>
    </div>
</body>
</html>
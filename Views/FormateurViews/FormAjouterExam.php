<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="Views/style/bootstrap.min.css">

    <title>Document</title>
</head>
<body>
<div class="container mt-4 w-50 mx-auto">
<form action="index.php?Submited=oneline-added" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">date de Passation</label>
    <input type="date" class="form-control" name="PassDate" id="exampleInputEmail1" aria-describedby="emailHelp" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">LIB</label>
    <input type="text" class="form-control" name="lib" id="exampleInputEmail1" aria-describedby="emailHelp" >
  </div>
  <div class="form-group w-100">
    <label for="exampleInputPassword1">Number de Question</label>
    <input type="number" class="form-control w-25 d-inline-block" name="QN" id="exampleInputPassword1" >
    <label for="exampleIn2">Duree Par minute </label>
    <input type="number" class="form-control  w-25 d-inline-block mx-3 " name="D" id="exampleIn2" >
    <label for="exampleIn3">Nombre de Question Preparer</label>
    <input type="number" class="form-control  w-25 d-inline-block mt-2" name="QPN" id="exampleIn3" >
  </div>
  <div class="form-check">
  <label class="form-check-label" for="">Choises une Competence</label><br>
    <label class="form-check-label" for="CC1">CC1</label>
    <input type="radio" class="" name="Cptc" value="C1" id="CC1"><br>
    <label class="form-check-label" for="CC2">CC2</label>
    <input type="radio" class="" name="Cptc" value="C2" id="CC2"><br>
    <label class="form-check-label" for="CC3">CC3</label>
    <input type="radio" class="" name="Cptc" value="C3" id="CC3"><br>
    <label class="form-check-label" for="CC4">CC4</label>
    <input type="radio" class="" name="Cptc" value="C3" id="CC4"><br>
    <label class="form-check-label" for="EFM">EFM</label>
    <input type="radio" class="" name="Cptc" value="EFM" id="EFM">
  </div>
  <div class="form-check">
  <label class="form-check-label" for="">Examen Mode</label><br>
    <input type="radio" class="" name="PUB" value="Publie" id="exampleCheck1">
    <label class="form-check-label" for="CC1">Publie</label>
    <input type="radio" class="" name="PUB" value="NON-Publie" id="CC1">
    <label class="form-check-label" for="CC2">NON-Publie</label>

  </div>
  <button type="submit" value="sub" name="ExamAjt" class="btn btn-primary d-inline-block ">Ajouter</button>
</form>
</div>
</body>
</html>
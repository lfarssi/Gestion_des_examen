
   
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
  <title>Responsive Nav Bar</title>
  <style>
    .nav-link {
      color: #333;
    }

    .nav-link.active {
      color: #fff;
      background-color: #007bff;
    }
  </style>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="index.php"><i class="fas fa-home"></i> Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?ajEx=True"><i class="fas fa-file-alt"></i> Exam</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Routers/logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
        </li>
      </ul>
    </div>
  </nav>

   

<?php 
$fr=new FormateurController();
if(isset($_GET["ajEx"])) {
    $fr->ListerModuleEtGroupe($user);
}
else if(isset($_GET["Submited"])){
    $module=$_POST["Module"];
    $fr->AjouterExam($user,$module);
}
else if(isset($_GET["AjouterQuestion"])){
   //$fr->AjouterQuestion($user);
   require_once "Views/FormateurViews/AjouterQuestion.php";
}
else{
  echo "<div class='alert alert-info w-50 mx-auto mt-4 text-center'>bonjour ".$user."</div> ";
}

?>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js"></script>
  <script>
    $(document).ready(function () {
      $('.nav-link').click(function () {
        $('.nav-link').removeClass('active');
        $(this).addClass('active');
      });
    });
  </script>
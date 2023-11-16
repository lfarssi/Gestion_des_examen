<!DOCTYPE html>
<html>
<head>
  <title>Dynamic Input Example</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

  <div class="container mt-5">
    <h3>Ajouter Question</h3>
    <button id="addInputBtn" class="btn btn-success">Ajouter Input</button>
    <hr>
    <form action="" method="get" id="inputContainer">
        <input type="submit" value="Envoyer" class="btn btn-danger" name="AjQ" >
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script>
    var inputCount = 0;

    $(document).ready(function() {
      $('#addInputBtn').click(function() {
        inputCount++;
        var newInput = '<div class="form-group">' +
          '<label for="input' + inputCount + '">Question ' + inputCount + '</label>' +
          '<input type="text" name=Question'+inputCount+' class="form-control" id="input' + inputCount + '">' +
          '</div>';

        $('#inputContainer').prepend(newInput);
      });
    });
  </script>

</body>
</html>
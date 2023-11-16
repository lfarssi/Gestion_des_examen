<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="Views/styling/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <div class="container w-75 d-block mx-auto mt-5 bg-light ">

        <form action="index.php?Submited=True" method="post">
    <div class="row">
    <div class="col-5 form-group  ">
                <select name="Module" class="form-control" id="module">
                    <option value="">Selectionne une module</option>
                    <?php 
                    foreach($module as $m):
                    ?>
                    <option value="<?=$m->id?>" ><?=$m->lib?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="col-5 form-group ">
                <select name="Groupe" class="form-control" id="module">
                    <option value="">Selectionne une groupe</option>
                    <?php 
                    foreach($groupe as $g):
                    ?>
                    <option value="<?=$g->id?>"><?=$g->lib?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="col-2">
        <input type="submit" name="Ajouter" value="ajouter" class="btn btn-primary">

            </div>
        </div>

    </form>
    </div>

</body>

</html>
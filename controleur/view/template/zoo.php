<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="stylesheet" href="./assets/css/normalize.css">
    <link type="text/css" rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="./assets/css/style.css">
    <title>Zoolympie</title>
</head>

<body>

    <?php include './view/template/header.php';?>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
          <?php include './functions/router.php';?>
            </div>
        </div>
    </div>

    <?php include './view/template/footer.php';?>

</body>

</html>
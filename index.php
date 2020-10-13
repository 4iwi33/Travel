<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>index</title>
</head>

<body>
    <?php require "header.php" ?>
    <div class="container mt-5">
        <div class="d-flex flex-wrap">
            <?php for ($i = 0; $i < 50; $i++) : ?>
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Штат</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/<?php echo ($i + 1) ?>.jpg" class="img-thumbnail">
                        <ul class="list-unstyled mt-3 mb-4">
                        </ul>
                        <button type="button" class="btn btn-lg btn-block btn-primary">Посетить</button>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>


</body>

</html>
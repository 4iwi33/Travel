<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Travel</title>
</head>

<body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <h5 class="my-0 mr-md-auto font-weight-normal">Путешествия по Амерке</h5>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="#">Главная</a>
            <a class="p-2 text-dark" href="#">Регистрация</a>
        </nav>
        <a class="btn btn-outline-primary" href="#">Войти</a>
    </div>


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
                            <li>20 users included</li>
                            <li>10 GB of storage</li>
                        </ul>
                        <button type="button" class="btn btn-lg btn-block btn-primary">Посетить</button>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>


</body>

</html>
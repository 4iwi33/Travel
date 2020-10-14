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

    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <h5 class="my-0 mr-md-auto font-weight-normal">Путешествия по Амерке</h5>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="index.php">Главная</a>
            <a class="p-2 text-dark" href="registration.php">Регистрация</a>
        </nav>

        <?php if ($_COOKIE['user']  == 'true') : ?>
            <a class="btn btn-danger" href="authentication.php">Выйти</a>

        <?php else : ?>

            <a class="btn btn-outline-primary" href="authentication.php">Войти</a>

        <?php endif; ?>
    </div>

</body>
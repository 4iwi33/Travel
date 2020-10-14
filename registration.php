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
        </nav>
        <a class="btn btn-outline-primary" href="#">Войти</a>
    </div>

    <div class="container text-center mt-5">
        <h2>Пожалуйста войдите</h2>
        <form action="check.php" method="POST" class="form-signin ">
            <input type="email" name="email" placeholder="Введите Email" class="form-control"><br>
            <textarea name="message" class="form-control" placeholder="Введите пароль"></textarea><br>
            <button type="submit" name="send" class="btn btn-success">Зарегистрировать</button>
        </form>
    </div>
</body>
<!-- <form action="check.php" method="POST" class="form-signin ">
            <h1 class="h3 mb-3 font-weight-normal">Пожалуйста войдите</h1>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Логин" required="" autofocus="">
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Пароль" required="">
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Запомнить
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Войти</button>
        </form>
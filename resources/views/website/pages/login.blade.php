<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <!-- style -->
    <link rel="stylesheet" href="{{ asset('website/login/form.css') }}">

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <title>User login form</title>
</head>
<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <div class="fadeIn first">
                <p>Please! Login from here</p>
            </div>
            <form>
                <input type="text" id="login" class="fadeIn second" name="login" placeholder="Enter User Name">
                <input type="text" id="password" class="fadeIn third" name="login" placeholder="Enter Password">
                <input type="submit" class="fadeIn fourth" value="Log In">
            </form>
            <div id="formFooter">
                <strong>if not login</strong>
                <a class="underlineHover" href="{{ route('user.registration.form') }}">Register here</a>
            </div>
        </div>
    </div>
</body>
</html>
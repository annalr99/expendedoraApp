<!--!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expendedora<title>
</head-->
<body>
    <h1>Login</h1>
    <form method="POST" action="{{route('login')}}" >
        @csrf
        <label> Usuari: <input type="text" name="email"></label><br>
        <label> Paraula de pas: <input type="password" name="pwd"></label><br>
        <button type="submit"> Enviar</button>
    </form>

</body>
<!--/html-->
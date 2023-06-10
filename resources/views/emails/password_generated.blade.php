<!DOCTYPE html>
<html>
<head>
    <title>Mot de passe généré</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container" style="background-color: #f8f9fa; border-radius: 5px; padding: 20px;">
        <h1  style="color: blue; font-family: 'Arial';" ><strong>Mot de passe généré</strong></h1>
        <p class="mt-3">Bonjour {{ $name }},</p>
        <p>Votre mot de passe généré est : <a class="btn btn-primary" type="submit" disabled>{{ $password }}</a></p>
        <p>Vous pouvez utiliser ce mot de passe pour vous connecter à votre compte.</p>
    </div>
</body>

</html>



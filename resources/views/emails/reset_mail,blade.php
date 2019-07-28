<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        Hi,{{$user->name}}.
        You requested for a password reset, click on the following link to reset your password {{URL('/password/reseting'.$user->token)}}
        
    </div>
</body>
</html>
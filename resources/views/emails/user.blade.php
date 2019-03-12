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
        Below are your details
        <table>
            <tr>
                <th>Name</th>
                <th>Account Number</th>
                <th>your withdrawal code/transfer code</th>
                <th>Code</th>
            </tr>
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->phone}}</td>
                <td>{{$user->account->private_key}}</td>
                <td>{{$user->verified_link}}</td>
            </tr>
        </table>
        <div>
            Verify your account by clicking <a href='{{ URL("/verify/{$user->verified_link}")}}'>Verify</a>
        </div>
    </div>
</body>
</html>
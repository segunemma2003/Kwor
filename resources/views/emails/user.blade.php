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
            </tr>
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->phone}}</td>
                <td>{{$user->private_key}}</td>
            </tr>
        </table>
    </div>
</body>
</html>
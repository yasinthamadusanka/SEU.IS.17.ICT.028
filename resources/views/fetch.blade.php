<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fetch Detail</title>
</head>
<body>
    <table border="1" width="50%">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Date of Birth</th>
            <th>Telephone No</th>
            <th>NIC No</th>
            <th>Gender</th>
            <th colspan="2">Actions</th>
        </tr>
        @foreach ($detail as $x)
        <tr>
            <td>{{$x['id']}}</td>
            <td>{{$x['name']}}</td>
            <td>{{$x['date']}}</td>
            <td>{{$x['phonenumber']}}</td>
            <td>{{$x['nic']}}</td>
            <td>{{$x['gender']}}</td>
            <td><a href={{"edit/".$x['id']}}>Edit</a></td>
            <td><a href={{"delete/".$x['id']}}>Delete</a></td>
        </tr>
        @endforeach

    </table>
</body>
</html>
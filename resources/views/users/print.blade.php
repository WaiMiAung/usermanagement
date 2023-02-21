<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>
    <h2 class="text-center">Users List</h2>
    <table class="table table-stripped" id="datatablesSimple">
        <thead>
            <th>Username</th>
            <th>Name</th>
            <th>Role</th>
            <th>Email</th>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{$user->username}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->role->name}}</td>
                <td>{{$user->email}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="text-center">
        <button class="btn btn-primary" onclick="window.print()">Print</button>
    </div>
    
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
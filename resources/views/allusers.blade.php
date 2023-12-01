<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>All User List</h1>
                <a href="/newuser" class="btn btn-success btn-sm">Add User</a>
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>AGE</th>
                        <th>CITY</th>
                        <th>EMAIL</th>
                        <th>View</th>  
                        <th>Delete</th> 
                        <th>Update</th>
                    </tr>
                    @foreach ($data as $id => $user)
                    <tr>
                        <td> {{$user->id}}</td>
                        <td> {{$user->name}}</td>
                        <td> {{$user->age}} </td>
                        <td> {{$user->city}}</td>
                        <td> {{$user->email}}</td>
                        <td><a href="{{route('view.user',$user->id)}}" class="btn btn-success btn-sm">VIEW</a></td>
                        <td><a href="{{route('delete.user',$user->id)}}" class="btn btn-danger btn-sm">DELETE</a></td>
                        <td><a href="{{route('update.page',$user->id)}}" class="btn btn-warning btn-sm">UPDATE</a></td>
                    </tr>
                   @endforeach
                </table>
            </div>
        </div>
    </div>

   
   

</body>
</html>




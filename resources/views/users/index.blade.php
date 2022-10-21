<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<table class="table">
  <thead class="table-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($users as $user )
    <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td>{{ $user->id }}</td>
      <td>{{ $user->name }}</td>
      <td>{{ $user->email }}</td>
      <td >
        <form action="{{ route('user.create')}}" class="d-inline">
         <button class="btn btn-info"> Add </button>
        </form>
         <form action="{{ route('user.show',$user->id) }}" class="d-inline" >
         <button class="btn btn-success">show</button>
        </form>
        <form action="{{ route('user.edit', $user->id) }}" class="d-inline">
         <button class="btn btn-primary">edit</button>
        </form>
        <form action="{{ route('user.destroy', $user->id) }}" method="POST" class="d-inline">
          @method('DELETE')
          @csrf
        <button class="btn btn-danger">delete</button>
        </form>
    </td>
    </tr>
    @endforeach
  </tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

</body>
</html>

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
 <form action="{{ route('user.update',$user->id) }}" method="post">
    @method('PUT')
    @csrf
    <div class="row mb-3">
    <label for="inputname3" class="col-form-label">Name</label>
    <div class="col-5">
      <input type="text" class="form-control" value="{{ $user->name}}" name="name">
    </div>
    </div>
  <div class="row mb-3">
    <label for="inputEmail3" class=" col-form-label">Email</label>
    <div class="col-5">
      <input type="email" class="form-control" value="{{ $user->email }}" name="email">
    </div>
  </div>

  <button type="submit" class="btn btn-primary"> Update</button>
</form>
</body>
</html>

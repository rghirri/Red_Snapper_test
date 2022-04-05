<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Users</title>
</head>

<body>
 <h1>Users</h1>
 <ul>
  @foreach($users as $user)
  <li>
   {{ $user->name }}
  </li>
  @endforeach
 </ul>

 <h1>Users Links</h1>
 <ul>
  @foreach($users as $user)
  <li>
   <a href="{{ route('Users.show', $user->id) }}"> {{ $user->name }}</a>
  </li>
  @endforeach
 </ul>

</body>

</html>
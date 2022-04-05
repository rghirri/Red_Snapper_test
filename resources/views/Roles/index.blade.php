<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Roles</title>
</head>

<body>
 <h1>Roles</h1>
 <ul>
  @foreach($roles as $role)
  <li>
   {{ $role->name }}
  </li>
  @endforeach
 </ul>

 <h1>Roles Links</h1>
 <ul>
  @foreach($roles as $role)
  <li>
   <a href="{{ route('Roles.show', $role->id) }}"> {{ $role->name }}</a>
  </li>
  @endforeach
 </ul>

</body>

</html>
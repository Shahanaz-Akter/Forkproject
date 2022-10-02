<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>My Name is Mimi</h1>
<form action='/path' method="POST">
    @csrf
  <label for="Name">Enter Your Name: </label>
  <input type="text" name="name" placeholder="Name"><br><br>

  <label for="Phone">Enter Your phone: </label>
  <input type="text" name="phone" placeholder="Phone"><br><br>

  <label for="Address">Enter Your Address: </label>
  <input type="text" name="address" placeholder="address"><br><br>
   <button type="submit" ">Submit</button>

</form>

</body>
</html>
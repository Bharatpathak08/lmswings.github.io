<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/signup.css">
    <title>Document</title>
</head>
<body>
<div class="container">
  <div class="title">Registration</div>
  <form action=" register.php" method="post">
    <div class="user__details">
      <div class="input__box">
        <span class="details">Full Name</span>
        <input type="text" placeholder="E.g: John Smith"  name="name" required>
      </div>
      <div class="input__box">
        <span class="details">Email</span>
        <input type="email" name="email"  placeholder="johnsmith@hotmail.com" required>
      </div>
      <div class="input__box">
        <span class="details">Phone Number</span>
        <input type="tel"  placeholder="012-345-6789" name="mobile" required>
      </div>
      <div class="input__box">
        <span class="details">Password</span>
        <input type="password" name="password" placeholder="********" required>
      </div>
      <div class="input__box">
        <span class="details">Address</span>
        <input type="text" name="address" placeholder="xyz street" required>
      </div>

    </div>
    <div class="button">
      <input type="submit" value="Register">
    </div>
  </form>
</div>
</body>
</html>
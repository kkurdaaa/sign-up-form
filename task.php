<html>
    <style>
        body {
  background-color: pink;
  color: black;
  align: center;
}
    </style>
<body>
<h1>Rigester for Mobile Applications club</h1>
<form action="hnd.php" method="post">
First name: <input type="text" name="fname" placeholder="enter your First name">
<br><br>
last name: <input type="text" name="lname" placeholder="enter your last name">
<br><br>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1"  name="email"aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
<br><br>
Phone Number: <input type="tel" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"placeholder="enter your phone number">
<br><br>
department: <input type="text" name="department" placeholder="enter your department">
<br><br>
which technology do you want to learn: 
flutter<input type="radio" name="tech" id="tech" value="flutter">
kotlin<input type="radio" name="tech" id="tech" value="kotlin">
java<input type="radio" name="tech" id="tech" value="java">
<br><br>
create your username: <input type="text" name="uname" placeholder="enter your username">
<br><br>
create your password: <input type="password" name="pass" placeholder="enter your password">
<br><br>
re-enter your password: <input type="password" name="rpass" placeholder="enter your password">
<br><br>
<input type="checkbox" name="acc" id="acc">I accept to be available every saturday
<br><br>
<input type="submit" value="Join us!">
</form>
</body>
</html>
<form>

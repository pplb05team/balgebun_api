<html>
<body>

<form action="login.php" method="post">
	Name: <input type="text" name="username"><br>
	Password: <input type="text" name="password"><br>
<input type="submit">
</form>

<form action="register.php" method="post">
	Name: <input type="text" name="username"><br>
	E-mail: <input type="text" name="email"><br>
	Password: <input type="text" name="password"><br>
	Role: <input type="text" name="role"><br>
<input type="submit">
</form>

<form action="getCounter.php" method="post">
	Counter: <input type="text" name="counter"><br>
<input type="submit">
</form>

<form action="getPesananPenjual.php" method="post">
	Counter yang mau di cek pesanan: <input type="text" name="username"><br>
<input type="submit">
</form>

<form action="updatePassword.php" method="post">
	Name: <input type="text" name="username"><br>
	Password Baru: <input type="text" name="password"><br>
<input type="submit">
</form>

<form action="deleteUser.php" method="post">
	User yang mau dihapus: <input type="text" name="username"><br>
<input type="submit">
</form>

<form action="getUsersByRole.php" method="post">
	List user berdasarkan role: <select name="role">
		<option value="1">Customer</option>
    		<option value="2">Counter</option>
    		<option value="3">Admin</option><br>
<input type="submit">
</form>

</body>
</html>
<html>
<head>
    <title>Login</title>
</head>
<body>
	<form action="loginCheck.php" method="POST">
		<fieldset>
            <legend><b>LOGIN</b></legend>
            <table>
                <tr>
                    <td>
                    <label for="username">User Name :</label>
                    </td>
                    <td>
                    <input type="text" id="username" name="username"><br>
                    </td>
                </tr>
                <tr>
                    <td>
                    <label for="password">Password :</label>
                    </td>
                    <td>
                    <input type="password" id="password" name="password" placeholder="<=8 chars, use(@,#,$,%)"><br>
                </tr>
            </table>
            <p>____________________________________________</p>
            <input type="checkbox" id="rememberme" name="rememberme">
            <label for="rememberme">Remember Me</label><br/>
            <input type="submit" name="submit" value="Submit">
            <a href="">Forgot Password?</a>
        </fieldset>
        <a href="Registration.php">Registration Page</a>

        
    </form>
</body>
</html>
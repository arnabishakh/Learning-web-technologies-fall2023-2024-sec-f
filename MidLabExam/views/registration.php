<?php
include_once("../controls/registrationCheck.php")
?>

<center>
    <form action="" method="POST" enctype="">
        <table border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td>
                    <fieldset>
                        <legend>
                            <h3>REGISTRATION</h3>
                        </legend>
                        Id<br /><input type="text" name="id" value="<?php echo $id ?>" /><br />
                        Password<br /><input type="password" name="password" value="<?php echo $password ?>" /><br />
                        Confirm Password<br /><input type="password" name="confirmPassword" value="<?php echo $confirmPassword ?>" /><br />
                        Name<br /><input type="text" name="name" value="<?php echo $name ?>" /><br />
                        User Type
                        <hr />
                            <input type="radio" value="User" />User
                            <input type="radio" value="Admin" />Admin
                        <hr />
                        <input type="submit" value="Sign Up" />
                        <a href=" login.php">Sign In</a>
                    </fieldset>
                </td>
            </tr>
        </table>
    </form>
</center>
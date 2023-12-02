
    <form method="POST" action="../controller/insertEmpCheck.php">

        <table border="0"  align="center">
            <tr>
                <td colspan="2" align="center">
                    <h1>Registration</h1>
                </td>
            </tr>
            <tr>
                <td>Employee Name</td>
                <td>
                    <input type="text" name="empName" id="empName" >
                </td>
            </tr>
            <tr>
                <td>Contact Number</td>
                <td>
                    <input type="number" name="contactNo" id="contactNo">
                </td>
            </tr>
            <tr>
                <td>Username</td>
                <td>
                    <input type="text" name="userName" id="userName">
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td>
                    <input type="text" name="password" id="password">
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="submit" value="Register">
                    <input type="reset" name="reset" value="Reset">
                    <button ><a href="index.php">Home</a></button>
                </td>
            </tr>
        </table>
    </form>

   
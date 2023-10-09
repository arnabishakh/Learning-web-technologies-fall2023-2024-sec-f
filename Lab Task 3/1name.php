
<html>
<head>
    <title>
        Name
    </title>
</head>

<body>
    <form method="post" >
        <br />
        <br />
        Name <br />
        <input type="text" name="username" value="" /> <br />
        <input type="submit" name="submit" value="Submit" />
        <br/>
            <input action="1namehandler.php" type="Submit" name="" value="Handler Page Submit" />

    </form>

    <?php

    $username = $_REQUEST['username'];

    echo"
    <br>
    Name : " . $username ;


    ?> 
        
    
</body>


</html>


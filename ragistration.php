<!DOCTYPE html>
<html>

<head>
    <title>Insert Page page</title>
</head>

<body>
    <center>
        <?php

        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "finalproject");

        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        // Taking all 5 values from the form data(input)
        $first_name = $_REQUEST['uname'];
        $email = $_REQUEST['email'];
        $address = $_REQUEST['address'];
        $password = $_REQUEST['pwd'];
        $con_password = $_REQUEST['confirm'];
		$phoneno = $_REQUEST['phoneno'];

        // We are going to insert the data into our sampleDB table
        $sql = "INSERT INTO project2 VALUES ('$first_name',
            '$email','$address','$password','$con_password','$phoneno')";

        // Check if the query is successful
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";

            echo nl2br("\n$first_name\n $email\n "
                . "$address\n $password\n $con_password\n $phoneno");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>

</html>
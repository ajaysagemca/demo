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
        // database name => finalproject
        $conn = mysqli_connect("localhost", "root", "", "finalproject");

        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        // Taking all 6 values from the form data(input)
        $first_name = $_REQUEST['username'];
        $email = $_REQUEST['email'];
        $number = $_REQUEST['number'];
        $Adharno = $_REQUEST['Adhar'];
        $password = $_REQUEST['password'];
		$cpassword = $_REQUEST['cpassword'];

        // We are going to insert the data into our sampleDB table
        $sql = "INSERT INTO project3 VALUES ('$first_name',
            '$email','$number','$Adharno','$password','$cpassword')";

        // Check if the query is successful
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";

            echo nl2br("\n$first_name\n $email\n "
                . "$number\n $Adharno\n $password\n $cpassword");
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
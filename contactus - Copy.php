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
        // database name => contactus
        $conn = mysqli_connect("localhost", "root", "", "finalproject");

        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        // Taking all 2 values from the form data(input)
        $first_name = $_REQUEST['anyquestion'];
        $last_name = $_REQUEST['anyquestion1'];
        
        // We are going to insert the data into our sampleDB table
        $sql = "INSERT INTO project4 VALUES ('$first_name',
            '$last_name')";

        // Check if the query is successful
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";

            echo nl2br("\n$first_name\n $last_name");
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
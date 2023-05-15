<html>
<head>
<title>PHP Test</title>
</head>
<body>
<?php
$conn = new mysqli("mysql-service", "root", "pass", "test");
// Check connection
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
    // output data of each row
    echo 'The authors of this practice are:<br>';
    while($row = $result->fetch_assoc())
    {
        echo $row['name']."-".$row['NIA']."<br>";
    }
    echo 'This data was queried from the MySQL database.<br>';
}

$conn->close();

?>
</body>
</html>
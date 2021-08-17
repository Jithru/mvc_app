
<!DOCTYPE html>

<html>
<head>
    <title>Output</title>

</head>

<body>
<center>
  <h2>Search Results</h2>
  <table width=70% cellpadding="5" border="1" >

    <th>ID</th>
    <th>Name</th>
    <th>Age</th>
    <th>Address</th>
      
<?php
    if (mysqli_num_rows($result) > 0) {

    // output data of each row

    // while($row = $result->fetch_assoc()) {
    //   echo "Id :" . $row["Id"]. "  Name: " . $row["Name"]. " Age: " . $row["Age"]. "  Address: ".$row["Address"]. "<br>";
    // }
 
    foreach($result as $cel)
        echo "<tr> <td>".$cel["Id"]."</td> <td>".$cel["Name"]."</td><td>".$cel["Age"]."</td><td>".$cel["Address"]."</td></tr>";

  } else{
        echo "<br> Oops! No Results Found.";
  }

?>

  </table>
  </center> 
</body>
</html>
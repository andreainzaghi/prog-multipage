
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "foods";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT ID,name,Food_Group,Calories,Fat_g,Protein_g,Carbohydrate_g,Sugars_g,Fiber_g,Cholesterol_mg,Saturated_Fats_g FROM food_5000";
$result = $conn->query($sql);



if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

     
     echo json_encode($row);
  }
} else {
  echo "0 results";
}
$conn->close();
?>

{

}

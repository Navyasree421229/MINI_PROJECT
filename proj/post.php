<?php

$EmailId=$_POST['EmailId'];
$Year=$_POST['Year'];
$Branch=$_POST['Branch'];
$Post=$_POST['Post'];
$co=new mysqli('localhost','root','Navya@393','project_mini');
if($co->connect_error){
    die('connection Failed :'.$co->connect_error);
}
else{
    $stmt=$co->prepare("insert into post(EmailId,Year,Branch,Post) values(?,?,?,?)");
    $stmt->bind_param("siss",$EmailId,$Year,$Branch,$Post);
    $stmt->execute();
    $sql = "SELECT * FROM post";
    $result = $co->query($sql);
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>EmailId</th><th>Year</th><th>Branch</th><th>Post</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["EmailId"] . "</td><td>" . $row["Year"] . "</td><td>" . $row["Branch"] . "</td><td>" . $row["Post"] . "</td></tr>";
        }
        echo "</table>";
    }else {
        echo "No results found.";
    }
    $stmt->close();
    $co->close();
}
?>









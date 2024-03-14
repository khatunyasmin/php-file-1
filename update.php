<html>
    <head>
        <title> webpage 3 </title>
        <style>


</style>
</head>
<body>
    <?php

$link = mysqli_connect("localhost","root","","company");
//check connection
if($link===false){
    die("Error:could not connect" . mysqli_connect_error());
}
//escape user inputs for security
$getcolumn = mysqli_real_escape_string($link,$_REQUEST['column']);
$getnew = mysqli_real_escape_string($link,$_REQUEST['new']);
$getmov = mysqli_real_escape_string($link,$_REQUEST['mov']);
$sql1 = "UPDATE ibm set $getcolumn = '$getnew' where MOV_NAME = '$getmov' ";
 if(mysqli_query($link,$sql1)){
          echo "data updated successfully";
      }else{
          echo "Error:could not inserted data" . mysqli_error($link);
      }
      mysqli_close($link);


?>
</body>
</html>
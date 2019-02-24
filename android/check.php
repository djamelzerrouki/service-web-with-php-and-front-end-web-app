<?php



$id;
$num_isc=$_GET['id'];
$pss=$_GET['pass'];
$con=mysqli_connect("localhost","root","","base_donne")or die(mysqli_error($con));
$sql="SELECT id,name FROM etudiant WHERE id='$num_isc' AND password='$pss'";

$res = array();

$query=mysqli_query($con,$sql);
$num=mysqli_num_rows($query);   
if($num==1){


while ($row=mysqli_fetch_array($query)) {

                    	$id=$row['id'];
                        $name=$row['name'];
                        //array_push($res, $row);
                
                  }

					$obj = (object) [
					    'state' => 'TRUE'

					];

					echo json_encode($obj);                

                //header("location:home.php");


}

//echo $_SESSION['name']=$name."/". $_SESSION['id']=$id;
//echo $name."/".$id;

else{
	
					$obj = (object) [
					    'state' => 'FALSE'

					];

					echo json_encode($obj); 
}

?>

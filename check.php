<?php
session_start();
$id;
$num_isc=$_POST['id'];
$pss=$_POST['pass'];
$con=mysqli_connect("localhost","root","","base_donne")or die(mysqli_error($con));
$sql="SELECT id,name FROM etudiant WHERE id='$num_isc' AND password='$pss'";

$res = array();

$query=mysqli_query($con,$sql);
$num=mysqli_num_rows($query);   
if($num==1){


while ($row=mysqli_fetch_array($query)) {

                    	$id=$row['id'];
                        $name=$row['name'];
                        
                
                  }
       
        $_SESSION['id']=$id;
        $_SESSION['name']=$name;

                header("location:home.php");
       // echo "true";


}

//echo $_SESSION['name']=$name."/". $_SESSION['id']=$id;
//echo $name."/".$id;

else{
	
    header("location:index.php");
    //echo "fals";
					
}

?>

<?php
$id=$_GET['id'];

$con=mysqli_connect("localhost","root","","base_donne")or die(mysqli_error($con));
$sql="SELECT note,module.name AS name
		from notes,module,etudiant 
		where etudiant.name = '$id' AND notes.etudiant_id = etudiant.id AND notes.module_id = module.id";


$etu = array();

$query=mysqli_query($con,$sql);

while ($row=mysqli_fetch_array($query)) {

	                    $note=$row['note'];
                        
                        $name=$row['name'];

						$obj = (object) [
						    'name' => $name,
						    'note' => $note

						];

						array_push($etu, $obj);                     

                    }


                    echo json_encode($etu);



?>
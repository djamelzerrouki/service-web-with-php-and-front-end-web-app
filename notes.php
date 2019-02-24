<?php


$con=mysqli_connect("localhost","root","","base_donne")or die(mysqli_error($con));
$sql="SELECT note,module.name AS name
		from notes,module,etudiant 
		where etudiant.name = '$id' AND notes.etudiant_id = etudiant.id AND notes.module_id = module.id";




$query=mysqli_query($con,$sql);

echo '<table>';

while ($row=mysqli_fetch_array($query)) {
 
                 echo '<tr>'

                      echo '<th>'.$name=$row['name'];.'<th>';
                    
	                  echo '<th>'.$note=$row['note'].'<th>';
                        
	              
                    
                  echo '</tr>';   
                   
                    }


 echo '<table>';               


?>
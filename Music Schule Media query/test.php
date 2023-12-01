
<?php
$db_link = new mysqli('localhost', 'root', '', 'thuebingen');

                $vname = $_POST['vname'];
                $nname = $_POST['nname'];

                $insert = "INSERT INTO gaeste (VName, NName) VALUES ('$vname', '$nname')";
                $result = $db_link->query($insert);
?>
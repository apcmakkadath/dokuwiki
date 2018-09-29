<?php
if( isset($_POST['submit']) ){
                    $name = $_POST['name'];
                    $age = $_POST['age'];
                    $address = $_POST['address'];                   
                    $file = fopen("student.txt","a");
                    fwrite($file,$name.PHP_EOL);
                    fwrite($file,$age.PHP_EOL);
                    fwrite($file,$address.PHP_EOL);
                    fclose($file);
                    echo "Adding student successfully";
                }
?>

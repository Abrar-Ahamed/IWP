<?php
         $fn = $_POST["fname"];
         $ln = $_POST["lname"];
         $file = fopen("recruit.txt","w");
         $dets = array($fn,$ln);
         fwrite($file,$dets);
         fclose($file);


?>  
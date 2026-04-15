<?php
     
     $usuarios = file_get_contents("users.json");
     $users = json_decode($usuarios, true);

     print_r($users);
?>
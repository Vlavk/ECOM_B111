<?php
$hashCode = password_hash('Abc123!@#', PASSWORD_BCRYPT);// palin text, hashcode
echo $hashCode;
?>
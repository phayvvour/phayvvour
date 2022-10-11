<?php

print_r($_POST['name']);

print_r($_POST['email' ]);
print_r($_POST['Date_of_Birth']);

print_r($_POST['Gender']);
print_r($_POST['Country']);



$name = ($_POST['name']);

$email = ($_POST['email' ]);
$dateofbirth = ($_POST['Date_of_Birth']);

$gender = ($_POST['Gender']);
$country = ($_POST['Country']);
$data = [$name, $email, $dateofbirth, $country, $gender, "\n"];


$f = fopen("userdata.csv", "a");
fputcsv($f, $data);
fclose($f)

?>
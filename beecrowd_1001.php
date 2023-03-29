<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
$number = 
[
  ['nota' => 1,
   'media' => 13],

   ['nota' => 3,
    'media' => 10],

   ['nota' => 2,
    'media' => 23]
];

function ordenarMedia(array $media1, array $media2) {
  return $media2['nota'] <=> $media1['nota'];
}

usort($number, "ordenarMedia");
echo '<pre>';
print_r($number);
echo '</pre>';
?>
</body>
</html>

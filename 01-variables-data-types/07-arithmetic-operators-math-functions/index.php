<?php
$output = null;

$num1 = 20;
$num2 = 10;
// Basic Math
$output = "$num1 + $num2 = " . $num1 + $num2;
$output = "$num1 - $num2 = " . $num1 - $num2;
$output = "$num1 * $num2 = " . $num1 * $num2;
$output = "$num1 / $num2 = " . $num1 / $num2;
$output = "$num1 % $num2 = " . $num1 % $num2;

// Assignment Operator
$num3 = 10;
//$num3 = $num3 + 20;
$num3 += 20;
$num3 -= 20;
$num3 /= 2;

// Built-in PHP Functions
$output = rand();
$output = getrandmax();
$output = rand(1, 10);

// round()
$output = round(4.7);

// ceil()
$output = ceil(4.2);

// floor()
$output = floor(4.9);

// sqrt()
$output = sqrt(64);

// pi()
$output = pi();

//abs()
$output = abs(-4.7);

// max()
$output = max(1, 2, 3, 50);
$output = max([1, 25, 3, 2]);

// min()
$output = min(1, 2, 3, 50);
$output = min([10, 25, 5, 7]);

$output =  number_format(1234567.191234, 2, '.', ',');


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>PHP From Scratch</title>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">PHP From Scratch</h1>
    </div>
  </header>
  <div class="container mx-auto p-4 mt-4">
    <div class="bg-white rounded-lg shadow-md p-6 mt-6">
      <!-- Output -->
        <?= $output ?>
    </div>
  </div>
</body>

</html>
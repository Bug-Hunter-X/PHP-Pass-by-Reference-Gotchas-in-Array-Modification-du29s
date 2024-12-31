```php
function incrementArray(&$arr) {
  foreach ($arr as &$value) {
    $value++;
  }
}

$numbers = [1, 2, 3];
incrementArray($numbers);
print_r($numbers); // Output: [2, 3, 4]

function modifyArray(array $arr) {
  $newArray = [];
  foreach ($arr as $value) {
    $newArray[] = $value * 2;
  }
  return $newArray;
}

$numbers = [1, 2, 3];
$modifiedNumbers = modifyArray($numbers);
print_r($numbers); // Output: [1, 2, 3]
print_r($modifiedNumbers); // Output: [2, 4, 6]
//Correct use of array by value
//The function modifyArray now correctly modifies the array without using reference.
//This is more readable and less prone to errors. 
```
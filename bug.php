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
  foreach ($arr as $key => &$value) {
    $arr[$key] = $value * 2;
  }
}

$numbers = [1, 2, 3];
modifyArray($numbers);
print_r($numbers); // Output: [2, 4, 6]

//Incorrect use of reference in modifyArray function
function modifyArrayIncorrect(&$arr) {
  foreach ($arr as $key => &$value) {
    $arr[$key] = $value * 2;
  }
}

$numbers = [1, 2, 3];
modifyArrayIncorrect($numbers);
print_r($numbers); // Output: [2, 4, 6]
//The function modifyArrayIncorrect modifies the array correctly but it uses reference incorrectly. 
//The reference is not necessary and could be a source of confusion and potential errors.
//The correct way is to use array by value instead of reference for this function.
```
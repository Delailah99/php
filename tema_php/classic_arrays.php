<?php
echo"<pre>";
echo"Classic array\n";
$classicArray = [1,2,3,4,5,6,7,8,9];
print_r($classicArray);
echo"</pre>";
?>


<?php
echo"<pre>";
echo"1.Array_pop()\n";
array_pop($classicArray);
print_r($classicArray);
echo"</pre>";
?>

<?php
echo"<pre>";
echo "2. Array_shift()\n";
array_shift($classicArray);
print_r($classicArray);
echo"</pre>";
?>

<?php
echo"<pre>";
echo "3. PUSH()\n";
array_push($classicArray,9,10);
print_r($classicArray);
echo"</pre>";
?>


<?php
echo"<pre>";
echo "4. SHUFFLE()\n";
shuffle($classicArray);
print_r($classicArray);
echo"</pre>";
?>

<?php
echo"<pre>";
echo "5. multisort()\n";
array_multisort($classicArray);
print_r($classicArray);
echo"</pre>";
?>

<?php
echo"<pre>";
echo "6. unshift()\n";
array_unshift($classicArray,0,1);
print_r($classicArray);
echo"</pre>";
?>


<?php
echo"<pre>";
echo "7. merge()\n";
$newArray=array_merge($classicArray, [11,12,13]);
print_r($newArray);
echo"</pre>";
?>

<?php
echo"<pre>";
echo "8. chunk()\n";
$newArray=array_chunk($newArray,3);
print_r($newArray);
echo"</pre>";
?>

<?php
echo"<pre>";
echo "9. map()\n";
function square($a){
    return $a * $a;
}

$sqarray=array_map("square",$classicArray);
print_r($sqarray);
echo"</pre>";
?>

<?php
echo"<pre>";
echo "10. end()\n";
$lastElement=end($sqarray);
echo "The last element is: $lastElement";
echo"</pre>";
?>









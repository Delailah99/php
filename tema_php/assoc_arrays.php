<?php
echo "<pre>";
echo "Associative array";
$assoc_array=[
    "name"=> ["Delia","Similie"],
    "age"=> 25,
    "passions"=> "photography",
];
print_r( $assoc_array );
echo "</pre>";
?>

<?php
echo "<pre>";
echo "1. Array_keys()\n";
$key=array_keys( $assoc_array );
print_r( $key );
echo "</pre>";
?>

<?php
echo "<pre>";
echo "2. Array_values()\n";
$values=array_values( $assoc_array );
print_r( $values ); 
echo "</pre>";
?>

<?php
echo "<pre>";
echo "3. Count()\n";
$count=count( $assoc_array );
echo "The count is: $count";
echo "</pre>";
?>

<?php
echo "<pre>";
echo "4. In_array()\n";
$exists=in_array("Delia", $assoc_array['name'] );
print_r( $exists );
echo "</pre>";
?>

<?php
echo "<pre>";
echo "5. Array_splice()\n ";
array_splice( $assoc_array,0,1);
print_r( $assoc_array );
echo "</pre>"
?>

<?php
echo "<pre>";
echo "6. Array_merge()\n";
$newInfo=["origin"=>"Romania"];
$assoc_array=array_merge( $assoc_array, $newInfo );
print_r($assoc_array);
echo "</pre>";
?>

<?php
echo "<pre>";
echo "7. Array_reverse()\n";
$newArray=array_reverse( $assoc_array) ;
print_r( $newArray );
echo "</pre>";
?>

<?php
echo "<pre>";
echo "8. Isset()\n";
if(isset( $assoc_array["name"] )){
 echo "The key 'name' existst in the array";
} else{
    echo "The key does not exist in the array.";
}
echo "</pre>";
?>

<?php
echo "<pre>";
echo "9. Asort()\n";
asort( $assoc_array );
print_r( $assoc_array );
echo "</pre>";
?>

<?php
echo "<pre>";
echo "10. Sort()";
sort( $assoc_array );
print_r( $assoc_array );
echo "</pre>";
?>




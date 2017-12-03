<?php 


$str = array(“a”,”c”,”A”,”C”,”b”,”B”,”M”,”N”);

print_r($str);
echo "<pre>";

$array_size = sizeof($str);

for($x = 0; $x < $array_size; $x++) {

for($y = 0; $y < $array_size; $y++) {

if(strcasecmp($str[$x],$str[$y])<0) {

$hold = $str[$x];
$str[$x] = $str[$y];
$str[$y] = $hold;

}
}
}


print_r($str);



?>



<?php
 
// take an array with some elements
$array = array(9, 2, 18, 34, 3, 10, 15);
// get the size of array
$count = count($array);
echo "<pre>";
// Print array elements before sorting
print_r($array);
for ($i = 0; $i < $count; $i++) {
    for ($j = $i + 1; $j < $count; $j++) {
        if ($array[$i] > $array[$j]) {
            $temp = $array[$i];
            $array[$i] = $array[$j];
            $array[$j] = $temp;
        }
    }
}
echo "Sorted Array:" . "<br/>";
// Print array elements after sorting
print_r($array);



?>


<?php

for($a=5; $a>=1; $a--)
{
	for($b=$a; $b>=1;$b--)
	{
		echo "$b";
	}		

		echo "<br>";	
}



?>

<?php

for($a=5; $a>=1; $a--)
{
	for($b=1; $b<=$a;$b++)
	{
		echo "$b";
	}		

		echo "<br>";	
}



?>



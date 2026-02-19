<html>
<head>
<title>Quadratic Equation</title>
</head>
<body>
<h2>Quadratic Equation</h2>

<?php
$a=1;
$b=-3;
$c=2;

$discriminant=($b*$b)-(4*$a*$c);

if($discriminant>0){
    $root1=(-$b+sqrt($discriminant))/(2*$a);
    $root2=(-$b-sqrt($discriminant))/(2*$a);
    echo "Two real and different roots:<br>";
    echo "root1=".$root1."<br>";
    echo "root2=".$root2."<br>";
}
elseif($discriminant==0){
    $root=-$b/(2*$a);
    echo "Two real and equal roots:<br>";
    echo "root=".$root."<br>";
}
else{
    echo "Roots are imaginary (complex number)";
}
?>

</body>
</html>

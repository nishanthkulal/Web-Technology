<?php 
header('Content-Type:text/plain');
$allTheStates ="Mississippi Alabama Texas Massachusetts kansas";
$statesArray = [];
$states1 = explode(' ',$allTheStates);
$i=0;
//states that ends in xas 
foreach($states1 as $state)
{
    if(preg_match('/xas$/',($state))){
        $statesArray[$i]=($state);
        $i =$i+1;
        print"\n the states that ends in xas:".$state;
    }
}
//states that begins with k and ends with s
foreach($states1 as $state)
{
    if(preg_match('/^k.*s$/',($state))){
        $statesArray[$i]=($state);
        $i =$i+1;
        print"\n the states that begins with k and ends with s:".$state;
    }
}
//states that begins with M and ends with s
foreach($states1 as $state)
{
    if(preg_match('/^M.*s$/',($state))){
        $statesArray[$i]=($state);
        $i =$i+1;
        print"\n the states that begins with M and ends with s:".$state;
    }
}
//states that  ends with a
foreach($states1 as $state)
{
    if(preg_match('/a$/',($state))){
        $statesArray[$i]=($state);
        $i =$i+1;
        print"\n the states that  ends with a:".$state;
    }
}
foreach($statesArray as $element => $value){
    print("\n".$value."is the element".$element);
}
?>
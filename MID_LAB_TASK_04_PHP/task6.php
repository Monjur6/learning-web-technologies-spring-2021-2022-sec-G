<?php    
function Search($search_value, $array_name)  
{    
    return(array_search($search_value, $array_name));  
}  
$array_name = array("Rahul", "Monjur", "Morshed", "Mir", "Emon");  
$search_value = "Mir";  
print_r ($search_value ." is at position ");  
print_r(Search($search_value, $array_name));  
?>  
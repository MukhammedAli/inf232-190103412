<?php
    $mass = array(1,2,3,4,5);
    for($i = 0; $i < count($mass); $i++)
    {
        if($mass[$i] % 2 == 0)
        {
            echo "Hi even number";
        }else
        {
            echo "Hi odd number";
        }
    }
?>
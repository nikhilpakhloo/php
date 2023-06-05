<?php
function checkNum($digit)
{
    if ($digit > 1) {
        //return 'xuz';
        throw new Exception("Value must be lesser than 1");
    }
    return true;
}
try {
    checkNum(2);
    echo "If you see this, the number is 1 or below";
} catch (Exception $e) {
     //echo $e->__toString();
    echo "Message:" . $e->getMessage();
}

?>
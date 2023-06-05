<?php
$arr = ['username' => 'xyz', 'password' => 'abc'];
   

$username = isset($arr['username']) ? $arr['username'] : 'not passed';

if (isset($arr['usernname'])) {
    $username = $arr['usernname'];
}
else {
   $username =  'not passed';


}

$username = $arr['username'] ?? 'not passed';

?>
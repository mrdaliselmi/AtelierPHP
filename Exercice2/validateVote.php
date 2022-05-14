<?php

if(isset($_COOKIE['voteStatus'])) {
    echo "<h1>You already Voted for". $_COOKIE['voteStatus'] . "</h1>" ;
}
else {
    setcookie('voteStatus',$_POST['vote'],time()+ 60 *2);
    echo "<h1>You voted " . $_POST['vote'] . ". Thanks for the feedback</h1>";

}
?>
<?php
if(array_key_exists('HTTP_REFERER', $_SERVER)){
    echo('Password: slntCTF{the_console_is_useful}');
}else{
    echo("It's not that easy, but nice try. <br/><b> Go back and try again</b>");
}
?>
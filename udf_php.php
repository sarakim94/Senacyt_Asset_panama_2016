<?php

    function browser(){   //distinguish chrome and Edge from others
            $browser = 0;
    if(strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome') !== FALSE)   
            $browser = 1;
    else
        $browser = 0;
    return $browser;
    }

    ?>
<?php

    $email = "jc@gmail.com";

    if ( filter_var($email, FILTER_VALIDATE_EMAIL) ) 
    {
        echo "C'est un email valide";
    }
    else
    {
        echo "Ce n'est pas un email valide.";
    }

    $nombre = 1.1;
    if ( is_int($nombre) ) 
    {
        echo "C'est un nombre entier.";
    }
    else
    {
        echo "Ce n'est pas un nombre entier.";
    }

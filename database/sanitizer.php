<?php
    function sanitize($input){
        $input = trim($input);
        $input = strip_tags($input);
        $input = htmlentities($input, ENT_QUOTES, 'UTF-8');
        $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
        return $input;
    }
?>
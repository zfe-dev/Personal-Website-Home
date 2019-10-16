<?php

/*
 * Author : Lucas Pauzies
 * Date : 21/11/2018
 * Input : language defined by the user
 * Output : URL to change the language
 */
function HandleLangURL($language) {
    //Root
    if ($_SERVER['REQUEST_URI'] == '/') {
        return $_SERVER['REQUEST_URI'].'?lang='.$language;
        //lang not in URL
    } elseif (strpos($_SERVER['REQUEST_URI'],'lang') === false) {
        if (strpos($_SERVER['REQUEST_URI'],'?') === false) {
            return $_SERVER['REQUEST_URI'].'?lang='.$language;
        } else {
            return $_SERVER['REQUEST_URI'].'&lang='.$language;
        }
        //lang in URL
    } else {
        $pattern = '/lang=[a-z]{2}/';
        $replacement = "lang={$language}";
        return preg_replace($pattern, $replacement, $_SERVER['REQUEST_URI']);
    }
}

?>

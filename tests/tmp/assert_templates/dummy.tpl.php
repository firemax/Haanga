<?php
/* Load tag dummy definition */
require_once('/home/crodas/projects/playground/haanga/contrib/dummy.php');
$HAANGA_VERSION  = '1.1.3';
/* Generated from /home/crodas/projects/playground/haanga/tests/assert_templates/dummy.tpl */
function haanga_d2345f9cf4a619dac02b83afccf7c2e1c4530687($vars, $return=FALSE, $blocks=array())
{
    global $test_global;
    extract($vars);
    if ($return == TRUE) {
        ob_start();
    }
    echo '
';
    $buffer1  = '
    testing DUMMY TaG
';
    echo Haanga_Extension_Tag_Dummy::main($buffer1),'
';
    if ($return == TRUE) {
        return ob_get_clean();
    }
}
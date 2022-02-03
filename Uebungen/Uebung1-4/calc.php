<?php

    if($_GET['valX'])
    {
        $valueX = intval($_GET['valX']);
    }
    else
    {
        echo "X Value needed (valX)<br />";
    }

    if($_GET['valY'])
    {
        $valueY = intval($_GET['valY']);
    }
    else
    {
        echo "Y Value needed (valY)<br />";
    }

    if($_GET['mode'])
    {
        $mode = $_GET['mode'];
        if(isset($valueX) && isset($valueY))
        {
            if($mode == 'plus')
            {
                echo $valueX + $valueY;
            }
            elseif($mode == 'minus')
            {
                echo $valueX - $valueY;
            }
            elseif($mode == 'mal')
            {
                echo $valueX * $valueY;
            }
            elseif($mode == 'div')
            {
                echo $valueX / $valueY;
            }
            else echo "mode not supported (plus, minus, mal, div)";
        }
    }
    else
    {
        echo "mode needed (mode)<br />";
    }

?>
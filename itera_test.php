<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Itera_test</title>
</head>
<body>

<?php

            $arr = array /*Basic array*/
            (array('text' => 'Текст красного цвета'
                ,'align' => ''
                ,'valign' => ''
                ,'color' => ''
                ,'bgcolor' => ''
                ,'text2' => 'Текст зеленого цвета'
                ),
            );

            


     function getTable($arr)/*Basic function*/
     {

         echo '<table  cellpadding="40" width="500px" height="500px" align="center" valign="center" cellspacing="0" border="1">';


                foreach ($arr as $key => $value) {
                    ;
                    echo "<td colspan='2' bgcolor='blue' rowspan='2' style='font-family: Arial;color: red;font-size: 1.2em;border-color: black;text-align: center'>" . $value['text'] . "<td width='80'>"
                        . "<tr>" . "<td>"
                        . "<tr>" . "<td width='80' height='80'>"
                        . "<td colspan='2' style='font-family: Arial;color: green;padding-top: 95px;text-align: right;border-color: black;font-size: 1.2em'>" . $value['text2'];


                        /*3 cells - 3 line,  3 cells - 3 line,  3 cells - 3 line */

                }

             echo "</table>";






     }



     getTable($arr);/* Exit function */


?>


</body>
</html>
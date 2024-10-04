<?php
    $rowspan = $_GET['row_num'];
    $colspan = $_GET['col_num'];

    echo'表格大小: '. $rowspan . '列, ' . $colspan. '行'; 
    
    //table
    echo '<table border="1" style="width: 100%">';

    for ($rowX=0; $rowX<$rowspan; $rowX++){
           echo'<tr>';
         for ($colX=0; $colX<$colspan; $colX++){
           echo'<td>行'. ($rowX+1).'列'.($colX+1).'</td>';
         }
         echo '</tr>';
    }
    echo '</table>';

?>
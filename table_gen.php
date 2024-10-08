<?php
    $rowspan = $_POST['row_num'];
    $colspan = $_POST['col_num'];
    $gender = $_POST['gender'];
    $dept = $_POST['dept'];
    $msg = $_POST['message'];

    echo'表格大小: '. $rowspan . '列, ' . $colspan. '行'; 
    echo'性別: '. $gender . ',' ;
    echo'科系: '. $dept . ',';
    echo'留言: '. $msg ;
    
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
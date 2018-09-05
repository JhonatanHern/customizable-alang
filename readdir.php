<?php
if ($gestor = opendir('./Alang/')) {//opening dir and validating opening
    $res = array();
    while (false !== ($curr = readdir($gestor))) {//iterating trough the dir
        if ($curr[0]!=='.') {//not show hidden files and dirs
            array_push($res,$curr);
        }
    }
    closedir($gestor);
    echo json_encode($res);
}else{
    echo "[]";
}
?>
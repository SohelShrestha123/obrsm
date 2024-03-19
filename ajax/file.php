<?php
function readFileContent($file){
    if(file_exists($file)){
        readfile($file);
    }
    else{
        echo "File not found";
    }
}
?>
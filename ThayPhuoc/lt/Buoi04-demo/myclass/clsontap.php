<?php
class ontap {
    public function uploadfile($name,$tmp_name,$folder){
        $name=$folder.'/'.$name;
        if(move_uploaded_file($tmp_name,$name)){
            return 1;

        }
        else{
            return 0;
        }
    }

}
?>
<?php
class gender
{
    public function checkGender($gt){
        if($gt == 1){
            $gender = "Nam";
        }else if($gt == 0)
        {
            $gender = "Nữ";
        }else{
            $gender = "Cặp đôi";
        }
        return $gender;
    }
}
?>
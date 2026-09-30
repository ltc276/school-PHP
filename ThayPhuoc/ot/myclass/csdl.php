<?php
$localhost="localhost";
$usertmdt="username";
$passtmdt="password";
$tmdt_db="csdlot";
class csdl{
    private function connect(){
        $con = new mysqli("localhost","usertmdt","passtmdt","csdlot");
        return $con;
    }


    public function xuatdulieu($sql){
        $link=$this->connect();
        $result=$link->query($sql);
        $num=$result->num_rows;
        $link->close();
        if($num>0){
            echo '<table>';
            echo '<tr>';
            echo '<td>STT</td>';
            echo '<td>Ten Cong Ty</td>';
            echo '<td>Dia Chi</td>';
            echo '<td>Dien thoai</td>';
            echo '</tr>';
            $i=1;
            while($row=mysqli_fetch_array($result)){
            echo '<tr>';
            echo '<td align="center">'.$i.'</td>';
            echo '<td align="left">'.$row['tencty'].'</td>';
            echo '<td align="left">'.$row['diachi'].'</td>';
            echo '<td align="left">'.$row['dienthoai'].'</td>';
            echo '</tr>';
            $i++;

            }
            echo '</table>';

        }
        else{
            echo 'dang cap nhat du lieu';
        }
    }
}
?>
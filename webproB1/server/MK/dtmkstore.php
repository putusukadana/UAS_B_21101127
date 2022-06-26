<?php
    include_once("../dbkoneksi2.php");

    $r["sukses"]=false;
    if(isset($_POST["kode"])){
        $KODEMK=$_POST["kode"];
        $NAMAMK=$_POST["nama"];
        $SMSTR=$_POST["smstr"];


        $sql = "INSERT INTO mk(KODE_MK, MATAKULIAH,SEMESTER) 
            VALUES('$KODEMK', '$NAMAMK','$SMSTR');";
        
        mysqli_query($cnn, $sql);
        $r["sukses"]= true;
    }
    echo json_encode($r);
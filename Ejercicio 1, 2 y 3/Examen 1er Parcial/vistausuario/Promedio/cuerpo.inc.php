<?php
    include("../../connect/conexion.inc.php");
    $depto = ["CH", "LP", "CB", "OR", "PT", "TJ", "SC", "BE", "PD"];
    $deptodig = ["01", "02", "03", "04", "05", "06", "07", "08", "09"];
    $notas = [0, 0, 0, 0, 0, 0, 0, 0, 0];
    $nronotas = [0, 0, 0, 0, 0, 0, 0, 0, 0];
    $sql = "SELECT * FROM persona";
    $res = mysqli_query($con, $sql);
?>
        <section class="tablero3">
            <div>
                <div >
                    <div >
                        <h4 c>Promedios por Departamentos:</h4>
                        <p>Docente: <strong><?php echo $_SESSION['nombre'];?></strong><br>CI: <strong><?php echo $_SESSION['ci'];?></strong></p>
                        <hr>
                    </div>
                </div>
                <div>
                    <table class="table" border="4px">
                            <tr>
                                <th scope="col"><?php echo $depto[0];?></th>
                                <th scope="col"><?php echo $depto[1];?></th>
                                <th scope="col"><?php echo $depto[2];?></th>
                                <th scope="col"><?php echo $depto[3];?></th>
                                <th scope="col"><?php echo $depto[4];?></th>
                                <th scope="col"><?php echo $depto[5];?></th>
                                <th scope="col"><?php echo $depto[6];?></th>
                                <th scope="col"><?php echo $depto[7];?></th>
                                <th scope="col"><?php echo $depto[8];?></th>
                            </tr>
<?php
        
        while($per = mysqli_fetch_array($res)){
            $sum = 0;
            for($i = 0; $i < 9; $i++){ 

                if ($deptodig[$i] == $per[3]) {
                     
                     $sql2 = "SELECT * FROM nota";
                $res2 = mysqli_query($con, $sql2);
                    while($not = mysqli_fetch_array($res2)){
                        if($per[0] == $not[0]){
                            $notas[$i] = $notas[$i] + $not[5];
                            $nronotas[$i] = $nronotas[$i] + 1;
                        }
                    }
                    //$notas[$i]."".$sum."</br>";
                }
            }
        }
        echo "<tr>";
        for($j = 0; $j < 9; $j++){
            if($nronotas[$j] != 0){
                $promedio = floatval($notas[$j]/$nronotas[$j]);
                $prom = number_format($promedio, 3);
                echo "<td>$prom</td>";
            }else{
                echo "<td>0</td>";
            }      
        }
        echo "<tr>";
?>
                    </table>
                </div>
            </div>
        </section>
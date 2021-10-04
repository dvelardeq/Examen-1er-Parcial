<?php
    include("../../connect/conexion.inc.php");
    $res = mysqli_query($con, "SELECT * FROM nota WHERE ci='".$_SESSION['ci']."'");
?>
        <section class="tablero">
            <div>
                <div >
                    <div >
                        <h4>Notas correspondientes a:</h4>
                        <p>Estudiante: Univ. <strong><?php echo $_SESSION['nombre'];?></strong><br>CI: <strong><?php echo $_SESSION['ci'];?></strong></p>
                        <hr>

                    </div>
                </div>
                <div class="row">
                    <table class="table" border="5px">
<?php
                           
    $numfilas = mysqli_num_rows($res);
    if($numfilas>0) {
        echo "<tr>
                                <th>Materia</th>
                                <th>Nota 1</th>
                                <th>Nota 2</th>
                                <th>Nota 3</th>
                                <th>Final</th>
                            </tr>";
        while($fila = mysqli_fetch_array($res)){
            echo "  <tr>
                        <th scope='row'>".$fila["sigla"]."</th>
                        <td>".$fila["nota1"]."</td>
                        <td>".$fila["nota2"]."</td>
                        <td>".$fila["nota3"]."</td>
                        <td>".$fila["notafinal"]."</td>
                    </tr>";
        }
    }else {
                echo ""."</br>";
                echo ""."</br>";
                echo ""."</br>";
                echo ""."</br>";
                echo ""."</br>";
                echo "Usted no cuenta con notas.";
                echo ""."</br>";
                echo ""."</br>";
                echo ""."</br>";
                echo ""."</br>";
                echo ""."</br>";
                echo ""."</br>";
   
    }
?>
                    </table>
                </div>
            </div>
        </section>
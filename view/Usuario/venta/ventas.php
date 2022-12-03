<div class=" x_content">
    <div class="x_panel">

        <nav class="titles navbar navbar-dark navbar-expand-sm">
            <a class="navbar-brand" href="#">
                VENTA PRODUCTOS
            </a>
        </nav>
        <div class="x_title">
            <table id="data" class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th class='text-center'>ID</th>
                        <th class='text-center'>NOMBRE</th>
                        <th class='text-center'>REFERENCIA</th>
                        <th class='text-center'>PRECIO</th>
                        <th class='text-center'>PESO</th>
                        <th class='text-center'>CATEGORIA</th>
                        <th class='text-center'>STOCK/CANTIDAD</th>
                        <th class='text-center'>VENTA</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                            foreach($productos as $prod){ 
                                echo"<tr>";
                                echo "<td class='text-center'>".$prod['prod_id']."</td>";
                                echo "<td class='text-center'>".$prod['prod_nombre']."</td>";
                                echo "<td class='text-center'>".$prod['prod_referencia']."</td>";
                                echo "<td class='text-center'>".$prod['prod_precio']."</td>";
                                echo "<td class='text-center'>".$prod['prod_peso']."</td>";
                                echo "<td class='text-center'>".$prod['prod_categoria']."</td>";
                                echo "<td class='text-center'>".$prod['prod_stock']."</td>";
                                echo "<td class='text-center'>";  
                                echo  "<button id='ventas' title='Vender' class='btn btn-warning btn-sm ' data-url=".getUrl("Usuario","Usuario","VentaModal",array("prod_id" => $prod['prod_id']),"ajax")."><i class='fa fa-dollar'></i></button>";
                                echo  "</button>";
                                echo   "</td>";    
                               echo  "</tr>";
                            }
                            ?>
                </tbody>
            </table>
        </div>
    </div>


</div>

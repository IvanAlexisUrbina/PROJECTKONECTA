<div class="eo #contenedor_arriba x_content">
    <div class="contenedor_de_datos x_panel">

        <nav class="navbar navbar-dark navbar-expand-sm" style="background-color:black;">
            <a class="navbar-brand" href="#">
                INVENTARIO DE PRODUCTOS
            </a>
        </nav>
        <form id="registrarprod" action="<?php echo getUrl("Usuario","Usuario","ProdInsert");?>" method="post" enctype="multipart/form-data">
            <div class="card" style="border:none;border-radius: 5px;">
                <div class="card-body p-4">
                    <div class="row justify-content-start">
                        <div class="col-md-6">
                            <label class="titulos_negrita">Nombre producto*</label>
                            <input type="text" name="prod_nombre" class="estiloinput form-control oferta">
                        </div>

                        <div class="col-md-6">
                            <label class="titulos_negrita">Referencia producto*</label>
                            <input type="text" name="prod_referencia" class="estiloinput form-control oferta">
                        </div>


                        <div class="col-md-6">
                            <label class="titulos_negrita">Precio producto*</label>
                            <input type="number" name="prod_precio" class="estiloinput form-control oferta">
                        </div>


                        <div class="col-md-6">
                            <label class="titulos_negrita">Peso*</label>
                            <input type="number" name="prod_peso" class="estiloinput form-control oferta">
                        </div>

                        <div class="col-md-6">
                            <label class="titulos_negrita">Categoria*</label>
                            <input type="text" name="prod_categoria" class="estiloinput form-control oferta">
                        </div>

                        <div class="col-md-6">
                            <label class="titulos_negrita">Stock/cantidad*</label>
                            <input type="text" name="prod_stock" id="prod_stock"
                                class="estiloinput form-control oferta">
                        </div>
                        <div class="col-md-12" style="padding:5px 5px 5px 5px;">
                            <button class="btn btn-primary" type="submit">Registrar</button>
                        </div>
        </form>
    </div>


</div>
</div>
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
            <th class='text-center'>ACCIONES</th>
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
                                echo "<td class='text-center'>  
                                      <button id='editar'data-toggle='tooltip'  title='Editar' class='btn btn-success btn-sm '  data-url='".getUrl("Usuario","Usuario","modalUpdate",array("prod_id" => $prod['prod_id']),"ajax") ."'><i class='fa fa-pencil'></i></button>
                                      <button id='eliminar' data-toggle='tooltip'  title='Eliminar' class='btn btn-danger btn-sm '  data-url='".getUrl("Usuario","Usuario","modalDelete",array("prod_id" => $prod['prod_id']),"ajax") ."'><i class='fa fa-trash'></i></button>
                                    </button>
                                     </td>";
                               echo  "</tr>";
                            }
                            ?>                  
        </tbody>
    </table>
</div>

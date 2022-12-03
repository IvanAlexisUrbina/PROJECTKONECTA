<?php foreach ($producto as $pro) {
?>
<nav class="titles navbar navbar-dark navbar-expand-sm" >
            <a class="navbar-brand" href="#">
                ACTUALIZAR PRODUCTO 
            </a>
        </nav>
        <form id="actualizarinventario" action="<?php echo getUrl("Usuario","Usuario","ProdUpdate");?>" method="post" enctype="multipart/form-data">
            <div class="card divmodal" >
                <div class="card-body p-4">
                    <div class="row justify-content-start">
                        <div class="col-md-6">
                            <label class="">Nombre producto*</label>
                            <input type="text" name="prod_nombre" value="<?php echo $pro['prod_nombre']?>" class="form-control ">
                            <input type="hidden" name="prod_id" value="<?php echo $pro['prod_id']?>">
                        </div>

                        <div class="col-md-6">
                            <label class="">Referencia producto*</label>
                            <input type="text" name="prod_referencia" value="<?php echo $pro['prod_referencia']?>" class="form-control ">
                        </div>


                        <div class="col-md-6">
                            <label class="">Precio producto*</label>
                            <input type="number" name="prod_precio"value="<?php echo $pro['prod_precio']?>"  class="form-control ">
                        </div>


                        <div class="col-md-6">
                            <label class="">Peso*</label>
                            <input type="number" name="prod_peso" value="<?php echo $pro['prod_peso']?>" class="form-control ">
                        </div>

                        <div class="col-md-6">
                            <label class="">Categoria*</label>
                            <input type="text" name="prod_categoria" value="<?php echo $pro['prod_categoria']?>"class="form-control ">
                        </div>

                        <div class="col-md-6">
                            <label class="">Stock/cantidad*</label>
                            <input type="text" name="prod_stock" id="prod_stock"
                            value="<?php echo $pro['prod_stock']?>" class="form-control ">
                        </div>
                        <div class="divboton col-md-12" style="padding:5px 5px 5px 5px;">
                            <button class="boton btn btn-primary" type="submit">Actualizar</button>
                        </div>
        </form>
    </div>
    <?php
}
    ?>
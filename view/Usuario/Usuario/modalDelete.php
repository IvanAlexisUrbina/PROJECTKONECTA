<?php foreach ($producto as $pro) {
?>
<nav class="titles navbar navbar-dark navbar-expand-sm" >
            <a class="navbar-brand" href="#">
                ELIMINAR PRODUCTO 
            </a>
        </nav>
        <form id="" action="<?php echo getUrl("Usuario","Usuario","ProdDelete");?>" method="post" enctype="multipart/form-data">
            <div class="card divmodal" >
                <div class="card-body p-4">
                    <div class="row justify-content-start">
                        <div class="col-md-6">
                            <label class="">Nombre producto*</label>
                            <label class="form-control"><?php echo $pro['prod_nombre']?></label>
                            <input type="hidden" name="prod_id" value="<?php echo $pro['prod_id']?>">
                        </div>

                        <div class="col-md-6">
                            <label class="">Referencia producto*</label>
                            <label class="form-control"><?php echo $pro['prod_referencia']?></label>
                        </div>


                        <div class="col-md-6">
                            <label class="">Precio producto*</label>
                            <label class="form-control"><?php echo $pro['prod_precio']?></label>
                        </div>


                        <div class="col-md-6">
                            <label class="">Peso*</label>
                            <label class="form-control"><?php echo $pro['prod_peso']?></label>
                        </div>

                        <div class="col-md-6">
                            <label class="">Categoria*</label>
                            <label class="form-control"><?php echo $pro['prod_categoria']?></label>
                        </div>

                        <div class="col-md-6">
                            <label class="">Stock/cantidad*</label>
                            <label class="form-control"><?php echo $pro['prod_stock']?></label>
                        </div>
                        <div class="divboton col-md-12" style="padding:5px 5px 5px 5px;">
                        <label for="">¿Estás seguro que deseas eliminar el producto?</label>
                        <label for="">recuerde que despúes que lo elimine no podra recuperarlo.</label><br>
                            <button class="btn btn-danger" type="submit">Eliminar</button>
                        </div>
        </form>
    </div>
    <?php
}
    ?>
<?php   foreach ($producto as $pro) {
 ?>
<div class="text-center  col-md-12 justitify-content-start">
<form id="modalVenta" action="<?php echo getUrl("Usuario","Usuario","VentasInsert");?>" method="post" enctype="multipart/form-data">   
    <div class="col-md-12">
        <label>ID producto</label>
        <label class="form form-control" for=""><?php echo $pro['prod_id']?></label>
    </div>
    <div class="col-md-12">     
        <label>Nombre producto</label>
        <label class="form form-control"for=""><?php echo $pro['prod_nombre']?></label>
    </div>
    <div class="col-md-12">     
        <label>Stock / Cantidad</label>
        <label class="form form-control"for=""><?php echo $pro['prod_stock']?></label>
    </div>
    <div class="col-md-12">
        <label>Cantidad a vender*</label>
      

        <!-- aqui estan los datos que voy mandar para regitrar la venta (id y cantidad) -->
        <input type="number" id="inputVenta" name="vent_cantidad" class="form form-control">
        <!-- aqui voy a validar cuantos tengo para generar una alerta -->
        <input type="hidden" id="prod_stock2" name="prod_stock" value="<?php echo $pro['prod_stock']?>">
        <input type="hidden" name="prod_id" value="<?php echo $pro['prod_id']?>">
        <input type="hidden" name="prod_nombre" value="<?php echo $pro['prod_nombre']?>">
    </div>

    <div  class="divboton col-md-12" >
        <button id="botonVenta" type="submit" class="boton btn btn-primary">Registrar venta</button>
    </div>
</form>
</div>
<?php
}
?>
<footer>

</footer>
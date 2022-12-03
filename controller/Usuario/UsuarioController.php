<?php

include_once '../model/Usuario/UsuarioModel.php';


Class UsuarioController

{ 
    // VISTA DE PRODUCTOS
    //consulta productos que hay vigentes en la bd
    public function consult(){
        $obj= new UsuarioModel();
        $sql="SELECT * FROM tbl_producto";
        $productos=$obj->consult($sql);
        include_once '../view/Usuario/Usuario/inventario.php';
    }
    // la vista de la modal para editar
    public function modalUpdate(){
        $obj=new UsuarioModel();
        $prod_id=$_GET['prod_id'];
        $sql="SELECT * FROM tbl_producto
              WHERE prod_id='".$prod_id."'";
        $producto=$obj->consult($sql);
        include_once '../view/Usuario/Usuario/modalUpdate.php';
    }
    // la vista de la modal para editar
    public function modalDelete(){
        $obj=new UsuarioModel();
        $prod_id=$_GET['prod_id'];
        $sql="SELECT * FROM tbl_producto
              WHERE prod_id='".$prod_id."'";
        $producto=$obj->consult($sql);
        include_once '../view/Usuario/Usuario/modalDelete.php';
    }


//acciones
    //insertar el producto
     public function ProdInsert(){
        $obj= new UsuarioModel();
        $id=$obj->autoIncrement("tbl_producto","prod_id");
        $prod_nombre=$_POST['prod_nombre'];
        $prod_referencia=$_POST['prod_referencia'];
        $prod_precio=$_POST['prod_precio'];
        $prod_peso=$_POST['prod_peso'];
        $prod_categoria=$_POST['prod_categoria'];
        $prod_stock=$_POST['prod_stock'];
        $sql="INSERT INTO tbl_producto(prod_id,prod_nombre,prod_referencia,prod_precio,prod_peso,prod_categoria,prod_stock,prod_fecha)
              VALUES ($id,'".$prod_nombre."','".$prod_referencia."','".$prod_precio."','".$prod_peso."','".$prod_categoria."','".$prod_stock."',NOW())";
        $update=$obj->insert($sql);
        redirect(getUrl("Usuario","Usuario","consult"));
    }


    //editar el producto
    public function ProdUpdate(){
        $obj= new UsuarioModel();
        $prod_id=$_POST['prod_id'];
        $prod_nombre=$_POST['prod_nombre'];
        $prod_referencia=$_POST['prod_referencia'];
        $prod_precio=$_POST['prod_precio'];
        $prod_peso=$_POST['prod_peso'];
        $prod_categoria=$_POST['prod_categoria'];
        $prod_stock=$_POST['prod_stock'];
        $sql="UPDATE tbl_producto
              SET  prod_nombre='".$prod_nombre."',prod_referencia='" . $prod_referencia . "',prod_precio='" . $prod_precio. "'
                  ,prod_peso='".$prod_peso."',prod_categoria='".$prod_categoria."',prod_stock='" . $prod_stock. "'
             WHERE prod_id = '".$prod_id."'";
        $update=$obj->update($sql);
        redirect(getUrl("Usuario","Usuario","consult"));
    }

    //eliminar el producto
    public function ProdDelete(){
        $obj= new UsuarioModel(); 
        $prod_id=$_POST['prod_id'];
        $sql="DELETE FROM tbl_producto
              WHERE prod_id='".$prod_id."'";
        $delete=$obj->delete($sql);
        redirect(getUrl("Usuario","Usuario","consult"));
    }









    //VISTA DE VENTAS
    //consulta productos que que hay vigentes en la bd para su posterior venta
    public function VentasConsult(){
        $obj= new UsuarioModel();
        $sql="SELECT * FROM tbl_producto";
        $productos=$obj->consult($sql);

        include_once '../view/Usuario/venta/ventas.php';
        
    }

    //ejecuta el insert en ventas y el update en la tabla de productos para cambiar la cantidad de stock
    public function VentasInsert(){
        $obj= new UsuarioModel();
        $id=$obj->autoIncrement("tbl_ventas","vent_id");
        $prod_id=$_POST['prod_id'];
        $prod_nombre=$_POST['prod_nombre'];
        $vent_cantidad=$_POST['vent_cantidad'];
        //aqui voy a consultar cuantos productos hay para hacer la resta
        $sql="SELECT * FROM tbl_producto WHERE  prod_id='".$prod_id."'";
        $productos=$obj->consult($sql);
        foreach ($productos as $prod) {
            $cantidadOld=$prod['prod_stock'];
            if ($cantidadOld> $vent_cantidad) {
                $nuevacantidad=$cantidadOld - $vent_cantidad;
            }
            
        }
        if ($cantidadOld<$vent_cantidad && $vent_cantidad<0) {
            echo "<script>alert('No hay stock para la venta de este producto');<script>";
            redirect(getUrl("Usuario","Usuario","VentasConsult"));
        }else {
       
        //aqui ejecuto la actualización del producto
        $sql="UPDATE tbl_producto
              SET  prod_stock='" . $nuevacantidad. "'
             WHERE prod_id = '".$prod_id."'";
        $update=$obj->update($sql);
        
        //aqui inserto en la tabla ventas la venta
        $sql="INSERT INTO  tbl_ventas (vent_id,prod_id,prod_nombre,vent_cantidad)
              VALUES ('".$id."','".$prod_id."','".$prod_nombre."','".$vent_cantidad."')";
        $execute=$obj->insert($sql);
        redirect(getUrl("Usuario","Usuario","VentasConsult"));
        }
    }
    
    
    // la vista de la modal para vender
    public function VentaModal(){
        $obj=new UsuarioModel();
        $prod_id=$_GET['prod_id'];
        $sql="SELECT * FROM tbl_producto
              WHERE prod_id='".$prod_id."'";
        $producto=$obj->consult($sql);
        include_once '../view/Usuario/venta/modalVenta.php';
        
    }
}
?>
<div class="col-md-3 left_col menu_fixed">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="index.php" class="site_title"><img src="build/images/icono.jpg" data-estado="1" style="margin-left:44px;" height="70px"
                    width="100px" alt="logazo" id="logo"></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="build/images/User.png" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span class="">BIENVENIDO/A</span>
                <span class="">CAFETERIA KONECTA</span><br>
                <span class="">IVAN URBINA</span>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>MODULOS</h3>
                <ul class="nav side-menu">
                    <li><a href="<?php echo getUrl("Usuario","Usuario","consult");?>"><i class="fa fa-folder-open"></i>Control de stock</a></li>
                    <li><a href="<?php echo getUrl("Usuario","Usuario","VentasConsult");?>"><i class="fa fa-money"></i>Ventas</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
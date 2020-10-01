<?php
/* Smarty version 3.1.36, created on 2020-09-12 01:05:01
  from 'C:\xampp\htdocs\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f5c029d38d3a4_75085313',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df1d40a0bf0365f1e3ef5a39dc9c4a565e75319c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\templates\\index.tpl',
      1 => 1599864582,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f5c029d38d3a4_75085313 (Smarty_Internal_Template $_smarty_tpl) {
?><!--

=========================================================
* Rocket - SaaS Bootstrap Template
=========================================================

* Product Page: https://themes.getbootstrap.com/product/rocket/
* Copyright 2020 Themesberg (https://www.themesberg.com)
* License (https://themes.getbootstrap.com/licenses/)

* Coded by https://themesberg.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<!DOCTYPE html>
<html lang="en">

<head> 
    <!-- Primary Meta Tags -->
<title>Rossaguisan - <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="title" content="Rossaguisan">
<meta name="author" content="Themesberg">
<meta name="description" content="Rocket is a premium SaaS Bootstrap 4 Dashboard template featuring over 27 presentational and technical pages including pricing, support, team, careers and many more.">
<meta name="keywords" content="bootstrap, bootstrap template, saas website template, saas bootstrap template, saas bootstrap 4 template, saas bootstrap theme, saas bootstrap 4 theme, dashboard, saas dashboard, themesberg" />
<link rel="canonical" href="https://themes.getbootstrap.com/product/rocket/">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://demo.themesberg.com/rocket">
<meta property="og:title" content="Rocket - Dashboard">
<meta property="og:description" content="Rocket is a premium SaaS Bootstrap 4 Dashboard template featuring over 27 presentational and technical pages including pricing, support, team, careers and many more.">
<meta property="og:image" content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/rocket/rocket-preview.jpg">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://demo.themesberg.com/rocket">
<meta property="twitter:title" content="Rocket - Dashboard">
<meta property="twitter:description" content="Rocket is a premium SaaS Bootstrap 4 Dashboard template featuring over 27 presentational and technical pages including pricing, support, team, careers and many more.">
<meta property="twitter:image" content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/rocket/rocket-preview.jpg">

<!-- Favicon -->
<link rel="apple-touch-icon" sizes="120x120" href="/lib/assets/img/favicon/r.png">
<link rel="icon" type="image/png" sizes="32x32" href="/lib/assets/img/favicon/r.png">
<link rel="icon" type="image/png" sizes="16x16" href="/lib/assets/img/favicon/r.png">
<link rel="manifest" href="/lib/assets/img/favicon/site.webmanifest">
<link rel="mask-icon" href="/lib/assets/img/favicon/r.svg" color="#ffffff">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">

<!-- Fontawesome -->
<link type="text/css" href="/lib/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">

<!-- Prism -->
<link type="text/css" href="/lib/vendor/prismjs/themes/prism.css" rel="stylesheet">

<!-- VectorMap -->
<link rel="stylesheet" href="/lib/vendor/jqvmap/dist/jqvmap.min.css">

<!-- Rocket CSS -->
<link type="text/css" href="/lib/css/rocket.css" rel="stylesheet">

<!-- Rossaguisan -->
<link type="text/css" href="/lib/css/r.css" rel="stylesheet">

<!-- Toastr -->
<link href="/lib/toastr/build/toastr.css" rel="stylesheet"/>
<link href="/lib/datepicker/css/bootstrap-datepicker.css" rel="stylesheet"/>

<!-- Javascripts -->
<?php echo '<script'; ?>
 src="/lib/vendor/moment/moment.min.js"><?php echo '</script'; ?>
>
<!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->

</head>

<body>

        <div class="preloader bg-soft flex-column justify-content-center align-items-center">
            <img class="loader-element" src="/lib/assets/img/brand/dark.svg" height="50" alt="Rocket logo">
        </div>

        <nav class="navbar navbar-dark navbar-theme-primary col-12 d-md-none">
            <a class="navbar-brand mr-lg-5" href="../../index.html">
                <img class="navbar-brand-dark" src="/lib/assets/img/brand/light.svg" alt="Pixel logo" /> <img class="navbar-brand-light" src="/lib/assets/img/brand/dark.svg" alt="Pixel Logo Dark" />
            </a>
            <div class="d-flex align-items-center">
                <button class="navbar-toggler d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>

        <div class="container-fluid bg-soft">
            <div class="row">
                <div class="col-12">

                    <!-- <nav id="sidebarMenu" class="sidebar col-md-4 col-lg-3 col-xl-2 d-md-block bg-primary text-white collapse"> -->
                    <nav id="sidebarMenu" class="sidebar d-md-block bg-primary text-white collapse px-4">
                      
                        <div class="sidebar-sticky pt-4 mx-auto">
                            <div class="user-card d-flex align-items-center justify-content-between justify-content-md-center pb-4">
                           
                            <div class="d-flex align-items-center">
                                
                                <div class="user-avatar lg-avatar mr-4">
                                    <img src="/lib/assets/img/team/<?php echo $_SESSION['USER_PHOTO'];?>
" class="card-img-top rounded-circle border-white" alt="Bonnie Green">
                                </div>
                                <div class="d-block">
                                    <h2 class="h6">Hola, <?php echo $_SESSION['USER_NOMBRE'];?>
</h2>
                                    <a href="/logout.php" class="btn btn-secondary btn-xs"><span class="mr-2"><span class="fas fa-sign-out-alt"></span></span>Cerrar sesión</a>
                                </div>
                            </div>
                            <div class="collapse-close d-md-none">
                                <a href="#sidebarMenu" class="fas fa-times" data-toggle="collapse"
                                    data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="true"
                                    aria-label="Toggle navigation"></a>
                            </div>
                            </div>
                            <ul class="nav flex-column mt-4">
                                <li id="opcion_dashboard" class="nav-item">
                                    <a  href="/" class="nav-link">
                                        <span class="sidebar-icon"><span class="fas fa-chart-pie"></span></span>
                                        <span>Dashboard</span>
                                    </a>
                                </li>
                                <li id="opcion_prestamos" class="nav-item">
                                    <a href="/prestamos" class="nav-link d-flex align-items-center justify-content-between">
                                        <span>
                                        <span class="sidebar-icon"><span class="fas fa-inbox"></span></span>
                                        Préstamos
                                        </span>
                                        <!--<span class="badge badge-md badge-danger badge-pill">4</span>-->
                                    </a>
                                </li> 
                                </li>
                                <li id="opcion_clientes" class="nav-item">
                                    <a href="/clientes" class="nav-link d-flex align-items-center justify-content-between">
                                        <span>
                                        <span class="sidebar-icon"><span class="fas fa-users"></span></span> 
                                        Clientes
                                        </span>
                                        <!--<span class="badge badge-md badge-danger badge-pill">4</span>-->
                                    </a>
                                </li> 
                            </ul>
                        </div>
                    </nav>
 
                    <main class="content" style="min-height: 660px;">
                        <?php if ($_smarty_tpl->tpl_vars['section']->value) {?> 
                            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['section']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                        <?php }?> 
                    </main>
                    <footer class="footer section py-5" style="margin-top: 300px">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 col-lg-6 mb-4 mb-lg-0">
                                        <p class="mb-0 text-center text-xl-left">ROSSAGUISAN © <span class="current-year"></span> </p>
                                    </div>
                                </div>
                            </div>
                        </footer>
                </div>
            </div>
        </div>
<?php echo '<script'; ?>
>
    /* Activar opción actual */
    var opcion_actual = document.getElementById("<?php echo $_smarty_tpl->tpl_vars['opcion_actual']->value;?>
");
    opcion_actual.classList.add('active');
<?php echo '</script'; ?>
>

    <!-- Core -->
<?php echo '<script'; ?>
 src="/lib/vendor/jquery/dist/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/lib/vendor/popper.js/dist/umd/popper.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/lib/vendor/bootstrap/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/lib/vendor/headroom.js/dist/headroom.min.js"><?php echo '</script'; ?>
>

<!-- Vendor JS -->
<?php echo '<script'; ?>
 src="/lib/vendor/countup.js/dist/countUp.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/lib/vendor/jquery-countdown/dist/jquery.countdown.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/lib/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/lib/vendor/prismjs/prism.js"><?php echo '</script'; ?>
>

<!-- Chartist -->
<?php echo '<script'; ?>
 src="/lib/vendor/chartist/dist/chartist.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/lib/vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"><?php echo '</script'; ?>
>

<!-- Vector Maps -->
<?php echo '<script'; ?>
 src="/lib/vendor/jqvmap/dist/jquery.vmap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/lib/vendor/jqvmap/dist/maps/jquery.vmap.world.js"><?php echo '</script'; ?>
>

<!-- Rocket JS -->
<?php echo '<script'; ?>
 src="/lib/assets/js/rocket.js"><?php echo '</script'; ?>
>

<!-- Rossaguisan JS -->
<?php echo '<script'; ?>
 src="/lib/assets/js/r.js"><?php echo '</script'; ?>
>

<!-- Toastr --> 
<?php echo '<script'; ?>
 src="/lib/toastr/toastr.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="/lib/datepicker/js/bootstrap-datepicker.js"><?php echo '</script'; ?>
>
 
</body>
<?php if (((isset($_smarty_tpl->tpl_vars['alerta_mensaje']->value)))) {?>
    <?php echo '<script'; ?>
>
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.success('<?php echo $_smarty_tpl->tpl_vars['alerta_mensaje']->value;?>
');

    <?php echo '</script'; ?>
>
<?php }?>

<?php echo '<script'; ?>
>
    $('.datepicker').datepicker({
        language: 'es',
        format: 'dd/mm/yyyy',
        todayHighlight: true,
        autoclose: true
    });

    $('.datepicker-end').change(function () {
        var inicio = moment($('#fecha_inicio').val(),'DD/MM/YYYY');
        var fin = moment($('#fecha_fin').val(),'DD/MM/YYYY');
        var meses = fin.diff(inicio, 'month');
        var plazos = fin.diff(inicio, 'weeks');
        var prestamo = $('#prestamo').val();

        $('#meses').val(meses);
        $('#plazos').val(plazos);

        switch(true){
            case meses > 0  && meses <= 3: comision=25; break;
            case meses >= 4 && meses <= 5: comision=30; break;
            case meses >= 6 && meses <= 8: comision=40; break;
            case meses >= 9:               comision=50; break;
        }
   
        $('#comision').val(comision);
        var importe = prestamo * (1 + (parseInt(comision)/100));
        $('#importe').val(importe);
        $('#abono').val(importe / plazos);
    });

    $('#meses').keyup(function(){ 
        /*
            A 3 meses el 25 %.
            - 5 meses el 30%
            - 8 meses el 40%
            - 12 meses el 50%
        */
        var comision = 0;
        var meses = $(this).val();

        switch(true){
            case meses > 0  && meses <= 3: comision=25; break;
            case meses >= 4 && meses <= 5: comision=30; break;
            case meses >= 6 && meses <= 8: comision=40; break;
            case meses >= 9:               comision=50; break;
        }
   
        $('#comision').val(comision);
    });

    function getNameOfMonth(number){
        switch(number){
            case 0: return 'Enero'; break;
            case 1: return 'Febrero'; break;
            case 2: return 'Marzo'; break;
            case 3: return 'Abril'; break;
            case 4: return 'Mayo'; break;
            case 5: return 'Junio'; break;
            case 6: return 'Julio'; break;
            case 7: return 'Agosto'; break;
            case 8: return 'Septiembre'; break;
            case 9: return 'Octubre'; break;
            case 10: return 'Noviembre'; break;
            case 11: return 'Diciembre'; break;
        }
    }
 
    if($('.ct-chart-sales-value').length) {
        //var meses = ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio'];
        //var valores = [0, 10, 30, 50];
        var data = [];
        var meses = [];
        var utilidades = [];
        var abonos = [];

        <?php if ((isset($_smarty_tpl->tpl_vars['data_anual']->value))) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data_anual']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                meses.push(getNameOfMonth(<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
));
                utilidades.push(<?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['data_anual']->value[$_smarty_tpl->tpl_vars['key']->value]->UTILIDAD_MES);?>
); 
                abonos.push(<?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['data_anual']->value[$_smarty_tpl->tpl_vars['key']->value]->ABONOS_MES);?>
); 
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>

        new Chartist.Line('.ct-chart-sales-value', {
            labels: meses,
            series: [utilidades, abonos],
        },{
            low: 0,
            showArea: true,
            fullWidth: true,
            plugins: [
                Chartist.plugins.tooltip()
            ],
            axisX: {
                // On the x-axis start means top and end means bottom
                position: 'end',
                showGrid: false
            },
            axisY: {
                // On the y-axis start means left and end means right
                showGrid: true,
                showLabel: true,
                labelInterpolationFnc: function(value) {
                    return value;
                }
            }
            });
    }

    <?php if ((isset($_smarty_tpl->tpl_vars['data_clientes_destacados']->value))) {?>
        if($('.ct-chart-ranking').length) {
            //Chart 5
                var clientes = [];
                clientes.push('<?php echo $_smarty_tpl->tpl_vars['data_clientes_destacados']->value[0]->NOMBRE;?>
');
                clientes.push('<?php echo $_smarty_tpl->tpl_vars['data_clientes_destacados']->value[1]->NOMBRE;?>
');
                clientes.push('<?php echo $_smarty_tpl->tpl_vars['data_clientes_destacados']->value[2]->NOMBRE;?>
');
                
                var totales = [];
                totales.push('<?php echo $_smarty_tpl->tpl_vars['data_clientes_destacados']->value[0]->TOTAL;?>
');
                totales.push('<?php echo $_smarty_tpl->tpl_vars['data_clientes_destacados']->value[1]->TOTAL;?>
');
                totales.push('<?php echo $_smarty_tpl->tpl_vars['data_clientes_destacados']->value[2]->TOTAL;?>
');
                
                var abonos = [];
                abonos.push('<?php echo $_smarty_tpl->tpl_vars['data_clientes_destacados']->value[0]->ABONADO;?>
');
                abonos.push('<?php echo $_smarty_tpl->tpl_vars['data_clientes_destacados']->value[1]->ABONADO;?>
');
                abonos.push('<?php echo $_smarty_tpl->tpl_vars['data_clientes_destacados']->value[2]->ABONADO;?>
');

                new Chartist.Bar('.ct-chart-ranking', {
                labels: clientes,
                series: [
                    totales,
                    abonos
                ]
                }, {
                low: 0,
                showArea: true,
                plugins: [
                    Chartist.plugins.tooltip()
                ],
                axisX: {
                    // On the x-axis start means top and end means bottom
                    position: 'end'
                },
                axisY: {
                    // On the y-axis start means left and end means right
                    showGrid: false,
                    showLabel: false,
                    offset: 0
                }
            });
        }
    <?php }?> 
<?php echo '</script'; ?>
>
</html>
<?php }
}

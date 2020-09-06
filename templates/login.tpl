 
<!DOCTYPE html>
<html lang="en">

<head> 
    <!-- Primary Meta Tags -->
<title>Iniciar sesión</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="title" content="Rocket - Sign in Page">
<meta name="author" content="Themesberg">
<meta name="description" content="Rocket is a premium SaaS Bootstrap 4 Dashboard template featuring over 27 presentational and technical pages including pricing, support, team, careers and many more.">
<meta name="keywords" content="bootstrap, bootstrap template, saas website template, saas bootstrap template, saas bootstrap 4 template, saas bootstrap theme, saas bootstrap 4 theme, dashboard, saas dashboard, themesberg" />
<link rel="canonical" href="https://themes.getbootstrap.com/product/rocket/">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://demo.themesberg.com/rocket">
<meta property="og:title" content="Rocket - Sign in Page">
<meta property="og:description" content="Rocket is a premium SaaS Bootstrap 4 Dashboard template featuring over 27 presentational and technical pages including pricing, support, team, careers and many more.">
<meta property="og:image" content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/rocket/rocket-preview.jpg">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://demo.themesberg.com/rocket">
<meta property="twitter:title" content="Rocket - Sign in Page">
<meta property="twitter:description" content="Rocket is a premium SaaS Bootstrap 4 Dashboard template featuring over 27 presentational and technical pages including pricing, support, team, careers and many more.">
<meta property="twitter:image" content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/rocket/rocket-preview.jpg">

<!-- Favicon -->
<link rel="apple-touch-icon" sizes="120x120" href="/lib/assets/img/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/lib/assets/img/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/lib/assets/img/favicon/favicon-16x16.png">
<link rel="manifest" href="/lib/assets/img/favicon/site.webmanifest">
<link rel="mask-icon" href="/lib/assets/img/favicon/safari-pinned-tab.svg" color="#ffffff">
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

<!-- Toastr -->
<link href="/lib/toastr/build/toastr.css" rel="stylesheet"/>

<!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->

</head>

<body>
    <main>

        <div class="preloader bg-soft flex-column justify-content-center align-items-center">
    <img class="loader-element" src="/lib/assets/img/brand/dark.svg" height="50" alt="Rocket logo">
</div>

        <!-- Section -->
        <section class="vh-100 d-flex align-items-center section-image overlay-soft-dark" data-background="/lib/assets/img/saas-form-image.jpg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="signin-inner mt-3 mt-lg-0 bg-white shadow-soft border rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                            <div class="text-center text-md-center mb-4 mt-md-0">
                                <h1 class="mb-0 h3">Inicia sesión para acceder a Rossaguisan</h1>
                            </div>
                            <form action="/login.php" method="POST" class="mt-4">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="far fa-user"></i></span>
                                        </div>
                                        <input type="email" name="usuario" class="form-control" id="input-email"
                                            placeholder="Usuario" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-unlock-alt"></i></span>
                                        </div>
                                        <input type="password" name="password" class="form-control" placeholder="Contraseña" required>
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="far fa-eye"></i>
                                            </span>
                                        </div>
                                    </div>
                                     
                                </div>
                                <div class="mt-3">
                                    <button type="submit" name="acceder" class="btn btn-block btn-primary">Acceder</button>
                                </div>
                            </form>
                             
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Core -->
<script src="/lib/vendor/jquery/dist/jquery.min.js"></script>
<script src="/lib/vendor/popper.js/dist/umd/popper.min.js"></script>
<script src="/lib/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="/lib/vendor/headroom.js/dist/headroom.min.js"></script>

<!-- Vendor JS -->
<script src="/lib/vendor/countup.js/dist/countUp.min.js"></script>
<script src="/lib/vendor/jquery-countdown/dist/jquery.countdown.min.js"></script>
<script src="/lib/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
<script src="/lib/vendor/prismjs/prism.js"></script>

<!-- Chartist -->
<script src="/lib/vendor/chartist/dist/chartist.min.js"></script>
<script src="/lib/vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>

<!-- Vector Maps -->
<script src="/lib/vendor/jqvmap/dist/jquery.vmap.min.js"></script>
<script src="/lib/vendor/jqvmap/dist/maps/jquery.vmap.world.js"></script>

<!-- Rocket JS -->
<script src="/lib/assets/js/rocket.js"></script>

<!-- Toastr --> 
<script src="/lib/toastr/toastr.js"></script> 

<script>
    toastr.options = {
        "closeButton": true 
    }
    {if isset($error_message)}
        toastr.error('{$error_message}');
    {/if}

</script>
    
</body>


</html>

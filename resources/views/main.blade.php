<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Lab Mahaputra </title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/assets/modules/fontawesome/css/all.min.css">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="dist/assets/modules/jqvmap/dist/jqvmap.min.css">
    <link rel="stylesheet" href="dist/assets/modules/summernote/summernote-bs4.css">
    <link rel="stylesheet" href="dist/assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="dist/assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css">

    {{-- calender --}}
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/all.min.css" />
    <link rel="stylesheet" href="assets/css/fullcalendar.min.css" />
    <link rel="stylesheet" href="assets/css/style2.css" />
    <link rel="stylesheet" href="assets/css/components.css" />

    <!-- Template CSS -->
    <link rel="stylesheet" href="dist/assets/css/style.css">
    <link rel="stylesheet" href="dist/assets/css/components.css">
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    <!-- /END GA -->
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            @include('dashboard.layouts.navbar')

            @include('dashboard.layouts.sidebar')

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">

                    <main>
                        @yield('container')
                    </main>

                </section>
            </div>

            @include('dashboard.layouts.footer')

        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="dist/assets/modules/jquery.min.js"></script>
    <script src="dist/assets/modules/popper.js"></script>
    <script src="dist/assets/modules/tooltip.js"></script>
    <script src="dist/assets/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="dist/assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="dist/assets/modules/moment.min.js"></script>
    <script src="dist/assets/js/stisla.js"></script>

    <!-- JS Libraies -->
    <script src="dist/assets/modules/jquery.sparkline.min.js"></script>
    <script src="dist/assets/modules/chart.min.js"></script>
    <script src="dist/assets/modules/owlcarousel2/dist/owl.carousel.min.js"></script>
    <script src="dist/assets/modules/summernote/summernote-bs4.js"></script>
    <script src="dist/assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

    {{-- calender --}}
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/tooltip.js"></script>
    <script src="assets/js/scripts.js"></script>
    <script src="assets/js/jquery.nicescroll.min.js"></script>
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/fullcalendar.min.js"></script>
    <script src="assets/js/modules-calendar.js"></script>
    <script src="assets/js/scripts.js"></script>
    <script src="assets/js/custom.js"></script>

    <!-- Page Specific JS File -->
    <script src="dist/assets/js/page/index.js"></script>

    <!-- Template JS File -->
    <script src="dist/assets/js/scripts.js"></script>
    <script src="dist/assets/js/custom.js"></script>
</body>

</html>

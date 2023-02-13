<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EShopper - Bootstrap Shop Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/assets/css/style.css" rel="stylesheet">

    
</head>

<body>
    <!-- Topbar Start -->
   @include('home.topbar')
    <!-- Topbar End -->


    <!-- Navbar Start -->
   @include('home.navbar')
    <!-- Navbar End -->


    <!-- Featured Start -->
   @include('home.featured')
    <!-- Featured End -->


    <!-- Categories Start -->
   @include('home.categories')
    <!-- Categories End -->


    <!-- Offer Start -->
    @include('home.offer')
    <!-- Offer End -->


    <!-- Products Start -->
    @include('home.products')
    <!-- Products End -->


    <!-- Subscribe Start -->
   @include('home.subscribe')
    <!-- Subscribe End -->


    <!-- Products Start -->
    @include('home.products')
    <!-- Products End -->


    <!-- Vendor Start -->
    @include('home.vendor')
    <!-- Vendor End -->


    <!-- Footer Start -->
    @include('home.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="/assets/mail/jqBootstrapValidation.min.js"></script>
    <script src="/assets/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="/assets/js/main.js"></script>
</body>

</html>
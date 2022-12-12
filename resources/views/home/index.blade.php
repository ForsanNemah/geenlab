<!DOCTYPE html>
<html lang="en">


@include('home.includes.head')
@include('home.includes.wapp')
<body>

  <!-- ======= Top Bar ======= -->
  
  @include('home.includes.topbar')
  <!-- ======= Header ======= -->
 <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  @include('home.includes.hero')
 <!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    @include('home.includes.services')
    @include('home.includes.gallery')
   <!-- End Featured Services Section -->

    <!-- ======= Cta Section ======= -->
   <!-- End Cta Section -->
   @include('home.includes.book')
    <!-- ======= About Us Section ======= -->
     <!-- End About Us Section -->
     @include('home.includes.about')
    <!-- ======= Counts Section ======= -->
    <!-- End Counts Section -->
    @include('home.includes.count')
    <!-- ======= Features Section ======= -->
    <!-- End Features Section -->
    @include('home.includes.features')
    <!-- ======= Services Section ======= -->
    <!-- End Services Section -->
    @include('home.includes.services2')
    <!-- ======= Appointment Section ======= -->
   <!-- End Departments Section -->

    <!-- ======= Testimonials Section ======= -->
   <!-- End Testimonials Section -->
 
    <!-- ======= Doctors Section ======= -->
    <!-- End Doctors Section -->

    <!-- ======= Gallery Section ======= -->
   <!-- End Gallery Section -->
  
    <!-- ======= Pricing Section ======= -->
    <!-- End Pricing Section -->
  
    <!-- ======= Frequently Asked Questioins Section ======= -->
    <!-- End Frequently Asked Questioins Section -->
   
    <!-- ======= Contact Section ======= -->
    @include('home.includes.contact')
   <!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('home.includes.footer')
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
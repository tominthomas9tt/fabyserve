<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="#" class="logo d-flex align-items-center">
            <span>Fabyserve</span>
          </a>
          <p>Customer centric organization which will accomplishes requirement into reality.</p>
          <div class="social-links mt-3">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram bx bxl-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin bx bxl-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Graphic Design</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>
            Fabyserve International Pvt Ltd <br>
            Liju Mahal, Ist Floor,Vennala, Opposite Village office<br>
            Palarivattom ,Kochi <br><br>
            <strong>Phone:</strong> +91 9778298272<br>
            <strong>Email:</strong> info@fabyserve.com<br>
          </p>
        </div>

      </div>
    </div>
  </div>

  <div class="container">
    <div class="copyright">
      &copy; Copyright <strong><span>Fabyserve</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      Designed by <a href="https://syosolutions.com/">Syon Solutions</a>
    </div>
  </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

<!-- Vendor JS Files -->
<script src="<?php echo $assetsUrl; ?>vendor/aos/aos.js"></script>
<script src="<?php echo $assetsUrl; ?>vendor/swiper/swiper-bundle.min.js"></script>
<script src="<?php echo $assetsUrl; ?>vendor/purecounter/purecounter.js"></script>
<script src="<?php echo $assetsUrl; ?>vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?php echo $assetsUrl; ?>vendor/glightbox/js/glightbox.min.js"></script>

<!-- Template Main JS File -->
<script src="<?php echo $assetsUrl; ?>js/main.js"></script>

<script>
  function applyFilterWithSubcategory(name) {
    console.log(name);
    window.location.href = "<?php echo $baseUrl; ?>?subcategory=" + name;
  }
</script>
<?php $this->load->view("shared/modals/locationselectmodal"); ?>
</body>

</html>
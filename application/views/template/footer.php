

<footer>
    <div class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <div class="footer-logo">
                  <h2><span></span>ebunga</h2>
                </div>

                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p>
                <div class="footer-icons">
                  <ul>
                    <li>
                      <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-google"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-pinterest"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4>information</h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                </p>
                <div class="footer-contacts">
                  <p><span>Tel:</span> +123 456 789</p>
                  <p><span>Email:</span> contact@example.com</p>
                  <p><span>Working Hours:</span> 9am-5pm</p>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4>Instagram</h4>
                <div class="flicker-img">
                  <a href="#"><img src="img/portfolio/1.jpg" alt=""></a>
                  <a href="#"><img src="img/portfolio/2.jpg" alt=""></a>
                  <a href="#"><img src="img/portfolio/3.jpg" alt=""></a>
                  <a href="#"><img src="img/portfolio/4.jpg" alt=""></a>
                  <a href="#"><img src="img/portfolio/5.jpg" alt=""></a>
                  <a href="#"><img src="img/portfolio/6.jpg" alt=""></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
                &copy; Copyright <strong>ebunga</strong>. All Rights Reserved
              </p>
            </div>
            <div class="credits">
              <!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eBusiness
              -->
              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <br>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="<?= base_url()  ?>assets1/lib/jquery/jquery.min.js"></script>
  <script src="<?= base_url()  ?>assets1/lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?= base_url()  ?>assets1/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="<?= base_url()  ?>assets1/lib/venobox/venobox.min.js"></script>
  <script src="<?= base_url()  ?>assets1/lib/knob/jquery.knob.js"></script>
  <script src="<?= base_url()  ?>assets1/lib/wow/wow.min.js"></script>
  <script src="<?= base_url()  ?>assets1/lib/parallax/parallax.js"></script>
  <script src="<?= base_url()  ?>assets1/lib/easing/easing.min.js"></script>
  <script src="<?= base_url()  ?>assets1/lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
  <script src="<?= base_url()  ?>assets1/lib/appear/jquery.appear.js"></script>
  <script src="<?= base_url()  ?>assets1/lib/isotope/isotope.pkgd.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="<?= base_url()  ?>assets1/contactform/contactform.js"></script>

  <script src="<?= base_url()  ?>assets1/js/main.js"></script>
   <script src="<?= base_url()  ?>assets1/alert.js"></script>
    <?php echo "<script>".$this->session->flashdata('message')."</script>"?>
</body>

</html>
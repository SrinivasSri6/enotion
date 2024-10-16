






<!-- Call-to-Action Section -->
<div class="call-to-action text-center ">
    <h2 class="cta-title">Elevate Your Next Event with ENotion</h2>
    <div class="orange_btn_space">
                <a href="contact-us.php" class="orange_btn" >Book Now <img src="assets/img/white_arrow.svg"></a>
              </div>
</div>

<!-- Footer Section -->
<div class="container footer-section pt-5">
    <div class="row">
    <div class="footer-logo">
                <img src="assets/img/footer_logo.png" alt="ENotion Logo" class="img-fluid">
            </div>
        <div class="col-md-3 mb-4">
         
            <ul class="footer-menu">
                <li>
                  <a href="about-us.php">  About US</a>
                </li>
                <li><a href="our-services.php">Services</a></li>
                <li><a href="blog.php">Blogs</a></li>
                <li><a href="contact-us">Contact US</a></li>
            </ul>
        </div>
        <div class="col-md-3 mb-4">
            <ul class="footer-social">
                <li>Linkedin</li>
                <li>Facebook</li>
                <li>Instagram</li>
            </ul>
        </div>
        <div class="col-md-6 mb-4">
            <div class="newsletter">
                <h3>Subscribe to our newsletter</h3>
                <form>
                    <div class="input-group">
                        <input type="email" class="form-control w-100" placeholder="Your email">
                        <button class="btn subscribe-btn" type="submit">
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
   
</div>

<hr style="color:rgba(0, 9, 20, 0.7)">

<div class="copy_right">
  <div class="container">
<div class="row mt-5">
        <div class="col-md-6">
            <p class="footer-copy">&copy; 2024 ENotion. All rights reserved</p>
        </div>
        <div class="col-md-6 text-end">


        <div class="site_map_privacy">
        <div class="site_map">
             <a href="" class="footer-links">SiteMap</a>
          </div>


          <div class="privacy">
             <a href="" class="footer-links">Privacy Policy</a>
             </div>
        </div>
       
             <!--       
               <p class="footer-links"> | </p> -->

        </div>
    </div>
</div>
</div>

<script>

    $(document).ready(function(){

        $('#navToggle').click(function(){
            $('.navbar-toggler-icon span').toggleClass('hide_span')
        })
        // 

    })

document.getElementById('navToggle').addEventListener('click', function() {
    const navOverlay = document.getElementById('navOverlay');
    navOverlay.style.display = navOverlay.style.display === 'flex' ? 'none' : 'flex';
    
    // Toggle the open class for the navbar toggler animation
    this.classList.toggle('open');
});

document.getElementById('closeMenu').addEventListener('click', function() {
    document.getElementById('navOverlay').style.display = 'none';
    document.getElementById('navToggle').classList.remove('open');
});
</script>

<script>
const input = document.querySelector("#phone");
const iti = window.intlTelInput(input, {
  // separateDialCode: true,
  initialCountry: "us",
  utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@24.4.0/build/js/utils.js",
});

// store the instance variable so we can access it in the console e.g. window.iti.getNumber()
window.iti = iti;
  </script>

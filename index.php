<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Management</title>
    
    <?php include('header.php') ?>
</head>
<body>

<?php include('nav.php') ?>

    <!-- Hero Section -->
    <div class="hero">
        <h1>Bringing Your Ideas to Life Creating <br><span>Unforgettable Moments</span></h1>
        <div class="header_btns">
        <a href="contact-us.php" class="btn btn-outline-light"> <span>Plan Your Event</span>
            <img src="assets/img/orange_arrow.svg" alt="">
        </a>
        <a href="#feature_sec" class="btn btn-light">
            <span>Discover More</span>
        </a>
        </div>
        <div class="scroll_down">
            <a href="#feature_sec">
              <div class="box">   
                <span></span>
                <span></span>
                <span></span>
                <p>scroll down</p>

                </div>
            </a>
            <!-- <div class="down_txt">
            </div> -->
    </div>
	  
      
    </div>

    <div class="container my-5" id="feature_sec">
  <!-- Section Heading -->

  <div class="row">
    <div class="col-lg-6">
         <div class="left_side text-left mb-4">
                <h2>Featured Events: Turning <span class="event-card-title">Visions into Reality</span></h2>
            
            </div>
    </div>

    <div class="col-lg-6">
         <div class="right_side">
                <p>Explore some of our most remarkable events that showcase our creativity, precision, and expertise in bringing unforgettable experiences to life.</p>
            </div>
    </div>


  </div>
         

  

  <!-- Event Cards Row -->
  <div class="row">
    <!-- Card 1: Corporate Events -->
    <div class="col-xl-3 col-lg-6 col-md-6 mb-4">
      <div class="card event-card">
        <img src="assets/img/corporate.png" alt="Corporate Events">
        <div class="card-body text-center">
          <h5 class="card-title">Corporate Events</h5>
          <a href="#" class="btn book-now-btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Book Now <img src="assets/img/orange_arrow.svg" alt=""></a>
        
          <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Launch static backdrop modal -->
</button>
        </div>
      </div>
    </div>

    <!-- Card 2: Social Events -->
    <div class="col-xl-3 col-lg-6 col-md-6 mb-4">
      <div class="card event-card">
        <img src="assets/img/social.png" alt="Social Events">
        <div class="card-body text-center">
          <h5 class="card-title">Social Events</h5>
          <a href="#" class="btn book-now-btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Book Now <img src="assets/img/orange_arrow.svg" alt=""></a>
        </div>
      </div>
    </div>

    <!-- Card 3: Halloween & National Day Setup -->
    <div class="col-xl-3 col-lg-6 col-md-6 mb-4">
      <div class="card event-card">
        <img src="assets/img/national.png" alt="Halloween & National Day Setup">
        <div class="card-body text-center">
          <h5 class="card-title">Halloween & National Day Setup</h5>
          <a href="#" class="btn book-now-btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Book Now <img src="assets/img/orange_arrow.svg" alt=""></a>
        </div>
      </div>
    </div>

    <!-- Card 4: Event Rentals -->
    <div class="col-xl-3 col-lg-6 col-md-6 mb-4">
      <div class="card event-card">
        <img src="assets/img/event-rental.png" alt="Event Rentals">
        <div class="card-body text-center">
          <h5 class="card-title">Event Rentals</h5>
          <a href="#" class="btn book-now-btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Book Now <img src="assets/img/orange_arrow.svg" alt=""></a>
        </div>
      </div>
    </div>
  </div>
</div>



<section class="lead_event">

  <div class="container">
    
    <h2 >
    <div class="sub_span">ENotion Events is a <span style="color:#F48220;font-weight:700">leading event</span><br> 
    </div>
    <div class="text-center">
    <span style="color:#F48220;font-weight:700" >management company</span> in the UAE</div></h2>
      <div class="row">
          <div class="col-lg-6">
              <img src="assets/img/lead_event.png" alt="" class="w-100">
          </div>
                <div class="col-lg-1"></div>
          <div class="col-lg-5">
            <p>known for delivering exceptional and memorable experiences.  With over 15 years of collective expertise in the UAE event industry, we specialize in organizing a wide array of events, including corporate conferences, grand weddings, and private celebrations. Our strong network of reliable vendors allows us to handle events of any scale, ensuring flawless execution every time. At ENotion Events, we blend creativity with precision to bring your vision to life, making us the preferred choice for event management in Dubai, Abu Dhabi, and across the UAE. Trust us to turn your ideas into unforgettable experiences.</p>

              <div class="orange_btn_space">
                <a href="about-us.php" class="orange_btn" >About Us <img src="assets/img/white_arrow.svg"></a>
              </div>
          </div>
      </div>

    </h2>

  </div>
</section>



<section class="our_services" style="background-color: #000914;color:#fff">
   <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2 class="h_title">our services</h2>
          </div>

          <div class="col-lg-6">
            <p>ENotion Events offers a comprehensive range of event management services tailored to the dynamic UAE market</p>
            <div class="trans_btn_space">
              <a href="our-services.php" class="transparent_btn">View All Service <img src="assets/img/white_arrow.svg" alt=""> </a>
            </div>
          </div>
        </div>
    </div>

    <div class="container-fluid our_services"  style="background-color: #000914;color:#ff">
        <div class="row">
            <div class="owl-carousel owl-theme " id="our_service">
                  <div class="item active">
                    <div class="content_body">
                      <div class="bottom_sec">
                          <div class="desc_sec">
                              <h3>Corporate Events</h3>
                              <p>From high-profile conferences and product launches to team-building activities and gala dinners, we ensure that every corporate event reflects your brand’s prestige and vision.</p>
                          </div>
                          <div class="slider_arrow">
                            <img src="assets/img/transparent-arrow.svg" alt="">
                          </div>
                      </div>
                    </div>
                </div>

                  <div class="item">
                      <div class="content_body">
                        <div class="bottom_sec">
                            <div class="desc_sec">
                                <h3>Corporate Events</h3>
                                <p>From high-profile conferences and product launches to team-building activities and gala dinners, we ensure that every corporate event reflects your brand’s prestige and vision.</p>
                            </div>
                            <div class="slider_arrow">
                              <img src="assets/img/transparent-arrow.svg" alt="">
                            </div>
                        </div>
                      </div>
                  </div>

                  <div class="item">
                      <div class="content_body">
                        <div class="bottom_sec">
                            <div class="desc_sec">
                                <h3>Corporate Events</h3>
                                <p>From high-profile conferences and product launches to team-building activities and gala dinners, we ensure that every corporate event reflects your brand’s prestige and vision.</p>
                            </div>
                            <div class="slider_arrow">
                              <img src="assets/img/transparent-arrow.svg" alt="">
                            </div>
                        </div>
                      </div>
                  </div>
                
            </div>
      </div>
    </div>
</section>


<section class="client_testimonial_content">
  <div class="container">
            <div class="row">
                <div class="col-lg-6">
                <h2 class="h_title">Client Success Stories:<span class="d-block"> What Our Partners Say</span></h2>

                </div>

                <div class="col-lg-6">
              <p>Don’t just take our word for it. Hear from our satisfied clients about their unforgettable experiences with ENotion Events.</p>
                </div>

          </div>
      </div>
  <div class="testimonial_slider">
    
      <div class="owl-carousel owl-theme" id="testimonials_slider">
          <div class="item">
              <div class="testimonial-box">
                  <p>Ajmal and the team at ENotion Events did an incredible job organizing our office events. Everything was well-coordinated, and the events ran smoothly from start to finish. Ajmal’s attention to detail made all the difference, and we couldn’t have asked for better support. I highly recommend ENotion Events for anyone looking to plan a successful event</p>
                  
              </div>
              <div class="author-info">
                <img src="assets/img/corporate_md.png" alt="Author Image">
                  <h4>Mr. Shamnas</h4>
                  </div>
          </div>
          <div class="item">
              <div class="testimonial-box">
                  <p>I was first introduced to ENotion and Ajmal about 6 months ago when I was trying to find a one-stop shop to plan and execute our Annual Gala. Despite a tight budget, Ajmal worked with me to provide venue and entertainment options, ensuring everything was executed flawlessly. The process was stress-free, and I look forward to working with Ajmal and his team again for our next Annual Gala</p>
                
              </div>
              <div class="author-info">
                <img src="assets/img/corporate_md.png" alt="Author Image">
                  <h4>Ms. Dipika</h4>
                  </div>
          </div>
          <div class="item">
              <div class="testimonial-box">
                  <p>Most event management companies have comparable prices in the UAE, but I keep returning to ENotion Events because of their exceptional customer service and flexibility. They adapt quickly to changing requirements and are committed to achieving the best outcome for each event. I would gladly recommend them to anyone looking for seamless event execution.</p>
                
              </div>
              <div class="author-info">
                <img src="assets/img/corporate_md.png" alt="Author Image">
                  <h4>Mr. Christy Alex</h4>
                  </div>
          </div>
                  <div class="item">
              <div class="testimonial-box">
                  <p>I was first introduced to ENotion and Ajmal about 6 months ago when I was trying to find a one-stop shop to plan and execute our Annual Gala. Despite a tight budget, Ajmal worked with me to provide venue and entertainment options, ensuring everything was executed flawlessly. The process was stress-free, and I look forward to working with Ajmal and his team again for our next Annual Gala</p>
                
              </div>
              <div class="author-info">
                <img src="assets/img/corporate_md.png" alt="Author Image">
                  <h4>Ms. Dipika</h4>
                  </div>
          </div>
          <div class="item">
              <div class="testimonial-box">
                  <p>Most event management companies have comparable prices in the UAE, but I keep returning to ENotion Events because of their exceptional customer service and flexibility. They adapt quickly to changing requirements and are committed to achieving the best outcome for each event. I would gladly recommend them to anyone looking for seamless event execution.</p>
                
              </div>
              <div class="author-info">
                <img src="assets/img/corporate_md.png" alt="Author Image">
                  <h4>Mr. Christy Alex</h4>
                  </div>
          </div>
      </div>
  </div>
</section>



<section class="event_trip" style="background-color:#FFFAF7">
  <div class="container">
      <div class="row">
          <div class="col-12 text-center">
              <h2 class="section-title">Event <span>Trends & Tips</span></h2>
              <p class="section-subtitle">
                  Stay updated with the latest trends, tips, and behind-the-scenes stories from ENotion Events. Our blog is your go-to resource for all things event planning.
              </p>
          </div>
      </div>
      
      <div class="row blog-posts justify-content-center">
          <div class="col-lg-4 col-md-12 mb-4">
              <div class="post">
                <a href="blog.php">
                  <img src="assets/img/event.jpg" alt="Top Trends in UAE Event Planning for 2024" class="img-fluid ">
                  <h3 class="post-title">Top Trends in UAE Event Planning for 2024</h3>
                  <p class="post-description">Explore the latest trends shaping the event industry in the UAE, from technological advancements to emerging themes and concepts.</p>
                  <span class="post-date">Aug 22, 2024</span>
                  </a>
              </div>
          </div>

          <div class="col-lg-4 col-md-12 mb-4">
              <div class="post">
              <a href="blog.php">
                  <img src="assets/img/event.jpg" alt="How to Plan a Successful Corporate Event" class="img-fluid ">
                  <h3 class="post-title">How to Plan a Successful Corporate Event in Dubai: A Comprehensive Guide</h3>
                  <p class="post-description">Planning a corporate event in Dubai requires careful consideration and strategic execution. To ensure your event is a success, follow this comprehensive guide on venue selection, catering, and entertainment options.</p>
                  <span class="post-date">Aug 22, 2024</span>
                </a>
              </div>
          </div>

          <div class="col-lg-4 col-md-12 mb-4">
              <div class="post">
              <a href="blog.php">
                  <img src="assets/img/event.jpg" alt="The Benefits of Hiring a Professional Event Planner" class="img-fluid ">
                  <h3 class="post-title">The Benefits of Hiring a Professional Event Planner in UAE</h3>
                  <p class="post-description">Planning an event in the UAE can be a complex task, but hiring a professional event planner offers numerous advantages. Here’s why working with a seasoned expert can elevate your event and make the process seamless.</p>
                  <span class="post-date">Aug 22, 2024</span>
            </a>
              </div>
          </div>
      </div>
  </div>

</section>

<?php include('footer.php') ?>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header border-0">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="form-container">
    <!-- Close Button -->
    <!-- <button class="close-btn">&times;</button> -->

    <!-- Form Title and Subtitle -->
    <h2 class="form-title">Be Part of Something Extraordinary!</h2>
    <p class="form-subtitle">Planning something special? Fill out the form below, and let us make your event truly memorable.</p>

    <!-- Form -->
    <form action="#" method="POST">
        <div class="row">
            <!-- Name and Email -->
            <div class="col-md-6">
                <label for="name" class="form-label">Name<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
            </div>
            <div class="col-md-6">
                <label for="email" class="form-label">Email Address<span class="text-danger">*</span></label>
                <input type="email" class="form-control" id="email" placeholder="xyz@gmail.com" required>
            </div>
        </div>

        <div class="row">
            <!-- Phone Number and Date of Event -->
            <div class="col-md-6">
                <label for="phone" class="form-label">Phone Number<span class="text-danger">*</span></label>
                <input type="tel" id="phone"  class="form-control" >

            </div>
            <div class="col-md-6">
                <label for="date" class="form-label">Date of Event<span class="text-danger">*</span></label>
                <input type="date" class="form-control" id="date" required placeholder="dd/mm/yyyy">
            </div>
        </div>

        <!-- Service Interest -->
        <div class="mb-3 position-relative">
            <label for="service" class="form-label">Service Interest<span class="text-danger">*</span></label>
            <img src="assets/img/down_arrow.svg" alt="" class="sm_down">
            <select class="form-control" id="service" required>
                <option>Entertainment and Audio-Visual</option>
                <option>Venue Management</option>
                <option>Catering</option>
                <option>Event Planning</option>
            </select>
        </div>

        <!-- Brief of the Event -->
        <div class="mb-4">
            <label for="message" class="form-label">Brief of the Event</label>
            <textarea class="form-control" id="message"  placeholder="Enter your message here"></textarea>
        </div>

        <!-- Submit Button -->
        <div class="mb-3 text-left">
        <p class="text-left privacy-text">By submitting, you agree to our <a href="#">Privacy Policy</a>.</p>


            <button type="submit" class="submit-btn">Submit</button>
        </div>

    </form>
</div>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button> -->
      </div>
    </div>
  </div>
</div>








<script>
  
  $(document).ready(function(){
        $('#navToggle').click(function(){
          $('.navbar-toggler-icon span').toggleClass('d-none');
        })
  });
  

   $(document).ready(function(){
    $('#testimonials_slider').owlCarousel({
        loop: false,
        margin: 30,
        nav: true,
        // rtl: true,  // Right-to-left direction
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        },
        onInitialized: applyOpacity,
        onTranslate: applyOpacity,
        onTranslated: applyOpacity
    });

    // Function to ensure proper opacity on page load and transitions
    function applyOpacity() {
        $('#testimonials_slider .owl-item').css('opacity', '0.6'); // Default opacity for all items
        $('#testimonials_slider .owl-item.active').css('opacity', '1'); // Full opacity for active items
    }
});



// $(document).ready(function(){
//     $('#our_service').owlCarousel({
//         loop: false,
//         margin: 30,
//         nav: true,
//         rtl: true,  // Right-to-left direction
//         responsive: {
//             0: {
//                 items: 1
//             },
//             600: {
//                 items: 2
//             },
//             1000: {
//                 items: 2
//             }
//         },

//         onInitialized: function(event) {
//             // Apply opacity on page load
//             applyOpacity();
//         },
//         onTranslate: function(event) {
//             // Remove fade-in effect for all items when transitioning starts
//             $('#our_service .owl-item').css('opacity', '1');
//         },
//         onTranslated: function(event) {
//             // Apply opacity to the second active item after transition completes
//             applyOpacity();
//         }


//         onInitialized: applyOpacity,
//         onTranslate: applyOpacity,
//         onTranslated: applyOpacity
//     });

//     // Function to ensure proper opacity on page load and transitions
//     function applyOpacity() {
//         $('#testimonials_slider .owl-item').css('opacity', '0.6'); // Default opacity for all items
//         $('#testimonials_slider .owl-item.active').css('opacity', '1'); // Full opacity for active items
//     }

    
// });
   



 $(function() {
  $('a[href*=#]').on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 500, 'linear');
  });
});



  
// $('#our_service').owlCarousel({
//     loop: false,
//     margin: 10,
//     nav: true,
//     center: false,
//     responsive: {
//         0: {
//             items: 1
//         },
//         600: {
//             items: 3
//         },
//         1000: {
//             items: 2
//         }
//     },
//     onTranslated: function(event) {
//         // Remove opacity from all items
//         $('#our_service .owl-item').removeClass('opacity-class').css('opacity', '1');
        
//         // Add opacity to the second active item
//         var activeItems = $('#our_service .owl-item.active');
//         if (activeItems.length > 1) {
//             $(activeItems[1]).addClass('opacity-class').css('opacity', '0.6');
//         }
//     }
// });
$(document).ready(function() {
    // Initialize Owl Carousel
    $('#our_service').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        // rtl: true, // This makes the slider move from right to left
        center: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 2
            }
        },
        onInitialized: function(event) {
            // Apply opacity on page load
            applyOpacity();
        },
        onTranslate: function(event) {
            // Remove fade-in effect for all items when transitioning starts
            $('#our_service .owl-item').css('opacity', '1');
        },
        onTranslated: function(event) {
            // Apply opacity to the second active item after transition completes
            applyOpacity();
        }
    });

    // Function to apply opacity to the second active item
    function applyOpacity() {
        // Select all currently active items
        var activeItems = $('#our_service .owl-item.active');
        // Reset opacity for all active items
        activeItems.css('opacity', '0.3');
        // Apply full opacity to the second active item (if exists)
        if (activeItems.length > 1) {
            $(activeItems[0]).css('opacity', '1');
        }
    }
});





    </script>




    <script>
        // // Hamburger menu open/close for mobile
        // const navToggle = document.getElementById('navToggle');
        // const navOverlay = document.getElementById('navOverlay');
        // const closeMenu = document.getElementById('closeMenu');

        // navToggle.addEventListener('click', () => {
        //     const isVisible = navOverlay.style.display === 'flex';
        //     navOverlay.style.display = isVisible ? 'none' : 'flex';
        //     document.body.classList.toggle('open', !isVisible);
        // });

        // closeMenu.addEventListener('click', () => {
        //     navOverlay.style.display = 'none';
        //     document.body.classList.remove('open');
        // });
    </script>

   



</body>
</html>

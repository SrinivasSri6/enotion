<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include('header.php') ?>
</head>
<body>
            <?php include('nav.php') ?>


<section class="service_detail_header">
            <img src="assets/img/contact-us.jpg" alt="" class="w-100 h-100">
        
</section>


<section class="contact_wrapper">
        <div class="container">
            <div class="row">
                    <div class="col-lg-5">
                        <p>Get in Touch</p>
                        <h2 class="form-title">We’re Here to Help You 
                        Achieve Your Goals</h2>
                        <p>Planning something special? Fill out the form 
                        and let us make your event truly memorable</p>
                    </div>

                    <div class="col-lg-7">
                        <div class="form-container " id="staticBackdrop">    
                            <form action="#" method="POST">
                                <div class="row bottom_space">
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

                                <div class="row bottom_space">
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

                                <div class="bottom_space position-relative">
                                    <label for="service" class="form-label">Service Interest<span class="text-danger">*</span></label>
                                    <img src="assets/img/down_arrow.svg" alt="" class="sm_down">
                                    <select class="form-control" id="service" required>
                                        <option>Entertainment and Audio-Visual</option>
                                        <option>Venue Management</option>
                                        <option>Catering</option>
                                        <option>Event Planning</option>
                                    </select>
                                </div>

                                <div class="mb-4">
                                    <label for="message" class="form-label">Brief of the Event</label>
                                    <textarea class="form-control" id="message"  placeholder="Enter your message here"></textarea>
                                </div>

                                <div class="mb-3 mt-4 text-left">
                                        <p class="text-left privacy-text">By submitting, you agree to our <a href="#">Privacy Policy</a>.</p>


                                    <button type="submit" class="submit-btn">Submit</button>
                                </div>

                            </form>
                        </div>
                    </div>  
            </div> 

            <div class="contact_detail">
                    <div class="contact_one">
                            <p>Email</p>
                    </div>

                    <div class="contact_two">
                                <a href="mailto:info@enotionevent.com">info@enotionevent.com</a>
                    </div>
            </div>
            <div class="contact_detail">
                    <div class="contact_one">
                            <p>Phone</p>
                    </div>

                    <div class="contact_two">
                                <a href="tel:+971502185245">+971 50 218 5245</a>
                    </div>
            </div>
        </div>
</section>




<?php include('footer.php') ?>


</body>
</html>
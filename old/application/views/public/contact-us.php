<section class="" >

   <!--ecommerce home banner start-->

   <div class="container-fluid website-design-contain contactus-contain-101"  >

      <div class="container-fluid   "  >

         <div class="container">

            <div class="row  pt-3 pb-3  ">

               <div class="col-sm-6">

                  <div class="   pt-5">

                      <h1 class="  wordH text-center text-dark"></h1>

                     

                  </div>

               </div>

               <div class="col-sm-6 ecom-img-section text-center">

                  <img style="border-radius:  20px 20px 100px 20px;" src="<?= base_url()?>assets/images/contact-us2.gif" >

               </div>

            </div>

         </div>

      </div>

   </div>

</section>

   





<section class="bg-seamless-contactus" >

   <div class="container">

            <!-- File:ob-contact.tpl-->

         <div class="row pt-5">

            <div class="col-sm-12">

               <h3 class="text-white"><span class="contact-heading">Contact Us </span></h3>

               <p class="text-white"> Thank you for using <b>Megatask Technologies Pvt Ltd,</b> Please complete the form below, so we can  provide  quick and efficient service.</p>

            </div>

         </div>

         <hr class="mb-4">

         <div class="row">

            <div class="col-sm-8">

               <div class="row pt-5  pb-5">

                  <div class="col-sm-4">

                     <div>

                        <h4 class="text-white">Our office</h4>

                        <ul class="list-unstyled">

						   

                           <li class="text-white" >Address: D-21 (Second Floor) Lane No. 3 Abul Fazal Enclave-Part 1 Jamia Nagar</li>

                           <li class="text-white" >Pin code: 110025</li>

                           <li class="text-white" >City: New Delhi</li>

                           <li class="text-white" >State: Delhi</li>

                           <li class="text-white">Country: India</li>

                        </ul>

                     </div>

                     <hr>

                     <div>

                        <h4 class="text-white">Contact us</h4>

                        <ul class="list-unstyled">

							<li class="text-white"></li>

                           <li class="text-white" ><a href="tel:01142032023" class="text-white">Phone: 011 42032023</a></li>

                           <li class="text-white" ><a href="tel:919871652511" class="text-white">Phone: +91 9871652511</a></li>

						   <li class="text-white" ><a href="mailto:info@megatasktechnologies.com" class="text-white">Email: info@megatasktechnologies.com</a></li>

                        </ul>

                     </div>

                     <hr>

                     <div>

                         <h4 class="text-white">Follow Us</h4>

                        <div class="header_top">

                         <a href="/" class="social_link"><i class="fa social_dot fa-youtube-play" aria-hidden="true"></i></a>&nbsp;&nbsp;

                          <a href="/" class="social_link"><i class="fa social_dot fa-facebook-official" aria-hidden="true"></i></a>&nbsp;&nbsp;

                          <a href="/" class="social_link"><i class="fa social_dot fa-linkedin" aria-hidden="true"></i></a>&nbsp;&nbsp;

                          <a href="/" class="social_link"><i class="fa social_dot fa-instagram" aria-hidden="true"></i></a>&nbsp;&nbsp;

                          <a href="/" class="social_link"><i class="fa social_dot fa-twitter" aria-hidden="true"></i>

                     </a>&nbsp;&nbsp;

                        </div>

                     </div>

                  </div>

                  <div class="col-sm-8">

                     <div class="ecom-img-section">

                        <div  ><iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=Abul%20Fazal%20Enclave-Part%201%20Jamia%20Nagar%20110025%20New%20Delhi+(Megataskweb)&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>  </div>

                     </div>

                  </div>

               </div>

            </div>

            <div class="col-sm-4">

               <h4 class="text-white">Write to us </h4>

               <?php

               $error = $this->session->flashdata('error');

               if($error)

               {

               ?>

               <div class="alert alert-danger alert-dismissable">

               <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

               <?php echo $this->session->flashdata('error'); ?>                    

               </div>

               <?php } ?>

               <?php  

               $success = $this->session->flashdata('success');

               if($success)

               {

               ?>

               <div class="alert alert-success alert-dismissable">

               <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

               <?php echo $this->session->flashdata('success'); ?>

               </div>

               <?php } ?>

              

               <form class="form-horizontal megatask-form" action="<?=base_url()?>Index/insert_contactus" method="post">

                  <div class="form-group"  >

                     <input type="text" class="form-control wow bounceInRight " id="contact_name" name="contact_name" placeholder="Full Name *" required="required"  data-wow-delay=".20s" autocomplete="off" value="<?= set_value('contact_name') ?>" >

                        <div class="contact-error">

                     <?php

                        if(form_error('contact_name') !=='')

                        {

                           echo form_error('contact_name');

                        }

                        ?>

                           

                        </div>

                  </div>

                  <div class="form-group">

                     <input type="email" class="form-control wow bounceInRight" id="contact_email" name="contact_email" placeholder="Email  *"   data-wow-delay=".30s" autocomplete="off" value="<?= set_value('contact_email') ?>" required="required"  >

                     <div class="contact-error">

                     <?php

                        if(form_error('contact_email') !=='')

                        {

                           echo form_error('contact_email') ;

                        }

                        ?>

                           

                        </div>

                  </div>

                  <div class="form-group">

                     <input type="text" class="form-control wow bounceInRight allow-numeric" id="contact_mobile" name="contact_mobile" placeholder="Mobile *" maxlength="12" data-wow-delay=".40s" autocomplete="off" value="<?= set_value('contact_mobile') ?>" required="required" >

                     <div class="contact-error">

                        <?php

                        if(form_error('contact_mobile') !=='')

                        {

                           echo  form_error('contact_mobile') ;

                        }

                        ?>   

                     </div>

                     

                       

                  </div>

                  <div class="form-group">

                     <textarea class="wow bounceInRight" id="contact_message" name="contact_message" placeholder="Message *" rows="4"  style="height: 150px;"  data-wow-delay=".50s" autocomplete="off" required="required"><?= set_value('contact_message') ?></textarea>

                     <div class="contact-error">

                     <?php

                        if(form_error('contact_message') !=='')

                        {

                           echo "<p class='text-white'>".form_error('contact_message')."</p>" ;

                        }

                        ?>

                           

                        </div>

                  </div>

                  <div class="form-group">

                     <input  type="submit" class="btn btn-danger get_quote mb-3 wow bounceInRight " id="action" name="action" value="Send Message"  data-wow-delay=".60s">

                     <input type="reset" class="mb-3 btn btn-primary get_quote wow bounceInRight" value="Reset"  data-wow-delay=".65s">

                  </div>   

               </form>  

            </div>

         </div>

         </div>

</section>

 

<script>

   

    var words = ["Contact Megatask Technologies Pvt Ltd","We'd Love to Hear from You"], 

    part,

       i = 0,

       offset = 0,

       len = words.length,

       forwards = true,

       skip_count = 0,

       skip_delay = 15,

       speed = 70;

   var wordflick = function () {

     setInterval(function () {

       if (forwards) {

         if (offset >= words[i].length) {

           ++skip_count;

           if (skip_count == skip_delay) {

             forwards = false;

             skip_count = 0;

           }

         }

       }

       else {

         if (offset == 0) {

           forwards = true;

           i++;

           offset = 0;

           if (i >= len) {

             i = 0;

           }

         }

       }

       part = words[i].substr(0, offset);

       if (skip_count == 0) {

         if (forwards) {

           offset++;

         }

         else {

           offset--;

         }

       }

       $('.wordH').text(part);

     },speed);

   };

   

   $(document).ready(function () {

     wordflick();

   });

   $(document).ready(function() {

      $(".allow-numeric").on("keypress keyup blur",function (event) {    

           $(this).val($(this).val().replace(/[^\d].+/, ""));

            if ((event.which < 48 || event.which > 57)) {

               event.preventDefault();

            } 

        });

    });

</script>

 
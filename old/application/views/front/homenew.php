
<!-- new homw page main content start here  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>




<section class="ale_home"> 
	<div class="container-fluid wrap-container">
     <div class="row mb-5">
      <div class="col-md-12 p-0 text-white text-center bannerContent mt-5">
      	<h2><strong>Search 187,444 listings from trusted Ale-Izba</strong></h2>
      </div>
  </div>
  <!-- commercial and Commercial btn  -->
  <div class="row mb-2">
   <div class="col-md-2">
    <a href="javascript:void(0)" class="btn bannerBtn tabBtn" data-target="#searchBox1" id="flip"><i class="fa fa-home"></i>&nbsp;Residential</a>
   </div>

    <div class="col-md-2">
    <a href="javascript:void(0)" class="btn bannerBtn2 tabBtn" data-target="#searchBox2" ><i class="fa fa-building" aria-hidden="true"></i>&nbsp;Commercial</a>
   </div>

   <div class="offset-md-6 col-md-2 fl-left">
    <a href="<?php echo base_url();?>" class="btn bannerBtn3 ">Filter <i class="fa fa-filter" aria-hidden="true"></i></a>
   </div>


  </div>


  <!-- end -->

<!-- form Start here  -->

  <div class="container-fluid wrap-container searchBox " id="searchBox1" >
    <div class="row">
    <div class="col-md-12  ">
      <div class="d-flex bg-white radius" id="panel">


        <!-- input serach Bar -->
  
      <input type="text" placeholder="City,Neighbourhood or MLS Number"  name="search" class="form-control ale-izba_placeholder ">

        
        <!-- end -->


     <!-- min-price -->
       <div class="p-2 ">
          <select data-placeholder="Min Price" class="chosen-select form-control" tabindex="2 ">
            <option value=""></option>
            <option value="">0</option>
            <option value="">25,000</option>
            <option value="">50,000</option>
            <option value="">75,000</option>
            <option value="">100,000</option>
            <option value="">125,000</option>
            <option value="">150,000</option>
            <option value="">175,000</option>
            <option value="">200,000</option>
            <option value="">225,000</option>
            <option value="">250,000</option>
            <option value="">275,000</option>
            <option value="">300,000</option>
          </select>
        </div>
    <!-- end -->

       <!-- unlimited -->
        <div class="p-2 ">
          <select data-placeholder="Unlimited" class="chosen-select form-control" tabindex="2 ">
            <option value=""></option>
            <option value="">Unlimited</option>
            <option value="">75,000</option>
            <option value="">100,000</option>
            <option value="">125,000</option>
            <option value="">150,000</option>
            <option value="">175,000</option>
            <option value="">200,000</option>
            <option value="">225,000</option>
            <option value="">250,000</option>
            <option value="">275,000</option>
            <option value="">300,000</option>
          </select>
        </div>
    <!-- end -->


           <!-- Bed -->
        <div class="p-2 ">
          <select data-placeholder="Beds" class="chosen-select form-control" tabindex="2 ">
            <option value=""></option>
            <option value="">Beds</option>
            <option value="">1</option>
            <option value="">1+</option>
            <option value="">2</option>
            <option value="">2+</option>
            <option value="">3</option>
            <option value="">3+</option>
            <option value="">4</option>
            <option value="">4+</option>
            <option value="">5</option>
            <option value="">5+</option>
            
          </select>
        </div>
    <!-- end -->

          <!-- Bath -->
        <div class="p-2 ">
          <select data-placeholder="Baths" class="chosen-select form-control" tabindex="2 ">
            <option value=""></option>
            <option value="">Baths</option>
            <option value="">1</option>
            <option value="">1+</option>
            <option value="">2</option>
            <option value="">2+</option>
            <option value="">3</option>
            <option value="">3+</option>
            <option value="">4</option>
            <option value="">4+</option>
            <option value="">5</option>
            <option value="">5+</option>
          </select>
        </div>
        <!-- end -->

     
      <!-- search button  -->

      <div class="p-2 ">


      <a href="#" class="searchAleForm "><i class="fa fa-search" aria-hidden="true"></i></a>
        </div>
      </div>
     </div>
    </div>
   </div>


   <!-- commercial form start here -->
<div class="container-fluid wrap-container searchBox hidden " id="searchBox2" >
    <div class="row">
    <div class="col-md-12 ">
      <div class="d-flex bg-white radius transform">


        <!-- input serach Bar -->
  
         <input type="text" placeholder="City,Neighbourhood or MLS Number"  name="search" class="form-control ale-izba_placeholder ">

        
        <!-- end -->


     <!-- min-price -->
        <div class="p-2 ">
          <select data-placeholder="Min Price" class="chosen-select form-control" tabindex="2 ">
            <option value=""></option>
            <option value="">0</option>
            <option value="">25,000</option>
            <option value="">50,000</option>
            <option value="">75,000</option>
            <option value="">100,000</option>
            <option value="">125,000</option>
            <option value="">150,000</option>
            <option value="">175,000</option>
            <option value="">200,000</option>
            <option value="">225,000</option>
            <option value="">250,000</option>
            <option value="">275,000</option>
            <option value="">300,000</option>
          </select>
        </div>
    <!-- end -->

       <!-- unlimited -->
        <div class="p-2 ">
          <select data-placeholder="Max Price" class="chosen-select form-control" tabindex="2 ">
            <option value=""></option>
            <option value="">Unlimited</option>
            <option value="">75,000</option>
            <option value="">100,000</option>
            <option value="">125,000</option>
            <option value="">150,000</option>
            <option value="">175,000</option>
            <option value="">200,000</option>
            <option value="">225,000</option>
            <option value="">250,000</option>
            <option value="">275,000</option>
            <option value="">300,000</option>
          </select>
        </div>
    <!-- end -->


           <!-- Bed -->
        <div class="p-2 ">
          <select data-placeholder="Buiding Size" class="chosen-select form-control" tabindex="2 ">
            <option value=""></option>
            <option value="">Beds</option>
            <option value="">1</option>
            <option value="">1+</option>
            <option value="">2</option>
            <option value="">2+</option>
            <option value="">3</option>
            <option value="">3+</option>
            <option value="">4</option>
            <option value="">4+</option>
            <option value="">5</option>
            <option value="">5+</option>
            
          </select>
        </div>
    <!-- end -->

          <!-- Bath -->
        <div class="p-2 ">
          <select data-placeholder="Land Size" class="chosen-select form-control" tabindex="2 ">
            <option value=""></option>
            <option value="">Baths</option>
            <option value="">1</option>
            <option value="">1+</option>
            <option value="">2</option>
            <option value="">2+</option>
            <option value="">3</option>
            <option value="">3+</option>
            <option value="">4</option>
            <option value="">4+</option>
            <option value="">5</option>
            <option value="">5+</option>
          </select>
        </div>
        <!-- end -->

     
      <!-- search button  -->

      <div class="p-2 ">
      <a href="#" class="searchAleForm"><i class="fa fa-search" aria-hidden="true"></i></a>
        </div>
      </div>
     </div>
    </div>
   </div>




   <!-- end -->
  </div>
  </section>


<section class="ale_tag">
  <div class="container-fluid">
   <div  class="row">
    <div class="col-md-9">
     <h4 class="asdf000"><strong>Need help finding a Ale-Izba?</strong>&nbsp;<span class="browser">Browse thousands of local Ale-Izba.</span></h4>
    </div>
	<div class="col-md-3 fl-right">
	 <a href="#" class="btn get_btn">Get Started</a>
    </div>
   </div>
  </div>
</section>

<section>
	<div class="container-fluid wrap-container">
    <div class="row">
       <div class="col-md-12 text-center my_quel ">
      <div class="section-title text-center">
      <h3><strong>Latest Living Room Posts</strong></h3>
    </div>
   </div>
  </div>

      <div class="row">
       <div class="col-md-4">
        <a href="#">
       	<div class="axb_ale_blog">
         <img src="<?php echo base_url();?>assets/images/blog1.jpg" class="img-fluid">
         <div class="blog-content p-3">
         <div class=" blog_btn mb-3">
          <span>10 February</span><span>&nbsp;&nbsp;&nbsp;-by ALE-IZBA</span>
         </div>
         <h5 class="text-black">Whistler, British Columbia: Canada’s Champion of Year-Round Alpine Terrain</h5>
         </div>
       	</div>
       </a>
       </div>
      <div class="col-md-4">
        <a href="#">
        <div class="axb_ale_blog">
         <img src="<?php echo base_url();?>assets/images/blog2.jpg" class="img-fluid">
         <div class="blog-content p-3">
         <div class=" blog_btn mb-3">
          <span>11 February</span><span>&nbsp;&nbsp;&nbsp;-by ALE-IZBA</span>
         </div>
         <h5 class="text-black">Looking to Buy a Cottage? Here’s What You Need to Know</h5>
         </div>

        </div>
      </a>
       </div>


       <div class="col-md-4">
        <a href="#">
        <div class="axb_ale_blog">
         <img src="<?php echo base_url();?>assets/images/blog3.jpg" class="img-fluid">
         <div class="blog-content p-3">
         <div class=" blog_btn mb-3">
          <span>12 February</span><span>&nbsp;&nbsp;&nbsp;-by ALE-IZBA</span>
         </div>
         <h5 class="text-black ">Celebrating Living Room’s Anniversary With Our Writers’ Favourites</h5>
         </div>

          </div>
         </a>
        </div>
       </div>
       <div class="row">
         <div class="col-md-12 text-center mt-5">
          <a href="" class="btn more_post">More Post</a>

        </div>
       </div>
      </div>

    </section>



<section>
  <div class="container-fluid wrap-container">
   <div class="row">
    <div class="col-md-12 text-center my_quel">
      <div class="section-title text-center">
      <h3><strong>Popular Cities</strong></h3>
    </div>
   </div>
  </div>

   <div class="row">
    <div class="col-md-8">
      <div class="outer_home">
     <div class="row"> 
      <div class="col-md-4 col-xs-12">
       <ul class="list-style">
        <li><a href="<?php echo base_url();?>alehomelist">Toronto Real Estate</a></li>
        <li><a href="<?php echo base_url();?>alehomelist">Calgary Real Estate</a></li>
        <li><a href="<?php echo base_url();?>alehomelist">Ottawa Real Estate</a></li>
        <li><a href="<?php echo base_url();?>alehomelist">London Real Estate</a></li>
        <li><a href="<?php echo base_url();?>alehomelist">Hamilton Real Estate</a></li>
        <li><a href="<?php echo base_url();?>alehomelist">Edmonton Real Estate</a></li>
        <li><a href="<?php echo base_url();?>alehomelist">Vancouver Real Estate</a></li>
        <li><a href="<?php echo base_url();?>alehomelist">Mississauga Real Estate</a></li>
        <li><a href="<?php echo base_url();?>alehomelist">Victoria Real Estate</a></li>
        <li><a href="<?php echo base_url();?>alehomelist">Winnipeg Real Estate</a></li>
      
      </ul>
    </div>

        <div class="col-md-4 col-xs-12">
          <ul class="list-style">
            <li><a href="<?php echo base_url();?>alehomelist">Barrie Real Estate</a></li>
            <li><a href="<?php echo base_url();?>alehomelist">Kingston Real Estate</a></li>
            <li><a href="<?php echo base_url();?>alehomelist">Windsor Real Estate</a></li>
            <li><a href="<?php echo base_url();?>alehomelist">Montreal Real Estate</a></li>
            <li><a href="<?php echo base_url();?>alehomelist">Brampton Real Estate</a></li>
            <li><a href="<?php echo base_url();?>alehomelist">Kelowna Real Estate</a></li>
            <li><a href="<?php echo base_url();?>alehomelist">Burlington Real Estate</a></li>
            <li><a href="<?php echo base_url();?>alehomelist">Oakville Real Estate</a></li>
            <li><a href="<?php echo base_url();?>alehomelist">Kitchener Real Estate</a></li>
            <li><a href="<?php echo base_url();?>alehomelist">Guelph Real Estate</a></li>
            
        </ul>
       </div>


       <div class="col-md-4 col-xs-12">
          <ul class="list-style">
            <li><a href="<?php echo base_url();?>alehomelist">Waterloo Real Estate</a></li>
            <li><a href="<?php echo base_url();?>alehomelist">Cambridge Real Estate</a></li>
            <li><a href="<?php echo base_url();?>alehomelist">Peterborough Real Estate</a></li>
            <li><a href="<?php echo base_url();?>alehomelist">Oshawa Real Estate</a></li>
            <li><a href="<?php echo base_url();?>alehomelist">Sarnia Real Estate</a></li>
            <li><a href="<?php echo base_url();?>alehomelist">Milton Real Estate</a></li>
            <li><a href="<?php echo base_url();?>alehomelist">Markham Real Estate</a></li>
            <li><a href="<?php echo base_url();?>alehomelist">Etobicoke Real Estate</a></li>
            <li><a href="<?php echo base_url();?>alehomelist">Brantford Real Estate </a></li>
            <li><a href="<?php echo base_url();?>alehomelist">Surrey Real Estate</a></li>
            
        </ul>
       </div>
      </div>
     </div>
   </div>

     <div class="col-md-4">
     <div class="real_gif">
      <img src="assets/images/real.gif" class="img-fluid">


      </div>
     </div>
    </div>
   </div>
</section>


<section>
  <div class="container-fluid wrap-container">
    <div class="row">
     <div class="col-md-12 text-center my_quel">
      <div class="section-title text-center">
       <h3><strong>Advance Your Career</strong></h3>
      </div>
     </div>
    </div>

    <div class="row">
     <div class="col-md-8 pr-0">
      <div class="carrer_base ">
      <img src="<?php echo base_url();?>assets/images/carrer.jpg" class="img-fluid">
       </div>
      </div>

     <div class="col-md-4 col-xs-12 pl-0">
      <div class="carrer_mode ">
        <h6>TEAM MEMBERS</h6>
        <h2 class="mt-5"><strong>Meet Our <br>Employees.</strong></h2>
         <a href="#" class="btn meet_btn mt-5">Meet Our Team</a>

     </div>
    </div>
   </div>
</section>


<section>
<div class="container-fluid wrap-container my_quel">
 <div class="row">
  <div class="col-md-12">
    <div class="infotesti">
    <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->

  <div class="carousel-inner ">
    <div class="carousel-item active">
      <div class="row">
        <div class="col-md-4 office-meet">
      <img src="<?php echo base_url();?>assets/images/meeting1.jpg"  class="img-fluid" alt="...">
    </div>
    <div class="col-md-8">
    <h4>5 Key Roles Your Ale-Izba Plays</h4>
    <h1 class="ml7">
      <span class="text-wrapper">
        <span class="letters">1. Paper Pros</span>
      </span>
    </h1>
    <p>If only buying a home was as simple as signing on the dotted line. A REALTOR® can bring you peace of mind by navigating the complex legal terminology, paperwork, mortgage rules and more.</p>
    <a href="<?php echo base_url();?>" class="btn home_meet_btn">Meet a Ali-Izba</a>  
    
    </div>
    </div>
    </div>

    <div class="carousel-item">
      <div class="row">
        <div class="col-md-4 office-meet">
      <img src="<?php echo base_url();?>assets/images/office2.jpg"  class="img-fluid" alt="...">
    </div>
    <div class="col-md-8">

    <h4>5 Key Roles Your Ale-Izba Plays</h4>
    <h1 class="ml7">
  <span class="text-wrapper">
    <span class="letters">2. Marketing Experts</span>
  </span>
</h1>
    <p>Not only are they experts at finding you the right home, a REALTOR® can get your house discovered and sold faster — so you can move forward with your life.</p>
      <a href="<?php echo base_url();?>" class="btn home_meet_btn">Meet a Ali-Izba</a>  

    
    </div>
    </div>
    </div>
    <div class="carousel-item">
      <div class="row">
        <div class="col-md-4 office-meet">
      <img src="<?php echo base_url();?>assets/images/meeting3.jpg"  class="img-fluid" alt="...">
    </div>
    <div class="col-md-8">
    <h4>5 Key Roles Your Ale-Izba Plays</h4>
      <h1 class="ml7">
      <span class="text-wrapper">
      <span class="letters">3. Pricing Advisors</span>
      </span>
      </h1>
      <p>When it comes to making the most significant purchase of your life, don’t guess on price, rely on an expert in pricing and market trends.</p>
      <a href="<?php echo base_url();?>" class="btn home_meet_btn">Meet a Ali-Izba</a>  

    
    </div>
    </div>
    </div>
    <div class="carousel-item">
      <div class="row">
        <div class="col-md-4 office-meet">
      <img src="<?php echo base_url();?>assets/images/meeting4.jpg"  class="img-fluid" alt="...">
    </div>
    <div class="col-md-8">
    <h4>5 Key Roles Your Ale-Izba Plays</h4>
     <h1 class="ml7">
      <span class="text-wrapper">
      <span class="letters">4. Negotiator Extraordinaires</span>
      </span>
      </h1>
    <p>Negotiating a property sale can be intimidating; a REALTOR® has the experience to get you the best deal so you don’t leave any money on the table. </p>
        <a href="<?php echo base_url();?>" class="btn home_meet_btn">Meet a Ali-Izba</a>  

    
    </div>
    </div>
    </div>

    <div class="carousel-item">
      <div class="row">
        <div class="col-md-4 office-meet">
      <img src="<?php echo base_url();?>assets/images/meeting5.jpg"  class="img-fluid" alt="...">
    </div>
    <div class="col-md-8">
    <h4>5 Key Roles Your Ale-Izba Plays</h4>
         <h1 class="ml7">
      <span class="text-wrapper">
      <span class="letters">5. Your Home Buying MVPs</span>
      </span>
      </h1>
    <p>Buying or selling the biggest asset of your life is stressful. A REALTOR® can help keep your emotions in check throughout the complex and time-consuming process.</p>
        <a href="<?php echo base_url();?>" class="btn home_meet_btn">Meet a Ali-Izba</a>  

    
    </div>
    </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev next_click" href="#demo" data-slide="prev">
     <img src="<?php echo base_url();?>assets/images/left_click.svg">
   <!--  <span class="carousel-control-prev-icon"></span> -->
  </a>
  <a class="carousel-control-next next_click" href="#demo" data-slide="next">
    <img src="<?php echo base_url();?>assets/images/right.svg">
   <!--  <span class="carousel-control-next-icon"></span> -->
  </a>

    </div>
   </div>
  </div>
 </div>
</div>
</section>

<section>
 <div class="container-fluid wrap-container my_quel"> 
  <div class="row">
   <div class="col-md-12">
    <div class="vidbg">
     <div class="row">
      <div class="col-md-6 text-center">
       <img src="<?php echo base_url();?>assets/images/video_bg.jpg" class="img-fluid">
        <div class="centered">
         <h2 class="text-white pb-3"><strong>We are born to be Ale-Izba</strong></h2>
          <p class="text-white">Buying and selling homes is in our DNA.Get the knowledge, expertise and dedication of a Ale-Izba on your side.</p> 
           <a href="" class="btn watch_btn mt-3">Watch the video</a>
    </div>
   </div>

   <div class="col-md-3">
    <img src="<?php echo base_url();?>assets/images/born.jpg" class="img-fluid">
     </div>

       <div class="col-md-3">
      <img src="<?php echo base_url();?>assets/images/born2.jpg" class="img-fluid">
     </div>
    </div>
   </div>
  </div>
 </div>
</div>
</section>



<script type="text/javascript">
  var textWrapper = document.querySelector('.ml7 .letters');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml7 .letter',
    translateY: ["1.1em", 0],
    translateX: ["0.55em", 0],
    translateZ: 0,
    rotateZ: [180, 0],
    duration: 750,
    easing: "easeOutExpo",
    delay: (el, i) => 50 * i
  }).add({
    targets: '.ml7',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });
</script>
<script type="text/javascript">
  // search button click and toggle search bar
  $(document).ready(function(){
    $(".tabBtn").click(function(){
      $(".searchBox").addClass("hidden");
      $($(this).attr("data-target")).removeClass("hidden");
    });
  });
</script>

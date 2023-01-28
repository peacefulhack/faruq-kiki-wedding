<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      
      <?php 
      $user_browser = $_SERVER['HTTP_USER_AGENT']; 
      if(strpos($user_browser, 'edge') !== false) {
         echo '<meta http-equiv="X-UA-Compatible" content="IE=edge">'
      } else if (strpos($user_browser, 'MSIE 9.') !== false) {
         echo '<script src="js/respond.js"></script>'
      }
      ?>
      
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- Page title -->
      <title>MANTEN - Kiki & Faruq</title>
      
      <!-- Bootstrap Core CSS -->
      <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
      <!-- Icon fonts -->
      <link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
      <link href="fonts/glyphicons/bootstrap-glyphicons.css" rel="stylesheet" type="text/css">
      <!-- Google fonts -->
      <link href="https://fonts.googleapis.com/css?family=Lora:400,700i%7CMontserrat:400,700%7CPlayfair+Display:400,700,700i" rel="stylesheet" type="text/css">
      <!-- Style CSS -->
      <link href="css/style.css" rel="stylesheet">
      <!-- Plugins CSS -->
      <link rel="stylesheet" href="css/plugins.css">
      <!-- Color Style CSS -->
      <link href="styles/lavender.css" rel="stylesheet">
      <!-- Favicons-->
      <link rel="stylesheet" href="./CSS/mikail.css">
      <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
      <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
      <link rel="shortcut icon" href="icon.png" type="image/x-icon">    
   </head>
   <body id="page-top" data-spy="scroll" data-target=".navbar-custom">   
      <!-- Music -->
      <audio id="music" src="music/youre_still_the_one1.mp3" autoplay loop></audio>
      <!-- Music ends -->
      <!-- Preloader -->
      <div id="preloader">
         <div class="spinner">
            <div class="bounce1"></div>
         </div>
      </div>
      <!-- Preloader ends --> 
      <nav class="navbar navbar-custom navbar-fixed-top">
         <div class="container">
            <!-- Brand and toggle get grouped for better mobile display  --> 
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-brand-centered">
               <i class="fa fa-bars"></i>
               </button>
               <div class="navbar-brand navbar-brand-centered page-scroll">
                  <a href="#page-top">
                     <!-- logo  -->  
                     <img src="img/logo.png" class="img-responsive" alt="">
                  </a>
               </div>
               <!--/navbar-brand -->
            </div>
            <!--/navbar-header -->
            <!-- Collect the nav links, forms, and other content for toggling  --> 
            <div class="collapse navbar-collapse" id="navbar-brand-centered">
               <ul class="nav navbar-nav page-scroll">
                  <li><a href="#page-top">Home</a></li>
                  <li><a href="#about">About</a></li>
                  <li><a href="#story">Our Story</a></li>
                  <li><a href="#attendants">Attendants</a></li>
               </ul>
               <ul class="nav navbar-nav navbar-right page-scroll">
                  <li><a href="#event">The Event</a></li>
                  <li><a href="#gallery">Gallery</a></li>
                  <li><a href="#rsvp">RSVP</a></li>
                  
               </ul>
            </div>
            <!-- /.navbar-collapse --> 
         </div>
         <!-- /.container --> 
      </nav>
      <!-- /navbar ends --> 
      <!-- Ken burns Slideshow -->
      <div class="slideshow">
         <!-- images path in the CSS file --> 
         <div class="slideshow-image"></div>
         <div class="slideshow-image"></div>
         <div class="slideshow-image"></div>
         <div class="slideshow-image"></div>
      </div>
      <!-- section: intro--> 
      <section id="intro" class="container-fluid">
         <div class="intro-heading margin col-md-12 text-center">
            <h1 class="text-light">Kiki <span class="italic text-light"> & </span> Faruq
            </h1>
            <h6 class="margin1 text-ornament">Are getting married</h6>
         </div>
         <!-- /col-md-6-->
      </section>
      <!-- /section ends -->
      <!-- Section: Save date-->
      <section id="save-date">
         <!-- parallax ornaments -->
         <div class="ornament2 hidden-sm hidden-xs hidden-md" data-0="opacity:1;"
            data-100="transform:translatex(0%);"
            data-center-center="transform:translatex(90%);">
            <!-- illustration path in the color template CSS -->
         </div>
         <div class="ornament3 hidden-sm hidden-xs hidden-md" data-0="opacity:1;"
            data-100="transform:translatex(80%);"
            data-center-center="transform:translatex(30%);">
            <!-- illustration path in the color template CSS -->
         </div>
         <!-- /ornament3 -->
         <!-- container -->
         <div class="container">
            <div class="row">
               <!-- well starts-->
               <div class="well col-md-10 col-md-offset-1 text-center">
                  <div class="section-heading">
                     <h2>18 Februari 2023</h2>
                     <!-- divider -->
                     <div class="hr"></div>
                  </div>
                  <!--/section heading -->
                  <h5 class="margin1">Assalamualaikum Warahmatullahi Wabarakatuh</h5>
                  <p>
                     Dengan mengharap rahmat dan ridho Allah SWT,
                  Kami mengundang Bapak/Ibu (Serta Keluarga) <!--SERTA KELUARGA DIGANTI NAMA OTOMATIS--> Ke pernikahan kami. 
                  </p>
                  <div class="margin1">
                     <!-- countdown tag -->
                     <span id="countdown"></span>
                     <!-- edit the countdown in the main.js file-->
                  </div>
                  <!-- /margin1-->
                  <div class="page-scroll">
                     <a href="#rsvp" class="btn">RSVP now</a>
                  </div>
                  <!-- /page-scroll -->
               </div>
               <!-- /well-->
            </div>
            <!-- /row-->
         </div>
         <!-- /container -->
      </section>
      <!-- /section ends -->
      <!-- section:about-->
      <section id="about" class="watercolor">
         <!-- container -->
         <div class="container">
            <div class="section-heading">
               <h2>About The Couple</h2>
               <!-- divider -->
               <div class="hr"></div>
            </div>
            <!-- /section-heading-->
            <!-- Bride Info -->
            <div class="col-md-5 col-md-offset-1">
               <img src="img/bride1.jpg" alt="" class="main-img img-responsive img-circle"/>
               <h4 class="text-ornament">Kiki</h4>
               <h6 class="main-subheader">Nur Rizki Aini</h6>
               <p class="text-center">
                  Putri Dari<br>
                  Bapak : Imron<br>
                  Ibu : Puji Sumarni.
               </p>
               <!-- small social-icons -->	
               <div class="social-media smaller">

                  <a href="https://instagram.com/rizkiaini?igshid=OGQ2MjdiOTE=" title=""><i class="fa fa-instagram"></i></a>
               </div>
               <!-- /social-icons -->
            </div>
            <!-- /col-md-5 -->
            <!-- Groom Info -->
            <div class="col-md-5 res-margin">
               <img src="img/groom1.jpg" alt="" class="main-img img-responsive img-circle"/>
               <h4 class="text-ornament">Faruq</h4>
               <h6 class="main-subheader">M. Musthofa Kamal A.</h6>
               <p class="text-center">
                   Putra dari <br>
                  Bapak : Drs. HM. Chusnul Yaqin, M.M.<br>
                  Ibu : Dra. Toetoek Hariyati
               </p>
               <!-- small social-icons -->	
               <div class="social-media smaller">
                  <a href="https://www.instagram.com/faruqrbe/?hl=id" title=""><i class="fa fa-instagram"></i></a>
               </div>
               <!-- /social-icons -->
            </div>
            <!-- /col-md-5 -->
         </div>
         <!-- /container -->
      </section>
      <!-- /section ends -->
      <!-- parallax ornament -->
      <div class="ornament4 hidden-sm hidden-xs hidden-md" data-0="opacity:1;"
         data--100-start="transform:translatex(90%);"
         data-center-bottom="transform:translatex(0%);">
         <!-- illustration path in the color template CSS -->
      </div>
      <!-- /ornament4 -->
      <!-- Section: Event-->	
      <section id="event">
         <div class="section-heading">
            <h2>The Event</h2>
            <!-- divider -->
            <div class="hr"></div>
         </div>
         <!--/section-heading -->
         <div class="container">
            <div class="row">
               <div class="col-md-6" data--100-start="transform:translatey(-60%);"
                  data-center-bottom="transform:translatey(20%);">
                  <!-- image -->
                  <img src="img/party21.jpg" alt="" class="img-photo rotate1 img-responsive">
               </div>
               <!-- paper well -->
               <div class="well col-md-6">
                  <div class="col-md-12 text-center">
                     <h2>Akad Nikah</h2>
                     <hr>
                     <h3 class="date"><br>17 Februari 2023</h3>
                     <h6>08:00 WIB</h6>
                     <h6>Jl Sunan Kudus IV no 11 Latsari Tuban</h6>
                     <div style="display: flex; align-items: center;">
                        <img src="img/latsari.png" class="img-responsive" alt="Barcode Lokasi" style="width: 50%;">
                     </div>

                     <button class="btn btn-default">Lihat lokasi</button> <!-- ini menuju window baru ke google maps-->
                  </div>
                  <div class="col-lg-12 col-md-9 no-padding">
                  <!-- map-->
                     <div id="map-canvas"></div>

                     <!-- Maps dari google maps -->
                     <!-- Alamat Latsari -->
                     <!-- <iframe width="600" 
                     height="450" 
                     style="border:0" 
                     loading="lazy" 
                     allowfullscreen 
                     src="https://www.google.com/maps/embed/v1/place?q=place_id:Ek9KbC4gU3VuYW4gS3VkdXMgSVYsIExhdHNhcmksIEtlYy4gVHViYW4sIEthYnVwYXRlbiBUdWJhbiwgSmF3YSBUaW11ciwgSW5kb25lc2lhIi4qLAoUChIJ9-SNnquidy4RsQNnXUH0yvYSFAoSCedvhKqtoncuEXt0-Vql-JH3&key=AIzaSyB8ZcaWcezb5kFZTA2owAJNBF_LJC1GxSU">
                     </iframe> -->
                     <!-- gugel API : AIzaSyB8ZcaWcezb5kFZTA2owAJNBF_LJC1GxSU -->

                  <!-- image1 -->
                  </div>
               </div>
               </div>
               <!-- /well -->
            </div>
         <!-- row-fluid -->
         <!-- /row-fluid -->
            <!-- /row -->
            <div class="row margin1">
               <!-- paper well -->
               <div class="well col-md-7">
                  <div class="col-md-12 text-center">
                     <h2>Resepsi Nikah</h2>
                     <hr>
                     <h3 class="date"><br>18 Februari 2023</h3>
                     <h6>11:00 - 13:00 WIB</h6>
                     <h6>Gedung Kodim Tuban </h6>
                     <p class="text-center">
                         <img src="img/kodim.png" class="img-responsive" alt="Barcode Lokasi" style="align-items: center; width: 50%;">
                     </p>
                     <button class="btn btn-default">Lihat lokasi</button> <!-- ini menuju window baru ke google maps-->
                  </div>
                  <div class="col-lg-12 col-md-9 no-padding">
                  <!-- map-->
                     <div id="map-container">
                        <iframe
                        loading="lazy" 
                        allowfullscreen 
                        src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJpTeFeMSZdy4RSYX78i6B5wE&key=AIzaSyB8ZcaWcezb5kFZTA2owAJNBF_LJC1GxSU">
                        </iframe>
                     </div>

                     <!-- Maps dari google maps -->
                     <!-- Alamat Kodim -->
                     <!-- <iframe width="600" 
                        height="450" 
                        style="border:0" 
                        loading="lazy" 
                        allowfullscreen 
                        src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJpTeFeMSZdy4RSYX78i6B5wE&key=AIzaSyB8ZcaWcezb5kFZTA2owAJNBF_LJC1GxSU">
                        </iframe> -->
                     <!-- gugel API : AIzaSyB8ZcaWcezb5kFZTA2owAJNBF_LJC1GxSU -->
                  <!-- image1 -->
                  </div>
               </div>
               <!-- /well -->
               <div class="col-md-5" data--100-start="transform:translatey(-60%);"
                  data-center-bottom="transform:translatey(20%);">
                  <!-- image -->
                  <img src="img/party11.jpg" alt="" class="img-photo rotate2 img-responsive">
               </div>
               <!-- /col-md-5 -->
            </div>
            <!-- /row-->            
         <!-- /container -->

      </section>
      <!-- Section ends -->
      <!-- Section: Quote -->
      <section id="quote" class="container-fluid">
         <div class="col-md-7 col-centered" data-center-top="opacity: 1" data-center-bottom="opacity: 0">
            <blockquote>
               <h2>"Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan pasangan-pasangan untukmu dari jenismu sendiri, agar kamu cenderung dan merasa tenteram kepadanya, dan Dia menjadikan diantaramu rasa kasih dan sayang. Sungguh, pada yang demikian itu benar-benar terdapat tanda-tanda (kebesaran Allah) bagi kaum yang berpikir."<br>QS. Ar-rum : 21</h2>
            </blockquote>
         </div>
         <!-- /col-md-7-->
      </section>
      <!-- /section ends -->
      <!-- Section: Gallery -->
      <section id="gallery" class="watercolor">
         <div class="section-heading text-center">
            <h2>Gallery</h2>
            <!-- divider -->
            <div class="hr"></div>
         </div>
         <!--/section-heading -->
         <div class="container-fluid">
            <!-- row fluid -->
            <div class="row-fluid">
               <!-- Navigation -->
               <div class="text-center col-md-12">
                  <ul class="nav nav-pills category text-center" role="tablist" id="gallerytab">
                     <li class="active"><a href="#" data-toggle="tab" data-filter="*">All</a>
                     <li><a href="#" data-toggle="tab" data-filter=".our-photos">Session 1</a></li>
                     <li><a href="#" data-toggle="tab" data-filter=".wedding">Session 2</a></li>
                  </ul>
               </div>
               <!-- Gallery -->
               <div class="col-md-12 gallery margin1">
                  <div id="lightbox">
                     <!-- Image 1 -->
                     <div class="wedding col-lg-4 col-sm-6 col-md-6">
                        <div class="isotope-item">
                           <div class="gallery-thumb">
                              <img class="img-responsive" src="img/gallery11.jpg" alt="">
                              <a href="img/gallery1.jpg" data-gal="prettyPhoto[gallery]"  title="If I know what love is, it is because of you.">
                              <span class="overlay-mask"></span>
                              </a>							  							  
                           </div>
                        </div>
                     </div>
                     <!-- Image 2 -->
                     <div class="our-photos col-lg-4 col-sm-6 col-md-6">
                        <div class="isotope-item">
                           <div class="gallery-thumb">
                              <img class="img-responsive" src="img/gallery21.jpg" alt="">
                              <a href="img/gallery2.jpg" data-gal="prettyPhoto[gallery]"  title="Love is that condition in which the happiness of another person is essential to your own.">
                              <span class="overlay-mask"></span>
                              </a>							  							  
                           </div>
                        </div>
                     </div>
                     <!-- Image 3 -->
                     <div class="wedding col-lg-4 col-sm-6 col-md-6">
                        <div class="isotope-item">
                           <div class="gallery-thumb">
                              <img class="img-responsive" src="img/gallery31.jpg" alt="">
                              <a href="img/gallery3.jpg" data-gal="prettyPhoto[gallery]"  title="A purpose of human life, no matter who is controlling it, is to love whoever is around to be loved.">
                              <span class="overlay-mask"></span>
                              </a>							  							  
                           </div>
                        </div>
                     </div>
                     <!-- Image 4 -->
                     <div class="wedding col-lg-4 col-sm-6 col-md-6">
                        <div class="isotope-item">
                           <div class="gallery-thumb">
                              <img class="img-responsive" src="img/gallery41.jpg" alt="">
                              <a href="img/gallery4.jpg" data-gal="prettyPhoto[gallery]"  title="A life lived in love will never be dull.">
                              <span class="overlay-mask"></span>
                              </a>							  							  
                           </div>
                        </div>
                     </div>
                     <!-- Image 5 -->
                     <div class="wedding col-lg-4 col-sm-6 col-md-6">
                        <div class="isotope-item">
                           <div class="gallery-thumb">
                              <img class="img-responsive" src="img/gallery51.jpg" alt="">
                              <a href="img/gallery5.jpg" data-gal="prettyPhoto[gallery]"  title="We love because it's the only true adventure.">
                              <span class="overlay-mask"></span>
                              </a>							  							  
                           </div>
                        </div>
                     </div>
                     <!-- Image 6 -->
                     <div class="our-photos col-lg-4 col-sm-6 col-md-6">
                        <div class="isotope-item">
                           <div class="gallery-thumb">
                              <img class="img-responsive" src="img/gallery61.jpg" alt="">
                              <a href="img/gallery6.jpg" data-gal="prettyPhoto[gallery]"  title="Love is what makes the ride worthwhile.">
                              <span class="overlay-mask"></span>
                              </a>							  							  
                           </div>
                        </div>
                     </div>
                     <!-- Image 7 -->
                     <div class="our-photos col-lg-4 col-sm-6 col-md-6">
                        <div class="isotope-item">
                           <div class="gallery-thumb">
                              <img class="img-responsive" src="img/gallery71.jpg" alt="">
                              <a href="img/gallery7.jpg" data-gal="prettyPhoto[gallery]"  title="True love stories never have endings.">
                              <span class="overlay-mask"></span>
                              </a>							  							  
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- /lightbox-->
               </div>
               <!-- /col-lg-12 -->      
            </div>
            <!-- /row fluid --> 
         </div>
         <!-- /container fluid-->
      </section>
      <!-- /Section ends -->
      <!-- Section: Comments -->
      <!-- carousel comment ama form isi comment -->
      <section id="komentar">
         <div class="container"></div>
            <div class="section-heading"></div>
               <div class="col-md-12 text-center">
                  <h2 class="deco id-color">Sepatah Kata</h2>
               </div>
                  <!-- divider -->
            <div class="hr"></div>
         <!-- form komentar start -->
         <form action="" method="post">
            <div class="form-group">
               <label for="name">Nama :</label>
               <input type="text" class="form-control" id="name">
            </div>
            <div class="form-group">
               <label for="comment">Sepatah Kata :</label>
               <textarea class="form-control" rows="5" id="comment"></textarea>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
         </form>
         <!-- form komentar end-->

         <!-- Carousel Komentar start -->
         <div id="comments-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="item active">
                <h4 class="nama">Budi<span id="display-name"></span></h4>
                <p class="komen" id="display-comment">Selamat yaa....</p>
              </div>
            </div>
            <a class="left carousel-control" href="#comments-carousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#comments-carousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
          </div>
         <!-- Carousel Komentar end -->
      </section>
      <!-- /Section ends -->
      <!-- Section: RSVP  -->
      <section id="rsvp">
         <!-- parallax ornament -->
         <div class="ornament6 hidden-sm hidden-xs hidden-md" data-0="opacity:1;"
            data-100="transform:translatex(90%);"
            data-center-center="transform:translatex(30%);">
            <!-- illustration path in the color template CSS -->
         </div>
         <!-- parallax ornament -->
         <div class="ornament7 hidden-sm hidden-xs hidden-md" data-0="opacity:1;"
            data-100="transform:translatex(0%);"
            data-center-center="transform:translatex(90%);">
            <!-- illustration path in the color template CSS -->
         </div>
         <div class="container">
            <div class="section-heading">
               <h2>RSVP</h2>
               <!-- divider -->
               <div class="hr"></div>
            </div>
            <!-- /section-heading -->
            <div class="col-lg-5">
               <!-- image -->
               <img src="img/rsvp.jpg" alt="" class="margin1 img-photo rotate2 img-responsive">
            </div>
            <!-- well -->
            <div class="col-lg-7 well">
               <div id="rsvp_form">
                  <div class="form-group text-center">
                     <!-- name field-->
                     <h5>Nama Lengkap<span class="required">*</span></h5>
                     <input type="text" name="name" class="form-control input-field" required="">  
                     <!-- checkbox attending-->
                     <input id="yes" type="radio" value="Accepts with pleasure" name="attending"  />
                     <label for="yes" class="side-label">Accepts with pleasure</label>
                     <input id="no" type="radio" value="Declines with regrets" name="attending" />
                     <label for="no" class="side-label">Declines with regrets</label>
                     <!-- if attending=yes then the form bellow will show -->
                     <div class="accept-form">
                        <!-- guests checkbox -->
                        <h5>Are you bringing guests?<span class="required">*</span></h5>
                        <input id="bringing-guests" type="radio" value="yes" name="guest" /><label for="bringing-guests" class="side-label">Yes</label>
                        <input type="radio" id="just-me" value="no" name="guest" /><label for="just-me" class="side-label">No</label><br>
                        <!-- guest name text field-->
                        <div id="guest-name">
                           <h5>Nama Tamu</h5>
                           <input type="text" name="guests" class="form-control input-field"> 
                        </div>
                        <!--/guest-name -->
                     </div>
                     <!--/accept form -->
                     <!-- if attending=no then only the message box will show -->
                     <div class="message-comments">
                        <h5>Pesan</h5>
                        <textarea name="message" id="message-box" class="textarea-field form-control" rows="3" ></textarea>
                     </div>
                     <!--/message-comments -->
                     <div class="text-center">
                        <button type="submit" id="submit_rsvp" value="Submit" class="btn">Submit</button>
                     </div>
                     <!-- /col-md-12 -->
                  </div>
                  <!-- /Form-group -->
                  <!-- Contact results -->
                  <div id="contact_results"></div>
               </div>
               <!-- /rsvp form-->
            </div>
            <!-- /well-->
         </div>
         <!-- /container -->
      </section>
      <!-- /Section ends -->
      <!-- Footer -->		
      <footer>
         <div class="container">
            <div class="col-md-12 text-center">
               <!-- Footer logo -->
               <img src="img/logo.png" alt="" class="center-block img-responsive">
            </div>
            <!-- /col-md-12 -->        
            <!-- Credits-->
            <div class="credits col-md-12 text-center">
               <!-- Go To Top Link -->
               <div class="page-scroll hidden-sm hidden-xs">
                  <a href="#page-top" class="back-to-top"><i class="fa fa-angle-up"></i></a>
               </div>
            </div>
            <!-- /credits -->
         </div>
         <!-- /.container -->
      </footer>
      <!-- /footer ends -->
      <!-- Core JavaScript Files -->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <!-- Main Js -->
      <script src="js/main.js"></script>
      <!-- RSVP form -->
      <script src="js/rsvp.js"></script>
      <!--Other Plugins -->
      <script src="js/plugins.js"></script>
      <!-- Prefix free CSS -->
      <script src="js/prefixfree.js"></script>
      <!-- Open Street maps-->
      <script src="js/map.js"></script>
      <!-- komentar JS -->
      <script src="js/comment..js"></script>
   </body>
</html>
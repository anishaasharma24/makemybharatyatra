<footer class="footer mt-5">
     
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 mb-3">
          <img src="{{ asset('assets/img/logo1.png')}}" width="250" class="mb-3" alt="">
          <p>Make My Bharat Yatra offers expertly crafted, personalized Travel experiences across India. 
             <br> Enjoy exceptional service, unique adventures, and seamless journeys to India's top destinations with us</p>

          <div class="SocialList">
              <a href=""><i class="fa-brands fa-facebook-f"></i></a>
              <a href=""><i class="fa-brands fa-linkedin"></i></a>
              <a href=""><i class="fa-brands fa-youtube"></i></a>
              <a href=""><i class="fa-brands fa-square-instagram"></i></a>
          
          </div>
        </div>

        <div class="col-md-2 quick-links col-lg-2 col-xl-2 mb-3">
          <h5>Quick Links</h5>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="service.php">Our Services</a></li>
            <li><a href="#">Our Blog</a></li>
            <li><a href="career.php">Career</a></li>
            <li><a href="membership.php">Membership</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li><a href="refund-policy.php">Refund Policy </a></li>
            <li><a href="privacy-policy.php">privacy policy</a></li>
            <li><a href="our-blog.php">our blog </a></li>
            </ul>
         </div>


         <div class="col-md-3 quick-links col-lg-3 col-xl-3 mb-3">
          <h5>Top Destinations</h5>
          <ul>
            <li><a href="#">Delhi</a></li>
            <li><a href="#">Goa Tour</a></li>
            <li><a href="#">Manali</a></li>
            <li><a href="#">Kerala</a></li>
            <li><a href="#">Coimbatore</a></li>
            <li><a href="#">Mussoorie</a></li>
            </ul>
         </div>

         <div class="col-md-3 quick-links address col-lg-3 col-xl-3 mb-3">
          <h5>Contact</h5>
          <ul class="list-unstyled">
            <li> <i class="fa-solid fa-location-dot"></i> Building No. D-59, D Block, Sector 63, Noida, District Gautam Buddh Nagar, Uttar Pradesh, Delhi-NCR, 201301</li>
           <li><a href="tel:(+91) 9871980066"> <i class="fa-solid fa-phone-volume"></i> +91 98719 80066</a></li>
           <li><a href="tel:(+91 1204379908"> <i class="fa-solid fa-phone-volume"></i> +91 12043 79908</a></li>
           <li><a href="mailto:info@makemybharatyatra.com"> <i class="fa-solid fa-envelope"></i> info@makemybharatyatra.com</a></li>
           <li><a href="mailto:hr@makemybharatyatra.com"> <i class="fa-solid fa-envelope"></i> hr@makemybharatyatra.com</a></li>
            </ul>
         </div>

       


         <div class="col-12">
          <div class="footer-bottom text-center">
            <p>	<span style="font-size: 16px;">&copy;</span> 2018 Make My Bharat Yatra | All rights reserved</p>
          </div>
         </div>




      </div>
    </div>
     
   </footer>
   
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
   var swiper = new Swiper(".mySwiper", {
      slidesPerView: 4,
      spaceBetween: 10,
      autoplay: {
        delay: 2500,
      },
    
      // Responsive breakpoints
  breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 2,
      spaceBetween: 5
    },
    // when window width is >= 480px
    480: {
      slidesPerView: 2,
      spaceBetween: 10
    },
    // when window width is >= 640px
    640: {
      slidesPerView: 4,
      spaceBetween: 10
    }
  }
    });
   var swiper = new Swiper(".mySwipercategory", {
      slidesPerView: 3,
      spaceBetween: 10,
      autoplay: {
        delay: 6000,
      },
  // Responsive breakpoints
  breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 1,
      spaceBetween: 10
    },
    // when window width is >= 480px
    480: {
      slidesPerView: 1,
      spaceBetween: 10
    },
    // when window width is >= 640px
    640: {
      slidesPerView: 3,
      spaceBetween: 10
    }
  }
    });

   var swiper = new Swiper(".mySwiperHoliday", {
      slidesPerView: 3,
      spaceBetween: 30,
      autoplay: {
        delay: 6000,
      },
    
           // Responsive breakpoints
  breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 1,
      spaceBetween: 10
    },
    // when window width is >= 480px
    480: {
      slidesPerView: 1,
      spaceBetween: 10
    },
    // when window width is >= 640px
    640: {
      slidesPerView: 3,
      spaceBetween: 10
    }
  }
     
    });



    // about page slider
    var swiper = new Swiper(".aboutslider", {
      slidesPerView: 4,
      spaceBetween: 30,
      autoplay: {
        delay: 2500,
      },
    
      // Responsive breakpoints
  breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 2,
      spaceBetween: 30,
    },
    // when window width is >= 480px
    480: {
      slidesPerView: 2,
      spaceBetween: 30
    },
    // when window width is >= 640px
    640: {
      slidesPerView: 4,
      spaceBetween: 30,

    }
  }
    });


    // service-page-slider//


   
    var swiper = new Swiper(".serviceSlider", {
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      spaceBetween: 10,
      autoplay: {
   delay: 3000,
 },
       // Responsive breakpoints
  breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 1,
      spaceBetween: 20
    },
    // when window width is >= 480px
    480: {
      slidesPerView: 3,
      spaceBetween: 30
    },
    // when window width is >= 640px
    640: {
      slidesPerView: 3,
      spaceBetween: 40
    }
  }
    });





        // blog-page-slider//

    var swiper = new Swiper(".swiper-container", {
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      breakpoints: {
          640: {
            slidesPerView: 2,
            spaceBetween: 20,
          },
          768: {
            slidesPerView: 4,
            spaceBetween: 40,
          },
          1024: {
            slidesPerView: 2,
            spaceBetween: 50,
          },
        },
    });






    var swiper = new Swiper(".imagesSwiper", {
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      breakpoints: {
          640: {
            slidesPerView: 2,
            spaceBetween: 20,
          },
          768: {
            slidesPerView: 4,
            spaceBetween: 40,
          },
          1024: {
            slidesPerView: 2,
            spaceBetween: 50,
          },
        },
    });



    



    
   
    var swiper = new Swiper(".myimagesslider", {
      slidesPerView: 3,
      spaceBetween: 40,
      freeMode: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      
      breakpoints: {
      320: {
      slidesPerView: 1,
      spaceBetween: 20
    },
    // when window width is >= 480px
    480: {
      slidesPerView: 2,
      spaceBetween: 30
    },
    // when window width is >= 640px
    640: {
      slidesPerView: 3,
      spaceBetween: 40
    }
  }
    });
  




   
</script>

</body>
</html>
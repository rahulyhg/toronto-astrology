<?php get_header(); ?>

<!-- section header -->

<!-- section-slider -------------------------------------------->

<section id="section-slider">

  <div class="main-screen">
    <ul class="slideshow">
      <li class="slider-image active">
      </li>
      <li class="slider-image">
      </li>
      <li class="slider-image">
      </li>
      <li class="slider-image">
      </li>
    </ul>
  </div>

</section>


<!-- section-contact -------------------------------------------->
<section id="section-contact">
  <div class="flex-row all-list">
    <div class="list-left flex1">
      <ul>
        <li>Self Healing</li>
        <li>Life Problems</li>
        <li>Good Fortune</li>
      </ul>
    </div>
    <div class="list-right flex1">
      <ul>
        <li>Call Today!</li>
        <li><i class="fab fa-skype" style="color:#f9ff00"></i><i class="fas fa-phone-volume" style="color:#f9ff00"></i>1-647-220-7899</li>
        <li>srikrishnastrologer@gmail.com</li>
      </ul>
    </div>
  </div>
</section>

<!-- section-yellow -------------------------------------------->
<section>
  <div id="yel"></div>
</section>

<!-- section-intro -------------------------------------------->
<section id="section-intro">
  <div class="container flex-row">
    <div class="intro-text flex1">
      <h1>Pandit Sri Krishna<br>Best Astrologer in Toronto!</h1>
      <p>Many of people think about future that what will gonna happen in our future? Pandit Krishna is an astrologer in Toronto, Ontario, Brampton, Mississauga, Downtown ,Vancouver , Canada, help you and our astrologer gives you best and top astrologer
        services all over Canada. He is a good and best Indian astrologer who gives you best spiritual healing and psychic readings to solve the problem facing by the people. Our astrologer now available in your town Toronto, Ontario, Brampton, Mississauga,
        Downtown, Vancouver , Canada. He will provides you 100% satisfactory services and solve your problem within 2 to 3 days. So feel free to come near to us and solve any type astrological problem.</p>

    </div>
    <div class="intro-image flex1">
      <img id="pic-intro" src="<?php echo get_template_directory_uri(); ?>/images/toronto-astrology-sunset.png" alt="">
    </div>
  </div>

</section>

<!-- section-services -------------------------------------------->
<section id="section-services">
  <div class="container">

    <h1 id="serv-head">Our Specialied Services</h1>

    <div class="Services flex-row">

      <div class="service">
        <img class="pictureservice" src="<?php echo get_template_directory_uri(); ?>/images/services/toronto-astrology-black-magic.png" alt="">
        <a href="<?php echo get_permalink(get_page_by_path('black-magic-removal')); ?>"><h3>Black Magic Removal</h3></a>
      </div>
      <div class="service">
        <img class="pictureservice" src="<?php echo get_template_directory_uri(); ?>/images/services/toronto-astrology-love.png" alt="">
        <a href="<?php echo get_permalink(get_page_by_path('get-lover-back')); ?>"><h3>Get Lover Back</h3></a>
      </div>
      <div class="service">
        <img class="pictureservice" src="<?php echo get_template_directory_uri(); ?>/images/services/toronto-astrology-business.png" alt="">
        <a href="<?php echo get_permalink(get_page_by_path('business-problem')); ?>"><h3>Business Problems</h3></a>
      </div>
      <div class="service">
        <img class="pictureservice" src="<?php echo get_template_directory_uri(); ?>/images/services/toronto-astrology-marriage.png" alt="">
        <a href="<?php echo get_permalink(get_page_by_path('marriage-related-problem')); ?>"><h3>Marriage Related Problem</h3></a>
      </div>
      <div class="service">
        <img class="pictureservice" src="<?php echo get_template_directory_uri(); ?>/images/services/toronto-astrology-family.png" alt="">
        <a href="<?php echo get_permalink(get_page_by_path('family-problem')); ?>"><h3>Family Problems</h3></a>
      </div>
      <div class="service">
        <img class="pictureservice" src="<?php echo get_template_directory_uri(); ?>/images/services/toronto-astrology-palm.png" alt="">
        <a href="<?php echo get_permalink(get_page_by_path('palm-reading')); ?>"><h3>Palm Reading</h3></a>
      </div>

    </div>

  </div>
</section>


<!-- section-appointment -------------------------------------------->
<section id="section-appointment">
  <div class="container flex-row">

    <div class="pic-app flex1">
      <img id="pic-app" src="<?php echo get_template_directory_uri(); ?>/images/toronto-astrology-phone.svg" alt="">
    </div>

    <div class="appointment flex2">
      <h1>Book Your Appointment!</h1>
      <h1>Change your life today.</h1>
      <h1 class="maxi-header">(647) 220-7899</h1>
    </div>

  </div>
</section>

<!-- section-darkred -------------------------------------------->
<section>
  <div id="darkred"></div>
</section>

<!-- section-testomonials -------------------------------------------->
<section id="section-testomonials">
  <div class="container">

    <h2>People’s lives we have changed.</h2>

    <div class="flex-row testimonials">
      <div class="test flex1">
        <p class="test-message">“I was a devout rational who had no faith on astrology. My scientific background forbade me from believing in these forces, but the sudden.. paranormal activities in my own family and certain unexplainable stuff before my own eyes led me to believe
          in the existence of such aspects.”</p>
        <p class="author">- Marie, Scarborough</p>
      </div>

      <div class="test flex1">
        <p class="test-message">“I found the astrology reading very helpful in regards to my phases of my life, and it gave me guidance. Thank you.”</p>
        <p class="author">- John, Toronto</p>
      </div>

      <div class="test flex1">
        <p class="test-message">“Pandit Krishna helped in a time where I had nothing else going for me. I was very depressed and down in the dumps with my addiction problems. He helped me with rituals and prayers that helped me get rid of my addictions and have a better outlook
          on life. This has helped my family situation immensly and all my friends seem to want to hang out more because I have become more stable. Thank you Pandit Krishna!”</p>
        <p class="author">- Xavier, Toronto</p>
      </div>
    </div>

  </div>

</section>



<?php get_footer(); ?>

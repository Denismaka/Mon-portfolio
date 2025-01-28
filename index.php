<?php include('layouts/header.php'); ?>


<!-- ############## -->
<!-- home -->
<!-- ############## -->
<section class="home" id="home" style="height: 105vh; margin-top: -150px">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h3>Bonjour je suis</h3>
        <h1>Denis Maka et je suis</h1>
        <h3><span class="multiple"></span></h3>
        <p>
          Avec des connaissances en développement web, j'offfre les
          meilleurs projets, résultants en un travail de qualité.
        </p>
        <div class="btn-contact">
          <a href="contact.php">contact</a>
        </div>
        <div class="socials-icons">
          <a href="#"><i class="fab fa-facebook"></i></a>
          <a href="#"><i class="fab fa-github"></i></a>
          <a href="#"><i class="fab fa-x-twitter"></i></a>
          <a href="#"><i class="fab fa-linkedin"></i></a>
          <a href="#"><i class="fab fa-discord"></i></a>
        </div>
      </div>
      <div class="col-md-6">
        <div class="right">
          <img src="assets/images/dnis1.png" alt="" class="img-fluid" />
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ############## -->
<!-- About -->
<!-- ############## -->
<section class="about" id="about">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <img src="assets/images/denis 15.png" alt="" class="img-fluid" />
      </div>
      <div class="col-md-6">
        <h5>ma <span>présentation</span></h5>
        <h4>à propos de moi</h4>
        <p>
          Je suis un développeur front-end spécialisé dans la création de
          pages web avec des interfaces utilisateur UI/UX. Avec plusieurs
          années d'expérience à mon actif, j'ai satisfait de nombreux
          clients grâce à des projets de qualité. Si vous souhaitez
          collaborer ou en savoir plus, n'hésitez pas à me contacter
        </p>

      </div>
    </div>
  </div>
</section>

<!-- ############## -->
<!-- Service -->
<!-- ############## -->
<section class="service" id="service">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <h5>compétences <span>préférées</span></h5>
        <h4>mes compétences</h4>
        <p>
          Enregistrez en détail toutes les compétences que je possède et
          utilise pour développer vos projets
        </p>
      </div>
      <div class="col-md-3">
        <div class="heading">
          <h5>front-end</h5>
        </div>
        <li><span>01. </span>HTML & CSS</li>
        <li><span>02. </span>JavaScript</li>
        <li><span>03. </span>Bootstrap</li>
        <li><span>04. </span>Angular</li>
      </div>
      <div class="col-md-3">
        <div class="heading">
          <h5>back-end</h5>
        </div>
        <li><span>05. </span>php</li>
        <li><span>06. </span>laravel</li>
      </div>
      <div class="col-md-3">
        <div class="heading">
          <h5>web design</h5>
        </div>
        <li><span>05. </span>Git & Github</li>
        <li><span>06. </span>Figma</li>
        <li><span>07. </span>Canva</li>
        <li><span>08. </span>Adobe Xd</li>
      </div>
    </div>
  </div>
</section>

<!-- ############## -->
<!-- Services -->
<!-- ############## -->
<section class="services" id="services" style="padding-top: 110px; height: 150vh;">
  <div class="heading">
    <h5>mes <span>services</span></h5>
    <h4>Ce que je propose</h4>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="icons">
          <i class="fa-solid fa-code"></i>
        </div>
        <h4>développeur web</h4>
        <p>
          Je céer des sites web dynamiques et réactifs en utilisant les
          dernières téchnologies front-end et back-end comme HTML, CSS, JavaScript et php.
          Avec une expertise dans Angular Bootstrap et laravel, je transforme vos idées
          en interfaces élégantes et fonctionnelles, optimisés pour offrir
          une expérience utilisateur fluid sur tous les appareils. Je veille
          à ce que chaque projet soit non seulement visuellement attrayant
          mais aussi techniquement robuste.
        </p>
      </div>
      <div class="col-md-4">
        <div class="icons">
          <i class="fas fa-pencil-ruler"></i>
        </div>
        <h4>designer UI/UX</h4>
        <p>
          Je conçcois des expérinec utilisateur captivantes grâce à une
          maitrise approfondie de figma, canva et Adobe XD. Mon approche
          centrée sur l'utilisateur garantit que chaque design est à la fois
          esthétique et intuitif. Je travaile en étroite collaboration avec
          vous pour crées des interfaces qui répondent aux bésoins de vos
          utilisateurs tout en renforçant l'identité de votre marque. Chaque
          projet est abordé avec une attention minutieuse aux détails pour
          offrir des solutions visuelles modernes et efficaces
        </p>
      </div>
      <div class="col-md-4">
        <div class="icons">
          <i class="fa fa-chalkboard-teacher"></i>
        </div>
        <h4>formateur en développement web</h4>
        <p>
          Je propose des formations complètes en développement web adaptées
          à tous les niveaux. Que vous soyez débutant ou développeur
          souhaitant perfectionner vos compétences, je vous guiderai à
          travers les fondamentaux du HTML et du CSS, l'interaction
          dynamique avec JavaScript, et l'utilisation des outils modernes
          comme Git, Github, et React. Mes sessions sont conçues pour etre
          pratiques et interactives, avec des exercices concrets pour vous
          préparer à des défis réels dans le développement web.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- ############## -->
<!-- Project -->
<!-- ############## -->
<?php include('projet.php') ?>


<!-- ############## -->
<!-- Contact -->
<!-- ############## -->
<?php include('components/contact.php') ?>
<?php include('layouts/footer.php') ?>
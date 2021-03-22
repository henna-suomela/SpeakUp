<?php require "teacher_header.php" ?>


       <!-- Title -->
      <!-- if one specifies large column width as 6, 
    than with anything smaller than laptop size, 
    that column takes up to 100% of the space-->

    <div class="row">

        <div class="col-lg-6">
        <h1 class="big-heading">Tervetuloa, [nimi]! </h1>
        <br>
        <h4>Tältä sivustolta pääset materiaaleihisi.</h4>

    </div>  


<div class="col-lg-6">
  <img class="woman" src="https://cdn.pixabay.com/photo/2017/10/09/21/53/women-2835137_1280.png" title="Augusto Ordonezin luoma kuva Pixabay-palvelusta">

</div>

</div>
</div>
</section>


<!-- Oppilaalle -->

<section class="light-section" id="students">
    <div class="container-fluid">
      <div class="container-heading">
        <h2>Opettajan linkit</h2>
      </div>
        
      <div class="row">

        <div class="feature-box col-lg-3">
          <a href="<?php echo('timetable.php'); ?>" class="fas fa-laptop fa-4x"></i></a>
          <h3 class="feature-title">Aikataulu</h3>
          <p>Täältä näet tulevat tuntisi.</p>
        </div>

        <div class="feature-box col-lg-3">
          <a href="<?php echo('students.php'); ?>" class="fas fa-user-circle fa-4x"></i></a>
          <h3 class="feature-title">Oppilaat</h3>
          <p>Täältä näet omat oppilaasi ja heidän tietonsa.</p>
        </div>

        <div class="feature-box col-lg-3">
          <i class="fas fa-clipboard-check fa-4x"></i>
          <h3 class="feature-title">Testit</h3>
          <p>Täältä pääset omiin kokeisiisi ja näet vanhojen kokeiden tulokset.</p>
        </div>

        <div class="feature-box col-lg-3">
          <i class="fas fa-book-open fa-4x icon"></i>
          <h3 class="feature-title">Lisämateriaalit</h3>
          <p>Täältä voit jakaa lisämateriaalia oppilaillesi.</p>
        </div>

      </div>
    </div>
  </section>

</div>
</div>
</section>



<?php require "teacher_footer.php" ?>

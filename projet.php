<?php
include 'functions/projet.func.php'; ?>


<section class="projet" id="projet" style="margin-top: -20.3rem; height: 50%;">
    <div class="heading mb-5">
        <h5>mes <span>traveaux</span></h5>
        <h4>projects récents</h4>
    </div>
    <div class="container">
        <div class="row">
            <?php if (!empty($projets)): ?>
                <?php foreach ($projets as $projet): ?>
                    <div class="col-md-4">
                        <img src="assets/images/post_projets/<?= $projet->images ?>" alt="<?= $projet->titre ?>" />
                        <div class="project-layer">
                            <h4><?= $projet->titre ?></h4>
                            <p><?= $projet->descriptions ?></p>
                            <a href="<?= $projet->lien_github ?>"><i class="fas fa-external-link-alt"></i></a>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>Aucun projet trouvé. </p>
            <?php endif; ?>
        </div>
    </div>
</section>
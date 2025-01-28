<?php
session_start();
?>
<?php include('functions/db.php'); ?>
<?php include('functions/dashboard.func.php'); ?>

<?php include('layouts/header.php'); ?>
<?php if (($_SESSION['id_admin']) && ($_SESSION['id_admin']) == 1): ?>
    <div class="container">

        <div class="row">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-12 mt-4 ">
                        <div class="alert alert-warning bg-success alert-dismissible fade show text-center text-white" role="alert ">
                            <i class="bi bi-star"></i> <strong>Espace d'administration</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <!-- Bouton pour ouvrir le modal -->
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#playerModal">
                            Ajouter un projet <i class="bi bi-person-circle"></i>
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="playerModal" tabindex="-1" aria-labelledby="playerModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="playerModalLabel">Ajouter un projet</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="mb-3">
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="bi bi-person-circle"></i></span>
                                                    <input type="text" class="form-control" id="playerName" placeholder="Entrez le titre du projet" name="titre">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                                    <input type="email" class="form-control" id="playerEmail" placeholder="Entrez la description du projet" name="descriptions">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="bi bi-phone"></i></span>
                                                    <input type="tel" class="form-control" id="playerPhone" placeholder="Entrez le lien du dépôt github" name="lien_github">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="bi bi-card-image"></i></span>
                                                    <input type="file" name="images" class="form-control" id="playerFile">
                                                </div>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="bi bi-x-lg"></i></button>
                                        <button type="submit" class="btn btn-success"><i class="bi bi-check-lg"></i></button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 ">
                        <form role="search">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">
                                        <i class="bi bi-search"></i>
                                    </span>
                                </div>
                                <input type="search" class="form-control" placeholder="Rechercher" aria-label="Search" aria-describedby="basic-addon1">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <table class="table table-hover table-striped mt-4">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Titre</th>
                                <th>Description</th>
                                <th>Liens github</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($projets as $projet): ?>
                                <tr>
                                    <td>1</td>
                                    <td><img src="assets/images/post_projets/<?= $projet->images ?>" alt="<?= $projet->titre ?>" style="max-width: 40px; max-height: 40px;" data-toggle="modal" data-target="#clientModal1"></td>
                                    <td><?= $projet->titre ?></td>
                                    <td><?= $projet->descriptions ?></td>
                                    <td><a href="<?= $projet->lien_github ?>"><i class="fas fa-external-link-alt"></i></a></td>
                                    <td>
                                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#voirplayer-<?= $projet->id_projet ?>"><i class="bi bi-file-image"></i></button>
                                        <!-- Modal file image -->
                                        <div class="modal fade" id="voirplayer-<?= $projet->id_projet ?>" tabindex="-1" aria-labelledby="playerModalLabel" aria-hidden="true">
                                            <div class="container">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="playerModalLabel">voir un player</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <img src="assets/images/post_projets/<?= $projet->images ?>" alt="<?= $projet->titre ?>" class="img img-thumbnail">
                                                            </div>
                                                            <div class="col-md-8">
                                                                <h3><?= $projet->titre ?></h3>
                                                                <i class="bi bi-envelope"></i><span style="margin-left: 7px;"><?= $projet->descriptions ?></span> <br>
                                                                <i class="bi bi-phone"></i><span style="margin-left: 7px;"> <a href="<?= $projet->lien_github ?>"><i class="fas fa-external-link-alt"></i></a></span>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="bi bi-x-lg"></i></button>
                                                            <button type="button" class="btn btn-success"><i class="bi bi-check-lg"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                </div>
                <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editerplayer-<?= $projet->id_projet ?>"><i class="bi bi-pen"></i></button>
                <!-- Modal pen-->
                <div class="modal fade" id="editerplayer-<?= $projet->id_projet ?>" tabindex="-1" aria-labelledby="playerModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="playerModalLabel">Editer un projet</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="mb-3">
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bi bi-person-circle"></i></span>
                                            <input type="text" name="titre" class="form-control" id="playerName" placeholder="titre" value="<?= $projet->titre ?>">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                            <input type="text" name="descriptions" class="form-control" id="playerEmail" placeholder="descriptions" value="<?= $projet->descriptions ?>">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bi bi-phone"></i></span>
                                            <input type="text" name="lien_github" class="form-control" id="playerPhone" placeholder="lien_github" value="<?= $projet->lien_github ?>">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bi bi-card-image"></i></span>
                                            <input type="file" name="images" class="form-control" id="playerFile">
                                        </div>
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="bi bi-x-lg"></i></button>
                                <button type="submit" class="btn btn-success"><i class="bi bi-check-lg"></i></button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>

                <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalDelete-<?= $projet->id_projet ?>"><i class="bi bi-trash"></i></button>
                <!-- Modal file image -->
                <div class="modal fade" id="modalDelete-<?= $projet->id_projet ?>" tabindex="-1" aria-labelledby="playerModalLabel" aria-hidden="true">
                    <div class="container">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="playerModalLabel"><i class="bi bi-exclamation-triangle"></i> Attention </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <h5 class="modal-title" id="playerModalLabel"> Etes-vous sûre de supprimer ce projet ? </h5>
                                </div>

                                <form action="" method="post">
                                    <input type="hidden" name="id_projet" value="<?= $projet->id_projet ?>">
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annuler <i class="bi bi-x-lg"></i></button>
                                        <button type="submit" class="btn btn-success">Supprimer <i class="bi bi-check-lg"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                </td>
                </tr>
            <?php endforeach; ?>

            </tbody>
            </table>
            </div>
        </div>


        <div class="row">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link">Prev</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link bg-success text-white" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    </div>
    </div>

<?php else: ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Vous n'avez pas accès à cette page <i class="bi bi-emoji-angry"></i> </h1>
            </div>
        </div>
    </div>

<?php endif; ?>
<?php include('layouts/header.php'); ?>

<?php 


    require('functions/login.func.php');

    if (isset($message)) {
        echo $message;
    }
?>


    <section class="contact" id="contact">
        <div class="heading">
            <h5>se <span>connecter</span></h5>
        </div>
        <?php if (!empty($message)) { ?>
            <div class="message"><?php echo $message; ?></div>
        <?php } ?>
        <form action="" method="POST" class="form">
            <div class="content">
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-box">
                            <input type="text" name="nom" placeholder="Nom" required  class=""/> <!-- Ajout de required -->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-box">
                            <input type="email" name="email" placeholder="Email" required class="" /> <!-- Ajout de required -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="input-box">
                            <input type="password" name="passwords" placeholder="Mot de passe" required class="" /> <!-- Ajout de required -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4"><input type="submit" name="submit" value="Envoyer" class="btn" /></div>
                    <div class="col-md-4"></div>
                </div>
            </div>
        </form>
    </section>
    <style>
        .contact{
            margin: 0 0 0px 0;
        }
        #contact form .content   {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            padding: 1.5rem;
            font-size: 1.4rem;
            color: var(--green);
            background: var(--black);
            border-radius: 0.8rem;
            margin: 0.7rem 0;
         }
         #contact form {
            border: 1px solid var(--green);
         }
         #contact form .content input {
            width: 500%;
            margin: 12px;
         }
         #contact form:nth-child(3){
            background-color: red;
         }
    </style>

<?php include('layouts/footer.php'); ?>

           
          
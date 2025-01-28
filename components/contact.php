<section class="contact" id="contact">
    <div class="heading">
        <h5>mes <span>contacter</span></h5>
    </div>
    <?php if (!empty($message)) { ?>
        <div class="message"><?php echo $message; ?></div>
    <?php } ?>
    <form action="contact.php" method="POST">
        <div class="input-box">
            <input type="text" name="nom" placeholder="Nom" required /> <!-- Ajout de required -->
            <input type="email" name="email" placeholder="Email" required /> <!-- Ajout de required -->
        </div>
        <div class="input-box">
          <select name="sujet" required>
            <option value=""><span class="title">Choisissez un sujet</span></option>
            <option value="Développement web">Développement web</option>
            <option value="Web design">Web design</option>
            <option value="Formation web">Formation web</option>
          </select>
          <input type="number" name="tel" placeholder="Téléphone" required />
        </div>
        <textarea placeholder="Message" name="messages" required></textarea> <!-- Ajout de required -->
        <input type="submit" name="submit" value="Envoyer" class="btn" />
    </form>
    <style>
        #contact form .input-box select {
            width: 100%;
            padding: 1.5rem;
            font-size: 1.4rem;
            color: var(--green);
            background: var(--black);
            border-radius: 0.8rem;
            margin: 0.7rem 0;
            border: 1px solid var(--green);
            width: 49%;
         }
        #contact form .input-box select .title {
          color: #747474;
          background-color: red;
         }
    </style>
</section>
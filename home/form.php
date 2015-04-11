<div class="container-fluid form">

    <form action="home/post_contact.php" method="POST">
          <div class="name">
            <label for="inputname"><h5>Nom :</h5></label>
            <input required type="text" placeholder="Pour savoir qui nous écrit :)" name="name" class="form-control" id="inputname" value="<?= isset($_SESSION['inputs']['name']) ? $_SESSION['inputs']['name'] : ''; ?>">
          </div>
          <div class="mail">
            <label for="inputemail"><h5>E-mail :</h5></label>
            <input required type="text" placeholder="Pour qu'on puisse vous répondre !" name="email" class="form-control" id="inputemail" value="<?= isset($_SESSION['inputs']['email']) ? $_SESSION['inputs']['email'] : ''; ?>">
          </div>
          <div class="message">
            <label for="inputmessage"><h5>Message :</h5></label>
            <textarea required id="inputmessage" rows="6" placeholder="Ce sera toujours un plaisir de vous lire !" name="message" class="form-control"><?= isset($_SESSION['inputs']['message']) ? $_SESSION['inputs']['message'] : ''; ?></textarea>
          </div>
          <button type="submit" class="submit btn">Envoyer</button>
<!--               <div class="loi-donnees">
      <p>Conformément à la loi informatique et liberté du 06/01/1978, vous disposez d'un droit d'accès, de rectification et de radiation des données, vous concernant, en vous adressant au siège social de COUTARD PAVOISEMENT.</p>
    </div> -->
    </form>

</div>
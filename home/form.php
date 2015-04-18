<div class="container-fluid form hidden-xs" id="form">

  <div class="col-sm-7 column-1">
    <form action="home/post_contact.php" method="POST">
          <div class="row name">
            <div class="col-sm-3">
              <label for="inputname"><h5>Nom :</h5></label>
            </div>
            <div class="col-sm-9">
              <input required type="text" placeholder="Pour savoir qui nous écrit :)" name="name" class="form-control" id="inputname" value="<?= isset($_SESSION['inputs']['name']) ? $_SESSION['inputs']['name'] : ''; ?>">
            </div>
          </div>
          <div class="row mail">
            <div class="col-sm-3">
              <label for="inputemail"><h5>E-mail :</h5></label>
            </div>
            <div class="col-sm-9">
              <input required type="text" placeholder="Pour qu'on puisse vous répondre !" name="email" class="form-control" id="inputemail" value="<?= isset($_SESSION['inputs']['email']) ? $_SESSION['inputs']['email'] : ''; ?>">
            </div>
          </div>
          <div class="row message">
            <div class="col-sm-3">
              <label for="inputmessage"><h5>Message:</h5></label>
            </div>
            <div class="col-sm-9">
              <textarea required id="inputmessage" rows="6" placeholder="Ce sera toujours un plaisir de vous lire !" name="message" class="form-control"><?= isset($_SESSION['inputs']['message']) ? $_SESSION['inputs']['message'] : ''; ?></textarea>
            </div>
          </div>
          <button type="submit" class="submit btn">Envoyer</button>
<!--               <div class="loi-donnees">
      <p>Conformément à la loi informatique et liberté du 06/01/1978, vous disposez d'un droit d'accès, de rectification et de radiation des données, vous concernant, en vous adressant au siège social de COUTARD PAVOISEMENT.</p>
    </div> -->
    </form>
  </div>

  <div class="col-sm-5 column-2">
     <div class="contact hidden-xs">
      <h2>Contact</h2>
      <h3><strong>OUEST DRAPEAUX</strong><br>
        16 rue de l'Avenir<br>
        14650 CARPIQUET<br>
        <a href="mailto:ouestdrapeaux@hotmail.com">ouestdrapeaux@hotmail.com</a><br>
        FAX : 08 26 99 52 96</h3>
     </div>
  </div>

</div>
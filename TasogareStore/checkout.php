<?php require_once("risorse/config.php"); ?>
<?php require_once("carrello.php"); ?>

<?php 

session_start();

?>


<?php include(FRONT_END.DS."header.php"); ?>

<?php // echo $_SESSION['prodotto_1']; ?>

    <div class="container">

        <h1 class="my-5">Il tuo Ordine</h1>

        <div class="row scroll">
        <h4><?php mostraAvviso(); ?></h4>
            <div class="col-7">

                  <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
                    <input type="hidden" name="cmd" value="_cart">
                    <input type="hidden" name="business" value="dianabusiness@hotmail.it">
                    <INPUT TYPE="hidden" name="charset" value="utf-8">
                    <INPUT TYPE="hidden" NAME="currency_code" value="EUR">
                    <input type="hidden" name="upload" value="1" />

                  <table class="table table-striped">
                  <thread>
                  <tr>

                  <th>Prodotto</th>
                  <th>Prezzo</th>
                  <th>Quantità</th>
                  <th>Importo</th>
                  <th>Modifica</th>


                  </tr>
                  </thread>

                  <tbody>
                  <?php carrello(); ?>
                  <!-- <tr>

                  <td>apple</td>
                  <td>$23</td>
                  <td>3</td>
                  <td>2</td>
                  <td><a class="btn btn-success" href="#" role="button">Aggiungi</a></td>            
                  <td><a class="btn btn-warning" href="carrello.php?remove=1" role="button">Rimuovi</a></td>            
                  <td><a class="btn btn-danger" href="carrello.php?delete=1" role="button">Svuota</a></td>

                  </tr> -->
                  </tbody>


                  </table>

                  <input type="hidden" name="hosted_button_id" value="LH3VTXK4XF86G">
                  <input style="position:relative; left:25%;margin:10px 0;" type="image" src="https://www.paypalobjects.com/it_IT/IT/i/btn/btn_buynowCC_LG.gif" border="0" name="upload" alt="Paga subito">
                  <img alt="" border="0" src="https://www.paypalobjects.com/it_IT/i/scr/pixel.gif" width="1" height="1">
                  </form>


                  </form>
            </div>

          </div>


      <div class="row my-5">
          <div class="col-5">
            <h2 class="text-center">Riepilogo ordine</h2>

            <table class="table table-bordered" cellspacing="0">

            <tr class="cart-subtotal">
            <th>Articoli:</th>
            <td><span class="amount"><?php echo isset($_SESSION['qnt_art'])?$_SESSION['qnt_art']:$_SESSION['qnt_art'] = "0"; ?></span></td>
            </tr>
            <tr class="shipping">
            <th>Spedizione</th>
            <td>Gratuita</td>
            </tr>

            <tr class="order-total">
            <th>Totale ordine</th>
            <td><strong><span class="amount">€<?php echo isset($_SESSION['totale'])?$_SESSION['totale']:$_SESSION['totale'] = "0"; ?></span></strong> </td>
            </tr>

            </tbody>

            </table>
          </div> 
        </div>
    </div>



 <!-- Footer -->
<?php include(FRONT_END.DS."footer.php"); ?>

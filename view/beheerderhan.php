<?php include "header.php"; ?>
<!-- javascript van de WYSIWYG -->
<script src="https://cdn.ckeditor.com/ckeditor5/12.4.0/classic/ckeditor.js"></script>
<?php
// hierin moet de database info komen
$data = "testt";
while ($content = $content->fetch(PDO::FETCH_ASSOC)) {
  $id = $content['about_id'];
  $bedrijfsnaam =  $content['bedrijfsnaam'];
  $email = $content['email'];
  $locatie = $content['locatie'];

 /* echo "<strong>Contact pagina</strong>";
  echo "<br>";
  echo "bedrijfsnaam" . $bedrijfsnaam;
  echo "<br>";
  echo "email" . $email;
  echo "<br>";
  echo "locatie" . $locatie;*/





?>
<h1>Classic editor</h1>
    <!--formulier die als je op submit klikt het in database zet -->
    <form action="index.php?op=updateContact" method="post">
        
        
        <!-- textarea hoerdoor zie je de editor -->
        <textarea name="content" id="editor">
          <!-- zet hierin de variable die je daarboven hebt gemaakt om iets vanuit de database in de editor te showen -->
          <?= $locatie ?>
        </textarea>
        <!-- submit button -->
      <p><input type="submit" value="Submit" name="updateContact"></p>
    </form>
                <!-- script om de editor te laten zien -->
                <script>
                       // Remove a few plugins from the default setup.
                    ClassicEditor
                        .create( document.querySelector( '#editor' ), {
                          // verwijder bepaalde functies
                            removePlugins: [ 'link' ],
                            //voeg functies toe 
                            toolbar: [ 'Heading', 'bold', 'italic', 'bulletedList', 'numberedList', 'blockQuote', 'imageUpload']
                        } )
                        .catch( error => {
                            console.log( error );
                        } ); 
                </script>

<?php
}
    //$editor_data = $_POST[ 'content' ];
?>


















<?php
/*
while ($content = $content->fetch(PDO::FETCH_ASSOC)) {
  $id = $content['about_id'];
  $bedrijfsnaam =  $content['bedrijfsnaam'];
  $email = $content['email'];
  $locatie = $content['locatie'];

  echo "<strong>Contact pagina</strong>";
  echo "<br>";
  echo "bedrijfsnaam" . $bedrijfsnaam;
  echo "<br>";
  echo "email" . $email;
  echo "<br>";
  echo "locatie" . $locatie;

}
*/
?>





<?php include 'footer.php'; ?>
<?php echo form_open(current_url());?>
<p>
    <label for="titre">Titre :</label>
    <input type="text" name="titre" id="titre" value="<?=$news->titre?>" />
    <?php echo form_error('titre'); ?>
	
	<br />

    <label for="contenu">Contenu :</label>
    <textarea name="contenu" id="contenu"><?=$news->contenu?></textarea>
    <?php echo form_error('contenu'); ?>
 
    <input type="submit" value="Envoyer" />
</p>
</form>

<h2>Test</h2>
<ul>
<?php
foreach($cours as $cours_i):?>

<li><?=$cours_i->jour?> à <?=$cours_i->heure?> 
<p><?=$cours_i->matiere?> avec <?=$cours_i->tuteurs?> 

<?php if($admin): ?><a href="<?=site_url('timetable/modifier/'.$cours_i->id)?>">Modifier</a><br />
<a href="javascript:void" class="suppression" id="<?=$cours_i->id?>">Supprimer</a>
<?php endif; ?>

<br /><br /></p></li>

<?php endforeach;?>
</ul>


<script>
	function envoyerRequete(id, confirm) 
	{
		if (confirm)		
		{		
			var xhr = new XMLHttpRequest();
        	xhr.open('POST', '<?=site_url("timetable/supprimer")?>');
			xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        	xhr.send('id='+id);
			document.location.reload(true)
		}

     }

		(function()
		{ 
			var liensSuppression = document.getElementsByClassName('suppression'),
              	liensSuppressionLen = liensSuppression.length;
        
			for (var i = 0 ; i < liensSuppressionLen ; i++)
			{
				liensSuppression[i].onclick = function()
				{
					envoyerRequete(this.id, confirm('Êtes-vous sur de vouloir supprimer ce tutorat ?'));
				};
			}

      	})();

    </script>


<?php
/* End of file news_view.php */
/* Location: ./application/views/news_view.php */
?>

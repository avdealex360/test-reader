<h1><?=$lang['mBook']?> - 
	<a href="/book/chapters/?nb=<?=$data['additional']['book']['id']?>"> 
	<?=$data['additional']['book']['name']?> (<?=$data['additional']['book']['author']?>)
	</a> 
</h1>
<h2><?=$lang['mChapter']?> - <?=$data['additional']['chapters']['name']?></h2>



<div class="book-content">
	<?=$data['page']['text']?>
</div>

<div class="pagination">
	<?

		foreach ($data['pagination'] as $key => $value) {
			$retVal = ($value['num']==$data['page']['num']) 
				? '<span class="active">'.$value['num'].'</span>' 
				: '<a href="?np='.$value['num'].'&nb='.$data['curBook'].'">'.$value['num'].'</a>' ;

			echo $retVal;
		}

	?>
	<div class="clearfix"></div>
</div>
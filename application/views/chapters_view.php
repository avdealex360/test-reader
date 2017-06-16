<h1><?=$lang['mBook']?> - 
	<a href="/book/chapters/?nb=<?=$data['book']['id']?>">
	<?=$data['book']['name']?> (<?=$data['book']['author']?>)
	</a>
</h1>
<h2><?=$lang['mChapterList']?></h2>
<table>
<tr>
	<td>#</td>
	<td><?=$lang['mTitle']?></td>
	<td><?=$lang['mAction']?></td>
</tr>
<?

		foreach($data['chapters']  as $row)
		{
			echo '<tr>
				<td>'.$row['num'].'</td>
				<td>'.$row['name'].'</td>
				<td> <a href="/book/pages/?nc='.$row['id'].'&nb='.$data['book']['id'].'"> '.$lang['mRead'].'</a> </td>
			</tr>';
		}
	
?>
</table>

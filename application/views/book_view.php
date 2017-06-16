<h1><?=$lang['mBooks']?></h1>

<table>
<tr>

	<td><?=$lang['mTitle']?></td>
	<td><?=$lang['mAuthor']?></td>
	<td><?=$lang['mLang']?></td>
	<td><?=$lang['mAction']?></td>

</tr>
<?

		foreach($data as $row)
		{
			echo '<tr>
				<td>'.$row['name'].'</td>
				<td>'.$row['author'].'</td>
				<td>'.$row['lang'].'</td>
				<td> <a href="/book/chapters/?nb='.$row['id'].'">'.$lang['mRead'].'</a> </td>
			</tr>';
		}
	
?>
</table>

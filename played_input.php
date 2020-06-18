<?php
require_once "app/played.php";
require_once "app/artist.php";
require_once "app/album.php";
require_once "app/track.php";
$kat = new played();
$artist = new artist();
$album = new album();
$track = new track();
$dat1 = $artist->tampil();
$dat2 = $album->tampil();
$dat3 = $track->tampil();

if (isset($_POST['tsimpan'])) {
	$kat = new played();
	$kat->input();
}

?>
<h2><center>INPUT DATA TRACK</h2></center>
<center>
	<table>
<form action="" method="POST">

		<tr>
			<th>ID ARTIST</th>
			<td>
				<select name="idartist">
					<?php foreach ($dat1 as $row ) { ?>
					<option value="<?php echo $row['artist_id']; ?>"><?php echo $row['artist_name']; ?></option>
					<?php } ?>
				</select>
			</td>
		</tr>
		<tr>
			<th>ID ALBUM</th>
			<td>
				<select name="idalbum">
					<?php foreach ($dat2 as $row ) { ?>
					<option value="<?php echo $row['album_id']; ?>"><?php echo $row['album_name']; ?></option>
					<?php } ?>
				</select>
			</td>
		</tr>
		<tr>
			<th>ID TRACK</th>
			<td>
				<select name="idtrack">
					<?php foreach ($dat3 as $row ) { ?>
					<option value="<?php echo $row['track_id']; ?>"><?php echo $row['track_name']; ?></option>
					<?php } ?>
				</select>
			</td>
		</tr>
		<tr>
			<th></th>
			<td><input type="submit" name="tsimpan" value="TAMBAHKAN"></td>
		</tr>
	</table>
</form>

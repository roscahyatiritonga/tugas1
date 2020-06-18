<?php
class track {
	private $db;

	public function __construct()
	{
		try {
				$this->db =
				new PDO("mysql:host=localhost;dbname=db_uasoop", "root", "");
			} catch (PDOException $e) {
				die ("Error " . $e->getMessage());
			}
		}

	public function tampil()
		{
			$sql = "SELECT * FROM tb_track";
			$stmt = $this->db->prepare($sql);
			$stmt->execute();
			$data = [];
			while ($rows = $stmt->fetch()) {
				$data[] = $rows;
			}
			return $data;
		}

	public function edit(string $id)
		{
			$sql = "SELECT * FROM tb_track WHERE track_id=:track_id";
			$stmt = $this->db->prepare($sql);
			$stmt->bindParam(":track_id", $id);
			$stmt->execute();
			$data = $stmt->fetch();
			return $data;
		}
	public function simpan(string $id)
		{
			$sql2 = "UPDATE tb_track SET track_name=:track_name, artist_id=:artist_id, album_id=:album_id, time=:time where track_id=:track_id";
			$stmt2 = $this->db->prepare($sql2);
			$stmt2 -> bindParam(":track_name", $_POST['iname']);
			$stmt2 -> bindParam(":artist_id", $_POST['iartist']);
			$stmt2 -> bindParam(":album_id", $_POST['ialbum']);
			$stmt2 -> bindParam(":time", $_POST['itime']);
			$stmt2 -> bindParam(":track_id", $id);
			$stmt2 -> execute();
			header("Location: index.php?halaman=track.php");
		}
	public function hapus(string $id)
		{
			$sql3 = "DELETE FROM tb_track WHERE track_id=:track_id";
			$stmt3 = $this->db->prepare($sql3);
			$stmt3-> bindParam(":track_id",$id);
			$stmt3-> execute();
			header("Location: index.php?halaman=track.php");
		}
	public function input()
		{
			$sql5 = "INSERT INTO tb_track VALUES (NULL, :track_name, :artist_id, :album_id, :time)";
			$stmt5 = $this->db->prepare($sql5);
			$stmt5->bindParam(":track_name", $_POST['iname']);
			$stmt5->bindParam(":artist_id", $_POST['idartist']);
			$stmt5->bindParam(":album_id", $_POST['idalbum']);
			$stmt5->bindParam(":time", $_POST['itime']);
			$stmt5->execute();
			header("Location: index.php?halaman=track.php");
		}
	}
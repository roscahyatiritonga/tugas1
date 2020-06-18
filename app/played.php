<?php
class played {
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
			$sql = "SELECT * FROM tb_played";
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
			$sql = "SELECT * FROM tb_played WHERE played_id=:played_id";
			$stmt = $this->db->prepare($sql);
			$stmt->bindParam(":played_id", $id);
			$stmt->execute();
			$data = $stmt->fetch();
			
			return $data;
		}
	public function simpan(string $id)
		{
			$sql2 = "UPDATE tb_album SET artist_id=:artist_id, album_id=:album_id, track_id=:track_id, played=CURRENT_TIMESTAMP where played_id=:played_id";
			$stmt2 = $this->db->prepare($sql2);
			$stmt2 -> bindParam(":played_id", $id);
			$stmt2 -> bindParam(":artist_id", $_POST['idartist']);
			$stmt2 -> bindParam(":album_id", $_POST['idalbum']);
			$stmt2 -> bindParam(":track_id", $_POST['idtrack']);
			$stmt2 -> execute();
			header("Location: index.php?halaman=played.php");
		}
	public function hapus(string $id)
		{
			$sql3 = "DELETE FROM tb_played WHERE played_id=:played_id";
			$stmt3 = $this->db->prepare($sql3);
			$stmt3-> bindParam(":played_id",$id);
			$stmt3-> execute();
			header("Location: index.php?halaman=played.php");
		}
	public function input()
		{
			$sql5 = "INSERT INTO tb_played VALUES (NULL, :artist_id, :album_id, :track_id, CURRENT_TIMESTAMP)";
			$stmt5 = $this->db->prepare($sql5);
			$stmt5->bindParam(":artist_id", $_POST['idartist']);
			$stmt5->bindParam(":album_id", $_POST['idalbum']);
			$stmt5->bindParam(":track_id", $_POST['idtrack']);
			$stmt5->execute();
			header("Location: index.php?halaman=played.php");
		}
	}
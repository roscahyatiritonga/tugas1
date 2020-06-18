CREATE TABLE tb_artist (
	artist_id SMALLINT(5) NOT NULL AUTO_INCREMENT,
	artist_name VARCHAR(128) NOT NULL,
	PRIMARY KEY(artist_id)
);

CREATE TABLE tb_album (
	artist_id SMALLINT(5) NOT NULL,
	album_id SMALLINT(4) NOT NULl AUTO_INCREMENT,
	album_name CHAR(128) NOT NULL,
	PRIMARY KEY(album_id),
	FOREIGN KEY (artist_id) REFERENCES tb_artist (artist_id)
);

CREATE TABLE tb_track (
	track_id SMALLINT(3) NOT NULL AUTO_INCREMENT,
	track_name CHAR(128) NOT NULL,
	artist_id SMALLINT(5) NOT NULL,
	album_id SMALLINT(4) NOT NULL,
	time DECIMAL(5.2) NOT NULL,
	PRIMARY KEY(track_id),
	FOREIGN KEY (artist_id) REFERENCES tb_artist (artist_id),
	FOREIGN KEY (album_id) REFERENCES tb_album (album_id)
);

CREATE TABLE tb_played (
	played_id SMALLINT(5) NOT NULL AUTO_INCREMENT,
	artist_id SMALLINT(5) NOT NULL,
	album_id SMALLINT(4) NOT NULL,
	track_id SMALLINT(3) NOT NULL,
	played TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY(played_id),
	FOREIGN KEY (artist_id) REFERENCES tb_artist (artist_id),
	FOREIGN KEY (album_id) REFERENCES tb_album (album_id),
	FOREIGN KEY (track_id) REFERENCES tb_track (track_id),
);

CREATE TABLE tb_user(
	user_id int(11) AUTO_INCREMENT,
	user_name varchar(100) NOT NULL,
	user_pass varchar(256) NOT NULL,
	user_level TINYINT(1) DEFAULT'0',
	PRIMARY KEY (user_id),
	UNIQUE KEY (user_name)
);
<?php
class Playlist extends Model {
    protected $table = "playlists";

    public function getAll() {
        return $this->query("SELECT * FROM playlists");
    }

    public function add($data) {
        $query = "INSERT INTO playlists (title, artist) VALUES (:title, :artist)";
        $this->query($query, $data);
    }
}
?>

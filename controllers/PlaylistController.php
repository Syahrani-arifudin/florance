<?php
class PlaylistController {
    public function index() {
        $playlist = new Playlist();
        $data['playlists'] = $playlist->getAll();
        view("playlist/index", $data);
    }

    public function create() {
        view("playlist/create");
    }

    public function store() {
        $playlist = new Playlist();
        $playlist->add([
            'title' => $_POST['title'],
            'artist' => $_POST['artist']
        ]);
        redirect("playlist");
    }
}
?>

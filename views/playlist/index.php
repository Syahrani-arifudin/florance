<h2>Playlist</h2>
<a href="/playlist/create">Tambah Lagu</a>
<ul>
<?php foreach ($playlists as $p): ?>
    <li><?= $p->title ?> - <?= $p->artist ?></li>
<?php endforeach; ?>
</ul>

<?php
require_once __DIR__ . '/../core/Model.php';

class Rundown {
    public $id, $event_id, $session_name, $time, $description;

    // Bikin rundown baru pas dipanggil
    public function __construct($id = null, $event_id = null, $session = '', $time = '', $desc = '') {
        $this->id = $id;
        $this->event_id = $event_id;
        $this->session_name = $session;
        $this->time = $time;
        $this->description = $desc;
    }

    // Ambil semua rundown milik satu event
    public static function allByEvent($event_id) {
        $db = new Database();
        $q = $db->conn->prepare("SELECT * FROM rundown WHERE event_id=? ORDER BY time ASC");
        $q->bind_param("i", $event_id);
        $q->execute();
        $r = $q->get_result();

        $data = [];
        while ($row = $r->fetch_assoc()) {
            $data[] = new Rundown($row['id'], $row['event_id'], $row['session_name'], $row['time'], $row['description']);
        }
        return $data;
    }
    public static function find($id) {
        $db = new Database();
        $q = $db->conn->prepare("SELECT * FROM rundown WHERE id=?");
        $q->bind_param("i", $id);
        $q->execute();
        $r = $q->get_result();
        if ($row = $r->fetch_assoc()) {
            return new Rundown($row['id'], $row['event_id'], $row['session_name'], $row['time'], $row['description']);
        }
        return null;
    }

    // Simpan data baru
    public static function create($data) {
        $db = new Database();
        $q = $db->conn->prepare("INSERT INTO rundown (event_id, session_name, time, description) VALUES (?, ?, ?, ?)");
        $q->bind_param("isss", $data['event_id'], $data['session_name'], $data['time'], $data['description']);
        $q->execute();
    }

    // Ubah data lama
    public static function update($id, $data) {
        $db = new Database();
        $q = $db->conn->prepare("UPDATE rundown SET session_name=?, time=?, description=? WHERE id=?");
        $q->bind_param("sssi", $data['session_name'], $data['time'], $data['description'], $id);
        $q->execute();
    }

    // Hapus rundown
    public static function delete($id) {
        $db = new Database();
        $q = $db->conn->prepare("DELETE FROM rundown WHERE id=?");
        $q->bind_param("i", $id);
        $q->execute();
    }
}

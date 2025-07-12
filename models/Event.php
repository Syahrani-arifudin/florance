<?php
require_once __DIR__ . '/../core/database.php'; // Pastikan path ini sesuai dengan struktur folder Anda

class Event extends Database {
    public $id;
    public $name;
    public $date;
    public $location;
    public $band;
    public $songs;
    public $youtube;

    public function __construct($id = null, $name = '', $date = '', $location = '', $band = '', $songs = '', $youtube = '') {
        $this->id = $id;
        $this->name = $name;
        $this->date = $date;
        $this->location = $location;
        $this->band = $band;
        $this->songs = $songs;
        $this->youtube = $youtube;
    }

    public function __toString() {
        return "{$this->name} - {$this->date} at {$this->location}";
    }

    public static function all() {
        $db = new Database();
        $result = $db->conn->query("SELECT * FROM events ORDER BY date ASC");
        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = new Event(
                $row['id'],
                $row['name'],
                $row['date'],
                $row['location'],
                $row['band'],
                $row['songs'],
                $row['youtube']
            );
        }
        return $data;
    }

    public static function find($id) {
        $db = new Database();
        $result = $db->conn->query("SELECT * FROM events WHERE id = $id LIMIT 1");
        if ($row = $result->fetch_assoc()) {
            return new Event(
                $row['id'],
                $row['name'],
                $row['date'],
                $row['location'],
                $row['band'],
                $row['songs'],
                $row['youtube']
            );
        }
        return null;
    }

    public static function create($data) {
        $db = new Database();
        $stmt = $db->conn->prepare("INSERT INTO events (name, date, location, band, songs, youtube) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss",
            $data['name'],
            $data['date'],
            $data['location'],
            $data['band'],
            $data['songs'],
            $data['youtube']
        );
        $stmt->execute();
    }

    public static function update($id, $data) {
        $db = new Database();
        $stmt = $db->conn->prepare("UPDATE events SET name = ?, date = ?, location = ?, band = ?, songs = ?, youtube = ? WHERE id = ?");
        $stmt->bind_param("ssssssi",
            $data['name'],
            $data['date'],
            $data['location'],
            $data['band'],
            $data['songs'],
            $data['youtube'],
            $id
        );
        $stmt->execute();
    }

    public static function delete($id) {
        $db = new Database();
        $stmt = $db->conn->prepare("DELETE FROM events WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
    }
}

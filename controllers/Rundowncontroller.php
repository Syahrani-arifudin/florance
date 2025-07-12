<?php
require_once __DIR__ . '/../models/Rundown.php';

class RundownController {
    public function index($event_id) {
        session_start();
        if (!isset($_SESSION["user"]) || $_SESSION["user"] !== "admin") {
            header("Location: index.php?url=AuthController/showLogin");
            exit;
        }
        $rundowns = Rundown::allByEvent($event_id);
        include __DIR__ . '/../views/rundown/index.php';
    }

    public function create($event_id) {
    session_start();
    if (!isset($_SESSION["user"]) || $_SESSION["user"] !== "admin") {
        header("Location: index.php?url=AuthController/showLogin");
        exit;
    }

    // Kirimkan $event_id ke view create
    include __DIR__ . '/../views/rundown/create.php';
}

public function store() {
    session_start();
    if (!isset($_SESSION["user"]) || $_SESSION["user"] !== "admin") {
        header("Location: index.php?url=AuthController/showLogin");
        exit;
    }

    Rundown::create($_POST);
    $event_id = $_POST['event_id'];
    header("Location: index.php?url=RundownController/index/$event_id");
}
public function edit($id) {
    session_start();
    if (!isset($_SESSION["user"]) || $_SESSION["user"] !== "admin") {
        header("Location: index.php?url=AuthController/showLogin");
        exit;
    }

    $rundown = Rundown::find($id);
    include __DIR__ . '/../views/rundown/edit.php';
}
public function update($id) {
    session_start();
    if (!isset($_SESSION["user"]) || $_SESSION["user"] !== "admin") {
        header("Location: index.php?url=AuthController/showLogin");
        exit;
    }

    Rundown::update($id, $_POST);
    $event_id = $_POST['event_id'];
    header("Location: index.php?url=RundownController/index/$event_id");
}
public function delete($id) {
    session_start();
    if (!isset($_SESSION["user"]) || $_SESSION["user"] !== "admin") {
        header("Location: index.php?url=AuthController/showLogin");
        exit;
    }

    $rundown = Rundown::find($id);
    if ($rundown) {
        $event_id = $rundown->event_id;
        Rundown::delete($id);
        header("Location: index.php?url=RundownController/index/$event_id");
    } else {
        echo "Rundown tidak ditemukan.";
    }
}
}
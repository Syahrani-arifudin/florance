<?php
require_once __DIR__ . '/../models/Event.php';

class AdminController {
    public function index() {
        $events = Event::all();
        include __DIR__ . '/../views/admin/index.php';
    }

    public function create() {
        include __DIR__ . '/../views/admin/create.php';
    }
    public function edit($id) {
        $event = Event::find($id);
        include __DIR__ . '/../views/admin/edit.php';
    }

    public function update($id) {
        Event::update($id, $_POST);
        header('Location: index.php?url=AdminController/index');
    }

    public function delete($id) {
        Event::delete($id);
        header('Location: index.php?url=AdminController/index');
    }
}

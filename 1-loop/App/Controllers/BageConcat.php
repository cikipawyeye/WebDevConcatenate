<?php

namespace App\Controllers;

class BageConcat {
    public function loop($count = []) {
        return $this->view('index', $count);
    }

    private function view($name, $data = []) {
        require_once __DIR__ . "/../View/" . $name . ".php";
    }
}
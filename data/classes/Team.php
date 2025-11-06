<?php
class Team {
    private $id;
    private $name;
    private $title;
    private $description;
    private $img;

    public function __construct($id, $name, $title, $description, $img = '') {
        $this->id = $id;
        $this->name = $name;
        $this->title = $title;
        $this->description = $description;
        $this->img = $img;
    }

    public function getId() { return $this->id; }
    public function getName() { return $this->name; }
    public function getTitle() { return $this->title; }
    public function getDescription() { return $this->description; }
    public function getImage() { return $this->img; }
}

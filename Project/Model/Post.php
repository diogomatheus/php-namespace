<?php
namespace Project\Model;

class Post {
    private $author;
    private $title;
    private $content;
    
    public function getAuthor() {
        return $this->author;
    }
    public function setAuthor(User $author) {
        $this->author = $author;
        return $this;
    }
    
    public function getTitle() {
        return $this->title;
    }
    public function setTitle($title) {
        $this->title = $title;
        return $this;
    }
    
    public function getContent() {
        return $this->content;
    }
    public function setContent($content) {
        $this->content = $content;
        return $this;
    }
}


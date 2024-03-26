<?php

class Category
{
    public $name;
}

class Post
{
    public $title;
    public $content;
    private $category;

    public function setCategory(Category $category)
    {
        $this->category = $category;
    }

    public function getCategory() : Category
    {
        return $this->category;
    }
}

$php = new Category;
$php->name = "PHP";

$post01 = new Post;
$post01->title = "PHP é legal";
$post01->title = '..php phph pphp p php';
$post01->setCategory($php);
echo $post01->getCategory()->name;

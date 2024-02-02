<?php

class Book{
    public $title;
    public $author;
    
    public function displayInfo(){
        echo "Title: $this->title, Author: $this->author";
    }
}

class Library{
    private $books=[];

    public function addBook(Book $book){
        $this->books[] = $book;
    } 
    
    public function displayAllBooks(){
        foreach($this->books as $book){
            $book->displayInfo();
            echo "<br>";
        }
    }
}

$book1 = new Book();
$book1->title = "A Thousand Splendid Suns";
$book1->author = "Khalid Hossaini";

$book2 = new Book();
$book2->title = "Metamorphosis";
$book2->author = "Fraz Kafka";

$library = new Library();
$library->addBook($book1);
$library->addBook($book2);
$library->displayAllBooks();

?>
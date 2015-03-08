<?php
/**
 * code-practices
 * index.php
 * 3/8/15
 * 1:30 AM
 */

abstract class BooksShelf
{

    abstract function getBookInfo($bookToGet);

    /**
     * @return int
     */
    abstract function getBooksCount();

    /**
     * @param int $count
     * @return bool
     */
    abstract function setBooksCount($count);

    /**
     * @param object Book $book
     * @return int
     */
    abstract function addBook($book);

    /**
     * @param object Book $book
     * @return int
     */
    abstract function removeBook($book);
}

class Book extends BooksShelf
{
    /**
     * @var string
     */
    private $_title;

    /**
     * @var string
     */
    private $_author;

    /**
     * @param string $title
     * @param string $author
     */
    public function __construct($title, $author) {
        $this->_title = $title;
        $this->_author = $author;
    }

    public function getBookInfo($bookToGet) {
        if ($bookToGet == 1) {
            return $this->_title . ' by ' . $this->_author;
        } else {
            return false;
        }
    }

    public function getBooksCount() {
        return 1;
    }

    public function setBooksCount($count) {
        return false;
    }

    public function addBook($book) {
        return false;
    }

    public function removeBook($book) {
        return false;
    }

}

class SeveralBooks extends BooksShelf
{
    /**
     * @var array
     */
    private $_books;

    /**
     * @var int
     */
    private $_booksCount;

    public function __construct() {
        $this->setBooksCount(0);
    }

    public function getBookInfo($bookToGet) {

        if ($bookToGet <= $this->_booksCount) {
            return $this->_books[$bookToGet]->getBookInfo(1);
        } else {
            return false;
        }
    }

    public function getBooksCount() {
        return $this->_booksCount;
    }

    public function setBooksCount($count) {
        $this->_booksCount = $count;
        return true;
    }

    public function addBook($book) {
        $this->setBooksCount($this->getBooksCount() + 1);
        $this->_books[$this->getBooksCount()] = $book;
        return $this->getBooksCount();
    }

    public function removeBook($book) {
        $counter = 0;
        while (++$counter <= $this->getBooksCount()) {
            if ($book->getBookInfo(1) == $this->_books[$counter]->getBookInfo(1)) {
                for ($i = $counter; $i < $this->getBooksCount(); $i++) {
                    $this->_books[$i] = $this->_books[$i + 1];
                }
                $this->setBooksCount($this->getBooksCount() - 1);
            }
        }
        return $this->getBooksCount();
    }

}
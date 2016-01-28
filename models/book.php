<?php
/**
 * Created by PhpStorm.
 * User: Tito
 * Date: 1/28/2016
 * Time: 1:49 AM
 */

namespace models;
use lib\Core;
use PDO;
use lib\Validator;

class Book
{
    private $title;
    private $publish;
    private $author;
    private $format;
    private $count;
    private $resume;
    private $isbn;
    private $image;
    private $core;
    private $validator;

    function __construct($title,$publish,$author,$format,$count,$resume,$isbn,$image){
        $this->core=\lib\core::getInstance();
        $this->validator=\lib\Validator::getInstance();

        if($this->validator->isNotEmpty($title)){
            $this->title= $this->validator->clean($title);
        }

        if($this->validator->isNotEmpty($publish)){
            $this->publish= $this->validator->clean($publish);
        }

        if($this->validator->isNotEmpty($author)){
            $this->author= $this->validator->clean($author);
        }

        if($this->validator->isNotEmpty($format)){
            $this->format= $this->validator->clean($format);
        }

        if($this->validator->isNotEmpty($resume)){
            $this->resume= $this->validator->clean($resume);
        }

        if($this->validator->isNotEmpty($count)){
            $this->count= $this->validator->clean($count);
        }

        if($this->validator->isNotEmpty($isbn)){
            $this->isbn= $this->validator->clean($isbn);
        }

        if($this->validator->isNotEmpty($image)){
            $this->image= $this->validator->clean($image);
        }
    }


    public function insert(){
        if(isset($this->title) && isset($this->image) &&
            isset($this->isbn) && isset($this->count) &&
            isset($this->resume) && isset($this->format) &&
            isset($this->author) && isset($this->publish)){

            $stmt =$this->core->dbh->prepare( "INSERT INTO books (title, publish, author, countp,format,resume,isbn,image)
					VALUES (?,?,?,?,?,?,?,?,)");
            $result =$stmt->execute(array($this->title,$this->publish,$this->author,
                $this->count,$this->format,$this->resume,$this->isbn,$this->image));
            var_dump($result);
        }

    }

}
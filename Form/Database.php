<?php
namespace Form;

class Database
{

    private $host = 'localhost';
    private $database = "secondbase";
    private $user = "root";
    private $pass = "root";
    private $link;


    public function __construct()
    {
        $this->link = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
    }


    public function insert(string $sql)
    {
        mysqli_query($this->link, "SET NAMES 'utf8'");
        mysqli_query($this->link, "SET CHARACTER SET 'utf8'");
        mysqli_query($this->link, "SET SESSION collation_connection = 'utf8_general_ci'");

       $request = mysqli_query($this->link, $sql);
        mysqli_close($this->link);

        header('Location: index.php');
    }

    public function select(string $sql)
    {

        $request = mysqli_query($this->link, $sql);
        mysqli_close($this->link);

        return $request;
    }
}

<?php 

define('DB_HOST', 'localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','books');

class Books {

	public $name =" ";
	public $genre = array();
	public $author = array();
	public $description =" ";
	public $price =" ";

    private $host = DB_HOST;
	private $name_db = DB_NAME ;
	private $user = DB_USER;
	private $password = DB_PASS;


    function __construct(){
        $this->name = $name;
        $this->genre = $genre;
        $this->author = $author;
        $this->description = $description;
        $this->price = $price;


        $this->connect_to_db();
        $this->add_book();
        $this->delete_book();
        $this->update_book();
        $this->print_books();
    }

    public function connect_to_db(){
        $connect = mysqli_connect(DB_HOST ,DB_USER ,DB_PASS ,DB_NAME);

      if (mysqli_connect_errno($connect))
      {
        die("Failed to connect:" . mysqli_connect_error());
      }

      mysqli_set_charset($connect, "utf8");


      return $connect;
    }

    public function add_book(){

    }

    public function delete_book(){
        
    }

    public function update_book(){
        
    }

    public function print_books(){
        
    }


    //Add, delete, update, connect with DB
}


?>


 <?php

 class Books
 {
    public $booktitle;
    public $author;
    public $category;
    public $releasedate;
    public $rating;
    public $comments;  

    public function __construct()
    {
    	$this->connection = new PDO('mysql:host=138.68.142.216;dbname=lucy', 'tom', 'hardy');
    }

    public function show($id)
    {
        $stmt = $this->connection->prepare('SELECT * FROM books WHERE id = ?');
        $stmt->execute([$id]);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result = $stmt->fetchAll()[0];


        $this->booktitle = $result['The Passage'];
        $this->author = $result['Justin Cronin'];
        $this->category = $result['horror']


        return $this;
    }

    public function all()
    {
        $stmt = $this->connection->query('SELECT * FROM books'); 
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $rows = $stmt->fetchAll();
        
        foreach($rows as $result){
           $booktitle = new booktitle(); 
           $booktitle->name = $result['booktitle'];
           $booktitle->id = $result['id'];
           $book_library[] = $books; 
        }

        return $book_library;       
    }
 }


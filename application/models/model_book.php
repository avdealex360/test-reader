<?

class Model_Book extends Model
{
	function __construct()
	{
		$this->database = new Database();
		$this->view = new View();
		$this->locale = $this->view->locale;
	}

	public function getBooks($id=false)
	{	

		if (!$id) 
		{
			$this->database->query('SELECT * FROM books WHERE lang LIKE :loc');
			$this->database->bind(':loc', $this->locale);
			$result = $this->database->resultset();


		} else {
			$this->database->query('SELECT * FROM books WHERE id = :bid AND lang LIKE :loc');
			$this->database->bind(':bid', $id);
			$this->database->bind(':loc', $this->locale);
			$result = $this->database->single();

		}

		// В случае пустого запроса (по локали) редиректим к списку книг

		if (false==$result) {
			header("Location: /book");
			die();
		} else {
			return $result;
		}
		

	}

	public function getChapters($book_id, $id=false)
	{	
		if (!$id) 
		{

			//Получаем главы выбранной книги
			$this->database->query('SELECT * FROM chapters WHERE book_id = :bid');
			$this->database->bind(':bid', $book_id);
			$results['chapters'] = $this->database->resultset();

		} else {

			//Получаем главы выбранной книги
			$this->database->query('SELECT * FROM chapters WHERE id = :cid');
			$this->database->bind(':cid', $id);
			$results['chapters'] = $this->database->single();

		}
		//+инфа о текущей книге
		$results['book'] = $this->getBooks($book_id);

		return $results;

	}	

	public function getPages($book_id, $chapter_id=false, $page=false)
	{	
		if (!$page && false!==$chapter_id) {

			$this->database->query('SELECT * FROM pages WHERE book_id = :bid AND chapter_id = :cid ORDER BY num ASC LIMIT 1');

			$this->database->bind(':bid', $book_id);
			$this->database->bind(':cid', $chapter_id);

			$results['page'] = $this->database->single();

		} elseif (false!==$page) {

			$this->database->query('SELECT * FROM pages WHERE book_id = :bid AND num = :pnum ORDER BY num ASC LIMIT 1');

			$this->database->bind(':bid', $book_id);
			$this->database->bind(':pnum', $page);

			$results['page'] = $this->database->single();
		}

		//+инфа о текущей главе и книге
		$results['additional'] = $this->getChapters($book_id, $results['page']['chapter_id']);

		return $results;

	}

	public function getPagination($book_id){
		//Получаем список всех страниц выбранной книги
		$this->database->query('SELECT num FROM pages WHERE book_id = :bid ORDER BY num ASC');
		$this->database->bind(':bid', $book_id);
		$results = $this->database->resultset();

		return $results;
	}

}

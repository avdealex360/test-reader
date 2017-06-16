<?

class Controller_book extends Controller
{

	function __construct()
	{
		$this->model   = new Model_Book();
		$this->view    = new View();
	}
	
	function action_index()
	{
		$data = $this->model->getBooks();		
		$this->view->generate('book_view.php', 'template_view.php', $data, $this->view->translated());
	}

	function action_chapters()
	{
		$data = $this->model->getChapters($_GET['nb']);		
		$this->view->generate('chapters_view.php', 'template_view.php', $data, $this->view->translated());
	}

	function action_pages()
	{
		$data 				= $this->model->getPages($_GET['nb'], $_GET['nc'], $_GET['np']);	
		$data['pagination'] = $this->model->getPagination($_GET['nb']);
		$data['curBook'] 	= $_GET['nb'];

		$this->view->generate('pages_view.php', 'template_view.php', $data, $this->view->translated());
	}
}
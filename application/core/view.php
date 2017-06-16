<?

class View
{
	
	public $locale;
	
	function __construct()
	{

		$this->locale  	= (isset($_COOKIE["lang"])) ? $_COOKIE["lang"] : 'rus' ;
	}
	
	/*
	$content_file - виды отображающие контент страниц;
	$template_file - общий для всех страниц шаблон;
	$data - массив, содержащий элементы контента страницы. Обычно заполняется в модели.
	*/
	function generate($content_view, $template_view, $data = null, $lang)
	{
		include 'application/views/'.$template_view;
	}

	public function translated() 
	{
		if ('eng'==$this->locale) {
			$result['mChapter']		='Chapter';
			$result['mChapterList']	='ChapterList';
			$result['mRead'] 		='Read';

			$result['mBooks']		='Books';
			$result['mBook']		='Book';

			$result['mTitle']		='Title';
			$result['mAuthor']		='Author';
			$result['mLang']		='Language';
			$result['mAction']		='Action';

			$result['mToMain'] 		='Main page';
			$result['mMain'] 		='Main';

			$result['mSwitchEng'] 	='English';
			$result['mSwitchRus'] 	='Russian';

			$result['m404'] 	='404 page not found';
		
		} else {
			$result['mChapter']		='Глава';
			$result['mChapterList']	='Оглавление';
			$result['mRead'] 		='Читать';

			$result['mBooks']		='Книги';
			$result['mBook']		='Книга';

			$result['mTitle']		='Название';
			$result['mAuthor']		='Автор';
			$result['mLang']		='Язык';
			$result['mAction']		='Действия';

			$result['mToMain'] 		='На главную';
			$result['mMain'] 		='Главная';

			$result['mSwitchEng'] 	='Английский';
			$result['mSwitchRus'] 	='Русский';

			$result['m404'] 	='404 страницане найдена';
		}

		return $result;
	}
}

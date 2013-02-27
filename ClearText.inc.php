<?php

class ClearText{

	private $page;

	/** REGEX **/
	private $regex_title = '#<title.*>(.*)</title>#';
	private $regex_content = '#<div.*class="post-content".*>(.*)</div>#';
	private $meta_chars = array('#', '!', '^', '$', '(', ')', '[', ']', '{', '}', '?', '+', '*', '.', '\\', '|');
	private $meta_chars_remplacement = array('\\#', '\\!', '\\^', '\\$', '\\(', '\\)', '\\[', '\\]', '\\{', '\\}', '\\?', '\\+', '\\*', '\\.', '\\\\', '\|');
	
	/** PAGE INFO **/
	public $page_title;
	public $page_content;
	
	function __construct($link){
		$this->page = @file_get_contents($link);
	}

	function getContent(){
		
		if(preg_match($this->regex_content, $this->page, $this->page_content)): 
			$this->page_content = $this->page_content[1];
			echo 1;
			return $this->page_content;
		else: 
			echo 2;
			return false;
		endif;
	}

	function getTitle(){
		if(preg_match($this->regex_title, $this->page, $this->page_title)): 
			$this->page_title = str_replace($meta_chars, $meta_chars_remplacement, $this->page_title[1]);
			return $this->page_title;
		else: 
			return false;
		endif;
	}
}
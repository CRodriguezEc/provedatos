<?php
class TestResult 
{
	const RESULT = "result";
	const EXCEPTION = "exception";
	
	public $name;
	public $assertions = array();
	public $error_line;
	
	public function __construct($name)
	{
		$this->set_name($name);
	}
	
	public function get_name()
	{
		return $this->name;
	}
	
	public function set_name($name)
	{
		$this->name = $name;
	}
	
	public function add_assertion($result, Exception $exception = null)
	{
		$this->assertions[] = array(self::RESULT => $result, self::EXCEPTION => $exception);
	}
	
	public function count_assertions()
	{
		return sizeof($this->assertions);
	}
	
	public function passed()
	{
		foreach($this->assertions as $index => $one_assertion)
		{
			if($test_failed = !$one_assertion[self::RESULT]) return false;
		}
		
		return true;
	}
	
	public function get_exception()
	{
		foreach($this->assertions as $index => $one_assertion)
		{
			if($test_failed = !$one_assertion[self::RESULT]) 
				return $one_assertion[self::EXCEPTION];
		}
	}
	
	public function set_error_line($line)
	{
		$this->error_line = $line;
	}
	
	public function get_error_line()
	{
		return $this->error_line;
	}
}
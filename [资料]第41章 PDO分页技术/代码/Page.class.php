<?php

class Page{
	public $offset;
	public $length;
	public $tot;
	public $prevPage;
	public $nextPage;
	public $totPage;
	public $page;


	public function __construct($tot,$length){
		$this->tot=$tot;
		$this->length=$length;

		//总页数
		$totPage=ceil($tot/$length);
		$this->totPage=$totPage;

		// 当前页数
		$page=$_GET['p'];
		if($page>=$totPage){
			$page=$totPage;
		}
		$this->page=$page;

		// 下一页
		$nextPage=$page+1;
		if($nextPage>=$totPage){
			$nextPage=$totPage;
		}
		$this->nextPage=$nextPage;

		// 上一页
		$prevPage=$page-1;
		if($prevPage<=1){
			$prevPage=1;
		}
		$this->prevPage=$prevPage;

		//offset
		$offset=($page-1)*$length;
		$this->offset=$offset;
	}
}

 ?>

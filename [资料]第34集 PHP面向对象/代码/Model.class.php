<?php 
/**
1.作者: 建林同志和小梁子女士.
2.select: 查询表中所有数据.
3.find: 查询表中一条数据.
4.find($id): 查询表中某一条数据.
5.delete($id): 删除某一条数据，而且进行了安全防护，即不允许直接删除整表数据.
6.insert($post): 插入一条从表单传过来的数据.
7.update($post): 修改一条从表单传过来的数据.
*/

//Model.class.php
class Model{

	//表名属性
	public $table;

	//构造方法以及表名赋值
	public function __construct($t){
		$this->table=$t;
		mysql_connect('localhost','root','123');
		mysql_query('set names utf8');
		mysql_select_db('yzmedu');
	}

	//select查询
	public function select(){
		$sql="select * from {$this->table}";	
		$rst=mysql_query($sql);

		while($row=mysql_fetch_assoc($rst)){
			$rows[]=$row;
		}

		return $rows;
	}

	//find查询
	public function find($id=0){
		if($id){
			$where="where id={$id}";
		}

		$sql="select * from {$this->table} {$where} limit 1";	
		$rst=mysql_query($sql);

		$row=mysql_fetch_assoc($rst);

		return $row;
	}

	//delete删除数据
	public function delete($id=0){
		if($id){
			$sql="delete from {$this->table} where id={$id}";
			if(mysql_query($sql)){
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}
		
	}

	//insert插入数据
	public function insert($arr=0){
		if($arr){
			foreach($arr as $key=>$val){
				$keys[]=$key;
				$vals[]='\''.$val.'\'';
			}

			$keystr=join(',',$keys);
			$valstr=join(',',$vals);

			$sql="insert into {$this->table}({$keystr}) values({$valstr})";

			if(mysql_query($sql)){
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}
		
	}

	//update修改数据
	public function update($arr=0){
		if($arr){
			$id=$arr['id'];
			unset($arr[id]);

			foreach($arr as $key=>$val){
				$row[]="{$key}='{$val}'";
			}

			$str=join(',',$row);

			$sql="update {$this->table} set {$str} where id={$id}";

			if(mysql_query($sql)){
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}
	}
}
 ?>


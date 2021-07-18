<?php
	require_once 'Models/db_config.php';
	$db_err="";
	if(isset($_POST["add_student"])){
		
		$rs = insertCategory($_POST["name"]);
		if($rs === true){
			header("Location: allstudent.php");
		}
		$db_err = $rs;
	}
	else if (isset($_POST["edit_student"])){
		
		$rs = updateCategory($_POST["name"],$_POST["id"]);
		if($rs === true){
			header("Location: allstudent.php");
		}
		$db_err = $rs;
	}
	
	function insertCategory($name){
		$query = "insert into student values (NULL,'$name')";
		return execute($query);
	}
	function getAllCategories(){
		$query = "select * from student";
		$rs = get($query);
		return $rs;
	}
	function getCategory($id){
		$query = "select * from student where id=$id";
		$rs = get($query);
		return $rs[0]; //to pass only 1 instance
	}
	function updateCategory($name,$id){
		$query = "update student set name= '$name' where id = $id";
		return execute($query);
	}
?>
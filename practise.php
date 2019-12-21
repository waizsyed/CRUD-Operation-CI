<?php 
session_start();
define('DB_SERVER','localhost');
define('DB_USER';'root');
define('DB_PASS','');
define('DB_NAME','jon');

class DB_con
{
	function __construct()
	{
		$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
		$this->dbh = $con;

		if(mysqli_connect_errno())
		{
			echo "Failed to connect please try again:".mysqli_connect_error();
		}
	}

	//Data insertion Function

	public function insert($fname,$lname,$emailid,$contactno,$address)
	{
		$ret = mysqli_query($this->dbh,"insert into tblusers(FisrtName,LastName,EmailId,ContactNumber,Address) values('$fname','$lname','$emailid','$contactno','$address')");
		return $ret;
	}

	//Data Read Function
	public function fetchdata()
	{
		$result = mysqli_query($this->dbh,"select * from tblusers");
		return $result;
	}

	//Data one Record read function
	public function fetchonerecord($userid)
	{
		$oneresult = mysqli_query($this->dbh,"select * from tblusers where id=$userid");
		return $oneresult;
	}

	//Data Updation Function
	public function update($fname,$lname,$emailid,$contactno,$address)
	{
		$updaterecord = mysqli_query($this->dbh,"update tblusers set FisrtName='$fname',LastName='$lname',EmailId='$emailid',ContactNumber='$contactno',Address='$address' where id='$userid' ");
		return $updaterecord;
	}

	//Data Delation Function
	public function delete($rid)
	{
		$deleterecord = mysqli_query($this->dbh,"delete from tblusers where id=$rid ");
		return $deleterecord;
	}



}







?>
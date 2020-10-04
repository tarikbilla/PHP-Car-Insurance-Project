<?php  

function userDetails(){
	return $_SESSION['username'];
}


//check user admin or not
function is_admin(){
	if ($_SESSION['rules']=='admin') {
		return true;
	}else {
		return false;
	}
}


//total users
function total_users($db){
	$counter=0;
	foreach ($db->query('SELECT * FROM members') as $row) {
		$counter++;
	  }
	return $counter;
}

//total users
function pending_users($db){
	$counter=0;
	foreach ($db->query("SELECT * FROM members WHERE active_status = 'No'") as $row) {
		$counter++;
	  }
	return $counter;
}

//total users
function users_data($db,$id,$column){
	foreach ($db->query("SELECT * FROM members WHERE memberID = $id") as $row) {
		return $row[$column];
	  }
}


//total balance
function total_balance($db){
	$bal=0;
	foreach ($db->query('SELECT * FROM members') as $row) {
		$bal+=$row['balance'];
	  }
	return $bal;
}

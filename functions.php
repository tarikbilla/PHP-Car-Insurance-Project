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

//total pending users
function pending_users($db){
	$counter=0;
	foreach ($db->query("SELECT * FROM members WHERE active_status = 'No'") as $row) {
		$counter++;
	  }
	return $counter;
}

//get user data
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

//total user recived message
function total_meg($db){
	$counter=0;
	$id = $_SESSION['memberID'];
	foreach ($db->query("SELECT * FROM message WHERE user_id=$id") as $row) {
		$counter++;
	  }
	return $counter;
}

//total user recived new message
function total_unseen_meg($db){
	$counter=0;
	$id = $_SESSION['memberID'];
	foreach ($db->query("SELECT * FROM message WHERE user_id=$id and seen_status = 'No'") as $row) {
		$counter++;
	  }
	return $counter;
}

//total user send message
function total_meg_send($db,$userid){
	$counter=0;
	foreach ($db->query("SELECT * FROM message WHERE user_id=$userid") as $row) {
		$counter++;
	  }
	return $counter;
}

//total Insurance
function total_insurance($db){
	$counter=0;
	$id = $_SESSION['memberID'];
	foreach ($db->query("SELECT * FROM insurance WHERE entry_user_id=$id") as $row) {
		$counter++;
	  }
	return $counter;
}


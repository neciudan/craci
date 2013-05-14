<?php 

//File to store all basic functions
function confirm_query($result_set){
	if(!$result_set){
	die("db failed".mysql_error());
}
}
function redirect_to( $location = NULL ) {
		if ($location != NULL) {
			header("Location: {$location}");
			exit;
		}
	}
function mysql_prep( $value ) {
		$magic_quotes_active = get_magic_quotes_gpc();
		$new_enough_php = function_exists( "mysql_real_escape_string" ); // i.e. PHP >= v4.3.0
		if( $new_enough_php ) { // PHP v4.3.0 or higher
			// undo any magic quote effects so mysql_real_escape_string can do the work
			if( $magic_quotes_active ) { $value = stripslashes( $value ); }
			$value = mysql_real_escape_string( $value );
		} else { // before PHP v4.3.0
			// if magic quotes aren't already on then add slashes manually
			if( !$magic_quotes_active ) { $value = addslashes( $value ); }
			// if magic quotes are active, then the slashes already exist
		}
		return $value;
	}
function get_all_subjects(){
		global $connection;	
		$query="SELECT * FROM subjects ORDER BY position ASC";
		$subject_set=mysql_query($query,$connection);
		confirm_query($subject_set);
		return $subject_set;
}

function get_subject_by_id($subject_id){
	global $connection;
	$query  ="SELECT * ";
	$query .="FROM videow2 ";
	$query .="WHERE id=" .$subject_id;
	
	$result_set=mysql_query($query,$connection);
	confirm_query($result_set);
	if($subject=mysql_fetch_array($result_set)){
		
	return $subject;
}
    else{
	    return NULL;
    }
}

function find_selected_page(){
	global $sel_subject;
if (isset($_GET['subj'])){
	 $sel_subject=get_subject_by_id($_GET['subj']);
	 	
 }else { 
	 $sel_subject=NULL;
	
 }
}


?>
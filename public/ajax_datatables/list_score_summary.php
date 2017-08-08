<?php

/* Database connection start */
include 'connect_database.php';
/* Database connection end */


// storing  request (ie, get/post) global array to a variable  
$requestData= $_REQUEST;


$columns = array( 
// datatable column index  => database column name
	0 =>'id', 
	1 => 'username',
	2 =>'password', 
	3 => 'created_at'
);

// getting total number records without any search
$sql = "SELECT * ";
$sql.=" FROM content_learnings ";
$query=mysqli_query($conn, $sql);
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.


$sql = "SELECT * ";
$sql.=" FROM content_learnings WHERE 1=1";
if( !empty($requestData['search']['value']) and strlen($requestData['search']['value']) > 3) {   // if there is a search parameter, $requestData['search']['value'] contains search parameter
	$sql.=" AND ( struktur LIKE '%".$requestData['search']['value']."%' )";    
	
}
$query=mysqli_query($conn, $sql);
$totalFiltered = mysqli_num_rows($query); // when there is a search parameter then we have to modify total number filtered rows as per search result. 
$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
/* $requestData['order'][0]['column'] contains colmun index, $requestData['order'][0]['dir'] contains order such as asc/desc  */	
$query=mysqli_query($conn, $sql);

$data = array();
while( $row=mysqli_fetch_array($query) ) {  // preparing an array
	$nestedData=array(); 

	$nestedData[] = "asasas";
	$nestedData[] = "asda";
	$nestedData[] = "asddas";
	$nestedData[] = "asddas";
	$nestedData[] = "asddas";
	
	$data[] = $nestedData;
}



$json_data = array(
			"data"            => $data   // total data array
			);

echo json_encode($json_data);  // send data as json format

?>

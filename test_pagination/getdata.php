<?php
include_once '../ssh/autoload.php';


$conn = new dbConnect();
$content = new showContent();
$conn->connectDatabase();

$sql = "SELECT * from ec_courier";
$content->paginationlink = $ec['site_url']."/test_pagination/getdata.php";

//Return result of sql array query
$content->array = $content->getResult($sql);

if(empty($content->getRow)) {
    $content->getRow = $conn->numRows($sql);
}

if($content->pagination_setting == "prev-next") {
    $perpageresult = $content->getPrevNext($content->getRow, $content->paginationlink,$content->pagination_setting);	
} else {
    $perpageresult = $content->getAllPageLinks($content->getRow, $content->paginationlink,$content->pagination_setting);	
} 

//output
$output = '';
foreach($content->array as $k=> $v) {
    //Template design layout
    $output .= "
        <div class='question'>
            <input type='hidden' id='rowcount' name='rowcount' value='$content->getRow' />
            ".$content->array[$k]["id"]."
        </div>
        <div class='answer'> ".$content->array[$k]["waybill_no"]." </div>
    ";
}


//Page number bulleting
if(!empty($perpageresult)) {
    $output .= "<div id='pagination'>$perpageresult</div>";
}

print_r ($output);


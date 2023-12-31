<?php

/*
|--------------------------------------------------------------------------
| Creating our pagination
|--------------------------------------------------------------------------
|
| Pagination for all web application.
|
*/

class PerPage {
    public $perpage;

    public function __construct() {
        $this->perpage = PER_PAGE;
    }
    
    public function getAllPageLinks($count,$href) {
            $output = '';
            if(!isset($_GET["page"])) $_GET["page"] = 1;
            
            if($this->perpage != 0)
                    $pages  = ceil($count/$this->perpage);
            if($pages>1) {
                    if($_GET["page"] == 1) 
                            $output = $output . '<span class="link first disabled">&#8810;</span><span class="link disabled">&#60;</span>';
                    else	
                            $output = $output . '<a class="link first" onclick="getPaginationResult(\'' . $href . (1) . '\')" >&#8810;</a><a class="link" onclick="getPaginationResult(\'' . $href . ($_GET["page"]-1) . '\')" >&#60;</a>';


                    if(($_GET["page"]-3)>0) {
                            if($_GET["page"] == 1)
                                    $output = $output . '<span id=1 class="link current">1</span>';
                            else				
                                    $output = $output . '<a class="link" onclick="getPaginationResult(\'' . $href . '1\')" >1</a>';
                    }
                    if(($_GET["page"]-3)>1) {
                                    $output = $output . '<span class="dot">...</span>';
                    }

                    for($i=($_GET["page"]-2); $i<=($_GET["page"]+2); $i++)	{
                            if($i<1) continue;
                            if($i>$pages) break;
                            if($_GET["page"] == $i)
                                    $output = $output . '<span id='.$i.' class="link current">'.$i.'</span>';
                            else				
                                    $output = $output . '<a class="link" onclick="getPaginationResult(\'' . $href . $i . '\')" >'.$i.'</a>';
                    }

                    if(($pages-($_GET["page"]+2))>1) {
                            $output = $output . '<span class="dot">...</span>';
                    }
                    if(($pages-($_GET["page"]+2))>0) {
                            if($_GET["page"] == $pages)
                                    $output = $output . '<span id=' . ($pages) .' class="link current">' . ($pages) .'</span>';
                            else				
                                    $output = $output . '<a class="link" onclick="getPaginationResult(\'' . $href .  ($pages) .'\')" >' . ($pages) .'</a>';
                    }

                    if($_GET["page"] < $pages)
                            $output = $output . '<a  class="link" onclick="getPaginationResult(\'' . $href . ($_GET["page"]+1) . '\')" >></a><a  class="link" onclick="getPaginationResult(\'' . $href . ($pages) . '\')" >&#8811;</a>';
                    else				
                            $output = $output . '<span class="link disabled">></span><span class="link disabled">&#8811;</span>';


            }
            return $output;
    }
    public function getPrevNext($count,$href) {
            $output = '';
            if(!isset($_GET["page"])) $_GET["page"] = 1;
            if($this->perpage != 0)
                    $pages  = ceil($count/$this->perpage);
            if($pages>1) {
                    if($_GET["page"] == 1) 
                            $output = $output . '<span class="link disabled first">Prev</span>';
                    else	
                            $output = $output . '<a class="link first" onclick="getPaginationResult(\'' . $href . ($_GET["page"]-1) . '\')" >Prev</a>';			

                    if($_GET["page"] < $pages)
                            $output = $output . '<a  class="link" onclick="getPaginationResult(\'' . $href . ($_GET["page"]+1) . '\')" >Next</a>';
                    else				
                            $output = $output . '<span class="link disabled">Next</span>';


            }
            return $output;
    }
}

/*
|--------------------------------------------------------------------------
| Displaying the pagination content
|--------------------------------------------------------------------------
|
| Here we'll display the pagination contents.
|
*/

class showContent extends PerPage{
    
    public $array;
    public $href;
    public $pagination_setting;
    public $paginationlink;
    public $getRow;
    private $page;

    public function __construct() {
        parent::__construct();
        $this->page = 1;
        $this->href = "?page=";
        $this->pagination_setting = filter_input(INPUT_GET, "pagination_setting",FILTER_SANITIZE_STRING);
        $this->getRow = filter_input(INPUT_GET, "rowcount",FILTER_SANITIZE_STRING);
    }
    
    public function getResult($sql){
        //Only path to change
        $conn = new dbConnect();
        $conn->conn = $conn->connectDatabase();
        
        $this->paginationlink = $this->paginationlink.$this->href;

        if(!empty($_GET["page"])) {
            $this->page = $_GET["page"];
        }
        
        $start = ($this->page-1)*$this->perpage;
        if($start < 0) $start = 0;

        $query =  $sql . " limit " . $start . "," . $this->perpage; 
        $conn->stmt = $conn->runQuery($query); 
        
        //return an array of query
        return $conn->stmt;
    }
}
<?php 
include_once '../ssh/autoload.php';

?>
<!doctype html>
<HTML>
<HEAD>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
<TITLE>AJAX Pagination with PHP</TITLE>
<link href="style.css" rel="stylesheet">
    <?php ajaxConfig();?>
</HEAD>
<BODY>
<div id="overlay"><div><img src="../assets/images/loading.gif" width="64px" height="64px"/></div></div>
<div class="page-content">
	<div style="border-bottom: #F0F0F0 1px solid;margin-bottom: 15px;">Pagination Setting:<br> 
        <select name="pagination-setting" class="pagination-setting" id="pagination-setting">
            <option value="all-links">Display All Page Link</option>
            <option value="prev-next">Display Prev Next Only</option>
	</select>
	</div>
	<div id="pagination-result">
            <input type="hidden" name="rowcount" id="rowcount" />
	</div>
</div>
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/components.js"></script>
<script>
    var url = DOMAIN+"/test_pagination/getdata"+EXT;
    
    getPaginationResult(url,false);
    changePagination($("#pagination-setting"),url,false);
    function printResult(data){
        $("#pagination-result").html(data);
    }
</script>
</BODY>
</HTML>

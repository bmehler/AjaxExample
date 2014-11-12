<?php
require_once('select_list.php');
?>
<!doctype html>
<html>
<head>
    <script src="js/jquery-1.8.0.min.js"></script>
    <script src="ajax.js"></script>
</head>
<body>
<form id="selection">
    <select class="list">
        <option value="0" selected="selected">Select a name</option>
        <?php foreach($result as $item) : ?>   
            <option value=<?php echo $item['id']; ?>><?php echo $item['name']; ?></option>             
        <? endforeach;?>          
    </select>   
</form>
<div id="result">Results listet here</div>
</body>
</html>
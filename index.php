<?php require('model/database.php') ?>
<?php require('model/todo_db.php') ?>

<?php
    $todoitem = filter_input(INPUT_POST, "todoitem", FILTER_UNSAFE_RAW);
    $desc = filter_input(INPUT_POST, "desc", FILTER_UNSAFE_RAW);
    $newitem = filter_input(INPUT_POST, "newitem", FILTER_UNSAFE_RAW);
    $newdesc = filter_input(INPUT_POST, "newdesc", FILTER_UNSAFE_RAW);
    $itemnum = filter_input(INPUT_POST, "itemnum", FILTER_UNSAFE_RAW);

    $action = filter_input(INPUT_POST, "action", FILTER_UNSAFE_RAW);
    if(!$action) {
        $action = filter_input(INPUT_GET, "action", FILTER_UNSAFE_RAW);
        if(!$action) {
            $action = "list_items";
        }
    }
    if($action == 'list_items') {
        $items = list_items();
        include('view/item_list.php');
    } elseif($action == 'add_todo_item') {
        add_todo_item($newitem, $newdesc);
        $items = list_items();
        include('view/item_list.php');
    } elseif($action == 'delete_item') {
        delete_item($itemnum);
        $items = list_items();
        include('view/item_list.php');
    }
?>


    
        
        
        
        
        
        
    
</body>
</html>
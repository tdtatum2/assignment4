<?php
    # Necessary Functions

    # Create
    function add_todo_item($newitem, $newdesc) {
        global $db;
        $query = "INSERT INTO todoitems(Title, Description) VALUES(:newitem, :newdesc)";
        $statement = $db->prepare($query);
        $statement->bindValue(':newitem', $newitem);
        $statement->bindValue(':newdesc', $newdesc);
        $statement->execute();
        $statement->closeCursor();
    }

    # Read
    function list_items() {
        global $db;
        $query = "SELECT * FROM todoitems";
        $statement = $db->prepare($query);
        $statement->execute();
        $items = $statement->fetchAll();
        $statement->closeCursor();
        return $items;
    }

    # Delete
    function delete_item($itemnum) {
        global $db;
        $query = "DELETE FROM todoitems WHERE ItemNum = :itemnum";
        $statement = $db->prepare($query);
        $statement->bindValue(':itemnum', $itemnum);
        $statement->execute();
        $statement->closeCursor();
    }

?>
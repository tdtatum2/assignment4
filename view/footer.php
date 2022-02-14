<li class="collection-item">
            <h4>Add To-Do Item</h4>
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" id="add_todo_item">
                <label for="newitem">Name: </label>
                <input type="text" id="newitem" name="newitem" required>
                <label for="newdesc">Description: </label>
                <input type="text" id="newdesc" name="newdesc" required>
                <button class="btn waves-effect waves-light" type="submit" name="action" value="add_todo_item">Add Item
                    <i class="material-icons right">add</i>
                </button>
            </form>
        </li>
    </ul>

<footer>
    <p class="copyright"> &copy; <?php echo date("Y"); ?> Fin Tatum</p>
</footer>
</body>
</html>
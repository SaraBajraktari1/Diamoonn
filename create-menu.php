<?php
require_once 'MenuController.php';

$menu = new MenuController;
if(isset($_POST['submit'])){
    $menu->insert($_POST);
}


?>
<div>
    <form method="POST">
        Image:
        <input type="file" name="image">
        <br>
        Title:
        <input type="text" name="title">
        <br>
        Content:
        <textarea name="body" cols="30" rows="10"></textarea>
        <br>
        Price:
        <input type="number" name="price">
        <br>
        <input type="submit" name="submit" value="Save">
    </form>
</div>
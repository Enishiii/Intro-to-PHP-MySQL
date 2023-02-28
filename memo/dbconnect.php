<?php
$db = new mysqli('localhost:8889', 'root', 'root', 'mydb');
$memos = $db->query('select * from memos order by id desc');
if (!$memos) {
    die($db->error);
}
?>
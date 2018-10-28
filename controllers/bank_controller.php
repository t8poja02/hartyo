<?php
include "../models/bank_model.php";
include "../views/bank_view.php";
$user=get_user();
show_user($user);
$bank=get_bank();
show_bank($bank);
?>

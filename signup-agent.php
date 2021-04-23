<?php
$sActive = 'Signup';
require_once(__DIR__.'/header.php');

?>


<form action="" method="POST">
    <div class="agent">
        <input id="txtEmail" name = "txtEmail" type="text" placeholder ="Email">
        <input id="txtName" name = "txtName" type="text" placeholder ="Name">
        <input id="txtLastName" name = "txtLastName" type="text" placeholder ="Last name">
        <input id="txtPassword" name = "txtPassword" type="text" placeholder ="Password">
        <button id="submit_button" >SIGN UP AS AN AGENT</button>
    </div>
</form>
<div id="error_message">
    
</div>

<?php
require_once(__DIR__.'/footer.php');
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="script.js"></script>
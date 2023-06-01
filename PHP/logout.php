<?php

session_start();

// session_destroy();
unset($_SESSION['id']);

?>
<script>
    location.replace('\\Project_practies\\HTML\\index.html');
</script>

<?php


?>
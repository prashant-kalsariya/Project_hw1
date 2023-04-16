<?php

define('SERVER_NAME', 'localhost');
define('USER_NAME', 'root');
define('PASSWORD', '');
define('DB_NAME', 'info');

$con = mysqli_connect(SERVER_NAME, USER_NAME, PASSWORD, DB_NAME);

if ($con) {
    //Nothing to do
} else {
?>
    <script>
        alert('There is something problem!! Please try again letter');
        location.replace('/HTML/index.html');
    </script>
<?php
}

?>
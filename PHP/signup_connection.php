<?php
// session_start();
define('SERVER_NAME', 'localhost');
define('USER_NAME', 'root');
define('PASSWORD', '');
define('DB_NAME', 'info');

$con = mysqli_connect(SERVER_NAME, USER_NAME, PASSWORD, DB_NAME);

if ($con) {
    //Do something
} else {
?>
    <script>
        alert('Connection not has been');
    </script>
<?php
}

?>
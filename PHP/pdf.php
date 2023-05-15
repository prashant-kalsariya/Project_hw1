<?php
session_start();
$id = $_SESSION['id'];
include 'C:\xampp\htdocs\Project_practies\PHP\signup_connection.php';
$select_query = "select * from cart where id = '$id'";
$query = mysqli_query($con,$select_query);
if(!$query){
    die("Error");
}
// Include the TCPDF library
require_once('C:\TCPDF-main\tcpdf.php');
// Create a new PDF document
$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8');
// Set document information
$pdf->SetCreator('Prashant Kalsariya');
$pdf->SetAuthor('Prashant Kalsariya');
$pdf->SetTitle('Your Order');
$pdf->SetSubject('Purchase Details');

// Set default font settings
$pdf->SetFont('helvetica', '', 12);
// Add a page
$pdf->AddPage();

// Set header content
$header = '
    <h1>Your Order</h1>
    <p>Date: ' . date('Y-m-d') . '</p>
    <hr>
';

$pdf->writeHTML($header, true, false, true, false, '');
$table = '';
$price = 0;
// Create a table
$i = 1;
while($arr = mysqli_fetch_assoc($query)){
    $table .="(". $i . ")" . '<br>';
    $i++;
$table .= "name";
$table .= " = > " . $arr['name'];
$table .= "<br>Price : =>" .$arr['price'] * $arr['quantity'] .'<br>';
$price += $arr['price'] * $arr['quantity'];
}

$table .= "<hr>";
$table.= "Total Price : =>". $price;
$pdf->writeHTML($table, true, false, true, false, '');

// Output the PDF as a download
$pdf->Output('purchase_invoice.pdf', 'I');

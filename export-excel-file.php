<?php
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=newfile.csv');
$result = fopen('php://output', 'a');
$name = $_POST['name'];
$email = $_POST['email'];
$header = ['Name', 'Email'];
$contact = [
    [
        'name' => $name,
        'email' => $email
    ],
    [
        'name' => 'Teste',
        'email' => 'teste@gmail.com'
    ],
    [
        'name' => 'João',
        'email' => 'joao@gmail.com'
    ]
];
// $file = fopen('file.csv', 'a');
fputcsv($result, $header, ';');
foreach($contact as $row_contact) {
    fputcsv($result, $row_contact, ';');
}
fclose($result);
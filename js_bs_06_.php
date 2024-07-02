<?php
function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}


// $data = sql -> select fetchAll
$data = [   //students 學生資料表
    [
        'id' => 1,
        'name' => 'amy',
        'chinese' => '80',
        'english' => '81',
        'math' => '82'
    ],
    [
        'id' => 2,
        'name' => 'bob',
        'chinese' => '70',
        'english' => '71',
        'math' => '72'
    ],
    [
        'id' => 3,
        'name' => 'cat',
        'chinese' => '90',
        'english' => '91',
        'math' => '92'
    ],
];


dd($data);

$tmp = $data; //留新承接陣列變數的寫法！∵ $data為陣列，但不可以寫成 $tmp[] = $data[];，也可以將$data陣列視為XX進而寫成  $tmp[] = $data;

foreach ($tmp as $key => $value) {
    switch ($variable) {
        case 'value':
            # code...
            break;
        
        default:
            # code...
            break;
    }

    $tmp[$key]['level'] = 'B';
    if (($value['price'] + 500) > 100000) {
        $tmp[$key]['level'] = 'S';
    }

}

dd($tmp);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
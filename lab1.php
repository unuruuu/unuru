<?php

$student[] = array(
    'ovog' => 'Bat',
    'ner' => 'Dulam',
    'sisi_id' => '14b1seas2256',
    'hutulbur' => 'software engineer',
    'hicheel' => array(
        array(
            'lname' => 'Web',
            'index' => 'ICSI204',
            'tsag' => 3
        ),
        array(
            'lname' => 'C Programming',
            'index' => 'ICSI201',
            'tsag' => 3
        ),
        array(
            'lname' => 'algorithm',
            'index' => 'ICSI101',
            'tsag' => 3
        )
    )
);
$student[] = array(
    'ovog' => 'Purev',
    'ner' => 'Bolor',
    'sisi_id' => '17b1seas5772',
    'hutulbur' => 'software engineer',
    'hicheel' => array(
        array(
            'lname' => 'Internet',
            'index' => 'ICSI204',
            'tsag' => 3
        ),
        array(
            'lname' => 'Java Programming',
            'index' => 'ICSI201',
            'tsag' => 3
        ),
        array(
            'lname' => 'algorithm',
            'index' => 'ICSI101',
            'tsag' => 3
        )
    )
);
$student[] = array(
    'ovog' => 'Aldar',
    'ner' => 'Buyn',
    'sisi_id' => '15b1seas5554',
    'hutulbur' => 'software engineer',
    'hicheel' => array(
        array(
            'lname' => 'Internet',
            'index' => 'ICSI204',
            'tsag' => 3
        ),
        array(
            'lname' => 'Programming',
            'index' => 'ICSI201',
            'tsag' => 3
        ),
        array(
            'lname' => 'algorithm',
            'index' => 'ICSI101',
            'tsag' => 3
        )
    )
);
//print_r($student);

$songoson_hicheel = array(
    array(
        'lname' => 'English',
        'index' => 'ICSI204',
        'tsag' => 3
    ),
    array(
        'lname' => 'Physics',
        'index' => 'ICSI201',
        'tsag' => 3
    ),
    array(
        'lname' => 'Geology',
        'index' => 'ICSI101',
        'tsag' => 3
    )
);

function search($student, $name)
{
    foreach ($student as $negoyutan) {
        if ($negoyutan['ner'] == $name) {
            $sisi_id = $negoyutan['sisi_id'];
        }
    }
    $result = 'Ner : ' . $name . ', SisiID : ' . $sisi_id;
    return $result;
}

echo search($student, 'Bolor');
echo '<br>------------------------------<br>';

function addLesson($sisi_id, $songoson_hicheel)
{
	$student=$GLOBALS['student'];
    for ($i = 0; $i < count($student); $i++) {
        if ($student[$i]['sisi_id'] == $sisi_id) {
            $student[$i]['hicheel'] = array_merge($songoson_hicheel, $student[$i]['hicheel']);
        }
    }
    return $student;
}

print_r(addLesson('14b1seas2256', $songoson_hicheel));

function cmp($a, $b)
{
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1;
}

usort($student, "cmp");

function show($student)
{
    $newTable = ' ';
    foreach ($student as $negoyutan) {
        $newTable .= '<tr><td>' . $negoyutan['ovog'] . '</td>';
        $newTable .= '<td>' . $negoyutan['ner'] . '</td>';
        $newTable .= '<td>' . $negoyutan['sisi_id'] . '</td>';
        $newTable .= '<td>' . $negoyutan['hutulbur'] . '</td>';
        $newTable .= '<td>';
        foreach ($negoyutan['hicheel'] as $eachhicheel) {
            $newTable .= '<b>hicheeliin ner:</b> ' . $eachhicheel['lname'];
            $newTable .= '<b> hicheeliin code:</b> ' . $eachhicheel['index'] . '<br>';
        }
        $newTable .= '</td></tr>';
        
    }
    return $newTable;
}
?>
<br>------------------------------<br>
<table border="1" color="green">
<tr>
<td>ovog</td>
<td>ner</td>
<td>sisiId</td>
<td>hutulbur</td>
<td>hicheel</td>
</tr>
<tr>
<?php
echo show($student);
?>
</tr>
</table>

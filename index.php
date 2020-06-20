<?php

    require 'include.php';

    for($i = 0; $i <= 10; $i++):
        
        $sentence = $faker->sentence($nbWords = 6, $variableNbWords = true);
        $arr = [
            'name' => $sentence,
            'description' => $faker->address,
            'uuid' => $faker->uuid,
            'uri' => str_normalizer($sentence, '-'),
        ];

        // insert('url_beautifier', $arr);

    endfor;

    foreach(selectAll() as $data):
        echo '<a target="_blank" href="display/' . $data['uri']  . '"> ' . $data['name'] . '</a><br>';
        echo '<a target="_blank" href="mutiple-data/' . $data['id']  . '/' . $data['uri'] . '"> ' . $data['name'] . '</a><br>';
        echo '<br>';
    endforeach;
?>
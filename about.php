<?php
    $mysongs = simplexml_load_file('developer.xml');
    echo "<ul id='songlist'>";
    foreach ($mysongs as $songinfo):
        $title=$songinfo->name;
        $artist=$songinfo->post;
        echo "<li><div class='title'>",$title,"</div><div class='artist'>by ",$artist;
    endforeach;
    echo "</ul>";
?>
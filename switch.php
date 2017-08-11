<?php
// Create set of links
$link = array();
$link[] = '<a href="whatever.html">page 1</a>';
$link[] = '<a href="whatever.html">page 2</a>';
$link[] = '<a href="whatever.html">page 3</a>';
$link[] = '<a href="whatever.html">page 4</a>';
$link[] = '<a href="whatever.html">page 5</a>';
$link[] = '<a href="whatever.html">page 6</a>';
$link[] = '<a href="whatever.html">page 7</a>';
$link[] = '<a href="whatever.html">page 8</a>';

// Create loop to display links
for($i = 0; $i < count($link); ++$i)
{
    // Create randomizer
    // Use switch statement to find font size
    $randomizer = rand(1,50);
    switch($randomizer)
    {
    case ($randomizer <= 20):
    $font_size = "11";
    break;

    case ($randomizer <= 30):
    $font_size = "16";
    break;

    case ($randomizer <= 40):
    $font_size = "18";
    break;

    case ($randomizer <= 50):
    $font_size = "20";
    break;
    }

    // Display the link
    echo '<span style="font-size: ' .$font_size. ';">' .$link[$i]. '</span>&nbsp;&nbsp;';

// Loop the next link
}
?>
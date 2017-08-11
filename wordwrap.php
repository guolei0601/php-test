<?php

$string = "this is a long sentense that will be cut at sixty characters automatically. don't worry,no words will be broken up.";

echo wordwrap($string,60,"<br/>");
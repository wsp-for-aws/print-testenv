<?php

if (isset($_ENV['FIRST'])) {
    echo 'FIRST: ' . $_ENV['FIRST'] . ';';
}
if (isset($_ENV['SECOND'])) {
    echo 'SECOND: ' . $_ENV['SECOND'];
}

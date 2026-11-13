<?php

require 'index.php';

if (addition(2, 3) === 5) {
    echo "TEST OK";
} else {
    echo "TEST FAILED";
    exit(1);
}
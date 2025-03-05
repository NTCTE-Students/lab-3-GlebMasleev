<?php
$numbers = [43, 5, 78, 111, 3214];

if (array_search(3, $numbers)) {
    print_r(array_search(3, $numbers));
    print("\n");
    print("is an index");
} else {
    print('no such num in massive');
}
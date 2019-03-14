<?php
//Operatory porównania
echo '<pre>';

var_dump(1==1);
var_dump(1!=1);
var_dump('1'==1);
var_dump('1'===1);
var_dump('1'!==1);
var_dump(2>1);
var_dump(2>=1);
var_dump(2<=1);

var_dump(2<=>3); //int(-1)
var_dump(3<=>2); //int(1)
var_dump(3<=>3); //int(0)

//! wykrzyknik zaprzecznie
var_dump(!true);
var_dump(!false);
var_dump(!2<=1);
//! wykrzyknik zaprzecznie

echo '<pre>';
<?php 


$age = 21;


if ($age >= 18 && $age <= 65) {

    echo 'Usted puede trabajar';

}

else {

    echo 'Usted no puede trabajar';

}

echo '<br>';


if ($age >= 0 && $age <= 5) {
    echo 'Es un bebé';
}

elseif ($age >= 6 && $age <= 11) {
    echo 'Es un niño/a';
}


elseif ($age >= 12 && $age <= 17) {
    echo 'Es un/a adolescente';
}

elseif ($age >= 18 && $age <= 25) {
    echo 'Es un/a joven';
}

elseif ($age >= 26 && $age <= 45) {
    echo 'Es un adulto/a';
}

elseif ($age >= 46 && $age <= 65) {
    echo 'Es un adulto/a mayor';
}

else {
    echo 'Está en la vejez';
}
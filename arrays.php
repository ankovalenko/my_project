<?php


//двумерный массив

$arr[0][0]="Овощи";
$arr[0][1]="Фрукты";
$arr[1][0]="Абрикос";
$arr[1][1]="Апельсин";
$arr[1][2]="Банан";
$arr[2][0]="Огурец";
$arr[2][1]="Помидор";
$arr[2][2]="Тыква";

echo $arr[0][1]. "\n";

for ($q=0; $q<=2; $q++) {
    echo $arr[2][$q]. "\n";
}

// ассоциативный массив
$A["Ivanov"] = array("name"=>"Иванов И.И.", "age"=>"25", "email"=>"ivanov@mail.ru");
$A["Petrov"] = array("name"=>"Петров П.П.", "age"=>"34", "email"=>"petrov@mail.ru");
$A["Sidorov"] = array("name"=>"Сидоров С.С.", "age"=>"47", "email"=>"sidorov@mail.ru");
echo $A["Ivanov"]["name"]."\n"; // Выводит Иванов И.И.
echo $A["Petrov"]["email"]."\n";

// сортировка массива
$Arr = array("d"=>"Zero", "c"=>"Weapon", "b"=>"Alpha", "a"=>"Processor");
asort($Arr);
foreach ($Arr as $k=>$v) echo "$k=>$v"."\n";
<?php


//��������� ������

$arr[0][0]="�����";
$arr[0][1]="������";
$arr[1][0]="�������";
$arr[1][1]="��������";
$arr[1][2]="�����";
$arr[2][0]="������";
$arr[2][1]="�������";
$arr[2][2]="�����";

echo $arr[0][1]. "\n";

for ($q=0; $q<=2; $q++) {
    echo $arr[2][$q]. "\n";
}

// ������������� ������
$A["Ivanov"] = array("name"=>"������ �.�.", "age"=>"25", "email"=>"ivanov@mail.ru");
$A["Petrov"] = array("name"=>"������ �.�.", "age"=>"34", "email"=>"petrov@mail.ru");
$A["Sidorov"] = array("name"=>"������� �.�.", "age"=>"47", "email"=>"sidorov@mail.ru");
echo $A["Ivanov"]["name"]."\n"; // ������� ������ �.�.
echo $A["Petrov"]["email"]."\n";

// ���������� �������
$Arr = array("d"=>"Zero", "c"=>"Weapon", "b"=>"Alpha", "a"=>"Processor");
asort($Arr);
foreach ($Arr as $k=>$v) echo "$k=>$v"."\n";
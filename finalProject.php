<?php
$students = array("Ali", "Norah", "Ahmad", "Khalid", "Sarah", "Reem", "Deema", "Mohammed", "Abdullah");

$isRuning = true;
do{
    $choose = readline("\nEnter your choice:\n
    1. print Array\n
    2. Delete\n
    3. Update\n
    4. Add\n
    5. count\n
    6. quit\n");
    switch($choose){
        case "1":
            foreach($students as $v){
                echo $v . " ";
            }
            break;
        case "2":
            $del = readline("Enter The Index: ");
            unset($students[$del]);
            print_r($students);
            break;
        case "3":
            $upd = readline("Enter The Index: ");
            $newVal = readline("Enter The New Value: ");
            $students[$upd] = $newVal;
            print_r($students);
            break;
        case "4":
            $val = readline("Enter The new value you want to add: ");
            $students[] = $val;
            print_r($students);
            break;
        case "5":
            echo count($students);
            break;
        case "6":
            $isRuning = false;
            break;
        default:
        echo "Invalid Number";
        break;
    }
}while($isRuning)
?> 
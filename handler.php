<?php
	//задание 780 Ваша цель: вывести текст на экран. Используйте метод GET
	$text = $_GET['text'];
	if (isset($text)) {
		echo $text;
	};
    


    //задание 781 Если введен некорректный формат email, вывести сообщение: Введите корректный email
    $mail = $_POST['example-email-2'];

    if (isset($mail)) {
    	if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
    	       echo "Адрес указан корректно.";
    	    }else{
    	       echo "Введите корректный email";
    	    }
    };



    //задание 782 Теперь по-умолчанию используйте метот POST Отправьте данные в обработчик, который проверит два поля. Если они не равны выведет сообщение: Пароли не совпадают
    //
    $password = $_POST['pass'];
    $reviewPassword = $_POST['reviewPass'];

    if (isset($password) and isset($reviewPassword)) {
    	if ($password == $reviewPassword) {
    		echo "Пароли совподают";
    	} else {
    		echo "Пароли НЕ совподают";
    	}
    };

    //задание 783
    $str = $_POST['textarea'];

    if (isset($str)) {
    	if (strlen($str) < 10) {
    		echo "Количество символов должно быть больше 10";
    	}elseif (strlen($str) > 20) {
    		echo "Количество символов должно быть меньше 20.";
    	}
    };

    //адание №784
    $select = $_POST['select'];

    if (isset($select)) {
       echo $select;
    };

    //Задание 785
    $multiSelect = $_POST['multiSelect'];

    if (isset($multiSelect)) {
        foreach ($multiSelect as $value) {
            echo $value . '<br>';
        }
        
    };

    //задание 786 находится в другом файле под названем create.php


    //задание 787 
    $check = $_POST['check'];

    
        if ( $check == '')
        {
        echo 'Чекбокс НЕ отмечен';
        }
          else {
                echo 'Чекбокс отмечен';
               }
        ?>




   

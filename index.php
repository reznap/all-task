<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>
            Test
        </title>
        <meta name="description" content="Chartist.html">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
        <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
        <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
        <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
        <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
    </head>
    <body class="mod-bg-1 mod-nav-link ">
        <main id="js-page-content" role="main" class="page-content">
            
            <div class="col-md-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">

                        <h2>
                            Задание
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                <p>Создать массив, добавить текст в него, и вывести их используя циклы <code>foreach</code>. вариант 1. Здесь в масиве в качестве элементов элементы html кода</p>
                            </div>
                            <div class="fs-lg fw-300 p-5 bg-white border-faded rounded mb-g">
                            <?php //с помощью цикла foreach, где элементы массива это html теги и их содержимое (заголовки и абзацы)

                                $arrR = ['<h2>Privacy</h2>', '<p class="mb-g">
                                Your privacy is important to us at SmartAdmin and the protection, confidentiality and integrity of your personal data are our prime concerns.
                                We will only use your personal information to administer your account, provide the products and services you have requested from us, and to keep you informed about our products and services (if you have consented to this).
                                We only use your data for the purposes for which it was collected and, where relevant, to meet local legal obligations.
                                We will retain your personal information only for as long as is necessary for the purposes for which the information was collected, or as long as is required pursuant to law.
                            </p>', '<h3>Cookies and other similar technologies</h3>', '<p>
                                We collect certain data through cookies and similar technologies (e.g. web beacons, tags, device identifiers). Cookies are text files placed on your computer to collect standard internet log information and visitor behaviour information. This information is used to track visitor use of the website and to compile statistical reports on website activity. We register your interaction with our services in order to improve our website, content and services. Our use of such technologies and the data collected is described in more detail in our Cookie Policy. You can manage your cookie preferences through your browser settings.
                            </p>'];

                            foreach ($arrR as $value) {
                               echo $value;
                            }

                            ?>
                            
                            
                            
                            
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                <p>Создать массив, добавить текст в него, и вывести их используя циклы <code>foreach</code>. вариант 2. Здесь я использовал двух мерный массив, где элементы это только заголовки и текст без html кода</p>
                            </div>
                          
                            <div class="fs-lg fw-300 p-5 bg-white border-faded rounded mb-g">
                            <?php
                                $arr = [
                                        ['Privacy', 'Your privacy is important to us at SmartAdmin and the protection, confidentiality and integrity of your personal data are our prime concerns.
                                    We will only use your personal information to administer your account, ovide the products and services you have requested from us, and to keep you informed about our products and services (if you hav        ollected and, where relevant, to meet local legal obligations.
                                    We will retain your personal information only for as long as is necessary for the purposes for which the information was collected, or as long as is required pursuant to law.', 'Cookies and other similar technologies', 'We collect certain data through cookies and similar technologies (e.g. web beacons, tags, device identifiers). Cookies are text files placed on your computer to collect standard internet log information and visitor behaviour information. This information is used to track visitor use of the website and to compile statistical reports on website activity. We register your interaction with our services in order to improve our website, content and services. Our use of such technologies and the data collected is described in more detail in our Cookie Policy. You can manage your cookie preferences through your browser settings.'
                                        ]
                                ]; 

                                foreach ($arr as $value) {
                                    echo '<h2>' . $value[0] . '</h2>';
                                    echo '<p class="mb-g">' . $value[1] . '</p>';
                                    echo '<h3>' . $value[2] . '</h3>';
                                    echo '<p>' . $value[3] . '</p>';
                                    }
                                ?>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                <p>Создать массив, добавить текст в него, и вывести их используя циклы <code>foreach</code>. вариант 3, здесь я применил дополнительный массив (не совсем соответсвукт заданию)</p>
                            </div>
                          
                            <div class="fs-lg fw-300 p-5 bg-white border-faded rounded mb-g">
                            <h2>Privacy</h2>
                            <?php // с помощью цикла foreach, где элементы массива это только текст без заголовков и html кода. Для этого потребовался еще один дополнительный массив $newArr = [];
                                $arrText = ['Your privacy is important to us at SmartAdmin and the protection, confidentiality and integrity of your personal data are our prime concerns.
                            We will only use your personal information to administer your account, provide the products and services you have requested from us, and to keep you informed about our products and services (if you have consented to this).
                            We only use your data for the purposes for which it was collected and, where relevant, to meet local legal obligations.
                            We will retain your personal information only for as long as is necessary for the purposes for which the information was collected, or as long as is required pursuant to law.', 'We collect certain data through cookies and similar technologies (e.g. web beacons, tags, device identifiers). Cookies are text files placed on your computer to collect standard internet log information and visitor behaviour information. This information is used to track visitor use of the website and to compile statistical reports on website activity. We register your interaction with our services in order to improve our website, content and services. Our use of such technologies and the data collected is described in more detail in our Cookie Policy. You can manage your cookie preferences through your browser settings.'];
                                $newArr = [];
                                $k = 0;

                                foreach ($arrText as $elem) {
                                     $newArr[$k] = $elem;
                                     $k++;
                                     
                                        }
                                    ?>
                            <p class="mb-g">
                                
                                <?php echo $newArr[0];?> 
                                    
                                
                            </p>
                            <h3>Cookies and other similar technologies</h3>
                            <p>
                                <?php echo $newArr[1];?>
                                
                            </p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                <p>Создать массив, добавить текст в него, и вывести их используя циклы <code>for</code>. данные берутся с массива первого варианта в задаче foreach</p>
                            </div>
                          
                            <div class="fs-lg fw-300 p-5 bg-white border-faded rounded mb-g">
                            <?php
                                /*
                                    В начале цикла $i будет равно нулю,
                                    цикл будет выполнятся пока $i < 10,
                                    после каждого прохода к $i прибавляется единица:
                                */
                                for ($i = 0; $i <= 3; $i++) {
                                    echo $arrR[$i];
                                }
                            ?>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                <p>Создать массив, добавить текст в него, и вывести их используя циклы <code>for</code>. вариант второй</p> 
                            </div>
                          
                            <div class="fs-lg fw-300 p-5 bg-white border-faded rounded mb-g">
                            <?php
                                $arrRor = [
                                    ['Privacy', 'Your privacy is important to us at SmartAdmin and the protection, confidentiality and integrity of your personal data are our prime concerns.
                                    We will only use your personal information to administer your account, ovide the products and services you have requested from us, and to keep you informed about our products and services (if you have consented to this).
                                    We only use your data for the purposes for which it was collected and, where relevant, to meet local legal obligations.
                                    We will retain your personal information only for as long as is necessary for the purposes for which the information was collected, or as long as is required pursuant to law.',
                                    'Cookies and other similar technologies', 'We collect certain data through cookies and similar technologies (e.g. web beacons, tags, device identifiers). Cookies are text files placed on your computer to collect standard internet log information and visitor behaviour information. This information is used to track visitor use of the website and to compile statistical reports on website activity. We register your interaction with our services in order to improve our website, content and services. Our use of such technologies and the data collected is described in more detail in our Cookie Policy. You can manage your cookie preferences through your browser settings.']

                                ];
                                
                                    for ($row=0; $row <= 1; $row++) { 
                                       echo '<h2>'.$arrRor[$row][0].'</h2>';
                                       echo '<p class="mb-g">' . $arrRor[$row][1] . '</p>';
                                       echo '<h3>' . $arrRor[$row][2] . '</h3>';
                                       echo '<p>' . $arrRor[$row][3] . '</p>';
                                    }
                                
                            ?>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                <p>Создать массив, добавить текст в него, и вывести их используя циклы <code>while</code>данные берутся с самого первого массива</p>
                            </div>
                          
                            <div class="fs-lg fw-300 p-5 bg-white border-faded rounded mb-g">
                            <?php
                                $i = 0; 
                                while ($i <= 5) { 
                                    echo $arrR[$i];

                                    $i++;
                                } 
                            ?>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                <p>Создать массив, добавить текст в него, и вывести их используя циклы <code>while</code>Вариант 2</p>
                            </div>
                          
                            <div class="fs-lg fw-300 p-5 bg-white border-faded rounded mb-g">


                                <?php
                                    $arrWiile = ['Privacy', 'Your privacy is important to us at SmartAdmin and the protection, confidentiality and integrity of your personal data are our prime concerns.
                                    We will only use your personal information to administer your account, ovide the products and services you have requested from us, and to keep you informed about our products and services (if you have consented to this).
                                    We only use your data for the purposes for which it was collected and, where relevant, to meet local legal obligations.
                                    We will retain your personal information only for as long as is necessary for the purposes for which the information was collected, or as long as is required pursuant to law.',
                                    'Cookies and other similar technologies', 'We collect certain data through cookies and similar technologies (e.g. web beacons, tags, device identifiers). Cookies are text files placed on your computer to collect standard internet log information and visitor behaviour information. This information is used to track visitor use of the website and to compile statistical reports on website activity. We register your interaction with our services in order to improve our website, content and services. Our use of such technologies and the data collected is described in more detail in our Cookie Policy. You can manage your cookie preferences through your browser settings.'];

                                    $t = 0;
                                    while ($t <= 3) {
                                        if($t == 0){
                                            $firstHeading = $t;
                                        }
                                        if($t == 1){
                                            $firstText = $t;
                                        }
                                        if($t == 2){
                                            $secondHeading = $t;
                                        }
                                        if($t == 3){
                                            $secondText = $t;
                                        }
                                        $t++;
                                    }
                                ?>
                            <h2><?php echo $arrWiile[$firstHeading]; ?></h2>
                            <p class="mb-g">
                                <?php echo $arrWiile[$firstText]; ?>
                                
                            </p>
                            <h3><?php echo $arrWiile[$secondHeading]; ?></h3>
                            <p>
                                <?php echo $arrWiile[$secondText]; ?>
                            </p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                <p>Вывести список хлебных крошек при помощи цикла <code>foreach</code>
                                    <br> Структура элемента: ссылка + название <br>
                                    <i>Последний элемент должен иметь класс <code>active</code> и не иметь ссылки. </i>
                                </p>
                            </div>
                            <ol class="breadcrumb page-breadcrumb">
                                <?php
                                    
                                    $arrCrumb = [
                                                    'javascript:void(0)' => 'Главная', 
                                                    'javascript:void(1)' => 'PHP',
                                                    'Функции'
                                                ];                
                                    foreach ($arrCrumb as $key => $value) {
                                        
                                        if ($key == true) {
                                            echo '<li class="breadcrumb-item"><a href="' .$key.'">' .$value. '</a></li>';
                                        }else{
                                            echo '<li class="breadcrumb-item active">' .$value. '</li>';
                                        }
                                    };
                                ?>


                                
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-content">
                                <div class="panel-tag">
                                    <p>Выведите данные при помощи цикла <code>foreach</code></p>
                                </div>
                                <div class="bg-warning-100 border border-warning rounded">
                                    <div class="input-group p-2 mb-0">
                                        <input type="text" class="form-control form-control-lg shadow-inset-2 bg-warning-50 border-warning" id="js-list-msg-filter" placeholder="Filter list">
                                        <div class="input-group-append">
                                            <div class="input-group-text bg-warning-500 border-warning">
                                                <i class="fal fa-search fs-xl"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <ul id="js-list-msg" class="list-group px-2 pb-2 js-list-filter">
                                        <?php
                                            $array = ['Reports', 'Analytics', 'Export', 'Storage'];
                                            foreach ($array as $elem) {
                                                echo '<li class="list-group-item"><span data-filter-tags="reports file">' .$elem. '</span></li>';
                                            }

                                        ?>
                                        
                                    </ul>
                                    <div class="filter-message js-filter-message mt-0 fs-sm"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                <p>
                                    Сформируйте массив из элементов. Создайте структуру каждого элемента. <br>
                                    Выведите данные при помощи цикла <code>foreach</code>

                                </p>
                            </div>
                            <?php 
                                $items = [
                                  'My Tasks' => [ // уникальный ключ для каждого элемента
                                    'text' => '130 / 500', // текст, который показывается для элемента в span
                                    'color' => 'bg-fusion-400', // цвет                                    
                                    'progress_value' => 65, // значение progress bar
                                  ],
                                  'Transfered' => [
                                    'text' => '440 TB',
                                    'color' => 'bg-success-500',                                    
                                    'progress_value' => 34,
                                  ],
                                  'Bugs Squashed' => [
                                    'text' => '77%',
                                    'color' => 'bg-info-400',                                    
                                    'progress_value' => 77,
                                  ],
                                        // остальные элементы
                                
                                'User Testing' => [
                                    'text' => '7 days',
                                    'color' => 'bg-primary-300',                                    
                                    'progress_value' => 84,
                                  ],
                                ];


                                
                                 foreach ($items as $key => $item) { ?>
                                        <div class="d-flex">
                                            <?= $key ?>
                                            <span class="d-inline-block ml-auto"><?= $item['text'] ?></span>
                                        </div>
                                        <div class="progress progress-sm mb-3">
                                            <div class="progress-bar <?= $item['color'] ?>" role="progressbar" style="width: <?= $item['progress_value'] ?>%;" aria-valuenow="<?= $item['progress_value'] ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                <?php }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                <p>
                                   №777 Сформируйте массив элементов и выведите данные при помощи цикла <code>foreach</code></p>
                            </div>
                           <div class="d-flex flex-wrap demo demo-h-spacing mt-3 mb-3">
                            <?php
                                $team = ['/sunny.png'    => ['Sunny A. (UI/UX Expert)' => 'Lead Author', '@myplaneticket', '/myorange'], 
                                         '/josh.png'     => ['Jos K. (ASP.NET Developer)' => 'Partner &amp; Contributor', '@atlantez', '/Walapa'],
                                         '/jovanni.png'  => ['Jovanni L. (PHP Developer)' => 'Partner &amp; Contributor', '@lodev09', '/lodev09'],
                                         '/roberto.png'   => ['Roberto R. (Rails Developer)' => 'Partner &amp; Contributor', '@sildur', '/sildur'],
                                         
                                        ]; 


                                foreach($team as $elem => $submass) { ?>
                                    
                                         <div class="rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                                             <img src="img/demo/authors<?php echo $elem; ?>" alt="Sunny A." class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">
                                                 <div class="ml-2 mr-3">
                                                    <?php foreach ($submass as $namE => $role) { ?>
                                                     <h5 class="m-0">
                                                         <?php if (is_string($namE)) {
                                                             echo $namE;
                                                         };?>
                                                         <small class="m-0 fw-300">
                                                            <?php
                                                            $dog = '@';
                                                            $slash = '/';
                                                            if (strpos($role, $dog) !== false || strpos($role, $slash) !== false) {
                                                                echo '';
                                                            }else{ 
                                                                echo $role;
                                                            } ?>
                                                         </small>
                                                     </h5> <?php } ?>
                                                     <a href="https://twitter.com/<?php echo $role; ?>" class="text-info fs-sm" target="_blank"><?php echo substr($role, 1) ; ?></a> -
                                                     <a href="https://wrapbootstrap.com/userl" class="text-info fs-sm" target="_blank" title="Contact Sunny"><i class="fal fa-envelope"></i></a>
                                                 </div>
                                             </div> <?php
                                    
                                }

                                
                                ?>
                            
                            
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                <p>
                                    № 771 Добавьте ключ <code>status</code>. Если у пользователя <code>status => true;</code> тогда вывести его, иначе пропускаем. <br>
                                    В итоге, нужно показать двоих из четырех пользователей.
                                </p>
                            </div>
                           <div class="d-flex flex-wrap demo demo-h-spacing mt-3 mb-3">
                            <?php
                                $team = [
                                            '/sunny.png'    => ['status' => true,
                                                                //'img'    => '/sunny.png',
                                                                'name'   => 'Sunny A. (UI/UX Expert)',
                                                                'role'   => 'Lead Author', 
                                                                'mail'   => '@myplaneticket',
                                                                'link'   => '/myorange'],

                                            '/josh.png'     => ['status' => false,
                                                                //'img'    => '/josh.png',
                                                                'name' => 'Jos K. (ASP.NET Developer)',
                                                                'role' => 'Partner &amp; Contributor',
                                                                'mail' => '@atlantez',
                                                                'link' => '/Walapa'],

                                            '/jovanni.png'  => ['status' => true,
                                                                //'img'    => '/jovanni.png',
                                                                'name' => 'Jovanni L. (PHP Developer)',
                                                                'role' => 'Partner &amp; Contributor',
                                                                'mail' => '@lodev09',
                                                                'link' => '/lodev09'],

                                            '/roberto.png'  => ['status' => false,
                                                                //'img'    => '/roberto.png',
                                                                'name' => 'Roberto R. (Rails Developer)',
                                                                'role' => 'Partner &amp; Contributor',
                                                                'mail' => '@sildur',
                                                                'link' => '/sildur'],
                                         
                                        ];
                                        


                                foreach($team as $elem => $submass) {
                                    if ($submass['status'] == true) { ?>
                                         <div class="rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                                        <img src="img/demo/authors/<?php echo $elem; ?>" alt="Sunny A." class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">
                                        <div class="ml-2 mr-3">
                                            <h5 class="m-0">
                                        <?php echo $submass['name']; ?>
                                                <small class="m-0 fw-300">
                                                    <?php echo $submass['role']; ?>
                                                </small>
                                            </h5>
                                        <a href="https://twitter.com/<?php echo $submass['mail']; ?>" class="text-info fs-sm" target="_blank"><?php echo $submass['mail']; ?></a> -
                                        <a href="https://wrapbootstrap.com/user <?php echo $submass['link']; ?>" class="text-info fs-sm" target="_blank" title="Contact Sunny"><i class="fal fa-envelope"></i></a>
                                        </div>
                                    </div> 
                                <?php
                                     } 
                                    
                                    
                                }

                                
                            ?>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                <p>Сформируйте массив данных и выведите полностью альбом.</p>
                            </div>
                            <div id="js-lightgallery">
                                <?php

                                    $arrGall = [ 1 => 'The free in pointed they their for the so fame.', 'Sinking self-interest along four magazine he each specially rewritten', 'More and of are the of wonder, make written it checks, intrigued its the in.', 'And review, them. Turns second was enough those however the I wanting, written, above release unmoved would by slowly have peacefully', 'Was up the fresh candidates, concepts example', 'Few one what is him for team- little deceleration the the surely is well ran lifted', 'Concepts diet, personalities those life quietly every dressing epic in of men, presented. External their and music', 'Hunt, problems the on where your into so of which have he set he on instead, have shared of behind people', 'Him bread deep was meals we\'ve amped rather it of some contact familiar this learn', 'And greatest lie as any as is and brown and tone as check to I o\'clock time', 'Ut horses support succeeding, one clear cheerful, on would', 'harmonics, several from there character headline', 'what effort initial each real the refinements. I have in here\'s will.', 'Neuter. Contribution his from to more because being the in design rather, concept both of.', 'With to contact that had posterity in at and in to the entirely as so', 'Convince let are officers, that sign up from this as the turner', 'Contracts. Who up texts rung best not the rendering feel thought', 'The diet, right far sign apart supplies was first look have I somehow eye times always are how even', 'Little is always the to weary she and various', 'wamples towards how eating elite. Him bread deep was meals we\'ve amped rather it of some contact familiar', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''];
                                    
                                    foreach ($arrGall as $l => $desk) { ?>
                                        <a class="" href="img/demo/gallery/<?php echo $l; ?>.jpg" data-sub-html="<?php echo $desk; ?>">
                                            <img class="img-responsive" src="img/demo/gallery/thumb/<?php echo $l; ?>.jpg" alt="image">
                                        </a>
                                    <?php }


                                ?>
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
            
            <div class="col-md-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-content">
                                <div class="panel-tag">
                                    <p>Выведите пункты меню при помощи цикла <code>foreach</code></p>
                                </div>
                                <div class="panel-content">
                                    <div class="col-md-4">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary dropdown-toggle bg-trans-gradient waves-effect waves-themed" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Custom
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-animated" style="">
                                                <?php 
                                                    $arrPoints = ['Action', 'Another action', 'Something else here'];

                                                    foreach ($arrPoints as $point) {
                                                        echo '<a class="dropdown-item">' .$point. '</a>';
                                                    }
                                                ?> 
                                                
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-content">
                                <div class="panel-tag">
                                    <p>Сформируйте массив для всех меню включая заголовки и выведите циклом</p>
                                </div>
                                <div class="panel-content">
                                    <div class="row">
                                        <?php 
                                            $arrMenu = [
                                                        'Technologies' => ['HTML & CSS', 'PHP', 'MySQL'],
                                                        'Tools'        => ['git', 'PHPStorm', 'Docker']
                                                        ];

                                            foreach ($arrMenu as $point => $value) { ?>
                                                <div class="col-md-4">
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-primary dropdown-toggle bg-trans-gradient waves-effect waves-themed" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <?php echo $point; ?>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-animated" style="">
                                                            <?php
                                                                foreach ($value as $elem) {
                                                                   echo '<a class="dropdown-item">' .$elem. '</a>';
                                                                };
                                                            ?> 
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php }
                                        ?>
                                        

                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-content">
                                <div class="panel-tag">
                                    <p>Используя функции для дат <code>mktime(), date()</code> выведите текущие даты в заданном формате.</p>
                                </div>
                                <div class="panel-content">
                                    <div class="col-md-4">
                                        <?php
                                            date_default_timezone_set('Asia/Almaty');
                                            $md = mktime(date('H'), date('i'), date('s'), date('m'), date('d'), date('Y'));
                                            $v1 = date('Y-m-d', $md);
                                            $v2 = date('d/m/Y', $md);
                                            $v3 = date('d/m/Y H:i:s', $md);
                                        ?>
                                        <p>2030-02-12 <mark>Год-Месяц-День</mark><?php echo $v1; ?> </p>
                                        <p>19/02/2030 <mark>День/Месяц/Год</mark><?php echo $v2; ?></p>
                                        <p>19/02/2030 19:30:12 <mark>День/Месяц/Год Час:Минута:Секунда</mark><?php echo $v3; ?></p>
                                        <p>Monday <mark>День недели</mark><?php echo date('l');?></p>
                                        <p>August <mark>Месяц</mark></p><?php echo date('F');?></p>
                                        <p>Sunday, June 10, 2030 <mark>День недели, Месяц Число, Год</mark><?php echo date('l, F, d, Y');?></p></p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание № 772 
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                                <div class="panel-content">
                                <div class="panel-tag">
                                <p>Сформируйте массив с элементами и выведите при помощи цикла</p>
                            </div>
                                <div class="dropdown-menu d-block position-relative float-none" style="width: 14rem; z-index: 2">
                                    <?php
                                        $arrLinks = [
                                                        'Action' => [17, 'badge-success'],
                                                        'Another action' => [29, 'badge-pill badge-primary'],
                                                        'Disabled link',
                                                        'Dropdown header',
                                                        'Another action'

                                    ];

                                        foreach ($arrLinks as $key => $value) {
                                            if (is_string($key)) { ?>
                                                <a class="dropdown-item" href="javascript:void(0)"><span class="badge <?php echo $value[1]; ?> float-right ml-3"><?php echo $value[0]; ?></span><?php echo $key; ?></a>
                                            <?php } elseif ($key == 0) { ?>
                                                <a class="dropdown-item disabled" href="javascript:void(0)"><?php echo $value; ?></a>
                                                
                                             
                                        <?php } 
                                            
                                        }

                                    ?>
                                        <div class="dropdown-divider"></div>

                                        <?php foreach ($arrLinks as $key => $value) {
                                            if ($key == 1) { ?>
                                                <h6 class="dropdown-header"><?php echo $value; ?></h6>
                                            <?php } elseif ($key > 1) { ?>
                                                <a class="dropdown-item" href="javascript:void(0)"><?php echo $value; ?></a>
                                            <?php }
                                        } ?>

                                   
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание #773
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                                <div class="panel-content">
                                <div class="panel-tag">
                                <p>Сформируйте массив с элементами и выведите при помощи цикла</p>
                            </div>
                                <div class="dropdown-menu d-block position-relative float-none" style="width: 14rem; z-index: 2">
                                    <?php
                                        $arrL = [
                                                        'Action' => [17, 'badge-success'],
                                                        'Another action' => [29, 'badge-pill badge-primary'],
                                                        'Disabled link',
                                                        'Dropdown header',
                                                        'Multilevel',
                                                        ['Menu Item', 'Another Item', 'disabled' => 'Disabled', 'blaBla' => 'Second Level', 'dvdv' => ['Menu Item', 'Another Item', 'Third Level']],
                                                        'Another action',
                                                ];
                                                
                                        foreach ($arrL as $key => $value) {
                                            if (is_string($key)) { ?>
                                                <a class="dropdown-item" href="javascript:void(0)"><span class="badge <?php echo $value[1]; ?> float-right ml-3"><?php echo $value[0]; ?></span><?php echo $key; ?></a>
                                            <?php } elseif ($key == 0) { ?>
                                                <a class="dropdown-item disabled" href="javascript:void(0)"><?php echo $value; ?></a>
                                            <?php } 
                                        }; ?>
                                    <div class="dropdown-divider"></div>
                                    <?php foreach ($arrL as $key => $value) {
                                        if ($key == 1) { ?>
                                            <h6 class="dropdown-header"><?php echo $value; ?></h6>
                                        
                                            <div class="dropdown-multilevel">
                                            <?php } elseif ($key == 2) { ?>
                                        <div class="dropdown-item">
                                            <?php echo $value; ?>
                                        </div>
                                        <div class="dropdown-menu">
                                            <?php } elseif ($key == 3) { 
                                                foreach ($value as $key2 => $value2) {
                                                     if (is_int($key2)) { ?>
                                                        <a href="javascript:void(0);" class="dropdown-item"><?php echo $value2; ?></a>
                                                    <?php } elseif($key2 == 'disabled') { ?>
                                                        <a href="javascript:void(0);" class="dropdown-item <?php echo $key2; ?>"><?php echo $value2; ?></a>
                                                    <?php } elseif ($key2 == 'blaBla') { ?>
                                            <div class="dropdown-multilevel">                                                
                                                <div class="dropdown-item">
                                                   <?php echo $value2; ?>
                                                </div>
                                                <?php } elseif ($key2 == 'dvdv'){ ?>
                                                    <div class="dropdown-menu">
                                                        <?php foreach ($value2 as $value3) { ?>
                                                            <a href="javascript:void(0);" class="dropdown-item"><?php echo $value3; ?></a>
                                                        <?php } ?>
                                                    </div>
                                                <?php }}; ?>
                                            </div>                                        
                                        </div>
                                    </div>
                                        <?php } elseif ($key == 4) { ?>
                                        <a class="dropdown-item" href="javascript:void(0)"><?php echo $value; ?></a>
                                     <?php } }
                                ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                        <div class="col-md-6">
                            <div id="panel-1" class="panel">
                                <div class="panel-hdr">
                                    <h2>
                                        Задание №774
                                    </h2>
                                    <div class="panel-toolbar">
                                        <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                        <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                    </div>
                                </div>
                                <div class="panel-container show">
                                    <div class="panel-content">
                                            <div class="panel-content">
                                            <div class="panel-tag">
                                            <p>Сформируйте массив с элементами и выведите при помощи цикла</p>
                                        </div>
                                            <div class="dropdown-menu d-block position-relative float-none" style="width: 14rem; z-index: 2">
                                                <?php
                                        $arrL = [
                                                    'Action' => [17, 'badge-success'],
                                                    'Another action' => [29, 'badge-pill badge-primary'],
                                                    'Disabled link',
                                                    'Dropdown header',
                                                    'Multilevel',
                                                    ['Menu Item', 
                                                     'Another Item',
                                                     'disabled' => 'Disabled',
                                                     'blaBla'   => 'Second Level',
                                                     'dvdv'     => ['Menu Item', 'Another Item', 'Third Level' => ['activ' => 'Menu Item', 'disabled' => 'Disabled']]
                                                    ],
                                                    'Another action',
                                                ];
                                                
                                        foreach ($arrL as $key => $value) {
                                            if (is_string($key)) { ?>
                                                <a class="dropdown-item" href="javascript:void(0)"><span class="badge <?php echo $value[1]; ?> float-right ml-3"><?php echo $value[0]; ?></span><?php echo $key; ?></a>
                                            <?php } elseif ($key == 0) { ?>
                                                <a class="dropdown-item disabled" href="javascript:void(0)"><?php echo $value; ?></a>
                                            <?php } 
                                        }; ?>
                                    <div class="dropdown-divider"></div>
                                    <?php foreach ($arrL as $key => $value) {
                                        if ($key == 1) { ?>
                                            <h6 class="dropdown-header"><?php echo $value; ?></h6>
                                        
                                            <div class="dropdown-multilevel">
                                            <?php } elseif ($key == 2) { ?>
                                        <div class="dropdown-item">
                                            <?php echo $value; ?>
                                        </div>
                                        <div class="dropdown-menu">
                                            <?php } elseif ($key == 3) { 
                                                foreach ($value as $key2 => $value2) {
                                                     if (is_int($key2)) { ?>
                                                        <a href="javascript:void(0);" class="dropdown-item"><?php echo $value2; ?></a>
                                                    <?php } elseif($key2 == 'disabled') { ?>
                                                        <a href="javascript:void(0);" class="dropdown-item <?php echo $key2; ?>"><?php echo $value2; ?></a>
                                                    <?php } elseif ($key2 == 'blaBla') { ?>
                                            <div class="dropdown-multilevel">                                                
                                                <div class="dropdown-item">
                                                   <?php echo $value2; ?>
                                                </div>
                                                <?php } elseif ($key2 == 'dvdv'){ ?>
                                                    <div class="dropdown-menu">
                                                        <?php foreach ($value2 as $key3 => $value3) { 
                                                            if (is_int($key3)) { ?>
                                                                 <a href="javascript:void(0);" class="dropdown-item"><?php echo $value3; ?></a>
                                                            <?php } elseif (is_string($key3)) { ?>
                                                                <div class="dropdown-multilevel dropdown-multilevel-left">
                                                                    <div class="dropdown-item">
                                                                        <?php echo $key3; ?>
                                                                    </div>
                                                                    <div class="dropdown-menu">
                                                                        <?php foreach ($value3 as $key4 => $value4) { 
                                                                            if ($key4 == 'activ') { ?>
                                                                                <a href="javascript:void(0);" class="dropdown-item"><?php echo $value4; ?></a>
                                                                            <?php } else { ?>
                                                                                <a href="javascript:void(0);" class="dropdown-item disabled"><?php echo $value4; ?></a>
                                                                            <?php } ?>
                                                                            
                                                                        <?php } ?>
                                                                        
                                                                    </div>
                                                                </div>
                                                                
                                                            <?php } ?>
                                                        <?php } ?>
                                                        
                                                    </div>
                                                <?php }}; ?>
                                            </div>                                        
                                        </div>
                                    </div>
                                        <?php } elseif ($key == 4) { ?>
                                        <a class="dropdown-item" href="javascript:void(0)"><?php echo $value; ?></a>
                                     <?php } }
                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="col-md-6">
                            <div id="panel-4" class="panel">
                                <div class="panel-hdr">
                                    <h2>
                                        Задание №775</span>
                                    </h2>
                                    <div class="panel-toolbar">
                                        <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                        <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                        <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                                    </div>
                                </div>
                                <div class="panel-container show">
                                    <div class="panel-content">
                                        <div class="panel-tag">
                                            <p>Сформируйте структуру массива и выведите элементы при помощи цикла <code>foreach</code></p>
                                        </div>
                                        <div class="bg-success-900 rounded bg-info-gradient">
                                            <div class="d-flex position-relative py-3 px-4">
                                                <i class="fal fa-search color-success-700 position-absolute pos-left fs-lg px-3 py-2 mt-1 ml-4"></i>
                                                <input type="text" id="js_nested_list_filter" class="form-control shadow-inset-1 pl-6 border-success" placeholder="Filter nested items (e.g buttons, chart)">
                                            </div>
                                            <!-- nav-menu-reset will reset the font colors -->
                                            <?php 
                                                $arrAccordion = [
                                                                 'User Interface' => [
                                                                                        'Buttons','Compass', 'Action' => [
                                                                                                                            'dropdown'   => 'Dropdown',
                                                                                                                            'navigation' => 'Navigation', 
                                                                                                                            'sidebars'   => 'Sidebars'
                                                                                                                            ]
                                                                                        ],
                                                                 'Graphs' => [
                                                                                'flot chart' => 'Flot chart', 
                                                                                'pie chart' => 'Pie charts', 
                                                                                'sythentic' => 'Sythentic graphs', 
                                                                                'flot polygraphs' => 'Polygraphs'
                                                                                ], 
                                                                 'Forms'  => [
                                                                                'Controls',
                                                                                'Loaders',
                                                                                'Other elements' => [
                                                                                                        'buttons' => 'Buttons',
                                                                                                        'input' => 'Input',
                                                                                                        'checkbox' => 'Checkbox'
                                                                                                    ]
                                                                            ]
                                                                ];


                                            ?>
                                            <ul id="js_nested_list" class="nav-menu nav-menu-reset nav-menu-compact bg-success-900 bg-info-gradient mb-sm-4 mb-md-0 rounded" data-nav-accordion="true">
                                                <li class="open active">

                                                    <a href="javascript:void(0);" data-filter-tags="user interface buttons compass action dropdown navigation sidebars">
                                                        <span class="nav-link-text">User Interface </span>
                                                        <strong class="dl-ref bg-primary-500">&nbsp;1.0&nbsp;</strong>
                                                    </a>
                                                    <ul style="display:block;">
                                                        <?php foreach ($arrAccordion['User Interface'] as $key => $value) { 
                                                            if (is_int($key)) { ?>
                                                                <li class="active">
                                                                    <a href="javascript:void(0);" data-filter-tags="user interface buttons">
                                                                        <span class="nav-link-text">
                                                                            <?php echo $value; ?>
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                            <?php } elseif (is_string($key)) { ?>
                                                                <li>
                                                                    <a href="javascript:void(0);" data-filter-tags="user interface action dropdown navigation sidebars">
                                                                        <span class="nav-link-text">
                                                                            <?php echo $key; ?>
                                                                        </span>
                                                                        <strong class="dl-ref bg-primary-500">&nbsp;1.3&nbsp;</strong>
                                                                    </a>
                                                                    <ul>
                                                                        <?php foreach ($value as $key2 => $value2) { ?>
                                                                            <li>
                                                                                <a href="javascript:void(0);" data-filter-tags="user interface action <?php echo $key2; ?>">
                                                                                    <span class="nav-link-text">
                                                                                        <?php echo $value2; ?>
                                                                                    </span>
                                                                                </a>
                                                                            </li>
                                                                        <?php } ?>
                                                                    </ul>
                                                                </li>
                                                            <?php } ?>
                                                        <?php } ?>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" data-filter-tags="graphs flot chart pie sythentic graphs polygraphs">
                                                        <span class="nav-link-text">
                                                            Graphs
                                                        </span>
                                                        <strong class="dl-ref bg-primary-500">&nbsp;2.0&nbsp;</strong>
                                                    </a>
                                                    <ul>
                                                        <?php foreach ($arrAccordion['Graphs'] as $key => $value) { ?>
                                                            <li>
                                                                <a href="javascript:void(0);" data-filter-tags="graphs <?php echo $key; ?>">
                                                                    <span class="nav-link-text">
                                                                        <?php echo $value; ?>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                        <?php } ?>
                                                        
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" data-filter-tags="forms controls loaders other elements buttons input checkbox">
                                                        <span class="nav-link-text">Forms </span>
                                                        <strong class="dl-ref bg-primary-500">&nbsp;3.0&nbsp;</strong>
                                                    </a>
                                                    <ul>
                                                        <?php foreach ($arrAccordion['Forms'] as $key => $value) { 
                                                            if (is_int($key)) { ?>
                                                                 <li>
                                                                    <a href="javascript:void(0);" data-filter-tags="forms controls">
                                                                        <span class="nav-link-text"> <?php echo $value; ?></span>
                                                                    </a>
                                                                </li>
                                                            <?php } elseif (is_string($key)) { ?>
                                                                <li>
                                                                    <a href="javascript:void(0);" data-filter-tags="forms other elements buttons input checkbox">
                                                                        <span class="nav-link-text">
                                                                            <?php echo $key; ?>
                                                                        </span>
                                                                        <strong class="dl-ref bg-primary-500">&nbsp;3.3&nbsp;</strong>
                                                                    </a>
                                                                    <ul>
                                                                        <?php foreach ($value as $key2 => $value2) { 
                                                                            if (is_string($key2)) { ?>
                                                                                 <li>
                                                                                    <a href="javascript:void(0);" data-filter-tags="forms other elements <?php echo $key2; ?>">
                                                                                        <span class="nav-link-text">
                                                                                            <?php echo $value2; ?>
                                                                                        </span>
                                                                                    </a>
                                                                                </li>
                                                                            <?php } elseif ($key2 == 'checkbox') { ?>
                                                                                <li data-filter-tags="forms other elements <?php echo $key2; ?>">
                                                                                    <a href="javascript:void(0);">
                                                                                        <span class="nav-link-text">
                                                                                            <?php echo $value2; ?>
                                                                                        </span>
                                                                                    </a>
                                                                                </li>
                                                                            <?php } ?>
                                                                        <?php } ?>
                                                                    </ul>
                                                                </li>
                                                            <?php } ?>
                                                        <?php } ?>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <div class="filter-message js-filter-message m-0 text-left pl-4 py-3 fw-500"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      
                        <div class="col-md-6">
                            <div id="panel-1" class="panel">
                                <div class="panel-hdr">
                                    <h2>
                                        Задание #776
                                    </h2>
                                    <div class="panel-toolbar">
                                        <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                        <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                    </div>
                                </div>
                                <div class="panel-container show">
                                    <div class="panel-content">
                                        <div class="panel-content">
                                            <div class="panel-tag">
                                                <p>Сформируйте массив и выведите только пункты меню. Логотип и форму поиска не трогать.</p>
                                            </div>
                                            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                                                <a class="navbar-brand" href="javascript:void(0);">Navbar</a>
                                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                                    <span class="navbar-toggler-icon"></span>
                                                </button>
                                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                                    <ul class="navbar-nav mr-auto">
                                                        <?php 
                                                            $arrMenuLink = ['Home', 'Link', 'Dropdown' => ['Action', 'Another action', 'Something else here'], 'Disabled'];

                                                            foreach ($arrMenuLink as $key => $value) {
                                                                if ($key === 0) { ?>
                                                                    <li class="nav-item active">
                                                                        <a class="nav-link" href="javascript:void(0);"><?php echo $value; ?><span class="sr-only">(current)</span></a>
                                                                    </li>
                                                                <?php } elseif ($key == 1) { ?>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" href="javascript:void(0);"><?php echo $value; ?></a>
                                                                    </li>
                                                                <?php } elseif ($key == 'Dropdown') { ?>
                                                                    <li class="nav-item dropdown">
                                                                        <a class="nav-link dropdown-toggle" href="javascript:void(0);" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            <?php echo $key; ?>
                                                                        </a>
                                                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                                            <?php 
                                                                                foreach ($value as $key2 => $value2) { 
                                                                                    if ($key2 <= 1) { ?>
                                                                                        <a class="dropdown-item" href="javascript:void(0);"><?php echo $value2; ?></a>
                                                                                    <?php } else { ?>
                                                                                        <div class="dropdown-divider"></div>
                                                                                        <a class="dropdown-item" href="javascript:void(0);"><?php echo $value2; ?></a>
                                                                                    <?php }
                                                                                
                                                                                } ?>
                                                                            
                                                                        </div>
                                                                    </li>
                                                                <?php } elseif ($key == 2) { ?>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link disabled" href="javascript:void(0);" tabindex="-1" aria-disabled="true"><?php echo $value; ?></a>
                                                                    </li>
                                                                <?php }
                                                            }
                                                        ?>

                                                        
                                                        
                                                        
                                                        
                                                    </ul>
                                                    <form class="form-inline my-2 my-lg-0">
                                                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                                        <button class="btn btn-outline-success my-2 my-sm-0 waves-effect waves-themed" type="submit">Search</button>
                                                    </form>
                                                </div>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        

                        <div class="col-md-6">
                            <div id="panel-12" class="panel">
                                <div class="panel-hdr">
                                    <h2>
                                        Задание №777
                                    </h2>
                                    <div class="panel-toolbar">
                                        <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                        <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                    </div>
                                </div>
                                <div class="panel-container show">
                                    <div class="panel-content">
                                        <div class="panel-tag">
                                            Сформируйте массив и выведите данные при помощи цикла. 
                                        </div>
                                        <div class="row">
                                            <div class="col-auto">
                                                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                    <?php
                                                        $arrMMM = [

                                                            'Home' => [
                                                                'Home',
                                                                'Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.',
                                                                
                                                                'Organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore.',
                                                                ['Cell A-0012'                => '/pic-7.png',
                                                                 'Patient A-473 saliva'       => '/pic-8.png',
                                                                 'Patient A-473 blood cells'  => '/pic-11.png',
                                                                 'Patient A-473 Membrane O.C' => '/pic-12.png']
                                                             ],
                                                             

                                                            'Profile' => [
                                                                'Profile',
                                                                '/avatar-admin.png',
                                                                'Dr. Codex Lantern',
                                                                'drlantern@gotbootstrap.com',
                                                                'Food truck fixie locavore, accusamus mcsweeney\'s marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee.',
                                                                'Organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore.'
                                                            ],

                                                            'Messages' => [
                                                                'Messages',
                                                                [
                                                                'Melissa Ayre'  => 'Re: New security codes',
                                                                'Adison Lee'    => 'Msed quia non numquam eius',
                                                                'Oliver Kopyuv' => 'Msed quia non numquam eius'
                                                                ]
                                                            ],

                                                            'Settings' => [
                                                                'Settings',
                                                                ['Settings saved' => 'All your settings changes have been saved!']
                                                            ] 
                                                        ];

                                                        foreach ($arrMMM as $key => $value) {
                                                            if ($key === 'Home') { ?>
                                                                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                                                                    <i class="fal fa-home"></i>
                                                                    <span class="hidden-sm-down ml-1"><?php echo $key; ?></span>
                                                                </a>
                                                            <?php } elseif ($key === 'Profile') { ?>
                                                                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                                                                    <i class="fal fa-user"></i>
                                                                    <span class="hidden-sm-down ml-1"> <?php echo $key; ?></span>
                                                                </a>
                                                            <?php } elseif ($key === 'Messages') { ?>
                                                                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                                                                    <i class="fal fa-envelope"></i>
                                                                    <span class="hidden-sm-down ml-1"> <?php echo $key; ?></span>
                                                                </a>
                                                            <?php } elseif ($key === 'Settings') { ?>
                                                                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                                                                    <i class="fal fa-cog"></i>
                                                                    <span class="hidden-sm-down ml-1"> <?php echo $key; ?></span>
                                                                </a>
                                                            <?php }
                                                        } //foreach
                                                    ?> 
                                                    
                                                    
                                                    
                                                    
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="tab-content" id="v-pills-tabContent">
                                                    <div class="tab-pane fade active show" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                        <?php 
                                                            foreach ($arrMMM as $key => $value) {
                                                                if ($key === 'Home') {
                                                                    foreach ($value as $key2 => $value2) {
                                                                       if ($key2 == 0) { ?>
                                                                            <h3>
                                                                                <?php echo $value2; ?>
                                                                            </h3>
                                                                       <?php } elseif ($key2 == 1) { ?>
                                                                          <p> <?php echo $value2; ?> </p>
                                                                       <?php } elseif ($key2 == 2) { ?>
                                                                           <p> <?php echo $value2; ?> </p>
                                                                       <?php } elseif ($key2 == 3) { ?>
                                                                        <span class="fs-sm d-flex align-items-center mt-3 flex-wrap"> 
                                                                           <?php foreach ($value2 as $key3 => $value3) { ?>
                                                                                <a href="javascript:void(0);" class="mr-1 mt-1" title="<?php echo $key3; ?>">
                                                                                    <img src="img/thumbs<?php echo $value3; ?>" class="img-share" alt="pic-7" style="">
                                                                                </a>
                                                                            <?php } 
                                                                       }
                                                                    }
                                                                }
                                                            } 
                                                        ?>
                                                        
                                                    </div>
                                                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                                        <?php
                                                            foreach ($arrMMM as $key => $value) {
                                                                if ($key === 'Profile') {
                                                                   foreach ($value as $key2 => $value2) {
                                                                       if ( $key2 == 0) { ?>
                                                                            <h3>
                                                                                <?php echo $value2; ?>
                                                                            </h3>
                                                                       <?php } elseif ($key2 == 1) { ?>
                                                                            <div class="d-flex flex-row rounded-top mb-3">
                                                                                <div class="d-flex flex-row align-items-center mt-1 mb-1">
                                                                                    <span class="mr-2">
                                                                                        <img src="img/demo/avatars<?php echo $value2; ?>" class="rounded-circle profile-image" alt="Dr. Codex Lantern">
                                                                                    </span>
                                                                       <?php } elseif ($key2 == 2) { ?>
                                                                                    <div class="info-card-text">
                                                                                    <div class="fs-lg text-truncate text-truncate-lg"><?php echo $value2; ?></div>
                                                                       <?php } elseif ($key2 == 3) { ?>
                                                                                        <span class="text-truncate text-truncate-md opacity-80"><?php echo $value2; ?></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                       <?php } elseif ($key2 == 4) { ?>
                                                                            <p>
                                                                                <?php echo $value2; ?>
                                                                            </p>
                                                                       <?php } elseif ($key2 == 5) { ?>
                                                                            <p>
                                                                                <?php echo $value2; ?>
                                                                            </p>
                                                                       <?php }
                                                                   }
                                                                }
                                                            }
                                                        ?>

                                                    </div>
                                                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                                        <?php
                                                            foreach ($arrMMM as $key => $value) {
                                                                if ($key === 'Messages') {
                                                                    foreach ($value as $key2 => $value2) {
                                                                        if ($key2 == 0) { ?>
                                                                            <h3>
                                                                                <?php echo $value2; ?>
                                                                            </h3>
                                                                        <?php } elseif ($key2 == 1) { ?>
                                                                            <ul class="notification">
                                                                                <?php
                                                                                    foreach ($value2 as $key3 => $value3) { ?>
                                                                                        <li>
                                                                                            <a href="javascript:void(0);" class="d-flex align-items-center py-2 px-0">
                                                                                                <span class="d-flex flex-column flex-1">
                                                                                                    <span class="name"><?php echo $key3; ?></span>
                                                                                                    <span class="msg-a fs-sm"><?php echo $value3; ?></span>
                                                                                                </span>
                                                                                            </a>
                                                                                        </li>
                                                                                    <?php }
                                                                                ?>
                                                                            </ul>
                                                                        <?php }
                                                                    }
                                                                }
                                                            }
                                                        ?>

                                                    </div>
                                                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                                        <?php
                                                            foreach ($arrMMM as $key => $value) {
                                                                if ($key === 'Settings') {
                                                                    foreach ($value as $key2 => $value2) {
                                                                       if ($key2 == 0) { ?>
                                                                           <h3><?php echo $value2; ?></h3>
                                                                        <?php } elseif ($key2 == 1) { ?>
                                                                            <div class="alert alert-success">
                                                                                <?php
                                                                                    foreach ($value2 as $key3 => $value3) { ?>
                                                                                        <strong>
                                                                                            <?php echo $key3; ?>
                                                                                        </strong>
                                                                                        <p class="m-0">
                                                                                            <?php echo $value3; ?>
                                                                                        </p>                                                                                        
                                                                                    <?php }
                                                                                ?>
                                                                                
                                                                            </div>
                                                                        <?php }
                                                                    }
                                                                }
                                                            }
                                                        ?>
                                                        
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div id="panel-1" class="panel">
                                <div class="panel-hdr">
                                    <h2>
                                        Задание №778
                                    </h2>
                                    <div class="panel-toolbar">
                                        <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                        <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                    </div>
                                </div>
                                <div class="panel-container show">
                                    <div class="panel-content">
                                        <div class="panel-tag">
                                            Сформируйте массив и выведите данные при помощи цикла.
                                        </div>
                                        <h5 class="frame-heading">
                                            Обычная таблица
                                        </h5>
                                        <div class="frame-wrap">
                                            <table class="table m-0">
                                                <?php
                                                    $arrUsers = [
                                                        1 => ['Mark', 'Otto', '@mdo'],
                                                             ['Jacob', 'Thornton', '@fat'],
                                                             ['Larry', 'the Bird', '@twitter'],
                                                             ['Larry the Bird', '', '@twitter'],
                                                    ];
                                                ?>
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>First Name</th>
                                                        <th>Last Name</th>
                                                        <th>Username</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                        for ($i=1; $i <= 4; $i++) { ?>
                                                            <tr>
                                                                <?php
                                                                    foreach ($arrUsers as $key => $value) {
                                                                        if ($key == $i) { ?>
                                                                            <th scope="row"><?php echo $key; ?></th>
                                                                            <?php
                                                                                foreach ($value as $elem) { ?>
                                                                                    <td><?php echo $elem; ?></td>
                                                                                <?php }
                                                                            ?>
                                                                        <?php }
                                                                    }
                                                                ?>
                                                            </tr>
                                                        <?php }
                                                    ?> 
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div id="panel-1" class="panel">
                                <div class="panel-hdr">
                                    <h2>
                                        Задание №779
                                    </h2>
                                    <div class="panel-toolbar">
                                        <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                        <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                    </div>
                                </div>
                                <div class="panel-container show">
                                    <div class="panel-content">
                                        <div class="panel-tag">
                                            Сформировать массив и вывести данные. Обратите внимание на формирование ссылок. <code>?id=X</code> где вместо Х должен быть id конкретной записи. Таким образом вы подготовите ссылки на Просмотр, Изменение и Удаление записи.
                                        </div>
                                        <h5 class="frame-heading">
                                            Обычная таблица
                                        </h5>
                                        <div class="frame-wrap">
                                            <table class="table table-dark m-0">
                                                <?php
                                                    $arrUsers = [
                                                        1 => [
                                                                'Mark',
                                                                'Otto', 
                                                                '@mdo', 
                                                                'view'   => ['btn-info'    => 'fa-eye'],
                                                                'edit'   => ['btn-warning' => 'fa-edit'],
                                                                'delete' => ['btn-danger'  => 'fa-window-close']                                                       ],
                                                             [
                                                                'Jacob', 
                                                                'Thornton', 
                                                                '@fat',
                                                                'view'   => ['btn-info'    => 'fa-eye'],
                                                                'edit'   => ['btn-warning' => 'fa-edit'],
                                                                'delete' => [ 'btn-danger' => 'fa-window-close']
                                                            ],
                                                             [
                                                                'Larry', 
                                                                'the Bird', 
                                                                '@twitter',
                                                                'view'   => ['btn-info'    => 'fa-eye'],
                                                                'edit'   => ['btn-warning' => 'fa-edit'],
                                                                'delete' => ['btn-danger'  => 'fa-window-close']
                                                            ]
                                                    ];
                                                ?>
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>First Name</th>
                                                        <th>Last Name</th>
                                                        <th>Username</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                        for ($i=1; $i <= 3; $i++) { ?>
                                                            <tr>
                                                                <?php
                                                                    foreach ($arrUsers as $key => $value) {
                                                                        if ($key == $i) { ?>
                                                                            <th scope="row"><?php echo $key; ?></th>
                                                                            <?php
                                                                                foreach ($value as $key2 => $value2) {
                                                                                    if (is_int($key2)) { ?>
                                                                                        <td><?php echo $value2; ?></td>
                                                                                    <?php } elseif ($key2 == 'view') {
                                                                                        foreach ($value2 as $key3 => $value3) { ?>
                                                                                            <td>
                                                                                                <a href="view.php?id=<?php echo $i; ?>" class="btn <?php echo $key3; ?>">
                                                                                                    <i class="fa <?php echo $value3; ?>"></i>
                                                                                                </a>
                                                                                        <?php } 
                                                                                    } elseif ($key2 == 'edit') {
                                                                                            foreach ($value2 as $key3 => $value3) { ?>
                                                                                                <a href="edit.php?id=<?php echo $i; ?>" class="btn <?php echo $key3; ?>">
                                                                                                    <i class="fa <?php echo $value3; ?>"></i>
                                                                                                </a>
                                                                                            <?php }
                                                                                        } elseif ($key2 == 'delete') {
                                                                                            foreach ($value2 as $key3 => $value3) { ?>
                                                                                                <a href="delete.php?id=<?php echo $i; ?>" class="btn <?php echo $key3; ?>">
                                                                                                    <i class="fa <?php echo $value3; ?>"></i>
                                                                                                </a>
                                                                                            <?php }
                                                                                        }
                                                                                }
                                                                            ?>
                                                                        <?php }
                                                                    };
                                                                    
                                                                ?>
                                                            </tr>
                                                        <?php }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Формы -->
                        
                         <div class="col-md-6">
                            <div id="panel-1" class="panel">
                                <div class="panel-hdr">
                                    <h2>
                                        Задание №780
                                    </h2>
                                    <div class="panel-toolbar">
                                        <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                        <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                    </div>
                                </div>
                                <div class="panel-container show">
                                    <div class="panel-content">
                                        <div class="panel-content">
                                            <div class="panel-tag">
                                                <p>Настройте форму, создайте обработчик который будет принимать данные. Ваша цель: вывести текст на экран. Используйте метод <code>GET</code> </p>
                                            </div>
                                            <div class="form-group">
                                                <form action="../handler.php" method="GET">
                                                    <label class="form-label" for="simpleinput">Text</label>
                                                    <input type="text" id="simpleinput" class="form-control" name="text">
                                                    <button class="btn btn-success mt-3">Submit</button>
                                                </form>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div id="panel-1" class="panel">
                                <div class="panel-hdr">
                                    <h2>
                                        Задание №781
                                    </h2>
                                    <div class="panel-toolbar">
                                        <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                        <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                    </div>
                                </div>
                                <div class="panel-container show">
                                    <div class="panel-content">
                                        <div class="panel-content">
                                            <div class="panel-tag">
                                                <p>
                                                    Если введен некорректный формат email, вывести сообщение: <code>Введите корректный email</code> <br>
                                                    Используйте метод <code>POST</code>
                                                    <br>
                                                    Для вывода сообщения можете использовать любую функцию: <code>echo, var_dump(), die()</code>
                                                </p>
                                            </div>
                                            <div class="form-group">
                                                <form action="../handler.php" method="POST">
                                                    <label class="form-label" for="example-email-2">Email</label>
                                                    <input type="email" id="example-email-2" name="example-email-2" class="form-control" placeholder="Email">
                                                    <button class="btn btn-success mt-3">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div id="panel-1" class="panel">
                                <div class="panel-hdr">
                                    <h2>
                                        Задание #782
                                    </h2>
                                    <div class="panel-toolbar">
                                        <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                        <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                    </div>
                                </div>
                                <div class="panel-container show">
                                    <div class="panel-content">
                                        <div class="panel-content">
                                            <div class="panel-tag">
                                                <p>Теперь по-умолчанию используйте метот <code>POST</code> Отправьте данные в обработчик, который проверит два поля. Если они не равны выведет сообщение: <code>Пароли не совпадают</code><br>
                                                Для вывода сообщения можете использовать любую функцию: <code>echo, var_dump(), die()</code>
                                                </p>
                                            </div>
                                            <div class="form-group">
                                                <form action="../handler.php" method="POST">
                                                    <div class="form-group">
                                                        <label class="form-label" for="example-password">Password</label>
                                                        <input type="password" id="example-password" class="form-control" value="" name="pass">
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="form-label" for="example-password">Password Confirmation</label>
                                                        <input type="password" id="example-password" class="form-control" value="" name="reviewPass">
                                                        <button class="btn btn-success mt-3">Submit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div id="panel-1" class="panel">
                                <div class="panel-hdr">
                                    <h2>
                                        Задание #783
                                    </h2>
                                    <div class="panel-toolbar">
                                        <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                        <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                    </div>
                                </div>
                                <div class="panel-container show">
                                    <div class="panel-content">
                                        <div class="panel-content">
                                            <div class="panel-tag">
                                                <p>
                                                    Количество вводимых символов должно быть между 10 и 20. В обработчике проверьте, если меньше, то сообщение: <code>Количество символов должно быть больше 10</code>. А если больше 20, то <code>Количество символов должно быть меньше 20.</code>
                                                    Для вывода сообщения можете использовать любую функцию: <code>echo, var_dump(), die()</code>
                                                </p>
                                            </div>
                                            <div class="form-group">
                                                <form action="../handler.php" method="POST">
                                                    <label class="form-label" for="example-textarea">Text area</label>
                                                    <textarea class="form-control" id="example-textarea" rows="5" name="textarea"></textarea>
                                                    <button class="btn btn-success mt-3">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div id="panel-1" class="panel">
                                <div class="panel-hdr">
                                    <h2>
                                        Задание №784
                                    </h2>
                                    <div class="panel-toolbar">
                                        <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                        <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                    </div>
                                </div>
                                <div class="panel-container show">
                                    <div class="panel-content">
                                        <div class="panel-content">
                                            <div class="panel-tag">
                                                <p>
                                                    Выведите сообщение того пункта, который вы выберете. К примеру, <mark>Вы выбрали пункт 2</mark><br>
                                                    Для вывода сообщения можете использовать любую функцию: <code>echo, var_dump(), die()</code>
                                                </p>
                                            </div>
                                            <div class="form-group">
                                                <form action="../handler.php" method="POST">
                                                    <label class="form-label" for="example-select">Input Select</label>
                                                    <select class="form-control" id="example-select" name="select">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                    <button class="btn btn-success mt-3">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div id="panel-1" class="panel">
                                <div class="panel-hdr">
                                    <h2>
                                        Задание #785
                                    </h2>
                                    <div class="panel-toolbar">
                                        <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                        <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                    </div>
                                </div>
                                <div class="panel-container show">
                                    <div class="panel-content">
                                        <div class="panel-content">
                                            <div class="panel-tag">
                                                <p>
                                                    Выведите сообщение: <mark>Вы выбрали пункты 2,5,3</mark> <br>
                                                    Соответственно выведите те пункты, которые вы выбрали.
                                                </p>
                                            </div>
                                            <div class="form-group">
                                                <form action="../handler.php" method="POST">
                                                    <label class="form-label" for="example-multiselect">Multiple Select</label>
                                                    <select id="example-multiselect" multiple="multiple" class="form-control" name="multiSelect[]">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                    <button class="btn btn-success mt-3">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div id="panel-1" class="panel">
                                <div class="panel-hdr">
                                    <h2>
                                        Задание №786
                                    </h2>
                                    <div class="panel-toolbar">
                                        <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                        <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                    </div>
                                </div>
                                <div class="panel-container show">
                                    <div class="panel-content">
                                        <div class="panel-content">
                                            <div class="panel-tag">
                                                <p>Загрузите картинку на сервер и дайте ей уникальное название.</p>
                                            </div>
                                            <div class="form-group">
                                                <form action="../create.php" method="POST" enctype="multipart/form-data">
                                                    <label class="form-label" for="example-fileinput">Default file input</label>
                                                    <input type="file" id="example-fileinput" name="file" class="form-control-file">
                                                    <button class="btn btn-success mt-3" >Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div id="panel-1" class="panel">
                                <div class="panel-hdr">
                                    <h2>
                                        Задание №787
                                    </h2>
                                    <div class="panel-toolbar">
                                        <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                        <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                    </div>
                                </div>
                                <div class="panel-container show">
                                    <div class="panel-content">
                                        <div class="panel-content">
                                            <div class="panel-tag">
                                                <p>Если чекбокс выбран, выведите сообщение: <mark>Чекбокс отмечен</mark> иначе <mark>Чекбокс не отмечен.</mark></p>
                                            </div>
                                            <form action="../handler.php" method="POST">
                                                <div class="form-group custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="defaultChecked" checked="" name="check">
                                                    <label class="custom-control-label" for="defaultChecked">Checked</label>
                                                </div>
                                                <button class="btn btn-success" name="btN">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div id="panel-1" class="panel">
                                <div class="panel-hdr">
                                    <h2>
                                        Задание
                                    </h2>
                                    <div class="panel-toolbar">
                                        <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                        <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                    </div>
                                </div>
                                <div class="panel-container show">
                                    <div class="panel-content">
                                        <div class="panel-tag">
                                            <p>
                                                Сформируйте массив и выведите данные
                                            </p>
                                        </div>
                                        <!-- datatable start -->
                                        <table id="dt-basic-example" class="table table-bordered table-hover table-striped w-100">
                                            <thead class="bg-primary-600">
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Position</th>
                                                    <th>Office</th>
                                                    <th>Age</th>
                                                    <th>Start date</th>
                                                    <th>Salary</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $arrSpecialist = [
                                                        [
                                                            "Angelica Ramos",
                                                            "Chief Executive Officer (CEO)",
                                                            "London",
                                                            "47",
                                                            "2009/10/09",
                                                            "1 200 000,00  $"
                                                        ],
                                                        [
                                                            "Fiona Green",
                                                            "Chief Operating Officer (COO)",
                                                            "San Francisco",
                                                            "48",
                                                            "2010/03/11",
                                                            "850 000,00  $"
                                                        ],
                                                        [
                                                            "Paul Byrd",
                                                            "Chief Financial Officer (CFO)",
                                                            "New York",
                                                            "64",
                                                            "2010/06/09",
                                                            "725 000,00  $"
                                                        ],
                                                        [
                                                            "Yuri Berry",
                                                            "Chief Marketing Officer (CMO)",
                                                            "New York",
                                                            "40",
                                                            "2009/06/25",
                                                            "675 000,00  $"
                                                        ],
                                                        [
                                                            "Jackson Bradshaw",
                                                            "Director",
                                                            "New York",
                                                            "65",
                                                            "2008/09/26",
                                                            "645 750,00  $"
                                                        ],
                                                        [
                                                            "Charde Marshall",
                                                            "Regional Director",
                                                            "San Francisco",
                                                            "36",
                                                            "2008/10/16",
                                                            "470 600,00  $"
                                                        ],
                                                        [
                                                            "Vivian Harrell",
                                                            "Financial Controller",
                                                            "San Francisco",
                                                            "62",
                                                            "2009/02/14",
                                                            "452 500,00  $"
                                                        ],
                                                        [
                                                            "Cedric Kelly",
                                                            "Senior Javascript Developer",
                                                            "Edinburgh",
                                                            "22",
                                                            "2012/03/29",
                                                            "433 060,00  $"
                                                        ],
                                                        [
                                                            "Tatyana Fitzpatrick",
                                                            "Regional Director",
                                                            "London",
                                                            "19",
                                                            "2010/03/17",
                                                            "385 750,00  $"
                                                        ],
                                                        [
                                                            "Brielle Williamson",
                                                            "Integration Specialist",
                                                            "New York",
                                                            "61",
                                                            "2012/12/02",
                                                            "372 000,00  $"
                                                        ],
                                                        [
                                                            "Jennifer Chang",
                                                            "Regional Director",
                                                            "Singapore",
                                                            "28",
                                                            "2010/11/14",
                                                            "357 650,00  $"
                                                        ],
                                                        [
                                                            "Hermione Butler",
                                                            "Regional Director",
                                                            "London",
                                                            "47",
                                                            "2011/03/21",
                                                            "356 250,00  $"
                                                        ],
                                                        [
                                                            "Jenette Caldwell",
                                                            "Development Lead",
                                                            "New York",
                                                            "30",
                                                            "2011/09/03",
                                                            "345 000,00  $"
                                                        ],
                                                        [
                                                            "Quinn Flynn",
                                                            "Support Lead",
                                                            "Edinburgh",
                                                            "22",
                                                            "2013/03/03",
                                                            "342 000,00  $"
                                                        ],
                                                        [
                                                            "Rhona Davidson",
                                                            "Integration Specialist",
                                                            "Tokyo",
                                                            "55",
                                                            "2010/10/14",
                                                            "327 900,00  $"
                                                        ],
                                                        [
                                                            "Martena Mccray",
                                                            "Post-Sales support",
                                                            "Edinburgh",
                                                            "46",
                                                            "2011/03/09",
                                                            "324 050,00  $"
                                                        ],
                                                        [
                                                            "Tiger Nixon",
                                                            "System Architect",
                                                            "Edinburgh",
                                                            "61",
                                                            "2011/04/25",
                                                            "320 800,00  $"
                                                        ],
                                                        [
                                                            "Haley Kennedy",
                                                            "Senior Marketing Designer",
                                                            "London",
                                                            "43",
                                                            "2012/12/18",
                                                            "313 500,00  $"
                                                        ],
                                                        [
                                                            "Gloria Little",
                                                            "Systems Administrator",
                                                            "New York",
                                                            "59",
                                                            "2009/04/10",
                                                            "237 500,00  $"
                                                        ],
                                                        [
                                                            "Gavin Cortez",
                                                            "Team Leader",
                                                            "San Francisco",
                                                            "22",
                                                            "2008/10/26",
                                                            "235 500,00  $"
                                                        ],
                                                        [
                                                            "Olivia Liang",
                                                            "Support Engineer",
                                                            "Singapore",
                                                            "64",
                                                            "2011/02/03",
                                                            "234 500,00  $"
                                                        ],
                                                        [
                                                            "Dai Rios",
                                                            "Personnel Lead",
                                                            "Edinburgh",
                                                            "35",
                                                            "2012/09/26",
                                                            "217 500,00  $"
                                                        ],
                                                        [
                                                            "Brenden Wagner",
                                                            "Software Engineer",
                                                            "San Francisco",
                                                            "28",
                                                            "2011/06/07",
                                                            "206 850,00  $"
                                                        ],
                                                        [
                                                            "Colleen Hurst",
                                                            "Javascript Developer",
                                                            "San Francisco",
                                                            "39",
                                                            "2009/09/15",
                                                            "205 500,00  $"
                                                        ],
                                                        [
                                                            "Michael Silva",
                                                            "Marketing Designer",
                                                            "London",
                                                            "66",
                                                            "2012/11/27",
                                                            "198 500,00  $"
                                                        ],
                                                        [
                                                            "Michael Bruce",
                                                            "Javascript Developer",
                                                            "Singapore",
                                                            "29",
                                                            "2011/06/27",
                                                            "183 000,00  $"
                                                        ],
                                                        [
                                                            "Shad Decker",
                                                            "Regional Director",
                                                            "Edinburgh",
                                                            "51",
                                                            "2008/11/13",
                                                            "183 000,00  $"
                                                        ],
                                                        [
                                                            "Garrett Winters",
                                                            "Accountant",
                                                            "Tokyo",
                                                            "63",
                                                            "2011/07/25",
                                                            "170 750,00  $"
                                                        ],
                                                        [
                                                            "Howard Hatfield",
                                                            "Office Manager",
                                                            "San Francisco",
                                                            "51",
                                                            "2008/12/16",
                                                            "164 500,00  $"
                                                        ],
                                                        [
                                                            "Bruno Nash",
                                                            "Software Engineer",
                                                            "London",
                                                            "38",
                                                            "2011/05/03",
                                                            "163 500,00  $"
                                                        ],
                                                        [
                                                            "Shou Itou",
                                                            "Regional Marketing",
                                                            "Tokyo",
                                                            "20",
                                                            "2011/08/14",
                                                            "163 000,00  $"
                                                        ],
                                                        [
                                                            "Airi Satou",
                                                            "Accountant",
                                                            "Tokyo",
                                                            "33",
                                                            "2008/11/28",
                                                            "162 700,00  $"
                                                        ],
                                                        [
                                                            "Cara Stevens",
                                                            "Sales Assistant",
                                                            "New York",
                                                            "46",
                                                            "2011/12/06",
                                                            "145 600,00  $"
                                                        ],
                                                        [
                                                            "Prescott Bartlett",
                                                            "Technical Author",
                                                            "London",
                                                            "27",
                                                            "2011/05/07",
                                                            "145 000,00  $"
                                                        ],
                                                        [
                                                            "Sakura Yamamoto",
                                                            "Support Engineer",
                                                            "Tokyo",
                                                            "37",
                                                            "2009/08/19",
                                                            "139 575,00  $"
                                                        ],
                                                        [
                                                            "Serge Baldwin",
                                                            "Data Coordinator",
                                                            "Singapore",
                                                            "64",
                                                            "2012/04/09",
                                                            "138 575,00  $"
                                                        ],
                                                        [
                                                            "Herrod Chandler",
                                                            "Sales Assistant",
                                                            "San Francisco",
                                                            "59",
                                                            "2012/08/06",
                                                            "137 500,00  $"
                                                        ],
                                                        [
                                                            "Timothy Mooney",
                                                            "Office Manager",
                                                            "London",
                                                            "37",
                                                            "2008/12/11",
                                                            "136 200,00  $"
                                                        ],
                                                        [
                                                            "Bradley Greer",
                                                            "Software Engineer",
                                                            "London",
                                                            "41",
                                                            "2012/10/13",
                                                            "132 000,00  $"
                                                        ],
                                                        [
                                                            "Zenaida Frank",
                                                            "Software Engineer",
                                                            "New York",
                                                            "63",
                                                            "2010/01/04",
                                                            "125 250,00  $"
                                                        ],
                                                        [
                                                            "Zorita Serrano",
                                                            "Software Engineer",
                                                            "San Francisco",
                                                            "56",
                                                            "2012/06/01",
                                                            "115 000,00  $"
                                                        ],
                                                        [
                                                            "Suki Burks",
                                                            "Developer",
                                                            "London",
                                                            "53",
                                                            "2009/10/22",
                                                            "114 500,00  $"
                                                        ],
                                                        [
                                                            "Donna Snider",
                                                            "Customer Support",
                                                            "New York",
                                                            "27",
                                                            "2011/01/25",
                                                            "112 000,00  $"
                                                        ],
                                                        [
                                                            "Hope Fuentes",
                                                            "Secretary",
                                                            "San Francisco",
                                                            "41",
                                                            "2010/02/12",
                                                            "109 850,00  $"
                                                        ],
                                                        [
                                                            "Caesar Vance",
                                                            "Pre-Sales Support",
                                                            "New York",
                                                            "21",
                                                            "2011/12/12",
                                                            "106 450,00  $"
                                                        ],
                                                        [
                                                            "Sonya Frost",
                                                            "Software Engineer",
                                                            "Edinburgh",
                                                            "23",
                                                            "2008/12/13",
                                                            "103 600,00  $"
                                                        ],
                                                        [
                                                            "Lael Greer",
                                                            "Systems Administrator",
                                                            "London",
                                                            "21",
                                                            "2009/02/27",
                                                            "103 500,00  $"
                                                        ],
                                                        [
                                                            "Thor Walton",
                                                            "Developer",
                                                            "New York",
                                                            "61",
                                                            "2013/08/11",
                                                            "98 540,00  $"
                                                        ],
                                                        [
                                                            "Michelle House",
                                                            "Integration Specialist",
                                                            "Sidney",
                                                            "37",
                                                            "2011/06/02",
                                                            "95 400,00  $"
                                                        ],
                                                        [
                                                            "Gavin Joyce",
                                                            "Developer",
                                                            "Edinburgh",
                                                            "42",
                                                            "2010/12/22",
                                                            "92 575,00  $"
                                                        ],
                                                        [
                                                            "Jena Gaines",
                                                            "Office Manager",
                                                            "London",
                                                            "30",
                                                            "2008/12/19",
                                                            "90 560,00  $"
                                                        ],
                                                        [
                                                            "Finn Camacho",
                                                            "Support Engineer",
                                                            "San Francisco",
                                                            "47",
                                                            "2009/07/07",
                                                            "87 500,00  $"
                                                        ],
                                                        [
                                                            "Jonas Alexander",
                                                            "Developer",
                                                            "San Francisco",
                                                            "30",
                                                            "2010/07/14",
                                                            "86 500,00  $"
                                                        ],
                                                        [
                                                            "Ashton Cox",
                                                            "Junior Technical Author",
                                                            "San Francisco",
                                                            "66",
                                                            "2009/01/12",
                                                            "86 000,00  $"
                                                        ],
                                                        [
                                                            "Unity Butler",
                                                            "Marketing Designer",
                                                            "San Francisco",
                                                            "47",
                                                            "2009/12/09",
                                                            "85 675,00  $"
                                                        ],
                                                        [
                                                            "Doris Wilder",
                                                            "Sales Assistant",
                                                            "Sidney",
                                                            "23",
                                                            "2010/09/20",
                                                            "85 600,00  $"
                                                        ],
                                                        [
                                                            "Jennifer Acosta",
                                                            "Junior Javascript Developer",
                                                            "Edinburgh",
                                                            "43",
                                                            "2013/02/01",
                                                            "75 650,00  $"
                                                        ]
                                                    ];

                                                    
                                                        
                                                            foreach ($arrSpecialist as $value) { ?>
                                                                <tr> 
                                                                    <?php
                                                                        foreach ($value as  $elem) { ?>
                                                                            <td><?php echo $elem; ?></td>
                                                                    <?php }; ?>
                                                                </tr>
                                                            <?php }; ?>
                                                    

                                                    



                                                    

                                                
                                                
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Position</th>
                                                    <th>Office</th>
                                                    <th>Age</th>
                                                    <th>Start date</th>
                                                    <th>Salary</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                        <!-- datatable end -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        

                        
                    </main>
                    

                    <script src="js/vendors.bundle.js"></script>
                    <script src="js/app.bundle.js"></script>
                    <script src="js/datagrid/datatables/datatables.bundle.js"></script>
                    <script src="js/datagrid/datatables/datatables.export.js"></script>
                    <script src="js/miscellaneous/lightgallery/lightgallery.bundle.js"></script>
                    <script>
                        // default list filter
                        initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
                        // custom response message
                        initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
                        //accordion filter
                        initApp.listFilter($('#js_list_accordion'), $('#js_list_accordion_filter'));
                        // nested list filter
                        initApp.listFilter($('#js_nested_list'), $('#js_nested_list_filter'));
                        //init navigation 
                        initApp.buildNavigation($('#js_nested_list'));

                        $(document).ready(function()
                        {

                            // initialize datatable
                            $('#dt-basic-example').dataTable(
                            {
                                responsive: true,
                                lengthChange: false,
                                dom:
                                    /*  --- Layout Structure 
                                        --- Options
                                        l   -   length changing input control
                                        f   -   filtering input
                                        t   -   The table!
                                        i   -   Table information summary
                                        p   -   pagination control
                                        r   -   processing display element
                                        B   -   buttons
                                        R   -   ColReorder
                                        S   -   Select

                                        --- Markup
                                        < and >             - div element
                                        <"class" and >      - div with a class
                                        <"#id" and >        - div with an ID
                                        <"#id.class" and >  - div with an ID and a class

                                        --- Further reading
                                        https://datatables.net/reference/option/dom
                                        --------------------------------------
                                     */
                                    "<'row mb-3'<'col-sm-12 col-md-6 d-flex align-items-center justify-content-start'f><'col-sm-12 col-md-6 d-flex align-items-center justify-content-end'lB>>" +
                                    "<'row'<'col-sm-12'tr>>" +
                                    "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                                buttons: [
                                    /*{
                                        extend:    'colvis',
                                        text:      'Column Visibility',
                                        titleAttr: 'Col visibility',
                                        className: 'mr-sm-3'
                                    },*/
                                    {
                                        extend: 'pdfHtml5',
                                        text: 'PDF',
                                        titleAttr: 'Generate PDF',
                                        className: 'btn-outline-danger btn-sm mr-1'
                                    },
                                    {
                                        extend: 'excelHtml5',
                                        text: 'Excel',
                                        titleAttr: 'Generate Excel',
                                        className: 'btn-outline-success btn-sm mr-1'
                                    },
                                    {
                                        extend: 'csvHtml5',
                                        text: 'CSV',
                                        titleAttr: 'Generate CSV',
                                        className: 'btn-outline-primary btn-sm mr-1'
                                    },
                                    {
                                        extend: 'copyHtml5',
                                        text: 'Copy',
                                        titleAttr: 'Copy to clipboard',
                                        className: 'btn-outline-primary btn-sm mr-1'
                                    },
                                    {
                                        extend: 'print',
                                        text: 'Print',
                                        titleAttr: 'Print Table',
                                        className: 'btn-outline-primary btn-sm'
                                    }
                                ]
                            });


                            var $initScope = $('#js-lightgallery');
                            if ($initScope.length)
                            {
                                $initScope.justifiedGallery(
                                {
                                    border: -1,
                                    rowHeight: 150,
                                    margins: 8,
                                    waitThumbnailsLoad: true,
                                    randomize: false,
                                }).on('jg.complete', function()
                                {
                                    $initScope.lightGallery(
                                    {
                                        thumbnail: true,
                                        animateThumb: true,
                                        showThumbByDefault: true,
                                    });
                                });
                            };
                            $initScope.on('onAfterOpen.lg', function(event)
                            {
                                $('body').addClass("overflow-hidden");
                            });
                            $initScope.on('onCloseAfter.lg', function(event)
                            {
                                $('body').removeClass("overflow-hidden");
                            });
                        });

                    </script>
                </body>
                <!-- END Body -->

            <!-- Mirrored from www.gotbootstrap.com/themes/smartadmin/4.5.1/statistics_chartist.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Jun 2020 09:43:52 GMT -->
            </html>

<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

CRITICAL - 2017-10-13 00:18:34 --> Undefined variable: first_name
#0 /var/www/html/ci_4/application/Views/dashboard/nav/index.php(102): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', '/var/www/html/c...', 102, Array)
#1 /var/www/html/ci_4/system/View/View.php(187): include('/var/www/html/c...')
#2 /var/www/html/ci_4/system/Common.php(121): CodeIgniter\View\View->render('dashboard/nav/i...', Array, NULL)
#3 /var/www/html/ci_4/application/Controllers/admin/Layout.php(29): view('dashboard/nav/i...')
#4 /var/www/html/ci_4/system/CodeIgniter.php(727): App\Controllers\admin\Layout->index()
#5 /var/www/html/ci_4/system/CodeIgniter.php(250): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\admin\Layout))
#6 /var/www/html/ci_4/system/CodeIgniter.php(205): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache))
#7 /var/www/html/ci_4/public/index.php(36): CodeIgniter\CodeIgniter->run()
#8 {main}

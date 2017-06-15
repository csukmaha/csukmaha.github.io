
<?php

$prefix = 'admin';

Route::group([
	'prefix' => $prefix,
    'middleware' => 'web',
	'namespace' => '\MAkira\Admin'
], function(){
	include __DIR__ . '/../routes/public.php';
	include __DIR__ . '/../routes/install.php';
});

Route::group([
	'prefix' => $prefix,
	'middleware' => 'adminAuth',
    'namespace' => '\MAkira\Admin'
], function(){
	include __DIR__ . '/../routes/private.php';

});
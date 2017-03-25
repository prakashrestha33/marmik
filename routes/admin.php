<?php

Route::resource('/shipment', 'ShipmentController');
Route::resource('/customer', 'CustomerAdminController');
Route::resource('/package', 'PackageAdminController');



Route::get('/staff', 'AdminController@indexStaff')->name('staff.index');
Route::get('/staff/create', 'AdminController@createStaff')->name('staff.create');
Route::get('/staff/{id}/edit', 'AdminController@editStaff')->name('staff.edit');
Route::post('/staff/store', 'AdminController@storeStaff')->name('staff.store');
Route::put('/staff/{id}/update', 'AdminController@updateStaff')->name('staff.update');

Route::get('/packages/report', 'PackageAdminController@reportList')->name('package.report');

<?php

Route::resource('/shipment', 'ShipmentController');
Route::resource('/customer', 'CustomerAdminController');
Route::resource('/package', 'PackageAdminController');
Route::resource('/batch', 'BatchController');


Route::get('/staff', 'AdminController@indexStaff')->name('staff.index');
Route::get('/staff/create', 'AdminController@createStaff')->name('staff.create');
Route::get('/staff/{id}/edit', 'AdminController@editStaff')->name('staff.edit');
Route::post('/staff/store', 'AdminController@storeStaff')->name('staff.store');
Route::put('/staff/{id}/update', 'AdminController@updateStaff')->name('staff.update');

Route::get('/packages/report', 'PackageAdminController@reportList')->name('package.report');

Route::get('/shipment_type/create', 'ShipmentController@createShipType')->name('shipment.type.create');
Route::get('/shipment_type', 'ShipmentController@indexShipType')->name('shipment.type.index');
Route::post('/shipment_type/store', 'ShipmentController@storeShipType')->name('shipment.type.store');
Route::put('/shipment_type/update', 'ShipmentController@updateShipType')->name('shipment.type.update');

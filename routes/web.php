<?php

Route::get('/', 'ProductController@index'
);
//product
Route::get('/addproduct', 'ProductController@create');
 Route::post('/admin/upload-addproduct','ProductController@store');
 Route::get('/show-product','ProductController@show');
 Route::get('show-product/{id}','ProductController@show_product');
 Route::get('/product-edit/{id}','ProductController@edit');
 Route::post('/admin/update-product/{id}','ProductController@update');
 Route::get('/product-delete/{id}','ProductController@destroy');

 //brand:
Route::get('/addbrand', 'BrandController@create');
Route::post('/admin/upload-addbrand','BrandController@store');
Route::get('show-brand','BrandController@show');
Route::get('/edit-brand/{id}','BrandController@edit');
Route::post('/admin/update-brand/{id}','BrandController@update');
Route::get('/delete-brand/{id}','BrandController@destroy');//delete

//model
Route::get('/addmodel/{id}','ModelController@create');
Route::post('/admin/upload-model','ModelController@store');
Route::get('show-model/{id}','ModelController@show');
Route::get('/model-edit/{id}','ModelController@edit');
Route::post('/admin/update-model/{id}','ModelController@update');
Route::get('/model-delete/{id}','ModelController@destroy');//delete

//editions
Route::get("add-edition/{id}","EditionController@create");
Route::post("admin/upload-addedition","EditionController@store");
Route::get('/show-edition/{id}','EditionController@show');
Route::get('/edition-edit/{id}','EditionController@edit');
Route::post('/admin/update-edition/{id}','EditionController@update');
Route::get('/edition-delete/{id}','EditionController@destroy');



 // image
Route::get("admin/addimage","ImageController@create");
Route::post('admin/upload-addimage','ImageController@store');
Route::get('/admin/show-image','ImageController@show');
Route::get('/image-edit/{id}','ImageController@edit');
Route::post('/admin/upload-editimage/{id}','ImageController@update');
Route::get('/image-delete/{id}','ImageController@destroy');
Route::get('/addproduct-image', 'ImageController@createproduct_image');
Route::post('admin/upload-addproduct-image','ImageController@storeproduct_image');
 //Services 
Route::get("admin/addservice","ServiceController@create");
Route::post('admin/upload-addservice','ServiceController@store');
Route::get('show-service','ServiceController@show');
Route::get('/service-edit/{id}','ServiceController@edit');
Route::post('/admin/upload-service/{id}','ServiceController@update');
Route::get('/service-delete/{id}','ServiceController@destroy');
Route::post('admin/upload-addproduct-service','ServiceController@storeproduct_service');

 //
//Type

Route::get("/admin/addproduct-type","TypeController@create");
Route::post('/admin/upload-addproduct-type','TypeController@store');
Route::get('show-producttype','TypeController@show');
Route::get('/type-edit/{id}','TypeController@edit');
Route::post('/admin/upload-type/{id}','TypeController@update');
Route::get('/type-delete/{id}','TypeController@destroy');




// Route::get('/show-product','ProductController@showproduct');
//patch
Route::get('/add-patch', 'PatchController@create');//create a new patch 
Route::post('/admin/upload-addpatch','PatchController@store');// store a new patch 
Route::get('/show-patch','PatchController@show');//show patch
Route::get('/patch-edit/{id}','PatchController@edit');//update patch 
Route::post('/admin/update-patch/{id}','PatchController@update');
Route::get('/patch-delete/{id}','PatchController@destroy');


// property
Route::get('/add-property', 'PropertyController@create');
Route::post('/admin/upload-addproprty','PropertyController@store');
Route::post('/admin/upload-addpatch-proprty','PropertyController@storeptch_property');
//



//supplier
Route::get('add-supplier','SupplierController@create');
Route::post('admin/upload-addsupplier','SupplierController@store');
Route::get('show-supplier','SupplierController@show');
Route::get('/supplier-edit/{id}','SupplierController@edit');//update supplier 
Route::post('/admin/upload-supplier/{id}','SupplierController@update');
Route::get('/supplier-delete/{id}','SupplierController@delete');//delete





<?php

//Core 

Route::get('/', 'Core\ProductController@index'
);
//product
Route::get('/addproduct', 'Core\ProductController@create');
 Route::post('/admin/upload-addproduct','Core\ProductController@store');
 Route::get('/show-product','Core\ProductController@show');
 Route::get('show-product/{id}','Core\ProductController@show_product');
 Route::get('/product-edit/{id}','Core\ProductController@edit');
 Route::post('/admin/update-product/{id}','Core\ProductController@update');
 Route::get('/product-delete/{id}','Core\ProductController@destroy');

 //brand:
Route::get('/addbrand', 'Core\BrandController@create');
Route::post('/admin/upload-addbrand','Core\BrandController@store');
Route::get('show-brand','Core\BrandController@show');
Route::get('/edit-brand/{id}','Core\BrandController@edit');
Route::post('/admin/update-brand/{id}','Core\BrandController@update');
Route::get('/delete-brand/{id}','Core\BrandController@destroy');//delete

//model
Route::get('/addmodel/{id}','Core\ModelController@create');
Route::post('/admin/upload-model','Core\ModelController@store');
Route::get('show-model/{id}','Core\ModelController@show');
Route::get('/model-edit/{id}','Core\ModelController@edit');
Route::post('/admin/update-model/{id}','Core\ModelController@update');
Route::get('/model-delete/{id}','Core\ModelController@destroy');//delete

//editions
Route::get("add-edition/{id}","Core\EditionController@create");
Route::post("admin/upload-addedition","Core\EditionController@store");
Route::get('/show-edition/{id}','Core\EditionController@show');
Route::get('/edition-edit/{id}','Core\EditionController@edit');
Route::post('/admin/update-edition/{id}','Core\EditionController@update');
Route::get('/edition-delete/{id}','Core\EditionController@destroy');



 // image
Route::get("admin/addimage","Core\ImageController@create");
Route::post('admin/upload-addimage','Core\ImageController@store');
Route::get('/admin/show-image','Core\ImageController@show');
Route::get('/image-edit/{id}','Core\ImageController@edit');
Route::post('/admin/upload-editimage/{id}','Core\ImageController@update');
Route::get('/image-delete/{id}','Core\ImageController@destroy');
Route::get('/addproduct-image', 'Core\ImageController@createproduct_image');
Route::post('admin/upload-addproduct-image','Core\ImageController@storeproduct_image');
 //Services 
Route::get("admin/addservice","Core\ServiceController@create");
Route::post('admin/upload-addservice','Core\ServiceController@store');
Route::get('show-service','Core\ServiceController@show');
Route::get('/service-edit/{id}','Core\ServiceController@edit');
Route::post('/admin/upload-service/{id}','Core\ServiceController@update');
Route::get('/service-delete/{id}','Core\ServiceController@destroy');
Route::post('admin/upload-addproduct-service','Core\ServiceController@storeproduct_service');

 //
//Type

Route::get("/admin/addproduct-type","Core\TypeController@create");
Route::post('/admin/upload-addproduct-type','Core\TypeController@store');
Route::get('show-producttype','Core\TypeController@show');
Route::get('/type-edit/{id}','Core\TypeController@edit');
Route::post('/admin/upload-type/{id}','Core\TypeController@update');
Route::get('/type-delete/{id}','Core\TypeController@destroy');




// Route::get('/show-product','ProductController@showproduct');
//patch
Route::get('/add-patch', 'Core\PatchController@create');//create a new patch 
Route::post('/admin/upload-addpatch','Core\PatchController@store');// store a new patch 
Route::get('/show-patch','Core\PatchController@show');//show patch
Route::get('/patch-edit/{id}','Core\PatchController@edit');//update patch 
Route::post('/admin/update-patch/{id}','Core\PatchController@update');
Route::get('/patch-delete/{id}','PatchController@destroy');


// property
Route::get('/add-property', 'Core\PropertyController@create');
Route::get('/show-properties', 'Core\PropertyController@show');
Route::post('/admin/upload-addproprty','Core\PropertyController@store');
Route::post('/admin/upload-addpatch-proprty','Core\PropertyController@storeptch_property');
//



//supplier
Route::get('add-supplier','Core\SupplierController@create');
Route::post('admin/upload-addsupplier','Core\SupplierController@store');
Route::get('show-supplier','Core\SupplierController@show');
Route::get('show-supplier/{id}','Core\SupplierController@show_supplier');//by id
Route::get('/supplier-edit/{id}','Core\SupplierController@edit');//update supplier 
Route::post('/admin/upload-supplier/{id}','Core\SupplierController@update');
Route::get('/supplier-delete/{id}','Core\SupplierController@delete');//delete

//Shipping

//Employee
Route::get('/add-employee','Shipping\EmployeeController@create');
Route::post('/admin/upload-addemployee','Shipping\EmployeeController@store');
Route::get('/show-employees','Shipping\EmployeeController@show');
Route::get('/employee-edit/{id}','Shipping\EmployeeController@edit');
Route::post('/admin/update-employee/{id}','Shipping\EmployeeController@update');
Route::get('/employee-delete/{id}','Shipping\EmployeeController@destroy');

//

//Shipping Company
Route::get('/add-shipping-company','Shipping\ShippingCompanyController@create');
Route::post('/admin/upload-addcompany','Shipping\ShippingCompanyController@store');
Route::get('/show-shipping-companies','Shipping\ShippingCompanyController@show');
Route::get('/company-edit/{id}','Shipping\ShippingCompanyController@edit');
Route::post('/admin/update-company/{id}','Shipping\ShippingCompanyController@update');
Route::get('/company-delete/{id}','Shipping\ShippingCompanyController@destroy');

//Shipping Company Agent
Route::get('/add-shipping-company-agent','Shipping\ShippingCompanyAgentController@create');
Route::post('/admin/upload-addcomany-agent','Shipping\ShippingCompanyAgentController@store');
Route::get('/show-shipping-company-agents','Shipping\ShippingCompanyAgentController@show');
Route::get('/agent-edit/{id}','Shipping\ShippingCompanyAgentController@edit');
Route::post('/admin/update-agent/{id}','Shipping\ShippingCompanyAgentController@update');
Route::get('/agent-delete/{id}','Shipping\ShippingCompanyAgentController@destroy');

//Clients
Route::get('/add-client','Shipping\ClientController@create');
Route::post('/admin/upload-addclient','Shipping\ClientController@store');
Route::get('/show-clients','Shipping\ClientController@show');
Route::get('/edit-client/{id}','Shipping\ClientController@edit');
Route::post('/admin/update-agent/{id}','Shipping\ClientController@update');
Route::get('/delete-client/{id}','Shipping\ClientController@destroy');

//Orders
Route::get('/add-order','Shipping\OrderController@create');
Route::get('/add-order-statuse/{id}','Shipping\OrderController@create_statuse');
Route::post('admin/upload-addorder','Shipping\OrderController@store');
Route::post('admin/upload-addorder','Shipping\OrderController@store');
Route::get('/show-orders','Shipping\OrderController@show');
Route::get('/edit-client/{id}','Shipping\OrderController@edit');
Route::post('/admin/update-agent/{id}','Shipping\OrderController@update');
Route::get('/delete-client/{id}','Shipping\OrderController@destroy');

//Order Statuses
Route::get('/add-order-statuse','Shipping\OrderStatuseController@create');
Route::post('/admin/upload-addstatuse','Shipping\OrderStatuseController@store');
Route::get('/show-order-statuses','Shipping\OrderStatuseController@show');
Route::get('/statuse-edit/{id}','Shipping\OrderStatuseController@edit');
Route::post('/admin/update-statuse/{id}','Shipping\OrderStatuseController@update');
Route::get('/statuse-delete/{id}','Shipping\OrderStatuseController@destroy');

//Order Items

Route::get('/add-order-item','Shipping\OrderItemController@create');
Route::post('/admin/upload-order-item','Shipping\OrderItemController@store');




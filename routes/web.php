<?php


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/** Route::get('/', function () {
*     // Listar customers
*     // $customers = \Charlie\Customer::all(); retorna todos os registros
*     // $customers = \Charlie\Customer::take(10)->get(); // retorna apenas os 10 primeiros
*     // $customers = \Charlie\Customer::paginate(10); //retorna 10 por paginas
*     // dd($customers->toArray());
*     // echo $customers->render(); // retorna ja com um html

*     // salvar no banco customers    
*     // $data = [
*     //     'name' => 'Wilker Alves Nogueira',
*     //     'city' => 'Osasco',
*     //     'state' => 'SP',
*     //     'special_customer' => true,
*     //     'birthdate' => '1993-03-08 00:00:00'
*     // ];

*     // $customer = Charlie\Customer::create($data); 
*     // dd($customer->toArray());

*     // // autalizar o registro do customer
*     // $data = [
*     //     'name' => 'Joana Darc',
*     //     'city' => 'Novo Oriente do Piaui'
*     // ];

*     // $customer = \Charlie\Customer::find(2); // buscando no banco e salvando na variavel customer
*     // // $customer->save();
*     // $customer->update($data);
* });*/

Route::get('/', function (){
    return 'Seja bem vindo ao curso de laravel Basico com Codecasts';
});

Route::group(['prefix' => 'admin'], function(){
    Route::resource('clientes','CustomersController');
});

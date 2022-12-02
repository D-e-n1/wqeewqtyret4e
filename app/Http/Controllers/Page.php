<?php 
namespace App\Http\Controllers; 
use App\Http\Controllers\Controller; 
class Page extends Controller 
{ 
public function showOne3()
{ 

return view('test.show', [ 
    'city' => ['name' => 'вася', 'age' => '25', 'salary' => '22'],
 'text' => '19.11.2022',
  'href' => 'https://https://www.date(format)',
    'location' => ['country'=> 'Russia', 'city'=>'Moscow'],
    'year'=> '2021',
    'mouth'=> 'december',
    'day'=> '17',
    'age'=> '19',

    ]    
    
);
} }

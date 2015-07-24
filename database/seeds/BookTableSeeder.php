<?php namespace App;    
  
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Book;

class BookTableSeeder extends Seeder {

  public function run()
  {
    
    $x = 0;

    while ($x < 100) {

    Book::create([
      'name' => 'My Summer Vacation Diary',
      'author' => 'Dr Suess'
    ]);

    Book::create([
      'name' => 'Favorite Recipes',
      'author' => 'Mario Batali'
    ]);

    Book::create([
      'name' => 'House Maintenance Notes',
      'author' => 'Bob Vila'
    ]);

    $x++;

  }

  }
 
}
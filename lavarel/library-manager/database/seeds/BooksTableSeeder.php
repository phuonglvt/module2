<?php

use Illuminate\Database\Seeder;
use App\Book;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $book = new Book();
        $book->id = 1;
        $book->subject = 'Toan';
        $book->name = 'Dai so tuyen tinh';
        $book->author = 'Cao Huy Linh';
        $book->status = 'sach moi';
        $book->category_id = 1;
        $book->save();
    }
}

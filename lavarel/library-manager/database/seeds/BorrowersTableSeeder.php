<?php

use Illuminate\Database\Seeder;
use App\Borrower;

class BorrowersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $borrower = new Borrower();
        $borrower->id = 1;
        $borrower->name = 'Nguyen Van A';
        $borrower->dob = '2000-08-12';
        $borrower->email = 'test@email.com';
        $borrower->class = 'toan 1T';
        $borrower->book_id = 1;
        $borrower->day_borrow = '2019-05-06';
        $borrower->day_pay = '2019-05-10';
        $borrower->save();
    }
}

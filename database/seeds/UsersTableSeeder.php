<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // reset the users table
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('users')->truncate();

        // generate 3 users/author
        DB::table('users')->insert([
          [
            'name' => "John Doe",
            'email' => "john.doe@qu4k3.com",
            'password' => bcrypt('secret')
          ],
          [
            'name' => "Jane Doe",
            'email' => "jane.doe@qu4k3.com",
            'password' => bcrypt('secret')
          ],
          [
            'name' => "Edo Doe",
            'email' => "edo.doe@qu4k3.com",
            'password' => bcrypt('secret')
          ],
        ]);
    }
}

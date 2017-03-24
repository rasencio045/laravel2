<?php
use App\User;
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
        $user = new User;
        $user->name = "rasencio";
        $user->email = "rasencio045@gmail.com";
        $user->password = "1234";
        $user->save();

        DB::table("users")->insert(["name"=>"julio",
          "email"=>"julio@gmail.com",
          "password"=>"5678"]);
    }
}

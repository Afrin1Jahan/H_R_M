<?php

namespace Database\Seeders;

use App\Models\Leavetype;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run():void
    {
        User::create([
            'name'=>'admin',
            'role'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('123456'),
        ]);

        $leave=['Casual','Annual','Medical'];
        foreach($leave as $l){
            Leavetype::create([
                'Leavename' =>$l,
                'Balance' => '10',
            ]);
        }
       
       
    }
}

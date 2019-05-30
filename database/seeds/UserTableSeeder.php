<?php
use Illuminate\Database\Seeder;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jherson = \App\User::create([
            'name' => 'Jherson Huahuatico',
            'dni' => '76696120',
            'cip' => null,
            'email' => 'metalero.jherson.zl@gmail.com',
            'password' => '$2y$12$e3j6mYHc2uouGQyOWXrWVewXfA7BVu4G5WY9CQKdPEyhfhhoawUla'
        ]);

        $benja =  \App\User::create([
            'name' => 'Benjamin Flores',
            'dni' => '77093962',
            'cip' => null,
            'email' => 'christianbfc97@gmail.com',
            'password' => '$2y$12$5uL78/T7wL6K5i5gYEjqteLyai3CQaDUSXP.pA7pNWaEnRken5Spe'
        ]);

        $roles = [
            'Super Admin' => \Spatie\Permission\Models\Role::create(['name' => 'Super Admin']),
            'Admin'  =>  \Spatie\Permission\Models\Role::create(['name' => 'Admin']),
            'User' => \Spatie\Permission\Models\Role::create(['name' => 'User']),
        ];

        $jherson->assignRole($roles['Super Admin']);
        $benja->assignRole($roles['Admin']);

        if(App::isLocal()){
            factory(\App\User::class, 20)->create()->each(function($user) use ($roles){
                $user->assignRole($roles['User']);
            });
        }
    }
}

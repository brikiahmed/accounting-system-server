<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ProviderSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(DepotSeeder::class);
        $this->call(BillSeeder::class);

    }
}

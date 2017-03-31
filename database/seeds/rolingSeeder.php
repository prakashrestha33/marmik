<?php

use App\Roleuser;
use Illuminate\Database\Seeder;

class rolingSeeder extends Seeder
{
    /**
     * @var Roleuser
     */
    private $roleuser;

    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function __construct(Roleuser $roleuser)
    {
        $this->roleuser = $roleuser;
    }

    public function run()
    {
        $this->roleuser->create([
            "user_id" => "1",
            "role_id" => "1",
        ]);
    }
}

<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AddAdminOnUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $user = new User;
        $user->email = 'support@fawacom.com.br';
        $user->email_verified_at = now();
        $user->name = 'Support';
        $user->password = '$2y$10$fCfW/6Yv8EhE6jbgm5etduS7mAydzANN2DjF1UvB/UCD8zGEXj5SW';
        $user->remember_token = Str::random(10);
        $user->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('users')->truncate();
    }
}

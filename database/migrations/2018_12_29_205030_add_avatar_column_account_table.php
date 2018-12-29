<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class AddAvatarColumnAccountTable
 * php artisan make:migration add_avatar_column_account_table --table=account
 * php artisan migrate
 *
 * if you want rollback
 * php artisan migrate:rollback --step=1
 *
 *
 * if you want migrate refresh
 * php artisan migrate:refresh
 */
class AddAvatarColumnAccountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('account', function (Blueprint $table) {
            //
            $table->string('avatar')->nullable();
            $table->unique('nick_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('account', function (Blueprint $table) {
            //
            $table->dropColumn('avatar');
            $table->dropUnique('account_nick_name_unique');
        });
    }
}

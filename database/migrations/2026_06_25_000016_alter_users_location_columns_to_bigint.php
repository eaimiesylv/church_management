<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Use raw statements to avoid requiring doctrine/dbal for change()
        DB::statement("ALTER TABLE `users` MODIFY `country_id` BIGINT UNSIGNED NULL DEFAULT 1");
        DB::statement("ALTER TABLE `users` MODIFY `state_of_origin_id` BIGINT UNSIGNED NULL");
        DB::statement("ALTER TABLE `users` MODIFY `lga_id` BIGINT UNSIGNED NULL");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("ALTER TABLE `users` MODIFY `country_id` TINYINT UNSIGNED NULL DEFAULT 1");
        DB::statement("ALTER TABLE `users` MODIFY `state_of_origin_id` TINYINT UNSIGNED NULL");
        DB::statement("ALTER TABLE `users` MODIFY `lga_id` TINYINT UNSIGNED NULL");
    }
};

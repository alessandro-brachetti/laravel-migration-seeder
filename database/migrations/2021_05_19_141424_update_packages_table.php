<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('packages', function (Blueprint $table) {
        $table->smallInteger('available_seats')->unsigned()->after('flight_number');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('packages', function (Blueprint $table) {
        $table->dropColumn('available_seats');
      });
    }
}

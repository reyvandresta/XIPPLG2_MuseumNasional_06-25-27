<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::table('koleksis', function (Blueprint $table) {
        if (!Schema::hasColumn('koleksis', 'grup_koleksi_id')) {
            $table->foreignId('grup_koleksi_id')->nullable()->constrained('grupkoleksis')->onDelete('cascade');
        }
    });
}

    public function down()
    {
        Schema::table('koleksis', function (Blueprint $table) {
            if (Schema::hasColumn('koleksis', 'grup_koleksi_id')) {
                $table->dropForeign(['grup_koleksi_id']);
                $table->dropColumn('grup_koleksi_id');
            }
        });
    }


};

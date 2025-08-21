<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
/**
* Run the migrations.
*/
public function up(): void
{
Schema::table('coins', function (Blueprint $table) {
$table->json('related')->nullable()->after('country'); // عمود لتخزين العملات المشابهة
});
}

/**
* Reverse the migrations.
*/
public function down(): void
{
Schema::table('coins', function (Blueprint $table) {
$table->dropColumn('related');
});
}
};

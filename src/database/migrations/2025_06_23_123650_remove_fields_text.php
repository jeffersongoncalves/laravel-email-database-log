<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class RemoveFieldsText extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::table('email_log', function (Blueprint $table) {
            $table->dropColumn('body');
            $table->dropColumn('headers');
            $table->dropColumn('attachments');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::table('email_log', function (Blueprint $table) {
            $table->text('body')->nullable();
            $table->text('headers')->nullable();
            $table->text('attachments')->nullable();
		});
	}

}

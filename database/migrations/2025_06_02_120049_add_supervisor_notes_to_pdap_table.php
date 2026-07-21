public function up()
{
    Schema::table('pdap', function (Blueprint $table) {
        $table->text('supervisor_notes')->nullable()->after('skills_to_acquire');
    });
}

public function down()
{
    Schema::table('pdap', function (Blueprint $table) {
        $table->dropColumn('supervisor_notes');
    });
}

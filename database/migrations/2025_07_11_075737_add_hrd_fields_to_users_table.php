<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('full_name')->nullable()->after('name');
            $table->string('golongan')->nullable();
            $table->string('NUPTK')->nullable();
            $table->string('NIK_Karyawan')->nullable();
            $table->string('status')->nullable();
            $table->date('contract_start_date')->nullable();
            $table->date('contract_end_date')->nullable();
            $table->date('internship_start_date')->nullable();
            $table->date('internship_end_date')->nullable();
            $table->date('work_date')->nullable();
            $table->string('PPKWT')->nullable();
            $table->string('position')->nullable();
            $table->string('gender')->nullable();
            $table->string('place_birth')->nullable();
            $table->date('birth_date')->nullable();
            $table->string('religion')->nullable();
            $table->string('hobby')->nullable();
            $table->string('marital_status')->nullable();
            $table->text('residence_address')->nullable();
            $table->string('phone')->nullable();
            $table->text('address_emergency')->nullable();
            $table->string('phone_emergency')->nullable();
            $table->string('blood_type')->nullable();
            $table->string('last_education')->nullable();
            $table->string('agency')->nullable();
            $table->year('graduation_year')->nullable();
            $table->string('competency_training_place')->nullable();
            $table->text('organizational_experience')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'full_name',
                'nickname',
                'golongan',
                'NUPTK',
                'NIK_Karyawan',
                'status',
                'contract_start_date',
                'contract_end_date',
                'internship_start_date',
                'internship_end_date',
                'work_date',
                'PPKWT',
                'position',
                'gender',
                'place_birth',
                'birth_date',
                'religion',
                'hobby',
                'marital_status',
                'residence_address',
                'phone',
                'address_emergency',
                'phone_emergency',
                'blood_type',
                'last_education',
                'agency',
                'graduation_year',
                'competency_training_place',
                'organizational_experience',
            ]);
        });
    }
};

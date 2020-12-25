<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->string('school')->comment('Учебная дисциплина');
            $table->integer('semestr')->comment('Количество студентов в учебной группе на окончание семестра');
            $table->integer('students_five')->comment('количество студентов, получивших по результатам учебного периода оценку «5»');
            $table->integer('students_four')->comment('количество студентов, получивших по результатам учебного периода оценку «4»');
            $table->integer('students_three')->comment('количество студентов, получивших по результатам учебного периода оценку «3»');
            $table->integer('students_two')->comment('количество студентов, получивших по результатам учебного периода оценку «2» или не аттестацию');
            $table->integer('procent_five')->comment('количество студентов, получивших по результатам учебного периода оценку «5»');
            $table->integer('procent_four')->comment('количество студентов, получивших по результатам учебного периода оценку «4»');
            $table->integer('procent_three')->comment('количество студентов, получивших по результатам учебного периода оценку «3»');
            $table->integer('procent_two')->comment('количество студентов, получивших по результатам учебного периода оценку «2» или не аттестацию');
            $table->integer('kpy')->comment('вычисление качественного показателя успеваемости (КПУ)');
            $table->integer('py')->comment('вычисление абсолютный показатель успеваемости (ПУ)');
            $table->integer('ca')->comment('вычисление среднего балла (С/А)');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reports');
    }
}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicalReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicalrecords', function (Blueprint $table) {
            $table->increments('id');
            $table->string('client_id');
            $table->string('laserTreatment');
            $table->string('laserHistory');
            $table->string('healthConditions');
            $table->string('sunReaction');
            $table->string('sensitiveSkin');
            $table->string('skinProblems');
            $table->string('skinMarkings');
            $table->string('skinMarkingsLocation');
            $table->string('xRayTreatment');
            $table->string('xRayTreatmentDetails');
            $table->string('pdt');
            $table->string('pdtDetails');
            $table->string('peels');
            $table->string('botox');
            $table->string('presentMedication');
            $table->string('epilepsy');
            $table->string('faintingAttacks');
            $table->string('excessiveBleeding');
            $table->string('heartProblems');
            $table->string('bloodPressure');
            $table->string('heartValve');
            $table->string('diabetes');
            $table->string('pregnant');
            $table->string('breastfeeding');
            $table->string('takingMedications');
            $table->string('receivingTreatment');
            $table->string('dermatologicalCondition');
            $table->string('hormoneAbnormalities');
            $table->string('herpesColdSores');
            $table->string('liverProblems');
            $table->string('hepatitis');
            $table->string('chestInfection');
            $table->string('excessiveReaction');
            $table->string('sensitivitySunlight');
            $table->string('bloodDiseases');
            $table->string('hospitalAdmissions');
            $table->string('bruise');
            $table->string('warningCard');
            $table->string('healingDisorder');
            $table->string('pigmentationChanges');
            $table->string('treatmentAreaMarkings');
            $table->string('suntan');
            $table->string('sunbed');
            $table->string('sunbedFrequency');
            $table->string('vacation');
            $table->string('hairGrowth');
            $table->string('epilationMethods');
            $table->string('epilationFrequency');
            $table->string('hairColour');
            $table->string('hairTexture');
            $table->string('hairBleaching');
            $table->string('bleaching');
            $table->string('previousVeinTreatments');
            $table->string('veinTrigger');
            $table->string('veinTriggerReason');
            $table->string('veinLocation');
            $table->string('veinSize');
            $table->string('veinColour');
            $table->string('recentLesion');
            $table->string('lesionChanged');
            $table->string('lesionDiagnosed');
            $table->string('lesionInformation');
            $table->string('clientExpectations');
            $table->timestamp('created_at')->useCurrent();;
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('medicalrecords');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class MedicalRecord extends Model
{
    protected $fillable = ['client_id', 'laserTreatment', 'laserHistory', 'healthConditions', 'sunReaction',
        'sensitiveSkin', 'skinProblems', 'skinMarkings', 'skinMarkingsLocation', 'xRayTreatment','xRayTreatmentDetails',
        'pdt', 'pdtDetails', 'peels', 'botox', 'presentMedication', 'epilepsy', 'faintingAttacks', 'excessiveBleeding',
        'heartProblems', 'bloodPressure', 'heartValve', 'diabetes', 'pregnant', 'breastfeeding', 'takingMedications',
        'receivingTreatment', 'dermatologicalCondition', 'hormoneAbnormalities', 'herpesColdSores', 'liverProblems',
        'hepatitis', 'chestInfection', 'excessiveReaction', 'sensitivitySunlight', 'bloodDiseases',
        'hospitalAdmissions', 'bruise', 'warningCard', 'healingDisorder', 'pigmentationChanges',
        'treatmentAreaMarkings', 'suntan', 'sunbed', 'sunbedFrequency', 'vacation', 'hairGrowth', 'epilationMethods',
        'epilationFrequency', 'hairColour', 'hairTexture', 'hairBleaching', 'bleaching', 'previousVeinTreatments',
        'veinTrigger', 'veinTriggerReason', 'veinLocation', 'veinSize', 'veinColour', 'recentLesion', 'lesionChanged',
        'lesionDiagnosed', 'lesionInformation', 'clientExpectations'];


    public function insertMedicalRecord(array $medRec){
        DB::table('medicalrecords')->insert($medRec);

    }

}

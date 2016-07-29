@extends('layouts.app')

@section('content')
    <h1>Medical History</h1>
    <p>Please complete the following forms. The information provide will be used to ensure we offer a safe and relaible
        treatment and the information supplied will be stored within a secured database. We do not sell on client
        information to anyone and we follow the Data Protection Act best practices in terms to your personal information.
    </p>

    <h2>Personal Information</h2>
    <form method="post" action="{{ url ('/processMedHistory')}}">
        {{ csrf_field() }}
        <label for="dob">Date of Birth</label>
        <input type="date" name="DateOfBirth">
        <br>
        <label for="gender">Gender</label>
        <input type="radio" name="gender" value="male" checked> Male
        <input type="radio" name="gender" value="female"> Female
        <input type="radio" name="gender" value="other"> Other
        <br>
        <label for="firstName">First Name:</label>
        <input type="text" name="firstName">
        <br>
        <label for="middleName">Middle Name(s):</label>
        <input type="text" name="middleName">
        <br>
        <label for="lastName">Last Name:</label>
        <input type="text" name="lastName">
        <br>
        <label for="address">Address</label>
        <input type="text" name="address1" placeholder="Street name and number or house name">
        <input type="text" name="address2">
        <input type="text" name="address3">
        <input type="text" name="postcode" placeholder="Postcode">
        <br>
        <label for="telephone">Contact Numbers</label>
        <input type="text" name="homeTel" placeholder="Home Telephone">
        <input type="text" name="mobTel" placeholder="Mobile Telephone">
        <input type="text" name="workTel" placeholder="Work Telephone">
        <br>
        <br>
        <p>Have you ever had laser treatment before:</p>
        <input type="radio" name="laserTreatment" value="yes"> Yes
        <input type="radio" name="laserTreatment" value="no" checked> No
        <br>
        <p>If yes, for what reason(s)?</p>
        <textarea name="laserHistory" placeholder="Reasons for previous laser treatment"></textarea>
        <br>
        <p>Do you have any serious health conditions:</p>
        <input type="radio" name="healthConditions" value="yes"> Yes
        <input type="radio" name="healthConditions" value="no" checked> No
        <br>
        <br>
        <!-- RESULTS BELOW WILL NEED THEIR OWN TABLE TO CONFORM WITH NORMALISATION-->
        <h4>When you go into the sun without a tan, do you:</h4>
        <input type="radio" name="sunReaction" value="1"> Always burn/never tan with ease.
        <input type="radio" name="sunReaction" value="2"> Usually burn/difficulty tanning.
        <input type="radio" name="sunReaction" value="3" checked> Sometimes burn/average tan.
        <input type="radio" name="sunReaction" value="4"> Rarely burn/tan with ease.
        <input type="radio" name="sunReaction" value="5"> Very rarely burn/tan with ease.
        <input type="radio" name="sunReaction" value="6"> Never burn/tan very easily.
        <br>
        <p>Do you have sensitive skin?</p>
        <input type="radio" name="sensitiveSkin" value="Yes"> Yes
        <input type="radio" name="sensitiveSkin" value="No" checked> No
        <br>
        <p>Have you ever had a skin problem or been under the care of a dermatologist? if yes, please describe (including dates under care):</p>
        <textarea name="skinProblems"></textarea>
        <br>
        <p>Do you have any implants, tattoos or permanent makeup in / on the area to be treated</p>
        <input type="radio" name="skinMarkings" value="Yes"> Yes
        <input type="radio" name="skinMarkings" value="No" checked> No
        <br>
        <textarea name="skinMarkingsLocation" placeholder="If yes please write the location here?"></textarea>
        <br>
        <p>Have you ever had X-ray treatement or radiation therapy on your skin?</p>
        <input type="radio" name="xRayTreatment" value="Yes"> Yes
        <input type="radio" name="xRayTreatment" value="No" checked> No
        <br>
        <textarea name="xRayTreatmentDetails" placeholder="If yes please state date diagnosed / treated?"></textarea>
        <br>
        <p>Have you ever had Photodynamic Therapy (PDT)?</p>
        <input type="radio" name="pdt" value="Yes"> Yes
        <input type="radio" name="pdt" value="No" checked> No
        <br>
        <textarea name="pdtDetails" placeholder="If yes please state date diagnosed / treated?"></textarea>
        <br>
        <p>Have you ever used or had Renova or Retin A, Alpha hydroxyl, Glocolic Acid or other cosmetic peels?</p>
        <input type="radio" name="peels" value="Yes"> Yes
        <input type="radio" name="peels" value="No" checked> No
        <br>
        <p>Have you ever had Botox or fillers</p>
        <input type="radio" name="botox" value="Yes"> Yes
        <input type="radio" name="botox" value="No" checked> No
        <br>
        <p><strong>Present Medications</strong> Do you take any medications, drugs or over the counter preparations / remedies?
        (e.g. Roaccutane, Isotretinoin or other retinoids, St John's Wort, Amiodarone, Minocycline, Minocin, Dianette
            or other contraceptive pill, any steriods, Warfarin or other blood thinners, any iron supplements) (Please
            list <em>any</em> medications or herbal remedies and where possible, date started, how many milligrams, how
            many times per day).</p>
        <textarea name="presentMedication"></textarea>
        <br>
        <h4>DO YOU HAVE OR HAVE YOU EVER SUFFERED FROM:</h4>
        <p>Epilepsy?
        <input type="radio" name="epilepsy" value="Yes"> Yes
        <input type="radio" name="epilepsy" value="No" checked> No
        </p>
        <p>Giddiness of fainting attacks?
            <input type="radio" name="faintingAttacks" value="Yes"> Yes
            <input type="radio" name="faintingAttacks" value="No" checked> No
        </p>
        <p>Excessive bleeding?
            <input type="radio" name="excessiveBleeding" value="Yes"> Yes
            <input type="radio" name="excessiveBleeding" value="No" checked> No
        </p>
        <p>Heart attack or heart problems?
            <input type="radio" name="heartProblems" value="Yes"> Yes
            <input type="radio" name="heartProblems" value="No" checked> No
        </p>
        <p>High/low blood pressure?
            <input type="radio" name="bloodPressure" value="Yes"> Yes
            <input type="radio" name="bloodPressure" value="No" checked> No
        </p>
        <p>Heart valve replacement?
            <input type="radio" name="heartValve" value="Yes"> Yes
            <input type="radio" name="heartValve" value="No" checked> No
        </p>
        <p>Diabetes (you or a family memeber)?
            <input type="radio" name="diabetes" value="Yes"> Yes
            <input type="radio" name="diabetes" value="No" checked> No
        </p>
        <p>Any allergies? Drugs / latex etc?
            <input type="radio" name="diabetes" value="Yes"> Yes
            <input type="radio" name="diabetes" value="No" checked> No
        </p>
        <br>
        <h4>ARE YOU:</h4>
        <p>Likely to be pregnant?
            <input type="radio" name="pregnant" value="Yes"> Yes
            <input type="radio" name="pregnant" value="No" checked> No
        </p>
        <p>Breastfeeding?
            <input type="radio" name="breastfeeding" value="Yes"> Yes
            <input type="radio" name="breastfeeding" value="No" checked> No
        </p>
        <p>Taking any prescribed or bought medicines?
            <input type="radio" name="takingMedications" value="Yes"> Yes
            <input type="radio" name="takingMedications" value="No" checked> No
        </p>
        <p>Receiving any other medical treatment?
            <input type="radio" name="receivingTreatment" value="Yes"> Yes
            <input type="radio" name="receivingTreatment" value="No" checked> No
        </p>
        <h4>HAVE YOU EVER HAD:</h4>
        <p>Dermatological conditions (e.g. acne, eczema, psoriasis, scaring, or skin lesions)?
            <input type="radio" name="dermatologicalCondition" value="Yes"> Yes
            <input type="radio" name="dermatologicalCondition" value="No" checked> No
        </p>
        <p>Hormone abnormalities?
            <input type="radio" name="hormoneAbnormalities" value="Yes"> Yes
            <input type="radio" name="hormoneAbnormalities" value="No" checked> No
        </p>
        <p>Previous herpes/cold sores outbreak?
            <input type="radio" name="herpesColdSores" value="Yes"> Yes
            <input type="radio" name="herpesColdSores" value="No" checked> No
        </p>
        <p>Jaundice or liver problems?
            <input type="radio" name="liverProblems" value="Yes"> Yes
            <input type="radio" name="liverProblems" value="No" checked> No
        </p>
        <p>Hepatitis?
            <input type="radio" name="hepatitis" value="Yes"> Yes
            <input type="radio" name="hepatitis" value="No" checked> No
        </p>
        <p>Chest infection (e.g. asthma, bronchitis)?
            <input type="radio" name="chestInfection" value="Yes"> Yes
            <input type="radio" name="chestInfection" value="No" checked> No
        </p>
        <p>Excessive reaction to nettle/wasp stings?
            <input type="radio" name="excessiveReaction" value="Yes"> Yes
            <input type="radio" name="excessiveReaction" value="No" checked> No
        </p>
        <p>Sensitivity to sunlight i.e. prickly heat?
            <input type="radio" name="sensitivitySunlight" value="Yes"> Yes
            <input type="radio" name="sensitivitySunlight" value="No" checked> No
        </p>
        <p>Blood related diseases/disorders?
            <input type="radio" name="bloodDiseases" value="Yes"> Yes
            <input type="radio" name="bloodDiseases" value="No" checked> No
        </p>
        <p>Any hospital admissions/treatment in the past 3 months?
            <input type="radio" name="hospitalAdmissions" value="Yes"> Yes
            <input type="radio" name="hospitalAdmissions" value="No" checked> No
        </p>
        <h4>DO YOU:</h4>
        <p>Bruise easily?
            <input type="radio" name="bruise" value="Yes"> Yes
            <input type="radio" name="bruise" value="No" checked> No
        </p>
        <p>Carry a warning card?
            <input type="radio" name="warningCard" value="Yes"> Yes
            <input type="radio" name="warningCard" value="No" checked> No
        </p>
        <p>Have any healing/scarring disorders (e.g. keliod scarring)
            <input type="radio" name="healingDisorder" value="Yes"> Yes
            <input type="radio" name="healingDisorder" value="No" checked> No
        </p>
        <p>Have a history of pigmentation changes? (e.g. melasma/chloasma, vitiligo)?
            <input type="radio" name="pigmentationChanges" value="Yes"> Yes
            <input type="radio" name="pigmentationChanges" value="No" checked> No
        </p>
        <p>Have any moles/naevi/tattoos/lesions in the treatment area?
            <input type="radio" name="treatmentAreaMarkings" value="Yes"> Yes
            <input type="radio" name="treatmentAreaMarkings" value="No" checked> No
        </p>
        <h4>LIGHT BASED THERAPY SPECIFIC</h4>
        <p>Do you have a sun tan?
            <input type="radio" name="suntan" value="Yes"> Yes
            <input type="radio" name="suntan" value="No" checked> No
        </p>
        <p>Have you used a sunbed?
            <input type="radio" name="sunbed" value="Yes"> Yes
            <input type="radio" name="sunbed" value="No" checked> No
            <input type="text" name="sunbedFrequency" placeholder="If Yes frequency and last used?">
        </p>
        <p>Are you planning a vacation (sun based)?
            <input type="radio" name="vacation" value="Yes"> Yes
            <input type="radio" name="vacation" value="No" checked> No
        </p>
        <h4>HAIR REMOVAL SPECIFIC</h4>
        <p>Have any problems relating to hair growth?
            <input type="radio" name="hairGrowth" value="Yes"> Yes
            <input type="radio" name="hairGrowth" value="No" checked> No
        </p>
        <p>Previous epilation methods
            <input type="radio" name="epilationMethods" value="Yes"> Yes
            <input type="radio" name="epilationMethods" value="No" checked> No
            <input type="text" name="epilationFrequency" placeholder="if yes how frequent and last used?">
        </p>
        <p>Hair Colour?
            <input type="radio" name="hairColour" value="black"> Black
            <input type="radio" name="hairColour" value="dark brown" checked> Dark Brown
            <input type="radio" name="hairColour" value="brown"> Brown
            <input type="radio" name="hairColour" value="Red" checked> Red
            <input type="radio" name="hairColour" value="Blonde"> Blonde
            <input type="radio" name="hairColour" value="Grey" checked> Grey
        </p>
        <p>Hair Texture?
            <input type="radio" name="hairTexture" value="coarse"> Coarse
            <input type="radio" name="hairTexture" value="medium" checked> Medium
            <input type="radio" name="hairTexture" value="fine"> Fine
        </p>
        <p>Hair bleaching products?
            <input type="radio" name="hairBleaching" value="Yes"> Yes
            <input type="radio" name="hairBleaching" value="No" checked> No
            <input type="text" name="bleaching" placeholder="Details">
        </p>
        <h4>VASCULAR THERAPY SPECIFIC</h4>
        <p>Have you had previous vein treatments?
            <input type="radio" name="previousVeinTreatments" value="Yes"> Yes
            <input type="radio" name="previousVeinTreatments" value="No" checked> No
        </p>
        <p>Is the appearance of the vessels triggered by heat/light/alcohol etc?
            <input type="radio" name="veinTrigger" value="Yes"> Yes
            <input type="radio" name="veinTrigger" value="No" checked> No
            <input type="text" name="veinTriggerReason" placeholder="Please write trigger if known">
        </p>
        <p><input type="text" name="veinLocation" placeholder="Location of vessels">
            <input type="text" name="veinSize" placeholder="Size of vessels">
            <input type="text" name="veinColour" placeholder="Colour of vessels">
        </p>
        <h4>PIGMENTED LESIONS SPECIFIC</h4>
        <p>Has the lesion appeared recently?
            <input type="radio" name="recentLesion" value="Yes"> Yes
            <input type="radio" name="recentLesion" value="No" checked> No
        </p>
        <p>Has the lesion changed shape, colour, size, texture, symmetry?
            <input type="radio" name="lesionChanged" value="Yes"> Yes
            <input type="radio" name="lesionChanged" value="No" checked> No
        </p>
        <p>Has the lesion been diagnosed by a GP / Medical practitioner?
            <input type="radio" name="lesionDiagnosed" value="Yes"> Yes
            <input type="radio" name="lesionDiagnosed" value="No" checked> No
        </p>
        <p>Other Information
            <textarea name="lesionInformation"></textarea>
        </p>
        <h4>CLIENT EXPECTATIONS OF THE TREATMENT</h4>
        <textarea name="clientExpectations" placeholder="What you expect from the treatment"></textarea>
        <br>
        <input type="checkbox" name="conformation"> I confirm that the information supplied is correct to my knowledge
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <br>

@endsection


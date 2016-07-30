@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row medhistory">
        <div class="col-md-8 col-md-offset-2">
            <h1>Medical History</h1>
            <p>Please complete the following forms. The information provide will be used to ensure we offer a safe and relaible
                treatment and the information supplied will be stored within a secured database. We do not sell on client
                information to anyone and we follow the Data Protection Act best practices in terms to your personal information.
            </p>
            <form method="post" action="{{ url ('/processMedHistory')}}">
                {{ csrf_field() }}
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">1. Personal Information</a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <div class="form-group">
                                    <label class="title" for="dob">Date of Birth</label>
                                    <input type="date" name="DateOfBirth" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="title" for="gender">Gender</label>
                                    <div class="r-buttons">
                                        <label class="radio-inline">
                                            <input type="radio" name="gender" value="male" checked> Male
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="gender" value="female"> Female
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="gender" value="other"> Other
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="title" for="firstName">First Name:</label>
                                    <input type="text" name="firstName" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="title" for="middleName">Middle Name(s):</label>
                                    <input type="text" name="middleName" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="title" for="lastName">Last Name:</label>
                                    <input type="text" name="lastName" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="title" for="address">Address</label>
                                    <input type="text" name="address1" placeholder="Street name and number or house name" class="form-control">
                                    <input type="text" name="address2" class="form-control">
                                    <input type="text" name="address3" class="form-control">
                                    <input type="text" name="postcode" placeholder="Postcode" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="title" for="telephone">Contact Numbers</label>
                                    <input type="text" name="homeTel" placeholder="Home Telephone" class="form-control">
                                    <input type="text" name="mobTel" placeholder="Mobile Telephone" class="form-control">
                                    <input type="text" name="workTel" placeholder="Work Telephone" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="title">Have you ever had laser treatment before:</label>
                                    <div class="r-buttons">
                                        <label class="radio-inline">
                                            <input type="radio" name="laserTreatment" value="yes"> Yes
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="laserTreatment" value="no" checked> No
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="title">If yes, for what reason(s)?</label>
                                    <textarea rows="5" cols="100" name="laserHistory" placeholder="Reasons for previous laser treatment" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="title">Do you have any serious health conditions:</label>
                                    <div class="r-buttons">
                                        <label class="radio-inline">
                                            <input type="radio" name="healthConditions" value="yes"> Yes
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="healthConditions" value="no" checked> No
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <!-- RESULTS BELOW WILL NEED THEIR OWN TABLE TO CONFORM WITH NORMALISATION-->
                                    <label class="title">When you go into the sun without a tan, do you:</label>
                                    <div class="r-buttons">
                                        <label class="radio-inline">
                                            <input type="radio" name="sunReaction" value="1"> Always burn/never tan with ease.
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="sunReaction" value="2"> Usually burn/difficulty tanning.
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="sunReaction" value="3" checked> Sometimes burn/average tan.
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="sunReaction" value="4"> Rarely burn/tan with ease.
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="sunReaction" value="5"> Very rarely burn/tan with ease.
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="sunReaction" value="6"> Never burn/tan very easily.
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="title">Do you have sensitive skin?</label>
                                    <div>
                                        <label class="radio-inline">
                                            <input type="radio" name="sensitiveSkin" value="Yes"> Yes
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="sensitiveSkin" value="No" checked> No
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="title">Have you ever had a skin problem or been under the care of a dermatologist? if yes, please describe (including dates under care):</label>
                                    <textarea rows="5" cols="100" name="skinProblems" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="title">Do you have any implants, tattoos or permanent makeup in / on the area to be treated?</label>
                                    <div class="r-buttons">
                                        <label class="radio-inline">
                                            <input type="radio" name="skinMarkings" value="Yes"> Yes
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="skinMarkings" value="No" checked> No
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea rows="5" cols="100" name="skinMarkingsLocation" placeholder="If yes please write the location here?" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="title">Have you ever had X-ray treatement or radiation therapy on your skin?</label>
                                    <div class="r-buttons">
                                        <label class="radio-inline">
                                            <input type="radio" name="xRayTreatment" value="Yes"> Yes
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="xRayTreatment" value="No" checked> No
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea rows="5" cols="100" name="xRayTreatmentDetails" placeholder="If yes please state date diagnosed / treated?" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="title">Have you ever had Photodynamic Therapy (PDT)?</label>
                                    <div class="r-buttons">
                                        <label class="radio-inline">
                                            <input type="radio" name="pdt" value="Yes"> Yes
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="pdt" value="No" checked> No
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea rows="5" cols="100" name="pdtDetails" placeholder="If yes please state date diagnosed / treated?" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="title">Have you ever used or had Renova or Retin A, Alpha hydroxyl, Glocolic Acid or other cosmetic peels?</label>
                                    <div class="r-buttons">
                                        <label class="radio-inline">
                                            <input type="radio" name="peels" value="Yes"> Yes
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="peels" value="No" checked> No
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="title">Have you ever had Botox or fillers</label>
                                    <div class="r-buttons">
                                        <label class="radio-inline">
                                            <input type="radio" name="botox" value="Yes"> Yes
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="botox" value="No" checked> No
                                        </label>
                                    </div>
                                </div>
                                <a class="accordion-toggle collapsed continue" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Continue to section two</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">2. Present Medications</a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                                <a class="accordion-toggle back" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Go back to section one</a>
                                <div class="form-group">
                                    <p>Do you take any medications, drugs or over the counter preparations / remedies?
                                    (e.g. Roaccutane, Isotretinoin or other retinoids, St John's Wort, Amiodarone, Minocycline, Minocin, Dianette
                                        or other contraceptive pill, any steriods, Warfarin or other blood thinners, any iron supplements) (Please
                                        list <em>any</em> medications or herbal remedies and where possible, date started, how many milligrams, how
                                        many times per day).</p>
                                    <textarea rows="5" cols="100" name="presentMedication" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <h5>Do you have or have you ever suffered from:</h5>
                                    <label class="title">Epilepsy?</label>
                                    <div class="r-buttons">
                                        <label class="radio-inline">
                                            <input type="radio" name="epilepsy" value="Yes"> Yes
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="epilepsy" value="No" checked> No
                                        </label>
                                    </div>
                                    <label class="title">Giddiness of fainting attacks?</label>
                                    <div class="r-buttons">
                                        <label class="radio-inline">
                                            <input type="radio" name="faintingAttacks" value="Yes"> Yes
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="faintingAttacks" value="No" checked> No
                                        </label>
                                    </div>

                                    <label class="title">Excessive bleeding?</label>
                                    <div class="r-buttons">
                                        <label class="radio-inline">
                                            <input type="radio" name="excessiveBleeding" value="Yes"> Yes
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="excessiveBleeding" value="No" checked> No
                                        </label>
                                    </div>
                                    <label class="title">Heart attack or heart problems?</label>
                                    <div class="r-buttons">
                                        <label class="radio-inline">
                                            <input type="radio" name="heartProblems" value="Yes"> Yes
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="heartProblems" value="No" checked> No
                                        </label>
                                    </div>
                                    <label class="title">High/low blood pressure?</label>
                                    <div class="r-buttons">
                                        <label class="radio-inline">
                                            <input type="radio" name="bloodPressure" value="Yes"> Yes
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="bloodPressure" value="No" checked> No
                                        </label>
                                    </div>
                                    <label class="title">Heart valve replacement?</label>
                                    <div class="r-buttons">
                                        <label class="radio-inline">
                                            <input type="radio" name="heartValve" value="Yes"> Yes
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="heartValve" value="No" checked> No
                                        </label>
                                    </div>
                                    <label class="title">Diabetes (you or a family member)?</label>
                                    <div class="r-buttons">
                                        <label class="radio-inline">
                                            <input type="radio" name="diabetes" value="Yes"> Yes
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="diabetes" value="No" checked> No
                                        </label>
                                    </div>
                                    <label class="title">Any allergies? Drugs / latex etc?</label>
                                    <div class="r-buttons">
                                        <label class="radio-inline">
                                            <input type="radio" name="diabetes" value="Yes"> Yes
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="diabetes" value="No" checked> No
                                        </label>
                                    </div>
                                </div>
                                <a class="accordion-toggle continue" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Continue to section three</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">3. Other Treatments</a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">
                                <a class="accordion-toggle back" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Go back to section two</a>
                                <div class="form-group">
                                    <h5>Are you:</h5>
                                    <label class="title">Likely to be pregnant?</label>
                                    <div class="r-buttons">
                                        <label class="radio-inline">
                                            <input type="radio" name="pregnant" value="Yes"> Yes
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="pregnant" value="No" checked> No
                                        </label>
                                    </div>
                                    <label class="title">Breastfeeding?</label>
                                    <div class="r-buttons">
                                        <label class="radio-inline">
                                            <input type="radio" name="breastfeeding" value="Yes"> Yes
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="breastfeeding" value="No" checked> No
                                        </label>
                                    </div>
                                    <label class="title">Taking any prescribed or bought medicines?</label>
                                    <div class="r-buttons">
                                        <label class="radio-inline">
                                            <input type="radio" name="takingMedications" value="Yes"> Yes
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="takingMedications" value="No" checked> No
                                        </label>
                                    </div>
                                    <label class="title">Receiving any other medical treatment?</label>
                                    <div class="r-buttons">
                                        <label class="radio-inline">
                                            <input type="radio" name="receivingTreatment" value="Yes"> Yes
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="receivingTreatment" value="No" checked> No
                                        </label>
                                    </div>
                                </div>
                                <a class="accordion-toggle continue" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">Continue to section four</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">4. Pre-existing Conditions</a>
                            </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse">
                            <div class="panel-body">
                                <a class="accordion-toggle back" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Go back to section three</a>
                                <div class="form-group">
                                    <h5>Have you ever suffered from:</h5>
                                    <label class="title">Dermatological conditions (e.g. acne, eczema, psoriasis, scaring, or skin lesions)?</label>
                                    <div class="r-buttons">
                                        <label class="radio-inline">
                                            <input type="radio" name="dermatologicalCondition" value="Yes"> Yes
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="dermatologicalCondition" value="No" checked> No
                                        </label>
                                    </div>
                                    <label class="title">Hormone abnormalities?</label>
                                    <div class="r-buttons">
                                        <label class="radio-inline">
                                            <input type="radio" name="hormoneAbnormalities" value="Yes"> Yes
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="hormoneAbnormalities" value="No" checked> No
                                        </label>
                                    </div>
                                    <label class="title">Previous herpes/cold sores outbreak?</label>
                                    <div class="r-buttons">
                                        <label class="radio-inline">
                                            <input type="radio" name="herpesColdSores" value="Yes"> Yes
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="herpesColdSores" value="No" checked> No
                                        </label>
                                    </div>
                                    <label class="title">Jaundice or liver problems?</label>
                                    <div class="r-buttons">
                                        <label class="radio-inline">
                                            <input type="radio" name="liverProblems" value="Yes"> Yes
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="liverProblems" value="No" checked> No
                                        </label>
                                    </div>
                                    <label class="title">Hepatitis?</label>
                                    <div class="title">
                                        <label class="radio-inline">
                                            <input type="radio" name="hepatitis" value="Yes"> Yes
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="hepatitis" value="No" checked> No
                                        </label>
                                    </div>
                                    <label class="title">Chest infection (e.g. asthma, bronchitis)?</label>
                                    <div class="r-buttons">
                                        <label class="radio-inline">
                                            <input type="radio" name="chestInfection" value="Yes"> Yes
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="chestInfection" value="No" checked> No
                                        </label>
                                    </div>
                                    <label class="title">Excessive reaction to nettle/wasp stings?</label>
                                    <div class="r-buttons">
                                        <label class="radio-inline">
                                            <input type="radio" name="excessiveReaction" value="Yes"> Yes
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="excessiveReaction" value="No" checked> No
                                        </label>
                                    </div>
                                    <label class="title">Sensitivity to sunlight i.e. prickly heat?</label>
                                    <div class="r-buttons">
                                        <label class="radio-inline">
                                            <input type="radio" name="sensitivitySunlight" value="Yes"> Yes
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="sensitivitySunlight" value="No" checked> No
                                        </label>
                                    </div>
                                    <label class="title">Blood related diseases/disorders?</label>
                                    <div class="r-buttons">
                                        <label class="radio-inline">
                                            <input type="radio" name="bloodDiseases" value="Yes"> Yes
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="bloodDiseases" value="No" checked> No
                                        </label>
                                    </div>
                                    <label class="title">Any hospital admissions/treatment in the past 3 months?</label>
                                    <div class="r-buttons">
                                        <label class="radio-inline">
                                            <input type="radio" name="hospitalAdmissions" value="Yes"> Yes
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="hospitalAdmissions" value="No" checked> No
                                        </label>
                                    </div>
                                </div>
                                <a class="accordion-toggle continue" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">Continue to section five</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">5. Other Factors</a>
                            </h4>
                        </div>
                        <div id="collapseFive" class="panel-collapse collapse">
                            <div class="panel-body">
                                <a class="accordion-toggle back" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">Go back to section four</a>
                                <div class="form-group">
                                    <h5>Do you:</h5>
                                    <label class="title">Bruise easily?</label>
                                    <div class="r-buttons">
                                        <label class="radio-inline">
>                                           <input type="radio" name="bruise" value="Yes"> Yes
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="bruise" value="No" checked> No
                                        </label>
                                    </div>
                                    <label class="title">Carry a warning card?</label>
                                    <div class="r-buttons">
                                        <label class="radio-inline">
                                            <input type="radio" name="warningCard" value="Yes"> Yes
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="warningCard" value="No" checked> No
                                        </label>
                                    </div>
                                    <label class="title">Have any healing/scarring disorders (e.g. keliod scarring)?</label>
                                    <div class="r-buttons">
                                        <label class="radio-inline">
                                            <input type="radio" name="healingDisorder" value="Yes"> Yes
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="healingDisorder" value="No" checked> No
                                        </label>
                                    </div>
                                    <label class="title">Have a history of pigmentation changes? (e.g. melasma/chloasma, vitiligo)?</label>
                                    <div class="r-buttons">
                                        <label class="radio-inline">
                                            <input type="radio" name="pigmentationChanges" value="Yes"> Yes
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="pigmentationChanges" value="No" checked> No
                                        </label>
                                    </div>
                                    <label class="title">Have any moles/naevi/tattoos/lesions in the treatment area?</label>
                                    <div class="r-buttons">
                                        <label class="radio-inline">
                                            <input type="radio" name="treatmentAreaMarkings" value="Yes"> Yes
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="treatmentAreaMarkings" value="No" checked> No
                                        </label>
                                    </div>
                                </div>
                                <a class="accordion-toggle continue" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">Continue to section six</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">6. Light Based Therapy Specific</a>
                            </h4>
                        </div>
                        <div id="collapseSix" class="panel-collapse collapse">
                            <div class="panel-body">
                                <a class="accordion-toggle back" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">Go back to section five</a>
                                <div class="form-group">
                                    <h5>Light based therapy specific:</h5>
                                    <label class=title>Do you have a sun tan?</label>
                                    <div class="r-buttons">
                                        <label class="radio-inline">
                                            <input type="radio" name="suntan" value="Yes"> Yes
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="suntan" value="No" checked> No
                                        </label>
                                    </div>
                                    <label class="title">Have you used a sunbed?</label>
                                    <div class="r-buttons">
                                        <label class="radio-inline">
                                            <input type="radio" name="sunbed" value="Yes"> Yes
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="sunbed" value="No" checked> No
                                        </label>
                                    </div>
                                        <input type="text" name="sunbedFrequency" placeholder="If Yes frequency and last used?" class="form-control">
                                    <label class="title">Are you planning a vacation (sun based)?</label>
                                    <div class="r-buttons">
                                        <label class="radio-inline">
                                            <input type="radio" name="vacation" value="Yes"> Yes
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="vacation" value="No" checked> No
                                        </label>
                                    </div>
                                </div>
                                <a class="accordion-toggle continue" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">Continue to section seven</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">7. Hair Removal Specific</a>
                            </h4>
                        </div>
                        <div id="collapseSeven" class="panel-collapse collapse">
                            <div class="panel-body">
                                <a class="accordion-toggle back" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">Go back to section six</a>
                                <div class="form-group">
                                    <h5>Hair removal specific:</h5>
                                    <label class="title">Have any problems relating to hair growth?</label>
                                    <div class="r-buttons">
                                        <label class="radio-inline">
                                            <input type="radio" name="hairGrowth" value="Yes"> Yes
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="hairGrowth" value="No" checked> No
                                        </label>
                                    </div>
                                    <label class="title">Previous epilation methods</label>
                                    <div class="r-buttons">
                                        <label class="radio-inline">
                                            <input type="radio" name="epilationMethods" value="Yes"> Yes
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="epilationMethods" value="No" checked> No
                                        </label>
                                    </div>
                                            <input type="text" name="epilationFrequency" placeholder="if yes how frequent and last used?" class="form-control">
                                    <label class="title">Hair Colour?</label>
                                    <div class="r-buttons">
                                        <label class="radio-inline">
                                            <input type="radio" name="hairColour" value="black"> Black
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="hairColour" value="dark brown" checked> Dark Brown
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="hairColour" value="brown"> Brown
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="hairColour" value="Red" checked> Red
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="hairColour" value="Blonde"> Blonde
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="hairColour" value="Grey" checked> Grey
                                        </label>
                                    </div>
                                    <label class="title">Hair Texture?</label>
                                    <div class="r-buttons">
                                        <label class="radio-inline">
                                            <input type="radio" name="hairTexture" value="coarse"> Coarse
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="hairTexture" value="medium" checked> Medium
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="hairTexture" value="fine"> Fine
                                        </label>
                                    </div>
                                    <label class="title">Hair bleaching products?</label>
                                    <div class="r-buttons">
                                        <label class="radio-inline">
                                            <input type="radio" name="hairBleaching" value="Yes"> Yes
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="hairBleaching" value="No" checked> No
                                        </label>
                                    </div>
                                    <input type="text" name="bleaching" placeholder="Details" class="form-control">
                                </div>
                                <a class="accordion-toggle continue" data-toggle="collapse" data-parent="#accordion" href="#collapseEight">Continue to section eight</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEight">8. Vascular Therapy Specific</a>
                            </h4>
                        </div>
                        <div id="collapseEight" class="panel-collapse collapse">
                            <div class="panel-body">
                                <a class="accordion-toggle back" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">Go back to section seven</a>
                                <div class="form-group">
                                    <h5>Vascular therapy specific:</h5>
                                    <label class="title">Have you had previous vein treatments?</label>
                                    <div class="r-buttons">
                                        <label class="radio-inline">
                                            <input type="radio" name="previousVeinTreatments" value="Yes"> Yes
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="previousVeinTreatments" value="No" checked> No
                                        </label>
                                    </div>
                                    <label class="title">Is the appearance of the vessels triggered by heat/light/alcohol etc?</label>
                                    <div class="r-buttons">
                                        <label class="radio-inline">
                                            <input type="radio" name="veinTrigger" value="Yes"> Yes
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="veinTrigger" value="No" checked> No
                                        </label>
                                    </div>
                                        <input type="text" name="veinTriggerReason" placeholder="Please write trigger if known" class="form-control">
                                        <input type="text" name="veinLocation" placeholder="Location of vessels" class="form-control">
                                        <input type="text" name="veinSize" placeholder="Size of vessels" class="form-control">
                                        <input type="text" name="veinColour" placeholder="Colour of vessels" class="form-control">
                                </div>
                                <a class="accordion-toggle continue" data-toggle="collapse" data-parent="#accordion" href="#collapseNine">Continue to section nine</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseNine">9. Pigmented Lesions Specific</a>
                            </h4>
                        </div>
                        <div id="collapseNine" class="panel-collapse collapse">
                            <div class="panel-body">
                                <a class="accordion-toggle back" data-toggle="collapse" data-parent="#accordion" href="#collapseEight">Go back to section eight</a>
                                <div class="form-group">
                                    <h5>Pigmented Lesions Specific:</h5>
                                    <label class="title">Has the lesion appeared recently?</label>
                                    <div class="r-buttons">
                                        <label class="radio-inline">
                                            <input type="radio" name="recentLesion" value="Yes"> Yes
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="recentLesion" value="No" checked> No
                                        </label>
                                    </div>
                                    <label class="title">Has the lesion changed shape, colour, size, texture, symmetry?</label>
                                    <div class="r-buttons">
                                        <label class="radio-inline">
                                            <input type="radio" name="lesionChanged" value="Yes"> Yes
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="lesionChanged" value="No" checked> No
                                        </label>
                                    </div>
                                    <label class="title">Has the lesion been diagnosed by a GP / Medical practitioner?</label>
                                    <div class="r-buttons">
                                        <label class="radio-inline">
                                            <input type="radio" name="lesionDiagnosed" value="Yes"> Yes
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="lesionDiagnosed" value="No" checked> No
                                        </label>
                                    </div>
                                    <label class="title">Other Information</label>
                                        <textarea rows="5" cols="100" name="lesionInformation" class="form-control"></textarea>
                                    <label class="title">Client expectations of the treatment</label>
                                    <textarea rows="5" cols="100" name="clientExpectations" placeholder="What you expect from the treatment" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="confirmation">
                        <input type="checkbox" name="confirmation" required> I confirm that the information supplied is correct to my knowledge
                    </div>
                    <button type="submit" name="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection


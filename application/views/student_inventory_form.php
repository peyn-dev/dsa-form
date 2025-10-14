<!DOCTYPE html>
<html>
<head>
    <title>Student Inventory Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url('public/assets/student_inventory_form.css'); ?>">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
</head> 
<body>
    <?php if (!empty($message)) : ?>
    <p><?= $message; ?></p>
    <?php endif; ?>    

    <form action="<?php echo site_url('dbtest/submit'); ?>" method="post">
      <h3>Student Individual Inventory Record Form</h3>
      <p>Please complete this Inventory as accurately and honestly as you can.
        The purpose of collecting this information <br> is to be assistance to you
        in making choices and decisions. All information which you provide about
        yourself will <br> be treated with utmost confindentiality.
      </p>
 
       <div class="profile-card">
        <div class="profile-image">
          <img src="../../public/assets/UserIcon.svg" alt="Profile Image"">
        </div>
        <div class="profile-info">
          <strong>Gigi Hadid</strong>
          <span class="course">BS Information Technology (Database Track) <br> 2014 72616</span>
        </div>
      </div>

      <div class="section">I. Personal Information</div>
      <div class="horizontal-line"></div>
      <h4>Basic Information</h4><br> 

        
        <div class="label-name">
          <label for="height">Height(m) <span class="required">*</span></label>
          <label for="weight">Weight(kg) <span class="required">*</span></label>
        </div>
        <div class="height-weight">
          <input type="number" name="height" required value="<?= $studentProfile["HEIGHT"]; ?>"/>   
          <input type="number" name="weight" required value="<?= $studentProfile["WEIGHT"]; ?>">
        </div>

        
      <div class="pu-demographic-label">
        <label>Tribe<span class="required">*</span></label>
        <label for="weight">Civil Status <span class="required">*</span></label>
      </div>
      
      <div class="pu-demographic-input">
      <select name="tribe" id="tribeDropdown" required>
        <option value="<?= $studentProfile['TRIBE']; ?>" selected>
          <?= $studentProfile['TRIBE']; ?>
        </option>

          <!-- Luzon -->
          <optgroup label="Luzon">
            <option value="Tagalog">Tagalog</option>
            <option value="Ilocano">Ilocano</option>
            <option value="Kapampangan">Kapampangan</option>
            <option value="Pangasinense">Pangasinense</option>
            <option value="Bicolano">Bicolano</option>
            <option value="Ivatan">Ivatan</option>
            <option value="Igorot (Ifugao)">Igorot (Ifugao)</option>
              <option value="Igorot (Kankanaey)">Igorot (Kankanaey)</option>
              <option value="Igorot (Bontok)">Igorot (Bontok)</option>
              <option value="Igorot (Ibaloi)">Igorot (Ibaloi)</option>
              <option value="Igorot (Kalinga)">Igorot (Kalinga)</option>
              <option value="Igorot (Gaddang)">Igorot (Gaddang)</option>
              <option value="Igorot (Itawes)">Igorot (Itawes)</option>
              <option value="Mangyan">Mangyan</option>
              <option value="Aeta/Agta">Aeta/Agta</option>
          </optgroup>

          <!-- Visayas -->
          <optgroup label="Visayas">
              <option value="Cebuano/Bisaya">Cebuano/Bisaya</option>
              <option value="Boholano">Boholano</option>
              <option value="Hiligaynon/Ilonggo">Hiligaynon/Ilonggo</option>
              <option value="Waray">Waray</option>
              <option value="Aklanon">Aklanon</option>
              <option value="Surigaonon">Surigaonon</option>
              <option value="Butuanon">Butuanon</option>
              <option value="Siquijodnon">Siquijodnon</option>
              <option value="Ati">Ati</option>
          </optgroup>

          <!-- Mindanao - Lumad -->
          <optgroup label="Mindanao – Lumad Tribes">
              <option value="Manobo (Agusanon)">Manobo (Agusanon)</option>
              <option value="Manobo (Tagakaulo)">Manobo (Tagakaulo)</option>
              <option value="Manobo (Talaandig)">Manobo (Talaandig)</option>
              <option value="Mandaya">Mandaya</option>
              <option value="Mansaka">Mansaka</option>
              <option value="Bagobo">Bagobo</option>
              <option value="Banwaon">Banwaon</option>
              <option value="Higaonon">Higaonon</option>
              <option value="Subanen">Subanen</option>
              <option value="B’laan">B’laan</option>
              <option value="T’boli">T’boli</option>
              <option value="Mamanwa">Mamanwa</option>
          </optgroup>

          <!-- Mindanao - Moro -->
          <optgroup label="Mindanao – Moro Tribes">
              <option value="Maranao">Maranao</option>
              <option value="Maguindanao">Maguindanao</option>
              <option value="Tausug">Tausug</option>
              <option value="Sama-Bajau">Sama-Bajau</option>
              <option value="Yakan">Yakan</option>
              <option value="Kalagan">Kalagan</option>
              <option value="Iranun">Iranun</option>
              <option value="Jama Mapun">Jama Mapun</option>
          </optgroup>
   
          <optgroup label="Other Distinct Groups">
              <option value="Agutaynen">Agutaynen</option>
              <option value="Cuyunon">Cuyunon</option>
              <option value="Palaw’an">Palaw’an</option>
              <option value="Batak">Batak</option>
          </optgroup>
         
          <optgroup label="Others">
              <option value="Others">Others (please specify)</option>
          </optgroup>
      </select>

      
      <select class="pu-select" name="civilstatus" required>
        <option value="<?= $studentProfile['CIVILSTATUS']; ?>" selected>
          <?= $studentProfile['CIVILSTATUS']; ?>
        </option>
          <option value="Single">Single</option>
          <option value="Married">Married</option>
          <option value="Separated">Separated</option>
          <option value="Widowed">Widowed</option>
          <option value="Solo Parent">Solo Parent</option>  
      </select>
      </div>
      
      
      <div id="otherTribeDiv" style="display:none; margin-top:10px;">
          <label>Please specify your tribe:</label>
          <input type="text" name="othertribe" id="otherTribeInput" placeholder="Enter your tribe" value="<?= $studentProfile["OTHERTRIBE"]; ?>" />
      </div>
      
        <label>Present Address</label>
        <input type="text" name="presentaddress" required>
        <h4>In case of emergency</h4>

        <div class="label-name">
          <label for="height">Contact Person<span class="required">*</span></label>
          <label for="weight">Address<span class="required">*</span></label>
        </div>
        <div class="height-weight">
          <input type="text" name="contactperson" required>   
          <input type="text" name="contactpersonaddress" required>
        </div>

        <div class="label-name">
          <label for="height">Contact Number</label>
          <label for="weight">Relationship</label>
        </div>
        <div class="height-weight">
          <input type="number" name="contactnumber" required>
          <input type="text" name="relationship" required>
        </div>
        <h4>Employment Status</h4>
        <label>Are you currently working?</label>
        <div class="radio-selection">
          <input type="radio" name="iscurrentlyworking" value="Yes" required> Yes
          <input type="radio" name="iscurrentlyworking" value="No" required> No<br><br>
        </div>
         <div class="section">II. Educational Background</div>
        <div class="horizontal-line"></div>
        <h4>Elementary</h4><br>
        
        <label>School Name</label>
        <input type="text" name="elementaryschoolname"><br><br>

        <label>School Address</label>
        <input type="text" name="elementaryaddress"><br><br>
        <div class="label-name">
        <label>Year Graduated</label>
        <label class="school-type">School Type</label>
        </div>
        <div class="height-weight">
          <select name="elemyeargraduated" required>
          <option value="" disabled selected>Select Year</option>
            <?php
              $currentYear = date('Y');
              for ($year = $currentYear; $year >= 1980; $year--) {
                echo "<option value=\"$year\">$year</option>";
              }
            ?>
          </select>
         <div class="radio-selection">
            <input type="radio" name="elementaryschooltype" value="Public" required> Public
            <input type="radio" name="elementaryschooltype" value="Private" required> Private
         </div>

        <br><br>
        </div>

        <h4>Junior High School</h4><br>
        
        <label>School Name</label>
        <input type="text" name="juniorhighschoolname"><br><br>

        <label>School Address</label>
        <input type="text" name="juniorhighaddress"><br><br>
        <div class="label-name">
        <label>Year Graduated</label>
        <label class="school-type">School Type</label>
        </div>
        <div class="height-weight">
          <select name="junioryeargraduated" required>
          <option value="" disabled selected>Select Year</option>
            <?php
              $currentYear = date('Y');
              for ($year = $currentYear; $year >= 1980; $year--) {
                echo "<option value=\"$year\">$year</option>";
              }
            ?>
          </select>
          <div class="radio-selection">
            <input type="radio" name="juniorhighschooltype" value="Public" required> Public
            <input type="radio" name="juniorhighschooltype" value="Private" required> Private
          </div>
        <br><br>
        </div>
        
        <h4>Vocational</h4><br>
        
        <label>School Name</label>
        <input type="text" name="vocationalcoursename"><br><br>

        <label>School Address</label>
        <input type="text" name="vocationaladdress"><br><br>
        <div class="label-name">
        <label>Year Graduated</label>
        <label class="school-type">School Type</label>
        </div>
        <div class="height-weight">
          <select name="vocationalyeargraduated" required>
          <option value="" disabled selected>Select Year</option>
            <?php
              $currentYear = date('Y');
              for ($year = $currentYear; $year >= 1980; $year--) {
                echo "<option value=\"$year\">$year</option>";
              }
            ?>
          </select>
          <div class="radio-selection">
            <input type="radio" name="vocationaltype" value="Public" required> Public
            <input type="radio" name="vocationaltype" value="Private" required> Private
          </div>
        <br><br>
        </div>

        <h4>Senior Highschool</h4><br>
        
        <label>School Name</label>
        <input type="text" name="seniorhighschoolname"><br><br>

        <label>School Address</label>
        <input type="text" name="seniorhighaddress"><br><br>
        <div class="label-name">
        <label>Year Graduated</label>
        <label class="school-type">School Type</label>
        </div>
        <div class="height-weight">
          <select name="senioryeargraduated" required>
          <option value="" disabled selected>Select Year</option>
            <?php
              $currentYear = date('Y');
              for ($year = $currentYear; $year >= 1980; $year--) {
                echo "<option value=\"$year\">$year</option>";
              }
            ?>
          </select>
          <div class="radio-selection">
            <input type="radio" name="seniorhighschooltype" value="Public" required> Public
            <input type="radio" name="seniorhighschooltype" value="Private" required> Private
          </div>
        <br><br>
        </div>

        <h4>College</h4><br>
        
        <label>School Name</label>
        <input type="text" name="collegeschoolname"><br><br>

        <label>School Address</label>
        <input type="text" name="collegeaddress"><br><br>
        <div class="label-name">
        <label>Year Graduated</label>
        <label class="school-type">School Type</label>
        </div>
        <div class="height-weight">
          <select name="collegeyeargraduated" required>
          <option value="" disabled selected>Select Year</option>
            <?php
              $currentYear = date('Y');
              for ($year = $currentYear; $year >= 1980; $year--) {
                echo "<option value=\"$year\">$year</option>";
              }
            ?>
          </select>
          <div class="radio-selection">
            <input type="radio" name="collegetype" value="Public" required> Public
            <input type="radio" name="collegetype" value="Private" required> Private
          </div>
        <br><br>
        </div>
        <br>      
        <label>Honors Received or Special Awards</label>
        <input type="text" name="honorsreceived"><br><br>

        <label>Nature of Schooling</label>
        <div class="height-weight">
          <div class="radio-selection">
            <input type="radio" name="natureofschooling" value="Continuous" required> Continuous
            <input type="radio" name="natureofschooling" value="Interrupted" required> Interrupted, why?
          </div>
          <input class="input-width" type="text" name="reasonforstopping"><br><br>
        <br><br>
        </div>

        <div class="section">III. Home and Family Background</div>
        <div class="horizontal-line"></div>

        <h4>Father's Information</h4><br>

        <div class="label-name">
          <label for="height">Full Name</label>
          <label for="weight">Age</label>
        </div>
        <div class="height-weight">
          <input type="text" name="fatherfullname" required>   
          <input type="number" name="fatherage" required>
        </div>

        <div class="deceased-label">
          <label>Educational Attainment</label>
          <label class="deceased-label">Is this person living/deceased?</label>
        </div>

        <div class="height-weight">
          <input class="input-width" type="text" name="fathereducationalattainment" required><br><br>
          <div class="radio-selection">
            <input type="radio" name="fatherlivingstatus" value="Living" required> Living
            <input type="radio" name="fatherlivingstatus" value="Deceased" required> Deceased
          </div>
        <br><br>
        </div>

        <label>Occupation</label>
        <input type="text" name="occupation" required><br><br>

        <h4>Mothers's Information</h4><br>

        <div class="label-name">
          <label for="height">Full Name</label>
          <label for="weight">Age</label>
        </div>
        <div class="height-weight">
          <input type="text" name="motherfullname" required>   
          <input type="number" name="motherage" required>
        </div>

        <div class="deceased-label">
          <label>Educational Attainment</label>
          <label class="deceased-label">Is this person living/deceased?</label>
        </div>

        <div class="height-weight">
          <input class="input-width" type="text" name="mothereducationalattainment" required><br><br>
          <div class="radio-selection">
            <input type="radio" name="motherlivingstatus" value="Living" required> Living
            <input type="radio" name="motherlivingstatus" value="Deceased" required> Deceased
          </div>
        <br><br>
        </div>

        <h4>Guardian's Information (if any)</h4><br>
        
        <div class="label-name">
          <label for="height">Full Name</label>
          <label for="weight">Age</label>
        </div>
        <div class="height-weight">
          <input type="text" name="guardianfullname" required>   
          <input type="number" name="guardianage" required>
        </div>

        <div class="deceased-label">
          <label for="height">Educational Attainment</label>
          <label for="weight">Occupation</label>
        </div>
        <div class="height-weight">
          <input type="text" name="educationalattainment" required>   
          <input type="text" name="guardianoccupation" required>
        </div>

        <h4>Family Background</h4><br>
        
        <div class="family-label">
          <label for="height">Number of children</label>
          <label for="weight">Number of brothers</label>
          <label for="weight">Number of sisters</label>
        </div>
        <div class="height-weight">
          <input type="number" name="numofchildren" required>   
          <input type="number" name="numofbrothers" required>
          <input type="number" name="numofsisters" required>
        </div>

        <label>Parent's Marital Relationship</label><br>

         <div class="radio-grid">
          <div>
            <label>
              <input type="radio" name="parentsmaritalstatus" value="Married and staying together" required>
              Married and staying together
            </label>
          </div>
          <div>
            <label>
              <input type="radio" name="parentsmaritalstatus" value="Not married but together" required>
              Not married but staying together
            </label>
          </div>
          <div>
            <label>
              <input type="radio" name="parentsmaritalstatus" value="Single Parent" required>
              Single Parent
            </label>
          </div>
          <div>
            <label>
              <input type="radio" name="parentsmaritalstatus" value="Married but separated" required>
              Married but separated
            </label>
          </div>
          <div>
            <label>
              <input type="radio" name="parentsmaritalstatus" value="other" required id="otherRadio">
              Others, please specify
            </label>
            <div id="otherInputWrapper" style="display: none; margin-top: 8px;">
              <input
                class="input-padding input-width"
                type="text"
                name="othermaritalstatusreason"
                id="otherInput"
                placeholder="Please specify"
              >
            </div>
        </div>
      </div>


          <label>Who finances your schooling?</label><br>

         <div class="radio-grid">
            <div>
             <input type="checkbox" name="financers" value="Parents"> Parents
            </div>
            <div>
              <input type="checkbox" name="financers" value="Brother and Sister"> Brother/Sister
            </div> 
            <div>
              <input type="checkbox" name="financers" value="Spouse"> Spouse
            </div>  
            <div>
              <input type="checkbox" name="financers" value="Self Supporting"> Self-supporting/working
            </div>  
          </div>
          <div class="check-box">
              <input type="checkbox" name="otherFinancer" value="others"> Others, please specify
              <input class="input-width input-padding" type="text" name="otherfinancer"> 
          </div>

          <div class="section">IV. Health Information</div>
          <div class="horizontal-line"></div>

          <legend>1. Do you have problems with...</legend><br>
          
          <div class="checkbox-group">
          <label>
            <input type="checkbox" name="problemvision" value="1">
            Vision (Please specify)
          </label>
          
          <input type="text" name="visionspecify" class="form-control">
        </div>

        <div class="checkbox-group">
          <label>
            <input type="checkbox" name="problemspeech" value="1">
            Speech (Please specify)
          </label>
          <input type="text" name="speechspecify" class="form-control">
        </div>

        <div class="checkbox-group">
          <label>
            <input type="checkbox" name="problemhearing" value="1">
            Hearing (Please specify)
          </label>
          <input type="text" name="hearingspecify" class="form-control">
        </div>

        <div class="checkbox-group">
          <label>
            <input type="checkbox" name="problemhealth" value="1">
            General Health (Please specify)
          </label>
          <input type="text" name="healthspecify" class="form-control">
        </div>

        <div class="checkbox-group">
          <label>
            <input type="checkbox" name="problemdisability" value="1">
            Physical Disability (Please specify)
          </label>
          <input type="text" name="disabilityspecify" class="form-control">
        </div>

        <legend>2. Have you been diagnosed with certain illnesses before?</legend>
        <div class="radio-selection">
          <input type="radio" name="diagnosedbefore" value="Yes" required> Yes
          <input type="radio" name="diagnosedbefore" value="No" required> No<br><br>
        </div>

        <div id="otherInputDiagnosed" style="display:none">
          <label>If yes, please specify</label>
          <input type="text" name="diagnosedspecify" id="otherInput">
        </div>

        <legend>2. Have you taken any psychological tests before??</legend>
        <div class="radio-selection">
          <input type="radio" name="psychtestbefore" value="Yes" required> Yes
          <input type="radio" name="psychtestbefore" value="No" required> No<br><br>
        </div>



<!-- <this is for new updata> -->

        <h4>Test Record</h4><br>

        <div class="pu-test-row">
        <div>
          <label for="test1">Test type</label>
          <input type="text" name="test1">
        </div>
        <div>
          <label for="date1">Date</label>
          <input type="date">
        </div>
        <div>
          <label for="score1">Score</label>
          <input type="text">
        </div>
        <div>
          <label for="rank1">Rank</label>
          <input type="text">
        </div>
        </div>

       <div class="pu-test-row">
        <div>
          <label for="test2">Test type</label>
          <input type="text" >
        </div>
        <div>
          <label for="date2">Date</label>
          <input type="date">
        </div>
        <div>
          <label for="score2">Score</label>
          <input type="text">
        </div>
        <div>
          <label for="rank2">Rank</label>
          <input type="text">
        </div>
       </div>

       <div class="pu-test-row">
        <div>
          <label for="test3">Test type</label>
          <input type="text">
        </div>
        <div>
          <label for="date3">Date</label>
          <input type="date">
        </div>
        <div>
          <label for="score3">Score</label>
          <input type="text">
        </div>
        <div>
          <label for="rank3">Rank</label>
          <input type="text">
        </div>
        </div>

        <div>
          <input type="checkbox" name="medicalInfoConsent" value="1"><span style="color:rgb(55, 53, 53); font-style:italic;">I expressly consent to the collection and processing of my medical history and psychological assessment 
          information in accordance with the Data Privacy Act of 2012.</span>
        </div>

        <div class="section">V. Other Information</div>
        <div class="horizontal-line"></div>

        <label>1. Indicate interest group to which you are inclined to.</label><br>

        <div class="radio-grid">
            <div>
             <input type="checkbox" name="sports" value="1"> Sports
            </div>
            <div>
              <input type="checkbox" name="science" value="1"> Science
            </div> 
            <div>
              <input type="checkbox" name="arts" value="1"> Arts
            </div>  
            <div>
              <input type="checkbox" name="socialstudies" value="1"> Social Studies
            </div>  
             <div>
              <input type="checkbox" name="religious" value="1"> Religious
            </div>
            <div>
              <input type="checkbox" name="civicawareness" value="1"> Civic Awareness/Services
            </div> 
            <div>
              <input type="checkbox" name="othersinterests" value="1"> Others
            </div> 
          </div><br>

          <label>2. Have you consulted/been sent to see the Guidance Counselor before?</label>

           <div class="radio-selection">
            <input type="radio" name="consultedstatus" value="Yes" required> Yes
            <input type="radio" name="consultedstatus" value="No" required> No<br><br>
          </div>

          <label>If yes, what was/were the reason(s)?</label>
          <input type="text" name="reasonforconsultation" required>

          <div class="info-box">
            <i class="fa-solid fa-circle-info"></i>

            <span class="info-text">Proceed to this section only if you intend to undergo 
              counseling and listening session with a Guidance Service Specialist</span>
          </div><br>

          <label>3. How may your Guidance Counselor help you? </label>

           <div class="radio-grid">
            <div>
             <input type="checkbox" name="familymatters" value="1"> Family Matters
            </div>
            <div>
              <input type="checkbox" name="careerconcerns" value="1"> Career Concerns
            </div> 
            <div>
              <input type="checkbox" name="relationshipconcerns" value="1"> Relationship Concerns
            </div>
            <div>
              <input type="checkbox" name="selfconcerns" value="1"> Self
            </div>  
            <div>
              <input type="checkbox" name="concernswithteachers" value="1"> Concern with Teachers
            </div>
            <div>
              <input type="checkbox" name="financialmatters" value="1"> Financial Matters
            </div>
            <div>
              <input type="checkbox" name="academicconcerns" value="1"> Academic Concerns
            </div> 
            <div>
              <input type="checkbox" name="healthconcerns" value="1"> Health Concerns
            </div>   
          </div> 
          <div class="check-box">
              <input type="checkbox" name="others[]" value="others"> Others, please specify
              <input class="input-width input-padding" type="text" name="otherguidanceconcern" required> 
          </div><br>
          
          <div class="privacy-notice">
            <input class="privacy-checkbox" type="checkbox" name="privacyCheck" value="1" required>
            
          <p><span class="privacy-text">DISCLAIMER:</span> I authorize the Guidance and Counseling Section, Division of Student Affairs, 
            to collect and process my personal and sensitive information for academic support, counseling, emergency contact, and student profiling. 
            I understand my data will be securely stored, accessed only by authorized personnel, and handled confidentially. I am aware of my rights under RA 10173 
            (Data Privacy Act of 2012), including access, correction, and withdrawal of consent at any time. My data will be retained for five (5) years and securely
            disposed of afterward. <br> <br>

          <span class="pu-signature-text">By signing below, I give my informed consent to the collection and use of my data as stated.</span>
          </div>
          <div class="pu-signature-container">
            <span>[Draw your signature inside the box]</span>
            <canvas id="signature"></canvas>
            <div>
              <button type="button" id="clearBtn">Clear</button>
            </div>
          </div>

          <span style="font-weight:bold; padding-bottom:14px; display:inline-block;">Parental/Guardian Consent (for students under 18)</span>
          <div>
            <input type="checkbox" name="parentalConsent" value="1" required>  
            <span style="font-style:italic">I am the parent/legal guardian and I give my full consent for my child’s participation in counseling services and data processing in compliance with the Data Privacy Act of 2012.</span><br><br>
          </div>
          
          <div class="pu-signature-container">
            <span>[Draw your signature inside the box]</span>
            <canvas id="parentSignature"></canvas>
            <div>
              <button type="button" id="clearParentBtn">Clear</button>
            </div>
          </div>
          
          <div class="form-actions">
              <div class="left-buttons">
                  <button type="submit" class="btn btn-submit">Submit Form</button>
                  <button class="btn btn-cancel">Cancel</button>
              </div>
              <div class="right-buttons">
                  <button class="btn-icon">Clear Form</button>
                  <button type="button" id="downloadPdfBtn" class="btn-icon"><i class="fas fa-download"></i>Download</button>
                  <button class="btn-icon"><i class="fas fa-share-alt"></i>Share</button>
              </div>
          </div>
    </form>
</body>
</html>

<script>

const dbName = "StudentInventoryDB";
const storeName = "forms";
let db;

const radios = document.getElementsByName('parentsmaritalstatus');
const otherInputWrapper = document.getElementById('otherInputWrapper');
const otherInput = document.getElementById('otherInput');
const othersCheckbox = document.querySelector('input[type="checkbox"][name="others[]"][value="others"]');
const othersFinancerCheckbox = document.querySelector('input[type="checkbox"][name="otherFinancer"][value="others"]');
const otherGuidanceInput = document.querySelector('input[name="otherguidanceconcern"]');
const otherFinancerInput = document.querySelector('input[name="otherfinancer"]');
const diagnosedRadios = document.getElementsByName('diagnosedbefore');
const privacyCheckbox = document.querySelector('input[name="privacyCheck"]');
const submitBtn = document.querySelector('button[type="submit"]');
const schoolingRadios = document.getElementsByName('natureofschooling');
const reasonInput = document.querySelector('input[name="reasonforstopping"]');
const illnessInputs = [
  document.querySelector('input[name="illness"]'),
  document.querySelector('input[name="datediagnosed"]'),
  document.querySelector('input[name="illness1"]'),
  document.querySelector('input[name="datediagnosed1"]'),
  document.querySelector('input[name="illness2"]'),
  document.querySelector('input[name="datediagnosed2"]')
];
  const canvas = document.getElementById("signature");
    const ctx = canvas.getContext("2d");
    const clearBtn = document.getElementById("clearBtn");
    const saveBtn = document.getElementById("saveBtn");
    const savedImage = document.getElementById("savedImage");
    const form = document.querySelector('form');

    // Resize canvas properly
    function resizeCanvas() {
      const ratio = window.devicePixelRatio || 1;
      canvas.width = canvas.offsetWidth * ratio;
      canvas.height = canvas.offsetHeight * ratio;
      ctx.scale(ratio, ratio);
      ctx.lineWidth = 2;
      ctx.lineCap = "round";
      ctx.strokeStyle = "#000";
    }
    resizeCanvas();
    window.addEventListener("resize", resizeCanvas);

    let drawing = false;

    function startDraw(e) {
      drawing = true;
      ctx.beginPath();
      ctx.moveTo(getX(e), getY(e));
    }

    function draw(e) {
      if (!drawing) return;
      ctx.lineTo(getX(e), getY(e));
      ctx.stroke();
    }

    function stopDraw() {
      drawing = false;
      ctx.beginPath();
    }

    function getX(e) {
      return e.clientX - canvas.getBoundingClientRect().left;
    }

    function getY(e) {
      return e.clientY - canvas.getBoundingClientRect().top;
    }

    // Mouse events
    canvas.addEventListener("mousedown", startDraw);
    canvas.addEventListener("mousemove", draw);
    canvas.addEventListener("mouseup", stopDraw);

    // Touch events
    canvas.addEventListener("touchstart", (e) => startDraw(e.touches[0]));
    canvas.addEventListener("touchmove", (e) => {
      draw(e.touches[0]);
      e.preventDefault(); // prevent scrolling while drawing
    });
    canvas.addEventListener("touchend", stopDraw);

    // Clear button
    clearBtn.addEventListener("click", () => {
      ctx.clearRect(0, 0, canvas.width, canvas.height);
      savedImage.src = "";
    });

    // Disable signature canvas if privacyCheck is not checked
    function setSignatureEnabled(enabled) {
      canvas.style.pointerEvents = enabled ? 'auto' : 'none';
      canvas.style.opacity = enabled ? '1' : '0.5';
    }

    // Initial state
    setSignatureEnabled(privacyCheckbox.checked);

    // Listen for changes on privacyCheck
    privacyCheckbox.addEventListener('change', function() {
      setSignatureEnabled(this.checked);
    });

    
    if (form && canvas) {
      form.addEventListener('submit', function(e) {
        // Get the signature as a data URL
        const signatureData = canvas.toDataURL("image/png");
        // Create a hidden input to include the signature in the form data
        let sigInput = document.querySelector('input[name="signature"]');
        if (!sigInput) {
          sigInput = document.createElement('input');
          sigInput.type = 'hidden';
          sigInput.name = 'signature';
          form.appendChild(sigInput);
        }
        sigInput.value = signatureData;
      });
    }

function openDB() {
  return new Promise((resolve, reject) => {
    const request = indexedDB.open(dbName, 1);
    request.onerror = (e) => reject(e);
    request.onsuccess = (e) => {
      db = e.target.result;
      resolve(db);
    };
    request.onupgradeneeded = (e) => {
      db = e.target.result;
      if (!db.objectStoreNames.contains(storeName)) {
        db.createObjectStore(storeName, { keyPath: "id", autoIncrement: true });
      }
    };
  });
}

function saveFormData(data) {
  return openDB().then((db) => {
    return new Promise((resolve, reject) => {
      const tx = db.transaction(storeName, "readwrite");
      const store = tx.objectStore(storeName);
      store.add(data);
      tx.oncomplete = () => resolve();
      tx.onerror = (e) => reject(e);
    });
  });
}


function serializeForm(form) {
  const obj = {};
  const formData = new FormData(form);
  for (const [key, value] of formData.entries()) {
    
    if (obj[key]) {
      if (Array.isArray(obj[key])) {
        obj[key].push(value);
      } else {
        obj[key] = [obj[key], value];
      }
    } else {
      obj[key] = value;
    }
  }
  return obj;
}

window.viewSavedForms = function() {
  openDB().then((db) => {
    const tx = db.transaction(storeName, "readonly");
    const store = tx.objectStore(storeName);
    const req = store.getAll();
    req.onsuccess = () => {
      console.log("Saved forms:", req.result);
      alert("Check the console for saved forms.");
    };
  });
};

radios.forEach(radio => {
  radio.addEventListener('change', () => {
    if (radio.value === 'other' && radio.checked) {
      otherInputWrapper.style.display = 'block';
      otherInput.setAttribute('required', 'required');
    } else if (radio.checked) {
      otherInputWrapper.style.display = 'none';
      otherInput.removeAttribute('required');
      otherInput.value = '';
     }
    });
});

if (othersCheckbox && otherGuidanceInput) {
  otherGuidanceInput.disabled = !othersCheckbox.checked;
  otherGuidanceInput.required = this.checked;

  othersCheckbox.addEventListener('change', function() {
    otherGuidanceInput.disabled = !this.checked;
    if (!this.checked) {
      otherGuidanceInput.value = '';
    }
  });
}

if (othersFinancerCheckbox && otherFinancerInput) {
  otherFinancerInput.disabled = !othersCheckbox.checked;
  otherFinancerInput.required = this.checked;

  othersFinancerCheckbox.addEventListener('change', function() {
    otherFinancerInput.disabled = !this.checked;
    if (!this.checked) {
      otherFinancerInput.value = '';
    }
  });
}

illnessInputs.forEach(input => {
  if (input) {
    input.disabled = true;
    input.required = false;
  }
});

diagnosedRadios.forEach(radio => {
  radio.addEventListener('change', function() {
    if (this.value === 'Yes' && this.checked) {
      illnessInputs.forEach(input => {
        if (input) {
          input.disabled = false;
          input.required = true;
        }
      });
      document.getElementById('otherInputDiagnosed').style.display = 'block';
      document.getElementById('otherInput').setAttribute('required', 'required');
    } else if (this.value === 'No' && this.checked) {
      illnessInputs.forEach(input => {
        if (input) {
          input.disabled = true;
          input.required = false;
          input.value = '';
        }
      });
      document.getElementById('otherInputDiagnosed').style.display = 'none';
      document.getElementById('otherInput').removeAttribute('required');
      document.getElementById('otherInput').value = '';
    }
  });
});

if (submitBtn && privacyCheckbox) {
  submitBtn.disabled = !privacyCheckbox.checked;

  privacyCheckbox.addEventListener('change', function() {
    submitBtn.disabled = !this.checked;
  });
}

if (reasonInput) {
  reasonInput.disabled = true;
  reasonInput.required = false;
}

schoolingRadios.forEach(radio => {
  radio.addEventListener('change', function() {
    if (this.value === 'Interrupted' && this.checked) {
      reasonInput.disabled = false;
      reasonInput.required = true;
    } else {
      reasonInput.disabled = true;
      reasonInput.required = false;
      reasonInput.value = '';
    }
  });
});

document.getElementById('downloadPdfBtn').addEventListener('click', function () {
  fetch('pdf_form.php')
    .then(response => response.text())
    .then(html => {
      const { jsPDF } = window.jspdf;
      const doc = new jsPDF();

      let y = 10;
      doc.setFontSize(14);
      doc.text("Student Inventory Form", 10, y);
      y += 10;

      // Strip HTML tags and split into lines
      const text = html.replace(/<[^>]+>/g, '');
      const lines = doc.splitTextToSize(text, 180);
      lines.forEach(line => {
        doc.text(line, 10, y);
        y += 7;
        if (y > 280) {
          doc.addPage();
          y = 10;
        }
      });

      doc.save("student_inventory_form.pdf");
    });
});

const consultedRadios = document.getElementsByName('consultedstatus');
const reasonConsultInput = document.querySelector('input[name="reasonforconsultation"]');

if (reasonConsultInput) {
  reasonConsultInput.disabled = !(Array.from(consultedRadios).find(r => r.checked && r.value === 'Yes'));
  reasonConsultInput.required = !!(Array.from(consultedRadios).find(r => r.checked && r.value === 'Yes'));
}

consultedRadios.forEach(radio => {
  radio.addEventListener('change', function() {
    if (this.value === 'Yes' && this.checked) {
      reasonConsultInput.disabled = false;
      reasonConsultInput.required = true;
    } else if (this.value === 'No' && this.checked) {
      reasonConsultInput.disabled = true;
      reasonConsultInput.required = false;
      reasonConsultInput.value = '';
    }
  });
});


const tribeDropdown = document.getElementById('tribeDropdown');
  const otherTribeDiv = document.getElementById('otherTribeDiv');
  const otherTribeInput = document.getElementById('otherTribeInput');

  tribeDropdown.addEventListener('change', function () {
        if (this.value === 'Others') {
            otherTribeDiv.style.display = 'block';
            otherTribeInput.setAttribute('required', 'required');
        } else {
            otherTribeDiv.style.display = 'none';
            otherTribeInput.removeAttribute('required');
            otherTribeInput.value = '';
        }
});

const parentCanvas = document.getElementById("parentSignature");
const parentCtx = parentCanvas.getContext("2d");
const clearParentBtn = document.getElementById("clearParentBtn");

function resizeParentCanvas() {
  const ratio = window.devicePixelRatio || 1;
  parentCanvas.width = parentCanvas.offsetWidth * ratio;
  parentCanvas.height = parentCanvas.offsetHeight * ratio;
  parentCtx.scale(ratio, ratio);
  parentCtx.lineWidth = 2;
  parentCtx.lineCap = "round";
  parentCtx.strokeStyle = "#000";
}
resizeParentCanvas();
window.addEventListener("resize", resizeParentCanvas);

let parentDrawing = false;

function startParentDraw(e) {
  parentDrawing = true;
  parentCtx.beginPath();
  parentCtx.moveTo(
    e.clientX - parentCanvas.getBoundingClientRect().left,
    e.clientY - parentCanvas.getBoundingClientRect().top
  );
}
function drawParent(e) {
  if (!parentDrawing) return;
  parentCtx.lineTo(
    e.clientX - parentCanvas.getBoundingClientRect().left,
    e.clientY - parentCanvas.getBoundingClientRect().top
  );
  parentCtx.stroke();
}
function stopParentDraw() {
  parentDrawing = false;
  parentCtx.beginPath();
}

parentCanvas.addEventListener("mousedown", startParentDraw);
parentCanvas.addEventListener("mousemove", drawParent);
parentCanvas.addEventListener("mouseup", stopParentDraw);

parentCanvas.addEventListener("touchstart", (e) => startParentDraw(e.touches[0]));
parentCanvas.addEventListener("touchmove", (e) => {
  drawParent(e.touches[0]);
  e.preventDefault();
});
parentCanvas.addEventListener("touchend", stopParentDraw);

clearParentBtn.addEventListener("click", () => {
  parentCtx.clearRect(0, 0, parentCanvas.width, parentCanvas.height);
});

if (form && parentCanvas) {
  form.addEventListener('submit', function(e) {
    let parentSigInput = document.querySelector('input[name="parent_signature"]');
    if (!parentSigInput) {
      parentSigInput = document.createElement('input');
      parentSigInput.type = 'hidden';
      parentSigInput.name = 'parent_signature';
      form.appendChild(parentSigInput);
    }
    parentSigInput.value = parentCanvas.toDataURL("image/png");
  });
}

</script>

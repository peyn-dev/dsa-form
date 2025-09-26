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
          <label for="height">Height(m)</label>
          <label for="weight">Weight(kg)</label>
        </div>
        <div class="height-weight">
          <input type="number" name="height" required value="<?= $studentProfile["HEIGHT"]; ?>"/>   
          <input type="number" name="weight" required value="<?= $studentProfile["WEIGHT"]; ?>">
        </div>

        <label>Tribe</label>
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

            <!-- Other Distinct Groups -->
            <optgroup label="Other Distinct Groups">
                <option value="Agutaynen">Agutaynen</option>
                <option value="Cuyunon">Cuyunon</option>
                <option value="Palaw’an">Palaw’an</option>
                <option value="Batak">Batak</option>
            </optgroup>

            <!-- Others -->
            <optgroup label="Others">
                <option value="Others">Others (please specify)</option>
            </optgroup>
        </select>

        <div id="otherTribeDiv" style="display:none; margin-top:10px;">
            <label>Please specify your tribe:</label>
            <input type="text" name="othertribe" id="otherTribeInput" placeholder="Enter your tribe" value="<?= $studentProfile["OTHERTRIBE"]; ?>"/>
        </div>

        
        <label>Present Address</label>
        <input type="text" name="presentaddress" required value="<?= $studentProfile["PRESENTADDRESS"]; ?>"/>
        <h4>In case of emergency</h4>

        <div class="label-name">
          <label for="height">Contact Person</label>
          <label for="weight">Address</label>
        </div>
        <div class="height-weight">
          <input type="text" name="contactperson" required value="<?= $studentProfile["CONTACTPERSON"]; ?>"/>   
          <input type="text" name="contactpersonaddress" required value="<?= $studentProfile["CONTACTPERSONADDRESS"]; ?>"/>
        </div>

        <div class="label-name">
          <label for="height">Contact Number</label>
          <label for="weight">Relationship</label>
        </div>
        <div class="height-weight">
          <input type="number" name="contactnumber" required value="<?= $studentProfile["CONTACTNUMBER"]; ?>"/>
          <input type="text" name="relationship" required value="<?= $studentProfile["RELATIONSHIP"]; ?>"/>
        </div>
        <h4>Employment Status</h4>
        <label>Are you currently working?</label>
        <div class="radio-selection">
          <input type="radio" name="iscurrentlyworking" value="Yes" required <?php echo $studentProfile["ISCURRENTLYWORKING"] == "Yes" ? "checked" : ""; ?> /> Yes
          <input type="radio" name="iscurrentlyworking" value="No" required <?php echo $studentProfile["ISCURRENTLYWORKING"] == "No" ? "checked" : ""; ?> /> No<br><br>
        </div>
         <div class="section">II. Educational Background</div>
        <div class="horizontal-line"></div>
        <h4>Elementary</h4><br>
        
        <label>School Name</label>
        <input type="text" name="elementaryschoolname" required value="<?= $studentProfile["ELEMENTARYSCHOOLNAME"]; ?>"/><br><br>

        <label>School Address</label>
        <input type="text" name="elementaryaddress" value="<?= $studentProfile["ELEMENTARYADDRESS"]; ?>"/><br><br>
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
                echo "<option value=\"$year\" ". ($studentProfile["ELEMYEARGRADUATED"] == $year ? "selected" : "") .">$year</option>";
              }
            ?>
          </select>
         <div class="radio-selection">
            <input type="radio" name="elementaryschooltype" value="Public" required <?php echo $studentProfile["ELEMENTARYSCHOOLTYPE"] == "Public" ? "checked" : ""; ?> /> Public
            <input type="radio" name="elementaryschooltype" value="Private" required <?php echo $studentProfile["ELEMENTARYSCHOOLTYPE"] == "Private" ? "checked" : ""; ?> /> Private
         </div>

        <br><br>
        </div>

        <h4>Junior High School</h4><br>
        
        <label>School Name</label>
        <input type="text" name="juniorhighschoolname" required value="<?= $studentProfile["JUNIORHIGHSCHOOLNAME"]; ?>"/><br><br>

        <label>School Address</label>
        <input type="text" name="juniorhighaddress" required value="<?= $studentProfile["JUNIORHIGHADDRESS"]; ?>"/><br><br>
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
                echo "<option value=\"$year\" ". ($studentProfile["JUNIORYEARGRADUATED"] == $year ? "selected" : "") .">$year</option>";
              }
            ?>
          </select>
          <div class="radio-selection">
            <input type="radio" name="juniorhighschooltype" value="Public" required <?php echo $studentProfile["JUNIORHIGHSCHOOLTYPE"] == "Public" ? "checked" : ""; ?> /> Public
            <input type="radio" name="juniorhighschooltype" value="Private" required <?php echo $studentProfile["JUNIORHIGHSCHOOLTYPE"] == "Private" ? "checked" : ""; ?> /> Private
          </div>
        <br><br>
        </div>
        
        <h4>Vocational</h4><br>
        
        <label>School Name</label>
        <input type="text" name="vocationalcoursename" required value="<?= $studentProfile["VOCATIONALCOURSENAME"]; ?>"/><br><br>

        <label>School Address</label>
        <input type="text" name="vocationaladdress" required value="<?= $studentProfile["VOCATIONALADDRESS"]; ?>"/><br><br>
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
                echo "<option value=\"$year\" ". ($studentProfile["VOCATIONALYEARGRADUATED"] == $year ? "selected" : "") .">$year</option>";
              }
            ?>
          </select>
          <div class="radio-selection">
            <input type="radio" name="vocationaltype" value="Public" required <?php echo $studentProfile["VOCATIONALTYPE"] == "Public" ? "checked" : ""; ?> /> Public
            <input type="radio" name="vocationaltype" value="Private" required <?php echo $studentProfile["VOCATIONALTYPE"] == "Private" ? "checked" : ""; ?> /> Private
          </div>
        <br><br>
        </div>

        <h4>Senior Highschool</h4><br>
        
        <label>مرحبا بالعالم</label>
        <input type="text" name="seniorhighschoolname" required value="<?= $studentProfile["SENIORHIGHSCHOOLTYPE"]; ?>"/><br><br>

        <label>School Address</label>
        <input type="text" name="seniorhighaddress" required value="<?= $studentProfile["SENIORHIGHADDRESS"]; ?>"/><br><br>
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
                echo "<option value=\"$year\" ". ($studentProfile["SENIORYEARGRADUATED"] == $year ? "selected" : "") .">$year</option>";
              }
            ?>
          </select>
          <div class="radio-selection">
            <input type="radio" name="seniorhighschooltype" value="Public" required <?php echo $studentProfile["SENIORHIGHSCHOOLTYPE"] == "Public" ? "checked" : ""; ?> /> Public
            <input type="radio" name="seniorhighschooltype" value="Private" required <?php echo $studentProfile["SENIORHIGHSCHOOLTYPE"] == "Private" ? "checked" : ""; ?> /> Private
          </div>
        <br><br>
        </div>

        <h4>College</h4><br>
        
        <label>School Name</label>
        <input type="text" name="collegeschoolname" required value="<?= $studentProfile["COLLEGESCHOOLNAME"]; ?>"/><br><br>

        <label>School Address</label>
        <input type="text" name="collegeaddress" required value="<?= $studentProfile["COLLEGEADDRESS"]; ?>"/><br><br>
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
                echo "<option value=\"$year\" ". ($studentProfile["COLLEGEYEARGRADUATED"] == $year ? "selected" : "") .">$year</option>";
              }
            ?>
          </select>
          <div class="radio-selection">
            <input type="radio" name="collegetype" value="Public" required <?php echo $studentProfile["COLLEGETYPE"] == "Public" ? "checked" : ""; ?> /> Public
            <input type="radio" name="collegetype" value="Private" required <?php echo $studentProfile["COLLEGETYPE"] == "Private" ? "checked" : ""; ?> /> Private
          </div>
        <br><br>
        </div>
        <br>      
        <label>Honors Received or Special Awards</label>
        <input type="text" name="honorsreceived" required value="<?= $studentProfile["HEIGHT"]; ?>"/><br><br>

        <label>Nature of Schooling</label>
        <div class="height-weight">
          <div class="radio-selection">
            <input type="radio" name="natureofschooling" value="Continuous" required <?php echo $studentProfile["NATUREOFSCHOOLING"] == "Continuous" ? "checked" : ""; ?> /> Continuous
            <input type="radio" name="natureofschooling" value="Interrupted" required <?php echo $studentProfile["NATUREOFSCHOOLING"] == "Interrupted" ? "checked" : ""; ?> /> Interrupted, why?
          </div>
          <input class="input-width" type="text" name="reasonforstopping" value="<?= $studentProfile["REASONFORSTOPPING"]; ?>"/><br><br>
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
          <input type="text" name="fatherfullname" required value="<?= $studentProfile["FATHERFULLNAME"]; ?>"/>   
          <input type="number" name="fatherage" required required value="<?= $studentProfile["FATHERAGE"]; ?>"/>
        </div>

        <div class="deceased-label">
          <label>Educational Attainment</label>
          <label class="deceased-label">Is this person living/deceased?</label>
        </div>

        <div class="height-weight">
          <input class="input-width" type="text" name="fathereducationalattainment" required value="<?= $studentProfile["FATHEREDUCATIONALATTAINMENT"]; ?>"/><br><br>
          <div class="radio-selection">
            <input type="radio" name="fatherlivingstatus" value="Living" required <?php echo $studentProfile["FATHERLIVINGSTATUS"] == "Living" ? "checked" : ""; ?> /> Living
            <input type="radio" name="fatherlivingstatus" value="Deceased" required <?php echo $studentProfile["FATHERLIVINGSTATUS"] == "Deceased" ? "checked" : ""; ?> /> Deceased
          </div>
        <br><br>
        </div>

        <label>Occupation</label>
        <input type="text" name="occupation" required value="<?= $studentProfile["OCCUPATION"]; ?>"/><br><br>

        <h4>Mothers's Information</h4><br>

        <div class="label-name">
          <label for="height">Full Name</label>
          <label for="weight">Age</label>
        </div>
        <div class="height-weight">
          <input type="text" name="motherfullname" required value="<?= $studentProfile["MOTHERFULLNAME"]; ?>"/>   
          <input type="number" name="motherage" required value="<?= $studentProfile["MOTHERAGE"]; ?>"/>
        </div>

        <div class="deceased-label">
          <label>Educational Attainment</label>
          <label class="deceased-label">Is this person living/deceased?</label>
        </div>

        <div class="height-weight">
          <input class="input-width" type="text" name="mothereducationalattainment" required><br><br>
          <div class="radio-selection">
            <input type="radio" name="motherlivingstatus" value="Living" required <?php echo $studentProfile["MOTHERLIVINGSTATUS"] == "Living" ? "checked" : ""; ?> /> Living
            <input type="radio" name="motherlivingstatus" value="Deceased" required <?php echo $studentProfile["MOTHERLIVINGSTATUS"] == "Deceased" ? "checked" : ""; ?> /> Deceased
          </div>
        <br><br>
        </div>

        <h4>Guardian's Information (if any)</h4><br>
        
        <div class="label-name">
          <label for="height">Full Name</label>
          <label for="weight">Age</label>
        </div>
        <div class="height-weight">
          <input type="text" name="guardianfullname" required value="<?= $studentProfile["GUARDIANFULLNAME"]; ?>"/>   
          <input type="number" name="guardianage" required value="<?= $studentProfile["GUARDIANAGE"]; ?>"/>
        </div>

        <div class="deceased-label">
          <label for="height">Educational Attainment</label>
          <label for="weight">Occupation</label>
        </div>
        <div class="height-weight">
          <input type="text" name="educationalattainment" required value="<?= $studentProfile["EDUCATIONALATTAINMENT"]; ?>"/>   
          <input type="text" name="guardianoccupation" required value="<?= $studentProfile["GUARDIANOCCUPATION"]; ?>"/>
        </div>

        <h4>Family Background</h4><br>
        
        <div class="family-label">
          <label for="height">Number of children</label>
          <label for="weight">Number of brothers</label>
          <label for="weight">Number of sisters</label>
        </div>
        <div class="height-weight">
          <input type="number" name="numofchildren" required value="<?= $studentProfile["NUMOFCHILDREN"]; ?>"/>   
          <input type="number" name="numofbrothers" required value="<?= $studentProfile["NUMOFBROTHERS"]; ?>"/>
          <input type="number" name="numofsisters" required value="<?= $studentProfile["NUMOFSISTERS"]; ?>"/>
        </div>

        <label>Parent's Marital Relationship</label><br>

         <div class="radio-grid">
          <div>
            <label>
              <input type="radio" name="parentsmaritalstatus" value="Married and staying together" required <?php echo $studentProfile["PARENTMARITALSTATUS"] == "Married and staying together" ? "checked" : ""; ?> />
              Married and staying together
            </label>
          </div>
          <div>
            <label>
              <input type="radio" name="parentsmaritalstatus" value="Not married but together" required <?php echo $studentProfile["PARENTMARITALSTATUS"] == "Not married but together" ? "checked" : ""; ?> />
              Not married but staying together
            </label>
          </div>
          <div>
            <label>
              <input type="radio" name="parentsmaritalstatus" value="Single Parent" required <?php echo $studentProfile["PARENTMARITALSTATUS"] == "Single Parent" ? "checked" : ""; ?> />
              Single Parent
            </label>
          </div>
          <div>
            <label>
              <input type="radio" name="parentsmaritalstatus" value="Married but separated" required <?php echo $studentProfile["PARENTMARITALSTATUS"] == "Married but separated" ? "checked" : ""; ?> />
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
                value="<?= $studentProfile["OTHERMARITALSTATUSREASON"]; ?>" />
            </div>
        </div>
      </div>


          <label>Who finances your schooling?</label><br>

         <div class="radio-grid">
            <div>
             <input type="checkbox" name="financers" value="1" <?php echo $studentProfile["FINANCERS"] == "1" ? "checked" : ""; ?> /> Parents
            </div>
            <div>
              <input type="checkbox" name="financers" value="1" <?php echo $studentProfile["FINANCERS"] == "1" ? "checked" : ""; ?>/> Brother/Sister
            </div> 
            <div>
              <input type="checkbox" name="financers" value="1" <?php echo $studentProfile["FINANCERS"] == "1" ? "checked" : ""; ?>/> Spouse
            </div>  
            <div>
              <input type="checkbox" name="financers" value="1" <?php echo $studentProfile["FINANCERS"] == "1" ? "checked" : ""; ?>/> Self-supporting/working
            </div>  
          </div>
          <div class="check-box">
              <input type="checkbox" name="otherFinancer"> Others, please specify
              <input class="input-width input-padding" type="text" name="otherfinancer" value="<?= $studentProfile["OTHERFINANCER"]; ?>"/> 
          </div>

          <div class="section">IV. Health Information</div>
          <div class="horizontal-line"></div>

          <legend>1. Do you have problems with...</legend><br>
          
          <div class="checkbox-group">
          <label>
            <input type="checkbox" name="problemvision" value="1" <?php echo $studentProfile["FINANCERS"] == "1" ? "checked" : ""; ?>/>
            Vision (Please specify)
          </label>
          
          <input type="text" name="visionspecify" class="form-control" value="<?= $studentProfile["VISIONSPECIFY"]; ?>"/>
        </div>

        <div class="checkbox-group">
          <label>
            <input type="checkbox" name="problemspeech" value="1" <?php echo $studentProfile["PROBLEMSPEECH"] == "1" ? "checked" : ""; ?>/>
            Speech (Please specify)
          </label>
          <input type="text" name="speechspecify" class="form-control" value="<?= $studentProfile["SPEECHSPECIFY"]; ?>"/>
        </div>

        <div class="checkbox-group">
          <label>
            <input type="checkbox" name="problemhearing" value="1" <?php echo $studentProfile["PROBLEMHEARING"] == "1" ? "checked" : ""; ?> />
            Hearing (Please specify)
          </label>
          <input type="text" name="hearingspecify" class="form-control" value="<?= $studentProfile["HEARINGSPECIFY"]; ?>"/>
        </div>

        <div class="checkbox-group">
          <label>
            <input type="checkbox" name="problemhealth" value="1" <?php echo $studentProfile["PROBLEMHEALTH"] == "1" ? "checked" : ""; ?> />
            General Health (Please specify)
          </label>
          <input type="text" name="healthspecify" class="form-control" value="<?= $studentProfile["HEALTHSPECIFY"]; ?>"/>
        </div>

        <div class="checkbox-group">
          <label>
            <input type="checkbox" name="problemdisability" value="1" <?php echo $studentProfile["PROBLEMDISABILITY"] == "1" ? "checked" : ""; ?>/>
            Physical Disability (Please specify)
          </label>
          <input type="text" name="disabilityspecify" class="form-control" value="<?= $studentProfile["DISABILITYSPECIFY"]; ?>"/>
        </div>

        <legend>2. Have you been diagnosed with certain illnesses before?</legend>
        <div class="radio-selection">
          <input type="radio" name="diagnosedbefore" value="Yes" required <?php echo $studentProfile["DIAGNOSEDBEFORE"] == "Yes" ? "checked" : ""; ?> /> Yes
          <input type="radio" name="diagnosedbefore" value="No" required <?php echo $studentProfile["DIAGNOSEDBEFORE"] == "No" ? "checked" : ""; ?> /> No<br><br>
        </div>

        <h4>Illness Record</h4><br>

         <div class="label-name">
          <label for="height">Illness</label>
          <label for="weight">Date Diagnosed</label>
        </div>
        <div class="height-weight">
          <input type="text" name="illness" required value="<?= $studentProfile["ILLNESS"]; ?>"/>   
          <input type="date" name="datediagnosed" required value="<?= $studentProfile["DATEDIAGNOSED"]; ?>"/>
        </div>

        <div class="label-name">
          <label for="height">Illness</label>
          <label for="weight">Date Diagnosed</label>
        </div>
        <div class="height-weight">
          <input type="text" name="illness1" required value="<?= $studentProfile["ILLNESS1"]; ?>"/>
          <input type="date" name="datediagnosed1" required value="<?= $studentProfile["DATEDIAGNOSED1"]; ?>"/>
        </div>

        <div class="label-name">
          <label for="height">Illness</label>
          <label for="weight">Date Diagnosed</label>
        </div>
        <div class="height-weight">
          <input type="text" name="illness2" required value="<?= $studentProfile["ILLNESS2"]; ?>"/>
          <input type="date" name="datediagnosed2" required value="<?= $studentProfile["DATEDDIAGNOSED2"]; ?>"/>
        </div>

        <div class="section">V. Other Information</div>
        <div class="horizontal-line"></div>

        <label>1. Indicate interest group to which you are inclined to.</label><br>

        <div class="radio-grid">
            <div>
             <input type="checkbox" name="sports" value="1" <?php echo $studentProfile["SPORTS"] == "1" ? "checked" : ""; ?> /> Sports
            </div>
            <div>
              <input type="checkbox" name="science" value="1" <?php echo $studentProfile["SCIENCE"] == "1" ? "checked" : ""; ?> /> Science
            </div> 
            <div>
              <input type="checkbox" name="arts" value="1" <?php echo $studentProfile["ARTS"] == "1" ? "checked" : ""; ?> /> Arts
            </div>  
            <div>
              <input type="checkbox" name="socialstudies" value="1" <?php echo $studentProfile["SOCIALSTUDIES"] == "1" ? "checked" : ""; ?> /> Social Studies
            </div>  
             <div>
              <input type="checkbox" name="religious" value="1" <?php echo $studentProfile["RELIGIOUS"] == "1" ? "checked" : ""; ?>/> Religious
            </div>
            <div>
              <input type="checkbox" name="civicawareness" value="1" <?php echo $studentProfile["CIVICAWARENESS"] == "1" ? "checked" : ""; ?>/> Civic Awareness/Services
            </div> 
            <div>
              <input type="checkbox" name="othersinterests" value="1" <?php echo $studentProfile["OTHERSINTERESTS"] == "1" ? "checked" : ""; ?>/> Others
            </div> 
          </div><br>

          <label>2. Have you consulted/been sent to see the Guidance Counselor before?</label>

           <div class="radio-selection">
            <input type="radio" name="consultedstatus" value="Yes" required <?php echo $studentProfile["CONSULTEDSTATUS"] == "Yes" ? "checked" : ""; ?> /> Yes
            <input type="radio" name="consultedstatus" value="No" required <?php echo $studentProfile["CONSULTEDSTATUS"] == "No" ? "checked" : ""; ?> /> No<br><br>
          </div>

          <label>If yes, what was/were the reason(s)?</label>
          <input type="text" name="reasonforconsultation" required value="<?= $studentProfile["HEIGHT"]; ?>" />

          <div class="info-box">
            <i class="fa-solid fa-circle-info"></i>

            <span class="info-text">Proceed to this section only if you intend to undergo 
              counseling and listening session with a Guidance Service Specialist</span>
          </div><br>

          <label>3. How may your Guidance Counselor help you? </label>

           <div class="radio-grid">
            <div>
             <input type="checkbox" name="familymatters" value="1" <?php echo $studentProfile["FAMILYMATTERS"] == "1" ? "checked" : ""; ?>/> Family Matters
            </div>
            <div>
              <input type="checkbox" name="careerconcerns" value="1" <?php echo $studentProfile["CAREERCONCERNS"] == "1" ? "checked" : ""; ?>/> Career Concerns
            </div> 
            <div>
              <input type="checkbox" name="relationshipconcerns" value="1" <?php echo $studentProfile["RELATIONSHIPCONCERNS"] == "1" ? "checked" : ""; ?>/> Relationship Concerns
            </div>
            <div>
              <input type="checkbox" name="selfconcerns" value="1" <?php echo $studentProfile["SELFCONCERNS"] == "1" ? "checked" : ""; ?>/> Self
            </div>  
            <div>
              <input type="checkbox" name="concernswithteachers" value="1" <?php echo $studentProfile["CONCERNWITHTEACHERS"] == "1" ? "checked" : ""; ?>/> Concern with Teachers
            </div>
            <div>
              <input type="checkbox" name="financialmatters" value="1" <?php echo $studentProfile["FINANCIALMATTERS"] == "1" ? "checked" : ""; ?>/> Financial Matters
            </div>
            <div>
              <input type="checkbox" name="academicconcerns" value="1" <?php echo $studentProfile["ACADEMICCONCERNS"] == "1" ? "checked" : ""; ?>/> Academic Concerns
            </div> 
            <div>
              <input type="checkbox" name="healthconcerns" value="1" <?php echo $studentProfile["HEALTHCONCERNS"] == "1" ? "checked" : ""; ?>/> Health Concerns
            </div>   
          </div> 
          <div class="check-box">
              <input type="checkbox" name="others[]" value="others"> Others, please specify
              <input class="input-width input-padding" type="text" name="otherguidanceconcern" required value="<?= $studentProfile["OTHERGUIDANCECONCERN"]; ?>"/>> 
          </div><br>
          
          <div class="privacy-notice">
            <input class="privacy-checkbox" type="checkbox" name="privacyCheck" value="1" required>
            
          <p><span class="privacy-text">PRIVACY NOTICE AND AKNOWLEDGEMENT:</span> I authorize the Guidance and Counseling Office 
            to collect and use my personal information for counseling and documentation purposes, 
            in compliance with the Data Privacy Act of 2012 (RA 10173). I understand my rights, 
            the purpose of counseling, and the limits of confidentiality. I voluntarily agree to 
            receive counseling services under these terms.</p>
          </div><br>
          
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
    } else if (this.value === 'No' && this.checked) {
      illnessInputs.forEach(input => {
        if (input) {
          input.disabled = true;
          input.required = false;
          input.value = '';
        }
      });
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


</script>

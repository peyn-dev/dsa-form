<link rel="stylesheet" href="<?php echo base_url('assets/css/student_inventory_form.css'); ?>">
<?php if (!empty($message)) : ?>
<div class="alert alert-<?= $message_type; ?>" >
      <a href="#" class="close" data-dismiss="alert">
         &times;
      </a>
          <?= $message; ?>
    </div>
<?php endif; ?>  

<?php 
$Qpic = ibase_query("SELECT PICTURE FROM STUDENTS WHERE IDNUMBER=?", $userInfo["IDNUMBER"]);
$Rpic = ibase_fetch_object($Qpic);
$base64 = "";
if ($Rpic && $Rpic->PICTURE) {
    $blob_id = $Rpic->PICTURE;
    $blob_handle = ibase_blob_open($blob_id);
    $blob_data = '';
    while ($chunk = ibase_blob_get($blob_handle, 8192)) {
        $blob_data .= $chunk;
    }
    ibase_blob_close($blob_handle);
    ibase_free_result($Qpic);
    $base64 = base64_encode($blob_data);
}

?>  

  <form class="pu-form" action="<?php echo site_url('student/profileupdate'); ?>" method="post">
    <?php if(empty($studentProfile["HEIGHT"])) { ?><div class="alert alert-info">Attention: You must complete this DSA Requirements before you can use your account. </div><?php } ?>
    <h3>Student Individual Inventory Record Form</h3>
    <p>Please complete this Inventory as accurately and honestly as you can.
      The purpose of collecting this information <br> is to be of assistance to you
      in making choices and decisions. All information which you provide about
      yourself will <br> be treated with utmost confindentiality.
    </p>

     <div class="pu-profile-card">
      <div class="pu-profile-image">
        <img class='img-thumbnail' src='data:image/jpeg;base64,<?php echo $base64;?>'/>
      </div>
      <div class="pu-profile-info">
        <h4><?php echo $userInfo["LASTNAME"] .', '. $userInfo["FIRSTNAME"] .' '. $userInfo["MIDDLENAME"]; ?></h4>
        <span class="pu-course"><?php echo $userInfo["COURSE"]; ?> <br> <?php echo $userInfo["MSUSIDNUM"]; ?></span>
      </div>
    </div>

    <div class="pu-section">I. Personal Information</div>
    <div class="pu-horizontal-line"></div>

    <h4>Basic Information</h4><br> 

      
      <div class="pu-label-name">
        <label for="height">Height(m)<span class="required">*</span></label>
        <label for="weight">Weight(kg)<span class="required">*</span></label>
      </div>
      <div class="pu-height-weight">
        <input type="number" name="height" step="0.1" required value="<?= $studentProfile["HEIGHT"]; ?>"/>   
        <input type="number" name="weight" step="0.1" required value="<?= $studentProfile["WEIGHT"]; ?>">
      </div>

      <div class="pu-demographic-label">
        <label>Tribe<span class="required">*</span></label>
        <label for="weight">Civil Status <span class="required">*</span></label>
      </div>

      <div class="pu-demographic-input">
        <select class="pu-select" name="tribe" id="tribeDropdown" required>
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
          <input type="text" name="othertribe" id="otherTribeInput" placeholder="Enter your tribe" value="<?= $studentProfile["OTHERTRIBE"]; ?>"/>
      </div>

      <br/>

      
      <label>Present Address<span class="required">*</span></label>
      <input type="text" name="presentaddress" required value="<?= $studentProfile["PRESENTADDRESS"]; ?>"/>
      <h4>In case of emergency</h4>

      <div class="pu-label-name">
        <label for="height">Contact Person<span class="required">*</span></label>
        <label for="weight">Address<span class="required">*</span></label>
      </div>
      <div class="pu-height-weight">
        <input type="text" name="contactperson" required value="<?= $studentProfile["CONTACTPERSON"]; ?>"/>   
        <input type="text" name="contactpersonaddress" required value="<?= $studentProfile["CONTACTPERSONADDRESS"]; ?>"/>
      </div>

      <div class="pu-label-name">
        <label for="height">Contact Number<span class="required">*</span></label>
        <label for="weight">Relationship<span class="required">*</span></label>
      </div>
      <div class="pu-height-weight">
        <input type="number" name="contactnumber" required value="<?= $studentProfile["CONTACTNUMBER"]; ?>"/>
        <input type="text" name="relationship" required value="<?= $studentProfile["RELATIONSHIP"]; ?>"/>
      </div>
      <h4>Employment Status</h4>
      <label>Are you currently working?<span class="required">*</span></label>
      <div class="pu-radio-selection">
        <input type="radio" name="iscurrentlyworking" value="Yes" required <?php echo $studentProfile["ISCURRENTLYWORKING"] == "Yes" ? "checked" : ""; ?> /> Yes
       &nbsp; &nbsp;  <input type="radio" name="iscurrentlyworking" value="No" required <?php echo $studentProfile["ISCURRENTLYWORKING"] == "No" ? "checked" : ""; ?> /> No<br><br>
      </div>
       <div class="pu-section">II. Educational Background</div>
      <div class="pu-horizontal-line"></div>
      <h4>Elementary</h4><br>
      
      <label>School Name<span class="required">*</span></label>
      <input type="text" name="elementaryschoolname" required value="<?= $studentProfile["ELEMENTARYSCHOOLNAME"]; ?>">
      <small style="color: #555; font-style: italic;">
        Please spell out the full school name. Do not use acronyms.
      </small>
      <br><br>

      <label>School Address<span class="required">*</span></label>
      <input type="text" name="elementaryaddress" value="<?= $studentProfile["ELEMENTARYADDRESS"]; ?>"/><br><br>
      <div class="pu-label-name">
      <label>Year Graduated<span class="required">*</span></label>
      <label class="pu-school-type">School Type<span class="required">*</span></label>
      </div>
      <div class="pu-height-weight">
        <select  class="pu-select"  name="elemyeargraduated" required>
        <option value="" disabled selected>Select Year</option>
          <?php
            $currentYear = date('Y');
            for ($year = $currentYear; $year >= 1980; $year--) {
              echo "<option value=\"$year\" ". ($studentProfile["ELEMYEARGRADUATED"] == $year ? "selected" : "") .">$year</option>";
            }
          ?>
        </select>
       <div class="pu-radio-selection">
          <input type="radio" name="elementaryschooltype" value="Public" required <?php echo $studentProfile["ELEMENTARYSCHOOLTYPE"] == "Public" ? "checked" : ""; ?> /> Public
        &nbsp; &nbsp;   <input type="radio" name="elementaryschooltype" value="Private" required <?php echo $studentProfile["ELEMENTARYSCHOOLTYPE"] == "Private" ? "checked" : ""; ?> /> Private
       </div>

      <br><br>
      </div>

      <h4>Junior High School</h4><br>
      
      <label>School Name<span class="required">*</span></label>
      <input type="text" name="juniorhighschoolname" required value="<?= $studentProfile["JUNIORHIGHSCHOOLNAME"]; ?>"/>
      <small style="color: #555; font-style: italic;">
        Please spell out the full school name. Do not use acronyms.
      </small>
      <br><br>

      <label>School Address<span class="required">*</span></label>
      <input type="text" name="juniorhighaddress" required value="<?= $studentProfile["JUNIORHIGHADDRESS"]; ?>"/><br><br>
      <div class="pu-label-name">
      <label>Year Graduated<span class="required">*</span></label>
      <label class="pu-school-type">School Type<span class="required">*</span></label>
      </div>
      <div class="pu-height-weight">
        <select  class="pu-select" name="junioryeargraduated" required>
        <option value="" disabled selected>Select Year</option>
          <?php
            $currentYear = date('Y');
            for ($year = $currentYear; $year >= 1980; $year--) {
              echo "<option value=\"$year\" ". ($studentProfile["JUNIORYEARGRADUATED"] == $year ? "selected" : "") .">$year</option>";
            }
          ?>
        </select>
        <div class="pu-radio-selection">
          <input type="radio" name="juniorhighschooltype" value="Public" required <?php echo $studentProfile["JUNIORHIGHSCHOOLTYPE"] == "Public" ? "checked" : ""; ?> /> Public
          &nbsp; &nbsp; <input type="radio" name="juniorhighschooltype" value="Private" required <?php echo $studentProfile["JUNIORHIGHSCHOOLTYPE"] == "Private" ? "checked" : ""; ?> /> Private
        </div>
      <br><br>
      </div>

      <h4>Senior Highschool</h4><br>
      
      <label>School Name<span class="required">*</span></label>
      <input type="text" name="seniorhighschoolname" required value="<?= $studentProfile["SENIORHIGHSCHOOLTYPE"]; ?>"/>
      <small style="color: #555; font-style: italic;">
        Please spell out the full school name. Do not use acronyms.
      </small>
      <br><br>

      <label>School Address<span class="required">*</span></label>
      <input type="text" name="seniorhighaddress" required value="<?= $studentProfile["SENIORHIGHADDRESS"]; ?>"/><br><br>
      <div class="pu-label-name">
      <label>Year Graduated<span class="required">*</span></label>
      <label class="pu-school-type">School Type<span class="required">*</span></label>
      </div>
      <div class="pu-height-weight">
        <select  class="pu-select" name="senioryeargraduated" required>
        <option value="" disabled selected>Select Year</option>
          <?php
            $currentYear = date('Y');
            for ($year = $currentYear; $year >= 1980; $year--) {
              echo "<option value=\"$year\" ". ($studentProfile["SENIORYEARGRADUATED"] == $year ? "selected" : "") .">$year</option>";
            }
          ?>
        </select>
        <div class="pu-radio-selection">
          <input type="radio" name="seniorhighschooltype" value="Public" required <?php echo $studentProfile["SENIORHIGHSCHOOLTYPE"] == "Public" ? "checked" : ""; ?> /> Public
          &nbsp; &nbsp; <input type="radio" name="seniorhighschooltype" value="Private" required <?php echo $studentProfile["SENIORHIGHSCHOOLTYPE"] == "Private" ? "checked" : ""; ?> /> Private
        </div>
      <br><br>
      </div>

    <h4>Vocational</h4><br>
      
      <label>School Name</label>
      <input type="text" name="vocationalcoursename" value="<?= $studentProfile["VOCATIONALCOURSENAME"]; ?>"/>
      <small style="color: #555; font-style: italic;">
        Please spell out the full school name. Do not use acronyms.
      </small>
      <br><br>

      <label>School Address</label>
      <input type="text" name="vocationaladdress" value="<?= $studentProfile["VOCATIONALADDRESS"]; ?>"/><br><br>
      <div class="pu-label-name">
      <label>Year Graduated</label>
      <label class="pu-school-type">School Type</label>
      </div>
      <div class="pu-height-weight">
        <select  class="pu-select" name="vocationalyeargraduated">
        <option value="" disabled selected>Select Year</option>
          <?php
            $currentYear = date('Y');
            for ($year = $currentYear; $year >= 1980; $year--) {
              echo "<option value=\"$year\" ". ($studentProfile["VOCATIONALYEARGRADUATED"] == $year ? "selected" : "") .">$year</option>";
            }
          ?>
        </select>
        <div class="pu-radio-selection">
          <input type="radio" name="vocationaltype" value="Public" <?php echo $studentProfile["VOCATIONALTYPE"] == "Public" ? "checked" : ""; ?> /> Public
          &nbsp; &nbsp; <input type="radio" name="vocationaltype" value="Private" <?php echo $studentProfile["VOCATIONALTYPE"] == "Private" ? "checked" : ""; ?> /> Private
        </div>
      <br><br>
      </div>

      <h4>College</h4><br>
      
      <label>School Name</label>
      <input type="text" name="collegeschoolname" value="<?= $studentProfile["COLLEGESCHOOLNAME"]; ?>"/>
      <small style="color: #555; font-style: italic;">
        Please spell out the full school name. Do not use acronyms.
      </small>
      <br><br>

      <label>School Address</label>
      <input type="text" name="collegeaddress" value="<?= $studentProfile["COLLEGEADDRESS"]; ?>"/><br><br>
      <div class="pu-label-name">
      <label>Year Graduated</label>
      <label class="pu-school-type">School Type</label>
      </div>
      <div class="pu-height-weight">
        <select  class="pu-select" name="collegeyeargraduated">
        <option value="" disabled selected>Select Year</option>
          <?php
            $currentYear = date('Y');
            for ($year = $currentYear; $year >= 1980; $year--) {
              echo "<option value=\"$year\" ". ($studentProfile["COLLEGEYEARGRADUATED"] == $year ? "selected" : "") .">$year</option>";
            }
          ?>
        </select>
        <div class="pu-radio-selection">
          <input type="radio" name="collegetype" value="Public" <?php echo $studentProfile["COLLEGETYPE"] == "Public" ? "checked" : ""; ?> /> Public
          &nbsp; &nbsp; <input type="radio" name="collegetype" value="Private" <?php echo $studentProfile["COLLEGETYPE"] == "Private" ? "checked" : ""; ?> /> Private
        </div>
      <br><br>
      </div>
      <br>      
      <label>Honors Received or Special Awards<span class="required">*</span></label>
      <input type="text" name="honorsreceived" required value="<?= $studentProfile["HEIGHT"]; ?>"/><br><br>

      <label>Nature of Schooling<span class="required">*</span></label>
      <div class="pu-height-weight">
        <div class="pu-radio-selection">
          <input type="radio" name="natureofschooling" value="Continuous" required <?php echo $studentProfile["NATUREOFSCHOOLING"] == "Continuous" ? "checked" : ""; ?> /> Continuous
     &nbsp; &nbsp;            <input type="radio" name="natureofschooling" value="Interrupted" required <?php echo $studentProfile["NATUREOFSCHOOLING"] == "Interrupted" ? "checked" : ""; ?> /> Interrupted, why?
        </div>
        <input class="pu-input-width" type="text" name="reasonforstopping" value="<?= $studentProfile["REASONFORSTOPPING"]; ?>"/><br><br>
      <br><br>
      </div>

      <div class="pu-section">III. Home and Family Background</div>
      <div class="pu-horizontal-line"></div>

      <h4>Father's Information</h4><br>

      <div class="pu-label-name">
        <label for="height">Full Name<span class="required">*</span></label>
        <label for="weight">Age<span class="required">*</span></label>
      </div>
      <div class="pu-height-weight">
        <input type="text" name="fatherfullname" required value="<?= $studentProfile["FATHERFULLNAME"]; ?>"/>   
        <input type="number" name="fatherage" oninput="this.value = this.value.replace(/[^0-9]/g, '');" required  value="<?= $studentProfile["FATHERAGE"]; ?>"/>
      </div>

      <div class="pu-label-name">
        <label>Educational Attainment<span class="required">*</span></label>
        <label class="pu-deceased-label">Is this person living/deceased?<span class="required">*</span></label>
      </div>

      <div class="pu-height-weight">
        <div  class="">
          <select class="pu-select" name="fathereducationalattainment" required>
              <option value="<?= $studentProfile["FATHEREDUCATIONALATTAINMENT"]; ?>" selected>
                <?= $studentProfile["FATHEREDUCATIONALATTAINMENT"]; ?>
              </option>
                <option value="Elementary">None</option>  
                <option value="Elementary">Elementary</option>  
                <option value="High School Diploma">High School Diploma</option>  
                <option value=" Bachelors Degree"> Bachelors Degree</option>  
                <option value="Masters">Masters</option>
                <option value="Doctors">Doctors</option>
                <option value=" Doctor of Medicine"> Doctor of Medicine</option>
                <option value="Juris Doctor">Juris Doctor</option>
          </select>
        </div>
          <div class="pu-radio-selection">
            <input type="radio" name="fatherlivingstatus" value="Living" required <?php echo $studentProfile["FATHERLIVINGSTATUS"] == "Living" ? "checked" : ""; ?> /> Living
        &nbsp; &nbsp;     <input type="radio" name="fatherlivingstatus" value="Deceased" required <?php echo $studentProfile["FATHERLIVINGSTATUS"] == "Deceased" ? "checked" : ""; ?> /> Deceased
          </div>
      <br><br>
      </div>




      <label>Occupation<span class="required">*</span></label>
      <input type="text" name="occupation" required value="<?= $studentProfile["OCCUPATION"]; ?>"/><br><br>

      <h4>Mothers's Information</h4><br>

      <div class="pu-label-name">
        <label for="height">Full Name<span class="required">*</span></label>
        <label for="weight">Age<span class="required">*</span></label>
      </div>
      <div class="pu-height-weight">
        <input type="text" name="motherfullname" required value="<?= $studentProfile["MOTHERFULLNAME"]; ?>"/>   
        <input type="number" name="motherage" oninput="this.value = this.value.replace(/[^0-9]/g, '');" required value="<?= $studentProfile["MOTHERAGE"]; ?>"/>
      </div>

      <div class="pu-deceased-label">
        <label>Educational Attainment<span class="required">*</span></label>
        <label class="pu-deceased-label">Is this person living/deceased?<span class="required">*</span></label>
      </div>

      <div class="pu-height-weight">
        <div  class="">
          <select class="pu-select" name="mothereducationalattainment" required>
              <option value="<?= $studentProfile["MOTHEREDUCATIONALATTAINMENT"]; ?>" selected>
                <?= $studentProfile["MOTHEREDUCATIONALATTAINMENT"]; ?>
              </option>
                <option value="Elementary">None</option>  
                <option value="Elementary">Elementary</option>  
                <option value="High School Diploma">High School Diploma</option>  
                <option value=" Bachelors Degree"> Bachelors Degree</option>  
                <option value="Masters">Masters</option>
                <option value="Doctors">Doctors</option>
                <option value=" Doctor of Medicine"> Doctor of Medicine</option>
                <option value="Juris Doctor">Juris Doctor</option>
          </select>
        </div>
        <div class="pu-radio-selection">
          <input type="radio" name="motherlivingstatus" value="Living" required <?php echo $studentProfile["MOTHERLIVINGSTATUS"] == "Living" ? "checked" : ""; ?> /> Living
       &nbsp; &nbsp;    <input type="radio" name="motherlivingstatus" value="Deceased" required <?php echo $studentProfile["MOTHERLIVINGSTATUS"] == "Deceased" ? "checked" : ""; ?> /> Deceased
        </div>
      <br><br>
      </div>

      <h4>Guardian's Information (if any)</h4><br>
      
      <div class="pu-label-name">
        <label for="height">Full Name</label>
        <label for="weight">Age</label>
      </div>
      <div class="pu-height-weight">
        <input type="text" name="guardianfullname" value="<?= $studentProfile["GUARDIANFULLNAME"]; ?>"/>   
        <input type="number" name="guardianage" oninput="this.value = this.value.replace(/[^0-9]/g, '');" value="<?= $studentProfile["GUARDIANAGE"]; ?>"/>
      </div>

      <div class="pu-deceased-label">
        <label for="height">Educational Attainment</label>
        <label for="weight">Occupation</label>
      </div>
      <div class="pu-height-weight">
        <input type="text" name="educationalattainment" value="<?= $studentProfile["EDUCATIONALATTAINMENT"]; ?>"/>   
        <input type="text" name="guardianoccupation" value="<?= $studentProfile["GUARDIANOCCUPATION"]; ?>"/>
      </div>

      <label>Parent's Marital Relationship<span class="required">*</span></label><br>

       <div class="pu-radio-grid">
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
              class="pu-input-padding input-width"
              type="text"
              name="othermaritalstatusreason"
              id="otherInput"
              placeholder="Please specify"
              value="<?= $studentProfile["OTHERMARITALSTATUSREASON"]; ?>" />
          </div>
      </div>
    </div>


        <label>Who finances your schooling?<span class="required">*</span></label><br>

       <div class="pu-radio-grid">
          <div>
           <input type="checkbox" name="financers" value="1" <?php echo $studentProfile["FINANCERS"] == "1" ? "checked" : ""; ?> /> Parents
          </div>
          <div>
            <input type="checkbox" name="financers" value="2" <?php echo $studentProfile["FINANCERS"] == "2" ? "checked" : ""; ?>/> Brother/Sister
          </div> 
          <div>
            <input type="checkbox" name="financers" value="3" <?php echo $studentProfile["FINANCERS"] == "3" ? "checked" : ""; ?>/> Spouse
          </div>  
          <div>
            <input type="checkbox" name="financers" value="5" <?php echo $studentProfile["FINANCERS"] == "5" ? "checked" : ""; ?>/> Self-supporting/working
          </div>  
        </div>
        <div class="pu-check-box">
            <input type="checkbox" name="otherFinancer"> Others, please specify
            <input class="pu-input-width input-padding" type="text" name="otherfinancer" value="<?= $studentProfile["OTHERFINANCER"]; ?>"/> 
        </div>

        <div class="pu-section">IV. Health Information</div>
        <div class="pu-horizontal-line"></div>

        <legend>1. Do you have problems with...</legend><br>
        
        <div class="pu-checkbox-group">
        <label>
          <input type="checkbox" name="problemvision" value="1" <?php echo $studentProfile["FINANCERS"] == "1" ? "checked" : ""; ?>/>
          Vision (Please specify)
        </label>
        
        <input type="text" name="visionspecify" class="pu-form-control" value="<?= $studentProfile["VISIONSPECIFY"]; ?>"/>
      </div>

      <div class="pu-checkbox-group">
        <label>
          <input type="checkbox" name="problemspeech" value="1" <?php echo $studentProfile["PROBLEMSPEECH"] == "1" ? "checked" : ""; ?>/>
          Speech (Please specify)
        </label>
        <input type="text" name="speechspecify" class="pu-form-control" value="<?= $studentProfile["SPEECHSPECIFY"]; ?>"/>
      </div>

      <div class="pu-checkbox-group">
        <label>
          <input type="checkbox" name="problemhearing" value="1" <?php echo $studentProfile["PROBLEMHEARING"] == "1" ? "checked" : ""; ?> />
          Hearing (Please specify)
        </label>
        <input type="text" name="hearingspecify" class="pu-form-control" value="<?= $studentProfile["HEARINGSPECIFY"]; ?>"/>
      </div>

      <div class="pu-checkbox-group">
        <label>
          <input type="checkbox" name="problemhealth" value="1" <?php echo $studentProfile["PROBLEMHEALTH"] == "1" ? "checked" : ""; ?> />
          General Health (Please specify)
        </label>
        <input type="text" name="healthspecify" class="pu-form-control" value="<?= $studentProfile["HEALTHSPECIFY"]; ?>"/>
      </div>

      <div class="pu-checkbox-group">
        <label>
          <input type="checkbox" name="problemdisability" value="1" <?php echo $studentProfile["PROBLEMDISABILITY"] == "1" ? "checked" : ""; ?>/>
          Physical Disability (Please specify)
        </label>
        <input type="text" name="disabilityspecify" class="pu-form-control" value="<?= $studentProfile["DISABILITYSPECIFY"]; ?>"/>
      </div>

      <legend>2. Have you been diagnosed with certain illnesses before?<span class="required">*</span></legend>
      <div class="pu-radio-selection">
        <input type="radio" name="diagnosedbefore" value="Yes" required <?php echo $studentProfile["DIAGNOSEDBEFORE"] == "Yes" ? "checked" : ""; ?> /> Yes
        &nbsp; &nbsp;       <input type="radio" name="diagnosedbefore" value="No" required <?php echo $studentProfile["DIAGNOSEDBEFORE"] == "No" ? "checked" : ""; ?> /> No<br><br>
      </div>

      <div id="otherInputDiagnosed" style="display:none">
          <label>If yes, please specify<span class="required">*</span></label>
          <input type="text" name="diagnosedspecify" id="otherInput">
      </div>

      <legend>3. Have you taken any psychological tests before?<span class="required">*</span></legend>
        <div class="radio-selection">
          <input type="radio" name="psychtestbefore" value="Yes" required> Yes
          &nbsp; &nbsp;       <input type="radio" name="psychtestbefore" value="No" required> No<br><br>
        </div>

      <h4>Test Record</h4><br>

      <div class="pu-test-row">
        <div>
          <label for="test1">Test type</label>
           <select name="test1" class="pu-select" required>
              <option value="<?= $studentProfile["TEST1"]; ?>" selected>
                  <?= $studentProfile["TEST1"]; ?>
              </option>
              <option value="Intelligence Tests">Intelligence Tests</option>
              <option value="Achievement Tests">Achievement Tests</option>
              <option value="Aptitude Tests">Aptitude Tests</option>
              <option value="Personality Tests">Personality Tests</option>
              <option value="Neuropsychological Tests">Neuropsychological Tests</option>
              <option value="Behavioral Assessments">Behavioral Assessments</option>
              <option value="Diagnostic Tests for Mental Disorders">Diagnostic Tests for Mental Disorders</option>
              <option value="Interest and Career Tests">Interest and Career Tests</option>
           </select>
        </div>
        <div>
          <label for="date1">Date</label>
          <input type="date" name="date1" value="<?= $studentProfile["DATE1"]; ?>"/>
        </div>
        <div>
          <label for="score1">Score</label>
          <input type="text" name="score1" value="<?= $studentProfile["SCORE1"]; ?>"/>
        </div>
        <div>
          <label for="rank1">Rank</label>
          <input type="text" name="rank1" value="<?= $studentProfile["RANK1"]; ?>"/>
        </div>
        </div>

       <div class="pu-test-row">
        <div>
          <label for="test2">Test type</label>
          <select name="test2" class="pu-select" required>
              <option value="<?= $studentProfile["TEST2"]; ?>" selected>
                  <?= $studentProfile["TEST2"]; ?>
              </option>
              <option value="Intelligence Tests">Intelligence Tests</option>
              <option value="Achievement Tests">Achievement Tests</option>
              <option value="Aptitude Tests">Aptitude Tests</option>
              <option value="Personality Tests">Personality Tests</option>
              <option value="Neuropsychological Tests">Neuropsychological Tests</option>
              <option value="Behavioral Assessments">Behavioral Assessments</option>
              <option value="Diagnostic Tests for Mental Disorders">Diagnostic Tests for Mental Disorders</option>
              <option value="Interest and Career Tests">Interest and Career Tests</option>
           </select>
        </div>
        <div>
          <label for="date2">Date</label>
          <input type="date" name="date2" value="<?= $studentProfile["DATE2"]; ?>"/>
        </div>
        <div>
          <label for="score2">Score</label>
          <input type="text" name="score2" value="<?= $studentProfile["SCORE2"]; ?>"/>
        </div>
        <div>
          <label for="rank2">Rank</label>
          <input type="text" name="rank2" value="<?= $studentProfile["RANK2"]; ?>"/>
        </div>
       </div>

       <div class="pu-test-row">
        <div>
          <label for="test3">Test type</label>
          <select name="test3" class="pu-select" required>
              <option value="<?= $studentProfile["TEST3"]; ?>" selected>
                  <?= $studentProfile["TEST3"]; ?>
              </option>
              <option value="Intelligence Tests">Intelligence Tests</option>
              <option value="Achievement Tests">Achievement Tests</option>
              <option value="Aptitude Tests">Aptitude Tests</option>
              <option value="Personality Tests">Personality Tests</option>
              <option value="Neuropsychological Tests">Neuropsychological Tests</option>
              <option value="Behavioral Assessments">Behavioral Assessments</option>
              <option value="Diagnostic Tests for Mental Disorders">Diagnostic Tests for Mental Disorders</option>
              <option value="Interest and Career Tests">Interest and Career Tests</option>
           </select>
        </div>
        <div>
          <label for="date3">Date</label>
          <input type="date" name="date3" value="<?= $studentProfile["DATE3"]; ?>"/>
        </div>
        <div>
          <label for="score3">Score</label>
          <input type="text" name="score3" value="<?= $studentProfile["SCORE3"]; ?>"/>
        </div>
        <div>
          <label for="rank3">Rank</label>
          <input type="text" name="rank3" value="<?= $studentProfile["RANK3"]; ?>"/>
        </div>
      </div>
      
      <div>
        <input type="checkbox" name="medicalInfoConsent" value="1">
        <span style="color:rgb(55, 53, 53); font-style:italic;">I expressly consent to the collection and processing of my medical history and psychological assessment 
        information in accordance with the Data Privacy Act of 2012.</span>
      </div>  

      <div class="pu-section">V. Other Information</div>
      <div class="pu-horizontal-line"></div>

      <label>1. Indicate interest group to which you are inclined to<span class="required">*</span></label><br>

      <div class="pu-radio-grid">
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

        <label>2. Have you consulted/been sent to see the Guidance Counselor before?<span class="required">*</span></label>

         <div class="pu-radio-selection">
          <input type="radio" name="consultedstatus" value="Yes" required <?php echo $studentProfile["CONSULTEDSTATUS"] == "Yes" ? "checked" : ""; ?> /> Yes
       &nbsp; &nbsp;   <input type="radio" name="consultedstatus" value="No" required <?php echo $studentProfile["CONSULTEDSTATUS"] == "No" ? "checked" : ""; ?> /> No<br><br>
        </div>

        <label>If yes, what was/were the reason(s)?</label>
        <input type="text" name="reasonforconsultation" value="<?= $studentProfile["HEIGHT"]; ?>" />

        <!-- <div class="pu-info-box">
          <i class="pu-fa-solid fa-circle-info"></i>

          <span class="pu-info-text">Proceed to this section only if you intend to undergo 
            counseling and listening session with a Guidance Service Specialist</span>
        </div><br> -->

        <label>3. How may your Guidance Counselor help you?<span class="required">*</span></label>

         <div class="pu-radio-grid">
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
        <div class="pu-check-box">
            <input type="checkbox" name="others[]" value="others"> Others, please specify
            <input class="pu-input-width input-padding" type="text" name="otherguidanceconcern" required value="<?= $studentProfile["OTHERGUIDANCECONCERN"]; ?>"/>
        </div><br>
        
        <div class="pu-privacy-notice">
          <input class="pu-privacy-checkbox" type="checkbox" name="privacyCheck" value="1" required>
          
        <p><span class="privacy-text">DISCLAIMER:</span> I authorize the Guidance and Counseling Section, Division of Student Affairs, 
          to collect and process my personal and sensitive information for academic support, counseling, emergency contact, and student profiling. 
          I understand my data will be securely stored, accessed only by authorized personnel, and handled confidentially. I am aware of my rights under RA 10173 
          (Data Privacy Act of 2012), including access, correction, and withdrawal of consent at any time. My data will be retained for five (5) years and securely
          disposed of afterward. <br> <br>

         <span class="pu-signature-text">By signing below, I give my informed consent to the collection and use of my data as stated.</span>
         </div>
          <div class="pu-signature-container">
           <span>[Draw your signature inside the box - THIS IS DISABLED UNLESS THE DISCLAIMER is CHECKED]</span>
           <canvas class="pu-sign-canvas" id="signature"></canvas>
          <div>
           <button type="button" id="clearBtn">Clear</button>
          </div>
         </div>

          <span style="font-weight:bold; padding-bottom:14px; display:inline-block;">Parental/Guardian Consent (for students under 18)</span>
          <div>
            <input type="checkbox" name="parentalConsent" value="1">  
            <span style="font-style:italic">I am the parent/legal guardian and I give my full consent for my child’s participation in counseling services and data processing in compliance with the Data Privacy Act of 2012.</span><br><br>
          </div>

          <div class="pu-signature-container">
            <span>[Draw your signature inside the box - THIS IS DISABLED UNLESS THE DISCLAIMER is CHECKED]</span>
            <canvas class="pu-sign-canvas" id="parentSignature"></canvas>
            <div>
              <button type="button" id="clearParentBtn">Clear</button>
            </div>
          </div>
        
        <div class="pu-form-actions">
            <div class="pu-left-buttons">
                <button type="submit" class="pu-btn-submit">Submit Form</button>
                <button class="pu-btn-cancel">Cancel</button>
            </div>
            <div class="pu-right-buttons">
                <button class="pu-btn-icon">Clear Form</button>
                <button type="button" id="downloadPdfBtn" class="pu-btn-icon"><i class="pu-fas fa-download"></i>Download</button>
                <button class="pu-btn-icon"><i class="pu-fas fa-share-alt"></i>Share</button>
            </div>
      </div>
  </form>

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
const consultedRadios = document.getElementsByName('consultedstatus');
const reasonConsultInput = document.querySelector('input[name="reasonforconsultation"]');
const parentCanvas = document.getElementById("parentSignature");
const parentCtx = parentCanvas.getContext("2d");
const clearParentBtn = document.getElementById("clearParentBtn");
const tribeDropdown = document.getElementById('tribeDropdown');
const otherTribeDiv = document.getElementById('otherTribeDiv');
const otherTribeInput = document.getElementById('otherTribeInput');
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


  canvas.addEventListener("mousedown", startDraw);
  canvas.addEventListener("mousemove", draw);
  canvas.addEventListener("mouseup", stopDraw);

  
  canvas.addEventListener("touchstart", (e) => startDraw(e.touches[0]));
  canvas.addEventListener("touchmove", (e) => {
    draw(e.touches[0]);
    e.preventDefault(); 
  });
  
  canvas.addEventListener("touchend", stopDraw);

    
  clearBtn.addEventListener("click", () => {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    savedImage.src = "";
  });

  function setSignatureEnabled(enabled) {
    canvas.style.pointerEvents = enabled ? 'auto' : 'none';
    canvas.style.opacity = enabled ? '1' : '0.5';
  }


  setSignatureEnabled(privacyCheckbox.checked);


  privacyCheckbox.addEventListener('change', function() {
    setSignatureEnabled(this.checked);
  });

    
  if (form && canvas) {
    form.addEventListener('submit', function(e) {  
      const signatureData = canvas.toDataURL("image/png");
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
  radio.addEventListener('change', function() {
    if (this.value === 'other' && this.checked) {
      otherInputWrapper.style.display = 'block';
      otherInput.setAttribute('required', 'required');
    } else if (this.checked) {
      otherInputWrapper.style.display = 'none';
      otherInput.removeAttribute('required');
      otherInput.value = '';
    }
  });
});

window.addEventListener('DOMContentLoaded', function() {
  const checkedRadio = Array.from(radios).find(r => r.checked);
  if (checkedRadio && checkedRadio.value === 'other') {
    otherInputWrapper.style.display = 'block';
    otherInput.setAttribute('required', 'required');
  } else {
    otherInputWrapper.style.display = 'none';
    otherInput.removeAttribute('required');
  }
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
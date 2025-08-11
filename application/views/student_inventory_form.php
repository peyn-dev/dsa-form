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
          <input type="number" name="height" required>   
          <input type="number" name="weight" required>
        </div>
        
        <label>Present Address</label>
        <input type="text" name="present_address" required>
        <h4>In case of emergency</h4>

        <div class="label-name">
          <label for="height">Contact Person</label>
          <label for="weight">Address</label>
        </div>
        <div class="height-weight">
          <input type="text" name="contact_person" required>   
          <input type="text" name="contact_person_address" required>
        </div>

        <div class="label-name">
          <label for="height">Contact Number</label>
          <label for="weight">Relationship</label>
        </div>
        <div class="height-weight">
          <input type="number" name="contact_number" required>
          <input type="text" name="relationship" required>
        </div>
        <h4>Employment Status</h4>
        <label>Are you currently working?</label>
        <div class="radio-selection">
          <input type="radio" name="is_currently_working" value="Yes" required> Yes
          <input type="radio" name="is_currently_working" value="No" required> No<br><br>
        </div>
         <div class="section">II. Educational Background</div>
        <div class="horizontal-line"></div>
        <h4>Elementary</h4><br>
        
        <label>School Name</label>
        <input type="text" name="elementary_school_name"><br><br>

        <label>School Address</label>
        <input type="text" name="elementary_address"><br><br>
        <div class="label-name">
        <label>Year Graduated</label>
        <label class="school-type">School Type</label>
        </div>
        <div class="height-weight">
          <select name="elem_year_graduated" required>
          <option value="" disabled selected>Select Year</option>
            <?php
              $currentYear = date('Y');
              for ($year = $currentYear; $year >= 1980; $year--) {
                echo "<option value=\"$year\">$year</option>";
              }
            ?>
          </select>
          <div class="radio-selection">
            <input type="radio" name="elementary_school_type" value="Public" required> Public
            <input type="radio" name="elementary_school_type" value="Private" required> Private
          </div>
        <br><br>
        </div>

        <h4>Junior High School</h4><br>
        
        <label>School Name</label>
        <input type="text" name="junior_high_school_name"><br><br>

        <label>School Address</label>
        <input type="text" name="junior_high_address"><br><br>
        <div class="label-name">
        <label>Year Graduated</label>
        <label class="school-type">School Type</label>
        </div>
        <div class="height-weight">
          <select name="junior_year_graduated" required>
          <option value="" disabled selected>Select Year</option>
            <?php
              $currentYear = date('Y');
              for ($year = $currentYear; $year >= 1980; $year--) {
                echo "<option value=\"$year\">$year</option>";
              }
            ?>
          </select>
          <div class="radio-selection">
            <input type="radio" name="junior_high_school_type" value="Public" required> Public
            <input type="radio" name="junior_high_school_type" value="Private" required> Private
          </div>
        <br><br>
        </div>
        
        <h4>Vocational</h4><br>
        
        <label>School Name</label>
        <input type="text" name="vocational_course_name"><br><br>

        <label>School Address</label>
        <input type="text" name="vocational_address"><br><br>
        <div class="label-name">
        <label>Year Graduated</label>
        <label class="school-type">School Type</label>
        </div>
        <div class="height-weight">
          <select name="vocational_year_graduated" required>
          <option value="" disabled selected>Select Year</option>
            <?php
              $currentYear = date('Y');
              for ($year = $currentYear; $year >= 1980; $year--) {
                echo "<option value=\"$year\">$year</option>";
              }
            ?>
          </select>
          <div class="radio-selection">
            <input type="radio" name="vocational_type" value="Public" required> Public
            <input type="radio" name="vocational_type" value="Private" required> Private
          </div>
        <br><br>
        </div>

        <h4>Senior Highschool</h4><br>
        
        <label>School Name</label>
        <input type="text" name="senior_high_school_name"><br><br>

        <label>School Address</label>
        <input type="text" name="senior_high_address"><br><br>
        <div class="label-name">
        <label>Year Graduated</label>
        <label class="school-type">School Type</label>
        </div>
        <div class="height-weight">
          <select name="senior_year_graduated" required>
          <option value="" disabled selected>Select Year</option>
            <?php
              $currentYear = date('Y');
              for ($year = $currentYear; $year >= 1980; $year--) {
                echo "<option value=\"$year\">$year</option>";
              }
            ?>
          </select>
          <div class="radio-selection">
            <input type="radio" name="senior_high_school_type" value="Public" required> Public
            <input type="radio" name="senior_high_school_type" value="Private" required> Private
          </div>
        <br><br>
        </div>

        <h4>College</h4><br>
        
        <label>School Name</label>
        <input type="text" name="college_school_name"><br><br>

        <label>School Address</label>
        <input type="text" name="college_address"><br><br>
        <div class="label-name">
        <label>Year Graduated</label>
        <label class="school-type">School Type</label>
        </div>
        <div class="height-weight">
          <select name="college_year_graduated" required>
          <option value="" disabled selected>Select Year</option>
            <?php
              $currentYear = date('Y');
              for ($year = $currentYear; $year >= 1980; $year--) {
                echo "<option value=\"$year\">$year</option>";
              }
            ?>
          </select>
          <div class="radio-selection">
            <input type="radio" name="college_type" value="Public" required> Public
            <input type="radio" name="college_type" value="Private" required> Private
          </div>
        <br><br>
        </div>
        <br>      
        <label>Honors Received or Special Awards</label>
        <input type="text" name="honors_received"><br><br>

        <label>Nature of Schooling</label>
        <div class="height-weight">
          <div class="radio-selection">
            <input type="radio" name="nature_of_schooling" value="Continuous" required> Continuous
            <input type="radio" name="nature_of_schooling" value="Interrupted" required> Interrupted, why?
          </div>
          <input class="input-width" type="text" name="reason_for_stopping"><br><br>
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
          <input type="text" name="father_full_name" required>   
          <input type="number" name="father_age" required>
        </div>

        <div class="deceased-label">
          <label>Educational Attainment</label>
          <label class="deceased-label">Is this person living/deceased?</label>
        </div>

        <div class="height-weight">
          <input class="input-width" type="text" name="father_educational_attainment" required><br><br>
          <div class="radio-selection">
            <input type="radio" name="father_living_status" value="Living" required> Living
            <input type="radio" name="father_living_status" value="Deceased" required> Deceased
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
          <input type="text" name="mother_full_name" required>   
          <input type="number" name="mother_age" required>
        </div>

        <div class="deceased-label">
          <label>Educational Attainment</label>
          <label class="deceased-label">Is this person living/deceased?</label>
        </div>

        <div class="height-weight">
          <input class="input-width" type="text" name="mother_educational_attainment" required><br><br>
          <div class="radio-selection">
            <input type="radio" name="mother_living_status" value="Living" required> Living
            <input type="radio" name="mother_living_status" value="Deceased" required> Deceased
          </div>
        <br><br>
        </div>

        <h4>Guardian's Information (if any)</h4><br>
        
        <div class="label-name">
          <label for="height">Full Name</label>
          <label for="weight">Age</label>
        </div>
        <div class="height-weight">
          <input type="text" name="guardian_full_name" required>   
          <input type="number" name="guardian_age" required>
        </div>

        <div class="deceased-label">
          <label for="height">Educational Attainment</label>
          <label for="weight">Occupation</label>
        </div>
        <div class="height-weight">
          <input type="text" name="educational_attainment" required>   
          <input type="text" name="guardian_occupation" required>
        </div>

        <h4>Family Background</h4><br>
        
        <div class="family-label">
          <label for="height">Number of children</label>
          <label for="weight">Number of brothers</label>
          <label for="weight">Number of sisters</label>
        </div>
        <div class="height-weight">
          <input type="number" name="num_of_children" required>   
          <input type="number" name="num_of_brothers" required>
          <input type="number" name="num_of_sisters" required>
        </div>

        <label>Parent's Marital Relationship</label><br>

         <div class="radio-grid">
          <div>
            <label>
              <input type="radio" name="parents_marital_status" value="Married and staying together" required>
              Married and staying together
            </label>
          </div>
          <div>
            <label>
              <input type="radio" name="parents_marital_status" value="Not married but together" required>
              Not married but staying together
            </label>
          </div>
          <div>
            <label>
              <input type="radio" name="parents_marital_status" value="Single Parent" required>
              Single Parent
            </label>
          </div>
          <div>
            <label>
              <input type="radio" name="parents_marital_status" value="Married but separated" required>
              Married but separated
            </label>
          </div>
          <div>
            <label>
              <input type="radio" name="parents_marital_status" value="other" required id="otherRadio">
              Others, please specify
            </label>
            <div id="otherInputWrapper" style="display: none; margin-top: 8px;">
              <input
                class="input-padding input-width"
                type="text"
                name="other_marital_status_reason"
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
              <input class="input-width input-padding" type="text" name="other_financer"> 
          </div>

          <div class="section">IV. Health Information</div>
          <div class="horizontal-line"></div>

          <legend>1. Do you have problems with...</legend><br>
          
          <div class="checkbox-group">
          <label>
            <input type="checkbox" name="problem_vision" value="1">
            Vision (Please specify)
          </label>
          
          <input type="text" name="vision_specify" class="form-control">
        </div>

        <div class="checkbox-group">
          <label>
            <input type="checkbox" name="problem_speech" value="1">
            Speech (Please specify)
          </label>
          <input type="text" name="speech_specify" class="form-control">
        </div>

        <div class="checkbox-group">
          <label>
            <input type="checkbox" name="problem_hearing" value="1">
            Hearing (Please specify)
          </label>
          <input type="text" name="hearing_specify" class="form-control">
        </div>

        <div class="checkbox-group">
          <label>
            <input type="checkbox" name="problem_health" value="1">
            General Health (Please specify)
          </label>
          <input type="text" name="health_specify" class="form-control">
        </div>

        <div class="checkbox-group">
          <label>
            <input type="checkbox" name="problem_disability" value="1">
            Physical Disability (Please specify)
          </label>
          <input type="text" name="disability_specify" class="form-control">
        </div>

        <legend>2. Have you been diagnosed with certain illnesses before?</legend>
        <div class="radio-selection">
          <input type="radio" name="diagnosed_before" value="Yes" required> Yes
          <input type="radio" name="diagnosed_before" value="No" required> No<br><br>
        </div>

        <h4>Illness Record</h4><br>

         <div class="label-name">
          <label for="height">Illness</label>
          <label for="weight">Date Diagnosed</label>
        </div>
        <div class="height-weight">
          <input type="text" name="illness" required>   
          <input type="date" name="date_diagnosed" required>
        </div>

        <div class="label-name">
          <label for="height">Illness</label>
          <label for="weight">Date Diagnosed</label>
        </div>
        <div class="height-weight">
          <input type="text" name="illness1" required>
          <input type="date" name="date_diagnosed1" required>
        </div>

        <div class="label-name">
          <label for="height">Illness</label>
          <label for="weight">Date Diagnosed</label>
        </div>
        <div class="height-weight">
          <input type="text" name="illness2" required>
          <input type="date" name="date_diagnosed2" required>
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
              <input type="checkbox" name="social_studies" value="1"> Social Studies
            </div>  
             <div>
              <input type="checkbox" name="religious" value="1"> Religious
            </div>
            <div>
              <input type="checkbox" name="civic_awareness" value="1"> Civic Awareness/Services
            </div> 
            <div>
              <input type="checkbox" name="others_interests" value="others_interests"> Others
            </div> 
          </div><br>

          <label>2. Have you consulted/been sent to see the Guidance Counselor before?</label>

           <div class="radio-selection">
            <input type="radio" name="consulted_status" value="Yes" required> Yes
            <input type="radio" name="consulted_status" value="No" required> No<br><br>
          </div>

          <label>If yes, what was/were the reason(s)?</label>
          <input type="text" name="reason_for_consultation" required>

          <div class="info-box">
            <i class="fa-solid fa-circle-info"></i>

            <span class="info-text">Proceed to this section only if you intend to undergo 
              counseling and listening session with a Guidance Service Specialist</span>
          </div><br>

          <label>3. How may your Guidance Counselor help you? </label>

           <div class="radio-grid">
            <div>
             <input type="checkbox" name="family_matters" value="1"> Family Matters
            </div>
            <div>
              <input type="checkbox" name="career_concerns" value="1"> Career Concerns
            </div> 
            <div>
              <input type="checkbox" name="relationship_concerns" value="1"> Relationship Concerns
            </div>
            <div>
              <input type="checkbox" name="self_concerns" value="1"> Self
            </div>  
            <div>
              <input type="checkbox" name="concerns_with_teachers" value="1"> Concern with Teachers
            </div>
            <div>
              <input type="checkbox" name="financial_matters" value="1"> Financial Matters
            </div>
            <div>
              <input type="checkbox" name="academic_concerns" value="1"> Academic Concerns
            </div> 
            <div>
              <input type="checkbox" name="health_concerns" value="1"> Health Concerns
            </div>   
          </div> 
          <div class="check-box">
              <input type="checkbox" name="others[]" value="others"> Others, please specify
              <input class="input-width input-padding" type="text" name="other_guidance_concern" required> 
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

const radios = document.getElementsByName('parents_marital_status');
const otherInputWrapper = document.getElementById('otherInputWrapper');
const otherInput = document.getElementById('otherInput');
const othersCheckbox = document.querySelector('input[type="checkbox"][name="others[]"][value="others"]');
const othersFinancerCheckbox = document.querySelector('input[type="checkbox"][name="otherFinancer"][value="others"]');
const otherGuidanceInput = document.querySelector('input[name="other_guidance_concern"]');
const otherFinancerInput = document.querySelector('input[name="other_financer"]');
const diagnosedRadios = document.getElementsByName('diagnosed_before');
const privacyCheckbox = document.querySelector('input[name="privacyCheck"]');
const submitBtn = document.querySelector('button[type="submit"]');
const schoolingRadios = document.getElementsByName('nature_of_schooling');
const reasonInput = document.querySelector('input[name="reason_for_stopping"]');
const illnessInputs = [
  document.querySelector('input[name="illness"]'),
  document.querySelector('input[name="date_diagnosed"]'),
  document.querySelector('input[name="illness1"]'),
  document.querySelector('input[name="date_diagnosed1"]'),
  document.querySelector('input[name="illness2"]'),
  document.querySelector('input[name="date_diagnosed2"]')
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


</script>

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Student_model extends CI_Model {

    public function insert_profile($data) {
        $fields = [
            'height', 'weight', 'tribe', 'other', 'othertribe', 'presentaddress', 'contactperson', 'contactpersonaddress',
            'contactnumber', 'relationship', 'iscurrentlyworking', 'elementaryschoolname',
            'elementaryaddress', 'elemyeargraduated', 'elementaryschooltype',
            'juniorhighschoolname', 'juniorhighaddress', 'junioryeargraduated',
            'juniorhighschooltype', 'vocationalcoursename', 'vocationaladdress',
            'vocationalyeargraduated', 'vocationaltype', 'seniorhighschoolname',
            'seniorhighaddress', 'senioryeargraduated', 'seniorhighschooltype',
            'collegeschoolname', 'collegeaddress', 'collegeyeargraduated', 'collegetype',
            'honorsreceived', 'natureofschooling', 'reasonforstopping',
            'fatherfullname', 'fatherage', 'fathereducationalattainment',
            'fatherlivingstatus', 'occupation', 'motherfullname', 'motherage',
            'mothereducationalattainment', 'motherlivingstatus', 'guardianfullname',
            'guardianage', 'educationalattainment', 'guardianoccupation', 'numofchildren',
            'numofbrothers', 'numofsisters', 'parentsmaritalstatus', 'othermaritalstatusreason',
            'financers', 'otherfinancer', 'problemvision', 'visionspecify',
            'problemspeech', 'speechspecify', 'problemhearing', 'hearingspecify',
            'problemhealth', 'healthspecify', 'problemdisability', 'disabilityspecify',
            'diagnosedbefore', 'illness', 'datediagnosed', 'illness1', 'datediagnosed1',
            'illness2', 'datediagnosed2', 'sports', 'science', 'arts', 'socialstudies',
            'religious', 'civicawareness', 'othersinterests', 'consultedstatus',
            'reasonforconsultation', 'familymatters', 'careerconcerns', 'relationshipconcerns',
            'selfconcerns', 'concernswithteachers', 'financialmatters', 'academicconcerns',
            'healthconcerns', 'otherguidanceconcern'
        ];

        $values = [];
        foreach ($fields as $field) {
            $values[] = isset($data[$field]) ? $data[$field] : null;
        }

        $placeholders = implode(', ', array_fill(0, count($fields), '?'));
        $fieldList = implode(', ', $fields);

        $sql = "INSERT INTO STUDENT_PROFILE ($fieldList) VALUES ($placeholders)";

        return $this->db->query($sql, $values);
    }
}

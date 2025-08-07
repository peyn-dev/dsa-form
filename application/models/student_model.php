<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Student_model extends CI_Model {

    public function insert_profile($data) {
        $fields = [
            'height', 'weight', 'present_address', 'contact_person', 'contact_person_address',
            'contact_number', 'relationship', 'is_currently_working', 'elementary_school_name',
            'elementary_address', 'elem_year_graduated', 'elementary_school_type',
            'junior_high_school_name', 'junior_high_address', 'junior_year_graduated',
            'junior_high_school_type', 'vocational_course_name', 'vocational_address',
            'vocational_year_graduated', 'vocational_type', 'senior_high_school_name',
            'senior_high_address', 'senior_year_graduated', 'senior_high_school_type',
            'college_school_name', 'college_address', 'college_year_graduated', 'college_type',
            'honors_received', 'nature_of_schooling', 'reason_for_stopping',
            'father_full_name', 'father_age', 'father_educational_attainment',
            'father_living_status', 'occupation', 'mother_full_name', 'mother_age',
            'mother_educational_attainment', 'mother_living_status', 'guardian_full_name',
            'guardian_age', 'educational_attainment', 'guardian_occupation', 'num_of_children',
            'num_of_brothers', 'num_of_sisters', 'parents_marital_status', 'other_marital_status_reason',
            'financers', 'other_financer', 'problem_vision', 'vision_specify',
            'problem_speech', 'speech_specify', 'problem_hearing', 'hearing_specify',
            'problem_health', 'health_specify', 'problem_disability', 'disability_specify',
            'diagnosed_before', 'illness', 'date_diagnosed', 'illness1', 'date_diagnosed1',
            'illness2', 'date_diagnosed2', 'sports', 'science', 'arts', 'social_studies',
            'religious', 'civic_awareness', 'others_interests', 'consulted_status',
            'reason_for_consultation', 'family_matters', 'career_concerns', 'relationship_concerns',
            'self_concerns', 'concerns_with_teachers', 'financial_matters', 'academic_concerns',
            'health_concerns', 'other_guidance_concern'
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

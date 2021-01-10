<?php
$this->load->view('ui-elements/breadcrumbs');
$this->elements->contentOpen($title_form);
$attributes = ['class' => 'form-horizontal', 'id' => 'form'];
echo form_open($url, $attributes);
$this->fields->formGroupRow('Nickname', '*', 'text', 'name', set_value('name'), 'Example: VOC', 'off', false, true);
$this->fields->formGroupRow('Fullname', '*', 'text', 'fullname', set_value('fullname'), 'Example: Vereenigde Oost-Indische Compagnie', 'off', false, true);
$this->fields->textAreaRow('Description', '', 'description', '', 'Example: ..', false, false);
$this->fields->select2Row('Grade', '*', 'grade_id', $grade, '', 'Select a grade', true);
$this->fields->select2Row('Major', '*', 'majors_id', $majors, '', 'Select a majors', true);
$this->fields->select2Row('Academic Year', '*', 'academic_year_id', $academic, '', 'Select an academic year', true);
$this->fields->select2Row('Homeroom Teacher', '*', 'homeroom_teacher_id', $homeroom_teacher, '', 'Select a homeroom teacher', true);
$this->load->view('ui-elements/button-form-submit');
echo form_close();
$this->elements->contentClose();

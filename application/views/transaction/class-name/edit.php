<?php
$this->load->view('ui-elements/breadcrumbs');
$this->elements->contentOpen($title_form);
$attributes = ['class' => 'form-horizontal', 'id' => 'form'];
echo form_open($url, $attributes);
// $this->fields->formGroupRow('', '', 'hidden', 'id', $result['id'], '', 'off', true, true);
$this->fields->formGroupRow('Nickname', '', 'text', 'name', $result['name'], 'Example: ', 'off', true, true);
$this->fields->formGroupRow('Fullname', '', 'text', 'fullname', $result['fullname'], 'Example: ', 'off', true, true);
$this->fields->textAreaRow('Description', '', 'address', $result['description'], 'Example: ', false, true);
$this->fields->formGroupRow('Grade', '', 'text', 'grade_id', $result['grade'], 'Example: ', 'off', true, true);
$this->fields->formGroupRow('Major', '', 'text', 'majors_id', $result['majors'], 'Example: ', 'off', true, true);
$this->fields->formGroupRow('Academic Year', '', 'text', 'academic_year_id', $result['year'], 'Example: ', 'off', true, true);
$this->fields->formGroupRow('Homeroom Teacher', '', 'text', 'teacher_id', $result['teacher'], 'Example: ', 'off', true, true);
$this->load->view('ui-elements/field-status');
$this->fields->formGroupRow('Created By', '', 'text', '', $result['created_by'], '', '', true, true);
$this->fields->formGroupRow('Created Date', '', 'text', '', $result['created_date'], '', '', true, true);
$this->load->view('ui-elements/button-form-save-changes');
echo form_close();
$this->elements->contentClose();

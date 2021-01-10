<?php
$this->load->view('ui-elements/breadcrumbs');
$this->elements->contentOpen($title_form);
$attributes = ['class' => 'form-horizontal', 'id' => 'form'];
echo form_open($url, $attributes);
$this->fields->formGroupRow('', '', 'hidden', 'id', $result['id'], '', 'off', true, true);
$this->fields->formGroupRow('Year', '', 'text', 'year', $result['name'], 'Example: 2019/2020', 'off', false, true);
$this->load->view('ui-elements/field-status');
$this->fields->formGroupRow('Created By', '', 'text', '', $result['created_by'], '', '', true, true);
$this->fields->formGroupRow('Created Date', '', 'text', '', $result['created_date'], '', '', true, true);
$this->load->view('ui-elements/button-form-save-changes');
echo form_close();
$this->elements->contentClose();

<?php
$this->load->view('ui-elements/breadcrumbs');
$this->elements->contentOpen($title_form);
$attributes = ['class' => 'form-horizontal', 'id' => 'form'];
echo form_open($url, $attributes);
$this->fields->formGroupRow('', '', 'hidden', 'id', $result['id'], '', 'off', true, true);
$this->fields->formGroupRow('Name', '', 'text', 'name', $result['name'], 'Example: Ronald Wesley', 'off', false, true);
$this->load->view('ui-elements/field-gender-edit');
$this->fields->formGroupRow('Phone Number', '', 'text', 'phone_number', $result['phone_number'], 'Example: 085320630149', 'off', false, true);
$this->fields->formGroupRow('E-mail', '', 'text', 'email', $result['email'], 'Example: ronald@gmail.com', 'off', false, true);
$this->fields->textAreaRow('Address', '', 'address', $result['address'], 'Example: Bumi Mas Kencana no 27 Antapani Wetan', false, true);
$this->load->view('ui-elements/field-status');
$this->fields->formGroupRow('Parent Name', '', 'text', 'parent_name', $result['parent_name'], 'Example: James Potter', 'off', false, true);
$this->fields->formGroupRow('Parent Phone Number', '', 'text', 'parent_phone_number', $result['parent_phone_number'], 'Example: 081318418004', 'off', false, true);
$this->fields->formGroupRow('Parent Income', '', 'text', 'income', $result['income'], 'Example: 3.500.000', 'off', false, true);
$this->fields->formGroupRow('Created By', '', 'text', '', $result['created_by'], '', '', true, true);
$this->fields->formGroupRow('Created Date', '', 'text', '', $result['created_date'], '', '', true, true);
$this->load->view('ui-elements/button-form-save-changes');
echo form_close();
$this->elements->contentClose();

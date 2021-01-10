<?php
$this->load->view('ui-elements/breadcrumbs');
$this->elements->contentOpen($title_form);
$attributes = ['class' => 'form-horizontal', 'id' => 'form'];
echo form_open($url, $attributes);
$this->fields->formGroupRow('Account Code', '*', 'text', 'coa_code', set_value('coa_code'), 'Example: 111', 'off', false, true);
$this->fields->formGroupRow('Account Name', '*', 'text', 'name', set_value('name'), 'Example: Kas', 'off', false, true);

$this->load->view('ui-elements/button-form-submit');
echo form_close();
$this->elements->contentClose();

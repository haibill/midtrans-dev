<?php
$this->load->view('ui-elements/breadcrumbs');
$this->elements->contentOpen($title_form);
$attributes = ['class' => 'form-horizontal', 'id' => 'form'];
echo form_open($url, $attributes);
$this->fields->formGroupRow('Name', '*', 'text', 'name', set_value('name'), 'Example: 7', 'off', false, true);
$this->fields->formGroupRow('Label', '*', 'text', 'label', set_value('label'), 'Example: Tujuh', 'off', false, true);
$this->fields->formGroupRow('Roman Numerals', '*', 'text', 'roman_numerals', set_value('roman_numerals'), 'Example: VII', 'off', false, true);

$this->load->view('ui-elements/button-form-submit');
echo form_close();
$this->elements->contentClose();

<?php
$this->load->view('ui-elements/breadcrumbs');
$this->elements->contentOpen($title_form);
$attributes = ['class' => 'form-horizontal', 'id' => 'form'];
echo form_open($url, $attributes);
$this->fields->formGroupRow('Name', '*', 'text', 'name', set_value('name'), 'Example: Semester Genap', 'off', false, true);
$this->load->view('ui-elements/button-form-submit');
echo form_close();
$this->elements->contentClose();

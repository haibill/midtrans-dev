<?php
$this->load->view('ui-elements/breadcrumbs');
$this->elements->contentOpen($title_form);
$attributes = ['class' => 'form-horizontal', 'id' => 'form'];
echo form_open($url, $attributes);
$this->fields->formGroupRow('Nama', '', 'text', 'name', set_value('name'), 'Example: Harry Potter', 'off', false, true);
$this->load->view('ui-elements/field-gender');
$this->fields->formGroupRow('Nomor HP', '*', 'text', 'phone_number', set_value('phone_number'), 'Example: 087830661966', 'off', false, true);
$this->fields->formGroupRow('E-mail', '*', 'text', 'email', set_value('email'), 'Example: harrypotter@gmail.com', 'off', false, true);
$this->fields->textAreaRow('Address', '*', 'address', set_value('address'), 'Example: Jalan Padasuka, Cicaheum Bandung', false, true);
$this->fields->formGroupRow('Parent Name', '*', 'text', 'parent_name', set_value('parent_name'), 'Example: James Potter', 'off', false, true);
$this->fields->formGroupRow('Parent Phone Number', '*', 'text', 'parent_phone_number', set_value('parent_phone_number'), 'Example: 081318418004', 'off', false, true);
$this->fields->formGroupRow('Parent Income', '*', 'text', 'income', set_value('income'), 'Example: 3.500.000', 'off', false, true);
$this->load->view('ui-elements/button-form-submit');
echo form_close();
$this->elements->contentClose();

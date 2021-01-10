<?php
$this->load->view('ui-elements/breadcrumbs');
$this->elements->contentOpen($title_form);
$attributes = ['class' => 'form-horizontal', 'id' => 'form'];
echo form_open($url, $attributes);
$this->fields->formGroupRow('Teacher Name', '*', 'text', 'name', set_value('name'), 'Example: Severus Snape', 'off', false, true);
$this->load->view('ui-elements/field-gender');
$this->fields->formGroupRow('Phone Number', '*', 'text', 'phone_number', set_value('phone_number'), 'Example: 087830661966', 'off', false, true);
$this->fields->formGroupRow('E-mail', '*', 'text', 'email', set_value('email'), 'Example: abdurbijaksana@gmail.com', 'off', false, true);
$this->fields->textAreaRow('Address', '*', 'address', set_value('address'), 'Example: Jalan Padasuka, Cicahuem Bandung', false, true);
$this->load->view('ui-elements/button-form-submit');
echo form_close();
$this->elements->contentClose();

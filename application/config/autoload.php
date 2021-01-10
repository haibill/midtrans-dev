<?php
defined('BASEPATH') or exit('No direct script access allowed');

$autoload['packages'] = array('database');

$autoload['libraries'] = array('database', 'template', 'form_validation', 'session', 'midtrans', 'elements', 'fields', 'dummy');

$autoload['drivers'] = array();

$autoload['helper'] = array('html', 'url', 'file', 'text', 'my');

$autoload['config'] = array();

$autoload['language'] = array();

$autoload['model'] = array(
    'MyModel',
    'CoaModel', 'GradeModel', 'MajorsModel', 'StudentModel', 'SemesterModel', 'AcademicYearModel', 'HomeroomTeacherModel',
    'ClassNameModel'
);

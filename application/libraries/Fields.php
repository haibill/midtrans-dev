<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Fields
{
    public function formGroupRow($field, $mandatory, $type = 'text', $name, $value, $placeholder, $autocomplete, $readonly, $formError)
    {
        echo "<div class='form-group row'>";
        if ($mandatory == '*') {
            echo "<label class='font-weight-bold col-md-2'>$field <span class='text-danger'>*</span></label>";
        } else {
            echo "<label class='font-weight-bold col-md-2'>$field</label>";
        }
        if ($readonly == true) {
            $readonly = "readonly";
        } else {
            $readonly = "";
        }
        $isInvalid = (form_error($name)) ? 'is-invalid' : '';
        echo "<div class='col-md-8'>
                <input class='form-control $isInvalid' type='$type' name='$name' value='$value' placeholder='$placeholder' autocomplete='$autocomplete' $readonly>";
        if ($formError == true) {
            echo form_error($name);
        }
        echo "  </div>
                    </div>";
    }

    public function select2Row($field, $mandatory, $name, $list, $result, $placeholder, $formError)
    {
        echo "<div class='form-group row'>";
        if ($mandatory == '*') {
            echo "<label class='font-weight-bold col-md-2'>$field <span class='text-danger'>*</span></label>";
        } else {
            echo "<label class='font-weight-bold col-md-2'>$field</label>";
        }

        $isInvalid = (form_error($name)) ? 'is-invalid' : '';
        echo "<div class='col-md-8'>
                <select class='form-control $isInvalid demoSelect' name='$name'>";

        if ($result == '') {
            echo "<option selected disabled>$placeholder</option>";
        } else {
            echo "<option selected value='" . $result['id'] . "'>" . $result['name'] . "</option>";
        }

        foreach ($list as $item) {
            if ($result['id'] != $item['id']) {
                echo "<option value=" . $item['id'] . " > " . $item['name'] . " </option>";
            }
        }
        echo "</select>";
        if ($formError == true) {
            echo form_error($name);
        }
        echo "  </div>
                    </div>";
    }

    public function textAreaRow($field, $mandatory, $name, $value, $placeholder, $readonly, $formError)
    {
        echo "<div class='form-group row'>";
        if ($mandatory == '*') {
            echo "<label class='font-weight-bold col-md-2'>$field <span class='text-danger'>*</span></label>";
        } else {
            echo "<label class='font-weight-bold col-md-2'>$field</label>";
        }
        if ($readonly == true) {
            $readonly = "readonly";
        } else {
            $readonly = "";
        }
        $isInvalid = (form_error($name)) ? 'is-invalid' : '';
        echo "  <div class='col-md-8'>
                    <textarea class='form-control $isInvalid' name='$name' cols='5' rows='4' placeholder='$placeholder' $readonly>$value</textarea>";
        if ($formError == true) {
            echo form_error($name);
        }
        echo "  </div>
                    </div>";
    }
}

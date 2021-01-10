<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Dummy
{
    public function dataTable()
    {
        echo "<div class='table-responsive'><table class='table table-hover table-bordered sampleTable'>";
    }

    public function thead($thead)
    {
        $th = count($thead);
        echo "	<thead>
					<tr>";
        for ($i = 0; $i < $th; $i++) {
            if ($thead[$i] == "Status" or $thead[$i] == "Gender") {
                echo "<th style='text-align: center;'>" . $thead[$i] . "</th>";
            } else {
                echo "<th>" . $thead[$i] . "</th>";
            }
        }
        echo "		</tr>
                </thead>
                <tbody>";
    }

    public function link($destination, $value)
    {
        echo "<td><a href='$destination' class='font-weight-bold'>$value</a></td>";
    }

    public function status($value)
    {
        echo "<td style='text-align: center;'>";
        if ($value == 'ACTIVE') :
            echo "<span class='badge badge-success'>$value</span>";
        else :
            echo "<span class='badge badge-danger'>$value</span>";
        endif;
        echo "</td>";
    }

    public function gender($value)
    {
        echo "<td style='text-align: center;'>";
        if ($value == 'Male') :
            echo "<i class='fas fa-mars' style='color: #0279E7;'></i>";
        else :
            echo "<i class='fas fa-venus' style='color: #DC52A2;'></i>";
        endif;
        echo "</td>";
    }
}

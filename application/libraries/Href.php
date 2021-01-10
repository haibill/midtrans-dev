<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Href
{
    public function link($destination, $value)
    {
        echo "<td><a href='$destination' class='font-weight-bold'>$value</a></td>";
    }
}

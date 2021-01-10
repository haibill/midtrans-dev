<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Elements
{

    public function contentOpen($title)
    {
        echo "  <div class='row'>
                    <div class='col-md-12'>
                        <div class='tile'>
                            <h3 class='tile-title'>$title</h3>
                            <hr>
                            <div class='row'>
                                <div class='col-lg-12'>";
    }

    public function contentClose()
    {
        echo "  </div>
                    </div>
                        </div>
                            </div>
                                </div>";
    }

    public function contentTableButtonOpen()
    {
        $ci    = get_instance();

        echo "  <div class='row'>
                    <div class='col-md-12'>
                        <div class='tile'>";
        $ci->load->view('ui-elements/button-new');
        echo                "<div class='tile-body'>";
    }

    public function contentTableClose()
    {
        echo "</tbody></table></div></div></div></div></div>";
    }
}

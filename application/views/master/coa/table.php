<?php
$this->load->view('ui-elements/breadcrumbs');
$this->elements->contentTableButtonOpen();
$this->dummy->dataTable();
$thead = ["Account Code", "Name", "Header Account", "Created By", "Created Date"];
$this->dummy->thead($thead);
foreach ($list as $item) :
    echo "  <tr>
                <td>" . $item['coa_code'] . "</td>
                <td>" . $item['name'] . "</td>
                <td>" . $item['header'] . "</td>
                <td>" . $item['created_by'] . "</td>
                <td>" . $item['created_date'] . "</td>
            </tr>";
endforeach;
$this->elements->contentTableClose();

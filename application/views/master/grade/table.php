<?php
$this->load->view('ui-elements/breadcrumbs');
$this->elements->contentTableButtonOpen();
$this->dummy->dataTable();
$thead = ["Grade", "Label", "Roman Numerals", "Status", "Created By", "Created Date"];
$this->dummy->thead($thead);
foreach ($list as $item) :
    echo    "<tr>";
    $this->dummy->link(site_url('Grade/edit/' . $item['id']), $item['name']);
    echo       "<td>" . $item['label'] . "</td>";
    echo       "<td>" . $item['roman_numerals'] . "</td>";
    $this->dummy->status($item['status']);
    echo       "<td>" . $item['created_by'] . "</td>";
    echo       "<td>" . $item['created_date'] . "</td>";
    echo    "</tr>";
endforeach;
$this->elements->contentTableClose();

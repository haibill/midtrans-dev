<?php
$this->load->view('ui-elements/breadcrumbs');
$this->elements->contentTableButtonOpen();
$this->dummy->dataTable();
$thead = ["Name", "Description", "Status", "Created By", "Created Date"];
$this->dummy->thead($thead);
foreach ($list as $item) :
    echo    "<tr>";
    $this->dummy->link(site_url('Majors/edit/' . $item['id']), $item['name']);
    echo       "<td>" . $item['description'] . "</td>";
    $this->dummy->status($item['status']);
    echo       "<td>" . $item['created_by'] . "</td>";
    echo       "<td>" . $item['created_date'] . "</td>";
    echo    "</tr>";
endforeach;
$this->elements->contentTableClose();

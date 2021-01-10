<?php
$this->load->view('ui-elements/breadcrumbs');
$this->elements->contentTableButtonOpen();
$this->dummy->dataTable();
$thead = ["Email", "Name", "Gender", "Phone Number", "Address", "Status", "Created By", "Created Date"];
$this->dummy->thead($thead);
foreach ($list as $item) :
    echo    "<tr>";
    $this->dummy->link(site_url('HomeroomTeacher/edit/' . $item['id']), $item['email']);
    echo       "<td>" . $item['name'] . "</td>";
    $this->dummy->gender($item['gender']);
    echo       "<td>" . $item['phone_number'] . "</td>";
    echo       "<td>" . $item['address'] . "</td>";
    $this->dummy->status($item['status']);
    echo       "<td>" . $item['created_by'] . "</td>";
    echo       "<td>" . $item['created_date'] . "</td>";
    echo    "</tr>";
endforeach;
$this->elements->contentTableClose();

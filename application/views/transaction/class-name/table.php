<?php
$this->load->view('ui-elements/breadcrumbs');
$this->elements->contentTableButtonOpen();
$this->dummy->dataTable();
$thead = ["Class", "Grade", "Majors", "Academic Year", "Homeroom Teacher", "Status", "Created By", "Created Date"];
$this->dummy->thead($thead);
foreach ($list as $item) :
    echo    "<tr>";
    $this->dummy->link(site_url('Classname/edit/' . $item['class_id']), $item['name']);
    $this->dummy->link(site_url('Grade/edit/' . $item['grade_id']), $item['grade']);
    $this->dummy->link(site_url('Majors/edit/' . $item['majors_id']), $item['majors']);
    $this->dummy->link(site_url('AcademicYear/edit/' . $item['academic_year_id']), $item['year']);
    $this->dummy->link(site_url('HomeroomTeacher/edit/' . $item['teacher_id']), $item['teacher']);
    $this->dummy->status($item['status']);
    echo       "<td>" . $item['created_by'] . "</td>";
    echo       "<td>" . $item['created_date'] . "</td>";
    echo    "</tr>";
endforeach;
$this->elements->contentTableClose();

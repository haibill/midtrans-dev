<div class="app-title">
    <div>
        <h1><i class="fab fa-magento"></i> <?= $submenu; ?></h1>
    </div>
    <ul class="app-breadcrumb breadcrumb side">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item"><?= $menu; ?></li>
        <li class="breadcrumb-item active font-weight-bold"><a href=""><?= $submenu; ?></a></li>
    </ul>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="tile">
            <div class="row">
                <div class="col-md-10">
                    <form id="payment-form" action="<?= site_url('snap/finish') ?>" method="POST">
                        <input type="hidden" name="result_type" id="result-type" value="">
                        <input type="hidden" name="result_data" id="result-data" value="">
                        <div class="form-group">
                            <label class="font-weight-bold"> <b class="text-danger">*</b> Student</label>
                            <select class="form-control demoSelect" id="student_id" name="student_id">
                                <optgroup label="Select Classification">
                                    <?php
                                    foreach ($student as $item) {
                                        echo "<option value=" . $item['student_id'] . " > " . $item['name   '] . " </option>";
                                    }
                                    ?>
                                </optgroup>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold"> <b class="text-danger">*</b> Class</label>
                            <select class="form-control demoSelect" id="grade" name="grade">
                                <optgroup label="Select Class">
                                    <option value="KA-01">KA-01</option>
                                    <option value="KA-02">KA-02</option>
                                    <option value="KA-03">KA-03</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold"> <b class="text-danger">*</b> Amount</label>
                            <input class="form-control" type="text" id="bayar" name="bayar" value="<?= set_value('bayar'); ?>" placeholder="Please type amount..">
                        </div>
                        <div class="tile-footer text-center">
                            <button class="btn btn-primary" id="pay-button">Pay !</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">
                <div class="table-responsive">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Student</th>
                                <th>Grade</th>
                                <th>Gross Amount</th>
                                <th>Payment Type</th>
                                <th>Bank</th>
                                <th>VA Number</th>
                                <th>Transaction Time</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($list as $item) : ?>
                                <tr>
                                    <td><?= $item['order_id'] ?></td>
                                    <td><?= $item['name'] ?></td>
                                    <td><?= $item['grade'] ?></td>
                                    <td style="text-align: right;"><?= "Rp " . number_format($item['gross_amount'], 2, ',', '.') ?></td>
                                    <td><?= $item['payment_type'] ?></td>
                                    <td><?= $item['bank'] ?></td>
                                    <td><?= $item['va_number'] ?></td>
                                    <td><?= $item['transaction_time'] ?></td>
                                    <td style="text-align: center;">
                                        <?php if ($item['status_code'] == '200') : ?>
                                            <span class="badge badge-success">Success</span>
                                        <?php elseif ($item['status_code'] == '201') : ?>
                                            <span class="badge badge-warning">Pending</span>
                                        <?php endif; ?>
                                    </td>
                                    <td style="text-align: center;"><a href="<?= $item['pdf_url'] ?>" class="btn btn-sm btn-secondary"><i class="fas fa-download"></i> </a></td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?= base_url('assets/js/jquery-3.5.1.min.js') ?>"></script>
<script type="text/javascript">
    $('#pay-button').click(function(event) {
        event.preventDefault()
        $(this).attr("disabled", "disabled")

        var student_id = $("#student_id").val()
        var grade = $("#grade").val()
        var bayar = $("#bayar").val()

        $.ajax({
            type: 'POST',
            url: '<?= site_url('/snap/token') ?>',
            data: {
                student_id: student_id,
                grade: grade,
                bayar: bayar,
            },
            cache: false,
            success: function(data) {
                //location = data

                console.log('token = ' + data)

                var resultType = document.getElementById('result-type')
                var resultData = document.getElementById('result-data')

                function changeResult(type, data) {
                    $("#result-type").val(type)
                    $("#result-data").val(JSON.stringify(data))
                    //resultType.innerHTML = type
                    //resultData.innerHTML = JSON.stringify(data)
                }

                snap.pay(data, {

                    onSuccess: function(result) {
                        changeResult('success', result)
                        console.log(result.status_message)
                        console.log(result)
                        $("#payment-form").submit()
                    },
                    onPending: function(result) {
                        changeResult('pending', result)
                        console.log(result.status_message)
                        $("#payment-form").submit()
                    },
                    onError: function(result) {
                        changeResult('error', result)
                        console.log(result.status_message)
                        $("#payment-form").submit()
                    }
                })
            }
        })
    })
</script>
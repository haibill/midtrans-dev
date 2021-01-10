<!-- Essential javascripts for application to work-->
<script src="<?= base_url('assets/js/jquery-3.5.1.min.js') ?>"></script>
<script src="<?= base_url('assets/js/popper.min.js') ?>"></script>
<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
<script src="<?= base_url('assets/js/main.js') ?>"></script>
<!-- The javascript plugin to display page loading on top-->
<script src="<?= base_url('assets/js/plugins/pace.min.js') ?>"></script>
<!-- Page specific javascripts-->
<script type="text/javascript" src="<?= base_url('assets/js/plugins/chart.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/js/plugins/bootstrap-notify.min.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/js/plugins/select2.min.js') ?>"></script>
<!-- Data table plugin-->
<script type="text/javascript" src="<?= base_url('assets/js/plugins/jquery.dataTables.min.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/js/plugins/dataTables.bootstrap.min.js') ?>"></script>
<!-- Notification JS -->
<script src="<?= base_url('assets/js/notifications/Lobibox.js') ?>"></script>
<script src="<?= base_url('assets/js/notifications/notification-active.js') ?>"></script>
<script type="text/javascript">
    $('.sampleTable').DataTable()
    $('.demoSelect').select2()
    $(document).ready(function() {
        $('#success').show(function() {
            Lobibox.notify('success', {
                size: 'mini',
                delay: 5000,
                icon: true,
                showClass: 'bounceIn',
                hideClass: 'bounceOut',
                img: 'assets/img/success.png',
                msg: '<b>OK !</b>&nbsp;&nbsp;Data created successfully.'
            })
        })

        $('#update').show(function() {
            Lobibox.notify('info', {
                size: 'mini',
                delay: 5000,
                icon: true,
                showClass: 'bounceIn',
                hideClass: 'bounceOut',
                img: 'assets/img/success.png',
                msg: '<b>OK !</b>&nbsp;&nbsp;Data updated successfully.'
            })
        })
    })
</script>
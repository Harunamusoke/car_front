<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!--**********************************
        Scripts
    ***********************************-->
<script src="<?php echo base_url("vendor/plugins/common/common.min.js"); ?>"></script>
<script src="<?php echo base_url("vendor/js/custom.min.js"); ?>"></script>
<?php if (isset($dashboard)) : ?>
    <script src="<?php echo base_url("vendor/js/settings.js"); ?>"></script>
    <script src="<?php echo base_url("vendor/js/gleek.js"); ?>"></script>
    <script src="<?php echo base_url("vendor/js/dashboard/dashboard-1.js"); ?>"></script>
<?php endif; ?>

<?php if (isset($datatable) && $datatable) : ?>
    <script src="<?php echo base_url("vendor/plugins/tables/js/jquery.dataTables.min.js"); ?>"></script>
    <script src="<?php echo base_url("vendor/plugins/tables/js/datatable/dataTables.bootstrap4.min.js"); ?>"></script>
    <script src="<?php echo base_url("vendor/plugins/tables/js/datatable-init/datatable-basic.min.js"); ?>"></script>
<?php endif; ?>
</body>

</html>
<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="content-body" style="min-height: 844px;">
    <!-- HEADING -->
    <div class="row page-titles mx-0">
        <div class="col-lg-4 col-sm-6">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addRatesModal">
                ADD RATE
            </button>

        </div>

        <?php if (isset($_GET['info'])) : ?>
            <div class="col-4">

                <p class="lead text-info">
                    <?php echo $this->input->get(); ?>
                </p>

            </div>
        <?php endif; ?>
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">RATES</a></li>
            </ol>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">

            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h4>Table Striped</h4>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <?php foreach ($headers as $key => $value) : ?>

                                            <th> <?php echo  strtoupper($value); ?> </th>

                                        <?php endforeach; ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($rates as $key => $value) : ?>
                                        <tr>
                                            <th><?php echo $key; ?></th>
                                            <th><?php echo $value['rate_id']; ?></th>
                                            <th><?php echo strtoupper($value['name']); ?></th>
                                            <td><?php echo $value['rate']; ?></td>
                                            <td class="color-success"><?php echo $value['from']; ?></td>
                                            <td class="color-danger"><?php echo $value['to']; ?></td>
                                            <td class="dropdown">
                                                <?php if ((int) $value['is_enabled'] == 1) : ?>
                                                    <a type="button" class="dropdown-toggle label gradient-1 rounded float-right" data-toggle="dropdown" aria-expanded="false">
                                                        ACTIVE
                                                    </a>
                                                <?php else : ?>
                                                    <a href="<?php  ?>" type="button" class="dropdown-toggle label gradient-2 rounded float-left" data-toggle="dropdown" aria-expanded="false">
                                                        INACTIVE
                                                    </a>
                                                <?php endif; ?>
                                                <div class="dropdown-menu" x-placement="bottom-start">
                                                    <a class="dropdown-item btn btn-primary" href="<?php echo base_url("rates/activate/") .  $value['rate_id'] . "/1" ?>">ACTIVATE</a>
                                                    <a class="dropdown-item btn btn-danger" href="<?php echo base_url("rates/activate/") .  $value['rate_id'] . "/0" ?>">DEACTIVATE</a>
                                                </div>
                                            </td>
                                            <td><?php echo  $value['date_added']; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>



<!-- Add Rate Modal -->
<div class="modal fade" id="addRatesModal" tabindex="-1" role="dialog" aria-labelledby="addRatesModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom">
                <h5 class="modal-title" id="addRatesModalLabel">ADD RATE</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="get" action="<?php echo base_url("rates/save"); ?>">
                <div class="modal-body">

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="my-addon">Name</span>
                            </div>
                            <input required class="form-control" type="text" name="name" placeholder="name......" aria-label="name's " aria-describedby="my-addon">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="my-addon">Rate</span>
                            </div>
                            <input required id="rate" class="form-control" type="number" name="rate">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="my-addon">From</span>
                            </div>
                            <input required id="from" class="form-control" type="number" name="from">
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="my-addon">To</span>
                            </div>
                            <input required id="from" class="form-control" type="number" name="to">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="custom-control custom-checkbox mx-3">
                            <input required id="enabled" class="custom-control-input" type="radio" name="is_enabled" value="1" checked aria-checked="true">
                            <label for="enabled" class="custom-control-label">ENABLE</label>
                        </div>
                        <div class="custom-control custom-checkbox mx-3">
                            <input required id="disenable" class="custom-control-input " type="radio" name="is_enabled" value="0">
                            <label for="disenable" class="custom-control-label">DISABLE</label>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary" type="submit">Save Rate</button>
                </div>
            </form>

        </div>
    </div>
</div>
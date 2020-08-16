<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div class="content-body">
    <div class="row page-titles mx-0 my-0">

        <div class="col-5 col-md-4 my-0 mx-2 p-0">
            <div class="btn-group" role="group" aria-label="Button group">
                <a class="btn btn-primary" href="<?php echo current_url() . "?download=true"; ?>">
                    <i class="fa fa-sticky-note"></i> <i class="fa fa-long-arrow-down"></i>
                    GENERATE REPORT</a>
            </div>
        </div>
        <?php if ($isVehicles !== FALSE) : ?>
            <div class="col-5 col-md-4 my-0 p-0">
                <form action="<?php echo base_url("admin/takeToDate") ?>">
                    <div class="btn-group">
                        <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">BACK IN TIME</button>
                        <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px;
                  transform: translate3d(0px, 37px, 0px);">
                            <fieldset id="date_from">
                                <span class="dropdown-item">
                                    <label for="lw">
                                        <input type="radio" name="date_from" id="lw" value="today" checked>
                                        TODAY
                                    </label>
                                </span>
                                <span class="dropdown-item">
                                    <label for="lw">
                                        <input type="radio" name="date_from" id="lw" value="last week">
                                        LAST WEEK
                                    </label>
                                </span>
                                <span class="dropdown-item">
                                    <label for="lF">
                                        <input type="radio" name="date_from" id="lF" value="last two weeks">
                                        LAST FORTNITE
                                    </label>
                                </span>
                                <span class="dropdown-item">
                                    <label for="lM">
                                        <input type="radio" name="date_from" id="lM" value="last month">
                                        LAST MONTH
                                    </label>
                                </span>
                            </fieldset>
                            <div data-toggle="dropdown" class="m-0 p-0" data-target="allDropDown">
                                <button class="dropdown-item btn btn-primary text-sm">CHANGE THE STATUS TO CONTINUE</button>
                            </div>
                        </div>

                        <div class="dropdown mx-md-2">
                            <button id="allDropDown" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> STATUS</button>
                            <div class="dropdown-menu" aria-labelledby="allDropDown">
                                <fieldset id="status">
                                    <span class="dropdown-item">
                                        <label for="nc">
                                            <input type="radio" name="status" value="not cleared" id="nc" checked>
                                            NOT CLEARED
                                        </label>
                                    </span>
                                    <span class="dropdown-item">
                                        <label for="cl">
                                            <input type="radio" name="status" id="cl" value="cleared">
                                            CLEARED
                                        </label>
                                    </span>
                                    <span class="dropdown-item">
                                        <label for="all">
                                            <input type="radio" name="status" id="all" value="all">
                                            ALL
                                        </label>
                                    </span>

                                </fieldset>
                                <button class="dropdown-item btn btn-block btn-primary" type="submit">GO
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>

            </div>
            </form>
        <?php endif; ?>
        <div class="col-3 p-md-0 d-none d-lg-block ml-auto">
            <ol class="breadcrumb">
                <li class="breadcrumb-item font-weight-bold text-uppercase"><a href="javascript:void(0)"><?php echo $title; ?></a></li>
            </ol>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body py-md-2 pl-md-2">
                        <p class="lead text-danger  text-center font-weight-bold">
                            <?php echo $status; ?>
                        </p>
                        <div class="table-responsive w-100 m-0 p-0" style="margin-top: -16px!important;">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th class="">##ID</th>
                                        <?php foreach ($keys  as $key) : ?>
                                            <th><?php echo strtoupper($key); ?></th>
                                        <?php endforeach; ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($values as $index => $value) : ?>
                                        <tr>
                                            <td><?php echo $index; ?></td>
                                            <?php foreach ($keys  as $key) : ?>
                                                <td>
                                                    <?php echo strtoupper($value[$key]); ?>
                                                </td>
                                            <?php endforeach; ?>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th class>#ID</th>
                                        <?php foreach ($keys  as $key) : ?>
                                            <th><?php echo strtoupper($key); ?></th>
                                        <?php endforeach; ?>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
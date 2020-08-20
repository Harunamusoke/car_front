<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div class="content-body" style="min-height: 844px;">
    <!-- HEADING -->
    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">SLOTS</a></li>
            </ol>
        </div>

    </div>


    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table header-border">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <?php foreach ($headers as $key => $value) : ?>

                                            <th> <?php echo strtoupper($value); ?> </th>

                                        <?php endforeach; ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($values as $key => $value) : ?>
                                        <tr>
                                            <th><?php echo $key; ?></th>

                                            <td> <?php echo $value['slot_id']; ?> </td>

                                            <td> <?php echo $value['address']; ?> </td>

                                            <?php if ($value['is_occupied'] == 1) : ?>
                                                <td><span class="label gradient-1 rounded">YES</span>
                                                </td>
                                            <?php else : ?>
                                                <td><span class="label gradient-2 rounded">NO</span>
                                                </td>
                                            <?php endif; ?>
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
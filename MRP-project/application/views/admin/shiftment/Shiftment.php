<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
    <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Shiftment</li>
            </ol>
            <h6 class="font-weight-bolder mb-0">Shiftment</h6>
        </nav>
    <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
        <div class="ms-md-auto pe-md-3 d-flex align-items-center">
        <h6 class="text-sm font-weight-bolder mb-0">Production System</h6>
        </div>
        
    </div>
</nav>
</br>
<div class="container-fluid py-4 pt-0">
    <div class="card-header p-0 w-75 position-fixed mt-n4 mx-2 z-index-2">
        <div class="shadow-dark border-radius-lg d-flex px-5 pt-4 pb-3">
            <div class="col-8 d-flex align-items-center"> 
                <i class="material-icons pr-3">schedule</i>
                <h6 class="col mb-0">Shiftment Production</h6>
            </div>
            <div class="col-4 text-end">
                <a href="<?= site_url('admin/plan_shift/addshiftment'); ?>" class="btn bg-gradient mb-0" style="background-color:#5e2fd5;color:#fff">Add Shiftment</a>
            </div>
        </div>
    </div>
</div>
<div class="container py-4 pl-5 pr-5">
    <div class="row">
        <div class="card">
        <div class="card-body pt-4 p-3">
            <div class="table-responsive p-0">
                <table id="table-data" class="table align-items-center justify-content-center mb-0">
                    <thead>
                            <tr>
                            <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">No</th>
                            <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Plan</th>
                            <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Shiftment</th>
                            <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Shift Head</th>
                            <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Time Process</th>
                            <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Date Process</th>
                            <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">action</th>
                            </tr>
                    </thead>
                    <tbody class="pl-3">
                        <?php if (!empty($plan_shift)) : $i = 1; foreach ($plan_shift as $value) : ?>
                            <tr>
                            <td>
                            <div class="d-flex pl-3">
                                <div class="my-auto">
                                    <h6 class="mb-0 text-sm"><?= $i++; ?></h6>
                                </div>
                            </div>
                            </td>
                            <td class="pl-4">
                                <span class="text-sm font-weight-bold"><?= $value->plan_name; ?></span>
                            </td>
                            <td class="pl-4">
                                <span class="text-sm font-weight-bold"><?= $value->shift_name; ?></span>
                            </td>
                            <td class="pl-4">
                                <span class="text-sm font-weight-bold"><?= $value->staff_name; ?></span>
                            </td>
                            <td class="pl-4">
                                <span class="text-sm font-weight-bold"><?= $value->start_time; ?> - <?= $value->end_time; ?></span>
                            </td>
                            <td class="pl-4">
                                <span class="text-sm font-weight-bold"><?= $value->start_date; ?></span>
                            </td>
                            <td class="pl-4">
                                <a href="<?= site_url('admin/plan_shift/'.$value->id_planshift.'/delete'); ?>" rel="tooltip" title="Remove" class="btn btn-outline-danger btn-link btn-sm" >
                                    <i class="material-icons text-sm">backspace</i>
                                </a>
                            </td>
                            
                            </tr>
                            <?php endforeach; endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </div>
</div>
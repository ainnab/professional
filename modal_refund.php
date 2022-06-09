<!-- Confirmation modal -->
<div class="modal fade" id="verify<?php echo $apId; ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <form id="" action="" method="post" class="form-horizontal" role="form">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body text-center font-18">
                    <input class="form-control" type="hidden" name="id" value="<?php echo $apId; ?>">
                    <h4 class="padding-top-30 mb-30 weight-500">Are you sure you want to verify this data?</h4>
                    <div class="padding-bottom-30 row" style="max-width: 170px; margin: 0 auto;">
                        <div class="col-6">
                            <button type="submit" name="verify" class="btn btn-primary border-radius-100 btn-block confirmation-btn"><i class="fa fa-check"></i></button>
                            YES
                        </div>
                        <div class="col-6">
                            <button type="button" class="btn btn-secondary border-radius-100 btn-block confirmation-btn" data-dismiss="modal"><i class="fa fa-times"></i></button>
                            NO
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

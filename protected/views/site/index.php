
<div id='content'>
    <?php
    echo $this->renderPartial('stock_details', array(
        'finance' => $finance
    ));
    ?>
</div>
<!-- Modal -->
<div class="modal fade" id="email" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Send E-Mail</h4>
            </div>
            <div class="modal-body">
                <form>
                    <input type="text" id="name-textbox" class="form-control col-md-5" placeholder="Name" />
                    <input type="text" id="email-textbox" class="form-control col-md-offset-1 col-md-5" placeholder="E-Mail" />
                    <!-- </div> -->
                </form>
            </div>
            <div class="modal-footer" style='margin-top: 35px;'>
                <button type="button" class="btn btn-success" id='email-button'>Send</button>
            </div>
        </div>
    </div>
</div>
<!-- End of Modal -->
<script type='text/javascript'>
    localStorage.symbol = "<?php echo $finance->quote->quote->symbol; ?>";
</script>
<!-- MODAL STICK UP  -->
<div class="modal fade stick-up" id="addNewAppModal" tabindex="-1" role="dialog" aria-labelledby="addNewAppModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header clearfix ">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="pg-close fs-14"></i>
                </button>
                <h4 class="p-b-5"><span class="semi-bold">New</span> App</h4>
            </div>
            <div class="modal-body">
                <p class="small-text">Create {{EZ_SET_MODEL}}</p>
                <div id="form-alert"><p class="small-text"></p></div>
                <form role="form" id="{{EZ_SET_MODEL}}-form" action="{{$ezapp_set['base_url']}}/{{EZ_SET_MODEL}}/save" method="post">

                    {{ csrf_field() }}

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group form-group-default">
                                <label>Job #</label>
                                <input name="job_id" type="text" class="form-control" placeholder="">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group form-group-default">
                                <label>Trailer #</label>
                                <input name="trailer_id" type="text" class="form-control" placeholder="">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group form-group-default">
                                <label>LCL/FCL Delivery To</label>
                                <input name="delivery" type="text" class="form-control" placeholder="">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <input id="{{EZ_SET_MODEL}}-submit"  type="submit" class="btn btn-primary  btn-cons" value="Save">
                <button id="model-close" type="button" class="btn btn-cons" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- END MODAL STICK UP  -->
<script src="{{$ezapp_set['base_url']}}/assets/plugins/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
<script>

    $(function(){
        $("#{{EZ_SET_MODEL}}-submit").on('click', function(e){
            e.preventDefault();
            $.ajax({
                url: "{{$ezapp_set['base_url']}}/{{EZ_SET_MODEL}}/save",
                type: "POST",
                data: $('#{{EZ_SET_MODEL}}-form').serialize(),
                success: function(data){
                    $("#form-alert").html("Successfully submitted.");
                }
            });
        });

        $("#model-close").on('click', function(){
            location.href = "{{$ezapp_set['base_url']}}/{{EZ_SET_MODEL}}";
        });
    });
</script>
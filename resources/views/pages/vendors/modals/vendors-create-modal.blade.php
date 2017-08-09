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
                <p class="small-text">Create a new app using this form, make sure you fill them all</p>
                <div id="form-alert"><p class="small-text"></p></div>
                <form role="form" id="vendors-form" action="{{$ezapp_set['base_url']}}/vendors/save" method="post">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group form-group-default">
                                <label>name</label>
                                <input name="vendor_id" type="text" class="form-control" placeholder="The Vendor ID">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group form-group-default">
                                <label>Description</label>
                                <input name="name" type="text" class="form-control" placeholder="The Vendor Name">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <input id="vendor-submit"  type="submit" class="btn btn-primary  btn-cons" value="Save">
                <button type="button" class="btn btn-cons" data-dismiss="modal">Close</button>
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
        $("#vendor-submit").on('click', function(e){
            alert('OKAY');
            e.preventDefault();
            $.ajax({
                url: "{{$ezapp_set['base_url']}}/vendors/save",
                type: "POST",
                data: $('#vendors-form').serialize(),
                success: function(data){
                    $("#form-alert").html("Successfully submitted.");
                }
            });
        });
    });
</script>
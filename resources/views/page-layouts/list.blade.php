<!-- START CONTAINER FLUID -->
<div class=" container-fluid   container-fixed-lg bg-white">
    <!-- START card -->
    <div class="card card-transparent">
        <div class="card-header  d-flex justify-content-between">
            <div class="card-title">List of {{EZ_SET_MODEL}}
            </div>
            <div class="export-options-container"></div>
            <!-- <div class="clearfix"></div> -->
        </div>
        <div class="card-block">
            <table class="table table-striped" id="tableWithExportOptions">
                <thead>
                <tr>
                    @foreach( $ezapp_set[EZ_SET_MODEL.'_fields'] as $key => $value )
                        <th>{{$value}}</th>
                    @endforeach
                </tr>
                </thead>
                <tbody>
                @foreach( $ezapp_set[EZ_SET_MODEL] as $key => $values)
                    <tr class="odd gradeX">
                        @foreach( $values as $subkey => $value)
                            <td>{{$value}}</td>
                        @endforeach
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- END card -->
</div>
<!-- END CONTAINER FLUID -->
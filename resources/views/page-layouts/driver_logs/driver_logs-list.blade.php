<!-- START CONTAINER FLUID -->
<div class=" container-fluid   container-fixed-lg bg-white">
    <!-- START card -->
    <div class="card card-transparent">
        <div class="card-header  d-flex justify-content-between">
            <div class="card-title">List of {{EZ_SET_MODEL}}
            </div>
            <!--div class="export-options-container"></div -->
            <div class="pull-right">
                <div class="col-xs-12">
                    <input type="text" id="search-table" class="form-control pull-right" placeholder="Search">
                </div>
            </div>
            <!-- <div class="clearfix"></div> -->
        </div>
        <div class="card-block">
            @if($ezapp_set[EZ_SET_MODEL] !== false )
                <table class="table table-striped" id="tableWithSearch">
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
                                @if ($subkey == 'empty' )
                                    @if ($value == 1)
                                        <td onclick="javascript:location='{{$ezapp_set['base_url']}}/{{EZ_SET_MODEL}}/update/{{$values['job_id']}}'" style="cursor: pointer"><i style="color: green; font-size: 25px;" class="fa fa-check-square" aria-hidden="true"></i>
                                        </td>
                                    @else
                                        <td onclick="javascript:location='{{$ezapp_set['base_url']}}/{{EZ_SET_MODEL}}/update/{{$values['job_id']}}'" style="cursor: pointer"><i style="color: red; font-size: 20px;" class="fa fa-window-close" aria-hidden="true"></i>
                                        </td>
                                    @endif
                                @elseif ($subkey == 'load' )
                                    @if ($value == 1)
                                        <td onclick="javascript:location='{{$ezapp_set['base_url']}}/{{EZ_SET_MODEL}}/update/{{$values['job_id']}}'" style="cursor: pointer"><i style="color: green; font-size: 25px;" class="fa fa-check-square" aria-hidden="true"></i>
                                        </td>
                                    @else
                                        <td onclick="javascript:location='{{$ezapp_set['base_url']}}/{{EZ_SET_MODEL}}/update/{{$values['job_id']}}'" style="cursor: pointer"><i style="color: red; font-size: 20px;" class="fa fa-window-close" aria-hidden="true"></i>
                                        </td>
                                    @endif
                                @else
                                    <td onclick="javascript:location='{{$ezapp_set['base_url']}}/{{EZ_SET_MODEL}}/update/{{$values['job_id']}}'" style="cursor: pointer">{{$value}}</td>
                                @endif

                            @endforeach
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
    <!-- END card -->
</div>
<!-- END CONTAINER FLUID -->
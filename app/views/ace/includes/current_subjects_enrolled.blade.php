@if(is_array($current_subjects_enrolled))
<div class="row-fluid">
    <div class="col-xs-12 col-sm-6 widget-container-span ui-sortable">
        <div class="widget-box">
            <div class="widget-header header-color-blue">
                <h5 class="bigger lighter">
                    <i class="icon-table"></i>
                    Current Subjects Enrolled
                </h5>
            </div>

            <div class="widget-body">
                <div class="widget-main no-padding">
                    <table class="table table-striped table-bordered table-hover">
                        <thead class="thin-border-bottom">
                        <tr>
                            <th>
                                <i class="icon-code"></i>
                                Code
                            </th>

                            <th>
                                <i>@</i>
                                Subject
                            </th>

                            <th>
                                Units
                            </th>
                            <th class="hidden-480">Grade</th>
                        </tr>
                        </thead>

                        <tbody>

                        @foreach($current_subjects_enrolled as $key => $value)
                        <tr>
                            <td>
                                <a href="#">{{$value['subject']->code}}</a>
                            </td>

                            <td>
                                {{$value['subject']->name}}
                            </td>

                            <td class="hidden-480">
                                {{sprintf("%.2f", $value['subject']->unit)}}
                            </td>
                            <td>
                                {{$value['grade']}}
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div><!-- /span -->
</div>
@endif
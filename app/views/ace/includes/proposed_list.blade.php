@if(is_array($proposed_list))
<div class="row-fluid">
    <div class="col-xs-12 col-sm-6 widget-container-span ui-sortable">
        <div class="widget-box">
            <div class="widget-header header-color-blue">
                <h5 class="bigger lighter">
                    <i class="icon-table"></i>
                    Proposed Subjects For Next Semester
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
                        </tr>
                        </thead>

                        <tbody>

                        @foreach($proposed_list as $subject)
                        <tr>
                            <td>
                                <a href="#">{{$subject->code}}</a>
                            </td>

                            <td>
                                {{$subject->name}}
                            </td>

                            <td class="hidden-480">
                                {{$subject->unit}}.0
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
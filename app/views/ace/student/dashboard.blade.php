@section('content')
@include($theme.'.student._includes.student-information')<br />
@include($theme.'.student._includes.current_subjects_enrolled', array('current_subjects_enrolled', $current_subjects_enrolled))

@stop
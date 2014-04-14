@section('content')

@include($theme.'.student.includes.current_subjects_enrolled', array('current_subjects_enrolled', $current_subjects_enrolled))

@stop
<div class="row-fluid">
    <div class="profile-user-info profile-user-info-striped">
        <div class="profile-info-row">
            <div class="profile-info-name"> Student Id </div>

            <div class="profile-info-value">
                <span id="username">{{$student->id}}</span>
            </div>
        </div>

        <div class="profile-info-row">
            <div class="profile-info-name"> Student Name </div>

            <div class="profile-info-value">
                <i class="fa fa-map-marker light-orange bigger-110"></i>
                <span id="first_name">{{$student->last_name}}</span>
                <span id="last_nam">{{$student->first_name}}</span>
            </div>
        </div>

        <div class="profile-info-row">
            <div class="profile-info-name"> Student Prospectus </div>

            <div class="profile-info-value">
                <span class="editable editable-click" id="age">{{$student->curriculum->abbr}} {{$student->curriculum->revision}}</span>
            </div>
        </div>

        <div class="profile-info-row">
            <div class="profile-info-name"> Year Level </div>

            <div class="profile-info-value">
                <span class="editable editable-click" id="signup">{{$student->standing}}</span>
            </div>
        </div>

    </div>
</div>
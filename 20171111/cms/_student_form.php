<form class="form-horizontal" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="student-name" class="col-sm-2 control-label">Name</label>
        <div class="col-sm-8">
            <input value="<?php if (isset($student['name']))
    echo $student['name'];
else
    echo '';
?>" type="text" class="form-control1" id="student-name" placeholder="Student name" name="name">
        </div>
        <div class="col-sm-2">
            <p class="help-block">Your help text!</p>
        </div>
    </div>
    <div class="form-group">
        <label for="student-picture" class="col-sm-2 control-label">Picture</label>
        <div class="col-sm-8">
            <input id="student-picture" name="picture" type="file">
        </div>
    </div>
    <div class="form-group">
        <label for="gender" class="col-sm-2 control-label">Gender</label>
        <div class="col-sm-8">
            <div class="radio block"><label><input value="male" name="gender" type="radio"> Male</label></div>
            <div class="radio block"><label><input value="female" name="gender" type="radio"> Female</label></div>
        </div>
    </div>
    <div class="form-group">
        <label for="checkbox" class="col-sm-2 control-label">Courses</label>
        <div class="col-sm-8">
            <div class="checkbox-inline1"><label><input name="courses[]" checked="" value="CS101" type="checkbox"> Introduction to Programming</label></div>
            <div class="checkbox-inline1"><label><input name="courses[]" value="CS102" type="checkbox"> Introduction to Databases</label></div>
            <div class="checkbox-inline1"><label><input name="courses[]" value="CS202" type="checkbox"> Operating Systems</label></div>
        </div>
    </div>
    <div class="form-group">
        <label for="dob" class="col-sm-2 control-label">Date of Birth</label>
        <div class="col-sm-8">
            <input name="dob" type="text" class="form-control1" id="dob" placeholder="Date of birth">
        </div>
    </div>
    <div class="form-group">
        <label for="class" class="col-sm-2 control-label">Class</label>
        <div class="col-sm-8">
            <input name="class" type="text" class="form-control1" id="class" placeholder="Class">
        </div>
    </div>
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <button class="btn-primary btn">Submit</button>
            <button class="btn-default btn">Cancel</button>
            <button class="btn-inverse btn">Reset</button>
        </div>
    </div>
</form>
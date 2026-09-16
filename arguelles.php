<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Homer P Arguelles</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
    body{
      background-color: #f5f6f8;
    }
  label {
    font-size: 18px;
  }

  input {
    font-size: 18px;
  }

  input::placeholder {
    font-size: 18px;
  }
</style>
  </head>
  <body>
    <br>
    <div class="container">
      <div class="text-center text-white p-4 mb-4 rounded" style="background-color: #0d47a1;">
        <h2 class="mb-1"><b>PERSONAL DATA SHEET</b></h2>
      </div>
    </div>

    </div>
    <br>
    <div class="container">
      <h3>Personal Information</h3>
      <hr/>
      <div class="row">
        <div class="col">
          <label class="form-label" for="txtFname"> FIRST NAME </label>
          <input class="form-control" type="text" name="txtFname" placeholder="Enter First Name"/>
        </div>
        <div class="col">
          <label class="form-label" for="txtMname">MIDDLE NAME</label>
          <input class="form-control" type="text" name="txtMname" placeholder="Enter Middle Name"/>
        </div>
        <div class="col">
          <label class="form-label" for="txtLname">LAST NAME</label>
          <input class="form-control" type="text" name="txtLname"placeholder="Enter Last Name"/>
        </div>
      </div>

      <br>
      <div class="row">
        <div class="col-6">
          <label class="form-label" for="birthday">BIRTHDAY</label>
          <input class="form-control" type="date" name="birthday" />
        </div>
        <div class="col-6">
          <label class="form-label">SEX</label>
          <div class="d-flex">
          <div class="form-check me-5">
            <input class="form-check-input" type="radio" name="sex">
            <label class="form-check-label" for="sexMale">Male</label>
          </div>
            <div class="form-check ">
              <input class="form-check-input" type="radio" name="sex">
              <label class="form-check-label" for="sexFemale">Female</label>
            </div>
          </div>
        </div>
      </div>

      <br>
      <div class="row">
        <div class="col-12">
          <label class="form-label" for="txtAdd">HOME ADDRESS</label>
          <input class="form-control" type="text" name="txtAdd" placeholder="Enter Address"/>
        </div>
      </div>

      <br>
      <div class="row">
        <div class="col-12">
          <label class="form-label" for="txtAdd">EMAIL ADDRESS</label>
          <input class="form-control" type="text" name="txtEmail" placeholder="Enter Email Address"/>
        </div>
      </div>

      <br>
      <h4>Family Information</h4>
      <hr/>
      <div class="row">
        <div class="col-6">
          <label class="form-label" for="txtMother">MOTHER'S NAME</label>
          <input class="form-control" type="text" name="txtMother" placeholder="Enter Mother's Name"/>
        </div>
        <div class="col-6">
          <label class="form-label" for="txtFather">MOTHER'S OCCUPATION</label>
          <input class="form-control" type="text" name="jobMother" placeholder="Enter Mother's Occupation"/>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-6">
          <label class="form-label" for="txtFather">FATHER'S NAME</label>
          <input class="form-control" type="text" name="txtFather" placeholder="Enter Father's Name"/>
        </div>
        <div class="col-6">
          <label class="form-label" for="txtFather">FATHER'S OCCUPATION</label>
          <input class="form-control" type="text" name="jobFather" placeholder="Enter Father's Occupation"/>
        </div>
      </div>

      <br>
      <h4> Educational Background </h4>
      <hr/>
      <div class="row">
        <div class="col-12">
          <label class="form-label"><b>ELEMENTARY</b></label>
        </div>
        <div class="col-md-6">
          <label class="form-label" for="elemSchool">SCHOOL NAME</label>
          <input class="form-control" type="text" name="elemSchool" placeholder="Enter School Name"/>
        </div>

        <div class="col-md-6">
          <label class="form-label" for="elemYear"> YEAR GRADUATED</label>
          <input class="form-control" type="text" name="elemYear" placeholder="Enter Year Graduated"/>
        </div>
      </div>

      <br>
      <div class="row">
        <div class="col-12">
          <label class="form-label"><b>SECONDARY</b></label>
        </div>
        <div class="col-md-6">
          <label class="form-label" for="elemSchool">SCHOOL NAME</label>
          <input class="form-control" type="text" name="highSchool" placeholder="Enter School Name"/>
        </div>
        <div class="col-md-6">
          <label class="form-label" for="elemYear">YEAR GRADUATED</label>
          <input class="form-control" type="text" name="highYear" placeholder="Enter Year Graduated"/>
        </div>
      </div>

    <br>
    <div class="row">
      <div class="col-12">
        <label class="form-label"><b>COLLEGE</b></label>
      </div>
      <div class="col-md-6">
        <label class="form-label" for="elemSchool">SCHOOL NAME</label>
        <input class="form-control"type="text"name="colSchool" placeholder="Enter School Name"/>
      </div>
      <div class="col-md-6">
        <label class="form-label" for="elemYear"> COURSE/PROGRAM</label>
        <input class="form-control" type="text" name="colYear" placeholder="Enter Course / Program"/>
      </div>
    </div>

    <br>
    <div class="row">
      <div class="col-12 text-center">
        <button type="submit" class="btn btn-outline-primary btn-lg px-5 py-2">SUBMIT</button>
      </div>
    </div>


  </div>
  <br>

  </body>
</html>

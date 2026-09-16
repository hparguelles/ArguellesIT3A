<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Homer P Arguelles</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
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

    <!-- HEADER -->
    <div class="container">
        <div class="text-center text-white p-4 mb-4 rounded"
             style="background-color: #0d47a1;">

            <h2 class="mb-1">
                <b>PERSONAL DATA SHEET</b>
            </h2>

        </div>
    </div>


    <div class="container">

        <form id="pdsForm">

            <!-- PERSONAL INFORMATION -->
            <h3>Personal Information</h3>
            <hr>

            <div class="row">

                <!-- FIRST NAME -->
                <div class="col">

                    <label class="form-label" for="txtFname">
                        FIRST NAME
                    </label>

                    <input class="form-control"
                           type="text"
                           id="txtFname"
                           name="txtFname"
                           placeholder="Enter First Name">

                    <label class="invalid-feedback"></label>

                </div>


                <!-- MIDDLE NAME -->
                <div class="col">

                    <label class="form-label" for="txtMname">
                        MIDDLE NAME
                    </label>

                    <input class="form-control"
                           type="text"
                           id="txtMname"
                           name="txtMname"
                           placeholder="Enter Middle Name">

                    <label class="invalid-feedback"></label>

                </div>


                <!-- LAST NAME -->
                <div class="col">

                    <label class="form-label" for="txtLname">
                        LAST NAME
                    </label>

                    <input class="form-control"
                           type="text"
                           id="txtLname"
                           name="txtLname"
                           placeholder="Enter Last Name">

                    <label class="invalid-feedback"></label>

                </div>

            </div>


            <br>


            <!-- BIRTHDAY AND SEX -->
            <div class="row">

                <!-- BIRTHDAY -->
                <div class="col-6">

                    <label class="form-label" for="birthday">
                        BIRTHDAY
                    </label>

                    <input class="form-control"
                           type="date"
                           id="birthday"
                           name="birthday">

                    <label class="invalid-feedback"></label>

                </div>


                <!-- SEX -->
                <div class="col-6">

                    <label class="form-label">
                        SEX
                    </label>

                    <div class="d-flex">

                        <div class="form-check me-5">

                            <input class="form-check-input"
                                   type="radio"
                                   id="sexMale"
                                   name="sex"
                                   value="Male">

                            <label class="form-check-label"
                                   for="sexMale">
                                Male
                            </label>

                        </div>


                        <div class="form-check">

                            <input class="form-check-input"
                                   type="radio"
                                   id="sexFemale"
                                   name="sex"
                                   value="Female">

                            <label class="form-check-label"
                                   for="sexFemale">
                                Female
                            </label>

                        </div>

                    </div>

                    <label class="invalid-feedback"></label>

                </div>

            </div>


            <br>


            <!-- HOME ADDRESS -->
            <div class="row">

                <div class="col-12">

                    <label class="form-label" for="txtAdd">
                        HOME ADDRESS
                    </label>

                    <input class="form-control"
                           type="text"
                           id="txtAdd"
                           name="txtAdd"
                           placeholder="Enter Address">

                    <label class="invalid-feedback"></label>

                </div>

            </div>


            <br>


            <!-- EMAIL -->
            <div class="row">

                <div class="col-12">

                    <label class="form-label" for="txtEmail">
                        EMAIL ADDRESS
                    </label>

                    <input class="form-control"
                           type="email"
                           id="txtEmail"
                           name="txtEmail"
                           placeholder="Enter Email Address">

                    <label class="invalid-feedback"></label>

                </div>

            </div>


            <br>


            <!-- FAMILY INFORMATION -->
            <h4>Family Information</h4>
            <hr>


            <!-- MOTHER -->
            <div class="row">

                <div class="col-6">

                    <label class="form-label" for="txtMother">
                        MOTHER'S NAME
                    </label>

                    <input class="form-control"
                           type="text"
                           id="txtMother"
                           name="txtMother"
                           placeholder="Enter Mother's Name">

                    <label class="invalid-feedback"></label>

                </div>


                <div class="col-6">

                    <label class="form-label" for="jobMother">
                        MOTHER'S OCCUPATION
                    </label>

                    <input class="form-control"
                           type="text"
                           id="jobMother"
                           name="jobMother"
                           placeholder="Enter Mother's Occupation">

                    <label class="invalid-feedback"></label>

                </div>

            </div>


            <br>


            <!-- FATHER -->
            <div class="row">

                <div class="col-6">

                    <label class="form-label" for="txtFather">
                        FATHER'S NAME
                    </label>

                    <input class="form-control"
                           type="text"
                           id="txtFather"
                           name="txtFather"
                           placeholder="Enter Father's Name">

                    <label class="invalid-feedback"></label>

                </div>


                <div class="col-6">

                    <label class="form-label" for="jobFather">
                        FATHER'S OCCUPATION
                    </label>

                    <input class="form-control"
                           type="text"
                           id="jobFather"
                           name="jobFather"
                           placeholder="Enter Father's Occupation">

                    <label class="invalid-feedback"></label>

                </div>

            </div>


            <br>


            <!-- EDUCATIONAL BACKGROUND -->
            <h4>Educational Background</h4>
            <hr>


            <!-- ELEMENTARY -->
            <div class="row">

                <div class="col-12">
                    <label class="form-label">
                        <b>ELEMENTARY</b>
                    </label>
                </div>


                <div class="col-md-6">

                    <label class="form-label" for="elemSchool">
                        SCHOOL NAME
                    </label>

                    <input class="form-control"
                           type="text"
                           id="elemSchool"
                           name="elemSchool"
                           placeholder="Enter School Name">

                    <label class="invalid-feedback"></label>

                </div>


                <div class="col-md-6">

                    <label class="form-label" for="elemYear">
                        YEAR GRADUATED
                    </label>

                    <input class="form-control"
                           type="text"
                           id="elemYear"
                           name="elemYear"
                           placeholder="Enter Year Graduated">

                    <label class="invalid-feedback"></label>

                </div>

            </div>


            <br>


            <!-- SECONDARY -->
            <div class="row">

                <div class="col-12">
                    <label class="form-label">
                        <b>SECONDARY</b>
                    </label>
                </div>


                <div class="col-md-6">

                    <label class="form-label" for="highSchool">
                        SCHOOL NAME
                    </label>

                    <input class="form-control"
                           type="text"
                           id="highSchool"
                           name="highSchool"
                           placeholder="Enter School Name">

                    <label class="invalid-feedback"></label>

                </div>


                <div class="col-md-6">

                    <label class="form-label" for="highYear">
                        YEAR GRADUATED
                    </label>

                    <input class="form-control"
                           type="text"
                           id="highYear"
                           name="highYear"
                           placeholder="Enter Year Graduated">

                    <label class="invalid-feedback"></label>

                </div>

            </div>


            <br>


            <!-- COLLEGE -->
            <div class="row">

                <div class="col-12">
                    <label class="form-label">
                        <b>COLLEGE</b>
                    </label>
                </div>


                <div class="col-md-6">

                    <label class="form-label" for="colSchool">
                        SCHOOL NAME
                    </label>

                    <input class="form-control"
                           type="text"
                           id="colSchool"
                           name="colSchool"
                           placeholder="Enter School Name">

                    <label class="invalid-feedback"></label>

                </div>


                <div class="col-md-6">

                    <label class="form-label" for="colCourse">
                        COURSE/PROGRAM
                    </label>

                    <input class="form-control"
                           type="text"
                           id="colCourse"
                           name="colCourse"
                           placeholder="Enter Course / Program">

                    <label class="invalid-feedback"></label>

                </div>

            </div>


            <br>


            <!-- SUBMIT -->
            <div class="row">

                <div class="col-12 text-center">

                    <button type="submit"
                            id="btnSubmit"
                            class="btn btn-outline-primary btn-lg px-5 py-2">
                        SUBMIT
                    </button>

                </div>

            </div>

        </form>

    </div>


    <br>


    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>


    <script>

        $(document).ready(function() {

            $('#btnSubmit').click(function(e) {

                e.preventDefault();


                if (isEmpty('#txtFname')) {
                    return;
                }

                if (isEmpty('#txtMname')) {
                    return;
                }

                if (isEmpty('#txtLname')) {
                    return;
                }

                if (isEmpty('#birthday')) {
                    return;
                }


                // CHECK SEX
                if ($('input[name="sex"]:checked').length == 0) {

                    alert("SEX is required.");

                    return;
                }


                if (isEmpty('#txtAdd')) {
                    return;
                }

                if (isEmpty('#txtEmail')) {
                    return;
                }

                if (isEmpty('#txtMother')) {
                    return;
                }

                if (isEmpty('#jobMother')) {
                    return;
                }

                if (isEmpty('#txtFather')) {
                    return;
                }

                if (isEmpty('#jobFather')) {
                    return;
                }

                if (isEmpty('#elemSchool')) {
                    return;
                }

                if (isEmpty('#elemYear')) {
                    return;
                }

                if (isEmpty('#highSchool')) {
                    return;
                }

                if (isEmpty('#highYear')) {
                    return;
                }

                if (isEmpty('#colSchool')) {
                    return;
                }

                if (isEmpty('#colCourse')) {
                    return;
                }


                alert("Personal Data Sheet submitted successfully!");

            });


            // EMPTY VALIDATION FUNCTION
            function isEmpty(obj) {

                if ($(obj).val().trim() == "") {

                    $(obj).addClass("is-invalid");

                    $(obj).removeClass("is-valid");

                    $(obj).next(".invalid-feedback")
                        .text(
                            $(obj).prev(".form-label").text().trim()
                            + " is required."
                        );

                    return true;

                } else {

                    $(obj).addClass("is-valid");

                    $(obj).removeClass("is-invalid");

                    $(obj).next(".invalid-feedback").text("");

                    return false;
                }

            }

        });

    </script>

</body>
</html>
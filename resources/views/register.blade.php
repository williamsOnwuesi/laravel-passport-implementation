<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        /* @media (min-width: 1025px) {
            .h-custom {
                height: 100vh !important;
            }
        } */
    </style>

</head>
<body>

    <!-- <form action="/register" method="POST">
        
        @csrf

        <input name="name" type="text" class="form_input" placeholder="Williams"/>
        <input name="email" type="email" class="form_input"/>
        <input name="password" type="password" class="form_input"/>
        <button type="submit">Register</button>
        
    </form> -->
    <section class="h-100 h-custom" style="background-color: #8fc4b7;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-8 col-xl-6">
                    <div class="card rounded-3">

                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img3.webp"
                            class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;"
                            alt="Sample photo">

                        <div class="card-body p-4 p-md-5">

                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Registration Info</h3>

                            <form class="px-md-2" action="/register" method="POST">

                                @csrf

                                <div class="form-outline mb-4">
                                    <input type="text" id="form3Example1q" class="form-control" placeholder="xyz" required/>
                                    <label class="form-label" for="form3Example1q">Name</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="email" id="form3Example1q" class="form-control" placeholder="xyz@gmail.com" required/>
                                    <label class="form-label" for="form3Example1q">Email</label>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4">

                                        <div class="form-outline datepicker">
                                            <input type="date" class="form-control" id="exampleDatepicker1" required/>
                                            <label for="exampleDatepicker1" class="form-label">Select a date</label>
                                        </div>

                                    </div>

                                    <div class="col-md-6 mb-4">

                                        <select class="select form-control" required>
                                            <option value="1" disabled selected>Gender</option>
                                            <option value="2">Female</option>
                                            <option value="3">Male</option>
                                            <option value="4">Other</option>
                                        </select>

                                    </div>
                                    
                                </div>

                                <div class="mb-4">

                                    <select class="select form-control" required>
                                        <option value="1" disabled selected>Class</option>
                                        <option value="2">Class 1</option>
                                        <option value="3">Class 2</option>
                                        <option value="4">Class 3</option>
                                    </select>

                                </div>

                                <div class="row mb-4 pb-2 pb-md-0 mb-md-5">
                                    <div class="col-md-6">

                                        <div class="form-outline">
                                            <input type="text" id="form3Example1w" class="form-control" placeholder='XVH34J5S' required/>
                                            <label class="form-label" for="form3Example1w">Registration code</label>
                                        </div>

                                    </div>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="password" id="form3Example1q" class="form-control" placeholder='Enter a "SECURE" password!.' required/>
                                    <label class="form-label" for="form3Example1q">Password</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="password" id="form3Example1q" class="form-control" placeholder="Confirm your password!." required/>
                                    <label class="form-label" for="form3Example1q">Confirm Password</label>
                                </div>

                                <button type="submit" class="btn btn-success btn-lg mb-1">Submit</button>

                            </form>

                            <div class="card-footer text-center py-3 mt-5">
                                <div class="small"><a href="/login">Already have an account? Sign in!</a></div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>


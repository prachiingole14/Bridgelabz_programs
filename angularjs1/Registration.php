

<html>
    <head>
        <title>Registration Page</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.7/angular-resource.min.js"></script>

        <style>
        .h1
        {
            text-align: center;
            color: maroon;
            margin-top: 20px;
        }

        .well
        {
            align-content: center;
            width: 580px; 
            height: 530px;
            border-width: 2px;
            background-color:lightgray;
            margin-left: 380px;
            margin-top: 20px;
        }

        .btn
        {
            text-align: center;
            width: 120px;
            margin-bottom: 20px;
            margin-left: 20px;
        }
        .sup
        {
            color: red;
        }

        .row
        {
            margin-top: 15px;
            margin-bottom: 20px;
            margin-left: 20px;
            margin-right: 20px;
        }

        marquee
        {
            height: 20px;
            background-color: black;
            color: aliceblue;
            margin-top: 20px;
            font-family: 'Courier New', Courier, monospace;
        }
        
        </style>
    </head>

    <body> 

<marquee class="marquee"><h5>Confirm your registration here.....!</h5></marquee>
<div ng-app="myapp" ng-controller="usercontroller"></div>

            <h1 class="h1">Registration Form</h1>
                <div class="well"  >
                <form action=" " method="POST"> 

                    <div class="row" >
                      These <p style="color:red"> * </p> are mendetory.....
                    </div>
                    <div class="row" > 
                        <div class="col-md-3">
                            <label for="name"><h6>Name<sup class=sup>*</sup> </h6> </label>
                        </div>
                        <div class="col-md-9">
                            <input type="name" class="form-control" id="name" ng-model="name" placeholder="Enter your name here" autofill="off" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <label for="dob"><h6>Date of Birth <sup class=sup>*</sup></h6> </label>
                        </div>
                        <div class="col-md-9">
                            <input type="date" class="form-control" id="date" ng-model="dob" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <label for="name"><h6>Contact No <sup class=sup>*</sup></h6> </label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="no" ng-model="no" placeholder="Enter your contact no here" autofill="off" required>
                        </div>
                    </div>

                    <div class="row" >
                        <div class="col-md-3">
                            <label for="email:"><h6>Email Id<sup class=sup>*</sup> </h6> </label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="email" ng-model="email" placeholder="Enter your email id here" autofill="off" required>
                        </div>
                    </div>

                    <div class="row" >
                        <div class="col-md-3">
                            <label for="address:"><h6>Address<sup class=sup>*</sup> </h6> </label>
                        </div>
                        <div class="col-md-9">
                            <input type="textarea" class="form-control" ng-model="address" id="address" placeholder="Enter your address here" autofill="off" required>
                        </div>
                    </div>

                    <div class="row" >
                        <div class="col-md-3">
                            <label for="password:"><h6>Password<sup class=sup>*</sup> </h6> </label>
                        </div>
                        <div class="col-md-9">
                            <input type="password" class="form-control" id="password" ng-model="password" placeholder="Enter your password here" autofill="off" required>
                        </div>
                    </div>


                    <div class="row" >
                        <div class="col-md-3">
                            <label for="psw:"><h6>Confirm Password <sup class=sup>*</sup></h6> </label>
                        </div>
                        <div class="col-md-9">
                            <input type="password" class="form-control" id="cpsw" ng-model="cpsw" placeholder="Confirm your password here" autofill="off" required>
                        </div>
                    </div>
                 
                    <div class="row">
                        <button type="button" class="btn btn-success" id="demo" onclick="myFunction()">Submit</button> 
                        <button type="button" class="btn btn-warning" style="margin-left:40px;">Reset</button> 
                        <button type="button" class="btn btn-primary" style="margin-left:40px;">Back</button>
                    </div>
                </form>
                </div>
            </div>
        </div> 
        
<p id="demo"></p>

<script>
    function myFunction() 
    {
        document.getElementById("demo").innerHTML = "Hello World";
    }  
</script>
    </body>
</html>






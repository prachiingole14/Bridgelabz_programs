<!DOCTYPE html>
<html>
    <head>
        <title>AngularJs $http.post() Service Response Example</title>
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
        <script type="text/javascript">

        var app = angular.module('postserviceApp', []);
        app.controller('postserviceCtrl', function ($scope, $http) 
        {
            $scope.name = null;
            $scope.age = null;
            $scope.adress = null;
            $scope.lblMsg = null;
            $scope.postdata = function (name, age, adress) 
            {
                debugger
                var data = {name: name,
                            age: age,
                            adress: adress};
                //Call the services
                $http.post('http://localhost/codeignator/sampleapi', JSON.stringify(data)).then(function (response) 
                {
                    if (response.data)
                    $scope.msg = "Post Data Submitted Successfully!";
                }, 

                function (response) 
                {
                    $scope.msg = "Service not Exists";
                    $scope.statusval = response.status;
                    $scope.statustext = response.statusText;
                    $scope.headers = response.headers();
                });
            };
        });
    </script>
</head>
<body>

    <div ng-app="postserviceApp" ng-controller="postserviceCtrl">
        <div>
            Name : <input ng-model="name" /><br/><br/>
            Age : <input ng-model="age" /><br/><br/>
            Adress : <input ng-model="adress" /><br/>
            <input type="button" value="Send" ng-model="submit" ng-click="postdata(name, age, adress)" /> <br/><br/>
        </div>
        
        <p>Output Message : {{msg}}</p>
        <p>StatusCode: {{statusval}}</p>
        <p>Status: {{statustext}}</p>
        <p>Response Headers: {{headers}}</p>
    </div>
</body>
</html>
var testApp = angular.module('testApp', [])

.controller("mainCtrl", function($scope, $http){

    $http.get('/api/details')
        .success(function(data){
            $scope.list = data;
        });

    $scope.create = function(content){
        $http.post('/api/details', content)
            .success(function(){
                $http.get('/api/details')
                    .success(function(data){
                        $scope.list = data;
                    });
            })
            .error(function(e){
                $scope.errors = e;
            })
    }


});

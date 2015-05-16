var _app = angular.module('rpApp', ['ngAnimate', 'ngFx', 'angularify.semantic.modal']);

// Config
_app.config(function($interpolateProvider){
    // Fix Angular/Blade conflict
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});

// Home Controller
_app.controller("HomeCtrl", function($scope, $http){

    $scope.showModal = false;
    $scope.showSuccess = false;
    $scope.user = {};
    $scope.subscribe = function(form){
        if(form.$invalid){
            form.submitted = true;
            return false;
        }

        $scope.requestPromise = $http.post('/lead/register', {email: $scope.user.email}).success(function (data, status, headers, config) {

            if(data.error){
                $scope.errors = data.messages
                $scope.showModal = true;
                return;
            }

            $scope.showSuccess = true;

        }).error(function (data, status, headers, config) {
            $scope.errors = [
                "Erro ao cadastrar e-mail, por favor tente novamente mais tarde"
            ];
        });

    }



});
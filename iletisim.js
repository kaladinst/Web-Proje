var app = angular.module('contactApp', []);

app.controller('FormController', ['$scope', function($scope) {
    // Initialize user object
    $scope.user = {
        name: '',
        surname: '',
        email: '',
        gender: '',
        country: '',
        message: ''
    };

    $scope.formStatus = {
        submitted: false
    };

    $scope.submitForm = function() {
        if ($scope.contactForm.$valid) {
            console.log($scope.user);
            $scope.formStatus.submitted = true;
        } else {
            $scope.formStatus.submitted = true;
        }
    };
    $scope.isEmpty = function(field) {
        return angular.isUndefined(field) || field === '';
    };

    // Function to reset the form
    $scope.resetForm = function() {
        $scope.user = {
            name: '',
            surname: '',
            email: '',
            gender: '',
            country: '',
            message: ''
        };
        $scope.contactForm.$setPristine();
        $scope.formStatus.submitted = false;
    };
}]);
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

    $scope.submitted = false;

    // Function to handle form submission
    $scope.submitForm = function() {
        if ($scope.contactForm.$valid) {
            // If the form is valid, you can send the data to the server here
            console.log($scope.user);
            $scope.submitted = true; // Only set submitted to true when the form is valid
        }
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
        $scope.submitted = false;
    };
}]);
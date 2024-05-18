const app = angular.module('contactApp', []);
app.controller('contactController', function($scope) {
    $scope.user = {};

    $scope.submitForm = function() {
        if ($scope.contactForm.$valid) {
            // Display the form data on another page or do something else with it
            console.log($scope.user);
        }
    };

    $scope.resetForm = function() {
        $scope.user = {};
        $scope.contactForm.$setPristine();
    };
});
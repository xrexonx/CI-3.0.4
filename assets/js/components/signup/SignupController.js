(function() {
    'use strict';

    angular
        .module('AppControllers')
        .controller('SignupCtrl', function ($scope, Signup) {

            var vm = $scope;

            vm.users = {};

            vm.actions = {
                create: function () {
                    Signup
                        .create(vm.users)
                        .then(function (response) {
                        	if (response.data.success) {
                        		window.location = 'http://localhost/CI-3.0.4/';
                        	}

                    });

                }
            }
        });

})();
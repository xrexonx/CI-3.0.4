(function() {
    
    'use strict';

    angular
        .module('AppControllers')
        .controller('LoginCtrl', function ($scope, Login) {

            var vm = $scope;

            vm.users = {};
            vm.message = false;

            vm.actions = {
                login: function () {
                    Login
                        .login(vm.users)
                        .then(function (response) {
                        	if (response.data.success) {
                        		window.location = 'http://localhost/CI-3.0.4/dashboard/';
                        	} else {
                                vm.message = true;
                            }

                    });

                }
            }
        });

})();
angular.module('UserController', []).controller('UserController', [
  '$scope', '$localStorage', '$location',
  function ($scope, $localStorage, $location) {
    $scope.login = function () {
      var user = {
        username: this.username,
        password: this.password
      };

      $localStorage.user = user;
      $scope.getAuthenticatedUser(user);

      $location.path('/posts');
    };
  }
]);

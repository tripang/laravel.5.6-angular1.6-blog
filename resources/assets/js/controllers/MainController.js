angular.module('MainController', []).controller(
  'MainController', ['$scope', '$location', '$localStorage',
  function ($scope, $location, $localStorage) {
    /**
     * Highlighting the currently active menu item in the navbar.
     *
     * @param route
     * @returns {boolean}
     */
    $scope.isActive = function (route) {
      return route === $location.path();
    };

    /**
     * @param user {object}
     * @returns {null}
     */
    $scope.getAuthenticatedUser = function (user) {
      if (user) {
        $scope.authenticatedUser = user;

        return;
      }

      if (typeof $localStorage.user !== 'undefined') {
        $scope.authenticatedUser = $localStorage.user;

        return $localStorage.user;
      }

      return null;
    };

    $scope.logout = function () {
      delete $localStorage.user;
      delete $localStorage.posts;

      $scope.authenticatedUser = null;
      $location.path('/');
    };
  }
]);

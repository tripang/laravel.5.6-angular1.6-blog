angular.module('BlogController', []).controller('BlogController', [
  '$scope', '$location', '$routeParams', '$localStorage',
  function ($scope, $location, $routeParams, $localStorage) {
    if ($localStorage.posts === undefined) {
      $localStorage.posts = {};
    }

    $scope.postsCount = function () {
      return Object.keys($localStorage.posts).length;
    };

    $scope.create = function () {
      var post = {
        id: new Date().valueOf(),
        title: this.title,
        description: this.description
      };
      $localStorage.posts[post.id] = post;
      $scope.title = '';
      $scope.description = '';
      $location.path('posts/view/' + post.id);
    };

    $scope.find = function () {
      $scope.posts = $localStorage.posts;
    };

    $scope.remove = function (post) {
    };

    $scope.findOne = function () {
      var splitPath = $location.path().split('/');
      var postId = splitPath[splitPath.length - 1];
      $scope.posts = $localStorage.posts;
      if ($scope.posts[postId]) {
        $scope.post = $scope.posts[postId];
      }
    };
  }
]);

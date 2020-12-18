<!doctype html>
<html lang="en">
    <head>
        <base href="/">
        <meta charset="UTF-8">
        <title>Blog</title>
        <link rel="stylesheet" href="css/app.css"/>
        <script type="application/javascript" src="js/vendors.js"></script>
        <script type="application/javascript" src="js/app.js"></script>
    </head>
    <body ng-app="myApp" ng-controller="MainController" ng-init="getAuthenticatedUser()">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">Blog</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li ng-if="authenticatedUser != null"
                            class="nav-item" ng-class="{active:isActive('/posts')}">
                            <a class="nav-link" ng-class="{active:isActive('/posts')}" href="/posts">Posts</a>
                        </li>
                        <li ng-if="authenticatedUser != null"
                            class="nav-item" ng-class="{active:isActive('/posts/create')}">
                            <a class="nav-link" ng-class="{active:isActive('/posts')}" href="/posts/create">Create Post</a>
                        </li>
                    </ul>
                    <div class="d-flex">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item" ng-if="authenticatedUser == null" ng-class="{active:isActive('/auth/login')}">
                                <a class="nav-link" ng-class="{active:isActive('/posts')}" href="/auth/login">Log in</a>
                            </li>
                            <li class="nav-item" ng-if="authenticatedUser != null">
                                <div class="nav-link">@{{authenticatedUser.username}}</div>
                            </li>
                            <li class="nav-item" ng-if="authenticatedUser != null" ng-click="logout()">
                                <a class="nav-link" ng-href="#">Log out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <div class="container mt-3">
            <div ng-view></div>
        </div>

    </body>
</html>

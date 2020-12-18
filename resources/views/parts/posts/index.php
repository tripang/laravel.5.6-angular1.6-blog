<div ng-controller="BlogController" ng-init="find()">
    <h1>Posts</h1>
    <p ng-if="!postsCount()">
        There are no posts right now, <a href="/posts/create">create one!</a>
    </p>

    <div class="row" ng-repeat="post in posts">
        <a ng-href="/posts/view/{{post.id}}">{{post.title}}</a>
    </div>
</div>

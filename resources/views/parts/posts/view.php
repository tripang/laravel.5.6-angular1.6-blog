<div ng-controller="BlogController" ng-init="findOne()">
    <div ng-if="post.id !== undefined">
        <h1>{{post.title}}</h1>
        {{post.description}}
    </div>
    <div ng-if="post.id === undefined">
        No message
    </div>
</div>

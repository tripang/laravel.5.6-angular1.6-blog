<p ng-if="authenticatedUser">
    Hello {{authenticatedUser.username}}!
</p>
<p ng-if="!authenticatedUser">
    Hello guest!
</p>

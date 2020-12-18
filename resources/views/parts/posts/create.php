<div ng-controller="BlogController">
    <form ng-submit="create()">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input id="title" name="title" type="text" placeholder="Title"
                   class="form-control" ng-model="title" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input id="description" name="description" type="text" placeholder="Description"
                 class="form-control" ng-model="description" required>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Create Post</button>
        </div>
    </form>
</div>



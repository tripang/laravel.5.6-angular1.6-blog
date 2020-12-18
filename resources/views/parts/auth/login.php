<form ng-controller="UserController" ng-submit="login()">
    <div class="mb-3">
        <label for="username" class="form-label">Name</label>
        <input type="text" id="username" ng-model="username" required
             class="form-control" placeholder="Username">
    </div>

    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
        <input type="password" id="password" ng-model="password" required
               class="form-control" placeholder="Password">
    </div>

    <div class="mb-3">
          <button type="submit" class="btn btn-primary">Login</button>
    </div>
</form>

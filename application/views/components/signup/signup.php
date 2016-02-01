<div class="container" ng-controller="SignupCtrl">
    <div class="panel panel-default">
        <div class="panel-heading"><?= $title ?></div>
        <div class="panel-body">
            <div class="row">
                <form class="col-md-12" ng-submit="actions.create()">
                    <div class="row">

                        <div class="input-field col-md-12">
                          <input id="name" type="text" class="validate" ng-model="users.name">
                          <label for="name" data-error="wrong" data-success="">Name</label>
                        </div>

                        <div class="input-field col-md-12">
                          <input id="email" type="email" class="validate" ng-model="users.email">
                          <label for="email" data-error="" data-success="">Email</label>
                        </div>

                        <div class="input-field col-md-12">
                          <input id="password" type="password" class="validate" ng-model="users.password">
                          <label for="password" data-error="wrong" data-success="">Password</label>
                        </div>

                        <div class="input-field col-md-12">
                          <button type="submit" class="btn btn-default waves-effect waves-light">Sign me up</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

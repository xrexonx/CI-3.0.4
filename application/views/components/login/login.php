<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<div class="container" ng-controller="LoginCtrl">
    <div class="panel panel-default">
        <div class="panel-heading" ng-if="!message"><?= $title ?></div>
        <div class="panel-heading" ng-if="message">Invalid Email or Password</div>
        <div class="panel-body">
            <div class="row">
                <form class="col-md-12" ng-submit="actions.login()">
                    <div class="row">
                        <div class="input-field col-md-12">
                          <input id="email" type="email" class="validate" ng-model="users.email">
                          <label for="email" data-error="" data-success="">Email</label>
                        </div>

                        <div class="input-field col-md-12">
                          <input id="password" type="password" class="validate" ng-model="users.password">
                          <label for="password" data-error="" data-success="">Password</label>
                        </div>

                        <div class="input-field col-md-12">
                          <button type="submit" class="btn btn-default waves-effect waves-light">Login</button>
                          <a class="btn btn-default waves-effect waves-light" href="<?= base_url()?>welcome/signup">Create Account</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


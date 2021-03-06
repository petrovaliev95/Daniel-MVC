<!--Pulling Awesome Font -->
<div class="row">
    <?php if(isset($this->___data['error'])): ?>
        <div class="alert alert-dismissible alert-danger">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <h4>Error!</h4>
            <p><?= $this->___data['error']; ?></p>
        </div>
    <?php endif; ?>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/my-styles.css"/>
    <div class="login-container col-md-12">
        <div class="row">
            <div class="col-md-offset-4 col-md-4">
                <div class="form-login">
                    <h4>Register</h4>
                    <form action=" <?= $this->getBaseUrl() . 'users/register' ?> " method="post">
                        <input name="username" type="text" id="userName" class="form-control input-sm chat-input" placeholder="username"/>
                        </br>
                        <input name="password" type="password" id="userPassword" class="form-control input-sm chat-input"
                               placeholder="password"/>
                        </br>
                        <input name="confirmPassword" type="password" id="confirmPassword" class="form-control input-sm chat-input"
                               placeholder="confirm password"/>
                        <br/>
                        <div class="form-wrapper">
                            <span class="group-btn">
                                <button type="submit" name="submit" value="1" class="btn btn-primary btn-md">Login <i class="fa fa-sign-in"></i></button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
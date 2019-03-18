<?php

if(!defined('ADMIN_VIEW')){
    die('nie wejdziesz');
}

?>
<div class="container">
    
    <div class="row">
        <div class="col-sm-12 col-md-6 col-md-offset-3">
            
            <form class="form-horizontal" method="post" action="?loguj">
                <fieldset>

                <!-- Form Name -->
                <legend>Form Name</legend>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="email">Email</label>  
                  <div class="col-md-4">
                  <input id="email" name="email" type="text" placeholder="email" class="form-control input-md" required="">

                  </div>
                </div>

                <!-- Password input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="password">Password</label>
                  <div class="col-md-4">
                    <input id="password" name="password" type="password" placeholder="password" class="form-control input-md" required="">

                  </div>
                </div>

                <!-- Button -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for=""></label>
                  <div class="col-md-4">
                    <button id="" name="" class="btn btn-primary">Login</button>
                  </div>
                </div>

                </fieldset>
                </form>

            
        </div>
    </div>
    
</div>
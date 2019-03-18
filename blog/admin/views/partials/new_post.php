<?php

if(!defined('ADMIN_VIEW')){
    die('nie wejdziesz');
}
?>
<?php if($raport): ?>
    <div class="alert alert-success">
        Post został dodany
    </div>
<?php endif;?>

<form class="form-horizontal" method="post" action="<?php echo ADMIN_URL; ?>?view=new_post&action=add">
    <fieldset>

    <!-- Form Name -->
    <legend>Form Name</legend>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="title">Title</label>  
      <div class="col-md-4">
      <input id="title" name="title" type="text" placeholder="title" class="form-control input-md" required="">

      </div>
    </div>

    <!-- Textarea -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="intro">intro</label>
      <div class="col-md-4">                     
        <textarea class="form-control" id="intro" name="intro"></textarea>
      </div>
    </div>

    <!-- Textarea -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="content">content</label>
      <div class="col-md-4">                     
        <textarea class="form-control" id="content" name="content"></textarea>
      </div>
    </div>


    <!-- Button -->
    <div class="form-group">
      <label class="col-md-4 control-label" for=""></label>
      <div class="col-md-4">
        <button id="" name="" class="btn btn-primary">Dodaj</button>
      </div>
    </div>

    </fieldset>
</form>

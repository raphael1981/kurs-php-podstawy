<?php

if(!defined('ADMIN_VIEW')){
    die('nie wejdziesz');
}

?>
<div class="container">
    
    <div class="row">
        <div class="col-sm-12">
            <ul class="nav menu">
                <li>
                    <a href="<?php echo ADMIN_URL; ?>?view=new_post">
                        Dodaj post
                    </a>
                </li>
            </ul>
        </div>
    </div>
    
    <div class="row">
        <div class="col-sm-12 col-md-6 col-md-offset-3">
            
            <?php 
            
                if(isset($_GET['view'])){
                    
                    switch ($_GET['view']){
                        
                        case 'new_post':
                            
                            $raport = false;
                            
                            $cats = getCategories($dbh);
                            
                            if(isset($_GET['action']) && $_GET['action']=='add' && isset($_POST['title'])){
                                
                                addNewPost($dbh, $_POST, $_SESSION['auth']['id']);
                                header('Location: '.ADMIN_URL.'?view=new_post&action=added');
                                
                            }elseif(isset($_GET['action']) && $_GET['action']=='added'){
                                $raport = true;
                            }
                            
                            include __DIR__.'/partials/new_post.php';
                            
                            break;
                        
                        default:
                            
                            echo '404';
                            
                            break;
                        
                    }
                    
                    
                }
            
            ?>
            
        </div>
    </div>
    
</div>
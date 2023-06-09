<?php
if(!defined('SETUPINC')) die('Kwaheri!');
$info=($_POST && $errors)?Format::htmlchars($_POST):array('prefix'=>'aut_','dbhost'=>'localhost','lang_id'=>'en_US');
?>
<div id="main" class="step2">
    <h1><?php echo __('osTicket Basic Installation'); ?></h1>
        <p><?php echo __('Please fill out the information below to continue your osTicket installation. All fields are required.');?></p>
            <font class="error"><strong><?php echo $errors['err']; ?></strong></font>
            <form action="install.php" method="post" id="install">
                <input type="hidden" name="s" value="install">
                <h4 class="head system"><?php echo __('System Settings');?></h4>
                <span class="subhead"><?php echo __('The URL of your helpdesk, its name, and the default system email address');?></span>
                <div class="row">
                    <label><?php echo __('Helpdesk URL');?>:</label>
                    <span class="ltr"><strong><?php echo URL; ?></strong></span>
                </div>
                <div class="row">
                    <label for="helpdesk_name"><?php echo __('Helpdesk Name');?>:</label>
                    <span><input class="form-control" id="helpdesk_name" type="text" aria-label="Helpdesk Name" name="name" size="45" tabindex="1" value="<?php echo $info['name']; ?>"></span>
                    <a class="tip" href="#helpdesk_name"><i class="icon-question-sign help-tip"></i></a>
                    <font class="error"><?php echo $errors['name']; ?></font>
                </div>
                <div class="row">
                    <label><?php echo __('Default Email');?>:</label>
                    <span><input class="form-control" type="text" name="email" size="45" tabindex="2" value="<?php echo $info['email']; ?>">
                        <a class="tip" href="#system_email"><i class="icon-question-sign help-tip"></i></a></span>
                    <font class="error"><?php echo $errors['email']; ?></font>
                </div>
                <div class="row">
                    <label><?php echo __('Primary Language');?>:</label>
<?php $langs = Internationalization::availableLanguages(); ?>
                    <span><select class="form-control" name="lang_id">
<?php foreach($langs as $l) {
    $selected = ($info['lang_id'] == $l['code']) ? 'selected="selected"' : ''; ?>
                    <option value="<?php echo $l['code']; ?>" <?php echo $selected;
                        ?>><?php echo Internationalization::getLanguageDescription($l['code']); ?></option>
<?php } ?>
                        </select></span>
                <a class="tip" href="#default_lang"><i class="icon-question-sign help-tip"></i></a>
                <font class="error">&nbsp;<?php echo $errors['lang_id']; ?></font>
                </div>

                <h4 class="head admin"><?php echo __('Admin User');?></h4>
                <span class="subhead"><?php echo __('Your primary administrator account - you can add more users later.');?></span>
                <div class="row">
                    <label><?php echo __('First Name');?>:</label>
                    <span><input class="form-control" type="text" name="fname" size="45" tabindex="3" value="<?php echo $info['fname']; ?>">
                        <a class="tip" href="#first_name"><i class="icon-question-sign help-tip"></i></a></span>
                    <font class="error"><?php echo $errors['fname']; ?></font>
                </div>
                <div class="row">
                    <label><?php echo __('Last Name');?>:</label>
                    <span><input class="form-control" type="text" name="lname" size="45" tabindex="4" value="<?php echo $info['lname']; ?>">
                        <a class="tip" href="#last_name"><i class="icon-question-sign help-tip"></i></a></span>
                    <font class="error"><?php echo $errors['lname']; ?></font>
                </div>
                <div class="row">
                    <label><?php echo __('Email Address');?>:</label>
                    <span><input class="form-control" type="text" name="admin_email" size="45" tabindex="5" value="<?php echo $info['admin_email']; ?>">
                        <a class="tip" href="#email"><i class="icon-question-sign help-tip"></i></a></span>
                    <font class="error"><?php echo $errors['admin_email']; ?></font>
                </div>
                <div class="row">
                    <label><?php echo __('Username');?>:</label>
                    <span><input class="form-control" type="text" name="username" size="45" tabindex="6" value="<?php echo $info['username']; ?>" autocomplete="off">
                        <a class="tip" href="#username"><i class="icon-question-sign help-tip"></i></a></span>
                    <font class="error"><?php echo $errors['username']; ?></font>
                </div>
                <div class="row">
                    <label><?php echo __('Password');?>:</label>
                    <span><input class="form-control" type="password" name="passwd" size="45" tabindex="7" value="<?php echo $info['passwd']; ?>" autocomplete="off">
                        <a class="tip" href="#password"><i class="icon-question-sign help-tip"></i></a></span>
                    <font class="error"><?php echo $errors['passwd']; ?></font>
                </div>
                <div class="row">
                    <label><?php echo __('Retype Password');?>:</label>
                    <span><input class="form-control" type="password" name="passwd2" size="45" tabindex="8" value="<?php echo $info['passwd2']; ?>">
                        <a class="tip" href="#password2"><i class="icon-question-sign help-tip"></i></a></span>
                    <font class="error"><?php echo $errors['passwd2']; ?></font>
                </div>

                <h4 class="head database"><?php echo __('Database Settings');?></h4>
                <span class="subhead"><?php echo __('Database connection information');?> <font class="error"><?php echo $errors['db']; ?></font></span>
                <div class="row">
                    <label><?php echo __('MySQL Table Prefix');?>:</label>
                    <span><input class="form-control" type="text" name="prefix" size="45" tabindex="9" value="<?php echo $info['prefix']; ?>">
                        <a class="tip" href="#db_prefix"><i class="icon-question-sign help-tip"></i></a></span>
                    <font class="error"><?php echo $errors['prefix']; ?></font>
                </div>
                <div class="row">
                    <label><?php echo __('MySQL Hostname');?>:</label>
                    <span><input class="form-control" type="text" name="dbhost" size="45" tabindex="10" value="<?php echo $info['dbhost']; ?>">
                        <a class="tip" href="#db_host"><i class="icon-question-sign help-tip"></i></a></span>
                    <font class="error"><?php echo $errors['dbhost']; ?></font>
                </div>
                <div class="row">
                    <label><?php echo __('MySQL Database');?>:</label>
                    <span><input class="form-control" type="text" name="dbname" size="45" tabindex="11" value="<?php echo $info['dbname']; ?>">
                        <a class="tip" href="#db_schema"><i class="icon-question-sign help-tip"></i></a></span>
                    <font class="error"><?php echo $errors['dbname']; ?></font>
                </div>
                <div class="row">
                    <label><?php echo __('MySQL Username');?>:</label>
                    <span><input class="form-control" type="text" name="dbuser" size="45" tabindex="12" value="<?php echo $info['dbuser']; ?>">
                        <a class="tip" href="#db_user"><i class="icon-question-sign help-tip"></i></a></span>
                    <font class="error"><?php echo $errors['dbuser']; ?></font>
                </div>
                <div class="row">
                    <label><?php echo __('MySQL Password');?>:</label>
                    <span><input class="form-control" type="password" name="dbpass" size="45" tabindex="13" value="<?php echo $info['dbpass']; ?>">
                        <a class="tip" href="#db_password"><i class="icon-question-sign help-tip"></i></a></span>
                    <font class="error"><?php echo $errors['dbpass']; ?></font>
                </div>
                <br>
                <div id="bar">
                    <input class="btn btn-primary" type="submit" value="<?php echo __('Install Now');?>" tabindex="14">
                </div>

                <input type="hidden" name="timezone" id="timezone"/>
            </form>
    </div>
    <div>
        <p><strong><?php echo __('Need Help?');?></strong> <?php echo __('We provide <u>professional installation services</u> and commercial support.');?> <a target="_blank" href="https://osticket.com/support"><?php echo __('Learn More!');?></a></p>
    </div>
    <div id="overlay"></div>
    <div id="loading">
        <h4><?php echo __('Doing stuff!');?></h4>
        <?php echo __('Please wait... while we install your new support ticket system!');?>
    </div>

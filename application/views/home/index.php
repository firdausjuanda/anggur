<?php if(!$this_user):?>
<a href="<?= base_url('login/'); ?>">Please Login</a>
<?php else: ?>
<a href="<?= base_url('profile'); ?>"><?= $this_user['user_username']; ?></a>
<a href="<?= base_url('login/logout/'); ?>">Logout</a>
<?php endif; ?>
<?php foreach($job_data as $a):?>
    <p><?= $a['job_title'];?></p>
    <?php foreach($img_job as $b):?>
        <?php if($b['img_job_id'] == $a['job_id']): ?>
            <img width="100px" src="<?= base_url('assets/img/logo/').$b['img_filename'] ;?>" alt="Photo">
        <?php else: ?>
        <?php endif; ?>
    <?php endforeach; ?>
    <p><?= date_format(date_create($a['job_date_created']),'j F Y');?></p>
<?php endforeach;?>
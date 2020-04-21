<?php $this->load->view('admin/layout/header'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>
<main class="vh-100 pt-3">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-11 card m-2 shadow">
                <div class="m-2">
					<h1><?php echo lang('index_heading');?></h1>
					<p><?php echo lang('index_subheading');?></p>

					<div id="infoMessage"><?php echo $message;?></div>
                </div>
                <div class="row">
					<div class="col-12">
						<div class="table-responsive">
							<table class="streaming-table table" id="user_tab">
								<thead>
									<tr>
										<th><?php echo lang('index_fname_th');?></th>
										<th><?php echo lang('index_lname_th');?></th>
										<th><?php echo lang('index_email_th');?></th>
										<th><?php echo lang('index_groups_th');?></th>
										<th><?php echo lang('index_status_th');?></th>
										<th><?php echo lang('index_action_th');?></th>
									</tr>
								</thead>
								<tbody>
								<?php foreach ($users as $user):?>
									<tr>
							            <td><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></td>
							            <td><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
							            <td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
										<td>
											<?php foreach ($user->groups as $group):?>
												<?php echo anchor("auth/edit_group/".$group->id, htmlspecialchars($group->name,ENT_QUOTES,'UTF-8')) ;?><br />
							                <?php endforeach?>
										</td>
										<td><?php echo ($user->active) ? anchor("auth/deactivate/".$user->id, lang('index_active_link')) : anchor("auth/activate/". $user->id, lang('index_inactive_link'));?></td>
										<td><?php echo anchor("auth/edit_user/".$user->id, 'Edit') ;?></td>
									</tr>
								<?php endforeach;?>
								</tbody>
							</table>
						</div>
					</div>
					<div class="col-2 p-3">
						<a class="btn btn-sm btn-primary" href="<?php echo base_url();?>index.php/auth/create_user">Create New User</a>
					</div>
					<div class="col-2 p-3">
						<a class="btn btn-sm btn-primary" href="<?php echo base_url();?>index.php/auth/create_group">Create New Group</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
<?php $this->load->view('admin/layout/footer'); ?>

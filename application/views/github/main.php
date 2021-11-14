<?php $this->load->view('common/header'); ?>
<?php $this->load->view('common/nav'); ?>

<link rel="stylesheet" href="<?php echo base_url('assets/css/github.css'); ?>">

	

<div class="container-liquid">
	<div class="divTopic">
		<p><b>Initialize, Status, Add, Delete, Commit</b></p>
	</div>

	<div class="divTitle">
		<p><b>- Initialization</b></p>
		<p>$ touch (Create file)</p>
		<p>$ git init (Initialized the git. This will create .git folder)</p>
		<p>$ config --global user.name "Jayson" (create username)</p>
		<p>$ config --global user.email "Jayson@gmail.com" (create username)</p>
		<p>$ git init (create email)</p>

		<p class="mt-3"><b>- Show Status</b></p>
		<p>$ git status</p>

		<p class="mt-3"><b>- Add the file to git repository</b></p>
		<p>$ git add &lt;filename&gt; (Add specific file)</p>
		<p class="mb-1 ml-4">example: $ git add index.html</p>
		<p>$ git add . (Add everything)</p>

		<p class="mt-3"><b>- Remove the file</b></p>
		<p>$ git rm --cached &lt;filename&gt;</p>
		<p class="mb-1 ml-4">example: $ git rm --cached index.html</p>

		<p class="mt-3"><b>- Commit with the editing stage</b></p>
		<p>Press i then uncomment the initial commit</p>
		<p>type :wg to exit the editing stage</p>
		
		<p class="mt-3"><b>- Commit without the editing stage</b></p>
		<p>$ git commit -m "message"</p>

		<p class="mt-3"><b>- Excluding files to commit</b></p>
		<p>create .gitignore file in the main folder. Add the name of the file/folder to be excluded</p>
		<div class="row">
			<div class="col-md-3">
				<img src="<?php echo base_url('assets/img/git/ss/gitignore.png'); ?>" style="width: 250px;">
			</div>
			<div class="col-md-3">
				<img src="<?php echo base_url('assets/img/git/ss/gitignore_filenames.png'); ?>" style="width: 250px; height: 350px">
			</div>
		</div>

		<p class="mt-3"><b>- Show Origin</b></p>
		<p>$ git remote show origin</p>

		<p class="mt-3"><b>- Create branch</b></p>
		<p class="pb-5">$ git remote show origin</p>
	</div>

	<div class="divTopic">
		<p><b>Branch</b></p>
	</div>

	<div class="container-liquid divTitle">
		<p><b>- Create branch</b></p>
		<p>$ git branch &lt;branch_name&gt;</p>
		<p class="mb-1 ml-4">example: $ git branch jayson</p>

		<p class="mt-3"><b>- To switch branch</b></p>
		<p>$ git checkout &lt;branch_name&gt;</p>
		<p class="mb-1 ml-4">example: $ git checkout jayson</p>

		<p class="mt-3"><b>- Merge to the branches (Master account)</b></p>
		<p>$ git merge &lt;branch_name&gt;</p>
		<p class="mb-1 ml-4 pb-5">example: $ git merge jayson</p>
	</div>


	<div class="divTopic">
		<p><b>Remote</b></p>
	</div>

	<div class="container-liquid divTitle">

		<p><b>- Get remote url</b></p>
		<p>$ git config --get remote.origin.url</p>

		<p class="mt-3"><b>- Change Git Remote URL</b></p>
		<p>$ git remote set-url &lt;remote_name&gt; &lt;remote_url&gt;</p>
		<p>$ git remote set-url origin https://git-repo/new-repository.git</p>
	
		<p class="mt-3"><b>- In order to verify that the changes were made, you can use the “git remote” command with the “-v” option (for verbose)</b></p>
		<p>$ git remote -v</p>

		<p class="mt-3"><b>- Adding remote repositories</b></p>
		<p>$ git remote</p>
		<p>$ git remote add &lt;remote_name&gt; &lt;remote_url&gt;</p>
		<p>$ git remote add jay http://github.com/jayson517/mycodes.git</p>

		<p class="mt-3"><b>- In order to verify that the changes were made, you can use the “git remote” command with the “-v” option (for verbose)</b></p>
		<p>$ git remote -v</p>

		<p class="mt-3"><b>- Uploading the file to the github repository</b></p>
		<p>$ git push</p>
		<p>or</p>
		<p>$ git push &lt;remote&gt; &lt;branch&gt;</p>
		<p class="mb-1 ml-4">example: $ git push origin master</p>

		<p class="mt-3"><b>- Fetching and Pulling from Your Remotes</b></p>
		<p>$ git fetch &lt;remote&gt;</p>
		<p class="mb-1 ml-4">example: $ git fetch jay (jay is the remote name)</p>

		<p class="mt-3"><b>- Clone from github repository</b></p>
		<p>$ git clone &lt;http_link_from_github&gt;</p>
		<p class="mb-1 ml-4">example: $ git clone http://github.com/jayson517/mycodes.git</p>
		
		<p class="mt-3"><b>- Removing remote</b></p>
		<p>$ git remote remove &lt;remote_name&gt;</p>
		<p class="mb-1 ml-4">example: $ git remote remove jay</p>

		<p class="mt-3"><b>- Renaming remote</b></p>
		<p>$ git remote rename &lt;old_remote_name&gt; &lt;new_remote_name&gt;</p>
		<p class="mb-1 ml-4 pb-5">example: $ git remote rename jay jayson</p>
	</div>

	<div class="divTopic">
		<p><b>Restore deleted file from the local repository</b></p>
	</div>

	<div class="container-liquid divTitle">
		<p><b>- To restore deleted file from the local repository</b></p>
		<p>$ git checkout &lt;branch_head&gt; &lt;file_name&gt;</p>
		<p class="mb-1 ml-4">example: $ git checkout master index.html</p>
		<p class="mb-1 ml-4 pb-5">example: $ git checkout master . (Or simply use the dot . to restore all)</p>
	</div>



</div>

<?php $this->load->view('common/footer'); ?>

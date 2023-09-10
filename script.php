<?php

//echo shell_exec("git config --global user.name 'Bhavesh Shahdadpuri'");

//echo shell_exec("git remote add origin https://github.com/avi-git-hub/INDIAISTORE.git");

//echo shell_exec("git remote add origin https://github.com/avi-git-hub/INDIAISTORE.git");

//echo shell_exec("git push origin master -force");

//print_r(shell_exec("git log"));

//$repositoryPath = '/path/to/your/local/repository';
/*$githubUsername = 'bhavesh-shahdadpuri';
$githubPassword = '';
$remoteRepositoryUrl = 'https://github.com/avi-git-hub/INDIAISTORE.git';

 

// Change directory to your local repository
//chdir($repositoryPath);

 

// Set Git configuration (username and email)
shell_exec('git config user.name "' . $githubUsername . '"');
shell_exec('git config user.email "shahdadpuribhavesh@gmail.com"');

 

// Add and commit your changes
shell_exec('git add .');
shell_exec('git commit -m "Commit message"');

 

// Push to the GitHub repository
echo shell_exec('git push ' . $remoteRepositoryUrl);*/

//print_r(shell_exec("git config --list"));
//$your_command = "git config user.name";
//exec($your_command.' 2>&1', $output, $return_var);var_dump($output);

echo shell_exec("git config --list && git status 2>&1");
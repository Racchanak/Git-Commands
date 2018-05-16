<?php 
/****
 *  CONFIG
 *  Configuring user information used across all local repositories
 ***@  git config --global user.name “[firstname lastname]”
 **** git config --global user.name racchanak
 *  set a name that is identifiable for credit when review version history
 ***@  git config --global user.email “[valid-email]”
 **** git config --global user.email racchana.professional@gmail.com
 *  set an email address that will be associated with each history marker
 ***@  git config --global color.ui auto
 *  set automatic command line coloring for Git for easy reviewing
****/

/****
 *  SETUP
 *  initialize the git into the fiolder to get teh remote repository into the local system
 ****@  git init
 *  get the status of the code in that particular branch which is modified added and deleted files
 ****@  git status
 *  add the new files to add to the commiting list
 ****@  git add .       // add all the added and deleted files
 ****@  git add ["filename"]    // add oly the given files
 *  to write the message for adding and commiting the files
 ****@  git commit -a       // write the message for the changes made 
 *  to upload the files to remote repository
 ****@  git push
 ****/
?>
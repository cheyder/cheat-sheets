# GitHub

## Commands Local

    $ git --version

    $ git config --global user.name "Your Name" set your name 

    $ git config --global youremail@example.com
set your Github account (case sensitive)

    $ git config --global user.username uSeRnAmE 

turn Git on for a folder 

    $ git init 

to tell git to ignore files in the gitfolder, add the file names to `.gitignore`, for example:

    $ echo ".DS_Store" >> .gitignore

(as long as a file haven't been committed once)

view changes to files

    $ git diff

view changes to staged files

    $ git diff --staged

stage a file

    $ git add <FILENAME> 

stage all files

    $ git add . 


    $ git status

to commit followed by prompt to enter commit message, exit with `ESC : w q ENTER`

    $ git commit


commit all staged files with a commit message

    $ git commit -m "your commit message"
commit messages: always starting with capitals, written in present tense

start a new local repository by cloning an existing remote repsitory
    $ git clone <URL> 

    $ git log

## Commands Remote

```zsh
$ ssh-keygen -t rsa -b 4096 -C 
$ "your_email@example.com"
$ cd
$ cd .ssh
$ pbcopy < id_rsa.pub
``` 

paste key on [github](https://github.com/settings/keys)

create new repository on [github](https://github.com/)

to add a remote to your repository, the primary remote is typically named `origin`

    $ git remote add <REMOTENAME> <URLFROMGITHUB>
 

To push a local repository for first time and remember REMOTENAME and BRANCHNAME (option -u)

    $ git push -u <REMOTENAME> <BRANCHNAME>

    $ git pull <REMOTENAME> <BRANCHNAME>
    
    $ git clone <REPOSITORY/GITURL>


## Resources

[Pro Git Book](https://git-scm.com/book/en/v2)



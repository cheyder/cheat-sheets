# GitHub

## Git setup

    $ git --version

    $ git config --global user.name "Your Name" set your name 

    $ git config --global youremail@example.com
set your Github account (case sensitive)

    $ git config --global user.username uSeRnAmE 

turn Git on for a folder 

    $ git init 

to tell git to ignore files in the gitfolder, add the file names to `.gitignore`, for example:

    $ echo ".DS_Store" >> .gitignore

(possible as long as a file haven't been committed once)

---

## Git Workflow Committing

stage a file

    $ git add <FILENAME> 

stage all files

    $ git add . 

check staged files

    $ git status
    $ gst (Kurzform)

commit followed by vim prompt for entering commit message

    $ git commit

commit all staged files with a commit message

    $ git commit -m "your commit message"

commit messages: always starting with capitals, written in present tense

    $ git commit --amend

etwas gestagetes zum letzten commit hinzufügen oder einfach nur die commit-message ändern

start a new local repository by cloning an existing remote repsitory

    $ git clone <URL> 

    $ git log

    $ git glo (Kurzform Log)

git diff

    view changes to last commit

    $ git diff

view changes to staged files

    $ git diff --staged

view changes to another branch 

    $ git diff master

view changes to one commit befor HEAD

    $ git diff HEAD~1

view changes to a special commit

    $ git diff 5badf57

bereits gemachte commits rückgängig machen

    $ git revert <charnumber>

inhalt eines commits anzeigen

    $ git checkout <charnumber>

nur einzelne Dateien eines commits auschecken

    $ git checkout <charnumber> -- <DateiPfadName>

branch auschecken und gleichzeitig erstellen

    $ git checkout -b <branchname>
    $ git branch -d <branchname> (Branch löschen)

Änderungen in Git verwerfen und zum letzten commit zurückkehren 

    $ git reset --hard HEAD

Wenn ich etwas aus eine Historie löschen will, dann nur, wenn ich sie noch nicht geteilt habe. Z. B. wenn Commits die noch nicht gepusht, oder noch nicht gepullt entfernt werden solle. Im schlimmsten Fall könen auch harte-resets noch in `git reflog`, char finden, `git checkout <charnumber>`, Anweisungen folgen, neuer Branch, mergen.

    $ git reset --soft <charnumber/HEAD~1>

Ändert die Historie bis zum angegebenen Commit zurück, Änderungen bleiben durch `--soft` noch auf der Stage. 



Einen Branch in den Master mergen.

    $ git merge <branchname>

Wenn der merge erfolgreich war und der branch nicht mehr gebraucht wird, kann er gelöscht werden, da der branch sonst einfach weiterexistiert.

Immer so nah wie möglich am master-branch bleiben, mehrmals täglich den neuen Stand ziehen.

    $ git checkout master
    $ git pull
    $ git checkout <branch>
    $ git merge master






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

## Workflow
für jedes Feature einen „Featurebranch“

    $ git branch
    $ git branch header
    $ git checkout header
    $ git checkout -
    $ git checkout 5badf57


    $ git branch -r
    $ git fetch


## Resources

[Pro Git Book](https://git-scm.com/book/en/v2)



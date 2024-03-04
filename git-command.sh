git init
git status
git branch
git add .
git commit -m "commit comment"
git remote add origin "https://github.com/APS-Innovations-Pvt-Ltd/robomart_v3.git"
git push origin branch_name
git pull origin branch_name

########################################################################################################################################################################################################

git filter-branch --index-filter 'git rm -r --cached --ignore-unmatch <file/dir>' HEAD
git filter-branch: This Git command is used for rewriting branches.
--index-filter: This option specifies the filter that will be applied to the index (staging area) of each commit.
'git rm -r --cached --ignore-unmatch <file/dir>': This is the filter command itself. It removes the specified file or directory (<file/dir>) from the index of each commit.
git rm: This is the Git command to remove files from the index.
-r: This option allows removing directories recursively.
--cached: This option removes the file from the index (staging area) without deleting it from the working directory.
--ignore-unmatch: This option prevents Git from failing if the file or directory is not found.
HEAD: This specifies the branch or commit range to rewrite. In this case, it represents rewriting the current branch's history.
So, when you run this command, Git will go through each commit in the history of the branch specified by HEAD, remove the specified file or directory from the index (staging area) of each commit, and rewrite the branch's history accordingly.


########################################################################################################################################################################################################

git push origin --delete branch_name

git pull origin --rebase 

git pull --no-ff


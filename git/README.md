# Git Standards and Best Practices

Standards, suggestions and best practices for working with git.

## Standards

- Markdown files must always end with lowercase `.md`.
- Readme markdown files must always be named `README.md` (case sensitive)

## Useful commands

- `git config core.ignorecase false` - When renaming files in git to a different "case", by default git will not track the changes. This will force git to track those changes.

- `git branch | grep -v "master" | xargs git branch -D` - Deletes all but Master branch

- `git config --global alias.conflicts "diff --name-only --diff-filter=U"`, then run `git conflicts` -  Create a Git alias to list all merge conflicts.

- `alias pear='cmd "/c /xampp/php/pear.bat"'` - On Windows the `pear` command doesn't work with git bash. Add this to .bashrc or .bash_profile to get `pear` command to work.

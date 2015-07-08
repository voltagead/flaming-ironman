## Coding Style Guides

* [CSS](coding-standards/css)
* [JavaScript](coding-standards/js)
* [PHP](coding-standards/php)
* [WordPress](frameworks/wordpress)
* [Laravel](frameworks/laravel)
* QA


## General Workflow

We want the feature branches to be relatively smaller in size, so they are easier for others to review quickly. If several different, large changes need to be made, considering making a separate branch/pull request for each change.

1. Using the * [GitHub Flow](https://guides.github.com/introduction/flow/) workflow, every new feature/fix to a site will be done locally in a branch off of master
2. Commits of related changes should made incrementally. Ex: Formatting should be a separate commit from functionality changes
3. When the new/updated features are completed and have been tested locally, a pull request (PR) should be made to merge the branch into master
	- Be sure that the latest changes on the master branch have been pulled down and your feature branch has been rebased
4. Submit the PR to the development team by pasting a link in the `#pull-requests` Slack channel.
	- All developers should be monitoring the channel and should offer to review the PR as their availability permits
5. Discussion on the changes contained in the PR should be done in GitHub/BitBucket (wherever the PR is), so that there is documentation of said discussion
6. Developers reviewing the PR should look for:
	- Code adhering to company development standards
	- Opportunities for code improvement (optimizations, alternative approaches, etc.)
7. When discussion concludes (if applicable) and the code is ready to be merged into master, the reviewer should indicate their approval in the PR and the person who created the PR should merge in the files and close it.


## Documentation

Project-specific documentation (how to compile Sass, how to install the dependencies, etc.) should be documented in the private project's Wiki

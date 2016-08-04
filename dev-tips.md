# 7/20/2016

<img src="http://voltagead.com/wp-content/themes/voltage4/img/voltage-dev-tips.png">

Hi Voltage Developers! Now that we are all masters of Sublime Text, how about we start getting some tips on all things dev. Today, I want to share a must have tip on Chrome's Developer Tools. If you are using Chrome's DevTools to debug Javascript or test new CSS styles on a web page while editing files (in Sublime no doubt), it's important not to let the browser cache throw you off between page refreshes. Luckily, there is a setting that can disable the browser cache while DevTools is open!

To turn on this setting:
1. Open DevTools
2. Press F1 to open Preferences options.
3. Check "Disable cache (while DevTools is open) which is located under the Network section on the top right.
4. Close the Preferences options.

Of course you can always use a Chrome extension to clear your cache with a single click as well like you can find here: https://goo.gl/CTxUxP

---

# 7/22/2016

<img src="http://voltagead.com/wp-content/themes/voltage4/img/voltage-dev-tips.png">

Happy Voltage Friday everyone! To compliment the last tip on clearing your cache when Chrome DevTools is open, I wanted to highlight this Clear Cache plugin. It's the easiest clear cache and refresh button around for when DevTools is closed.

Download the pluggin here:
https://chrome.google.com/webstore/detail/clear-cache/cppjkneekbjaeellbfkmgnhonkkjfpdn?hl=en

After you install the plugin, checkout the options by right clicking on the icon. Make sure that "Automatically reload active tab after clearing data" is checked and the Time Period is set to "Everything".

Last, set a keyboard shortcut for fast access! Shortcuts can be configured at the >bottom< of the Chrome Extensions page by selecting Keyboard shortcuts here chrome://extensions/.

---

# 7/25/2016

<img src="http://voltagead.com/wp-content/themes/voltage4/img/voltage-dev-tips.png">

Welcome back to a great new week Voltage! So have you ever been trying to debug some Javascript that shows up just before the page is unloaded? Well, just hit the refresh key a bunch and try to read the text flash from the console error. Just kidding! There is actually a much simpler way. Chrome DevTools has a setting in plain view called "Preserve Log" which will make the console log persist instead of clearing on every page load.

<img src="http://cdn.tutorialzine.com/wp-content/uploads/2015/03/6.PreserveLog.gif">

---

# 7/27/2016

<img src="http://voltagead.com/wp-content/themes/voltage4/img/voltage-dev-tips.png">

Hola Voltaje Desarrolladores! You know that old saying "a screenshot speaks a thousand lines of code" or something like that? Well luckily Chrome has a really useful plugin to screen capture all or part of any web page. The plugin is called "Awesome Screenshot" and can be installed from here: https://goo.gl/9EdO5h

There are a couple of great features this plugin offers beyond just capturing a page. It also lets you add annotations, comments, *blur sensitive info*, and share with one-click uploads!

---

# 7/28/2016

<img src="http://voltagead.com/wp-content/themes/voltage4/img/voltage-dev-tips.png">

Good day Voltage! Today I want to share a nifty tip on Chrome DevTools console commands. We all know about console.log, but did you know there is a console.table function that can output a tabular layout for arrays or objects? Let's imagine we have a list of programming languages and their file extensions:

```
var languages = [
	{ name: 'SASS', fileExtension: '.scss' },
	{ name: 'Javascript', fileExtension: '.js' },
	{ name: 'Hypertext Preprocessor', fileExtension: '.php' }
];
```

The console.log() function will return the following representation of the data:<br>
<img src="http://preview.voltagead.com/voltage/adam/tip-images/console.log.output.png"><br>

The tree view is helpful, but having to open or collapse every object manually is cumbersome. Now lets see that output using console.table.
<img src="http://preview.voltagead.com/voltage/adam/tip-images/console.table.output.png">

Pretty awesome! And on top of that, the columns are sortable!

---

# 7/29/2016

<img src="http://voltagead.com/wp-content/themes/voltage4/img/voltage-dev-tips.png">

Happy Voltage Friday everyone. So today, I want to present this awesome Chrome Plugin I just found that makes it super easy to bring up saved sessions of Chrome tabs. Say for instance, when you come in the morning and open Harvest, Forecast, Trello, Basecamp, Gmail, Google Calendars, etc you can save a session of those tabs to bring them all up with one click. Or maybe you are working on Mark N' Gear and need to bring up a tab of the home page, cart page, pdp page, Basecamp, Bitbucket. Well you can do all of that with this Chrome Plugin called Session Manager.

You can install Session Manager for Chrome by going here: https://goo.gl/f6tt86

---

# 8/1/2016

<img src="http://voltagead.com/wp-content/themes/voltage4/img/voltage-dev-tips.png">

Welcome back to the start of a great week! Today I want to share a tip on a less used, but super simple part of Chrome DevTools called "Audits". We all know a fast site is part of a successful site. Our jobs as developers is not done until we have optimized both the real and perceived performance of a web page. Web speed is so important, Google has an entire effort devoted to making the web faster called PageSpeed and some claim it's so important it effects search engine rankings. Luckily Chrome DevTools provides an excellent tool which inspects the web page and offers recommendations to optimize network utilization and web page performance. The Audits panel is located in the main tools button panel and is super simple to run like so:

<img src="http://www.html5rocks.com/static/images/screenshots/auditpanel/index.002.png">

Once you run the Audit, notice that it classifies the suggestions by severity, with the most severe marked with a red dot and medium severity by an orange dot. This color coding will help you prioritize the recommendations so you can focus on the most import and biggest gain items first.

---

# 8/3/2016

<img src="http://voltagead.com/wp-content/themes/voltage4/img/voltage-dev-tips.png">

Good Day Voltage! Today I want to share a few quick tips on Chrome DevTools. I literally have DevTools open 99% of the time I am working on a web page, so why not learn all the little things it has to offer.

1. Did you know it's possible to re-order the DOM layout using drag and drop on selected elements? I didn't! There is no need to edit html, cut, edit html somewhere else, paste. Just select a DOM element with your mouse and drag it around the code and drop it where you want it to show.

2. Do you ever copy CSS from DevTools and paste it in Sublime then have to change the spacing indentation to tabs to adhere with our standards? Well you won't have to change the indentation from spaces to tabs after pasting anymore with this tip. Go to your DevTools settings (F1 key), Then look for "Default Indentation" near the bottom left of the Preferences and you will see where you can change the option to "Tab Character".

3. Did you know DevTools has an official Dark Theme? Go to Setting (F1 Key), then look for "Theme" near the top left of the preferences under Appearance and you will see there are two theme choices "Default" and "Dark".

---

# 8/4/2016

<img src="http://voltagead.com/wp-content/themes/voltage4/img/voltage-dev-tips.png">

Yesterday, I shared a few tips on Chrome's DevTools. Today, I want continue with a few more!

1. You can hold (alt or option key) then click in the elements panel to expand all the child nodes.
https://umaar.com/assets/images/dev-tips/alt-click-expand-node.gif

2. Just like Sublime, DevTools has a command menu to access almost everything in a few keystrokes. Access it the same way you do in Sublime with (PC ctrl+shift+p) or (Mac cmd+shift+p).

<img src="https://umaar.com/assets/images/dev-tips/command-menu.gif">

Here's an example of some available commands:
* DevTools: Dock to right
* DevTools: Restore last dock position
* DevTools: Search all files
* Elements: Disable DOM word wrap
* Elements: Set color format to HEX
* Elements: Set color format to HSL
* Elements: Set color format to RGB
* Mobile: Inspect devices…
* Mobile: Toggle device toolbar
* Navigation: Clear cache & hard reload page
* Navigation: Hard reload page
* Navigation: Reload page
* Network: Color code by resource type
* Network: Disable cache (while DevTools is open)
* Settings: Help
* Settings: Settings
* Settings: Shortcuts
* Sources: Do not show whitespace characters
* Sources: Set indentation to 2 spaces
* Sources: Set indentation to 8 spaces
* Sources: Set indentation to tab character
* Sources: Show all whitespace characters
* Sources: Show trailing whitespace characters

3. You can rearrange the DevTools panels to your preferred order. Drag and drop the panel heading as you see fit.
<img src="https://umaar.com/assets/images/dev-tips/drag-drop-panels.gif">

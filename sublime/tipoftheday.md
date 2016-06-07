# 5/5/2016

<img src="http://voltagead.com/wp-content/themes/voltage4/img/voltage-sublime.png">

Hello Voltage Force! I am going to try to post here each work day on #Development; along with a copy in Flaming-Ironman / Sublime section, on different tips, tricks, features, and helpful packages to help us become expert Sublime coders.

Today I wanted to talk about how to sort CSS. Most of the time we don't care how CSS properties are sorted, but putting them in a particular order will make your code more organized. I usually try to organize my property order by groups like font related, size/padding/margin related, etc but sorting them alphabetically can really do wonders when glancing at the code. It should even help to prevent duplicate properties getting added.

In SublimeText, you can select CSS properties and then hit ( F5 on Mac ) || ( F9 on PC ) to sort the properties alphabetical.
<img src="http://media02.hongkiat.com/sublime-text-tips/sorting-css.gif">

---

#5/6/2016

<img src="http://voltagead.com/wp-content/themes/voltage4/img/voltage-sublime.png">

Happy Voltage Friday everyone! Today, I would like to talk about a simple setting for turning on the spell checker in SublimeText. Why the spell checker is not enabled by default kinda baffles me. Do they think coders are going to be like "You don't tell me what to do SublimeText!". Before I enabled this on my setup, I would usually Google a word if it looked like the spelling was wrong, but who knows how many I didn't notice.

To enable the spell checker in SublimeText go to "Preferences" -> "Settings" -> "User" and add the following lines:

"spell_check": true,
"dictionary": "Packages/Language - English/en_US.dic"

Then you can use F6 to enable/disable as needed.

---

#5/9/2016

<img src="http://voltagead.com/wp-content/themes/voltage4/img/voltage-sublime.png">

Hello Voltage Force, I hope you're all having a great Monday! Today I would like to introduce a helper package for SublimeText called Hayaku. This plugin will help you write CSS faster and has many built in and customizable helpers. Because Hayaku has too many features to talk about in this Tip of the Day, I recommend checking out all it has to utilize on their read me section: https://github.com/hayaku/hayaku/#readme

Here are some examples of property/value abbreviations using Hayaku which use the TAB key to execute:

por + tab = position: relative;
m10 + tab = margin: 10px;
w10 + tab = width: 10px;
cF + tab = color: #FFF;
tdn + tab = text-decoration: none;

Hayaku also lets you increment & decrement values with the keyboard. Put your cursor on the number and use the following shortcuts:

Increment or decrement numeric value by 0.1: ALT-CTRL-↑ or ALT-CTRL-↓
Increment or decrement numeric value by 1: ALT-↑ or ALT-↓ 
Increment or decrement numeric values by 10: ALT-SHIFT-↑ or ALT-SHIFT-↓

---

#5/11/2016

<img src="http://voltagead.com/wp-content/themes/voltage4/img/voltage-sublime.png">

Good Day Voltage team. Today I wanted to share a super helpful tip from Dave (Thank You!). As you probably know already, SublimeText lets you do file search operations with either (PC: ctrl+shift+f) or (Mac: cmd+shift+f) or through the quick navigate dialog using (PC: ctrl+p) or (Mac: cmd+p). What can be annoying however is when it searches through files related to source control, minified files, node module files, etc. Here is how you can setup folders to ignore from the search operations. I guarantee you will love using the search much more after you exclude un-needed folders.

1. Go to Preferences -> Settings - User
2. Add this code and customize as needed:

"folder_exclude_patterns":
	[
		"node_modules",
		"plugins/cmb2",
		"assets/build",
		"assets/dist",
		"assets/vendor",
		"script/vendor",
		"assets/vender",
		"gulp/vendor",
		"*-old"
	]

---

#5/12/2016

<img src="http://voltagead.com/wp-content/themes/voltage4/img/voltage-sublime.png">

Hi Everyone! Today I have an awesome little trick to share. So you know how you can't double click on a variable name that contains dash-es in them? Well here is how to remedy that.

In SublimeText go to "Preferences" -> "Settings" -> "User" and add the following line:
```
“word_separators”: “./\()"’:,.;<>~!@#$%^&*|+=[]{}`~?”,
```
By default it has a - in those separators. By removing the - dash it lets you double click on code to select the whole thing!

---

#5/16/2016

<img src="http://voltagead.com/wp-content/themes/voltage4/img/voltage-sublime.png">

Good Day Voltage! Today I have a small little moderately unknown 'Paste and Indent' feature in SublimeText. When you paste code it seems like Sublime does it's best to mess up your carefully formatted code, especially if you're embedding it into an existing block of code. Typically if you just run the paste command, the leading whitespace is copied from the clipboard as well. 'Paste and Indent' handles this by correctly calculating the appropriate amount of indentation from the first line of the pasted code.

To perform a 'Paste and Indent' position your cursor at the correct indentation level then press (PC 'Ctrl + Shift + V') or (Mac 'Shift + Command + V').

Alternatively you can remap the default Paste shortcut by going to Preferences -> Key Bindings - User and add this code:

{ "keys": ["super+v"], "command": "paste_and_indent" },
{ "keys": ["super+shift+v"], "command": "paste" }

That makes the paste and indent the default when just pasting using the normal keyboard shortcuts, but you can still paste normally if needed using the keyboard commands above on (PC 'Ctrl + Shift + V') or (Mac 'Shift + Command + V').

---
 
#5/17/2016
 
<img src="http://voltagead.com/wp-content/themes/voltage4/img/voltage-sublime.png">

Hello Voltage Pro's. Today I want to talk about Soft Undo / Soft Redo. They work by following all actions including cursor movements, text selections, text editing, etc. They are a rewind and fast forward for your editing session.

##### To perform a Soft Undo:
• Click the undo menu item under Edit | Undo Selection. (The text of the menu item changes
to indicate what will happen when the action is invoked.) Or press Command+U on Mac OS
X or Ctrl+U on Windows and Linux.

##### To perform a Soft Redo:
• Click the redo menu item under Edit | Undo Selection. (The text of the menu item changes to
indicate what will happen when the action is invoked.) Or press Shift+Command+U on Mac
OS X or Ctrl+Shift+U on Windows and Linux.

---

#5/20/2016

<img src="http://voltagead.com/wp-content/themes/voltage4/img/voltage-sublime.png">

Voltage Devs! So you know how in SublimeText when you select a double quote and hit the single quote on the keyboard it just surrounds the double quotes with single quotes to something like '"'... Well that is part of a setting called auto_match_enabled.

In Preferences -> Settings - User add the following to disable auto pairing of quotes, brackets, etc:
```
"auto_match_enabled": false
```

---

#5/25/2016

<img src="http://voltagead.com/wp-content/themes/voltage4/img/voltage-sublime.png">

Here is a setting that removes whitespace at the end of every line, keeping your code nice and clean. In SublimeText go to "Preferences" -> "Settings" -> "User" and add the following line:

```
"trim_trailing_white_space_on_save": true
```

---

#5/26/2016

<img src="http://voltagead.com/wp-content/themes/voltage4/img/voltage-sublime.png">

Good day Voltage Force. Today I would like to share a tip on a lesser known keyboard command built in to Sublime for converting text case to UPPER and lowercase and how to extend it even further to convert to Title Case. I find this tip is important to share because when we get content from a client and they include some of their text IN ALL UPPERCASES, we cannot simply copy and paste it in the HTML in all uppercase because it makes screen readers read each letter instead of the actual word and is bad for accessibility.

First, select the text you want to change.

Then to convert TO UPPERCASE press:
( Mac ) cmd + ku
( PC )  ctrl + ku

To convert to lower case press:
( Mac ) cmd + kl
( PC )  ctrl + kl

_You don't need to press ku or kl at the same time, they are just followed after each other while holding the cmd/ctrl key down the whole time._

As a bonus, here is how to extend the functionality to convert text to Title Case.

Go to "Preferences" -> "Keybindings-User" and add:

( Mac )
```
{ "keys": ["super+k", "super+t"], "command": "title_case" }
```

( PC )
```
{ "keys": ["ctrl+k", "ctrl+t"], "command": "title_case" }
```

And now you can convert To Title Case by pressing:<br>
( Mac ) cmd + kt<br>
( PC )  ctrl + kt

---

#5/27/2016

<img src="http://voltagead.com/wp-content/themes/voltage4/img/voltage-sublime.png">

Howdy Voltage Pros! Many of you already know this one, but if not here is a simple tip on how to move your lines of code up and down without cutting and pasting.

To move a line up :
( Mac ) ctrl+cmd+UP
( PC )  ctrl+shift+UP

To move a line down ( yep you guessed it ) :
( Mac ) ctrl+cmd+DOWN
( PC )  ctrl+shift+DOWN

<img src="https://i2.wp.com/blog-proxy.generalassemb.ly/blog/wp-content/uploads/2013/11/movelines.gif">

---

#5/31/2016

<img src="http://voltagead.com/wp-content/themes/voltage4/img/voltage-sublime.png">

Happy Tuesday everyone! Today I want to talk about a Sublime plugin that makes coding HTML much easier by using shortcuts based on CSS Selectors. For example you can type in:
```
div#container>ul>li.my-item-class*3
```
Then hit the tab key to have it produce:
```
<div id="container">
	<ul>
		<li class="my-item-class"></li>
		<li class="my-item-class"></li>
		<li class="my-item-class"></li>
	</ul>
</div>
```
<img src="https://i0.wp.com/blog-proxy.generalassemb.ly/blog/wp-content/uploads/2013/11/sublime-text-3-emmet.gif">

To install Emmet:
1. Install package control if you don't already have it (https://packagecontrol.io/installation)
2. Open up your command palette: ( PC - ctrl+shift+p ) or ( Mac - command+shift+p )
3. Type 'install' then choose 'Package Control: Install Package'
4. Search for 'emmet' and choose 'Emmet - Emmet for Sublime Text'

Then once Emmet package is installed, close Sublime and reopen it. Now you can try the example above and see the benefits of quickly producing HTML.

Here is a link with more example on how to use Emmet: http://www.hongkiat.com/blog/html-css-faster-emmet/

---

#6/1/2016

<img src="http://voltagead.com/wp-content/themes/voltage4/img/voltage-sublime.png">

Good Morning Voltage Developers. Today I have a quick tip on how to quickly open multiple columns in Sublime so you code different files side by side.

( PC ) - alt + shift + 1 to 4
( Mac ) - alt + command + 1 to 4

As a bonus, if you use 5 it creates four panes 2 x 2.

---

#6/2/2016

<img src="http://voltagead.com/wp-content/themes/voltage4/img/voltage-sublime.png">

Hello Voltage Team! Today I want to share a plug-in that is for SublimeText 3. If you are on version 2, you can upgrade to version 3 using the same serial key. Ok, on to the plug-in! The plugin is called Sidebar Enhancements and it provides many new operations to the sidebar of files and folders.

Notably provides delete as "move to trash", open with.. and a clipboard. Close, move, open and restore buffers affected by a rename/move command. (even on folders) and provides the basics: new file/folder, edit, open/run, reveal, find in selected/parent/project, cut, copy, paste, paste in parent, rename, move, delete, refresh....

The not so basic: copy paths as URIs, URLs, content as UTF8, content as data:uri base64 ( nice for embedding into CSS! ), copy as tags img/a/script/style, duplicate

<img src="https://camo.githubusercontent.com/9c427039fb2e97570edf760c4abeaf43d208f702/687474703a2f2f646c2e64726f70626f782e636f6d2f752f34333539363434392f7469746f2f7375626c696d652f536964654261722f73637265656e73686f742e706e67">

To install SideBar Enhancements:

1. Open up your command palette: ( PC - ctrl+shift+p ) or ( Mac - command+shift+p )
2. Type 'install' then choose 'Package Control: Install Package'
3. Search for 'SideBarEnhancements' and hit enter once you have it chosen.

Then once SideBarEnhancements package is installed, close Sublime and reopen it.

Here is a link to the official plugin page:
https://github.com/titoBouzout/SideBarEnhancements

---

#6/3/2016

<img src="http://voltagead.com/wp-content/themes/voltage4/img/voltage-sublime.png">

Happy Friday everyone! Today I have a tip that is surely to you help save time and become a master at moving around in the code. An essential part of coding is going back and forth between particular parts of your code. But remembering all the line numbers by hand is a big pain. Luckily, you don’t have to with the help of bookmarks.

To set bookmarks ( as many as you want ):
( PC -> ctrl+F2 )<br>
( Mac -> cmd+F2 )

Then you can navigate through the bookmarks by using F2 or shift+F2 to jump back and forth.

---

#6/6/2016

<img src="http://voltagead.com/wp-content/themes/voltage4/img/voltage-sublime.png">

Happy Monday Voltage Teams! Did you know Sublime Text has an advanced clipboard built in that has the ability to have multiple items in your clipboard history and you can get access to all of them with your keyboard? Well if you didn't today is your lucky day!

To access the clipboard history you simply press the following keyboard shortcut before you initiate a regular paste shortcut:

( PC -> ctrl+k )<br>
( Mac -> command+k )

The full sequence is:

( PC -> ctrl+k then ctrl+v )<br>
( Mac -> command+k then command+v )

After you do the full sequence you will see a pop up window that you can choose an item from your copied code history.

---

#6/7/2016

<img src="http://voltagead.com/wp-content/themes/voltage4/img/voltage-sublime.png">

Good day Voltage! Today I'm going to share a quick tip on how to select all instances of selected code with one keyboard shortcut. In no time we will all be like Chuck Norris writing code that optimizes itself.

To highlight all instances of what ever code you have selected:

( PC -> alt+F3 )<br>
( Mac -> cmd+ctrl+g )

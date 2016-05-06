# 5/5/2016

<img src="http://voltagead.com/wp-content/themes/voltage4/img/voltage-sublime.png">

Hello Voltage Force! I am going to try to post here each work day on #Development; along with a copy in Flaming-Ironman / Sublime section, on different tips, tricks, features, and helpful packages to help us become expert Sublime coders.

Today I wanted to talk about how to sort CSS. Most of the time we don't care how CSS properties are sorted, but putting them in a particular order will make your code more organized. I usually try to organize my property order by groups like font related, size/padding/margin related, etc but sorting them alphabetically can really do wonders when glancing at the code. It should even help to prevent duplicate properties getting added.

In SublimeText, you can select CSS properties and then hit ( F5 on Mac ) || ( F9 on PC ) to sort the properties alphabetical.
<img src="http://media02.hongkiat.com/sublime-text-tips/sorting-css.gif">

---

#5/6/2016

http://voltagead.com/wp-content/themes/voltage4/img/voltage-sublime.png

Happy Voltage Friday everyone! Today, I would like to talk about a simple setting for turning on the spell checker in SublimeText. Why the spell checker is not enabled by default kinda baffles me. Do they think coders are going to be like "You don't tell me what to do SublimeText!". Before I enabled this on my setup, I would usually Google a word if it looked like the spelling was wrong, but who knows how many I didn't notice.

To enable the spell checker in SublimeText go to "Preferences" -> "Settings" -> "User" and add the following lines:

"spell_check": true,
"dictionary": "Packages/Language - English/en_US.dic"

##Sublime Useful Settings

Add these settings under Sublime (menu) → Preferences → Settings User
_Make sure to add them in your user settings and not in Settings Default so future Sublime upgrades do not wipe out your custom settings._
_You can see a description of most available settings in the default settings file (Preferences → Settings - Default)

---

### Example user settings will look like this:

```
{
	"font_size": 13,
	"trim_trailing_white_space_on_save": true,
	"word_wrap": false,
	"tab_size": 4,
	"translate_tabs_to_spaces": false,
	"preview_on_click": false
}
```

---

#### font_size
Set your default font size.

---

#### trim_trailing_white_space_on_save
Set to true to removing trailing white space on save

---

#### word_wrap
Disables horizontal scrolling if enabled.
May be set to true, false, or "auto", where it will be disabled for source code, and otherwise enabled.

---

#### tab_size
The number of spaces a tab is considered equal to. Many Voltage Developers prefer setting this to 4.

---

#### translate_tabs_to_spaces
Set to false to prevent inserting spaces when tab is pressed

---

#### preview_on_click
When set to true, preview file contents by clicking on a file in the side bar. Sometimes this can be confusing when you have many tabs open. Set this to false so that double clicking or editing the preview will open the file and assign it a tab.

---
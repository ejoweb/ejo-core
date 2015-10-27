# EJO Core
[Wordpress] My own core functionalities for theme development. Including some nifty debug tools.

## CHANGELOG

0.3.1 - 6-7-2015
Add option to add text to footer_vsee shortcode

0.3.2 - 6-7-2015
Re-added theme-tools 'unregister widget' and 'visual-editor-styles'

0.4.0 op 7-7-2015
Added inpost scripts functionality
Action to hook into options page

0.4.1 op 8-7-2015
Fixed slashes bug in add-site-scripts

0.4.2 op 9-7-2015
Fixed slashes bug in add-inpost-scripts

0.4.4 
Support for Social Media links

0.4.5
Added filter to easily add classes to the styles-dropdown visual editor

0.5
- Check for Genesis when adding scripts options to site and posts
- Fixed bug in Social Links Tool

0.5.1
- Fixed social media google-plus name

0.5.2
- Relocated EJO Theme Options to Appearance menu and renamed ejo_options hook to ejo_theme_options

0.5.3
- Added cleaner functions section
- Attempt to remove XML-RPC by default
- Remove unwanted <head> links

0.5.4
- Also remove pingback link for Genesis

0.6
- Better disabling of XML-RPC.
- Remove pingback references when it is disabled
- Remove WLW (Windows live writer) manifest link in head

0.6.1
- Better code organization of head cleaner
- Removed unnecessary hybrid theme version in head

0.7
- Removed paragraph wrap from shortcodes in text-widgets (black studio tinymnce widget)
- Moved social media classname to parent link instead of <i>
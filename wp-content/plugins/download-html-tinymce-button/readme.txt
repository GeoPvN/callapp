=== Download HTML TinyMCE Button ===
Contributors: sfarbota
Tags: tinymce, editor, button, download, html, post, page, save
Requires at least: 3.9.0
Tested up to: 4.0
Stable tag: 1.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Download a post or page as HTML with the click of a button.

== Description ==

Download HTML TinyMCE Button allows users with write access to save posts and pages from the editor page. A button is added to the TinyMCE toolbar which will instantly send a command to your browser to save the content to a new .html file.

A few use cases for this would be:

* Send the HTML to someone without access to your WordPress instance (for review, translation, etc.)
* Preview the content in a browser without any CSS from WordPress
* Create a local backup of a post or page (especially useful if history is disabled)

== Installation ==

1. Unzip the plugin contents to the `/wp-content/plugins/download-html-tinymce-button/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Upgrade Notice ==

== Screenshots ==

1. The Download HTML TinyMCE Button in a default installation of WordPress.
2. The button also integrates with the TinyMCE menu, enabled using a plugin such as [TinyMCE Advanced](https://wordpress.org/plugins/tinymce-advanced/ "TinyMCE Advanced").

== Changelog ==

= 1.0 =
* Initial release.

= 1.1 =
* Tweak readme.txt file. (no functional changes)

= 1.2 =
* Update compatibility to WordPress 4.0. (no functional changes)

== Frequently Asked Questions ==

= What is TinyMCE? =

TinyMCE is the default text/markup editor that is used to create posts and pages in WordPress. Please see the [Official TinyMCE website](http://www.tinymce.com/ "Official TinyMCE Website") or the [WordPress documentation](http://codex.wordpress.org/TinyMCE "WordPress documentation on TinyMCE") for further information.

= Why is the downloaded HTML different from how it appears when I view the source of the post or page? And why is it all on one line? =

These are unfortunate effects of how WordPress stores the HTML by default. To work around this, you can install the [TinyMCE Advanced](https://wordpress.org/plugins/tinymce-advanced/ "TinyMCE Advanced") plugin and select the option to "Stop removing the `<p>` and `<br />` tags when saving and show them in the Text editor" on its settings page.

== Donations ==
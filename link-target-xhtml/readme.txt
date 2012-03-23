=== Plugin Name ===
Contributors: binfalse
Donate link: http://binfalse.de/software/wp-link-target-xhtml/
Tags: external link, link target, xhtml, a target
Requires at least: 2.0.2
Tested up to: 2.1
Stable tag: 4.3

This a WordPress plugin to open links in a new Window.

== Description ==

By default WordPress adds `target="_blank"` to links, so the user that clicks the link will open a new window/tab. Unfortunately this behavior isn't valid for XHTML.
I'm no friend of forcing the user to open new windows, but sometimes it might be necessary. 

This plugin corrects the XHTML error by replacing `target="_blank"` with `rel="external"`. A small JavaScript is added to the header, that will try to tell the users browser to open these links in a new window.

The code is of course open source, licensed under GPL.

== Installation ==

1. Unpack `link-target-xhtml.zip` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

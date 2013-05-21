=== Plugin Name ===
Contributors: luiscmas
Donate link: http://example.com/
Tags: shortcode, conditional donation result
Requires at least: 3.0.1
Tested up to: 3.5.1
Stable tag: 0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Wordpress plugin. Adds a shortcode that retrieves a text depending on an integer parameter passed as a request

== Description ==
Wordpress plugin. Adds a shortcode that retrieves a text depending on an integer parameter passed as a request

Shortcode attributes: 
- texto0, texto1, texto2, texto3 are texts to print
- importe1, importe2, importe3 are integers that 
- get is the name of the request parameter that can be passed as post or get

usage 
[gracias_por_donar texto0="thist text is printed if value < importe1"
texto1="this text is printed if value between importe1 and importe2"
texto2="this text is printed if value between importe2 and importe3" 
texto3="this text is printed if value greater than importe3" 
importe1="20" importe2="50" importe3="80" get="amt"
]

for example:

http://mywordpresssite.org/page?amt=30 would print this text is printed if value between importe2 and importe3.

== Installation ==

1. Unzip plugin files and upload them under your '/wp-content/plugins/' directory.
1. Resulted names will be: './wp-content/plugins/conditional-shortcode/*'
1. Activate plugin at "Plugins" administration page.

== Frequently Asked Questions ==

= Does it accept floats as request parameter? =

Yes, but not for comparison.

== Screenshots ==

== Changelog ==

= 0.1 =
Initial release
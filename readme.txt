=== Plugin Name ===
Contributors: luiscmas
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=YNLC5HS5EBW2S
Tags: shortcode, conditional donation result
Requires at least: 3.0.1
Tested up to: 3.5.1
Stable tag: 0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Conditional Shortcode. Adds a shortcode that retrieves a text depending on an integer parameter passed as a request

== Description ==
Conditional Shortcode. Adds a shortcode gracias_por_donar that retrieves a text depending on an integer parameter passed as a request

Shortcode attributes: 
- text0, text1, text2, text3 are texts to print
- range1, range2, range3 are integers (default values 0)
- get is the name of the request parameter that can be passed as post or get (default value is "amt")

usage 
[gracias_por_donar text0="thist text is printed if value < importe1"
text1="this text is printed if value between range1 and range2"
text2="this text is printed if value between range2 and range3" 
text3="this text is printed if value greater or equal than range3" 
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
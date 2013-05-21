conditional-shortcode
=====================
Wordpress plugin. Adds a shortcode that retrieves a text depending on an integer parameter passed as a request

Shortcode attributes: 
- texto0, texto1, texto2, texto3 are text text to print
- importe1, importe2, importe3 are the integers that 
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


/**** **** elements **** ****/

/* general settings */
html, body {
	border: 0;
	margin: 0 0 0 0;	/* top, right, bottom, left - space around "its" bg */
	padding: 0 0 0 0;	/* top, right, bottom, left - extra space inside "its" bg */
}
body {
	font-family: helvetica, Roboto, verdana, arial, sans-serif;
	font-size: 11pt;
	line-height: 1.35em;
	letter-spacing: .0125rem;
	font-weight: 400;
	color: #333333;
	text-align: left;
	//background: #FDE9EA;
}


img {
	border: 0;
}

/* links */
a {
	text-decoration: none;
	color: #007EBE;
}
a:visited {
	text-decoration: none;
	color: #007EBE;
}
a:hover {
	color: #007EBE;
	text-decoration: underline;
}

/* text */
h1, h2, h3, h4, h5, h6 {
	margin: 0 0 0 0;		/* top, right, bottom, left - space around "its" bg */
	padding: 25px 0 0 0;	/* top, right, bottom, left - extra space inside "its" bg */
	font-weight: normal;
	// font-family: Georgia, serif;
	color: #860000;
	letter-spacing: -0.02em;
	vertical-align: middle;
}
h1 {
	font-size: 2em;
	display: inline;
}
h2 {
	margin: 15px 0 5px 0;	/* top, right, bottom, left - space around "its" bg */
	padding: 0 0 5px 0px;	/* top, right, bottom, left - extra space inside "its" bg */
	font-size: 1.5em;
}
h3 {
	margin: 0 0 0 0;			/* top, right, bottom, left - space around "its" bg */
	padding: 5px 0 5px 0px;		/* top, right, bottom, left - extra space inside "its" bg */
	font-size: 1.1em;
}
h4 {
	font-size: 1.3em;
}
p {
	color: #333333;
	margin: 0 0 15px 0;		/* top, right, bottom, left - space around "its" bg */
	padding: 0 0 0 0;		/* top, right, bottom, left - extra space inside "its" bg */
}


/* forms */
form {
	margin: 0 0 0 0;	/* top, right, bottom, left - space around "its" bg */
	padding: 0 0 0 0;	/* top, right, bottom, left - extra space inside "its" bg */
	display: inline;
}
input, select, textarea { 
	font-size: 1.1em;
	line-height: 1.25;
}


/**** **** classes **** ****/

/* modifiers/classes */
.hide {
	display: none;
}
.show {
	display: block;
}
.clear {
	clear: both;
	line-height: 0;
	height: 0px;
}
.code {
	font-family: Courier New, monospace;
	font-size: 1.2em;
}


/**** **** specific elements (id's) **** ****/

/* scorpious image */
#scopus {
	float: right;
	margin: 30px 0 60px 20px;	/* top, right, bottom, left - space around "its" bg */
	padding: 0 0 0 0;			/* top, right, bottom, left - extra space inside "its" bg */
	text-align: center;
	font-size: 0.85em;
}

#homepic {
	float: left;
	margin: 5px 10px 5px 10px;
}


/* pagebg */
#pagebg {
	//background: transparent url('./images/bgfade.jpg') repeat-x;
}


/* pagewidth */
#pagewidth {
	width: 854px;
	margin: 0 auto 0 auto;	/* top, right, bottom, left - space around "its" bg */
	padding: 10px 0 0 0;	/* top, right, bottom, left - extra space inside "its" bg */
	text-align: left;
}


/* header */
#header {
	background: #FDE9EA;
	margin: 0 0 0 0;		/* top, right, bottom, left - space around "its" bg */
	padding: 0 0 0 0;		/* top, right, bottom, left - extra space inside "its" bg */
	text-align: center;
}
/* header book image */
#header img.book {
	vertical-align: middle;
	margin: 5px 5px 5px 10px;	/* top, right, bottom, left - space around "its" bg */
	padding: 0 0 0 0;			/* top, right, bottom, left - extra space inside "its" bg */
}
/* header cmsa logo */
#header img.logo {
	//border: 5px solid #FFFFFF;	/* extra border white - the logo is white */
	vertical-align: middle;
	margin: 5px 5px 5px 5px;	/* top, right, bottom, left - space around "its" bg */
	padding: 0 0 0 0;			/* top, right, bottom, left - extra space inside "its" bg */
}

#header .title {
	font-family: Georgia, Roboto, helvetica, sans-serif;
	font-size: 1.15em;
}

.indexmembers {
	padding-top: 5px;
	font-size:1em;
}


/* content bg - the white page */
#contentbg { 
	margin: 0 0 0 0;		/* top, right, bottom, left - space around "its" bg */
	padding: 0 0 10px 0;	/* top, right, bottom, left - extra space inside "its" bg */
	background: #FFFFFF;
}


/* left links - clean me up*/
#leftlinks {
	float: left;
	width: 190px;
	position: relative;
	margin: 0 15px 20px 0px;	/* top, right, bottom, left - space around "its" bg */
	padding: 0 0 0 0;			/* top, right, bottom, left - extra space inside "its" bg */
}
#leftlinks h4 {
	letter-spacing: 1px;
	line-height: 2em;
	margin: 5px 0 0 5px;		/* top, right, bottom, left - space around "its" bg */
	padding: 0 0 0 0;		/* top, right, bottom, left - extra space inside "its" bg */
}
/* whole block */
#leftlinks div {
	font-size: 1em;
	background-color: #FCE8E8;
	text-decoration: none;
	margin: 0 0 0 0;		/* top, right, bottom, left - space around "its" bg */
	padding: 0 0 0 0;		/* top, right, bottom, left - extra space inside "its" bg */
}
/* bottom of whole block */
#leftlinks div.underline {
	border-bottom: 1px solid #888888;
}
/* Top level Left Links */
#leftlinks div a, #leftlinks div {
	text-decoration: none;
}
#leftlinks div a span, #leftlinks div span {
	color: #333333;
	text-decoration: none;
	cursor: pointer;
	font-size: 0.9em;
	display: block;
	margin: 0 0 0 0;			/* top, right, bottom, left - space around "its" bg */
	padding: 2px 5px 2px 10px;	/* top, right, bottom, left - extra space inside "its" bg */
	border-top: 1px solid #888888;
	border-left: 1px solid #888888;
	border-right: 1px solid #888888;
}
#leftlinks div a span:hover, #leftlinks div span:hover {
	background-color: #ECC8C8;
	text-decoration: none;
	cursor: pointer;
}
/* Second level Left Links */
#leftlinks div div a, #leftlinks div div {
	text-decoration: none;
	cursor: pointer;
}
/* sub blocks item */
#leftlinks div div a span, #leftlinks div div span {
	font-size: 0.8em;
	background-color: #FCF6F6;
	text-decoration: none;
	cursor: pointer;
	margin: 0 0 0 0;			/* top, right, bottom, left - space around "its" bg */
	padding: 2px 5px 2px 20px;	/* top, right, bottom, left - extra space inside "its" bg */
}
#leftlinks div div a span:hover, #leftlinks div div span:hover {
	background-color: #ECC8C8;
	text-decoration: none;
	cursor: pointer;
}
/* Third level Left Links */
#leftlinks div div div a, #leftlinks div div div {
	text-decoration: none;
	cursor: pointer;
}
/* sub sub blocks item */
#leftlinks div div div a span, #leftlinks div div div span {
	font-size: 0.8em;
	background-color: #FCFCFC;
	text-decoration: none;
	cursor: pointer;
	margin: 0 0 0 0;			/* top, right, bottom, left - space around "its" bg */
	padding: 2px 5px 2px 35px;	/* top, right, bottom, left - extra space inside "its" bg */
}
#leftlinks div div div a span:hover, #leftlinks div div div span:hover {
	background-color: #ECC8C8;
	text-decoration: none;
	cursor: pointer;
}
a.highlight span{
	background-color: #f49f9c;
}

#leftlinks div div a#volhighlight span{
	background-color: #f49f9c;
}

/* optin form */
#optin {
	color: #fff !important;
	margin-top: 5px;
	margin-bottom: 50px;
}
	#optin h2 {
		margin-top: 0px;
		padding: 2px !important;
		line-height: 1.3em;
		color: #fff !important;
	}

	#optin input {
		border: 1px solid #111 !important;
		font-size: 15px !important;
		margin-bottom: 10px !important;
		padding: 8px 10px !important;
		border-radius: 3px !important;
		-moz-border-radius: 3px !important;
		-webkit-border-radius: 3px !important;
		box-shadow: 0 2px 2px #111 !important;
	}
		#optin input.email { 
			background: #fff url(./library/thesis/images/email.png) no-repeat 10px center !important; 
			padding-left: 35px !important;
		}
		#optin input.name { 
			background: #fff url(./library/thesis/images/name.png) no-repeat 10px center; 
			padding-left: 35px !important;
		}
		#optin input.fname { display:none !important; }
		#optin input[type="submit"] {
			background: #f49f9c;
			border: 1px solid #111 !important;
			cursor: pointer !important;
			font-size: 14px !important;
			line-height: 1.3em;
			font-weight: bold !important;
			padding: 8px 10px !important;
		}
			#optin input[type="submit"]:hover { background-color: #ECC8C8 !important; }


/* content */
#content {
	margin: 0 0 0 0;		/* top, right, bottom, left - space around "its" bg */
	padding: 0 20px 0 0;	/* top, right, bottom, left - extra space inside "its" bg */
	width: 600px;
	float: right;
}

/* editor lists */
#editor ul {
	list-style-type: none;
	list-style-image: none;
	list-style-position: outside;
	margin: 0 0 10px 0;		/* top, right, bottom, left - space around "its" bg */
	padding: 0 0 0 0;		/* top, right, bottom, left - extra space inside "its" bg */
	}
#editor ul li {
	list-style-type: none;
	list-style-image: none;
	list-style-position: outside;
	margin: 0 0 0 0;			/* top, right, bottom, left - space around "its" bg */
	padding: 0 0 0.2em 0px;	/* top, right, bottom, left - extra space inside "its" bg */
	color: #333333;
}
#editor ul li ul {
	font-size: 0.8em;
	padding-top: 4px;
}

/* volume lists */
#volume ul {
	list-style-type: none;
	list-style-image: none;
	list-style-position: outside;
	margin: 0 0 -2px 0;		/* top, right, bottom, left - space around "its" bg */
	padding: 0 0 0 0;		/* top, right, bottom, left - extra space inside "its" bg */
	}
#volume ul li {
	list-style-type: none;
	list-style-image: none;
	list-style-position: outside;
	margin: 0 0 0 0;			/* top, right, bottom, left - space around "its" bg */
	padding: 0 0 0.2em 0px;	/* top, right, bottom, left - extra space inside "its" bg */
	color: #333333;
}
#volume ul li ul {
	//font-size: 0.8em;
	padding-top: 4px;
}

.voltitle {
	//font-weight: bold;
	//font-style: italic;
	//color: #860000;
}

.pagetitle {
	font-family:Helvetica;
	//font-weight:bold;
	padding-bottom:20px;
	letter-spacing: 0.5px;
	text-transform:uppercase;
}

hr
{
    border: none;
    border-bottom: 1px solid #888888;
}


/* footer */
#footer {
	margin: 10px 10px 10px 10px;	/* top, right, bottom, left - space around "its" bg */
	padding: 0 0 0 0;				/* top, right, bottom, left - extra space inside "its" bg */
	font-size: 0.7em;
	color: #666666;
	line-height: 18px;
	text-align: left;
}
#footer a, #footer a:visited {
	color: #666666;
	text-decoration: none;
	outline: none;
}
#date_modified {
	margin: 0 0 0 0;	/* top, right, bottom, left - space around "its" bg */
	padding: 0 0 0 0;	/* top, right, bottom, left - extra space inside "its" bg */
	float: right;
}


/* copyright message */
#copyright_text h2 {
	margin: 10px 0 0 30px;	/* top, right, bottom, left - space around "its" bg */
	padding: 0 0 15px 0px;	/* top, right, bottom, left - extra space inside "its" bg */
	font-size: 1.8em;
	letter-spacing: -0.01em;
	line-height: 1.2em;
	text-align: left;
}
#blanket {
	background-color: #111111;	/* make the page look darkened */
	opacity: 0.65;
	filter: alpha(opacity=65);
	position: absolute;
	z-index: 9123;
	top: 0px;
	left: 0px;
	width: 100%;
}
#copyright_box {
	background-color: transparent;
	position: absolute;
	top: 0;
	width: 100%;
	height: 0;
	text-align: center;
}
#copyright_text {
	font-size: 1.1em;
	border: 5px solid #FC6868;
	position: relative;
	top: 150px;
	margin: 0 auto 0 auto;	/* top, right, bottom, left - space around "its" bg */
	background-color: #FCE8E8;
	text-align: center;
	width: 700px;
	height: 220px;
	z-index: 9234;
}
.close {
	font-size: 0.9em;
}

/* headlines with lines */
.decorated{
     overflow: hidden;
     text-align: center;
 }
.decorated > span{
    position: relative;
    display: inline-block;
}
.decorated > span:before, .decorated > span:after{
    content: '';
    position: absolute;
    top: 50%;
    border-bottom: 2px solid;
    width: 592px; /* half of limiter */
    margin: 0 20px;
}
.decorated > span:before{
    right: 100%;
}
.decorated > span:after{
    left: 100%;
}

// @media only screen and (max-width: 600px) {
	// #leftlinks {
		// float: left;
		// padding-left: 5%;
		// width: 90%;
	// }
	// #content {
		// float: left;
		// padding-left: 5%;
		// width: 90%;
	// }
	// #pagewidth {
		// width: 100%;
	// }
	// #header .title {
		// line-height: 0.5em;
		// font-size: 0.9em;
	// }
	// .logo{float: none; }
// }

div#volume > ul > li:first-child > h4:first-child {
	padding-top: 0px;
}

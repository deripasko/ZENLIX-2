
<style>
/* ------------------------------------- 
    GLOBAL 
------------------------------------- */

* { font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif; font-size: 14px;}

img { 
  max-width: 100%; 
}
.collapse {
  margin:0;
  padding:0;
}
body {
  -webkit-font-smoothing:antialiased; 
  -webkit-text-size-adjust:none; 
  width: 100%!important; 
  height: 100%;
    margin:0;
  padding:0;
}


/* ------------------------------------- 
    ELEMENTS 
------------------------------------- */
a { color: #2BA6CB;}

.btn {
  text-decoration:none;
  color: #FFF;
  background-color: #666;
  padding:10px 16px;
  font-weight:bold;
  margin-right:10px;
  text-align:center;
  cursor:pointer;
  display: inline-block;
}

div.callout {
  padding:15px;
  background-color:#ECF8FF;
  margin-bottom: 15px;
}
.callout a {

  color: #2BA6CB;
}

table.social {
/*  padding:15px; */

  
}
.social .soc-btn {
  padding: 3px 7px;
  font-size:12px;
  margin-bottom:10px;
  text-decoration:none;
  color: #FFF;font-weight:bold;
  display:block;
  text-align:center;
}
a.fb { background-color: #3B5998!important; }
a.tw { background-color: #1daced!important; }
a.gp { background-color: #DB4A39!important; }
a.ms { background-color: #000!important; }

.sidebar .soc-btn { 
  display:block;
  width:100%;
}

/* ------------------------------------- 
    HEADER 
------------------------------------- */
table.head-wrap { width: 100%;}

.header.container table td.logo { padding: 15px; }
.header.container table td.label { padding: 15px; padding-left:0px;}


/* ------------------------------------- 
    BODY 
------------------------------------- */
table.body-wrap { width: 100%;}


/* ------------------------------------- 
    FOOTER 
------------------------------------- */
table.footer-wrap { width: 100%;  clear:both!important;
}
.footer-wrap .container td.content  p { border-top: 1px solid rgb(215,215,215); padding-top:15px;}
.footer-wrap .container td.content p {
  font-size:10px;
  font-weight: bold;
  
}


/* ------------------------------------- 
    TYPOGRAPHY 
------------------------------------- */
h1,h2,h3,h4,h5,h6 {
font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; line-height: 1.1; margin-bottom:15px; color:#000;
}
h1 small, h2 small, h3 small, h4 small, h5 small, h6 small { font-size: 60%; color: #6f6f6f; line-height: 0; text-transform: none; }

h1 { font-weight:200; font-size: 44px;}
h2 { font-weight:200; font-size: 37px;}
h3 { font-weight:500; font-size: 27px;}
h4 { font-weight:500; font-size: 23px;}
h5 { font-weight:900; font-size: 17px;}
h6 { font-weight:900; font-size: 14px; text-transform: uppercase; color:#444;}

.collapse { margin:0!important;}

p, ul { 
  margin-bottom: 10px; 
  font-weight: normal; 
  font-size:14px; 
  line-height:1.6;
}
p.lead { font-size:17px; }
p.last { margin-bottom:0px;}

ul li {
  margin-left:5px;
  list-style-position: inside;
}

/* ------------------------------------- 
    SIDEBAR 
------------------------------------- */
ul.sidebar {
  background:#ebebeb;
  display:block;
  list-style-type: none;
}
ul.sidebar li { display: block; margin:0;}
ul.sidebar li a {
  text-decoration:none;
  color: #666;
  padding:10px 16px;
/*  font-weight:bold; */
  margin-right:10px;
/*  text-align:center; */
  cursor:pointer;
  border-bottom: 1px solid #777777;
  border-top: 1px solid #FFFFFF;
  display:block;
  margin:0;
}
ul.sidebar li a.last { border-bottom-width:0px;}
ul.sidebar li a h1,ul.sidebar li a h2,ul.sidebar li a h3,ul.sidebar li a h4,ul.sidebar li a h5,ul.sidebar li a h6,ul.sidebar li a p { margin-bottom:0!important;}



/* --------------------------------------------------- 
    RESPONSIVENESS
    Nuke it from orbit. It's the only way to be sure. 
------------------------------------------------------ */

/* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
.container {
  display:block!important;
  max-width:600px!important;
  margin:0 auto!important; /* makes it centered */
  clear:both!important;
}

/* This should also be a block element, so that it will fill 100% of the .container */
.content {
  padding:15px;
  max-width:600px;
  margin:0 auto;
  display:block; 
}

/* Let's make sure tables in the content area are 100% wide */
.content table { width: 100%; }


/* Odds and ends */
.column {
  width: 300px;
  float:left;
}
.column tr td { padding: 15px; }
.column-wrap { 
  padding:0!important; 
  margin:0 auto; 
  max-width:600px!important;
}
.column table { width:100%;}
.social .column {
  width: 280px;
  min-width: 279px;
  float:left;
}

/* Be sure to place a .clear element after each set of columns, just to be safe */
.clear { display: block; clear: both; }


/* ------------------------------------------- 
    PHONE
    For clients that support media queries.
    Nothing fancy. 
-------------------------------------------- */
@media only screen and (max-width: 600px) {
  
  a[class="btn"] { display:block!important; margin-bottom:10px!important; background-image:none!important; margin-right:0!important;}

  div[class="column"] { width: auto!important; float:none!important;}
  
  table.social div[class="column"] {
    width:auto!important;
  }

}
</style>




<html xmlns="http://www.w3.org/1999/xhtml"><head>
 
<meta name="viewport" content="width=device-width">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


</head>
<body bgcolor="#FFFFFF">
 
<table class="head-wrap" bgcolor="#f9f9f9">
<tbody><tr>
<td></td>
<td class="header container">
<div class="content">
<table bgcolor="#f9f9f9">
<tbody><tr>
<td><?=get_conf_param('name_of_firm');?></td>
<td align="right"><h6 class="collapse">{MAIL_refer}!</h6></td>
</tr>
</tbody></table>
</div>
</td>
<td></td>
</tr>
</tbody></table> 
 
<table class="body-wrap">
<tbody><tr>
<td></td>
<td class="container" bgcolor="#FFFFFF">
<div class="content">
<table>
<tbody><tr>
<td>

<p class="lead">{MAIL_refer_ext} <strong>{who_init}</strong> {MAIL_to_w}  <strong>{to_text}</strong>

</p>


 
<div class="callout">
<table width="100%" cellpadding="3" cellspacing="0">
  <tbody>
    <tr id="tr_">
      <td width="15%">{MAIL_code}:</td>
      <td width="36%" align="center" valign="middle"><b style="
    font-size: 22px;
">#{ticket_id}</b></td>
      <td width="49%" valign="middle" ><p > <a style=" font-size:11px; text-align:center;" href='<?=$CONF['hostname'];?>ticket?{h}'>{MAIL_2link}</a>.</p></td>
    </tr>
  </tbody>
</table>
</div> 
 
<table class="social" width="100%">
<tbody><tr>
<td>
 





 <table width="100%" cellspacing="0" cellpadding="3" style="">
  <tr style="">
    <td colspan="2" ><center>
      <strong>{MAIL_info} </strong>
    </center></td>


  </tr>
  <tr>
    <td style="">{MAIL_created}:</td>
    <td style="">{uin}</td>
  </tr>
  <tr>
    <td  >{MAIL_to}:</td>
    <td  >{to_text}</td>
  </tr>
    <tr>
    <td >{MAIL_prio}:</td>
    <td >{prio}</td>
  </tr>
  <tr>
    <td >{MAIL_worker}:</td>
    <td >{nou}</td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"  ><center>
      <strong>{MAIL_msg}</strong>
    </center></td>
  </tr>
  <tr>
    <td   >{MAIL_subj}:</td>
    <td   >{s}</td>
  </tr>
    <tr>
    <td   >{MAIL_text}:</td>
    <td   >{m}</td>
  </tr>
    <tr>
    <td colspan="5">&nbsp;</td>
  </tr>  
 
</table>

<span class="clear"></span>
</td>
</tr>
</tbody></table> 
</td>
</tr>
</tbody></table>
</div> 
</td>
<td></td>
</tr>
</tbody></table> 
 
<table class="footer-wrap">
<tbody><tr>
<td></td>
<td class="container">
 

</td>
<td></td>
</tr>
</tbody></table> 

</body></html>













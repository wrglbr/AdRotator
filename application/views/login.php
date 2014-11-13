<!DOCTYPE html>

<html>

 <head>
   <meta charset="UTF-8" /> 
   <title>Login</title>
   <style type="text/css">
@import url('http://fonts.googleapis.com/css?family=Open+Sans');
@font-face{
   src:url("/assets/fonts/pictos-regular-webfont.ttf") format("truetype"),
      url("/assets/fonts/pictos-regular-webfont.otf") format("opentype"),
      url("/assets/fonts/pictos-regular-webfont.svg") format("svg");
   font-family:icon;
}

body{
   background:#2e2e2e;
   font-family:'Open Sans';
}
label{
   font-family:icon;
   text-shadow:0 -1px 0 #666;
   -webkit-font-smoothing: antialiased; 
}
#block,#option{
   width:230px;
   height:113px;
   margin:auto;
}
#block{
   background-color:rgba(75,75,75.32);
   margin-top:10px;
}
#block:before{
   content:'';
   display:block;
   width:230px;
   height:3px;
      /* The rainbow*/
   background:linear-gradient(left, rgba(173,107,173,1) 0%, rgba(173,107,173,1) 1%, rgba(181,121,168,1) 1%, rgba(181,126,181,1) 2%, rgba(181,126,181,1) 2%, rgba(189,136,187,1) 3%, rgba(189,136,187,1) 3%, rgba(197,151,181,1) 4%, rgba(197,151,181,1) 5%, rgba(206,165,194,1) 5%, rgba(206,165,194,1) 6%, rgba(214,178,194,1) 6%, rgba(214,178,194,1) 7%, rgba(222,189,189,1) 7%, rgba(222,189,189,1) 8%, rgba(222,197,197,1) 8%, rgba(222,197,197,1) 9%, rgba(229,210,200,1) 9%, rgba(229,210,200,1) 10%, rgba(241,230,197,1) 11%, rgba(241,230,197,1) 12%, rgba(247,247,197,1) 12%, rgba(247,247,197,1) 15%, rgba(236,247,194,1) 15%, rgba(236,247,194,1) 16%, rgba(230,239,189,1) 17%, rgba(230,239,189,1) 18%, rgba(222,239,183,1) 19%, rgba(222,239,183,1) 20%, rgba(212,239,176,1) 20%, rgba(212,239,176,1) 22%, rgba(201,230,165,1) 22%, rgba(201,230,165,1) 25%, rgba(186,230,158,1) 26%, rgba(186,230,158,1) 27%, rgba(182,225,147,1) 27%, rgba(182,225,147,1) 30%, rgba(169,222,140,1) 30%, rgba(169,222,140,1) 32%, rgba(160,222,132,1) 32%, rgba(160,222,132,1) 36%, rgba(156,214,147,1) 36%, rgba(156,214,147,1) 39%, rgba(148,214,161,1) 40%, rgba(148,214,161,1) 43%, rgba(148,214,174,1) 43%, rgba(148,214,174,1) 45%, rgba(148,206,186,1) 46%, rgba(148,206,186,1) 48%, rgba(140,206,197,1) 49%, rgba(140,206,197,1) 52%, rgba(140,206,212,1) 52%, rgba(140,206,212,1) 55%, rgba(140,195,221,1) 55%, rgba(140,195,221,1) 58%, rgba(148,179,210,1) 59%, rgba(148,179,210,1) 60%, rgba(156,173,206,1) 61%, rgba(156,167,197,1) 61%, rgba(156,167,197,1) 63%, rgba(165,154,189,1) 63%, rgba(165,154,189,1) 64%, rgba(169,148,181,1) 65%, rgba(169,148,181,1) 66%, rgba(173,134,175,1) 66%, rgba(173,134,175,1) 67%, rgba(181,121,168,1) 67%, rgba(181,121,168,1) 69%, rgba(189,115,156,1) 69%, rgba(189,115,156,1) 70%, rgba(196,102,146,1) 71%, rgba(196,102,146,1) 72%, rgba(200,88,143,1) 73%, rgba(200,88,143,1) 74%, rgba(206,80,132,1) 74%, rgba(206,80,132,1) 76%, rgba(214,64,123,1) 76%, rgba(214,64,123,1) 78%, rgba(220,59,114,1) 78%, rgba(220,59,114,1) 79%, rgba(222,48,110,1) 79%, rgba(222,48,110,1) 80%, rgba(232,42,107,1) 80%, rgba(232,42,107,1) 81%, rgba(230,33,99,1) 81%, rgba(230,33,99,1) 83%, rgba(232,42,107,1) 83%, rgba(232,42,107,1) 84%, rgba(222,48,110,1) 85%, rgba(222,48,110,1) 86%, rgba(220,59,114,1) 87%, rgba(220,59,114,1) 88%, rgba(214,64,123,1) 88%, rgba(214,64,123,1) 89%, rgba(206,66,130,1) 90%, rgba(206,66,130,1) 92%, rgba(199,74,141,1) 92%, rgba(199,74,141,1) 94%, rgba(189,82,148,1) 95%, rgba(189,82,148,1) 96%, rgba(184,90,158,1) 97%, rgba(184,90,158,1) 99%, rgba(181,99,165,1) 99%, rgba(181,99,165,1) 100%);

}

#block label, #submit{
   position:absolute;
   width:33px;
   height:34px;
   background:#dedede;
   margin:15px;
   text-align:center;
   line-height:2.2;
   color:#857487;
   border-top-left-radius:2px;
   border-bottom-left-radius:2px;
}
#block label#pass{
   position:absolute;
   width:33px;
   height:34px;
   background:#dedede;
   margin:-5px 15px;
}
#submit{
   border:0;
   margin:-29px 180px;
   border-top-left-radius:0px;
   border-bottom-left-radius:0px;
   border-top-right-radius:2px;
   border-bottom-right-radius:2px;
   font-family:icon;
   background:#25aae1;
   text-shadow:0 -1px 0 #333;
      box-shadow:-1px 0 1px 0px #6c5b6d;
   font-size:12px;
   line-height:2.8;
   padding:0;
}
#submit:hover{
   color:#333;
   cursor: pointer;
   background:#27ae60;
}
#user, #pass{
   box-shadow:0.1px 0 2px #6c5B6d;
}
#block input[type=text],#block  input[type=password], #option p {
   font-family:'Open Sans';
   font-weight:300;
   -webkit-font-smoothing: antialiased;
}
#block input[type=text],#block  input[type=password]{
   width:156px;
   height:32px;
   margin:15px 15px;
   border:0;
   border-radius:2px;
   outline:0;
   display:block;
   font-size:18px;
}
#block input[type=password]{
   width:156px;
   height:32px;
   margin:-5px 15px;
}
#submit{
   color:#fff;font-size:8px;font-weight:bold;
}
#option{
   width:230px;
   height:80px;
   overflow:hidden;
   margin:auto;
}
#option p{
   color:#6c5B6d;
   font-size:24px;
   text-transform:uppercase;
   padding:0px 18px;
   margin-top:15px;
   display:block;
   float:left;
   -webkit-font-smoothing: antialiased;
/*text-shadow:0 -1px 0 #000;*/   
}
#option a{
   -webkit-font-smoothing: antialiased;
   color:#6c5B6d;
   /*text-shadow:0 -1px 0 #000;*/
   font-size:12px;
   display:block;
   float:right;
   margin:26px 15px;
}

input{padding-left:40px;}
#block:active > #block:before{
   background-position:100px 100px;
}

/* placeholder */
::-webkit-input-placeholder {
   -webkit-font-smoothing: antialiased;
   color:#999;
   font-size:16px;
}
:-moz-input-placeholder {  
   color:#999;
   font-size:16px;
}


input::-webkit-validation-bubble-message {
   color:white;
   background: #e62163;
  border:0;
   border-radius:0;
   padding:0;
   width:55px;
   height:34px;
   position:absolute;
   float:left;
   margin:-33px 208px;
   text-align:center;
   line-height:2.7em;
   box-shadow:0 0 0;
}
input::-webkit-validation-bubble-message:before {
   content:"X";
   display:block;
   font-family:icon;
   color:white;
   background: #e62163;
  border:0;
   border-radius:0;
   padding:0;
   width:34px;
   height:34px;
   position:absolute;
   float:left;
   margin:0px -208px;
   text-align:center;
   line-height:2.7em;
   color: #fff;
   border-top-left-radius:2px;
   border-bottom-left-radius:2px;
   -webkit-font-smoothing: antialiased;

}
input::-webkit-validation-bubble-icon {
   display: none;
}
input::-webkit-validation-bubble-arrow {
   background: #e62163;
   border:0;
   width:10px;
   height:10px;
   position:absolute;
   margin:-23px 178px;
}

h1 { text-align: center;
margin-bottom: 0;
padding-bottom: 0;
color: #25aae1;}
   </style>
 </head>

 <body>
   <h1>adCloud</h1>
<?php echo validation_errors(); ?>

<form id="form" name="form" action="/login/validate" method="post">
   <div id="block">
      <label id="user" for="name">p</label>
      <input type="text" name="username" id="username" placeholder="Username" required/>
      <label id="pass" for="password">k</label>
      <input type="password" name="password" id="password" placeholder="Password" required />
      <input type="submit" id="submit" name="submit" value="a"/>
   </div>
</form>

 </body>

</html>
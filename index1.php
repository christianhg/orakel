<?php
$svar = array();
$svar[] = "Hvad tror du selv?";
$svar[] = "Svaret er derude.";
$svar[] = "Det er jeg i min gode ret til ikke at svare på!.";
$svar[] = "Det kommer an på hvilken tid på døgnet du mener.";
$svar[] = "Ligner jeg en der ved det?!.";
$svar[] = "Min hund ved det nok...";
$svar[] = "Spørg en anden - jeg har travlt.";
$svar[] = "Sig mig.. skal du være pervers?!";
$svar[] = "I have the right to remain silent.";
$svar[] = "Hvor skulle jeg vide det fra?.";
$svar[] = "De har tilbud på æbleskiver i FAKTA.";
$svar[] = "Ej! Ved du ik' det?!";
$svar[] = "Hvad vil du med det svar?";
$svar[] = "Helt klart.. ja, ja!";
$svar[] = "Hov! Stil dig om bag i køen!";
$svar[] = "Dét gider jeg ikke at svare på!";
$svar[] = "Det vil kun tiden vise.";
$svar[] = "Bip-bip; Bip-bip -- BOING!";

?>
<HTML>
<HEAD>
<TITLE>Spørg Oraklet</TITLE>
</HEAD>
<?php
if (!$question && $ask != 1) {
echo '<IMG SRC="orakel1.gif">';
} elseif (($question == "" || $question == "?") && $ask == 1) {
echo '<IMG SRC="orakel2.gif">';
echo '<TABLE BORDER="0" style="position:absolute;left:337;top:17;width:144px;height:68px;color:#FFFFFF;font-family:Trebuchet MS, Tahoma, Verdana, Helvetica, Arial, Times New Roman, Times"><TR><TD><CENTER>';
echo "Du er da godt nok en mand af få ord!";
echo '</CENTER></TD></TR></TABLE>';
} elseif (substr($question,-1) != "?") {
echo '<IMG SRC="orakel2.gif">';
echo '<TABLE BORDER="0" style="position:absolute;left:337;top:17;width:144px;height:68px;color:#FFFFFF;font-family:Trebuchet MS, Tahoma, Verdana, Helvetica, Arial, Times New Roman, Times"><TR><TD><CENTER>';
echo "Hey Pablo! Man sætter altså spørgsmålstegn.";
echo '</CENTER></TD></TR></TABLE>';
} elseif (strtolower($question) == "hvad er meningen med livet?") {
echo '<IMG SRC="orakel2.gif">';
echo '<TABLE BORDER="0" style="position:absolute;left:337;top:17;width:144px;height:68px;color:#FFFFFF;font-family:Trebuchet MS, Tahoma, Verdana, Helvetica, Arial, Times New Roman, Times"><TR><TD><CENTER>';
echo "42.";
echo '</CENTER></TD></TR></TABLE>';
} elseif ($question && $ask == 1 && $question !== $previousquestion) {
echo '<IMG SRC="orakel2.gif">';
echo '<TABLE BORDER="0" style="position:absolute;left:337;top:17;width:144px;height:68px;color:#FFFFFF;font-family:Trebuchet MS, Tahoma, Verdana, Helvetica, Arial, Times New Roman, Times"><TR><TD><CENTER>';
echo $svar[rand(0,(count($svar)-1))];
echo '</CENTER></TD></TR></TABLE>';
} elseif ($question == $previousquestion && $previousquestion != ""){
echo '<IMG SRC="orakel2.gif">';
echo '<TABLE BORDER="0" style="position:absolute;left:337;top:17;width:144px;height:68px;color:#FFFFFF;font-family:Trebuchet MS, Tahoma, Verdana, Helvetica, Arial, Times New Roman, Times"><TR><TD><CENTER>';
echo "Har du ikke lige spurgt om det?";
echo '</CENTER></TD></TR></TABLE>';

}

?>
<BODY TOPMARGIN="0" LEFTMARGIN="0">

<DIV STYLE="position:absolute;top:90;left:15;"><FORM ACTION="index1.php"><INPUT TYPE="HIDDEN" NAME="ask" VALUE="1"><INPUT TYPE="HIDDEN" name="previousquestion" VALUE="<?PHP echo $question; ?>"><INPUT TYPE="TEXT" name="question" STYLE="border:1px solid #FFAAAA;border-collapse:collapse;border-color:#FF9999;width:285px;background-color:#FFDDDD;" VALUE="<?PHP echo $question; ?>"><br><INPUT TYPE="SUBMIT" value="Spørg" STYLE="border:1px solid #FFAAAA;border-collapse:collapse;border-color:#FF9999;background-color:#FFDDDD;font-weight:bold;font-size:10px;color:#FF6666"></FORM></DIV>
<DIV STYLE="font-family:Trebuchet MS, Tahoma, Verdana, Helvetica, Arial, Times New Roman, Times; font-size:12px;color:#FF6666;position:absolute;left:15;top:170;"><i><b>Af</b>: Christian Hamburger Grøngaard og Jens Christian Hillerup<br><b>Efter idé af</b>: Sarah Marie Løhr</DIV>
</BODY>
</HTML>

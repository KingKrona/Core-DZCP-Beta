</table>
<table class="mainContent" cellspacing="0">
<tr>
  <td>
    <form name="formular" action="?action=foption&amp;do=fabo&amp;id={$id}" method="post" onsubmit="return(DZCP.submitButton('contentSubmitFabo'))">
      <table class="hperc" cellspacing="1">
			  <tr>
				  <td class="contentHead" align="center" colspan="3"><span class="fontBold">{lang msgID="forum_abo_title"}</span></td>
				</tr>
				<tr>
				  	<td width="1%" class="contentMainTop" style="vertical-align:middle"><input class="checkbox" type="checkbox" id="f_abo" name="f_abo" value="1" {$abo} /></td>
          			<td class="contentMainTop" style="vertical-align:middle"><label for="f_abo">{lang msgID="foum_fabo_checkbox"}</label></td>
          			<td class="contentMainTop" width="1%" align="right"><input id="contentSubmitFabo" type="submit" value="{lang msgID="button_value_save"}" class="submit" /></td>
				</tr>
			</table>
	  </form>
	</td>
</tr>
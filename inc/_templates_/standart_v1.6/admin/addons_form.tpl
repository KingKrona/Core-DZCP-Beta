<tr>
<td>
<form name="startpage" id="startpage" action="?admin=startpage&amp;do={$do}" method="post" onsubmit="return(DZCP.submitButton())">
<table class="hperc" cellspacing="1">
<tr>
  <td class="contentHead" align="center" colspan="2"><span class="fontBold">{$head}</span></td>
</tr>
<tr>
  <td class="contentMainTop" width="150"><span class="fontBold">{lang msgID="admin_startpage_name"}:</span></td>
  <td class="contentMainFirst" align="center"><input type="text" name="name" value="{$name}" class="inputField_dis" onfocus="this.className='inputField_en';" onblur="this.className='inputField_dis';" /></td>
</tr>
<tr>
  <td class="contentMainTop" width="150"><span class="fontBold">{lang msgID="admin_startpage_url"}:</span></td>
  <td class="contentMainFirst" align="center"><input type="text" name="url" value="{$url}" class="inputField_dis" onfocus="this.className='inputField_en';" onblur="this.className='inputField_dis';" /></td>
</tr>
<tr>
  <td class="contentMainTop" width="150"><span class="fontBold">{lang msgID="admin_startpage_level"}:</span></td>
  <td class="contentMainFirst" align="center"><select name="level" class="dropdown">{$level}</select></td>
</tr>
<tr>
  <td class="contentBottom" colspan="2"><input id="contentSubmit" type="submit" value="{$what}" class="submit" /></td>
</tr>
</table>
</form>
</td>
</tr>
<tr>
  <td class="contentHead" colspan="6" align="center"><span class="fontBold">{$head}</span></td>
</tr>
<tr>
  <td class="contentMainTop" colspan="6" style="text-align:center">{$nav}</td>
</tr>
<tr>
  <td class="contentMainTop" width="120"><span class="fontBold">{lang_datum}&nbsp;<a href="{$order_date}"><img src="{idir}/order.gif" alt="" class="icon" /></a></span></td>
  <td class="contentMainTop" width="200"><span class="fontBold">{lang_titel}&nbsp;<a href="{$order_titel}"><img src="{idir}/order.gif" alt="" class="icon" /></a></span></td>
  <td class="contentMainTop" colspan="4"><span class="fontBold">{lang_autor}&nbsp;<a href="{$order_autor}"><img src="{idir}/order.gif" alt="" class="icon" /></a></span></td>
</tr>
{$show}
<tr>
  <td class="contentBottom" colspan="6">
    <form action="" method="get" onsubmit="return(DZCP.submitButton())">
      <input type="hidden" name="admin" value="{$val}" />
      <input type="hidden" name="do" value="add" />
      <input id="contentSubmit" type="submit" class="submit" value="{$add}" />
    </form>
  </td>
</tr>

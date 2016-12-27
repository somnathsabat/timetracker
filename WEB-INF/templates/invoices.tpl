<script>
  function chLocation(newLocation) { document.location = newLocation; }
</script>

<table cellspacing="0" cellpadding="7" border="0" width="720">
  <tr>
    <td valign="top">
{if $user->canManageTeam() || $user->isClient()}
      <table cellspacing="1" cellpadding="3" border="0" width="100%">
        <tr>
          <td class="tableHeader">{$i18n.label.invoice}</td>
          <td class="tableHeader">{$i18n.label.client}</td>
          <td class="tableHeader">{$i18n.label.date}</td>
          <td class="tableHeader">{$i18n.label.view}</td>
  {if !$user->isClient()}
          <td class="tableHeader">{$i18n.label.delete}</td>
  {/if}
        </tr>
        {foreach $invoices as $invoice}
        <tr valign="top" bgcolor="{cycle values="#f5f5f5,#dedee5"}">
          <td>{$invoice.name|escape:'html'}</td>
          <td>{$invoice.client_name|escape:'html'}</td>
          <td>{$invoice.date}</td>
          <td><a href="invoice_view.php?id={$invoice.id}">{$i18n.label.view}</a></td>
  {if !$user->isClient()}
          <td><a href="invoice_delete.php?id={$invoice.id}">{$i18n.label.delete}</a></td>
  {/if}
        </tr>
        {/foreach}
      </table>

  {if !$user->isClient()}
      <table width="100%">
        <tr><td align="center"><br><form><input type="button" onclick="chLocation('invoice_add.php');" value="{$i18n.button.add_invoice}"></form></td></tr>
      </table>
  {/if}
{/if}
    </td>
  </tr>
</table>

{$forms.notificationForm.open}
<table cellspacing="4" cellpadding="7" border="0">
  <tr>
    <td>
      <table cellspacing="1" cellpadding="2" border="0">
        <tr>
          <td align="right">{$i18n.label.fav_report} (*):</td>
          <td>{$forms.notificationForm.fav_report.control}</td>
        </tr>
        <tr>
          <td align="right">{$i18n.label.cron_schedule} (*):</td>
          <td>{$forms.notificationForm.cron_spec.control} <a href="https://www.anuko.com/lp/tt_6.htm" target="_blank">{$i18n.label.what_is_it}</a></td>
        </tr>
        <tr>
          <td align="right">{$i18n.label.email} (*):</td>
          <td>{$forms.notificationForm.email.control}</td>
        </tr>
        <tr>
          <td height="40"></td>
          <td>{$i18n.label.required_fields}</td>
        </tr>
        <tr><td>&nbsp;</td></tr>
        <tr>
          <td colspan="2" align="center" height="50">{$forms.notificationForm.btn_add.control}</td>
        </tr>
      </table>
    </td>
  </tr>
</table>
{$forms.notificationForm.close}
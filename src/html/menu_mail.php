<!-- start of $Id: menu_mail.php 2629 2014-11-19 15:23:53Z oheil $ -->
<?php
  if (!isset($conf->loaded))
    die('Hacking attempt');
?>
<div class="mainmenu">
  <ul>
    <li>
      <a href="action.php?<?php echo NOCC_Session::getUrlGetSession();?>"><?php echo convertLang2Html($html_inbox); ?></a>
    </li>
    <li class="selected">
      <span><?php echo convertLang2Html($html_msg) ?></span>
    </li>
    <?php if ($_SESSION['is_imap']) { ?>
    <li>
      <a href="action.php?<?php echo NOCC_Session::getUrlGetSession();?>&action=managefolders" title="<?php echo convertLang2Html($html_manage_folders_link); ?>"><?php echo convertLang2Html($html_folders); ?></a>
    </li>
    <?php } ?>
    <?php if ($conf->prefs_dir && isset($conf->contact_number_max) && $conf->contact_number_max != 0 ) { ?>
    <li>
      <a href="javascript:void(0);" onclick="window.open('contacts_manager.php?<?php echo NOCC_Session::getUrlGetSession();?>&<?php echo NOCC_Session::getUrlQuery(); ?>','','scrollbars=yes,resizable=yes,width=900,height=400')"><?php echo i18n_message($html_contacts, ''); ?></a>
    </li>
    <?php } ?>
  </ul>
</div>
<!-- end of $Id: menu_mail.php 2629 2014-11-19 15:23:53Z oheil $ -->

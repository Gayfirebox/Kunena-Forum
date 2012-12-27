<?php
/**
 * Kunena Component
 * @package Kunena.Administrator.Template
 * @subpackage CPanel
 *
 * @copyright (C) 2008 - 2012 Kunena Team. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link http://www.kunena.org
 **/
defined ( '_JEXEC' ) or die ();
?>

<div class="container-fluid">
<div class="row-fluid">
 <div class="span2">
	<div><?php include KPATH_ADMIN.'/views/common/tmpl/menu.php'; ?></div>
	</div>
		<!-- Right side -->
			<div class="span10">
	<div class="well well-small" style="min-height:120px;">
                       <div class="nav-header"><?php echo JText::_('COM_KUNENA_A_VIEW_TOOLS') ?></div>
                         <div class="row-striped">
                         <br />
                  <div class="btn-group">
                <div class="btn" style="float:left;background-color: white !important;background-image:none;">
			         <div class="icon" style="text-align:center;">
                     <a href="<?php echo KunenaRoute::_('administrator/index.php?option=com_kunena&view=tools&layout=prune') ?>" title="<?php echo JText::_('COM_KUNENA_C_PRUNETABDESC');?>"> <img src="<?php echo JUri::base(true); ?>/components/com_kunena/media/icons/large/prune.png" align="middle" border="0" alt="" /><br/><span><?php echo JText::_('COM_KUNENA_C_PRUNETAB'); ?></span></a>
					 </div>
                     </div>
                     <div class="btn" style="float:left;background-color: white !important;background-image:none;">
			         <div class="icon" style="text-align:center;">
				<a href="<?php echo KunenaRoute::_('administrator/index.php?option=com_kunena&view=tools&layout=syncusers') ?>" title="<?php echo JText::_('COM_KUNENA_C_SYNCEUSERSDESC');?>"> <img src="<?php echo JUri::base(true); ?>/components/com_kunena/media/icons/large/syncusers.png" align="middle" border="0" alt="" /><br/> <span> <?php echo JText::_('COM_KUNENA_SYNC_USERS'); ?> </span></a>
			</div>
            </div>
            <div class="btn" style="float:left;background-color: white !important;background-image:none;">
			         <div class="icon" style="text-align:center;">
                     <a href="<?php echo KunenaRoute::_('administrator/index.php?option=com_kunena&view=tools&layout=recount') ?>" title="<?php echo JText::_('COM_KUNENA_RECOUNTFORUMS');?>"> <img src="<?php echo JUri::base(true); ?>/components/com_kunena/media/icons/large/recount.png" align="middle" border="0" alt="" /><br/> <span> <?php echo JText::_('COM_KUNENA_A_RECOUNT'); ?> </span></a>
					 </div>
                     </div>
                     <div class="btn" style="float:left;background-color: white !important;background-image:none;">
			         <div class="icon" style="text-align:center;">
				<a href="<?php echo KunenaRoute::_('administrator/index.php?option=com_kunena&view=tools&layout=menu') ?>" title="<?php echo JText::_('COM_KUNENA_A_MENU_MANAGER');?>"> <img src="<?php echo JUri::base(true); ?>/components/com_kunena/media/icons/large/menu.png"  align="middle" border="0" alt="" /><br/> <span> <?php echo JText::_('COM_KUNENA_A_MENU_MANAGER'); ?> </span></a>
			</div>
            </div>
            <div class="btn" style="float:left;background-color: white !important;background-image:none;">
			         <div class="icon" style="text-align:center;">
                     <a href="<?php echo KunenaRoute::_('administrator/index.php?option=com_kunena&view=tools&layout=purgerestatements') ?>" title="<?php echo JText::_('COM_KUNENA_A_PURGE_RE_STATEMENTS');?>"> <img src="<?php echo JUri::base(true); ?>/components/com_kunena/media/icons/large/purgerestatements.png"  align="middle" border="0" alt="" /><br/><span><?php echo JText::_('COM_KUNENA_A_PURGE_RE_STATEMENTS'); ?></span></a>
					 </div>
             </div>
             <div class="btn" style="float:left;background-color: white !important;background-image:none;">
			         <div class="icon" style="text-align:center;">
                    <a href="<?php echo KunenaRoute::_('administrator/index.php?option=com_kunena&view=report') ?>" title="<?php echo JText::_('COM_KUNENA_REPORT_SYSTEM');?>"> <img src="<?php echo JUri::base(true); ?>/components/com_kunena/media/icons/large/report.png"  align="middle" border="0" alt="" /><br/><span><?php echo JText::_('COM_KUNENA_REPORT_SYSTEM'); ?></span></a>
					 </div>
               </div>
               <div class="btn" style="float:left;background-color: white !important;background-image:none;">
			         <div class="icon" style="text-align:center;">
                    <a href="<?php echo KunenaRoute::_('administrator/index.php?option=com_kunena&view=install&task=prepare&start=1&'.JSession::getFormToken().'=1') ?>" title="<?php echo JText::_('COM_KUNENA_GIT_INSTALL');?>"> <img src="<?php echo JUri::base(true); ?>/components/com_kunena/media/icons/large/install.png"  align="middle" border="0" alt="" /><br/><span><?php echo JText::_('COM_KUNENA_GIT_INSTALL'); ?></span></a>
					 </div>
               </div>
                     </div>
            </div>
</div>
	<?php if ( $this->config->version_check ) : ?>
	<div class="kadmin-welcome">
		<?php echo $this->versioncheck; ?>
	</div>
	<?php endif; ?>
</div>
<div class="kadmin-footer center">
		<?php echo KunenaVersion::getLongVersionHTML (); ?>
	</div>
</div>
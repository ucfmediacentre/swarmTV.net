<div id="messagesTitle"><h1><?php echo $title ?></h1><br /></div>
<div id="main_pages_wrapper">
	<a href="../../pages/view/public/home">public : Home</a>&nbsp;|&nbsp;<a href="../../pages/view/public/sandpit">Sandpit</a>&nbsp;|&nbsp;<a href="../../pages/view/public/help">Help</a>
	<br />
	<a href="<?php echo base_url().'index.php/messages/view/'.$username ?>">View unread messages</a>&nbsp;|&nbsp;<a href="<?php echo base_url().'index.php/messages/view_all/'.$username ?>">View all messages</a>&nbsp;|&nbsp;<a id="add_message_form_trigger" href="#add_message_form">Create new message</a>
</div>

<div>
	<div id="recentChangesText"><?php echo $messagesList; ?></div>
</div>
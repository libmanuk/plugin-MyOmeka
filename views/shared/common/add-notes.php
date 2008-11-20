<?php
    // Commented out by Jeremy, 2008-09-11, because textarea using TinyMCE too wide for design.
    //echo js('tiny_mce/tiny_mce'); 
    //echo js('addNotes'); 
?>

<div id="myomeka-add-notes">
    <h2>My Notes</h2>
<a href="<?php echo my_omeka_get_path('help'); ?>" class="myomeka-help-link">Help</a>
	<a class="dashboard-link" href="<?php echo my_omeka_get_path(); ?>">Go to My Dashboard</a>
    <div id="myomeka-edit-note">
        <form action="<?php echo my_omeka_get_path("notes/edit"); ?>" id="myomeka-note-form" method="post" accept-charset="utf-8">    
            <div>
                <div class="field">
                    <label for="note">Your Notes:</label>
                    <div>Add notes to this item that you can refer to later.</div>
                    <textarea name="note" rows="5" cols="60"><?php echo $note->note; ?></textarea>
                </div>
                <input type="submit" id="myomeka-submit-note" value="Save Notes"/>
                <input type="hidden" name="item_id" value="<?php print $item->id;?>"/>
            </div>
        </form>
    </div>
</div>
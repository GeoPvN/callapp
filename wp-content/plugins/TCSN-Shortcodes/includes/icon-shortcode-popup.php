<?php
// look up for the path
require_once('tcsn_config.php');
// check for rights
if ( !is_user_logged_in() || !current_user_can('edit_posts') ) 
	wp_die(__( 'You are not allowed to be here', 'tcsn-shortcodes' ));
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Icons (Bootstrap)</title>
<script type="text/javascript" src="<?php echo get_option( 'siteurl' ) ?>/wp-content/plugins/TCSN-Shortcodes/js/jquery-1.9.1.min.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo get_option( 'siteurl' ) ?>/wp-includes/js/tinymce/tiny_mce_popup.js"></script>
<link rel="stylesheet" href="<?php echo get_option( 'siteurl' ) ?>/wp-content/plugins/TCSN-Shortcodes/css/tinymce.css" />
<script type="text/javascript">
var TCSNDialog = {
    local_ed: 'ed',
    init: function (ed, url) {
        TCSNDialog.local_ed = ed;
        tinyMCEPopup.resizeToInnerSize();
    },
    insert: function insertIcon(ed) {
		
        // set up variables to contain input values
		var type = jQuery('#dialogwindow select#field-type').val();
		var color = jQuery('#dialogwindow input#field-color').val();
        var size = jQuery('#dialogwindow input#field-size').val();

        var output = '';

        // setup the output of shortcode
        output = ' [icon ';

        output += 'type="' + type + '" ';
		output += 'color="' + color + '" ';
        if (size) {
            output += 'size="' + size + '" ';
		}
		output += ']' + TCSNDialog.local_ed.selection.getContent() + '[/icon] ';

        tinyMCEPopup.execCommand('mceReplaceContent', false, output);

        // Return
        tinyMCEPopup.close();
    }
};
tinyMCEPopup.onInit.add(TCSNDialog.init, TCSNDialog);
</script>
</head>
<body>
<div id="dialogwindow">
    <div class="sc-title">
        <h1>
            <?php _e('Create Icon', 'tcsn-shortcodes' ); ?>
        </h1>
    </div>
    <form action="/" method="get" accept-charset="utf-8">
        <p class="clearfix">
            <label for="field-type">Icon</label>
            <select name="field-type" id="field-type" size="1">
                <option value="adjust" selected="selected">Adjust</option>
                <option value="align-center">Align-center</option>
                <option value="align-justify">Align-justify</option>
                <option value="align-left">Align-left</option>
                <option value="align-right">Align-right</option>
                <option value="arrow-down">Arrow-down</option>
                <option value="Arrow-left">Arrow-left</option>
                <option value="arrow-right">Arrow-right</option>
                <option value="arrow-up">Arrow-up</option>
                <option value="asterisk">Asterisk</option>
                <option value="backward">Backward</option>
                <option value="ban-circle">Ban-circle</option>
                <option value="barcode">Barcode</option>
                <option value="bell">Bell</option>
                <option value="bold">Bold</option>
                <option value="book">Book</option>
                <option value="bookmark">Bookmark</option>
                <option value="briefcase">Briefcase</option>
                <option value="bullhorn">Bullhorn</option>
                <option value="calendar">Calendar</option>
                <option value="camera">Camera</option>
                <option value="certificate">Certificate</option>
                <option value="check">Check</option>
                <option value="chevron-down">Chevron-down</option>
                <option value="chevron-left">Chevron-left</option>
                <option value="chevron-right">Chevron-right</option>
                <option value="chevron-up">Chevron-up</option>
                <option value="circle-arrow-down">Circle-arrow-down</option>
                <option value="circle-arrow-left">Circle-arrow-left</option>
                <option value="circle-arrow-right">Circle-arrow-right</option>
                <option value="circle-arrow-up">Circle-arrow-up</option>
                <option value="cloud">Cloud</option>
                <option value="cloud-download">Cloud-download</option>
                <option value="cloud-upload">Cloud-upload</option>
                <option value="cog">Cog</option>
                <option value="collapse-down">Collapse-down</option>
                <option value="collapse-up">Collapse-up</option>
                <option value="comment">Comment</option>
                <option value="compressed">Compressed</option>
                <option value="copyright-mark">Copyright-mark</option>
                <option value="credit-card">Credit-card</option>
                <option value="cutlery">Cutlery</option>
                <option value="dashboard">Dashboard</option>
                <option value="download">Download</option>
                <option value="download-alt">Download-alt</option>
                <option value="earphone">Earphone</option>
                <option value="edit">Edit</option>
                <option value="eject">Eject</option>
                <option value="envelope">Envelope</option>
                <option value="euro">Euro</option>
                <option value="exclamation-sign">Exclamation-sign</option>
                <option value="expand">Expand</option>
                <option value="export">Export</option>
                <option value="eye-close">Eye-close</option>
                <option value="eye-open">Eye-open</option>
                <option value="facetime-video">Facetime-video</option>
                <option value="fast-backward">Fast-backward</option>
                <option value="fast-forward">Fast-forward</option>
                <option value="file">File</option>
                <option value="film">Film</option>
                <option value="filter">Filter</option>
                <option value="fire">Fire</option>
                <option value="flag">Flag</option>
                <option value="flash">Flash</option>
                <option value="floppy-disk">Floppy-disk</option>
                <option value="floppy-open">Floppy-open</option>
                <option value="floppy-remove">Floppy-remove</option>
                <option value="floppy-save">Floppy-save</option>
                <option value="floppy-saved">Floppy-saved</option>
                <option value="folder-close">Folder-close</option>
                <option value="folder-open">Folder-open</option>
                <option value="font">Font</option>
                <option value="forward">Forward</option>
                <option value="fullscreen">Fullscreen</option>
                <option value="gbp">gbp</option>
                <option value="gift">Gift</option>
                <option value="glass">Glass</option>
                <option value="globe">Globe</option>
                <option value="hand-down">Hand-down</option>
                <option value="hand-left">Hand-left</option>
                <option value="hand-right">Hand-right</option>
                <option value="hand-up">Hand-up</option>
                <option value="hd-video">HD-video</option>
                <option value="hdd">HDD</option>
                <option value="header">Header</option>
                <option value="headphones">Headphones</option>
                <option value="heart">Heart</option>
                <option value="heart-empty">Heart-empty</option>
                <option value="home">Home</option>
                <option value="import">Import</option>
                <option value="inbox">Inbox</option>
                <option value="indent-left">Indent-left</option>
                <option value="indent-right">Indent-right</option>
                <option value="info-sign">Info-sign</option>
                <option value="italic">Italic</option>
                <option value="leaf">Leaf</option>
                <option value="link">Link</option>
                <option value="list">List</option>
                <option value="list-alt">List-alt</option>
                <option value="lock">Lock</option>
                <option value="log-in">Log-in</option>
                <option value="log-out">Log-out</option>
                <option value="magnet">Magnet</option>
                <option value="map-marker">Map-marker</option>
                <option value="minus">Minus</option>
                <option value="minus-sign">Minus-sign</option>
                <option value="move">Move</option>
                <option value="music">Music</option>
                <option value="new-window">New-window</option>
                <option value="off">Off</option>
                <option value="ok">Ok</option>
                <option value="ok-circle">Ok-circle</option>
                <option value="ok-sign">Ok-sign</option>
                <option value="open">Open</option>
                <option value="paperclip">Paperclip</option>
                <option value="pause">Pause</option>
                <option value="pencil">Pencil</option>
                <option value="phone">Phone</option>
                <option value="phone-alt">Phone-alt</option>
                <option value="picture">Picture</option>
                <option value="plane">Plane</option>
                <option value="play">Play</option>
                <option value="play-circle">Play-circle</option>
                <option value="plus">Plus</option>
                <option value="plus-sign">Plus-sign</option>
                <option value="print">Print</option>
                <option value="pushpin">Pushpin</option>
                <option value="qrcode">QR code</option>
                <option value="question-sign">Question-sign</option>
                <option value="random">Random</option>
                <option value="record">Record</option>
                <option value="refresh">Refresh</option>
                <option value="registration-mark">Registration-mark</option>
                <option value="remove">Remove</option>
                <option value="remove-circle">Remove-circle</option>
                <option value="remove-sign">Remove-sign</option>
                <option value="repeat">Repeat</option>
                <option value="resize-full">Resize-full</option>
                <option value="resize-horizontal">Resize-horizontal</option>
                <option value="resize-small">Resize-small</option>
                <option value="resize-vertical">Resize-vertical</option>
                <option value="retweet">Retweet</option>
                <option value="road">Road</option>
                <option value="save">Save</option>
                <option value="saved">Saved</option>
                <option value="screenshot">Screenshot</option>
                <option value="sd-video">SD-video</option>
                <option value="search">Search</option>
                <option value="send">Send</option>
                <option value="share">Share</option>
                <option value="share-alt">Share-alt</option>
                <option value="shopping-cart">Shopping-cart</option>
                <option value="signal">Signal</option>
                <option value="sort">Sort</option>
                <option value="sort-by-alphabet">Sort-by-alphabet</option>
                <option value="sort-by-alphabet-alt">Sort-by-alphabet-alt</option>
                <option value="sort-by-attributes">Sort-by-attributes</option>
                <option value="sort-by-attributes-alt">Sort-by-attributes-alt</option>
                <option value="sort-by-order">Sort-by-order</option>
                <option value="sort-by-order-alt">Sort-by-order-alt</option>
                <option value="sound-5-1">Sound-5-1</option>
                <option value="sound-6-1">Sound-6-1</option>
                <option value="sound-7-1">Sound-7-1</option>
                <option value="sound-dolby">Sound-dolby</option>
                <option value="sound-stereo">Sound-stereo</option>
                <option value="star">Star</option>
                <option value="star-empty">Star-empty</option>
                <option value="stats">Stats</option>
                <option value="step-backward">Step-backward</option>
                <option value="step-forward">Step-forward</option>
                <option value="stop">Stop</option>
                <option value="subtitles">Subtitles</option>
                <option value="tag">Tag</option>
                <option value="tags">Tags</option>
                <option value="tasks">Tasks</option>
                <option value="text-height">Text-height</option>
                <option value="text-width">Text-width</option>
                <option value="th">th</option>
                <option value="th-large">th-large</option>
                <option value="th-list">th-list</option>
                <option value="thumbs-down">Thumbs-down</option>
                <option value="thumbs-up">Thumbs-up</option>
                <option value="time">Time</option>
                <option value="tint">Tint</option>
                <option value="tower">Tower</option>
                <option value="transfer">Transfer</option>
                <option value="trash">Trash</option>
                <option value="tree-conifer">Tree-conifer</option>
                <option value="tree-deciduous">Tree-deciduous</option>
                <option value="unchecked">Unchecked</option>
                <option value="upload">Upload</option>
                <option value="usd">USD</option>
                <option value="user">User</option>
                <option value="volume-down">Volume-down</option>
                <option value="volume-off">Volume-off</option>
                <option value="volume-up">Volume-up</option>
                <option value="warning-sign">Warning-sign</option>
                <option value="wrench">Wrench</option>
                <option value="zoom-in">Zoom-in</option>
                <option value="zoom-out">Zoom-out</option>
            </select>
        </p>
        <p class="clearfix">
            <label for="field-color">Icon color</label>
            <input type="text" name="field-color" value="black" id="field-color" />
        </p>
        <div class="sc-note clearfix">* Can be given as black, yellow or #d9b444</div>
        <p class="clearfix">
            <label for="field-size">Icon size</label>
            <input type="text" name="field-size" value="" id="field-size" />
        </p>
        <div class="sc-note clearfix">* Can be in 'px' or 'em'</div>
    </form>
    <div class="clearfix"></div>
    <a class="mybtn" href="javascript:TCSNDialog.insert(TCSNDialog.local_ed)">Insert Icon</a> </div>
</body>
</html>
<?php header("Content-type: text/css; charset: UTF-8");
require_once('../../../../../../../wp-load.php'); ?>
@media screen and ( max-width: 782px ) {

/**
 * Content containers
 * ----------------------------------------------------------------------------
 */
 
body {
	min-width: 240px;
	overflow-x: hidden;
}
body * {
	-webkit-tap-highlight-color: rgba(0,0,0,0) !important;
}
#wpwrap {
		<?php require_once('../../../../css/_lib/bg.php');
	if( infusion_mobeus_get_option('enable_img_bg') == '' ||   infusion_mobeus_get_option('enable_img_bg') == 'off' || infusion_mobeus_get_option('enable_img_bg') !== 'on') { 
  
    	if( infusion_mobeus_get_option('custom_colour_bg') !== '' ) { 
			
			echo('background: '.infusion_mobeus_get_option('custom_colour_bg').';');}
		
		else{ echo('background: #F0FCFC;');};}; ?>
	overflow-x: hidden;
}
#wpcontent, .auto-fold #wpcontent {
	position: relative;
	margin-left: 0;
	padding-left: 10px;
}
.wrap {
	margin-right: 10px;
}
.col-wrap {
	padding: 0;
}
.menu #adminmenuwrap {
	position: relative;
	z-index: auto;
	top: 0;
}

/**
 * Hidden Elements
 * ----------------------------------------------------------------------------
 */
#screen-meta, #screen-meta-links, #collapse-menu,
.post-format-select {
	display: none;
}


/**
 * Input Elements
 * ----------------------------------------------------------------------------
 */
textarea {
	-webkit-appearance: none;
}
input[type=text], input[type=search],
input[type=password], input[type=number] {
	-webkit-appearance: none;
	padding: 6px 10px;
}
input[type=checkbox], .widefat th input[type=checkbox] {
	-webkit-appearance: none;
	padding: 10px;
}
.widefat th input[type=checkbox] {
	margin-bottom: 8px;
}
input[type=checkbox]:checked:before, .widefat th input[type=checkbox]:before {
	font: normal 30px/1 'Dashicons';
	margin: -3px -5px;
}
input[type=radio],
input[type=checkbox] {
	height: 25px;
	width: 25px;
}
.wp-admin p input[type=checkbox],
.wp-admin p input[type=radio] {
	margin-top: -3px;
}
input[type=radio]:checked:before {
	vertical-align: middle;
	width: 9px;
	height: 9px;
	margin: 7px;
	line-height: 16px;
}
.wp-upload-form input[type=submit] {
	margin-top: 10px;
}

#wpbody select {
	height: 36px;
	font-size: 16px;
}
.wp-core-ui .button,
input#publish,
input#save-post,
a.preview {
	padding: 10px 14px;
	line-height: 1;
	font-size: 14px;
	vertical-align: middle;
	height: auto;
	margin-bottom: 4px;
}
#media-upload.wp-core-ui .button {
	padding: 0 10px 1px;
	height: 24px;
	line-height: 22px;
	font-size: 13px;
}
.wrap .add-new-h2, .wrap .add-new-h2:active  {
	padding: 10px 15px;
	font-size: 14px;
}
#createuser .form-field input {
	width: 100%;
}

/**
 * Feedback Messages
 * ----------------------------------------------------------------------------
 */
.wrap div.updated, .wrap div.error, .media-upload-form div.error {
	margin: 20px 0 10px 0;
	padding: 5px 10px;
	font-size: 14px;
	line-height: 175%;
}

/**
 * Sidebar Adjustments
 * ----------------------------------------------------------------------------
 */
.auto-fold #adminmenu,
.auto-fold #adminmenuback,
.auto-fold #adminmenuwrap {
	position: absolute;
	top: 0;
	left: 0;
	z-index: 100;
}
.auto-fold #adminmenuback,
.auto-fold #adminmenuwrap {
	left: -200px;
}
.auto-fold #adminmenuwrap,
.auto-fold #adminmenu,
.auto-fold #adminmenuback {
	width: 190px;
}
.auto-fold #adminmenu li.menu-top {
	width: 100%;
}

/* Let the menubar scroll independently of the main column */

.auto-fold #adminmenuwrap {
	height: 100%;
	position: fixed;
	overflow: hidden;
	overflow-y: scroll;
	top: 46px;

	height: -webkit-calc(100% - 46px);
	height: calc(100% - 46px);

	-webkit-box-shadow: inset 2px 0 0 rgba( 0,0,0,.1 );
	box-shadow: inset 2px 0 0 rgba( 0,0,0,.1 );

	-moz-box-sizing: border-box;
	-webkit-box-sizing: border-box;
	box-sizing: border-box;

	-webkit-overflow-scrolling: touch;
}

/* Experimental animations for sidebar */

.auto-fold #adminmenu,
.auto-fold #adminmenuback,
.auto-fold #adminmenuwrap {
	-moz-transition: left .2s ease-in-out;
	-webkit-transition: left .2s ease-in-out;
	transition: left .2s ease-in-out;
}

#wpbody {
	-moz-transition: right .2s ease-in-out;
	-webkit-transition: right .2s ease-in-out;
	transition: right .2s ease-in-out;
}

.auto-fold #adminmenu {
	-webkit-opacity:.10;
	-moz-opacity:.10;
	opacity:.10;
	-moz-transition: left .2s ease-in-out, -moz-opacity .3s ease-in;
	-webkit-transition: left .2s ease-in-out, -webkit-opacity .3s ease-in;
	transition: left .2s ease-in-out, opacity .3s ease-in;
}

.auto-fold .resp-open #adminmenu {
	-moz-opacity:1;
	-webkit-opacity:1;
	opacity:1;
}

/* Resize the admin menu items to a comfortable touch size */
.auto-fold #adminmenu li a {
	font-size: 16px;
	padding: 5px;
}
.auto-fold #adminmenu li.menu-top .wp-submenu > li > a {
	padding: 10px 10px 10px 20px;
}

/* Restore the menu names */
.auto-fold #adminmenu .wp-menu-name {
	display: block;
	margin-left: 35px;
}

/* Switch the arrow side */
.auto-fold ul#adminmenu a.wp-has-current-submenu:after,
.auto-fold ul#adminmenu > li.current > a.current:after {
	border-width: 8px;
	margin-top: -8px;
}

/* Make the submenus appear correctly when tapped. */
#adminmenu .wp-submenu {
	position: relative;
	display: none;
}
.auto-fold #adminmenu .selected .wp-submenu,
.auto-fold #adminmenu .wp-menu-open .wp-submenu {
	position: relative;
	display: block;
	top: 0;
	left: -1px;
	-webkit-box-shadow: none;
	box-shadow: none;
}

.auto-fold #adminmenu .selected .wp-submenu:after,
.auto-fold #adminmenu .wp-menu-open .wp-submenu:after {
	display: none;
}

.auto-fold #adminmenu .opensub .wp-submenu {
	display: none;
}
.auto-fold #adminmenu .selected .wp-submenu {
	display: block;
}

/* Remove submenu headers and adjust sub meu*/
#adminmenu .wp-submenu .wp-submenu-head {
	display: none;
}

/* Remove the hover styles so touch scrolling doesn't activate them */
#adminmenu li.menu-top:hover,
#adminmenu li.menu-top:hover a {
	background-color: transparent;
}
#adminmenu li.menu-top:hover a {
	color: #09C;
}
#adminmenu li:hover div.wp-menu-image:before {
	color: #09C;
}

#adminmenu li.menu-top:hover,
#adminmenu li.menu-top:hover a {
	background-color: transparent;
}

#adminmenu li.menu-top.wp-has-current-submenu:hover > a {
	background-color: #09F;
	color: #fff;
}

/* Re-add styles on selected menus */
#adminmenu li.menu-top.selected,
#adminmenu li.menu-top.selected > a {
	background-color: #CCC;
	color: #2ea2cc;
}


/**
 * Hamburger Button / Sidebar Toggle
 * ----------------------------------------------------------------------------
 */
#resp-toggle {
	position: fixed;
	top: 7px;
	left: 5px;
	padding-right: 10px;
	z-index: 99999;
	border: none;
	box-sizing: border-box;
	-moz-box-sizing: border-box;

}
#wpadminbar #wp-admin-bar-root-default {
	padding-left: 50px;
}
.wrap .icon32 + h2 {
	margin-top: -2px;
}
#resp-toggle a {
	display: block;
	padding: 0;
	overflow: hidden;
	outline: none;
	text-decoration: none;

	border: 1px solid transparent;
	background: none;
}

#resp-toggle a:before {
	color: #000;
	content: '\f228';
	display: inline-block;
	float: left;
	font: normal 25px/1 'Dashicons';
	vertical-align: middle;
	outline: none;
	margin: 0;
	-webkit-font-smoothing: antialiased;
	height: 32px;
	width: 39px;
	padding: 3px;
	border: none;
	text-decoration: none;
	box-sizing: border-box;
	-moz-box-sizing: border-box;
}

.resp-open #resp-toggle a {
	border: 1px solid #A8A8A8;
	background: #A8A8A8;
	border-left-color: #A8A8A8;
	border-right-color: #A8A8A8;
	border-bottom-color: #A8A8A8;
	border-top-color: #A8A8A8;
	border-radius:4px;
}

.resp-open #wpbody {
	right: -190px;
}
.auto-fold .resp-open #adminmenuback,
.auto-fold .resp-open #adminmenuwrap {
	left: 0;
}

/**
 * General New Post Form
 * ----------------------------------------------------------------------------
 */
#titlediv #title {
	padding: 8px;
}
#titlediv #title-prompt-text, #wp-fullscreen-title-prompt-text {
	padding: 10px 10px;
}

.post-format-options {
	padding-right: 0;
}

.post-format-options a {
	margin-right: 5px;
	margin-bottom: 5px;
	min-width: 52px;
}

.post-format-options .post-format-title {
	font-size: 11px;
}

.post-format-options a div {
	height: 28px;
	width: 28px;
}

.post-format-options a div:before {
	font-size: 26px !important;
}

/* General Metabox */
.postbox {
	font-size: 14px;
}
#poststuff h3, .metabox-holder h3 {
	padding: 12px;
}
.postbox .handlediv {
	margin-top: 3px;
}

/* Publish Metabox Options */
#post-visibility-select {
	line-height: 280%;
}
.wp-core-ui .save-post-status.button {
	top: 16px;
	position: relative;
	margin: 0 10px;
}
.wp-core-ui .save-post-visibility,
.wp-core-ui .save-timestamp {
	vertical-align: middle;
	margin-right: 15px;
}
.timestamp-wrap select#mm {
	display: block;
	width: 100%;
	margin-bottom: 10px;
}
.timestamp-wrap #jj, .timestamp-wrap #aa,
.timestamp-wrap #hh, .timestamp-wrap #mn {
	padding: 12px 3px;
	font-size: 14px;
	margin-bottom: 5px;
	width: auto;
	text-align: center;
}

/* Categories Metabox */
ul.category-tabs {
	margin: 30px 0 15px;
}
ul.category-tabs li.tabs {
	padding: 15px;
}
ul#categorychecklist li {
	margin-bottom: 15px;
}
.category-add input[type=text], .category-add select {
	max-width: none;
	margin-bottom: 15px;
}

/* Tags Metabox */
.tagsdiv .newtag,
.press-this .tagsdiv .newtag {
	width: 100%;
	padding: 25px 10px;
	margin-bottom: 15px;
}
.tagchecklist {
	margin: 25px 10px;
}
.tagchecklist span {
	font-size: 16px;
	line-height: 120%;
}

/**
 * Revisions
 * ----------------------------------------------------------------------------
 */
#diff-next-revision,
#diff-previous-revision {
	margin-top: -1em;
}
table.diff {
	-ms-word-break: break-all;
	word-break: break-all;
	word-wrap: break-word;
}

/**
 * TinyMCE Adjustments
 * ----------------------------------------------------------------------------
 */
.mceToolbar * {
    white-space: normal !important;
}
.mceToolbar tr,
.mceToolbar td {
    float:left !important;
}
.wp_themeSkin a.mceButton {
	width: 30px;
	height: 30px;
}
.wp_themeSkin .mceButton .mceIcon {
	margin-top: 5px;
	margin-left: 5px;
}
.wp_themeSkin .mceSplitButton {
	margin-top: 1px;
}
.wp_themeSkin .mceSplitButton td a.mceAction {
	padding-top: 6px;
	padding-bottom: 6px;
	padding-left: 6px;
	padding-right: 3px;
}
.wp_themeSkin .mceSplitButton td a.mceOpen,
.wp_themeSkin .mceSplitButtonEnabled:hover td a.mceOpen {
	padding-top: 6px;
	padding-bottom: 6px;
	background-position: 1px 6px;
}
.wp_themeSkin table.mceListBox {
	margin: 5px;
}

div.quicktags-toolbar input {
	padding: 10px 20px;
}

#wp-content-editor-tools {
	padding-top: 20px;
}

a.wp-switch-editor {
	font-size: 16px;
	margin: -12px 0 0 5px;
	padding: 12px 15px !important;
}

#wp-content-media-buttons {
	position: absolute;
	top: 5px;
}
#wp-content-media-buttons a {
	padding: 10px 15px 12px;
}

#content_wp_fullscreen {
	display: none;
}

.misc-pub-section {
	padding: 20px 10px 20px;
}
.misc-pub-section > a {
	float: right;
	font-size: 16px;
}

#delete-action,
#publishing-action {
	line-height: 47px;
}

/**
 * Subsubsub Nav
 * ----------------------------------------------------------------------------
 */
.subsubsub {
	font-size: 16px;
	text-align: center;
	margin-bottom: 15px;
}

/**
 * WP List Table Options & Filters
 * ----------------------------------------------------------------------------
 */
.tablenav {
	height: auto;
}
.tablenav.top {
	margin: 0;
}
.tablenav.bottom {
	position: relative;
	margin-top: 15px;
}
.tablenav br {
	display: none;
}
.tablenav br.clear {
	display: block;
}
p.search-box {
	float: none;
	clear: both;
	margin-top: 35px;
}
p.search-box input[name="s"] {
	height: auto;
	float: none;
	width: 100%;
	margin-bottom: 10px;
	-webkit-appearance: none;
}
.tablenav.top .actions, .view-switch {
	display: none;
}

/* Pagination */
.tablenav.top .displaying-num {
	display: none;
}
.tablenav.bottom .displaying-num {
	position: absolute;
	right: 0;
	top: 10px;
	font-size: 14px;
}
.tablenav-pages {
	width: 100%;
	text-align: center;
	margin: 0 0 25px;
}
.tablenav.bottom .tablenav-pages {
	margin-top: 25px;
}
.tablenav.top .tablenav-pages.one-page {
	display: none;
}
.tablenav.bottom .tablenav-pages.one-page {
	margin: 15px 0 0 0;
	height: 0;
}
.tablenav-pages .pagination-links .paging-input {
	font-size: 18px;
}
.tablenav-pages .pagination-links a {
	padding: 8px 20px 11px;
	font-size: 18px;
	background: rgba( 0, 0, 0, 0.05 );
}
.tablenav-pages .pagination-links .current-page {
	padding: 10px;
	font-size: 14px;
}

/**
 * WP List Table Adjustments
 * ----------------------------------------------------------------------------
 */

/* General */
.form-wrap > p {
	display: none;
}
.comment-count {
	font-size: 14px;
}

/* Posts */
.column-title {
	width: 85%;
}
.fixed .column-comments, .widefat .check-column {
	width: 35px;
}
.fixed .column-date,
.column-categories, .column-tags {
	display:none;
}


.widefat thead .check-column, .widefat tfoot .check-column {
	padding: 10px 0 10px;
}
.widefat * {
	word-wrap: normal;
}

/* Categories */
.fixed .column-description {
	display: none;
}
.fixed .column-posts {
	width: 50px;
}
.fixed .column-slug {
	width: 30%;
}

/* Comments */
.fixed .column-response {
	width: 35%;
}

/* Media */
.fixed .column-parent {
	display: none;
}

/* Comments */
.fixed .column-email, .fixed .column-name {
	display: none;
}
.fixed .column-role {
 	width: 35%;
}

/* Plugins */
.plugins .column-description {
	width: 70%;
}
#wpbody-content .plugins .plugin-title {
	white-space: normal;
	width: 30%;
}

/* Updates */
#wpbody-content #update-themes-table .plugin-title {
	width: auto;
}

/**
 * Form Tables
 * ----------------------------------------------------------------------------
 */
.form-table {
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}
.form-table th,
.form-table td {
	display: block;
	width: auto;
	vertical-align: middle;
}
textarea,
input {
	font-size: 16px;
}
.form-table td input[type="text"],
.form-table td input[type="password"],
.form-table td select,
.form-table td textarea,
.form-table span.description,
#profile-page .form-table textarea {
	width: 100%;
	font-size: 16px;
	line-height: 1.5;
	padding: 7px 10px;
	display: block;
	max-width: none;
	box-sizing: border-box;
	-mox-box-sizing: border-box;
}
input[type=text].small-text,
input[type=search].small-text,
input[type=password].small-text,
input[type=number].small-text,
input[type="number"].small-text,
.form-table input[type=text].small-text {
	width: auto;
	max-width: 55px;
	display: inline;
	padding: 3px 6px;
	margin: 0 3px;
}
#pass-strength-result {
	width: 100%;
	box-sizing: border-box;
	-mox-box-sizing: border-box;
	padding: 8px;
}
.form-table span.description {
	padding: 4px 0 0;
	line-height: 1.4em;
}
.form-table th {
	padding-top: 10px;
	padding-bottom: 0;
	border-bottom: 0;
}
.form-table td {
	padding-top: 8px;
	padding-left: 0;
}
.form-table input.regular-text {
	width: 100%;
}
.form-table label {
	font-size: 14px;
}

.form-table fieldset label {
	display: block;
}

#utc-time {
	margin-top: 10px;
}

#utc-time,
#local-time {
	display: block;
	float: none;
	padding: 0;
	line-height: 2;
}


/**
 * Add/Edit Media
 * ----------------------------------------------------------------------------
 */

.wp_attachment_details label[for="content"] {
	font-size: 14px;
	line-height: 1.5em;
}

#media-items {
	width: 100%;
}

.media-modal {
	width: auto;
}

.media-frame {
	overflow: auto;
}

.media-frame-menu {
	position: relative;
	width: auto;
}

.media-menu {
	border-right: none;
	position: relative;
	border-bottom: 1px solid #dddddd;
	overflow: hidden;
}

.media-menu .separator {
	display: none;
}

.media-menu a {
	float: left;
	width: 40%;
}

.media-frame-router, .media-frame-content, .media-frame-toolbar {
	left: auto;
	right: auto;
	top: auto;
	bottom: auto;
	position: relative;
}

.media-frame-title {
	top: auto;
	left: auto;
	right: 0;
	height: auto;
}

.media-frame-router {
	margin-top: 10px;
}

.media-frame-title h1 {
	line-height: 3;
	font-size: 18px;
}

.media-router {
	bottom: -2px;
}

.media-frame-content {
	min-height: 300px;
}

.media-toolbar-primary, .media-toolbar-secondary {
	height: auto;
}

.uploader-inline h3 {
	margin: 0 0 .8em 0;
}

.uploader-inline-content {
	top: auto;
}

.uploader-inline-content .upload-ui {
	margin: 0;
}

.attachments-browser .attachments, .attachments-browser .uploader-inline {
	position: relative;
	margin-right: 180px;
}


/**
 * Links
 * ----------------------------------------------------------------------------
 */

.link-manager-php #posts-filter {
	margin-top: 25px;
}

.link-manager-php .tablenav.bottom {
	overflow: hidden;
}

.links-table #link_rel {
	max-width: none;
}

.links-table th,
.links-table td {
	padding: 10px 0;
}

/**
 * Nav Menus
 * ----------------------------------------------------------------------------
 */

body.nav-menus-php {
	min-width: 0 !important;
}
#nav-menus-frame {
	margin-left: 0;
	float: none;
	width: 100%;
}
#wpbody-content #menu-settings-column {
	display: block;
	width: 100%;
	float: none;
	margin-left: 0;
}
.nav-menus-php .howto span {
	margin-top: 14px;
}
#menu-management-liquid {
	margin-top: 25px;
}
ul.add-menu-item-tabs {
	margin: 30px 0 15px;
}
ul.add-menu-item-tabs li {
	padding: 15px;
}
#side-sortables .add-menu-item-tabs {
	margin-bottom: 15px;
}
.nav-menus-php .item-controls .item-type {
	margin-top: 2px;
}
.nav-menus-php .major-publishing-actions .publishing-action {
	margin-top: 6px;
}
.nav-menus-php .delete-action {
	font-size: 14px;
	line-height: 50px;
	margin-top: 12px;
}


/**
 * Theme Management Page
 * ----------------------------------------------------------------------------
 */
#current-theme.has-screenshot {
	padding: 0;
	clear: both;
}
#current-theme img {
	float: none;
	margin-left: 0;
	margin-bottom: 15px;
}
#current-theme.has-screenshot img.hide-if-no-customize {
	display: block;
}
.available-theme .action-links .delete-theme {
	float: none;
	margin: 0;
	padding: 0;
	clear: both;
}
.available-theme .action-links .delete-theme a {
	padding: 0;
}

/**
 * Widget Management Page (Needs UX work on mobile)
 * ----------------------------------------------------------------------------
 */
div.widget-liquid-left, div.widget-liquid-right,
div#widgets-left, div#widgets-right {
	float: none;
	clear: none;
	margin: 0;
	width: auto;
}

/**
 * Editor Pages
 * ----------------------------------------------------------------------------
 */
#templateside {
	float: none;
	width: auto;
}
#templateside li {
	margin: 0;
}

#templateside li a {
	display: block;
	padding: 5px;
}
#templateside .highlight {
	padding: 5px;
	margin-left: -5px;
	margin-top: -5px;
}
#template div {
	float: none;
	margin: 0;
	width: auto;
}
#template textarea {
	width: 100%;
}
.fileedit-sub .alignright {
	margin-top: 15px;
}


/**
 * Plugin/Theme Management Page
 * ----------------------------------------------------------------------------
 */

.wp-list-table.plugins {
	position: relative;
	margin-top: 35px;
	margin-bottom: 50px;
}

.wp-list-table.plugins thead .column-description,
#wpbody-content .wp-list-table.plugins tfoot .column-description,
.wp-list-table.plugins th#description {
	display: none;
}

#wpbody-content .wp-list-table.plugins,
#wpbody-content .wp-list-table.plugins thead,
#wpbody-content .wp-list-table.plugins tbody,
#wpbody-content .wp-list-table.plugins tr,
#wpbody-content .wp-list-table.plugins .column-description,
#wpbody-content .wp-list-table.plugins .plugin-title,
#wpbody-content .wp-list-table.plugins .theme-title,
#wpbody-content .wp-list-table.plugins .plugin-update,
#wpbody-content .wp-list-table.plugins .manage-column.column-name {
	display: block;
	width: auto;
}

.wp-list-table.plugins thead,
.wp-list-table.plugins tfoot {
	position: absolute;
	top: -35px;
	left: 0;
	right: 0;
	width: auto;
	height: 35px;
}

.wp-list-table.plugins tfoot {
	bottom: -35px;
	top: auto;
}

.active, .inactive {
	padding-top: 0;
}
.wp-list-table.plugins .plugin-title,
.wp-list-table.plugins .theme-title {
	padding-top: 13px;
	padding-bottom: 4px;
}

.plugins tr.active + tr.inactive th.check-column,
.plugins tr.active + tr.inactive td,
.wp-list-table.plugins .plugin-title,
.wp-list-table.plugins .theme-title,
.wp-list-table.plugins tbody th {
	box-shadow: none;
	-webkit-box-shadow: none;
}

.plugins tbody {
	padding: 1px 0 0;
}

/* Set drop shadow again per original mp6 settings at line 1265 of colors-mp6.css in r687296, remove when original styles have been corrected */
.plugins tr.active + tr.inactive td.column-description {
	-webkit-box-shadow: inset 0 -1px 0 rgba(0,0,0,0.1);
	-moz-box-shadow: inset 0 -1px 0 rgba(0,0,0,0.1);
	-ms-box-shadow: inset 0 -1px 0 rgba(0,0,0,0.1);
	-o-box-shadow: inset 0 -1px 0 rgba(0,0,0,0.1);
	box-shadow: inset 0 -1px 0 rgba(0,0,0,0.1);
}

.plugins tr.active + tr.inactive th.check-column,
.plugins tr.active + tr.inactive td {
	border-top: none;
}

.wp-list-table.plugins .column-description {
	padding-top: 0;
}


.wp-list-table.plugins .manage-column.column-name,
.wp-list-table.plugins .column-description,
.wp-list-table.plugins .plugin-title,
.wp-list-table.plugins .theme-title {
	padding-right: 12px;
	padding-left: 46px;
}

/*
.wp-list-table.plugins .column-description .plugin-version-author-uri,
.wp-list-table.plugins .column-description .plugin-description {
	padding-left: 35px;
}
*/

.wp-list-table.plugins tr {
	position: relative;
}

.wp-list-table.plugins th.check-column,
.wp-list-table.plugins tr.update th.check-column {
	position: absolute;
	height: auto;
	top: 0;
	bottom: 0;
	left: 0;
	padding-left: 2px;
	padding-top: 18px;
}

.wp-list-table.plugins thead th.check-column,
.wp-list-table.plugins tfoot th.check-column {
	padding-left: 3px;
	padding-top: 11px;
	background: none;
}

.widefat tbody th.check-column input[type="checkbox"] {
	margin-top: -3px;
	margin-left: 9px;
}
.wp-list-table.plugins .active .check-column input,
.wp-list-table.plugins .update .check-column input {
	margin-left: 6px;
}

.wp-list-table.plugins thead .check-column input,
.wp-list-table.plugins tfoot .check-column input {
	margin-top: -6px;
}

.wp-list-table.plugins .active th.check-column {
	background: none;
}

.wp-list-table.plugins .plugin-title strong,
.wp-list-table.plugins .theme-title strong {
	font-size: 1.4em;
	line-height: 1.6em;
}


/**
 * Dashboard
 * ----------------------------------------------------------------------------
 */

#dashboard_recent_comments #the-comment-list .comment-item .avatar {
	height: 30px;
	width: 30px;
	margin: 4px 10px 5px 0;
}

/**
 * Press This
 * ----------------------------------------------------------------------------
 */

.press-this #wp-content-media-buttons {
	top: 10px;
}

/**
 * Moderate Comment
 * ----------------------------------------------------------------------------
 */

.comment-ays {
	border-bottom: none;
}

/**
 * Footer
 * ----------------------------------------------------------------------------
 */

#wpfooter {
	display: none;
}


/**
 * Jetpack
 * ----------------------------------------------------------------------------
 */
.toplevel_page_jetpack .wrap,
.module-container,
#jp-header {
	min-width: 0;
}

/**
 * Akismet
 * ----------------------------------------------------------------------------
 */
.jetpack_page_akismet-key-config .wrap .narrow,
.plugins_page_akismet-key-config  .wrap .narrow,
#akismet-conf {
	width: auto !important;
}
#comments-form .checkforspam {
	display: none;
}

/**
 * RTL
 */
.rtl #wpcontent, .rtl.auto-fold #wpcontent {
	margin-right: 0;
	margin-left: auto;
	padding-right: 10px;
	padding-left: inherit;
}
.rtl .wrap {
	margin-left: 10px;
	margin-right: inherit;
}
.rtl.auto-fold #adminmenu,
.rtl.auto-fold #adminmenuback,
.rtl.auto-fold #adminmenuwrap {
	right: 0;
	left: auto;
}
.rtl.auto-fold #adminmenuback,
.rtl.auto-fold #adminmenuwrap {
	right: -200px;
	left: auto;
}

.rtl.auto-fold #adminmenu,
.rtl.auto-fold #adminmenuback,
.rtl.auto-fold #adminmenuwrap {
	-moz-transition: right .2s ease-in-out;
	-webkit-transition: right .2s ease-in-out;
	transition: right .2s ease-in-out;
}
.rtl #wpbody {
	-moz-transition: left .2s ease-in-out;
	-webkit-transition: left .2s ease-in-out;
	transition: left .2s ease-in-out;
}
.rtl.auto-fold #adminmenu {
	-moz-transition: right .2s ease-in-out, -moz-opacity .3s ease-in;
	-webkit-transition: right .2s ease-in-out, -webkit-opacity .3s ease-in;
	transition: right .2s ease-in-out, opacity .3s ease-in;
}
.rtl.auto-fold #adminmenu .wp-menu-name {
	margin-left: auto;
	margin-right: 35px;
}
.rtl.auto-fold #adminmenu .selected .wp-submenu,
.rtl.auto-fold #adminmenu .wp-menu-open .wp-submenu {
	right: -1px;
	left: auto;
}

.rtl #resp-toggle {
	right: 5px;
	left: auto;
	padding-left: 10px;
	padding-right: 0;
}
.rtl #wpadminbar #wp-admin-bar-root-default {
	padding-right: 50px;
	padding-left: inherit;
}
.rtl #resp-toggle a:before {
	float: right;
}
.rtl .resp-open #wpbody {
	right: auto;
	left: -190px;
}
.rtl.auto-fold .resp-open #adminmenuback,
.rtl.auto-fold .resp-open #adminmenuwrap {
	right: 0;
	left: auto;
}

.rtl .post-format-options {
	padding-left: 0;
	padding-right: 8px;
}
.rtl .post-format-options a {
	margin-left: 5px;
	margin-right: auto;
	float: right;
}
.rtl .wp-core-ui .save-post-visibility,
.rtl .wp-core-ui .save-timestamp {
	margin-left: 15px;
	margin-right: auto;
}
.rtl .mceToolbar tr,
.rtl .mceToolbar td {
    float:right !important;
}
.rtl .wp_themeSkin .mceButton .mceIcon {
	margin-right: 5px;
	margin-left: auto;
}
.rtl .wp_themeSkin .mceSplitButton td a.mceAction {
	padding-left: 3px;
	padding-right: 6px;
}

.rtl .misc-pub-section > a {
	float: left;
}

.rtl .tablenav.bottom .displaying-num {
	left: 0;
	right: auto;
}
.rtl .form-table td {
	padding-right: 0;
	padding-left: auto;
}

.rtl .media-menu {
	border-left: none;
	border-right: inherit;
}
.rtl .media-menu a {
	float: right;
}
.rtl .media-frame-title {
	left: 0;
	right: auto;
}

.rtl .attachments-browser .attachments, .rtl .attachments-browser .uploader-inline {
	margin-left: 180px;
	margin-right: inherit;
}
.rtl #nav-menus-frame {
	margin-right: 0;
	margin-left: auto;
}
.rtl #current-theme img {
	margin-right: 0;
	margin-left: inherit;
}
.rtl #templateside .highlight {
	margin-right: -5px;
	margin-left: auto;
}

.rtl #wpbody-content .wp-list-table.plugins .manage-column.column-name,
.rtl #wpbody-content .wp-list-table.plugins .column-description,
.rtl #wpbody-content .wp-list-table.plugins .plugin-title {
	padding-right: 38px;
	padding-left: 12px;
}
.rtl #wpbody-content .wp-list-table.plugins th.check-column {
	right: 0;
	left: auto;
	padding-right: 2px;
	padding-left: auto;
}
.rtl #wpbody-content .wp-list-table.plugins .check-column input {
	margin-right: 6px;
	margin-left: auto;
}



} /* @media block */

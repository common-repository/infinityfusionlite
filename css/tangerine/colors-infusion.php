<?php header("Content-type: text/css; charset: UTF-8");  
require_once('../../../../../wp-load.php');
?>
@media print,
  (-o-min-device-pixel-ratio: 5/4),
  (-webkit-min-device-pixel-ratio: 1.25),
  (min-resolution: 120dpi) {
	.mp6 .curtime #timestamp,
	.mp6 #screen-meta-links a.show-settings,
	.mp6 .widget-top a.widget-action,
	.mp6 .widget-top a.widget-action:hover,
	.mp6 .sidebar-name-arrow,
	.mp6 .sidebar-name:hover .sidebar-name-arrow,
	.mp6 .meta-box-sortables .postbox:hover .handlediv,
	.mp6 .tagchecklist span a,
	.mp6 #bulk-titles div a,
	.mp6 .tagchecklist span a:hover,
	.mp6 #bulk-titles div a:hover,
	.mp6 .wp_themeSkin .mceToolbar span.mce_undo,
	.mp6 .wp_themeSkin .mceToolbar span.mce_redo,
	.mp6 .wp_themeSkin .mceToolbar span.mce_bullist,
	.mp6 .wp_themeSkin .mceToolbar span.mce_numlist,
	.mp6 .wp_themeSkin .mceToolbar span.mce_blockquote,
	.mp6 .wp_themeSkin .mceToolbar span.mce_charmap,
	.mp6 .wp_themeSkin .mceToolbar span.mce_bold,
	.mp6 .wp_themeSkin .mceToolbar span.mce_italic,
	.mp6 .wp_themeSkin .mceToolbar span.mce_underline,
	.mp6 .wp_themeSkin .mceToolbar span.mce_justifyleft,
	.mp6 .wp_themeSkin .mceToolbar span.mce_justifyright,
	.mp6 .wp_themeSkin .mceToolbar span.mce_justifycenter,
	.mp6 .wp_themeSkin .mceToolbar span.mce_justifyfull,
	.mp6 .wp_themeSkin .mceToolbar span.mce_indent,
	.mp6 .wp_themeSkin .mceToolbar span.mce_outdent,
	.mp6 .wp_themeSkin .mceToolbar span.mce_link,
	.mp6 .wp_themeSkin .mceToolbar span.mce_unlink,
	.mp6 .wp_themeSkin .mceToolbar span.mce_help,
	.mp6 .wp_themeSkin .mceToolbar span.mce_removeformat,
	.mp6 .wp_themeSkin .mceToolbar span.mce_fullscreen,
	.mp6 .wp_themeSkin .mceToolbar span.mce_wp_fullscreen,
	.mp6 .wp_themeSkin .mceToolbar span.mce_media,
	.mp6 .wp_themeSkin .mceToolbar span.mce_pastetext,
	.mp6 .wp_themeSkin .mceToolbar span.mce_pasteword,
	.mp6 .wp_themeSkin .mceToolbar span.mce_wp_help,
	.mp6 .wp_themeSkin .mceToolbar span.mce_wp_adv,
	.mp6 .wp_themeSkin .mceToolbar span.mce_wp_more,
	.mp6 .wp_themeSkin .mceToolbar span.mce_strikethrough,
	.mp6 .wp_themeSkin .mceToolbar span.mce_spellchecker,
	.mp6 .wp_themeSkin .mceToolbar span.mce_forecolor,
	.mp6 .wp_themeSkin .mceToolbar .mce_forecolorpicker,
	.mp6 .wp_themeSkin .mceToolbar .mceSplitButton .mce_spellchecker span.mce_spellchecker,
	.mp6 .wp_themeSkin .mceToolbar .mceSplitButton .mce_forecolor span.mce_forecolor,
	.mp6 .wp_themeSkin .mceToolbar .mceSplitButton span.mce_numlist,
	.mp6 .wp_themeSkin .mceToolbar .mceSplitButton span.mce_bullist
	{ background: none !important; }
}


/*------------------------------------------------------------------------------
  1.0 - Left to Right Styles
------------------------------------------------------------------------------*/

html {
	
	<?php require_once('../_lib/bg.php');
	if( infusion_mobeus_get_option('enable_img_bg') == '' ||   infusion_mobeus_get_option('enable_img_bg') == 'off' || infusion_mobeus_get_option('enable_img_bg') !== 'on') { 
  
    	if( infusion_mobeus_get_option('custom_colour_bg') !== '' ) { echo('background: '.infusion_mobeus_get_option('custom_colour_bg').';'
			);}
		
		else{ echo('background: #F0FCFC;');};}; ?>
        }
        
h1, h2, h3, h4, h5, h6  {
color: #000;
text-shadow:none;
}

.wrap {
background-color: rgba(256,256,256,0.6);
    /* For IE 5.5 - 7*/
    filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99222222, endColorstr=#99222222);
    /* For IE 8*/
    -ms-filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99222222, endColorstr=#99222222);
    z-index:10;
    padding:10px;
-moz-box-shadow:0px 0px 7px #000000;
-webkit-box-shadow:0px 0px 7px #000000;
box-shadow:0px 0px 7px #000000;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
border-radius: 4px; 
}

/* Checkbooms */

input[type=checkbox],
input[type=radio] {
	background: #fff;
	border-color: #bbb !important;
	color: #555;

	-webkit-box-shadow: inset 1px 1px 2px rgba(0,0,0,0.1);
	box-shadow: inset 1px 1px 2px rgba(0,0,0,0.1);
}

input[type=checkbox]:checked:before {
	color: rgb(255, 142, 37);
}

input[type=radio]:checked:before {
	background-color: rgb(255, 142, 37);
}

#wpbody select {
	border-color: #bbb;
}

.wp-core-ui input[type="reset"]:hover,
.wp-core-ui input[type="reset"]:active {
	color: #2ea2cc;
}

#adminmenu .wp-has-current-submenu .wp-submenu,
.no-js li.wp-has-current-submenu:hover .wp-submenu,
#adminmenu a.wp-has-current-submenu:focus + .wp-submenu,
#adminmenu .wp-has-current-submenu .wp-submenu.sub-open,
#adminmenu .wp-has-current-submenu.opensub .wp-submenu {
	background-color: rgb(255, 229, 211);
}

#adminmenu .wp-has-current-submenu .wp-submenu a,
.no-js li.wp-has-current-submenu:hover .wp-submenu a,
#adminmenu a.wp-has-current-submenu:focus + .wp-submenu a,
#adminmenu .wp-has-current-submenu .wp-submenu.sub-open a,
#adminmenu .wp-has-current-submenu.opensub .wp-submenu a {
	color: rgb(138, 63, 3);
}

#adminmenu .wp-has-current-submenu .wp-submenu a:hover,
.no-js li.wp-has-current-submenu:hover .wp-submenu a:hover,
#adminmenu a.wp-has-current-submenu:focus + .wp-submenu a:hover,
#adminmenu .wp-has-current-submenu .wp-submenu.sub-open a:hover,
#adminmenu .wp-has-current-submenu.opensub .wp-submenu a:hover,
#adminmenu .wp-submenu a:hover,
.folded #adminmenu a.wp-has-current-submenu:focus + .wp-submenu a:hover,
.folded #adminmenu .wp-has-current-submenu .wp-submenu a:hover {
	background: none;
	color: #5E3100;
}

ul#adminmenu a.wp-has-current-submenu:after,
ul#adminmenu > li.current > a.current:after {
	border-right-color: #eee;
}

#dashboard_right_now .t,
#dashboard_right_now .b {
	color: #C06;
}

#the-comment-list .comment-item p.row-actions,
#dashboard_recent_comments .subsubsub,
.plugins .row-actions-visible,
.row-actions {
	color: #ddd;
}

.find-box-search,
.find-box-buttons {
	background-color: #f7f7f7;
	border-top: 1px solid #dfdfdf;
}

.find-box {
	background-color: #444;
}

.find-box-head {
	color: #eee;
}

.find-box-inside {
	background-color: #fff;
}

a.page-numbers:hover {
	border-color: #999;
}

body,
#wpbody,
.form-table .pre,
.ui-autocomplete li a {
	color: rgb(133, 69, 0);
}

body > #upload-menu {
	border-bottom-color: #fff;
}

#postcustomstuff table,
#your-profile fieldset,
#rightnow,
div.dashboard-widget,
#dashboard-widgets p.dashboard-widget-links {
	border-color: #7a7a7a;
}

#poststuff .inside label.spam,
#poststuff .inside label.deleted {
	color: red;
}

#poststuff .inside label.waiting {
	color: orange;
}

#poststuff .inside label.approved {
	color: green;
}

#postcustomstuff table {
	border-color: #dfdfdf;
	background-color: #f9f9f9;
}

#postcustomstuff thead th {
	background-color: #f1f1f1;
}

table.widefat {
	border-color: #fff;
	background-color: #fff;
}

th .comment-grey-bubble:before {
	color: #444;
}

.sorting-indicator:before {
	color: #444;
}

div.dashboard-widget-error {
	background-color: #c43;
}

div.dashboard-widget-notice {
	background-color: #cfe1ef;
}

div.dashboard-widget-submit {
	border-top-color: #ccc;
}

ul.category-tabs li {
	border-color: transparent;
}

div.tabs-panel,
.wp-tab-panel,
ul.add-menu-item-tabs li.tabs,
.wp-tab-active {
	border-color: #dfdfdf;
	background-color: #fff;
}

ul.category-tabs li.tabs {
	border-color: #dfdfdf #dfdfdf #fff;
}

ul.category-tabs li.tabs,
ul.add-menu-item-tabs li.tabs,
.wp-tab-active {
	background-color: #fff;
}

kbd,
code {
	background: #eaeaea;
	background: rgba(0,0,0,0.07);
}

textarea,
input[type="text"],
input[type="password"],
input[type="email"],
input[type="number"],
input[type="search"],
input[type="tel"],
input[type="url"],
.titlewrap input {
	box-shadow: inset 1px 1px 2px rgba(0,0,0,0.07);
}

textarea,
input[type="text"],
input[type="password"],
input[type="email"],
input[type="number"],
input[type="search"],
input[type="tel"],
input[type="url"],
.titlewrap input,
select {
	border-color: #ccc;
}

.inside textarea,
.inside input[type="text"],
.inside input[type="password"],
.inside input[type="email"],
.inside input[type="number"],
.inside input[type="search"],
.inside input[type="tel"],
.inside input[type="url"] {
	border-color: rgb(233, 206, 186);
}

textarea:focus,
input[type="text"]:focus,
input[type="password"]:focus,
input[type="email"]:focus,
input[type="number"]:focus,
input[type="search"]:focus,
input[type="tel"]:focus,
input[type="url"]:focus,
select:focus {
	border-color: #aaa;
}

input.disabled,
textarea.disabled {
	background-color: #ccc;
}

#plugin-information .action-button a,
#plugin-information .action-button a:hover,
#plugin-information .action-button a:visited {
	color: #fff;
}

.widget .widget-top,
.postbox h3,
.stuffbox h3,
.control-section .accordion-section-title,
h3.dashboard-widget-title,
h3.dashboard-widget-title span,
h3.dashboard-widget-title small,
.sidebar-name,
#nav-menu-header,
#nav-menu-footer,
.menu-item-handle,
.checkbox,
.side-info,
.widefat thead th,
.widefat tfoot th {
	background: #fcfcfc;
	border-top: none;
	border-bottom: 1px solid #e1e1e1;
}

.accordion-section.open .accordion-section-content {
	border-left: none;
	border-right: none;
}

.control-section:hover .accordion-section-title,
.control-section .accordion-section-title:hover,
.control-section.open .accordion-section-title,
.control-section .accordion-section-title:focus {
	background: #0074a2;
	border-color: #0074a2 !important;
}

.accordion-container ul li.accordion-section:last-child {
	border-bottom: none;
}

.widefat tfoot th {
	border-bottom: none;
	border-top: 1px solid #e1e1e1;
}

.plugins tfoot th {
	border-top: none !important;
}

.form-table th,
.form-wrap label {
	color: #222;
}

.form-table th {
	border-bottom: 1px solid #dfdfdf;
}

.form-table td {
	border-bottom: 1px solid #dfdfdf;
}

.description,
.form-wrap p {
	color: #666;
}

strong .post-com-count span {
	background-color: #0074a2;
}

.post-com-count:after {		/* draw bubble connector using CSS! */
	border-top: 5px solid #bbbbbb;
	border-right: 5px solid transparent;
}

strong .post-com-count:after {
	border-top: 5px solid #0076a0;
}

.post-com-count:hover:after {
	border-top: 5px solid #2ea2cc;
}

.sorthelper {
	background-color: #ccf3fa;
}

.ac_match,
.subsubsub a.current {
	color: #000;
}

.wrap h2 {
	color: #000;
}

.wrap .add-new-h2,
.wrap .add-new-h2:active,
#add-new-comment a {
	background: #e0e0e0;
}

.wrap .add-new-h2:hover,
#add-new-comment a:hover {
	background: #D45F00;
	color: #fff;
}

.subtitle {
	color: #777;
}

.ac_over {
	background-color: #f0f0b8;
}

.ac_results {
	background-color: #fff;
	border-color: #808080;
}

.ac_results li {
	color: #101010;
}

.alternate,
.alt {
	background-color: #f9f9f9;
}

.available-theme a.screenshot {
	background-color: #fff;
	border-color: #ccc;
}

#current-theme {
	border-bottom-color: #dfdfdf;
}

.bar {
	background-color: #e8e8e8;
	border-right-color: #99d;
}

.form-invalid {
	background-color: #ffebe8 !important;
}

.form-invalid input,
.form-invalid select {
	border-color: #c00 !important;
}

.submit,
#commentsdiv #add-new-comment {
	border: none;
}

.highlight {
	background-color: #e4f2fd;
	color: #000;
}

.howto,
.nonessential,
#edit-slug-box,
.form-input-tip,
.subsubsub {
	color: #666;
}

.media-upload-form label.form-help,
td.help {
	color: #9a9a9a;
}

.ui-autocomplete {
	border-color: #aaa;
	background-color: #efefef;
}

.ui-autocomplete li a.ui-state-focus {
	background-color: #ddd;
}

.post-com-count {
	color: #fff;
}

.post-com-count span {
	background-color: #bbb;
	color: #fff;
}

.post-com-count:hover span {
	background-color: #2ea2cc;
}

.quicktags, .search {
	background-color: #ccc;
	color: #000;
}

.side-info h5 {
	border-bottom-color: #dadada;
}

.side-info ul {
	color: #666;
}

a:hover,
a:active,
a:focus {
	color: #4A2700;
}

#adminmenu a:hover,
#adminmenu li.menu-top > a:focus,
#adminmenu .wp-submenu a:hover,
#rightnow a:hover,
#media-upload a.del-link:hover,
div.dashboard-widget-submit input:hover,
.subsubsub a:hover,
.subsubsub a.current:hover,
.ui-tabs-nav a:hover {
	color: #4A2700;
}

#the-comment-list .comment-item,
#dashboard-widgets #dashboard_quick_press form p.submit {
	border: none;
}

#side-sortables .category-tabs .tabs a,
#side-sortables .add-menu-item-tabs .tabs a,
.wp-tab-bar .wp-tab-active a {
	color: #333;
}

#rightnow .rbutton {
	background-color: #ebebeb;
	color: #264761;
}

p.submit {
	border-top-color: #dfdfdf;
}

.submitbox .submit {
	background-color: #464646;
	color: #ccc;
}

table.widefat span.delete a,
table.widefat span.trash a,
table.widefat span.spam a,
#dashboard_recent_comments .delete a,
#dashboard_recent_comments .trash a,
#dashboard_recent_comments .spam a,
.plugins a.delete,
#all-plugins-table .plugins a.delete,
#search-plugins-table .plugins a.delete,
.submitbox .submitdelete,
#media-items a.delete,
#media-items a.delete-permanently,
#nav-menu-footer .menu-delete {
	color: #d00;
}

table.widefat span.delete a:hover,
table.widefat span.trash a:hover,
table.widefat span.spam a:hover,
#dashboard_recent_comments .delete a:hover,
#dashboard_recent_comments .trash a:hover,
#dashboard_recent_comments .spam a:hover,
.plugins a.delete:hover,
#all-plugins-table .plugins a.delete:hover,
#search-plugins-table .plugins a.delete:hover,
.submitbox .submitdelete:hover,
#media-items a.delete:hover,
#media-items a.delete-permanently:hover,
#nav-menu-footer .menu-delete:hover {
	color: #f00;
}

#normal-sortables .submitbox .submitdelete:hover {
	color: #000;
	background-color: #f00;
	border-bottom-color: #f00;
}

.tablenav .dots {
	border-color: transparent;
}

.tablenav .next,
.tablenav .prev {
	border-color: transparent;
	color: #0074a2;
}

.tablenav .next:hover,
.tablenav .prev:hover {
	border-color: transparent;
	color: rgb(255, 92, 0);
}

div.updated,
.login .message,
.press-this #message {
	background-color: #fff;
	border-left: 4px solid rgb(255, 92, 0);

	-webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.1);
	box-shadow: 0 1px 2px rgba(0,0,0,0.1);
}

div.error,
.login #login_error {
	background: #fff;
	border-left: 4px solid #c00;

	-webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.1);
	box-shadow: 0 1px 2px rgba(0,0,0,0.1);
}

.update-message {
	color: #000;
}

a.page-numbers {
	border-bottom-color: #b8d3e2;
}

.commentlist li {
	border-bottom-color: #ccc;
}

.widefat td,
.widefat th {
	color: #555;
}

.widefat p,
.widefat ol,
.widefat ul {
	color: #333;
}

.widefat thead tr th,
.widefat tfoot tr th,
h3.dashboard-widget-title,
h3.dashboard-widget-title span,
h3.dashboard-widget-title small {
	color: #333;
}

th.manage-column a,
th.sortable a:hover,
th.sortable a:active,
th.sortable a:focus {
	color: #333;
}

th.sortable a:focus {
	background: #e1e1e1;
}

h3.dashboard-widget-title small a {
	color: #d7d7d7;
}

h3.dashboard-widget-title small a:hover {
	color: #fff;
}

a,
#the-comment-list p.comment-author strong a,
#media-upload a.del-link,
#media-items a.delete,
#media-items a.delete-permanently,
.plugins a.delete,
.ui-tabs-nav a,
.plugins .inactive a {
	color: rgb(111, 53, 0);
	-moz-transition: all .1s ease-in-out;
	-webkit-transition: all .1s ease-in-out;
	transition: all .1s ease-in-out;
}

#adminmenu a {
	color: rgb(44, 11, 3);
	-moz-transition: all .01s ease-in-out;
	-webkit-transition: all .01s ease-in-out;
	transition: all .01s ease-in-out;
}

#adminmenu .awaiting-mod,
#adminmenu .update-plugins,
#sidemenu a .update-plugins,
#rightnow .reallynow {
	background-color: #d54e21;
	color: #fff;
}
#plugin-information .action-button {
	background-color: #2ea2cc;
	color: #fff;
}

#adminmenu li.current a .awaiting-mod,
#adminmenu	li a.wp-has-current-submenu .update-plugins {
	background-color: #2ea2cc;
	color: #fff;
}

div#media-upload-header,
div#plugin-information-header {
	background-color: #f9f9f9;
	border-bottom-color: #dfdfdf;
}

#currenttheme img {
	border-color: #666;
}

#dashboard_secondary div.dashboard-widget-content ul li a {
	background-color: #f9f9f9;
}

input.readonly, textarea.readonly {
	background-color: #ddd;
}

#editable-post-name {
	background-color: rgb(41, 41, 41);
}

#edit-slug-box strong,
.tablenav .displaying-num,
#submitted-on,
.submitted-on {
	color: #777;
}

.plugins .inactive a:hover {
	color: #C25700;
}

#wpfooter {
	color: #777;
	border-color: transparent;
}

.imgedit-group,
#media-items .media-item,
.media-item .describe {
	border-color: #dfdfdf;
}

.plugins .plugin-description p,
.plugins .plugin-version-author-uri {
	color: #333;
}

.plugins .inactive .plugin-title strong {
	color: #333;
}

.plugin-update-tr .plugin-update {
	border: none;
	-webkit-box-shadow: inset 0 -1px 0 rgba(0,0,0,0.1);
	box-shadow: inset 0 -1px 0 rgba(0,0,0,0.1);
}

.plugin-update-tr .update-message {
	background-color: #f7f7f7;
	background-color: rgba(0,0,0,0.03);
}

tr.plugin-update-tr .plugin-update {
	border-left: 4px solid #d54e21;
}

tr.active + tr.plugin-update-tr .plugin-update {
	background-color: #f7fcfe;
	background-color: rgba(120,200,230,0.06);
	border-left: 4px solid #d54e21;
}

tr.active + tr.plugin-update-tr .plugin-update .update-message {
	background-color: #eaf6fb;
	background-color: rgba(46, 162, 204, 0.07);
}

.plugin-update-tr .update-message:before {
	color: #d54e21;
}

.plugins,
.plugins th,
.plugins td {
	color: #000;
}

.plugins .inactive a {
	color: #579;
}

.plugins tr {
	background: #fff;
}

.plugins .inactive td,
.plugins .inactive th,
.plugins .active td,
.plugins .active th {
	-webkit-box-shadow: inset 0 -1px 0 rgba(0,0,0,0.1);
	box-shadow: inset 0 -1px 0 rgba(0,0,0,0.1);
}

.plugins .update td,
.plugins .update th {
	-webkit-box-shadow: none;
	box-shadow: none;
}

.plugins .active td,
.plugins .active th {
	background-color: #f7fcfe;
	background-color: rgba(228, 70, 9, 0.06);
}

.plugins tr.active.plugin-update-tr + tr.inactive th,
.plugins tr.active.plugin-update-tr + tr.inactive td,
.plugins tr.active + tr.inactive th,
.plugins tr.active + tr.inactive td {
	border-top: 1px solid rgba(0,0,0,0.03);

	-webkit-box-shadow: inset 0px 1px 0 rgba(0,0,0,0.02), inset 0 -1px 0 #e1e1e1;
	box-shadow: inset 0px 1px 0 rgba(0,0,0,0.02), inset 0 -1px 0 #e1e1e1;
}

.plugins tr.active + tr.inactive.update th,
.plugins tr.active + tr.inactive.update td {
	-webkit-box-shadow: none;
	box-shadow: none;
}

.plugins .active th.check-column {
	border-left: 4px solid rgb(218, 52, 37);
}

.plugins .update th.check-column {
	border-left: 4px solid #d54e21;
}

.post-state-format:before,
.post-format-icon:before {
	color: #bbb;
	-moz-transition: all .1s ease-in-out;
	-webkit-transition: all .1s ease-in-out;
	transition: all .1s ease-in-out;
}

a.post-state-format:hover:before,
a.post-format-icon:hover:before {
	color: rgb(218, 52, 37);
}


#the-list tr:last-child td,
#the-list tr:last-child th {
	border-bottom: none !important;
}


#the-comment-list tr.undo,
#the-comment-list div.undo {
	background-color: #f4f4f4;
}

#the-comment-list .unapproved {
	background-color: #ffffe0;
}

#the-comment-list .approve a {
	color: #006505;
}

#the-comment-list .unapprove a {
	color: #d98500;
}

.welcome-panel p {
	color: #777;
}

.welcome-panel a {
	text-decoration: none;
}

.welcome-panel-column p {
	color: #464646;
}

.welcome-panel .welcome-icon:before {
	color: #888;
}

.widget,
.menu-item-settings,
#widget-list .widget-top,
.postbox,
#menu-management .menu-edit,
.accordion-container,
.manage-menus,
table.widefat,
.stuffbox,
p.popular-tags,
.widgets-holder-wrap,
.welcome-panel,
.wp-editor-container,
#post-status-info,
.popular-tags,
.feature-filter {
	-webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.13);
	box-shadow: 0 1px 3px rgba(0,0,0,0.13);
}

.widget,
.menu-item-settings,
#widget-list .widget-top,
#widgets-right .widget-top {
	-webkit-box-shadow: 0 0 0 1px rgba(0,0,0,0.07);
	box-shadow: 0 0 0 1px rgba(0,0,0,0.07);
}

.postbox table.widefat {
	-webkit-box-shadow: none;
	box-shadow: none;
}

.welcome-panel,
.postbox,
table.widefat,
.wp-editor-container,
.stuffbox,
p.popular-tags,
.widgets-holder-wrap,
.popular-tags,
.feature-filter {
	background: #fff;
}

.postbox h3 {
	color: rgb(31, 31, 31);
}

.widget .widget-top,
.menu-item-handle {
	background: rgb(187, 75, 0);
	color: #fff;
	border: none !important;
}

#widget-list .widget .widget-top,
#wp_inactive_widgets .widget .widget-top,
.menu-item-handle {
	background: #ddd;
	color: #333;
}

.js .sidebar-name:hover h3,
.js .postbox h3:hover {
	color: #000;
}

#misc-publishing-actions label[for="post_status"]:before,
#post-body #visibility:before,
.curtime #timestamp:before,
span.wp-media-buttons-icon:before {
	color: #888;
}

#rightnow .youhave {
	background-color: #f0f6fb;
}

#rightnow a {
	color: #448abd;
}

#welcome-panel.welcome-panel .welcome-panel-close::before,
.tagchecklist span a:before,
#bulk-titles div a:before {
	background: none;
	color: #bbb;
}

#welcome-panel.welcome-panel .welcome-panel-close:hover:before,
.tagchecklist span a:hover:before,
#bulk-titles div a:hover:before {
	color: #c00;
}

#update-nag, .update-nag {
	background-color: #fffbcc;
	border-color: #e6db55;
	color: #555;
}

#screen-meta {
	background-color: #fff;

	-webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.1);
	box-shadow: 0 1px 2px rgba(0,0,0,0.1);
}

#contextual-help-back {
	background: rgb(253, 248, 246);
}

.contextual-help-tabs a:hover {
	color: #333;
}

#contextual-help-back,
.contextual-help-tabs .active a {
	border-color: #e1e1e1;
}

.contextual-help-tabs .active {
	border-color: rgb(255, 92, 0);

	-webkit-box-shadow: 0px 2px 0 rgba(0,0,0,0.02), 0 1px 0 rgba(0,0,0,0.02);
	box-shadow: 0px 2px 0 rgba(0,0,0,0.02), 0 1px 0 rgba(0,0,0,0.02);
}

.contextual-help-tabs .active,
.contextual-help-tabs .active a,
.contextual-help-tabs .active a:hover {
	background: rgb(253, 248, 246);
	color: #333;
}

/* screen options and help tabs */
#screen-options-link-wrap,
#contextual-help-link-wrap {
	background: rgb(255,255,255);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(255,255,255,1)), color-stop(100%,rgba(241,241,241,1)));
	background: -webkit-linear-gradient(top, rgba(255,255,255,1) 0%,rgba(241,241,241,1) 100%);
	background: linear-gradient(to bottom, rgba(255,255,255,1) 0%,rgba(241,241,241,1) 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#f1f1f1',GradientType=0 );

	-webkit-box-shadow: 0 2px 2px rgba(0,0,0,0.1);
	box-shadow: 0 2px 2px rgba(0,0,0,0.1);
}

#screen-meta-links a {
	color: #777;
}

#screen-meta-links a:after {
	color: #bbb;
}

#screen-meta-links a:hover,
#screen-meta-links a:active {
	color: #333;
	background-color: transparent;
}
/* end screen options and help tabs */

#wphead {
	border-bottom-color: #dfdfdf;
}

#wphead h1 a {
	color: #464646;
}

.file-error,
abbr.required,
.widget-control-remove:hover,
table.widefat .delete a:hover,
table.widefat .trash a:hover,
table.widefat .spam a:hover,
#dashboard_recent_comments .delete a:hover,
#dashboard_recent_comments .trash a:hover
#dashboard_recent_comments .spam a:hover {
	color: #f00;
}

#pass-strength-result {
	background-color: #eee;
	border-color: #ddd !important;
}

#pass-strength-result.bad {
	background-color: #ffb78c;
	border-color: #ff853c !important;
}

#pass-strength-result.good {
	background-color: #ffec8b;
	border-color: #fc0 !important;
}

#pass-strength-result.short {
	background-color: #ffa0a0;
	border-color: #f04040 !important;
}

#pass-strength-result.strong {
	background-color: #c3ff88;
	border-color: #8dff1c !important;
}

#post-status-info {
	background-color: #f7f7f7;
}

.widget-inside,
.menu-item-settings {
	background: #fcfcfc;
}

#titlediv #title {
	background-color: #fff;
}

#tTips p#tTips_inside {
	background-color: #ddd;
	color: #333;
}

#poststuff .inside .the-tagcloud {
	border-color: #ddd;
}

/* menu */
#adminmenuback,
#adminmenuwrap {
	background-color: #e0e0e0;
}

#adminmenu li.wp-menu-separator {
	background: transparent;
	border-color: transparent;
}

#adminmenu div.separator {
	border-color: transparent;
}

#adminmenu li.wp-menu-open {
	border-color: #dfdfdf;
}

#adminmenu li.menu-top,
#adminmenu li.opensub > a.menu-top,
#adminmenu li > a.menu-top {
	-moz-transition: all .2s ease-in-out;
	-webkit-transition: all .2s ease-in-out;
	transition: all .2s ease-in-out;
}

#adminmenu li.menu-top:hover,
#adminmenu li.opensub > a.menu-top,
#adminmenu li > a.menu-top:focus {
	background-color: #FFE2BA;
	color: #4A2700;
}

/* flyout menu arrow */
#adminmenu li.wp-has-submenu.wp-not-current-submenu:hover:after {
	border-right-color: #CCC;
}

#adminmenu li.wp-has-current-submenu a.wp-has-current-submenu,
#adminmenu li.current a.menu-top,
.folded #adminmenu li.wp-has-current-submenu,
.folded #adminmenu li.current.menu-top,
#adminmenu .wp-menu-arrow,
#adminmenu .wp-has-current-submenu .wp-submenu .wp-submenu-head,
#adminmenu .wp-menu-arrow div {
	background: rgb(226, 65, 3);
}

#adminmenu li.wp-not-current-submenu .wp-menu-arrow {
	border-top-color: #f9f9f9;
	border-bottom-color: #dfdfdf;
	background: transparent;
}

#adminmenu li.wp-not-current-submenu .wp-menu-arrow div {
	background: #111;
	border-color: #111;
}

#adminmenu li.wp-has-current-submenu a.wp-has-current-submenu,
#adminmenu li.current a.menu-top,
#adminmenu .wp-has-current-submenu .wp-submenu .wp-submenu-head {
	color: #fff;
}

.folded #adminmenu li.wp-has-current-submenu,
.folded #adminmenu li.current.menu-top {
	border-color: #666;	/* Match the background color of the current menu item for a flat appearance */
}

#adminmenu .wp-submenu li.current,
#adminmenu .wp-submenu li.current a,
#adminmenu .wp-submenu li.current a:hover {
	color: #000;
	background: transparent;
}

#adminmenu .wp-submenu,
.folded #adminmenu a.wp-has-current-submenu:focus + .wp-submenu,
.folded #adminmenu .wp-has-current-submenu .wp-submenu {
	background-color: rgb(255, 227, 197);
	-webkit-box-shadow: 0 3px 6px rgba(0,0,0,0.3);
	box-shadow: 0 3px 6px rgba(0,0,0,0.3);
}

/* Apply these styles to auto-folded menus */
@media only screen and (max-width: 900px) {
	.auto-fold #adminmenu a.wp-has-current-submenu:focus + .wp-submenu,
	.auto-fold #adminmenu .wp-has-current-submenu .wp-submenu {
	background-color: rgb(255, 230, 203);
	-webkit-box-shadow: 0 3px 6px rgba(0,0,0,0.3);
	box-shadow: 0 3px 6px rgba(0,0,0,0.3);
	}
}

#adminmenu .wp-submenu a,
.folded #adminmenu a.wp-has-current-submenu:focus + .wp-submenu a,
.folded #adminmenu .wp-has-current-submenu .wp-submenu a {
	color: #000;
}

/* Apply these styles to auto-folded menus */
@media only screen and (max-width: 900px) {
	.auto-fold #adminmenu a.wp-has-current-submenu:focus + .wp-submenu a,
	.auto-fold #adminmenu .wp-has-current-submenu .wp-submenu a {
	color: #114142;
	}
}

#adminmenu .wp-submenu .wp-submenu-head {
	color: rgb(175, 42, 0);
}

/* collapse menu button */
#collapse-menu {
	color: #aaa;
	-moz-transition: all .1s ease-in-out;
	-webkit-transition: all .1s ease-in-out;
	transition: all .1s ease-in-out;
}

#collapse-menu:hover {
	color: #B88C40;
}

#collapse-button div:after {
	color: #aaa;
}

#collapse-menu:hover #collapse-button div:after {
	color: #B88C40;
}

#adminmenu div.wp-menu-image:before {
	color: #999;
}

.icon16:before {
	color: #999;
}

#adminmenu li.wp-has-current-submenu:hover div.wp-menu-image:before {
	color: #fff;
}

#adminmenu li:hover div.wp-menu-image:before {
	color: rgb(226, 83, 3);
}

#adminmenu .wp-has-current-submenu div.wp-menu-image:before,
#adminmenu .current div.wp-menu-image:before,
#adminmenu a.wp-has-current-submenu:hover div.wp-menu-image:before,
#adminmenu a.current:hover div.wp-menu-image:before {
	color: #fff;
}

/* Diff */

table.diff .diff-deletedline del {
	background-color: #f99;
}

.ui-tooltip, .arrow::after {
	background-color: #fff;
	box-shadow: 0 1px 3px rgba(0,0,0,0.1);
}

#revisions-diff {
	background-color: #fff;
	box-shadow: 0 1px 3px rgba(0,0,0,0.1);
}

/* Diff */
table.diff .diff-deletedline {
	background-color: #ffe9e9;
}

table.diff .diff-deletedline del {
	background-color: #faa;
}

table.diff .diff-addedline {
	background-color: #e9ffe9;
}

table.diff .diff-addedline ins {
	background-color: #afa;
}

#diff-header {
	border-bottom: 1px solid #ddd;
}

#diff-slider .ui-slider-tooltip,
#diff-slider-ticks .ui-slider-tooltip {
	border-color: #d7d7d7;
	background-color: #fff;
}

#diff-title-to strong {
	color: #08a;
}

.revision-tick.completed-false {
	background-color: #99c;
	background-image: url(../images/wpspin_light.gif) no-repeat;
	background-position: middle;
	background-size: 1px 10px;
}

.revision-tick.completed-false {
	background-image: none;
}

.revision-tick.scope-of-changes-none {
	background-color: #d7d7d7;
}

.revision-tick.scope-of-changes-vsmall {
	background-color: #c3c3c3;
}

.revision-tick.scope-of-changes-small {
	background-color: #b0b0b0;
}

.revision-tick.scope-of-changes-med {
	background-color: #9c9c9c;
}

.revision-tick.scope-of-changes-large {
	background-color: #898989;
}

.revision-tick.scope-of-changes-vlarge {
	background-color: #757575;
}

.diff-label {
	color: #666;
}


/* jQuery UI Slider */

.wp-slider.ui-slider {
	border-color: #d7d7d7;
	background: #fff;
}

.wp-slider .ui-slider-handle,
.wp-slider .ui-slider-handle.ui-state-hover,
.wp-slider .ui-slider-handle.focus {
	background: #2ea2cc;
	background: -webkit-gradient(linear, left top, right bottom, color-stop(0%,#2ea2cc), color-stop(100%,#4db4e3));
	background: -webkit-linear-gradient(-45deg, #2ea2cc 0%,#4db4e3 100%);
	background: linear-gradient(135deg, #2ea2cc 0%,#4db4e3 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#2ea2cc', endColorstr='#4db4e3',GradientType=1 );
	box-shadow: 0 1px 3px rgba(0,0,0,0.1);
}

.wp-slider .ui-slider-handle:before {
	color: #fff;
	text-shadow: 0 1px 1px rgba(0,116,162,1);
}

.wp-slider .ui-slider-handle.ui-state-active {
	background: #0074a2;
	background: -webkit-gradient(linear, left top, right bottom, color-stop(0%,#0074a2), color-stop(100%,#005684));
	background: -webkit-linear-gradient(-45deg,  #0074a2 0%,#005684 100%);
	background: linear-gradient(135deg,  #0074a2 0%,#005684 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#0074a2', endColorstr='#005684',GradientType=1 );
}

.wp-slider .ui-slider-range {
	background: #ccc;
}

/* edit image */
#sidemenu a {
	background-color: #f9f9f9;
	border-color: #f9f9f9;
	border-bottom-color: #dfdfdf;
}

#sidemenu a.current {
	background-color: #fff;
	border-color: #dfdfdf #dfdfdf #fff;
	color: #2ea2cc;
}

#replyerror {
	border-color: #ddd;
	background-color: #f9f9f9;
}

/* table vim shortcuts */
.vim-current,
.vim-current th,
.vim-current td {
	background-color: #E4F2FD !important;
}

/* Install Plugins */

#plugin-information {
	height: auto;
}

#plugin-information .fyi ul {
	background-color: #eaf3fa;
}

#plugin-information .fyi h2.mainheader {
	background-color: #cee1ef;
}

#plugin-information pre,
#plugin-information code {
	background-color: #ededff;
}

#plugin-information pre {
	border-color: #ccc;
}

/* inline editor */
#bulk-titles {
	border-color: #ddd;
}

.inline-editor div.title {
	background-color: #eaf3fa;
}

.inline-editor ul.cat-checklist {
	background-color: #fff;
	border-color: #ddd;
}

.inline-editor .quick-edit-save {
	background-color: #f1f1f1;
}

fieldset.inline-edit-col-right .inline-edit-col {
	border-color: #dfdfdf;
}

.attention {
	color: #2ea2cc;
}

.js .meta-box-sortables .postbox:hover .handlediv:before {
	color: #888;
}

.tablenav .tablenav-pages {
	color: #555;
}

.tablenav .tablenav-pages a {
	background: #eee;
	background: rgba( 0, 0, 0, 0.05 );
}

.tablenav .tablenav-pages a:hover,
.tablenav .tablenav-pages a:focus {
	color: #fff;
	background: #2ea2cc;
}

.tablenav .tablenav-pages a.disabled,
.tablenav .tablenav-pages a.disabled:hover,
.tablenav .tablenav-pages a.disabled:focus {
	color: #aaa;
	background: #eee;
	background: rgba( 0, 0, 0, 0.05 );
}

.tablenav .tablenav-pages .current {
	background: #dfdfdf;
	border-color: #d3d3d3;
}

#availablethemes,
#availablethemes td {
	border-color: #ddd;
}

#current-theme img {
	border-color: #999;
}

#TB_window #TB_title a.tb-theme-preview-link,
#TB_window #TB_title a.tb-theme-preview-link:visited {
	color: #999;
}

#TB_window #TB_title a.tb-theme-preview-link:hover,
#TB_window #TB_title a.tb-theme-preview-link:focus {
	color: #ccc;
}

.misc-pub-section {
	border-top-color: #fff;
	border-bottom-color: #dfdfdf;
}

#minor-publishing {
	border-bottom-color: #dfdfdf;
}

#post-body .misc-pub-section {
	border-left-color: #eee;
}

.post-com-count span {
	background-color: #bbb;
}

.form-table .color-palette td {
	border-color: #fff;
}

.sortable-placeholder {
	border-color: #bbb;
	background-color: #f5f5f5;
}

#post-body ul.category-tabs li.tabs a,
#post-body ul.add-menu-item-tabs li.tabs a,
body.press-this ul.category-tabs li.tabs a {
	color: #333;
}

.view-switch>a:before {
	color: rgb(78, 84, 99);
}

.view-switch a:hover:before {
	color: #727272;
}

.view-switch a.current:before {
	color: #0074a2;
}

div.widgets-sortables,
#widgets-left .inactive,
#available-widgets .widget-holder {
	background-color: #fff;
	border-color: #fff;
}

#widgets-left #available-widgets {
	background: #fff;
}

#available-widgets .widget-description {
	color: #555;
}

.sidebar-name {
	color: #464646;
	border-bottom-color: #e1e1e1;
}

.js .sidebar-name:hover,
.js #removing-widget {
	color: #2ea2cc;
}

#removing-widget span {
	color: black;
}

.in-widget-title {
	color: rgb(80, 20, 12);
}

#wp_inactive_widgets .in-widget-title {
	color: #666;
}

.deleting .widget-title * {
	color: #aaa;
}

.imgedit-menu div {
	border-color: #d5d5d5;
	background-color: #f1f1f1;
}

.imgedit-menu div:hover {
	border-color: #c1c1c1;
	background-color: #eaeaea;
}

.imgedit-menu div.disabled {
	border-color: #ccc;
	background-color: #ddd;
	filter: alpha(opacity=50);
	opacity: 0.5;
}

/* added from nav-menu.css */
#menu-management .menu-edit {
	border-color: #dfdfdf;
}

#menu-management #post-body {
	background: #fff;
	border-top-color: #fff;
	border-bottom-color: #dfdfdf;
}

#nav-menu-header {
	border-bottom-color: #dfdfdf;
}

#nav-menu-footer {
	border-top-color: #fff;
}

#menu-management .nav-tabs-arrow a {
	color: #c1c1c1;
}

#menu-management .nav-tabs-arrow a:hover {
	color: #2ea2cc;
}

#menu-management .nav-tabs-arrow a:active {
	color: #464646;
}

#menu-management .nav-tab-active {
	border-color: #dfdfdf;
}

#menu-management .nav-tab {
	background: #fbfbfb;
	border-color: #dfdfdf;
}

.js .input-with-default-title {
	color: #aaa;
}

#cancel-save {
	color: #f00;
}

#cancel-save:hover {
	background-color: #f00;
	color: #fff;
}

.list-container,
.menu-item-handle {
	border-color: #dfdfdf;
}

.menu li.deleting .menu-item-handle {
	background-color: #f66;
}

.item-type { /* Menu item controls */
	color: #777;
}

.item-controls .menu-item-delete:hover {
	color: #f00;
}

.widget-top a.widget-action:hover {
	color: #0074a2;
}

.nav-menus-php .item-edit:after,
.widget-top a.widget-action:after,
.control-section .accordion-section-title::after,
.accordion-section-title::after {
	color: #fff;
}

#wp_inactive_widgets .widget .widget-top a.widget-action {
	color: #ddd;
}

.nav-menus-php .item-edit:after,
#wp_inactive_widgets .widget .widget-top a.widget-action:after {
	color: #888;
}

.control-section .accordion-section-title::after,
.accordion-section-title::after {
	color: #888;
}

.control-section.open .accordion-section-title::after,
.control-section:focus .accordion-section-title::after,
.control-section:hover .accordion-section-title::after,
.accordion-section-title::after {
	color: #fff;
}

.menu-item-settings { /* Menu editing */
	border-color: #dfdfdf;
}

.link-to-original {
	color: #777;
	border-color: #dfdfdf;
}

#cancel-save:hover {
	color: #fff !important;
}

#update-menu-item {
	color: #fff !important;
}

#update-menu-item:hover,
#update-menu-item:active,
#update-menu-item:focus {
	color: #eaf2fa !important;
	border-color: #13455b !important;
}

.submitbox .submitcancel {
	color: #0074a2;
	border-bottom-color: #0074a2;
}

.submitbox .submitcancel:hover {
	background: #0074a2;
	color: #fff;
}

.manage-menus {
	background: #fbfbfb;
}

.menu-settings {
	border-top-color: #eeeeee;
}

.theme-location-set {
	color: #999999;
}

.nav-menus-php .delete-action a {
	color: #bc0b0b;
}

.is-submenu {
	color: #999999;
}

.nav-tab {
	color: #0074a2;
	border-color: #ddd;
	background: #ddd;
}

.nav-tab:hover {
	background-color: #2ea2cc;
	color: #fff;
}

.nav-tab-active {
	color: #464646;
}

.nav-tab-active,
.nav-tab-active:hover {
	color: #000;
	background: none;
	border-color: #ccc;
	border-bottom-color: #eee;
}

h2.nav-tab-wrapper, h3.nav-tab-wrapper {
	border-bottom-color: #ccc;
}

#upload-form label {
	color: #777;
}

/* Begin About Pages */
.about-wrap h1 {
	color: #333;
}

.about-text {
	color: #777;
}

.wp-badge {
	background-color: #0074a2;
	color: #78c8e6;
	-webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.2);
	box-shadow: 0 1px 3px rgba(0,0,0,0.2);
}

.about-wrap h2 .nav-tab-active {
	border-color: #ccc;
	border-bottom-color: #eee;
}

.about-wrap h3 {
	color: #333;
}

.about-wrap .feature-section h4 {
	color: #464646;
}

.about-wrap .feature-section img {
	background: #fff;
	border-color: #ccc;
}

.about-wrap .point-releases {
	border-bottom: 1px solid #dfdfdf;
}

.about-wrap .point-releases h3 {
	border-top-color: #dfdfdf;
}

.about-wrap li.wp-person img.gravatar {
	border-color: #ccc;
}

.about-wrap li.wp-person .title {
	color: #464646;
}

.freedoms-php .about-wrap ol li {
	color: #999;
}

.freedoms-php .about-wrap ol p {
	color: #464646;
}

/* End About Pages */

/******** pressthis and img editing icons ********/

.pressthis a span:before {
	color:#777;
}

.imgedit-menu div {
	color:#777;
}

.imgedit-menu div:hover {
	color:#333;
}

/******** end pressthis and img editing icons ********/

/* Media Manager */

.media-modal-content {
	background: #fcfcfc;
	box-shadow: 0 5px 15px rgba(0,0,0,0.7);
}

.media-menu {
	background: #f3f3f3;
	border-right-color: #ccc;
}

.media-menu > a {
	color: #0074a2;
}

.media-menu .active,
.media-menu .active:hover {
	color: #222;
}

.media-frame-content {
	background: #fff;
	border-top-color: #ddd;
	border-bottom-color: #ddd;
}

.media-menu .separator {
	border-top-color: #ddd;
	border-bottom: none;
}

.media-sidebar {
	background: #f3f3f3;
	border-color: #ddd;
}

.media-router .active,
.media-router > a.active:last-child {
	background: #fff;
	border: 1px solid #ddd;
	border-bottom: none;
}

.details.attachment {
	box-shadow: 0 0 0 1px #fff, 0 0 0 5px #2ea2cc;
}

.attachment .check {
	background: #eee;
}

.attachment.details .check {
	box-shadow: 0 0 0 1px #2ea2cc;
	background: #0074a2;
	background-image: none;
}


/* Lightbox */

.menu #TB_window {
	background: #f1f1f1;
}

/* tinymce */
a .mceIcon, .mceAction {
	color:#777;
}

a .mceIcon:hover {
	color:#333;
}

<? require_once('../_lib/login.php'); ?>

/*------------------------------------------------------------------------------
  2.0 - Right to Left Styles
------------------------------------------------------------------------------*/

.rtl .bar {
	border-right-color: transparent;
	border-left-color: #99d;
}

.rtl #adminmenu .wp-submenu .wp-submenu-head {
	border-right-color: transparent;
	border-left-color: #dfdfdf;
}

.rtl #adminmenu .wp-submenu,
.rtl.folded #adminmenu .wp-has-current-submenu .wp-submenu {
	-webkit-box-shadow: -2px 2px 5px rgba( 0, 0, 0, 0.4 );
	box-shadow: -2px 2px 5px rgba( 0, 0, 0, 0.4 );
}

.rtl #adminmenu .wp-has-current-submenu .wp-submenu {
	-webkit-box-shadow: none;
	box-shadow: none;
}

.rtl ul#adminmenu a.wp-has-current-submenu:after,
.rtl ul#adminmenu > li.current > a.current:after {
	border-right-color: transparent;
	border-left-color: #eee;
}

/* Flyout Menu Arrow */
.rtl #adminmenu li.wp-has-submenu.wp-not-current-submenu:hover:after {
	border-right-color: transparent;
	border-left-color: #333;
}

.rtl #post-body .misc-pub-section {
	border-right-color: transparent;
	border-left-color: #eee;
}

.rtl div.updated,
.rtl .login .message {
	border-left: none;
	border-right: 4px solid #7ad03a;
}

.rtl .plugins .active th.check-column,
.rtl tr.active + tr.plugin-update-tr .plugin-update {
	border-left: none;
	border-right: 4px solid #2ea2cc;
}
.rtl .plugins .update th.check-column,
.rtl tr.plugin-update-tr .plugin-update {
	border-left: none;
	border-right: 4px solid #d54e21;
}


/* To be merged */

/*------------------------------------------------------------------------------
	This is a rough example of using SVG for plugin icons.
	This will not be the final suggested method of implementation,
	but should provide an example of how SVGs can work with the new UI.
------------------------------------------------------------------------------*/

#toplevel_page_jetpack div.wp-menu-image {
	background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAxNi4wLjAsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+DQo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB3aWR0aD0iMjBweCIgaGVpZ2h0PSIyMHB4IiB2aWV3Qm94PSIwIDAgMjAgMjAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDIwIDIwIiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxnIGlkPSJqZXRwYWNrIj4NCgk8cGF0aCBmaWxsPSIjOTk5OTk5IiBkPSJNOC41LDE3Ljk2M0w3Ljk0NiwxNy4yNWMtMC42ODgsMC4yNDMtMS41MjgsMC4zOTEtMi40NDYsMC4zOTFzLTEuNzU4LTAuMTQ2LTIuNDQ3LTAuMzkxTDIuNSwxNy45NjMNCgkJYzAsMC43MTEsMS4zNDMsMS4yODcsMywxLjI4N1M4LjUsMTguNjc0LDguNSwxNy45NjN6Ii8+DQoJPHBhdGggZmlsbD0iIzk5OTk5OSIgZD0iTTEwLjY3NSwxNi45NjNsMC41NTQtMC43MTNjMC42ODksMC4yNDMsMS41MjgsMC4zOTEsMi40NDYsMC4zOTFzMS43NTctMC4xNDYsMi40NDYtMC4zOTFsMC41NTQsMC43MTMNCgkJYzAsMC43MTEtMS4zNDMsMS4yODctMywxLjI4N1MxMC42NzUsMTcuNjc0LDEwLjY3NSwxNi45NjN6Ii8+DQoJPGc+DQoJCTxyZWN0IHg9IjQiIHk9IjEwIiBmaWxsPSIjOTk5OTk5IiB3aWR0aD0iMSIgaGVpZ2h0PSIxIi8+DQoJCTxwYXRoIGZpbGw9IiM5OTk5OTkiIGQ9Ik0xNS4wNDMsMS4wNDNjLTAuNDEyLTAuMjI5LTAuOTA4LTAuMzc1LTEuNDU1LTAuMzc1Yy0wLjU1MywwLjAwMS0xLjA1MSwwLjE0OC0xLjQ2MywwLjM4MQ0KCQkJYy0wLjg3OCwwLjg4My0xLjU5OCwyLjU0Ni0yLjA0NSw0LjY0M0MxMC4xMDUsNS43ODksMTAuMTI1LDUuODk5LDEwLjE0OCw2SDguOTc3QzguNTE1LDQuMDgxLDcuODI0LDIuNTU4LDYuOTk0LDEuNzIzDQoJCQlDNi41NzIsMS40ODUsNi4wNjQsMS4zMzQsNS41LDEuMzM0QzQuOTM5LDEuMzMzLDQuNDM0LDEuNDgxLDQuMDE0LDEuNzE2Yy0xLjUyMSwxLjUyMS0yLjYwMiw1LjI5Ni0yLjYwMiw5LjcyMg0KCQkJYzAsMS42NDYsMC4xNTQsMy4xOTgsMC40Miw0LjU4NEMyLjU2MiwxNi42MDQsMy45MjIsMTcsNS41LDE3czIuOTM5LTAuMzk2LDMuNjY4LTAuOTc5QzkuMjkxLDE1LjM4MSw5LjM4NywxNC43MDQsOS40NTcsMTRoMS4xNTkNCgkJCWMtMC4wNDYsMC40NTEtMC4wOTEsMC45MDYtMC4xNTksMS4zMzNDMTEuMjE1LDE1LjczOCwxMi4zMjYsMTYsMTMuNTg4LDE2YzEuNTQ0LDAsMi44NzUtMC4zODksMy41OS0wLjk1OA0KCQkJYzAuMjYtMS4zNTQsMC40MS0yLjg3NCwwLjQxLTQuNDg1QzE3LjU4OCw2LjIyNSwxNi41MzEsMi41MzEsMTUuMDQzLDEuMDQzeiBNNiw5djNINS42MjNjMC4xMTcsMS4wNTUsMC4zMTksMi4wNzcsMC42MjcsM2gtMg0KCQkJYy0wLjMwOC0wLjkyMy0wLjUxLTEuOTQ1LTAuNjI3LTNIM1Y5aDAuNTM1QzMuNjEzLDcuNTkyLDMuODQ2LDYuMjEzLDQuMjUsNWgyQzUuODQ2LDYuMjEzLDUuNjEzLDcuNTkyLDUuNTM1LDlINnogTTUuNSwzLjYyNQ0KCQkJYy0wLjgyOCwwLTEuNS0wLjMzNi0xLjUtMC43NXMwLjY3Mi0wLjc1LDEuNS0wLjc1UzcsMi40NjEsNywyLjg3NVM2LjMyOCwzLjYyNSw1LjUsMy42MjV6IE05LjUzNSwxMw0KCQkJYzAuMDMxLTAuNTExLDAuMDUzLTEuMDI5LDAuMDUzLTEuNTYyQzkuNTg4LDkuODUsOS40NDMsOC4zNSw5LjE5NSw3aDEuMTc0YzAuMjUsMS4zNDYsMC4zOTMsMi44NDgsMC4zOTMsNC40MzgNCgkJCWMwLDAuNTM3LTAuMDI5LDEuMDU1LTAuMDYyLDEuNTYySDkuNTM1eiBNMTIuMTI1LDIuMTVjMC0wLjQxNCwwLjY3Mi0wLjc1LDEuNS0wLjc1czEuNSwwLjMzNiwxLjUsMC43NXMtMC42NzIsMC43NS0xLjUsMC43NQ0KCQkJUzEyLjEyNSwyLjU2NCwxMi4xMjUsMi4xNXogTTE2LDExaC0wLjYyM2MtMC4xMTcsMS4wNTUtMC4zMTgsMi4wNzctMC42MjcsM2gtMmMwLjMwOS0wLjkyMywwLjUxLTEuOTQ1LDAuNjI3LTNIMTNWOGgwLjQ2NQ0KCQkJYy0wLjA3OC0xLjQwOC0wLjMxMS0yLjc4Ny0wLjcxNS00aDJjMC40MDQsMS4yMTMsMC42MzcsMi41OTIsMC43MTUsNEgxNlYxMXoiLz4NCgkJPHJlY3QgeD0iMTQiIHk9IjkiIGZpbGw9IiM5OTk5OTkiIHdpZHRoPSIxIiBoZWlnaHQ9IjEiLz4NCgk8L2c+DQo8L2c+DQo8L3N2Zz4NCg==) !important;
	background-position: center center !important;
	background-size: 20px 20px !important;
	margin-top: 2px;
}

#toplevel_page_jetpack.wp-has-current-submenu .wp-menu-image,
#toplevel_page_jetpack.wp-has-current-submenu:hover .wp-menu-image {
	background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAxNi4wLjAsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+DQo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB3aWR0aD0iMjBweCIgaGVpZ2h0PSIyMHB4IiB2aWV3Qm94PSIwIDAgMjAgMjAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDIwIDIwIiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxnIGlkPSJqZXRwYWNrIj4NCgk8cGF0aCBmaWxsPSIjRkZGRkZGIiBkPSJNOC41LDE3Ljk2M0w3Ljk0NiwxNy4yNWMtMC42ODgsMC4yNDMtMS41MjgsMC4zOTEtMi40NDYsMC4zOTFzLTEuNzU4LTAuMTQ2LTIuNDQ3LTAuMzkxTDIuNSwxNy45NjMNCgkJYzAsMC43MTEsMS4zNDMsMS4yODcsMywxLjI4N1M4LjUsMTguNjc0LDguNSwxNy45NjN6Ii8+DQoJPHBhdGggZmlsbD0iI0ZGRkZGRiIgZD0iTTEwLjY3NSwxNi45NjNsMC41NTQtMC43MTNjMC42ODksMC4yNDMsMS41MjgsMC4zOTEsMi40NDYsMC4zOTFzMS43NTctMC4xNDYsMi40NDYtMC4zOTFsMC41NTQsMC43MTMNCgkJYzAsMC43MTEtMS4zNDMsMS4yODctMywxLjI4N1MxMC42NzUsMTcuNjc0LDEwLjY3NSwxNi45NjN6Ii8+DQoJPGc+DQoJCTxyZWN0IHg9IjQiIHk9IjEwIiBmaWxsPSIjRkZGRkZGIiB3aWR0aD0iMSIgaGVpZ2h0PSIxIi8+DQoJCTxwYXRoIGZpbGw9IiNGRkZGRkYiIGQ9Ik0xNS4wNDMsMS4wNDNjLTAuNDEyLTAuMjI5LTAuOTA4LTAuMzc1LTEuNDU1LTAuMzc1Yy0wLjU1MywwLjAwMS0xLjA1MSwwLjE0OC0xLjQ2MywwLjM4MQ0KCQkJYy0wLjg3OCwwLjg4My0xLjU5OCwyLjU0Ni0yLjA0NSw0LjY0M0MxMC4xMDUsNS43ODksMTAuMTI1LDUuODk5LDEwLjE0OCw2SDguOTc3QzguNTE1LDQuMDgxLDcuODI0LDIuNTU4LDYuOTk0LDEuNzIzDQoJCQlDNi41NzIsMS40ODUsNi4wNjQsMS4zMzQsNS41LDEuMzM0QzQuOTM5LDEuMzMzLDQuNDM0LDEuNDgxLDQuMDE0LDEuNzE2Yy0xLjUyMSwxLjUyMS0yLjYwMiw1LjI5Ni0yLjYwMiw5LjcyMg0KCQkJYzAsMS42NDYsMC4xNTQsMy4xOTgsMC40Miw0LjU4NEMyLjU2MiwxNi42MDQsMy45MjIsMTcsNS41LDE3czIuOTM5LTAuMzk2LDMuNjY4LTAuOTc5QzkuMjkxLDE1LjM4MSw5LjM4NywxNC43MDQsOS40NTcsMTRoMS4xNTkNCgkJCWMtMC4wNDYsMC40NTEtMC4wOTEsMC45MDYtMC4xNTksMS4zMzNDMTEuMjE1LDE1LjczOCwxMi4zMjYsMTYsMTMuNTg4LDE2YzEuNTQ0LDAsMi44NzUtMC4zODksMy41OS0wLjk1OA0KCQkJYzAuMjYtMS4zNTQsMC40MS0yLjg3NCwwLjQxLTQuNDg1QzE3LjU4OCw2LjIyNSwxNi41MzEsMi41MzEsMTUuMDQzLDEuMDQzeiBNNiw5djNINS42MjNjMC4xMTcsMS4wNTUsMC4zMTksMi4wNzcsMC42MjcsM2gtMg0KCQkJYy0wLjMwOC0wLjkyMy0wLjUxLTEuOTQ1LTAuNjI3LTNIM1Y5aDAuNTM1QzMuNjEzLDcuNTkyLDMuODQ2LDYuMjEzLDQuMjUsNWgyQzUuODQ2LDYuMjEzLDUuNjEzLDcuNTkyLDUuNTM1LDlINnogTTUuNSwzLjYyNQ0KCQkJYy0wLjgyOCwwLTEuNS0wLjMzNi0xLjUtMC43NXMwLjY3Mi0wLjc1LDEuNS0wLjc1UzcsMi40NjEsNywyLjg3NVM2LjMyOCwzLjYyNSw1LjUsMy42MjV6IE05LjUzNSwxMw0KCQkJYzAuMDMxLTAuNTExLDAuMDUzLTEuMDI5LDAuMDUzLTEuNTYyQzkuNTg4LDkuODUsOS40NDMsOC4zNSw5LjE5NSw3aDEuMTc0YzAuMjUsMS4zNDYsMC4zOTMsMi44NDgsMC4zOTMsNC40MzgNCgkJCWMwLDAuNTM3LTAuMDI5LDEuMDU0LTAuMDYyLDEuNTYySDkuNTM1eiBNMTIuMTI1LDIuMTVjMC0wLjQxNCwwLjY3Mi0wLjc1LDEuNS0wLjc1czEuNSwwLjMzNiwxLjUsMC43NXMtMC42NzIsMC43NS0xLjUsMC43NQ0KCQkJUzEyLjEyNSwyLjU2NCwxMi4xMjUsMi4xNXogTTE2LDExaC0wLjYyM2MtMC4xMTcsMS4wNTUtMC4zMTgsMi4wNzctMC42MjcsM2gtMmMwLjMwOS0wLjkyMywwLjUxLTEuOTQ1LDAuNjI3LTNIMTNWOGgwLjQ2NQ0KCQkJYy0wLjA3OC0xLjQwOC0wLjMxMS0yLjc4Ny0wLjcxNS00aDJjMC40MDQsMS4yMTMsMC42MzcsMi41OTIsMC43MTUsNEgxNlYxMXoiLz4NCgkJPHJlY3QgeD0iMTQiIHk9IjkiIGZpbGw9IiNGRkZGRkYiIHdpZHRoPSIxIiBoZWlnaHQ9IjEiLz4NCgk8L2c+DQo8L2c+DQo8L3N2Zz4NCg==) !important;
}

#toplevel_page_jetpack:hover .wp-menu-image {
	background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAxNi4wLjAsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+DQo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB3aWR0aD0iMjBweCIgaGVpZ2h0PSIyMHB4IiB2aWV3Qm94PSIwIDAgMjAgMjAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDIwIDIwIiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxnIGlkPSJqZXRwYWNrIj4NCgk8cGF0aCBmaWxsPSIjMkVBMkNDIiBkPSJNOC41LDE3Ljk2M0w3Ljk0NiwxNy4yNWMtMC42ODgsMC4yNDMtMS41MjgsMC4zOTEtMi40NDYsMC4zOTFzLTEuNzU4LTAuMTQ2LTIuNDQ3LTAuMzkxTDIuNSwxNy45NjMNCgkJYzAsMC43MTEsMS4zNDMsMS4yODcsMywxLjI4N1M4LjUsMTguNjc0LDguNSwxNy45NjN6Ii8+DQoJPHBhdGggZmlsbD0iIzJFQTJDQyIgZD0iTTEwLjY3NSwxNi45NjNsMC41NTQtMC43MTNjMC42ODksMC4yNDMsMS41MjgsMC4zOTEsMi40NDYsMC4zOTFzMS43NTctMC4xNDYsMi40NDYtMC4zOTFsMC41NTQsMC43MTMNCgkJYzAsMC43MTEtMS4zNDMsMS4yODctMywxLjI4N1MxMC42NzUsMTcuNjc0LDEwLjY3NSwxNi45NjN6Ii8+DQoJPGc+DQoJCTxyZWN0IHg9IjQiIHk9IjEwIiBmaWxsPSIjMkVBMkNDIiB3aWR0aD0iMSIgaGVpZ2h0PSIxIi8+DQoJCTxwYXRoIGZpbGw9IiMyRUEyQ0MiIGQ9Ik0xNS4wNDMsMS4wNDNjLTAuNDEyLTAuMjI5LTAuOTA4LTAuMzc1LTEuNDU1LTAuMzc1Yy0wLjU1MywwLjAwMS0xLjA1MSwwLjE0OC0xLjQ2MywwLjM4MQ0KCQkJYy0wLjg3OCwwLjg4My0xLjU5OCwyLjU0Ni0yLjA0NSw0LjY0M0MxMC4xMDUsNS43ODksMTAuMTI1LDUuODk5LDEwLjE0OCw2SDguOTc3QzguNTE1LDQuMDgxLDcuODI0LDIuNTU4LDYuOTk0LDEuNzIzDQoJCQlDNi41NzIsMS40ODUsNi4wNjQsMS4zMzQsNS41LDEuMzM0QzQuOTM5LDEuMzMzLDQuNDM0LDEuNDgxLDQuMDE0LDEuNzE2Yy0xLjUyMSwxLjUyMS0yLjYwMiw1LjI5Ni0yLjYwMiw5LjcyMg0KCQkJYzAsMS42NDYsMC4xNTQsMy4xOTgsMC40Miw0LjU4NEMyLjU2MiwxNi42MDQsMy45MjIsMTcsNS41LDE3czIuOTM5LTAuMzk2LDMuNjY4LTAuOTc5QzkuMjkxLDE1LjM4MSw5LjM4NywxNC43MDQsOS40NTcsMTRoMS4xNTkNCgkJCWMtMC4wNDYsMC40NTEtMC4wOTEsMC45MDYtMC4xNTksMS4zMzNDMTEuMjE1LDE1LjczOCwxMi4zMjYsMTYsMTMuNTg4LDE2YzEuNTQ0LDAsMi44NzUtMC4zODksMy41OS0wLjk1OA0KCQkJYzAuMjYtMS4zNTQsMC40MS0yLjg3NCwwLjQxLTQuNDg1QzE3LjU4OCw2LjIyNSwxNi41MzEsMi41MzEsMTUuMDQzLDEuMDQzeiBNNiw5djNINS42MjNjMC4xMTcsMS4wNTUsMC4zMTksMi4wNzcsMC42MjcsM2gtMg0KCQkJYy0wLjMwOC0wLjkyMy0wLjUxLTEuOTQ1LTAuNjI3LTNIM1Y5aDAuNTM1QzMuNjEzLDcuNTkyLDMuODQ2LDYuMjEzLDQuMjUsNWgyQzUuODQ2LDYuMjEzLDUuNjEzLDcuNTkyLDUuNTM1LDlINnogTTUuNSwzLjYyNQ0KCQkJYy0wLjgyOCwwLTEuNS0wLjMzNi0xLjUtMC43NXMwLjY3Mi0wLjc1LDEuNS0wLjc1UzcsMi40NjEsNywyLjg3NVM2LjMyOCwzLjYyNSw1LjUsMy42MjV6IE05LjUzNSwxMw0KCQkJYzAuMDMxLTAuNTExLDAuMDUzLTEuMDI5LDAuMDUzLTEuNTYyQzkuNTg4LDkuODUsOS40NDMsOC4zNSw5LjE5NSw3aDEuMTc0YzAuMjUsMS4zNDYsMC4zOTMsMi44NDgsMC4zOTMsNC40MzgNCgkJCWMwLDAuNTM3LTAuMDI5LDEuMDU1LTAuMDYyLDEuNTYySDkuNTM1eiBNMTIuMTI1LDIuMTVjMC0wLjQxNCwwLjY3Mi0wLjc1LDEuNS0wLjc1czEuNSwwLjMzNiwxLjUsMC43NXMtMC42NzIsMC43NS0xLjUsMC43NQ0KCQkJUzEyLjEyNSwyLjU2NCwxMi4xMjUsMi4xNXogTTE2LDExaC0wLjYyM2MtMC4xMTcsMS4wNTUtMC4zMTgsMi4wNzctMC42MjcsM2gtMmMwLjMwOS0wLjkyMywwLjUxLTEuOTQ1LDAuNjI3LTNIMTNWOGgwLjQ2NQ0KCQkJYy0wLjA3OC0xLjQwOC0wLjMxMS0yLjc4Ny0wLjcxNS00aDJjMC40MDQsMS4yMTMsMC42MzcsMi41OTIsMC43MTUsNEgxNlYxMXoiLz4NCgkJPHJlY3QgeD0iMTQiIHk9IjkiIGZpbGw9IiMyRUEyQ0MiIHdpZHRoPSIxIiBoZWlnaHQ9IjEiLz4NCgk8L2c+DQo8L2c+DQo8L3N2Zz4NCg==) !important;
}

#wp=fullscreen-title-prompt-text {
	color:rgba(0, 78, 102, 0.39);
}
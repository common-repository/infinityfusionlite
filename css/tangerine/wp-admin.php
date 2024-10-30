<?php header("Content-type: text/css; charset: UTF-8");  
require_once('../../../../../wp-load.php');
?>
/* 2 column liquid layout */
#wpwrap {
	height: auto;
	min-height: 100%;
	width: 100%;
	position: relative;
}

#wpcontent {
	height: 100%;
}

#wpcontent,
#wpfooter {
	margin-left: 170px;
}

.folded #wpcontent,
.folded #wpfooter {
	margin-left: 56px;
}

#wpbody-content {
	padding-bottom: 65px;
	float: left;
	width: 100%;
}

#adminmenuback,
#adminmenuwrap,
#adminmenu,
#adminmenu .wp-submenu {
	width: 150px;
}

#adminmenuback {
	position: absolute;
	top: 0;
	bottom: 0;
	z-index: -1;
}

#adminmenu {
	clear: left;
	margin: 12px 0 0;
	padding: 0;
	list-style: none;
}

.folded #adminmenuback,
.folded #adminmenuwrap,
.folded #adminmenu,
.folded #adminmenu li.menu-top {
	width: 36px;
}

/* inner 2 column liquid layout */

.inner-sidebar {
	float: right;
	clear: right;
	display: none;
	width: 281px;
	position: relative;
}

.columns-2 .inner-sidebar {
	margin-right: auto;
	width: 286px;
	display: block;
}

.inner-sidebar #side-sortables,
.columns-2 .inner-sidebar #side-sortables {
	min-height: 300px;
	width: 280px;
	padding: 0;
}

.has-right-sidebar .inner-sidebar {
	display: block;
}

.has-right-sidebar #post-body {
	float: left;
	clear: left;
	width: 100%;
	margin-right: -2000px;
}

.has-right-sidebar #post-body-content {
	margin-right: 300px;
	float: none;
	width: auto;
}

/* 2 columns main area */

#col-container,
#col-left,
#col-right {
	overflow: hidden;
	padding: 0;
	margin: 0;
}

#col-left {
	width: 35%;
}

#col-right {
	float: right;
	clear: right;
	width: 65%;
}

.col-wrap {
	padding: 0 7px;
}

/* utility classes */
.alignleft {
	float: left;
}

.alignright {
	float: right;
}

.textleft {
	text-align: left;
}

.textright {
	text-align: right;
}

.clear {
	clear: both;
}

/* Hide visually but not from screen readers */
.screen-reader-text,
.screen-reader-text span,
.ui-helper-hidden-accessible {
	position: absolute;
	left: -1000em;
	top: -1000em;
	height: 1px;
	width: 1px;
	overflow: hidden;
}

.screen-reader-shortcut {
	position: absolute;
	top: -1000em;
}

.screen-reader-shortcut:focus {
	left: 6px;
	top: -21px;
	height: auto;
	width: auto;
	display: block;
	font-size: 14px;
	font-weight: 600;
	padding: 15px 23px 14px;
	background: #f1f1f1;
	color: #21759b;
	border-radius: 3px;
	z-index: 100000;
	line-height: normal;
	-webkit-box-shadow: 0 0 2px 2px rgba(0,0,0,.6);
	box-shadow: 0 0 2px 2px rgba(0,0,0,.6);
	text-decoration: none;
}

.hidden,
.js .closed .inside,
.js .hide-if-js,
.no-js .hide-if-no-js,
.js.wp-core-ui .hide-if-js,
.js .wp-core-ui .hide-if-js,
.no-js.wp-core-ui .hide-if-no-js,
.no-js .wp-core-ui .hide-if-no-js {
	display: none;
}

/* include margin and padding in the width calculation of input and textarea */
input[type="text"],
input[type="password"],
input[type="number"],
input[type="search"],
input[type="email"],
input[type="url"],
textarea {
	-moz-box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-ms-box-sizing: border-box; /* ie8 only */
	box-sizing: border-box;
	-webkit-border-radius: 0;
	border-radius: 0;
}

input[type="checkbox"],
input[type="radio"] {
	border-width: 1px;
	border-style: solid;
	clear: none;
	cursor: pointer;
	display: inline-block;
	line-height: 0;
	height: 16px;
	margin: -4px 4px 0 0;
	outline: 0;
	padding: 0 !important;
	text-align: center;
	vertical-align: middle;
	width: 16px;
	-webkit-appearance: none;
	-webkit-box-sizing: border-box;
	box-sizing: border-box;
}
.media-sidebar .setting input[type="checkbox"] {
	width: 16px;
}

td > input[type="checkbox"],
.wp-admin p input[type=checkbox],
.wp-admin p input[type=radio] {
	margin-top: 0;
}

.wp-admin p label input[type=checkbox] {
	margin-top: -4px;
}

.wp-admin p label input[type=radio] {
	margin-top: -2px;
}

input[type="checkbox"] {
	border-radius: 0;
}

input[type=radio] {
	border-radius: 50%;
	margin-right: 4px;
	line-height: 10px;
}

input[type=checkbox]:checked:before {
	content: '\f147';
	display: inline-block;
	float: left;
	font: normal 21px/1 'Dashicons';
	vertical-align: middle;
	margin: -3px 0 0 -4px;
	-webkit-font-smoothing: antialiased;
}

input[type=radio]:checked:before {
	content: '\2022';
	text-indent: -9999px;
	border-radius: 50px;
	display: inline-block;
	float: left;
	font-size: 24px;
	vertical-align: middle;
	width: 6px;
	height: 6px;
	margin: 4px;
	line-height: 16px;
}

@-moz-document url-prefix() {
	input[type=checkbox],
	input[type=radio],
	.form-table input.tog {
		margin-bottom: -1px;
	}
}

/* Selects */

#wpbody select {
	line-height: 24px;
	height: 24px;
}

/* Search */
input[type="search"] {
	-webkit-appearance: textfield;
}

input[type="search"]::-webkit-search-decoration {
	display: none;
}

/* general */
html,
body {
	height: 100%;
	margin: 0;
	padding: 0;
}

body {
	font-family: "Open Sans", sans-serif;
	font-size: 13px;
	line-height: 1.4em;
	min-width: 600px;
}

body.iframe {
	min-width: 0;
}

body.login {
	background: #fbfbfb;
	min-width: 0;
}

iframe,
img {
	border: 0;
}

td,
textarea,
input,
select,
button {
	font-family: inherit;
	font-size: inherit;
	font-weight: inherit;
}

td,
textarea {
	line-height: inherit;
}

textarea {
	overflow: auto;
}

textarea,
input,
select {
	font-size: 14px;
	padding: 2px 3px 2px 6px;
	line-height: 15px;
}

a,
input[type="text"],
input[type="password"],
input[type="number"],
input[type="search"],
input[type="email"],
input[type="url"],
select,
textarea,
div {
	outline: 0;
}

.wp-admin input[type="file"] {
	border: none;
	background: none;
	padding: 8px 0 0;
}

a:focus,
a:active {
	outline: thin dotted;
}

#adminmenu a:focus,
#adminmenu a:active,
.screen-reader-text:focus {
	outline: none;
}

blockquote,
q {
	quotes: none;
}

blockquote:before,
blockquote:after,
q:before,
q:after {
	content: '';
	content: none;
}

p {
	font-size: 14px;
	line-height: 1.5;
	margin: 1em 0;
}

blockquote {
	margin: 1em;
}

label {
	cursor: pointer;
}

li,
dd {
	margin-bottom: 6px;
}

input,
select {
	margin: 1px;
	padding: 3px;
}

h1,
h2,
h3,
h4,
h5,
h6 {
	display: block;
	font-weight: 600;
}

h1 {
	font-size: 2em;
	margin: .67em 0;
}

h2 {
	font-size: 1.5em;
	margin: .83em 0;
}

h3 {
	font-size: 1.3em;
	margin: 1em 0;
}

h4 {
	font-size: 1em;
	margin: 1.33em 0;
}

h5 {
	font-size: 0.83em;
	margin: 1.67em 0;
}

h6 {
	font-size: 0.67em;
	margin: 2.33em 0;
}

ul,
ol {
	padding: 0;
}

ul {
	list-style: none;
}

ol {
	list-style-type: decimal;
	margin-left: 2em;
}

ul.ul-disc {
	list-style: disc outside;
}

ul.ul-square {
	list-style: square outside;
}

ol.ol-decimal {
	list-style: decimal outside;
}

ul.ul-disc,
ul.ul-square,
ol.ol-decimal {
	margin-left: 1.8em;
}

ul.ul-disc > li,
ul.ul-square > li,
ol.ol-decimal > li {
	margin: 0 0 0.5em;
}

.code,
code {
	font-family: Consolas, Monaco, monospace;
}

input.code {
	padding-bottom: 0;
	padding-top: 4px;
}

kbd,
code {
	padding: 1px 3px;
	margin: 0 1px;
	font-size: 13px;
}

.subsubsub {
	list-style: none;
	margin: 8px 0 0;
	padding: 0;
	font-size: 13px;
	float: left;
}

.subsubsub a {
	line-height: 2;
	padding: .2em;
	text-decoration: none;
}

.subsubsub a .count,
.subsubsub a.current .count {
	color: rgb(61, 70, 92);
	font-weight: normal;
}

.subsubsub a.current {
	font-weight: 600;
	border: none;
}

.subsubsub li {
	display: inline-block;
	margin: 0;
	padding: 0;
	white-space: nowrap;
}

textarea,
input[type="text"],
input[type="password"],
input[type="file"],
input[type="email"],
input[type="number"],
input[type="search"],
input[type="tel"],
input[type="url"],
select,
.tablenav-pages span.current,
#titlediv #title,
#postcustomstuff table,
#postcustomstuff input,
#postcustomstuff textarea,
.imgedit-menu div,
.plugin-update-tr .update-message,
#poststuff .inside .the-tagcloud,
#menu-management .menu-edit,
.nav-menus-php .list-container,
.menu-item-handle,
.link-to-original,
.nav-menus-php .major-publishing-actions .form-invalid,
#TB_window,
.tbtitle,
.highlight,
.editwidget .widget-inside {
	border-width: 1px;
	border-style: solid;
}

/* .widefat - main style for tables */
.widefat {
	border-spacing: 0;
	width: 100%;
	clear: both;
	margin: 0;
}

.widefat * {
	word-wrap: break-word;
}

.widefat a {
	text-decoration: none;
}

.widefat td,
.widefat th {
	padding: 8px 10px;
}
.widefat tfoot th {
	border-bottom: none;
}

.widefat .no-items td {
	border-bottom-width: 0;
}

.widefat td {
	vertical-align: top;
}

.widefat td,
.widefat td p,
.widefat td ol,
.widefat td ul {
	font-size: 13px;
	line-height: 1.5em;
}

.widefat th {
	text-align: left;
	line-height: 1.3em;
	font-size: 14px;
}

.widefat th input {
	margin: 0 0 0 8px;
	padding: 0;
	vertical-align: text-top;
}

.widefat .check-column {
	width: 2.2em;
	padding: 6px 0 25px;
	vertical-align: top;
}

.widefat th input[type=checkbox] {
	margin-top: -1px;
}

.widefat tbody th.check-column {
	padding: 9px 0 22px;
}

.widefat.media .check-column {
	padding-top: 8px;
}

.widefat thead th.check-column,
.widefat tbody th.check-column,
.widefat tfoot th.check-column {
	padding: 11px 0 0 3px;
}

.widefat thead th.check-column {
	padding-top: 10px;
}

#update-plugins-table tbody th.check-column,
.plugins tbody th.check-column,
.plugins tbody,
.plugins .inactive.update th.check-column {
	padding: 8px 0 0 2px;
}

.plugins tbody th.check-column input[type=checkbox] {
	margin-top: 4px;
}

#update-plugins-table tbody td p {
	margin-top: 0;
}

#update-plugins-table tbody td p strong {
	font-size: 14px;
}

.plugins thead th.check-column,
.plugins tfoot th.check-column,
.plugins .inactive th.check-column,
#update-plugins-table thead th.check-column,
#update-plugins-table tfoot th.check-column {
	padding-left: 6px;
}

#update-plugins-table thead th.check-column,
#update-plugins-table tfoot th.check-column {
	padding-top: 11px;
}

.update-php div.updated,
.update-php div.error {
	margin-left: 0;
}

.no-js .widefat thead .check-column input,
.no-js .widefat tfoot .check-column input {
	display: none;
}

.widefat .num,
.column-comments,
.column-links,
.column-posts {
	text-align: center;
}

.widefat th#comments {
	vertical-align: middle;
}

.wrap {
	margin: 10px 20px 0 2px;
}

div.updated,
div.error {
	padding: 0 0.6em;
	margin: 5px 15px 2px;
}

div.updated p,
div.error p {
	margin: 0.5em 0;
	padding: 2px;
}

.wrap div.updated,
.wrap div.error,
.media-upload-form div.error {
	margin: 5px 0 15px;
}

div.updated,
.login .message,
.press-this #message {
	border: none;
	padding: 1px 12px;
}

div.error,
.login #login_error {
	border: none;
}

div.error {
	padding: 1px 12px;
}

.wrap h2,
.subtitle {
	font-weight: normal;
	margin: 0;
}

.wrap h2 {
	font-size: 23px;
	font-weight: 400;
	padding: 9px 15px 4px 0;
	line-height: 29px;
}

.subtitle {
	font-size: 14px;
	padding-left: 25px;
}

.wrap .add-new-h2,
.wrap .add-new-h2:active,
#add-new-comment a {
	font-family: "Open Sans", sans-serif;
	border: none;
	border-radius: 2px;
	text-shadow: none;
	font-weight: 600;
	font-size: 13px;
	margin-left: 4px;
	padding: 4px 8px;
	position: relative;
	text-decoration: none;
	top: -3px;
}

.wrap h2.long-header {
	padding-right: 0;
}

html,
.wp-dialog {
	background-color: #fff;
}

textarea,
input[type="text"],
input[type="password"],
input[type="file"],
input[type="email"],
input[type="number"],
input[type="search"],
input[type="tel"],
input[type="url"],
select {
	background-color: #fff;
	color: #333;
}

select {
	color: #000;
}

select[disabled] {
	color: #7f7f7f;
}

select:focus {
	border-color: #aaa;
}

textarea:focus,
input[type="text"]:focus,
input[type="password"]:focus,
input[type="file"]:focus,
input[type="email"]:focus,
input[type="number"]:focus,
input[type="search"]:focus,
input[type="tel"]:focus,
input[type="url"]:focus,
select:focus {
	-webkit-box-shadow: 1px 1px 2px rgba(0,0,0,0.1);
	box-shadow: 1px 1px 2px rgba(0,0,0,0.1);
}

input[readonly] {
	background-color: #eee;
}

:-moz-placeholder,
.wp-core-ui :-moz-placeholder {
   color: #a9a9a9;
}

/*------------------------------------------------------------------------------
  1.0 - Text Styles
------------------------------------------------------------------------------*/

div.sidebar-name h3,
#menu-management .nav-tab,
#dashboard_plugins h5,
a.rsswidget,
#dashboard_right_now td.b,
#dashboard-widgets h4,
.tool-box .title,
#poststuff h3,
.metabox-holder h3,
.pressthis a,
#your-profile legend,
.inline-edit-row fieldset span.title,
.inline-edit-row fieldset span.checkbox-title,
.tablenav .displaying-num,
.widefat th,
.quicktags,
.search {
	font-family: "Open Sans", sans-serif;
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
#your-profile #rich_editing,
.widefat thead th,
.widefat tfoot th {
	line-height: 1.4em;
}

h2 .nav-tab,
.wrap h2,
.subtitle,
.login form .input {
	font-family: "Open Sans", sans-serif;
}

.quicktags,
.search {
	font-size: 12px;
}

.icon32 {
	display: none;
}

.icon16 {
	height: 18px;
	width: 18px;
	padding: 6px 6px;
	margin: -6px 0 0 -8px;
	float: left;
}

/* New Menu icons */

.icon16:before {
	font-family: dashicons !important;
	speak: none;
	font-size: 20px;
	line-height: 20px;
	padding: 6px 0;
	height: 34px;
	width: 20px;
	display: inline-block;
	-webkit-font-smoothing: antialiased;
	-moz-transition: all .1s ease-in-out;
	-webkit-transition: all .1s ease-in-out;
	transition: all .1s ease-in-out;
}

.icon16.icon-dashboard:before,
#adminmenu .menu-icon-dashboard div.wp-menu-image:before {
	content: '\f102';
	margin-top: -1px;
	color: rgb(65, 15, 8);
}

.icon16.icon-post:before,
#adminmenu .menu-icon-post div.wp-menu-image:before {
	content: '\f109';
	color: rgb(65, 15, 8);
}

.icon16.icon-media:before,
#adminmenu .menu-icon-media div.wp-menu-image:before {
	content: '\f104';
	color: rgb(65, 15, 8);
}

.icon16.icon-links:before,
#adminmenu .menu-icon-links div.wp-menu-image:before {
	content: '\f103';
	color: rgb(65, 15, 8);
}

.icon16.icon-page:before,
#adminmenu .menu-icon-page div.wp-menu-image:before {
	content: '\f105';
	color: rgb(65, 15, 8);
}

.icon16.icon-comments:before,
#adminmenu .menu-icon-comments div.wp-menu-image:before {
	content: '\f101';
	color: rgb(65, 15, 8);
	margin-top: 1px;
}

.icon16.icon-appearance:before,
#adminmenu .menu-icon-appearance div.wp-menu-image:before {
	content: '\f100';
	color: rgb(65, 15, 8);
}

.icon16.icon-plugins:before,
#adminmenu .menu-icon-plugins div.wp-menu-image:before {
	content: '\f106';
	color: rgb(65, 15, 8);
}

.icon16.icon-users:before,
#adminmenu .menu-icon-users div.wp-menu-image:before {
	content: '\f110';
	color: rgb(65, 15, 8);
}

.icon16.icon-tools:before,
#adminmenu .menu-icon-tools div.wp-menu-image:before {
	content: '\f107';
	color: rgb(65, 15, 8);
}

.icon16.icon-settings:before,
#adminmenu .menu-icon-settings div.wp-menu-image:before {
	content: '\f108';
	color: rgb(65, 15, 8);
}

.icon16.icon-site:before,
#adminmenu .menu-icon-site div.wp-menu-image:before {
	content: '\f112'
	color: rgb(65, 15, 8);
}

.icon16.icon-generic:before,
#adminmenu .menu-icon-generic div.wp-menu-image:before {
	content: '\f111';
	color: rgb(65, 15, 8);
}

.key-labels label {
	line-height: 24px;
}

strong, b {
	font-weight: 600;
}

.pre {
	/* https://developer.mozilla.org/en-US/docs/CSS/white-space */
	white-space: pre-wrap; /* css-3 */
	word-wrap: break-word; /* IE 5.5 - 7 */
}

.howto {
	font-style: italic;
	display: block;
	font-family: "Open Sans", sans-serif;
}

p.install-help {
	margin: 8px 0;
	font-style: italic;
}

.no-break {
	white-space: nowrap;
}

/*------------------------------------------------------------------------------
  2.0 - Forms
------------------------------------------------------------------------------*/


.wp-admin select {
	padding: 2px;
	height: 2em;
}

.wp-admin select[multiple] {
	height: auto;
}

.submit {
	padding: 1.5em 0;
	margin: 5px 0;
	-webkit-border-bottom-left-radius: 3px;
	-webkit-border-bottom-right-radius: 3px;
	border-bottom-left-radius: 3px;
	border-bottom-right-radius: 3px;
}

form p.submit a.cancel:hover {
	text-decoration: none;
}

p.submit {
	text-align: left;
	max-width: 100%;
	border-top-width: 1px;
	border-top-style: solid;
	margin-top: 20px;
	padding-top: 10px;
}

.textright p.submit {
	border: none;
	text-align: right;
}

table.form-table + p.submit,
table.form-table + input + p.submit,
table.form-table + input + input + p.submit {
	border-top: none;
	padding-top: 0;
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
	text-decoration: none;
	border: none;
}

#minor-publishing-actions input,
#major-publishing-actions input,
#minor-publishing-actions .preview {
	text-align: center;
}

textarea.all-options,
input.all-options {
	width: 250px;
}

input.large-text,
textarea.large-text {
	width: 99%;
}

input.regular-text,
#adduser .form-field input {
	width: 25em;
}

input.small-text {
	width: 50px;
	padding: 1px 6px;
}

input[type="number"].small-text {
	width: 60px;
}

#doaction,
#doaction2,
#post-query-submit {
	margin: 1px 8px 0 0;
}

.tablenav #changeit,
.tablenav #delete_all,
.tablenav #clear-recent-list {
	margin-top: 1px;
}

.tablenav .actions select {
	float: left;
	margin-right: 6px;
	max-width: 200px;
}

.ie8 .tablenav .actions select {
	width: 155px;
}

.ie8 .tablenav .actions select#cat {
	width: 200px;
}

#timezone_string option {
	margin-left: 1em;
}

label,
#your-profile label + a {
	vertical-align: middle;
}

fieldset label,
#your-profile label + a {
	vertical-align: baseline;
}

#misc-publishing-actions label {
	vertical-align: baseline;
}

#misc-publishing-actions label[for="post_status"]:before {
	content: '\f173';
	display: inline-block;
	font: 20px/1 dashicons;
	left: -1px;
	padding: 0 6px 0 0;
	position: relative;
	top: 0;
	text-decoration: none !important;
	vertical-align: top;

	-webkit-font-smoothing: antialiased;
}

#pass-strength-result {
	border-style: solid;
	border-width: 1px;
	float: left;
	margin: 13px 5px 5px 1px;
	padding: 3px 5px;
	text-align: center;
	width: 200px;
	display: none;
}
.indicator-hint {
	padding-top: 8px;
}

p.search-box {
	float: right;
	margin: 0;
}

.search-box input[name="s"],
#search-plugins input[name="s"],
.tagsdiv .newtag {
	float: left;
	height: 24px;
	margin: 0 4px 0 0;
}

input[type="text"].ui-autocomplete-loading {
	background: transparent url('../../../../wp-admin/images/loading.gif') no-repeat right center;
	visibility: visible;
}

ul#add-to-blog-users {
	margin: 0 0 0 14px;
}

.ui-autocomplete-input.open {
	border-bottom-right-radius: 0;
	border-bottom-left-radius: 0;
}

.ui-autocomplete {
	padding: 0;
	margin: 0;
	list-style: none;
	position: absolute;
	z-index: 10000;
	border-bottom-right-radius: 3px;
	border-bottom-left-radius: 3px;
	border-width: 1px;
	border-style: solid;
}

.ui-autocomplete li {
	margin-bottom: 0;
	white-space: nowrap;
	text-align: left;
}

.ui-autocomplete li a {
	display: block;
	height: 100%;
	padding: 4px 10px;
}

.ui-autocomplete li a.ui-state-focus {
	cursor: pointer;
}

/*------------------------------------------------------------------------------
  3.0 - Actions
------------------------------------------------------------------------------*/

#major-publishing-actions {
	padding: 10px 10px 8px;
	clear: both;
	border-top: 1px solid #f5f5f5;
	margin-top: -2px;
}

#delete-action {
	line-height: 25px;
	vertical-align: middle;
	text-align: left;
	float: left;
}

#publishing-action {
	text-align: right;
	float: right;
	line-height: 23px;
}

#publishing-action .spinner {
	float: left;
}

#misc-publishing-actions {
	padding: 6px 0 0;
}

.misc-pub-section {
	padding: 6px 10px 8px;
	border-width: 1px 0;
	border-style: solid;
}

.misc-pub-section:first-child {
	border-top-width: 0;
}

.misc-pub-section-last {
	border-bottom-width: 0;
}

#minor-publishing-actions {
	padding: 10px 10px 2px 8px;
	text-align: right;
}

#minor-publishing {
	border-bottom-width: 1px;
	border-bottom-style: solid;
	-webkit-box-shadow: 0 1px 0 #fff;
	box-shadow: 0 1px 0 #fff;
}

#save-post {
	float: left;
}

.preview {
	float: right;
}

#sticky-span {
	margin-left: 18px;
}

.side-info {
	margin: 0;
	padding: 4px;
	font-size: 11px;
}

.side-info h5 {
	padding-bottom: 7px;
	font-size: 14px;
	margin: 12px 2px 5px;
	border-bottom-width: 1px;
	border-bottom-style: solid;
}

.side-info ul {
	margin: 0;
	padding-left: 18px;
	list-style: square;
}

.approve,
.unapproved .unapprove {
	display: none;
}

.unapproved .approve,
.spam .approve,
.trash .approve {
	display: inline;
}

td.action-links,
th.action-links {
	text-align: right;
}


/*------------------------------------------------------------------------------
  4.0 - Notifications
------------------------------------------------------------------------------*/

#update-nag,
.update-nag {
	line-height: 19px;
	padding: 5px 0;
	font-size: 12px;
	text-align: center;
	margin: -1px 15px 0 5px;
	border-width: 1px;
	border-style: solid;
	-webkit-border-bottom-right-radius: 3px;
	-webkit-border-bottom-left-radius: 3px;
	border-bottom-right-radius: 3px;
	border-bottom-left-radius: 3px;
}

.plugins .plugin-update {
	padding: 0;
}

.plugin-update .update-message {
	margin: 0 10px 8px 31px;
	font-weight: 600;
}

ul#dismissed-updates {
	display: none;
}

form.upgrade {
	margin-top: 8px;
}

form.upgrade .hint {
	font-style: italic;
	font-size: 85%;
	margin: -0.5em 0 2em 0;
}

.update-php .spinner {
	float: none;
	margin: -4px 0;
}

#ajax-loading,
.ajax-loading,
.ajax-feedback,
.imgedit-wait-spin,
.list-ajax-loading { /* deprecated */
	visibility: hidden;
}

#ajax-response.alignleft {
	margin-left: 2em;
}


/*------------------------------------------------------------------------------
  6.0 - Admin Header
------------------------------------------------------------------------------*/
#adminmenu a,
#sidemenu a,
#taglist a,
#catlist a {
	text-decoration: none;
}

/*------------------------------------------------------------------------------
  6.1 - Screen Options Tabs
------------------------------------------------------------------------------*/

#screen-options-wrap,
#contextual-help-wrap {
	margin: 0;
	padding: 8px 20px 12px;
	position: relative;
}

#contextual-help-wrap {
	overflow: auto;
	margin-left: 0 !important;
}

#screen-meta .screen-reader-text {
	visibility: hidden;
}

#screen-meta-links {
	margin: 0 20px 0 0;
}

#screen-meta-links a:focus {
	-webkit-box-shadow: 1px 1px 1px rgba(0,0,0,0.4);
	box-shadow: 1px 1px 1px rgba(0,0,0,0.4);
	outline: none;
}

/* screen options and help tabs revert */
#screen-meta {
	display: none;
	font-size: 14px;
	margin: 0 20px -2px 0px;
	position: relative;
}

#screen-options-link-wrap,
#contextual-help-link-wrap {
	float: right;
	height: 23px;
	padding: 3px 6px;
	margin: 0 0 0 6px;
	font-family: "Open Sans", sans-serif;
}

#screen-meta-links .screen-meta-toggle {
	position: relative;
	top: 0;
}

#screen-meta-links a.show-settings {
	display: block;
	font-size: 14px;
	height: 22px;
	line-height: 22px;
	padding: 1px 0 0 10px;
	text-decoration: none;
	z-index: 1;
}

#screen-meta-links a:after {
	right: 0;
	content: '\f140';
	font: 20px/1 dashicons;
	display: inline-block;
	padding: 0 5px 0 0;
	bottom: 2px;
	position: relative;
	vertical-align: bottom;
	-webkit-font-smoothing: antialiased;
	text-decoration: none !important;
}

#screen-meta-links a.screen-meta-active:after {
	content: '\f142';
}

#screen-meta-links a.show-settings:hover {
	text-decoration: none;
}
/* end screen options and help tabs */

.toggle-arrow {
	background-repeat: no-repeat;
	background-position: top left;
	background-color: transparent;
	height: 22px;
	line-height: 22px;
	display: block;
}

.toggle-arrow-active {
	background-position: bottom left;
}

#screen-options-wrap h5,
#contextual-help-wrap h5 {
	margin: 8px 0;
	font-size: 13px;
}

.metabox-prefs label {
	display: inline-block;
	padding-right: 15px;
	white-space: nowrap;
	line-height: 30px;
}

.metabox-prefs label input[type=checkbox] {
	margin-top: -4px;
	margin-right: 6px;
}

.metabox-prefs label input {
	margin: 0 5px 0 2px;
}

.metabox-prefs .columns-prefs label input {
	margin: 0 2px;
}

.metabox-prefs label a {
	display: none;
}

/*------------------------------------------------------------------------------
  6.2 - Help Menu
------------------------------------------------------------------------------*/

#contextual-help-wrap {
	padding: 0;
}

#contextual-help-columns {
	position: relative;
}

#contextual-help-back {
	position: absolute;
	top: 0;
	bottom: 0;
	left: 150px;
	right: 170px;
	border-width: 0 1px;
	border-style: solid;
}

#contextual-help-wrap.no-sidebar #contextual-help-back {
	right: 0;

	border-right-width: 0;
	-webkit-border-bottom-right-radius: 2px;
	border-bottom-right-radius: 2px;
}

.contextual-help-tabs {
	float: left;
	width: 150px;
	margin: 0;
}

.contextual-help-tabs ul {
	margin: 1em 0;
}

.contextual-help-tabs li {
	margin-bottom: 0;
	list-style-type: none;
	border-style: solid;
	border-width: 1px 0;
	border-color: transparent;
}

.contextual-help-tabs a {
	display: block;
	padding: 5px 5px 5px 12px;
	line-height: 18px;
	text-decoration: none;
}

.contextual-help-tabs .active {
	padding: 0;
	margin: 0 -1px 0 0;
	border-width: 0 0 0 2px;
	border-style: solid;
}

.contextual-help-tabs .active a {
	border-style: solid;
	border-width: 1px 0 1px 0;
}

.contextual-help-tabs-wrap {
	padding: 0 20px;
	overflow: auto;
}

.help-tab-content {
	display: none;
	margin: 0 22px 12px 0;
	line-height: 1.6em;
}

.help-tab-content.active {
	display: block;
}

.help-tab-content ul li {
	list-style-type: disc;
	margin-left: 18px;
}

.contextual-help-sidebar {
	width: 150px;
	float: right;
	padding: 0 8px 0 12px;
	overflow: auto;
}


/*------------------------------------------------------------------------------
  7.0 - Main Navigation (Left Menu)
------------------------------------------------------------------------------*/

#adminmenuwrap {
	position: relative;
	float: left;
}

#adminmenushadow {
	position: absolute;
	top: 0;
	right: 0;
	bottom: 0;
	width: 6px;
	z-index: 20;
}

/* side admin menu */
#adminmenu * {
	-webkit-user-select: none;
	-moz-user-select: none;
	user-select: none;
}

#adminmenu li {
	margin: 0;
	padding: 0;
	cursor: pointer;
}

#adminmenu a {
	display: block;
	line-height: 18px;
	padding: 2px 5px;
}

#adminmenu li.menu-top {
	border: none;
	min-height: 34px;
	position: relative;
}

#adminmenu .wp-submenu {
	list-style: none;
	position: absolute;
	top: -1000em;
	left: 150px;
	overflow: visible;
	word-wrap: break-word;
}

#adminmenu .wp-submenu,
.folded #adminmenu a.wp-has-current-submenu:focus + .wp-submenu,
.folded #adminmenu .wp-has-current-submenu .wp-submenu {
	margin-top: 1px;
	margin-right: -1px;
	padding: 7px 0 8px;
	z-index: 9999;
}

.js #adminmenu .sub-open,
.js #adminmenu .opensub .wp-submenu,
#adminmenu a.menu-top:focus + .wp-submenu,
.no-js li.wp-has-submenu:hover .wp-submenu {
	top: -1px;
}

#adminmenu .wp-has-current-submenu .wp-submenu,
.no-js li.wp-has-current-submenu:hover .wp-submenu,
#adminmenu a.wp-has-current-submenu:focus + .wp-submenu,
#adminmenu .wp-has-current-submenu .wp-submenu.sub-open,
#adminmenu .wp-has-current-submenu.opensub .wp-submenu {
	position: relative;
	z-index: 2;
	top: auto;
	left: auto;
	right: auto;
	bottom: auto;
	border: 0 none;
	margin-top: 0;

	-webkit-box-shadow: none;
	box-shadow: none;
}

.folded #adminmenu .wp-submenu.sub-open,
.folded #adminmenu .opensub .wp-submenu,
.folded #adminmenu .wp-has-current-submenu .wp-submenu.sub-open,
.folded #adminmenu .wp-has-current-submenu.opensub .wp-submenu,
.folded #adminmenu a.menu-top:focus + .wp-submenu,
.folded #adminmenu .wp-has-current-submenu a.menu-top:focus + .wp-submenu,
.no-js.folded #adminmenu .wp-has-submenu:hover .wp-submenu  {
	top: -1px;
	left: 36px;
	margin-top: 2px;
}

.folded #adminmenu a.wp-has-current-submenu:focus + .wp-submenu,
.folded #adminmenu .wp-has-current-submenu .wp-submenu {
	border-width: 1px;
	border-style: solid;
	position: absolute;
	top: -1000em;
}

#adminmenu .wp-not-current-submenu .wp-submenu,
.folded #adminmenu .wp-has-current-submenu .wp-submenu {
	min-width: 150px;
	width: auto;
}

#adminmenu .wp-submenu a {
	font-size: 13px;
	line-height: 1.2;
	margin: 0;
	padding: 6px 0;
}

#adminmenu .wp-not-current-submenu li > a,
.folded #adminmenu .wp-has-current-submenu li > a {
	padding-right: 16px;
	padding-left: 14px;
	-moz-transition: all .1s ease-in-out;
	-webkit-transition: all .1s ease-in-out;
	transition: all .1s ease-in-out;
}

#adminmenu .wp-has-current-submenu ul > li > a,
.folded #adminmenu li.menu-top .wp-submenu > li > a {
	padding: 6px 12px;
}

#adminmenu a.menu-top,
#adminmenu .wp-submenu-head {
	font-size: 14px;
	font-weight: 400;
	line-height: 18px;
	padding: 0;
}

#adminmenu .wp-submenu-head,
.folded #adminmenu .wp-menu-name {
	display: none;
}

.folded #adminmenu .wp-submenu-head {
	display: block;
}

#adminmenu .wp-submenu li {
	padding: 0;
	margin: 0;
	overflow: hidden;
}

#adminmenu .wp-menu-image img {
	padding: 7px 0 0 7px;
	opacity: 0.6;
	filter: alpha(opacity=60);
}

#adminmenu div.wp-menu-name {
	padding: 7px 12px 7px 0;
}

#adminmenu div.wp-menu-image {
	float: left;
	margin: 0;
	width: 34px;
	height: 30px;
	text-align: center;
}

#adminmenu div.wp-menu-image:before {
	font-family: dashicons !important;
	color: #fff;
	speak: none;
	font-size: 20px;
	line-height: 20px;
	padding: 6px 0;
	height: 34px;
	width: 20px;
	display: inline-block;
	-webkit-font-smoothing: antialiased;
	-moz-transition: all .1s ease-in-out;
	-webkit-transition: all .1s ease-in-out;
	transition: all .1s ease-in-out;
}

.folded #adminmenu div.wp-menu-image {
	height: 30px;
	width: 34px;
	position: absolute;
	z-index: 25;
}

.folded #adminmenu a.menu-top {
	height: 34px;
}

/* A new arrow */

.wp-menu-arrow {
	display: none !important;
}

ul#adminmenu a.wp-has-current-submenu {
	position: relative;
}

ul#adminmenu a.wp-has-current-submenu:after,
ul#adminmenu > li.current > a.current:after {
	right: 0;
	border: solid transparent;
	content: " ";
	height: 0;
	width: 0;
	position: absolute;
	pointer-events: none;
	border-width: 8px;
	top: 50%;
	margin-top: -8px;
}

.folded ul#adminmenu li:hover a.wp-has-current-submenu:after {
	display: none;
}

.folded ul#adminmenu a.wp-has-current-submenu:after,
.folded ul#adminmenu > li a.current:after {
	border-width: 4px;
	margin-top: -4px;
}

/* flyout menu arrow */
#adminmenu li.wp-has-submenu.wp-not-current-submenu:hover:after {
	right: 0;
	border: solid transparent;
	content: " ";
	height: 0;
	width: 0;
	position: absolute;
	pointer-events: none;
	border-width: 8px;
	top: 10px;
	z-index: 10000;
}

.folded ul#adminmenu li.wp-has-submenu.wp-not-current-submenu:hover:after {
	border-width: 4px;
	margin-top: -4px;
	top: 18px;
}

/* ensure that wp-submenu's box shadow doesn't appear on top of the focused menu item's background. */
#adminmenu li.menu-top:hover,
#adminmenu li.opensub > a.menu-top,
#adminmenu li > a.menu-top:focus {
	position: relative;
}

.folded #adminmenu li.menu-top:hover,
.folded #adminmenu li.opensub > a.menu-top,
.folded #adminmenu li > a.menu-top:focus {
	z-index: 10000;
}

#adminmenu li.menu-top:hover .wp-menu-image img,
#adminmenu li.wp-has-current-submenu .wp-menu-image img {
	opacity: 1;
	filter: alpha(opacity=100);
}

#adminmenu li.wp-menu-separator {
	height: 3px;
	padding: 0;
	margin: 0 0 6px 0;
	border-width: 1px 0;
	border-style: solid;
	cursor: inherit;
}

#adminmenu div.separator {
	height: 1px;
	padding: 0;
	border-width: 1px 0 0 0;
	border-style: solid;
}

#adminmenu .wp-submenu .wp-submenu-head {
	font-weight: 400;
	font-size: 14px;
	padding: 8px 4px 8px 11px;
	margin: -8px 0px 4px;
}

#adminmenu li.current,
.folded #adminmenu li.wp-menu-open {
	border: 0 none;
}

.folded #adminmenu li.wp-has-current-submenu {
	margin-bottom: 1px;
}

.folded #adminmenu .wp-has-current-submenu.menu-top-last {
	margin-bottom: 0;
}

#adminmenu .awaiting-mod,
#adminmenu span.update-plugins,
#sidemenu li a span.update-plugins {
	position: absolute;
	font-family: "Open Sans", sans-serif;
	font-size: 9px;
	line-height: 17px;
	font-weight: 600;
	margin-top: 1px;
	margin-left: 7px;
	-webkit-border-radius: 10px;
	border-radius: 10px;
	z-index: 26;
}

#adminmenu li .awaiting-mod span,
#adminmenu li span.update-plugins span,
#sidemenu li a span.update-plugins span {
	display: block;
	padding: 0 6px;
}

#adminmenu li span.count-0,
#sidemenu li a .count-0 {
	display: none;
}

#adminmenu #collapse-menu {
	font-size: 13px;
	line-height: 34px;
	margin-top: 10px;
}

.folded #collapse-menu span {
	display: none;
}

#collapse-button,
#collapse-button div {
	width: 15px;
	height: 15px;
}

#collapse-button {
	float: left;
	height: 15px;
	margin: 10px 8px 10px 11px;
	width: 15px;

	-webkit-border-radius: 10px;
	border-radius: 10px;
}

#wpwrap #collapse-button div {
	padding: 0;
}

#collapse-button div:after {
	content: '\f148';
	display: block;
	line-height: 15px;
	left: -3px;
	top: 0;
	font-family: dashicons !important;
	font-size: 20px;
	height: 20px;
	margin: 0 auto;
	padding: 0 !important;
	position: relative;
	text-align: center;
	width: 20px;
	-moz-transition: all .1s ease-in-out;
	-webkit-transition: all .1s ease-in-out;
	transition: all .1s ease-in-out;

	-webkit-font-smoothing: antialiased;
}

.folded #collapse-button div:after {
	-ms-transform: rotate(180deg);
	-webkit-transform: rotate(180deg);
	transform: rotate(180deg);
}


/* Auto-folding of the admin menu */
@media only screen and (max-width: 900px) {
	.auto-fold #wpcontent,
	.auto-fold #wpfooter {
		margin-left: 56px;
	}

	.auto-fold #adminmenuback,
	.auto-fold #adminmenuwrap,
	.auto-fold #adminmenu,
	.auto-fold #adminmenu li.menu-top {
		width: 36px;
	}

	.auto-fold #adminmenu .wp-submenu.sub-open,
	.auto-fold #adminmenu .opensub .wp-submenu,
	.auto-fold #adminmenu .wp-has-current-submenu .wp-submenu.sub-open,
	.auto-fold #adminmenu .wp-has-current-submenu.opensub .wp-submenu,
	.auto-fold #adminmenu a.menu-top:focus + .wp-submenu,
	.auto-fold #adminmenu .wp-has-current-submenu a.menu-top:focus + .wp-submenu  {
		top: -1px;
		left: 36px;
		margin-top: 2px;
	}

	.auto-fold #adminmenu a.wp-has-current-submenu:focus + .wp-submenu,
	.auto-fold #adminmenu .wp-has-current-submenu .wp-submenu {
		position: absolute;
		top: -1000em;
		margin-top: 1px;
		margin-right: -1px;
		padding: 7px 0 8px;
		z-index: 9999;
	}

	.auto-fold #adminmenu .wp-has-current-submenu .wp-submenu {
		min-width: 150px;
		width: auto;
	}

	.auto-fold #adminmenu .wp-has-current-submenu li > a {
		padding-right: 16px;
		padding-left: 14px;
	}


	.auto-fold #adminmenu li.menu-top .wp-submenu > li > a {
		padding-left: 12px;
	}

	.auto-fold #adminmenu .wp-menu-name {
		display: none;
	}

	.auto-fold #adminmenu .wp-submenu-head {
		display: block;
	}

	.auto-fold #adminmenu div.wp-menu-image {
		height: 30px;
		width: 34px;
		position: absolute;
		z-index: 25;
	}

	.auto-fold #adminmenu a.menu-top {
		height: 34px;
	}

	.auto-fold #adminmenu li.wp-menu-open {
		border: 0 none;
	}

	.auto-fold #adminmenu li.wp-has-current-submenu {
		margin-bottom: 1px;
	}

	.auto-fold #adminmenu .wp-has-current-submenu.menu-top-last {
		margin-bottom: 0;
	}

	.auto-fold ul#adminmenu li:hover a.wp-has-current-submenu:after {
		display: none;
	}

	.auto-fold ul#adminmenu li.wp-has-submenu.wp-not-current-submenu:hover:after {
		border-width: 4px;
		margin-top: -4px;
		top: 16px;
	}

	.auto-fold ul#adminmenu a.wp-has-current-submenu:after,
	.auto-fold ul#adminmenu > li a.current:after {
		border-width: 4px;
		margin-top: -4px;
	}

	.auto-fold #adminmenu li.menu-top:hover,
	.auto-fold #adminmenu li.opensub > a.menu-top,
	.auto-fold #adminmenu li > a.menu-top:focus {
		z-index: 10000;
	}

	.auto-fold #collapse-menu span {
		display: none;
	}

	.auto-fold #collapse-button div {
		background: none;
	}

	.auto-fold #collapse-button div:after {
		-ms-transform: rotate(180deg);
		-webkit-transform: rotate(180deg);
		transform: rotate(180deg);
	}
}

/* List table styles */
.post-com-count-wrapper {
	min-width: 22px;
	font-family: "Open Sans", sans-serif;
}

.post-com-count {
	background: none !important;	/* @todo: this !important is only necessary due to "jetpack-retina.css" otherwise overriding */	height: 1.3em;
	line-height: 1.1em;
	display: block;
	text-decoration: none;
	padding: 0 0 6px;
	cursor: pointer;
	background-position: center -80px;
	background-repeat: no-repeat;
}

.post-com-count:after {		/* draw bubble connector using CSS! */
	content: "";
	display: block;
	width: 0;
	height: 0;
	margin-left: 8px;
	border-top: 5px solid #bbbbbb;
	border-right: 5px solid transparent;
}

.post-com-count span {
	font-size: 11px;
	font-weight: 600;
	height: 1.4em;
	line-height: 1.4em;
	min-width: 0.7em;
	padding: 0 6px;
	display: inline-block;
	-webkit-border-radius: 5px;
	border-radius: 5px;
}

strong .post-com-count {
	background-position: center -55px;
}

.post-com-count:hover {
	background-position: center -3px;
}

.column-response .post-com-count {
	float: left;
	margin-right: 5px;
	text-align: center;
}

.response-links {
	float: left;
}

#the-comment-list .attachment-80x60 {
	padding: 4px 8px;
}

th .comment-grey-bubble {
	height: 16px;
	width: 16px;
}

th .comment-grey-bubble:before {
	content: '\f101';
	font: 20px/1 dashicons;
	display: inline-block;
	padding: 0;
	top: 4px;
	left: -4px;
	line-height: 10px;
	position: relative;
	vertical-align: top;
	-webkit-font-smoothing: antialiased;
	text-decoration: none !important;
}

/*------------------------------------------------------------------------------
  8.0 - Layout Blocks
------------------------------------------------------------------------------*/

html.wp-toolbar {
	padding-top: 32px;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}

.narrow {
	width: 70%;
	margin-bottom: 40px;
}

.narrow p {
	line-height: 150%;
}

.widefat th,
.widefat td {
	overflow: hidden;
}

.widefat th {
	font-weight: normal;
}

.widefat td p {
	margin: 2px 0 0.8em;
}

.widefat .column-comment p {
	margin: 0.6em 0;
}

/* Screens with postboxes */
.postbox-container {
	float: left;
}

#dashboard-widgets.columns-1 .postbox-container {
	width: 100%;
}

#dashboard-widgets.columns-2 .postbox-container {
	width: 49.5%;
}

#dashboard-widgets.columns-2 #postbox-container-2,
#dashboard-widgets.columns-2 #postbox-container-3,
#dashboard-widgets.columns-2 #postbox-container-4 {
	float: right;
	width: 50.5%;
}

#dashboard-widgets.columns-3 .postbox-container {
	width: 33.5%;
}

#dashboard-widgets.columns-3 #postbox-container-1 {
	width: 33%;
}

#dashboard-widgets.columns-3 #postbox-container-3,
#dashboard-widgets.columns-3 #postbox-container-4 {
	float: right;
}

#dashboard-widgets.columns-4 .postbox-container {
	width: 25%;
}

.postbox-container .meta-box-sortables {
	-moz-box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-ms-box-sizing: border-box;
	box-sizing: border-box;
}

.metabox-holder .postbox-container .empty-container {
	border: 3px dashed #CCCCCC;
	height: 250px;
}

.metabox-holder.columns-1 .postbox-container .empty-container,
.columns-2 #postbox-container-3 .empty-container,
.columns-2 #postbox-container-4 .empty-container,
.columns-3 #postbox-container-4 .empty-container {
	border: 0 none;
	height: 0;
	min-height: 0;
}

#poststuff {
	padding-top: 10px;
}

#poststuff #post-body {
	padding: 0;
}

#post-body-content {
	width: 100%;
	float: left;
}

#poststuff .postbox-container {
	width: 100%;
}

#poststuff #post-body.columns-2 {
	margin-right: 300px;
}

#post-body.columns-2 #postbox-container-1 {
	float: right;
	margin-right: -300px;
	width: 280px;
}

#post-body.columns-2 #side-sortables {
	min-height: 250px;
}

/* one column on the dash */
@media only screen and (max-width: 799px) {
	#wpbody-content #dashboard-widgets .postbox-container {
		width: 100%;
	}

	#wpbody-content .metabox-holder .postbox-container .empty-container {
		border: 0 none;
		height: 0;
		min-height: 0;
	}
}

/* two columns on the dash, but keep the setting if one is selected */
@media only screen and (min-width: 800px) and (max-width: 1200px) {
	#wpbody-content #dashboard-widgets .postbox-container {
		width: 49.5%;
	}

	#wpbody-content #dashboard-widgets #postbox-container-2,
	#wpbody-content #dashboard-widgets #postbox-container-3,
	#wpbody-content #dashboard-widgets #postbox-container-4 {
		float: right;
		width: 50.5%;
	}

	#dashboard-widgets #postbox-container-3 .empty-container,
	#dashboard-widgets #postbox-container-4 .empty-container {
		border: 0 none;
		height: 0;
		min-height: 0;
	}

	#wpbody #wpbody-content #dashboard-widgets.columns-1 .postbox-container {
		width: 100%;
	}

	#wpbody #wpbody-content .metabox-holder.columns-1 .postbox-container .empty-container {
		border: 0 none;
		height: 0;
		min-height: 0;
	}

	/* show the radio buttons for column prefs only for one or two columns */
	.index-php .screen-layout,
	.index-php .columns-prefs {
		display: block;
	}

	.columns-prefs .columns-prefs-3,
	.columns-prefs .columns-prefs-4 {
		display: none;
	}
}

/* one column on the post write/edit screen */
@media only screen and (max-width: 850px) {
	#wpbody-content #poststuff #post-body {
		margin: 0;
	}

	#wpbody-content #post-body.columns-2 #postbox-container-1 {
		margin-right: 0;
		width: 100%;
	}

	#poststuff #postbox-container-1 .empty-container,
	#poststuff #postbox-container-1 #side-sortables:empty {
		border: 0 none;
		height: 0;
		min-height: 0;
	}

	#poststuff #post-body.columns-2 #side-sortables {
		min-height: 0;
	}

	/* hide the radio buttons for column prefs */
	.screen-layout,
	.columns-prefs {
		display: none;
	}
}

.js .postbox .hndle {
	cursor: move;
}

.postbox.closed .hndle {
	-webkit-border-radius: 3px;
	border-radius: 3px;
}

.hndle a {
	font-size: 11px;
	font-weight: normal;
}

.postbox .handlediv {
	float: right;
	width: 27px;
	height: 30px;
}

.js .postbox .handlediv {
	cursor: pointer;
}

.sortable-placeholder {
	border-width: 1px;
	border-style: dashed;
	margin-bottom: 20px;
}

.widget,
.postbox,
.stuffbox {
	margin-bottom: 20px;
	padding: 0;
	line-height: 1;
}

.widget .widget-top,
.postbox h3,
.stuffbox h3 {
	margin-top: 1px;
	border-bottom-width: 1px;
	border-bottom-style: solid;
	-webkit-user-select: none;
	-moz-user-select: none;
	user-select: none;
}

.js .widget .widget-top,
.js .postbox h3 {
	cursor: move;
}

.postbox .inside,
.stuffbox .inside {
	font-size: 14px;
	line-height: 1.4em;
	padding: 0 12px 12px;
}

.postbox .inside {
	margin: 12px 0;
	position: relative;
}

.postbox .inside > p:last-child,
.rss-widget ul li:last-child {
	margin-bottom: 1px !important;
}

.postbox.closed h3 {
	border: none;
	-webkit-box-shadow: none;
	box-shadow: none;
}

.postbox table.form-table {
	margin-bottom: 0;
}

.temp-border {
	border: 1px dotted #ccc;
}

.columns-prefs label {
	padding: 0 5px;
}


/*------------------------------------------------------------------------------
  9.0 - Dashboard
------------------------------------------------------------------------------*/

#dashboard-widgets-wrap {
	margin: 0 -8px;
}

#wpbody-content .metabox-holder {
	padding-top: 10px;
}

#dashboard-widgets .meta-box-sortables {
	margin: 0 8px;
}

#dashboard_recent_comments div.undo {
	margin: 0 -12px;
	padding: 6px 12px;
	font-size: 11px;
}

#dashboard_recent_comments div.undo .avatar {
	float: left;
}

#dashboard_recent_comments div.undo div {
	min-height: 20px;
}

#the-comment-list td.comment p.comment-author {
	margin-top: 0;
	margin-left: 0;
}

#the-comment-list p.comment-author img {
	float: left;
	margin-right: 8px;
}

#the-comment-list p.comment-author strong a {
	border: none;
}

#the-comment-list td {
	vertical-align: top;
}

#the-comment-list td.comment {
	word-wrap: break-word;
}

/* Welcome Panel */
.welcome-panel {
	position: relative;
	overflow: auto;
	margin: 16px 0;
	padding: 23px 10px 12px;
	font-size: 13px;
	line-height: 2.1em;
}

.welcome-panel h3 {
	margin: 0;
	font-family: "Open Sans", sans-serif;
	font-size: 21px;
	font-weight: normal;
	line-height: 1.2;
}

.welcome-panel h4 {
	margin: 1.33em 0 0;
	font-size: 16px;
}

.welcome-panel li {
	font-size: 14px;
}

.welcome-panel .about-description {
	font-size: 16px;
	margin: 0;
}

.welcome-panel .welcome-panel-close {
	position: absolute;
	top: 5px;
	right: 10px;
	padding: 8px 3px;
	font-size: 13px;
	text-decoration: none;
	line-height: 1;
}

#welcome-panel.welcome-panel .welcome-panel-close::before,
.tagchecklist span a:before,
#bulk-titles div a:before {
	content: '\f153';
	display: block !important;
	font: normal 16px/1 dashicons;
	height: 20px;
	margin: 2px 0;
	speak: none;
	text-align: center;
	width: 20px;
	-webkit-font-smoothing: antialiased !important;
}

#welcome-panel.welcome-panel .welcome-panel-close::before {
	position: absolute;
	left: -18px;
	margin-top: -2px;

	-moz-transition: all .1s ease-in-out;
	-webkit-transition: all .1s ease-in-out;
	transition: all .1s ease-in-out;
}

.wp-core-ui .welcome-panel .button.button-hero {
    margin: 15px 0 3px;
}

.welcome-panel-content {
	margin-left: 13px;
	max-width: 1500px;
}

.welcome-panel .welcome-panel-column-container {
	clear: both;
	overflow: hidden;
	position: relative;
}

.welcome-panel .welcome-panel-column {
	width: 32%;
	min-width: 200px;
	float: left;
}

.ie8 .welcome-panel .welcome-panel-column {
	min-width: 230px;
}

.welcome-panel .welcome-panel-column:first-child {
	width: 36%;
}

.welcome-panel-column p.hide-if-no-customize {
	margin-top: 10px;
}

.welcome-panel-column p {
	margin-top: 7px;
}

.welcome-panel .welcome-icon {
	display: block;
	padding: 0 0 8px;
	background: transparent !important;
}

.welcome-panel .welcome-icon:before {
	font: 20px/1 dashicons;
	display: inline-block;
	padding: 0 10px 0 0;
	top: -1px;
	position: relative;
	-webkit-font-smoothing: antialiased;
	text-decoration: none !important;
	vertical-align: top;
}

.welcome-panel .welcome-write-blog:before,
.welcome-panel .welcome-edit-page:before {
	content:'\f119';
	top: -3px;
}

.welcome-panel .welcome-add-page:before {
	content:'\f132';
}

.welcome-panel .welcome-view-site:before {
	content:'\f115';
	top: -2px;
}

.welcome-panel .welcome-widgets-menus:before {
	content:'\f116';
	top: -2px;
}

.welcome-panel .welcome-comments:before {
	content:'\f117';
	top: -1px;
}

.welcome-panel .welcome-learn-more:before {
	content:'\f118';
	top: -1px;
}

.welcome-panel .welcome-widgets-menus {
	line-height: 16px;
}

.welcome-panel .welcome-panel-column ul {
	margin: 0.8em 1em 1em 0;
}

.welcome-panel .welcome-panel-column li {
    line-height: 16px;
    list-style-type: none;
}

@media screen and (max-width: 870px) {
	.welcome-panel .welcome-panel-column,
	.welcome-panel .welcome-panel-column:first-child {
		display: block;
		float: none;
		width: 100%;
	}

	.welcome-panel .welcome-panel-column li {
		display: inline-block;
		margin-right: 13px;
	}

	.welcome-panel .welcome-panel-column ul {
		margin: 0.4em 0 0;
	}

	.welcome-panel .welcome-icon {
		padding-left: 25px;
	}
}

/*------------------------------------------------------------------------------
  10.0 - List Posts (/Pages/etc)
------------------------------------------------------------------------------*/

table.fixed {
	table-layout: fixed;
}

.fixed .column-rating,
.fixed .column-visible {
	width: 8%;
}

.fixed .column-posts,
.fixed .column-date,
.fixed .column-parent,
.fixed .column-links,
.fixed .column-author,
.fixed .column-format {
	width: 10%;
}

@media screen and ( max-width: 782px ) {
	.fixed .column-posts,
.fixed .column-date,
.fixed .column-parent,
.fixed .column-links,
.fixed .column-author,
.fixed .column-format {
	width: 0% !important;
}
}

.fixed .column-response,
.fixed .column-categories,
.fixed .column-tags,
.fixed .column-rel,
.fixed .column-role {
	width: 15%;
}

.fixed .column-slug {
	width: 25%;
}

.fixed .column-locations {
	width: 35%;
}

.fixed .column-comments {
	width: 4em;
	padding: 8px 0;
	text-align: left;
}

.fixed .column-comments .vers {
	padding-left: 3px;
}

.fixed .column-comments a {
	float: left;
}

.fixed .column-icon {
	width: 80px;
}

#comments-form .fixed .column-author {
	width: 20%;
}

#commentsdiv.postbox .inside {
	margin: 0;
	padding: 0;
}

#commentsdiv .inside .row-actions {
	line-height:18px;
}

#commentsdiv .inside .column-author {
	width: 25%;
}

#commentsdiv .column-comment p {
	margin: 0.6em 0;
	padding: 0;
}

#commentsdiv #replyrow td {
	padding: 0;
}

#commentsdiv p {
	padding: 8px 10px;
	margin: 0;
}

#commentsdiv #add-new-comment {
	border-width: 0 0 1px;
	border-style: none none solid;
	margin-top: 6px;
}

#commentsdiv .comments-box {
	border: 0 none;
}

#commentsdiv .comments-box thead th {
	background: transparent;
	padding: 0 7px 4px;
	font-style: italic;
}

#commentsdiv .comments-box tr:last-child td {
	border-bottom: 0 none;
}

#commentsdiv .spinner {
	padding-left: 5px;
}

.sorting-indicator {
	display: none;
	width: 10px;
	height: 4px;
	margin-top: 8px;
	margin-left: 7px;
}

.sorting-indicator:before {
	background: none;
	content: '\f142';
	font: 20px/1 dashicons;
	display: inline-block;
	padding: 0;
	top: -4px;
	left: -8px;
	color: #444;
	line-height: 10px;
	position: relative;
	vertical-align: top;
	-webkit-font-smoothing: antialiased;
	text-decoration: none !important;
}

.column-comments .sorting-indicator:before {
	top: 0;
	left: -10px;
}

th.sorted.asc .sorting-indicator:before,
th.desc:hover span.sorting-indicator:before {
	content: '\f142';
}

th.sorted.desc .sorting-indicator:before,
th.asc:hover span.sorting-indicator:before {
	content: '\f140';
}

tr.wp-locked .locked-indicator {
	background: url('../../../../wp-admin/images/lock.png') no-repeat;
	margin: -2px 0 0 6px;
	height: 16px;
	width: 16px;
}

tr.wp-locked .check-column label,
tr.wp-locked .check-column input[type="checkbox"],
tr.wp-locked .row-actions .inline,
tr.wp-locked .row-actions .trash {
	display: none;
}

.fixed .column-comments .sorting-indicator {
	margin-top: 3px;
}

#menu-locations-wrap .widefat {
	width: 60%;
}

.widefat th.sortable,
.widefat th.sorted {
	padding: 0;
}

th.sortable a,
th.sorted a {
	display: block;
	overflow: hidden;
	padding: 7px 7px 8px;
}

.fixed .column-comments.sortable a,
.fixed .column-comments.sorted a {
	padding: 8px 0;
}

th.sortable a span,
th.sorted a span {
	float: left;
	cursor: pointer;
}

th.sorted.asc .sorting-indicator,
th.desc:hover span.sorting-indicator {
	display: block;
	background-position: 0 0;
}

th.sorted.desc .sorting-indicator,
th.asc:hover span.sorting-indicator {
	display: block;
	background-position: -7px 0;
}

/* Bulk Actions */
.tablenav-pages a {
	font-weight: 600;
	margin-right: 1px;
	padding: 0 2px;
}
.tablenav-pages .current-page {
	padding-top: 0;
	text-align: center;
}
.tablenav-pages .next-page {
	margin-left: 2px;
}

.tablenav a.button-secondary {
	display: block;
	margin: 3px 8px 0 0;
}

.tablenav {
	clear: both;
	height: 30px;
	margin: 6px 0 4px;
	vertical-align: middle;
}

.tablenav.themes {
	max-width: 98%;
}

.tablenav .tablenav-pages {
	float: right;
	display: block;
	cursor: default;
	height: 30px;
	line-height: 30px;
	font-size: 12px;
}

.tablenav .no-pages,
.tablenav .one-page .pagination-links {
	display: none;
}

.tablenav .tablenav-pages a,
.tablenav-pages span.current  {
	text-decoration: none;
	padding: 3px 6px;
}

.tablenav .tablenav-pages a {
	padding: 0 10px 3px;
	font-size: 16px;
	font-weight: normal;
}

.tablenav .tablenav-pages a.disabled:hover ,
.tablenav .tablenav-pages a.disabled:active {
	cursor: default;
}

.tablenav .displaying-num {
	margin-right: 2px;
	font-size: 12px;
	font-style: italic;
}

.tablenav .actions {
	overflow: hidden;
	padding: 2px 8px 0 0;
}

.tablenav .delete {
	margin-right: 20px;
}

.view-switch {
	float: right;
	margin: 5px 16px 0 8px;
}

.view-switch img {
	display: none;
}

.view-switch a {
	text-decoration: none;
}

.view-switch>a {
	display: inline-block;
	width: 18px;
	height: 18px;
}

.view-switch>a:before {
	content: '\f163';
	display: inline-block;
	float: left;
	font: normal 20px/1 'Dashicons';
	vertical-align: middle;
	margin-left: 0;
	-webkit-font-smoothing: antialiased;
}

.view-switch>a+a:before {
	margin-left: 5px;
	content: '\f164';
}

.filter {
	float: left;
	margin: -5px 0 0 10px;
}

.filter .subsubsub {
	margin-left: -10px;
	margin-top: 13px;
}
.screen-per-page {
	width: 4em;
}

#posts-filter fieldset {
	float: left;
	margin: 0 1.5ex 1em 0;
	padding: 0;
}

#posts-filter fieldset legend {
	padding: 0 0 .2em 1px;
}

/*------------------------------------------------------------------------------
  10.1 - Inline Editing
------------------------------------------------------------------------------*/

/*
.quick-edit* is for Quick Edit
.bulk-edit* is for Bulk Edit
.inline-edit* is for everything
*/

/*	Layout */

#wpbody-content .inline-edit-row fieldset {
	font-size: 12px;
	float: left;
	margin: 0;
	padding: 0;
	width: 100%;
}

tr.inline-edit-row td,
#wpbody-content .inline-edit-row fieldset .inline-edit-col {
	padding: 0 0.5em;
}

#wpbody-content .quick-edit-row-page fieldset.inline-edit-col-right .inline-edit-col {
	border-width: 0 0 0 1px;
	border-style: none none none solid;
}

#wpbody-content .quick-edit-row-post .inline-edit-col-left {
	width: 40%;
}

#wpbody-content .quick-edit-row-post .inline-edit-col-right {
	width: 39%;
}

#wpbody-content .inline-edit-row-post .inline-edit-col-center {
	width: 20%;
}

#wpbody-content .quick-edit-row-page .inline-edit-col-left {
	width: 50%;
}

#wpbody-content .quick-edit-row-page .inline-edit-col-right,
#wpbody-content .bulk-edit-row-post .inline-edit-col-right {
	width: 49%;
}

#wpbody-content .bulk-edit-row .inline-edit-col-left {
	width: 30%;
}

#wpbody-content .bulk-edit-row-page .inline-edit-col-right {
	width: 69%;
}

#wpbody-content .bulk-edit-row .inline-edit-col-bottom {
	float: right;
	width: 69%;
}

#wpbody-content .inline-edit-row-page .inline-edit-col-right {
	margin-top: 27px;
}

.inline-edit-row fieldset .inline-edit-group {
	clear: both;
}

.inline-edit-row fieldset .inline-edit-group:after {
	content: ".";
	display: block;
	height: 0;
	clear: both;
	visibility: hidden;
}

.inline-edit-row p.submit {
	clear: both;
	padding: 0.5em;
	margin: 0.5em 0 0;
}

.inline-edit-row span.error {
	line-height: 22px;
	margin: 0 15px;
	padding: 3px 5px;
}

/*	Positioning */
.inline-edit-row h4 {
	margin: .2em 0;
	padding: 0;
	line-height: 23px;
}
.inline-edit-row fieldset span.title,
.inline-edit-row fieldset span.checkbox-title {
	margin: 0;
	padding: 0;
	line-height: 27px;
}

.inline-edit-row fieldset label,
.inline-edit-row fieldset span.inline-edit-categories-label {
	display: block;
	margin: .2em 0;
}

.inline-edit-row fieldset label.inline-edit-tags {
	margin-top: 0;
}

.inline-edit-row fieldset label.inline-edit-tags span.title {
	margin: .2em 0;
	width: auto;
}

.inline-edit-row fieldset label span.title {
	display: block;
	float: left;
	width: 5em;
}

.inline-edit-row fieldset label span.input-text-wrap {
	display: block;
	margin-left: 5em;
}

.quick-edit-row-post fieldset.inline-edit-col-right label span.title {
	width: auto;
	padding-right: 0.5em;
}

.inline-edit-row .input-text-wrap input[type=text] {
	width: 100%;
}

.inline-edit-row fieldset label input[type=checkbox] {
	vertical-align: text-bottom;
}

.inline-edit-row fieldset label textarea {
	width: 100%;
	height: 4em;
}

#wpbody-content .bulk-edit-row fieldset .inline-edit-group label {
	max-width: 50%;
}

#wpbody-content .quick-edit-row fieldset .inline-edit-group label.alignleft:first-child {
	margin-right: 0.5em
}

.inline-edit-col-right .input-text-wrap input.inline-edit-menu-order-input {
	width: 6em;
}

.inline-edit-save .spinner {
	padding: 4px 10px 0;
	vertical-align: top;
	float: right;
}

/*	Styling */
.inline-edit-row h4 {
	text-transform: uppercase;
}

.inline-edit-row fieldset span.title,
.inline-edit-row fieldset span.checkbox-title {
	font-style: italic;
	line-height: 1.8em;
}

/*	Specific Elements */
.inline-edit-row fieldset input[type="text"],
.inline-edit-row fieldset textarea {
	border-style: solid;
	border-width: 1px;
}

.inline-edit-row fieldset .inline-edit-date {
	float: left;
}

.inline-edit-row fieldset input[name=jj],
.inline-edit-row fieldset input[name=hh],
.inline-edit-row fieldset input[name=mn] {
	font-size: 12px;
	width: 2.1em;
}

.inline-edit-row fieldset input[name=aa] {
	font-size: 12px;
	width: 3.5em;
}

.inline-edit-row fieldset label input.inline-edit-password-input {
	width: 8em;
}

ul.cat-checklist {
	height: 12em;
	border-style: solid;
	border-width: 1px;
	overflow-y: scroll;
	padding: 0 5px;
	margin: 0;
}

#bulk-titles {
	display: block;
	height: 12em;
	border-style: solid;
	border-width: 1px;
	overflow-y: scroll;
	padding: 0 5px;
	margin: 0 0 5px;
}

.inline-edit-row fieldset ul.cat-checklist li,
.inline-edit-row fieldset ul.cat-checklist input {
	margin: 0;
}

.inline-edit-row fieldset ul.cat-checklist label,
.inline-edit-row #bulk-titles div {
	font-family: "Open Sans", sans-serif;
	font-style: normal;
	font-size: 11px;
}

.inline-edit-row fieldset label input.inline-edit-menu-order-input {
	width: 3em;
}

.inline-edit-row fieldset label input.inline-edit-slug-input {
	width: 75%;
}

.quick-edit-row-post fieldset label.inline-edit-status {
	float: left;
}

#bulk-titles {
	line-height: 140%;
}
#bulk-titles div {
	margin: 0.2em 0.3em;
}

#bulk-titles div a {
	cursor: pointer;
	display: block;
	float: left;
	height: 18px;
	margin: 0 3px 0 -2px;
	overflow: hidden;
	position: relative;
	width: 20px;
}

#bulk-titles div a:before {
	position: relative;
	top: -3px;
}


/*------------------------------------------------------------------------------
  11.0 - Write/Edit Post Screen
------------------------------------------------------------------------------*/

#show-comments {
	overflow: hidden;
}

#save-action .spinner,
#show-comments a,
#show-comments .spinner {
	float: left;
}

#titlediv {
	position: relative;
	margin-bottom: 5px;
}

#titlediv label {
	cursor: text;
}

#titlediv div.inside {
	margin: 0;
}

#poststuff #titlewrap {
	border: 0;
	padding: 0;
}

#titlediv #title {
	padding: 3px 8px;
	font-size: 1.7em;
	line-height: 100%;
	height: 1.7em;
	width: 100%;
	outline: none;
	margin: 1px 0;
}

#titlediv #title-prompt-text,
#wp-fullscreen-title-prompt-text {
	color: #bbb;
	position: absolute;
	font-size: 1.7em;
	padding: 11px 10px;
}

#wp-fullscreen-save .fs-saved {
	color: #999;
	float: right;
	margin-top: 4px;
}

#wp-fullscreen-title-prompt-text {
	padding: 11px;
}

#poststuff .inside-submitbox,
#side-sortables .inside-submitbox {
	margin: 0 3px;
	font-size: 11px;
}

input#link_description,
input#link_url {
	width: 98%;
}

#pending {
	background: 0 none;
	border: 0 none;
	padding: 0;
	font-size: 11px;
	margin-top: -1px;
}

#edit-slug-box {
	line-height: 24px;
	min-height: 25px; /* Yes, line-height + 1 */
	margin-top: 5px;
	padding-right: 6px;
}

#edit-slug-box .cancel {
	margin-right: 10px;
	font-size: 11px;
}

#editable-post-name-full {
	display: none;
}

#editable-post-name input {
	width: 16em;
}

.postarea h3 label {
	float: left;
}

.submitbox .submit {
	text-align: left;
	padding: 12px 10px 10px;
	font-size: 11px;
}

.submitbox .submitdelete {
	text-decoration: none;
	padding: 1px 2px;
}

.submitbox .submitdelete,
.submitbox .submit a:hover {
	border-bottom-width: 1px;
	border-bottom-style: solid;
}

.submitbox .submit input {
	margin-bottom: 8px;
	margin-right: 4px;
	padding: 6px;
}

.inside-submitbox #post_status {
	margin: 2px 0 2px -2px;
}

#post-status-select {
	line-height: 2.5em;
	margin-top: 3px;
}

/* Post Screen */
#post-body #normal-sortables {
	min-height: 50px;
}

.postbox {
	position: relative;
	min-width: 255px;
}

#trackback_url {
	width: 99%;
}

#normal-sortables .postbox .submit {
	background: transparent none;
	border: 0 none;
	float: right;
	padding: 0 12px;
	margin:0;
}

.category-add input[type="text"],
.category-add select {
	width: 100%;
	max-width: 260px;
}

.press-this #side-sortables .category-tabs li,
ul.category-tabs li,
#side-sortables .add-menu-item-tabs li,
.wp-tab-bar li {
	display: inline;
	line-height: 1.35em;
}

.no-js .category-tabs li.hide-if-no-js {
 	display: none;
}

.category-tabs a,
#side-sortables .add-menu-item-tabs a,
.wp-tab-bar a {
	text-decoration: none;
}

.category-tabs {
	margin: 8px 0 3px;
}

#category-adder h4 {
	margin: 10px 0;
}

#side-sortables .add-menu-item-tabs,
.wp-tab-bar {
	margin-bottom: 3px;
}

#normal-sortables .postbox #replyrow .submit {
	float: none;
	margin: 0;
	padding: 0 7px 5px;
}

#side-sortables .submitbox .submit input,
#side-sortables .submitbox .submit .preview,
#side-sortables .submitbox .submit a.preview:hover {
	border: 0 none;
}

#side-sortables .inside-submitbox .insidebox,
.stuffbox .insidebox {
	margin: 11px 0;
}

ul.category-tabs,
ul.add-menu-item-tabs,
ul.wp-tab-bar {
	margin-top: 12px;
}

ul.category-tabs li {
	border-style: solid;
	border-width: 1px;
	position: relative;
}

ul.add-menu-item-tabs li.tabs,
.wp-tab-active {
	border-style: solid solid none;
	border-width: 1px 1px 0;
}

ul.add-menu-item-tabs li.tabs {
	padding-bottom: 3px;
}

#post-body .add-menu-item-tabs li.tabs {
	border-style: solid none solid solid;
	border-width: 1px 0 1px 1px;
	margin-right: -1px;
}

ul.category-tabs li,
ul.add-menu-item-tabs li,
ul.wp-tab-bar li {
	padding: 3px 5px 5px;
}

/* positioning etc. */
form#tags-filter {
	position: relative;
}

/* Edit posts */
td.post-title strong,
td.plugin-title strong {
	display: block;
	margin-bottom: .2em;
	font-size: 14px;
}

td.post-title p,
td.plugin-title p {
	margin: 6px 0;
}

/* Global classes */
.wp-hidden-children .wp-hidden-child,
.ui-tabs-hide {
	display: none;
}

.commentlist .avatar {
	vertical-align: text-top;
}

#post-body .tagsdiv #newtag {
	margin-right: 5px;
	width: 16em;
}

#side-sortables input#post_password {
	width: 94%
}

#side-sortables .tagsdiv #newtag {
	width: 68%;
}

#post-status-info {
	width: 100%;
}

#post-status-info td {
	font-size: 12px;
}

.autosave-info {
	padding: 2px 15px;
	text-align: right;
}

#editorcontent #post-status-info {
	border: none;
}

#post-body .wp_themeSkin .mceStatusbar a.mceResize {
	display: block;
	background: transparent url('../../../../../wp-admin/images/resize.gif') no-repeat scroll right bottom;
	width: 12px;
	cursor: se-resize;
	margin: 0 1px;
	position: relative;
	top: -2px;
}

#post-body .postarea .wp_themeSkin .mceStatusbar a.mceResize {
	top: 20px;
}

#content-resize-handle {
	background: transparent url('../../../../../wp-admin/images/resize.gif') no-repeat scroll right bottom;
	width: 12px;
	cursor: se-resize;
	position: absolute;
	right: 2px;
	height: 19px;
}

.press-this #content-resize-handle {
	bottom: 2px;
}

.tmce-active #content-resize-handle {
	display: none;
}

#wp-word-count {
	display: block;
	padding: 2px 10px;
}

#timestampdiv select {
	height: 20px;
	line-height: 14px;
	padding: 0;
	vertical-align: top;
}

#aa, #jj, #hh, #mn {
	padding: 1px;
	font-size: 12px;
}

#jj, #hh, #mn {
	width: 2em;
}

#aa {
	width: 3.4em;
}

.curtime #timestamp {
	padding: 2px 0 1px 0;
	display: inline !important;
	height: auto !important;
}

#post-body #visibility:before,
.curtime #timestamp:before {
	font: 20px/1 dashicons;
	display: inline-block;
	padding: 0 2px 0 0;
	top: 0;
	left: -1px;
	position: relative;
	vertical-align: top;
	-webkit-font-smoothing: antialiased;
	text-decoration: none !important;
}

#post-body #visibility:before {
	content: '\f177';
}

.curtime #timestamp:before {
	content: '\f145';
}

#timestampdiv {
	padding-top: 5px;
	line-height: 23px;
}

#timestampdiv p {
	margin: 8px 0 6px;
}

#timestampdiv input {
	border-width: 1px;
	border-style: solid;
}

.notification-dialog {
	position: fixed;
	top: 30%;
	left: 50%;
	width: 450px;
	margin-left: -225px;
	background: #fff;
	line-height: 1.5;
	z-index: 1000005;
}

.notification-dialog-background {
	position: fixed;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	background: #000;
	opacity: 0.5;
	filter: alpha(opacity=50);
	z-index: 1000000;
}

#post-lock-dialog .post-locked-message,
#post-lock-dialog .post-taken-over {
	margin: 25px;
}

#post-lock-dialog .post-locked-message a.button {
	margin-right: 10px;
}

#post-lock-dialog .post-locked-avatar {
	float: left;
	margin: 0 20px 20px 0;
}

#post-lock-dialog .wp-tab-first {
	outline: 0;
}

#post-lock-dialog .locked-saving img {
	float: left;
	margin-right: 3px;
}

#post-lock-dialog.saving .locked-saving,
#post-lock-dialog.saved .locked-saved {
	display: inline;
}

/*------------------------------------------------------------------------------
  11.1 - Custom Fields
------------------------------------------------------------------------------*/

#postcustomstuff thead th {
	padding: 5px 8px 8px;
}

#postcustom #postcustomstuff .submit {
	border: 0 none;
	float: none;
	padding: 0 8px 8px;
}

#side-sortables #postcustom #postcustomstuff .submit {
	margin: 0;
	padding: 0;
}

#side-sortables #postcustom #postcustomstuff #the-list textarea {
	height: 85px;
}

#side-sortables #postcustom #postcustomstuff td.left input,
#side-sortables #postcustom #postcustomstuff td.left select,
#side-sortables #postcustomstuff #newmetaleft a {
	margin: 3px 3px 0;
}

#postcustomstuff table {
	margin: 0;
	width: 100%;
	border-width: 1px;
	border-style: solid;
	border-spacing: 0;
}

#postcustomstuff tr {
	vertical-align: top;
}

#postcustomstuff table input,
#postcustomstuff table select,
#postcustomstuff table textarea {
	width: 96%;
	margin: 8px;
}

#side-sortables #postcustomstuff table input,
#side-sortables #postcustomstuff table select,
#side-sortables #postcustomstuff table textarea {
	margin: 3px;
}

#postcustomstuff th.left,
#postcustomstuff td.left {
	width: 38%;
}

#postcustomstuff .submit input {
	margin: 0;
	width: auto;
}

#postcustomstuff #newmetaleft a {
	display: inline-block;
	margin: 0 8px 8px;
	text-decoration: none;
}

.no-js #postcustomstuff #enternew {
	display: none;
}

#post-body-content .compat-attachment-fields {
	margin-bottom: 20px;
}

.compat-attachment-fields th {
	padding-top: 5px;
	padding-right: 10px;
}

/*------------------------------------------------------------------------------
  11.2 - Post Revisions
------------------------------------------------------------------------------*/

/* Revision meta box */
.post-revisions li img,
#revisions-meta-restored img {
	vertical-align: middle;
}

table.diff {
	width: 100%;
}

table.diff col.content {
	width: auto;
}

table.diff col.content.diffsplit {
	width: 48%;
}

table.diff col.diffsplit.middle {
	width: auto;
}

table.diff col.ltype {
	width: 30px;
}

table.diff tr {
	background-color: transparent;
}

table.diff td,
table.diff th {
	font-family: Consolas, Monaco, monospace;
	font-size: 14px;
	line-heighit: 1.618;
	padding: .5em;
}

table.diff td h1,
table.diff td h2,
table.diff td h3,
table.diff td h4,
table.diff td h5,
table.diff td h6 {
	margin: 0;
}

table.diff .diff-deletedline del,
table.diff .diff-addedline ins {
	text-decoration: none;
}

#revisions-diff {
	padding: 10px;
	position: relative;
}

#toggle-revision-compare-mode {
	position: absolute;
	top: 0;
	right: 0;
	padding: 11px 11px 0 0;
}

#loading-status {
	display: none;
	position: absolute;
	top: 8px;
	z-index: 1000;
}

#loading-status .spinner {
	display: inline-block;
	float: none;
	margin: -4px 0;
}

#revision-interact {
	padding: 20px 0;
}

#diff-next-revision,
#diff-previous-revision {
	margin-top: -.4em; /* Same line as the slider (height: .8em) */
}

#diff-next-revision {
	float: right;
}

#diff-previous-revision {
	float: left;
}

#diff-slider {
	width: 70%;
	margin: 0 auto;
}

.comparetwo #diff-slider {
	width: 95%;
}

#diff-slider .ui-slider-tooltip,
#diff-slider-ticks .ui-slider-tooltip {
	background-color: #fff;
	display: none;
	position: absolute;
	bottom: 21px;
	margin-left: -74px;
}

#diff-slider .ui-state-active .ui-slider-tooltip,
#diff-slider .ui-state-focus .ui-slider-tooltip,
#diff-slider .ui-state-hover .ui-slider-tooltip {
	display: block;
}

#diff-title-to strong {
	display: none;
}

.comparing-two-revisions #diff-title-to strong {
	display: inline;
}

.diff-label {
	margin: 20px 0 5px;
	padding-left: 3px;
	font-size: 13px;
}

#diff-header {
	padding: 0 200px 5px 0;
}

.diff-header {
	min-height: 24px;
	line-height: 24px;
	margin-bottom: 4px;
}

.diff-title {
	float: left;
}

.diff-title strong {
	font-size: 14px;
	float: left;
	margin-right: 5px;
	padding-left: 8px;
	text-align: right;
	width: 60px;
}

.diff-title img {
	vertical-align: middle;
	margin-right: 5px;
}

#restore-revision {
	margin-left: 10px;
}

#diff-table {
	margin-top: 20px;
}

.comparing-two-revisions #diff-previous-revision,
.comparing-two-revisions #diff-next-revision,
#diff-header-from {
	display: none;
}

.comparing-two-revisions #diff-title-from,
.left-model-loading #loading-status,
.right-model-loading #loading-status,
.comparing-two-revisions #diff-header-from {
	display: block;
}

.diff-slider-ticks-wrapper {
	margin: 0 auto;
	text-align: left;
}

#diff-slider-ticks {
	position: absolute;
	z-index: 2;
	margin-top: 20px;
}

.revision-tick {
	width: 1px;
	float: left;
	margin: 1px 0 0 0;
	height: .8em;
	padding: 0;
	margin-left: 0px;
	cursor: pointer;
}

.revision-tick.scope-of-changes-none {
	width: 1px;
}

.revision-tick.scope-of-changes-vsmall {
	width: 2px;
}

.revision-tick.scope-of-changes-small {
	width: 3px;
}

.revision-tick.scope-of-changes-med {
	width: 4px;
}

.revision-tick.scope-of-changes-large {
	width: 5px;
}

.revision-tick.scope-of-changes-vlarge {
	width: 6px;
}

.diff-loading {
	margin-top: 50px;
	width: 100%;
	height: 200px;
}

.diff-loading .spinner {
	clear: both;
	margin: 0 auto;
	display: block;
	float: none;
}

.ui-tooltip-content img,
.ui-slider-tooltip img {
	float: left;
	margin-right: 5px;
	margin-top: 5px;
}


/*  jQuery UI Tooltip 1.10.1 */


.ui-tooltip,
.ui-slider-tooltip {
	padding: 8px;
	position: absolute;
	z-index: 9999;
	max-width: 300px;
	min-width: 130px;
}

body .ui-tooltip,
body .ui-slider-tooltip {
	border-width: 1px;
}

.ui-tooltip,
.ui-slider-tooltip,
.arrow:after {
	border: 1px solid #d7d7d7;
}

.ui-tooltip,
.ui-slider-tooltip {
	padding: 5px 10px;
}

.arrow {
	width: 70px;
	height: 16px;
	overflow: hidden;
	position: absolute;
	left: 50%;
	margin-left: -35px;
	bottom: -16px;
	z-index: 99999;
}

.arrow::after {
	z-index: 9999;
}

.arrow.top {
	top: -16px;
	bottom: auto;
}

.arrow.left {
	left: 20%;
}

.arrow:after {
	content: "";
	position: absolute;
	left: 20px;
	top: -20px;
	width: 25px;
	height: 25px;
	background-color: #FFF;
	-webkit-transform: rotate(45deg);
	-moz-transform: rotate(45deg);
	-ms-transform: rotate(45deg);
	-o-transform: rotate(45deg);
	tranform: rotate(45deg);
}

.arrow.top:after {
	bottom: -20px;
	top: auto;
}

 /* jQuery UI Slider */

.wp-slider.ui-slider {
	position: relative;
	border-width: 1px;
	border-style: solid;
	text-align: left;
	cursor: pointer;
}

.wp-slider .ui-slider-handle {
	border-radius: 50%;
	height: 20px;
	margin-top: -2px;
	outline: none;
	position: absolute;
	width: 20px;
	z-index: 2;
}

.wp-slider .ui-slider-handle:before {
	background: none;
	content: "\f229";
	font-size: 20px;
	line-height: 1;
	font-family:dashicons;
	left: 0;
	position: absolute;
	top: 0px;
	-webkit-font-smoothing:antialiased;
}

.wp-slider .ui-slider-handle.left-handle:before,
.wp-slider .ui-slider-handle.right-handle:before {
	height: 8px;
	width: 7px;
}

.wp-slider .ui-slider-handle.left-handle:before {
	content: '\f139';
}

.wp-slider .ui-slider-handle.right-handle:before {
	content: '\f141';
	margin-left: -1px;
}

.wp-slider .ui-slider-range {
	position: absolute;
	z-index: 1;
	font-size: .7em;
	display: block;
	border: 0;
	background-color: transparent;
	background-image: none;
}

.wp-slider.ui-slider-horizontal {
	height: .8em;
}

.wp-slider.ui-slider-horizontal .ui-slider-handle {
	top: -.3em;
	margin-left: -.6em;
}

.wp-slider.ui-slider-horizontal .ui-slider-range {
	top: 0;
	height: 100%;
}

.wp-slider.ui-slider-horizontal .ui-slider-range-min {
	left: 0;
}

.wp-slider.ui-slider-horizontal .ui-slider-range-max {
	right: 0;
}

.wp-slider.ui-slider-vertical {
	width: .8em;
	height: 100px;
}

.wp-slider.ui-slider-vertical .ui-slider-handle {
	left: -.3em;
	margin-left: 0;
	margin-bottom: -.6em;
}

.wp-slider.ui-slider-vertical .ui-slider-range {
	left: 0;
	width: 100%;
}

.wp-slider.ui-slider-vertical .ui-slider-range-min {
	bottom: 0;
}

.wp-slider.ui-slider-vertical .ui-slider-range-max {
	top: 0;
}


/*------------------------------------------------------------------------------
  11.3 - Featured Images
------------------------------------------------------------------------------*/

#select-featured-image {
	padding: 4px 0;
	overflow: hidden;
}

#select-featured-image img {
	max-width: 100%;
	height: auto;
	margin-bottom: 10px;
}

#select-featured-image a {
	float: left;
	clear: both;
}

#select-featured-image .remove {
	display: none;
	margin-top: 10px;
}

.js #select-featured-image.has-featured-image .remove {
	display: inline-block;
}

.no-js #select-featured-image .choose {
	display: none;
}

/*------------------------------------------------------------------------------
  11.4 - Post formats
------------------------------------------------------------------------------*/

.post-state-format {
	overflow: hidden;
	display: inline-block;
	vertical-align: middle;
	height: 20px;
	width: 20px;
	margin-right: 5px;
	margin-top: -4px;
}

.post-state-format:before {
	display: block;
	height: 20px;
	width: 20px;
	speak: none;
	font: normal 20px/1 dashicons !important;
	-webkit-font-smoothing: antialiased;
}

#post-formats-select {
	line-height: 2em;
}

#post-formats-select .post-format-icon:before {
	top: 5px;
}

input.post-format {
	margin-top: 1px;
}

label.post-format-icon {
	margin-left: 0px;
	padding: 2px 0 2px 0px;
}

.post-format-icon:before {
	position: relative;
	display: inline-block;
	margin-right: 7px;
	speak: none;
	font: 18px/1 dashicons;
	font-weight: normal;
	-webkit-font-smoothing: antialiased;
}

.post-state-format.post-format-standard:before,
.post-format-icon.post-format-standard:before,
a.post-state-format.format-standard:before {
	content: '\f109';
}

.post-state-format.post-format-image:before,
.post-format-icon.post-format-image:before,
a.post-state-format.format-image:before {
	content: '\f128';
}

.post-state-format.post-format-gallery:before,
.post-format-icon.post-format-gallery:before,
a.post-state-format.format-gallery:before {
	content: '\f161';
}

.post-state-format.post-format-audio:before,
.post-format-icon.post-format-audio:before,
a.post-state-format.format-audio:before {
	content: '\f127';
}

.post-state-format.post-format-video:before,
.post-format-icon.post-format-video:before,
a.post-state-format.format-video:before {
	content: '\f126';
}

.post-state-format.post-format-chat:before,
.post-format-icon.post-format-chat:before,
a.post-state-format.format-chat:before {
	content: '\f125';
}

.post-state-format.post-format-status:before,
.post-format-icon.post-format-status:before,
a.post-state-format.format-status:before {
	content: '\f130';
}

.post-state-format.post-format-aside:before,
.post-format-icon.post-format-aside:before,
a.post-state-format.format-aside:before {
	content: '\f123';
}

.post-state-format.post-format-quote:before,
.post-format-icon.post-format-quote:before,
a.post-state-format.format-quote:before {
	content: '\f122';
}

.post-state-format.post-format-link:before,
.post-format-icon.post-format-link:before,
a.post-state-format.format-link:before {
	content: '\f103';
}


/* Un-used CSS for post formats (before they were removed from core) */
/*
#poststuff .post-format-select {
	margin-top: 0;
	padding-bottom: 0;
}

.wp-post-format-ui {
	display: none;
}

.wp-post-format-show-ui .wp-post-format-ui {
	display: block;
}

.post-formats-fields {
	display: none;
	margin-bottom: 15px;
}

#post-body-content.wp-format-gallery .post-formats-fields,
#post-body-content.wp-format-image .post-formats-fields,
#post-body-content.wp-format-link .post-formats-fields,
#post-body-content.wp-format-quote .post-formats-fields,
#post-body-content.wp-format-video .post-formats-fields,
#post-body-content.wp-format-audio .post-formats-fields,
#post-body-content.wp-format-gallery .field.wp-format-gallery,
#post-body-content.wp-format-image .field.wp-format-image,
#post-body-content.wp-format-chat .field.wp-format-chat,
#post-body-content.wp-format-link .field.wp-format-link,
#post-body-content.wp-format-quote .field.wp-format-quote,
#post-body-content.wp-format-video .field.wp-format-video,
#post-body-content.wp-format-audio .field.wp-format-audio {
	display: block;
}

.post-formats-fields .field {
	display: none;
	margin-bottom: 10px;
	overflow: hidden;
}

.post-formats-fields input,
.post-formats-fields textarea {
	padding: 5px;
	font-size: 1.2em;
}

#post-body-content.wp-format-image label,
#post-body-content.wp-format-video label,
#post-body-content.wp-format-audio label {
	float: left;
}

.wp-format-media-holder {
	float: left;
	overflow: hidden;
	width: 40%;
	height: auto;
	border: 1px dashed #dfdfdf;
	background: #f5f5f5 url('../../../../wp-admin/images/media-button-2x.png') no-repeat 50% 25%;
	box-sizing: border-box;
	position: relative;
}

.wp-format-media-holder:hover {
	background-color: #eee;
}

.wp-format-media-holder.drag-over {
	background: rgba( 0, 86, 132, 0.9 );
	border-color: transparent;
}

.wp-format-media-holder div {
	display: none;
}

.wp-format-media-holder.drag-over div {
	position: absolute;
	top: 10px;
	left: 10px;
	right: 10px;
	bottom: 10px;
	border: 1px dashed #fff;
	display: block;
}

#poststuff .wp-format-media-holder.drag-over div h3 {
	position: absolute;
	top: 50%;
	left: 0;
	right: 0;
	-webkit-transform: translateY( -50% );
	-moz-transform:    translateY( -50% );
	-ms-transform:     translateY( -50% );
	-o-transform:      translateY( -50% );
	transform:         translateY( -50% );

	font-size: 20px;
	font-weight: 200;
	color: #fff;
	padding: 0;
	text-align: center;
	font-family: "Open Sans", sans-serif;
}

#post-body-content.wp-format-image .wp-format-media-holder {
	margin-top: 17px;
}

.wp-format-media-preview {
	margin: 20px 0;
}

#image-preview img {
	width: auto;
	height: auto;
	max-height: 300px;
}

#post-body-content .wp-format-image p.use-url-or-html {
	padding-top: 10px;
	clear: both;
	width: 40%;
	text-align: center;
}

.wp-post-format-show-ui.wp-format-image .attachment-display-settings,
.wp-post-format-show-ui.wp-format-status #titlewrap,
.wp-post-format-show-ui.wp-format-image #insert-media-button,
.wp-post-format-show-ui.wp-format-audio #insert-media-button,
.wp-post-format-show-ui.wp-format-video #insert-media-button,
.wp-post-format-show-ui.wp-format-aside #insert-media-button,
.wp-post-format-show-ui.wp-format-status #insert-media-button {
	display: none;
}

.wp-format-media-select .media-progress-bar,
.wp-format-media-select .media-progress-bar div,
.mejs-audio audio,
.mejs-video video {
	display: block;
}

.wp-format-media-select {
	display: block;
	height: 20px;
	padding: 55px 0 20px;
	text-align: center;
}

.wp-format-media-select img {
	max-width: 100%;
	max-height: 100%;
}

.empty .wp-format-media-metaedit {
	height: 20px;
	display: block;
	text-align: center;
}

.edit-format-preview {
	display: block;
	margin: 5px 0;
}

#wp_format_image,
#wp_format_audio,
#wp_format_video {
	float: left;
	margin-right: 23px;
	max-width: 40%;
	min-height: 97px;
}

.post-format-description {
	color: #666;
	font-size: 12px;
}

.post-format-options {
	border-width: 1px;
	border-style: solid;
	-webkit-border-radius: 3px;
	border-radius: 3px;
	border-color: #ccc;
	margin: 13px 0 10px;
	padding: 5px;
	overflow: hidden;
}

.post-format-options a {
	float: left;
	min-width: 62px;
	padding: 5px;
	border: 1px solid transparent;
	margin-right: 10px;
	position: relative;
	text-decoration: none;
	text-align: center;
	transition: opacity 0.1s linear;
	opacity: 0.6;
}

.post-format-options:hover a {
	opacity: 1.0;
}
.post-format-options a:hover,
.post-format-options a.active {
	opacity: 1.0;
	background-color: #fff;
	border-color: #ccc;
}

.post-format-options a div {
	height: 34px;
	width: 34px;
	margin: 0 auto;
}

.post-format-title {
	color: #777;
	display: block;
	margin-top: 4px;
}

#poststuff .post-format-change {
	margin: -7px 0 13px 2px;
	padding: 0;
	font-size: 1.5em;
	line-height: 18px;
	clear: left;
}

.post-format-change span.icon {
	float: left;
	height: 16px;
	margin: 2px 5px 0 0;
	width: 16px;
}

@media only screen and (max-width: 782px) {
	.post-format-options a {
		margin-right: 19px;
	}

	.post-format-options a div {
		height: 18px;
		width: 16px;
	}

}
*/

/*------------------------------------------------------------------------------
  12.0 - Categories
------------------------------------------------------------------------------*/

.category-adder {
	margin-left: 120px;
	padding: 4px 0;
}

.category-adder h4 {
	margin: 0 0 8px;
}

#side-sortables .category-adder {
	margin: 0;
}

#post-body ul.add-menu-item-tabs {
	float: left;
	width: 120px;
	text-align: right;
	/* Negative margin for the sake of those without JS: all tabs display */
	margin: 0 -120px 0 5px;
	padding: 0;
}

ul.add-menu-item-tabs li {
	padding: 3px 5px 3px 8px;
}

#post-body ul.add-menu-item-tabs li.tabs {
	-webkit-border-top-left-radius: 3px;
	-webkit-border-bottom-left-radius: 3px;
	border-top-left-radius: 3px;
	border-bottom-left-radius: 3px;
}

.wp-tab-panel,
.categorydiv div.tabs-panel,
.customlinkdiv div.tabs-panel,
.posttypediv div.tabs-panel,
.taxonomydiv div.tabs-panel {
	min-height: 42px;
	max-height: 200px;
	overflow: auto;
	padding: 0 0.9em;
	border-style: solid;
	border-width: 1px;
}

div.tabs-panel-active {
	display:block;
}

div.tabs-panel-inactive {
	display:none;
}

#front-page-warning,
#front-static-pages ul,
ul.export-filters,
.inline-editor ul.cat-checklist ul,
.categorydiv ul.categorychecklist ul,
.customlinkdiv ul.categorychecklist ul,
.posttypediv ul.categorychecklist ul,
.taxonomydiv ul.categorychecklist ul {
	margin-left: 18px;
}

ul.categorychecklist li {
	margin: 0;
	padding: 0;
	line-height: 22px;
	word-wrap: break-word;
}

.categorydiv .tabs-panel,
.customlinkdiv .tabs-panel,
.posttypediv .tabs-panel,
.taxonomydiv .tabs-panel {
	border-width: 3px;
	border-style: solid;
}

.form-wrap p,
.form-wrap label {
	font-size: 11px;
}

.form-wrap label {
	display: block;
	padding: 2px;
	font-size: 12px;
}

.form-field input,
.form-field textarea {
	border-style: solid;
	border-width: 1px;
	width: 95%;
}

p.description,
.form-wrap p {
	margin: 2px 0 5px;
}

p.help,
p.description,
span.description,
.form-wrap p {
	font-size: 13px;
	font-style: italic;
	font-family: "Open Sans", sans-serif;
}

.form-wrap .form-field {
	margin: 0 0 10px;
	padding: 8px 0;
}

.col-wrap h3 {
	margin: 12px 0;
	font-size: 1.1em;
}

.col-wrap p.submit {
	margin-top: -10px;
}


/*------------------------------------------------------------------------------
  13.0 - Tags
------------------------------------------------------------------------------*/

#poststuff .taghint {
	color: #aaa;
	margin: 15px 0 -24px 12px;
}

#poststuff .tagsdiv .howto {
	margin: 0 0 6px 8px;
}

.ajaxtag .newtag {
	position: relative;
}

.tagsdiv .newtag {
	width: 180px;
}

.tagsdiv .the-tags {
	display: block;
	height: 60px;
	margin: 0 auto;
	overflow: auto;
	width: 260px;
}

#post-body-content .tagsdiv .the-tags {
	margin: 0 5px;
}

p.popular-tags {
	-webkit-border-radius: 8px;
	border-radius: 8px;
	border-width: 1px;
	border-style: solid;
	line-height: 2em;
	max-width: 1000px;
	padding: 8px 12px 12px;
	text-align: justify;
}

p.popular-tags a {
	padding: 0 3px;
}

.tagcloud {
	width: 97%;
	margin: 0 0 40px;
	text-align: justify;
}

.tagcloud h3 {
	margin: 2px 0 12px;
}

.ac_results {
	padding: 0;
	margin: 0;
	list-style: none;
	position: absolute;
	z-index: 10000;
	display: none;
	border-width: 1px;
	border-style: solid;
}

.ac_results li {
	padding: 2px 5px;
	white-space: nowrap;
	text-align: left;
}

.ac_over {
	cursor: pointer;
}

.ac_match {
	text-decoration: underline;
}

/* links tables */
table.links-table {
	width: 100%;
}

.links-table th {
	font-weight: normal;
	text-align: left;
	vertical-align: top;
	min-width: 80px;
	width: 20%;
	word-wrap: break-word;
}

.links-table th,
.links-table td {
	padding: 5px 0;
}

.links-table td label {
	margin-right: 8px;
}

.links-table td input[type="text"],
.links-table td textarea {
	width: 100%;
}

.links-table #link_rel {
	max-width: 280px;
}

/*------------------------------------------------------------------------------
  14.0 - Media Screen
------------------------------------------------------------------------------*/

.media-item .describe {
	border-collapse: collapse;
	width: 100%;
	border-top-style: solid;
	border-top-width: 1px;
	clear: both;
	cursor: default;
}

.media-item.media-blank .describe {
	border: 0;
}

.media-item .describe th {
	vertical-align: top;
	text-align: left;
	padding: 5px 10px 10px;
	width: 140px;
}

.media-item .describe .align th {
	padding-top: 0;
}

.media-item .media-item-info tr {
	background-color: transparent;
}

.media-item .describe td {
	padding: 0 8px 8px 0;
	vertical-align: top;
}

.media-item thead.media-item-info td {
	padding: 4px 10px 0;
}

.media-item .media-item-info .A1B1 {
	padding: 0 0 0 10px;
}

.media-item td.savesend {
	padding-bottom: 15px;
}

.media-item .thumbnail {
	max-height: 128px;
	max-width: 128px;
}

#wpbody-content #async-upload-wrap a {
	display: none;
}

.media-upload-form {
	margin-top: 20px;
}

.media-upload-form td label {
	margin-right: 6px;
	margin-left: 2px;
}

.media-upload-form .align .field label {
	display: inline;
	padding: 0 0 0 23px;
	margin: 0 1em 0 3px;
	font-weight: 600;
}

.media-upload-form tr.image-size label {
	margin: 0 0 0 5px;
	font-weight: 600;
}

.media-upload-form th.label label {
	font-weight: 600;
	margin: 0.5em;
	font-size: 13px;
}

.media-upload-form th.label label span {
	padding: 0 5px;
}

abbr.required {
	border: medium none;
	text-decoration: none;
}

.media-item .describe input[type="text"],
.media-item .describe textarea {
	width: 460px;
}

.media-item .describe p.help {
	margin: 0;
	padding: 0 0 0 5px;
}

.media-item .edit-attachment,
.describe-toggle-on,
.describe-toggle-off {
	display: block;
	line-height: 36px;
	float: right;
	margin-right: 15px;
}

.media-item .describe-toggle-off,
.media-item.open .describe-toggle-on {
	display: none;
}

.media-item.open .describe-toggle-off {
	display: block;
}

#media-items .media-item {
	border-style: solid;
	border-width: 1px;
	min-height: 36px;
	position: relative;
	margin-top: -1px;
	width: 100%;
}

#media-items {
	width: 623px;
}

.media-new-php #media-items {
	margin: 1em 0;
}

#media-items:empty {
	border: 0 none;
}

.media-item .filename {
	line-height: 36px;
	overflow: hidden;
	padding: 0 10px;
}

.media-item .error-div {
	padding-left: 10px;
}

.media-item .pinkynail {
	float: left;
	margin: 2px 2px 0;
	max-width: 40px;
	max-height: 32px;
}

.media-item .startopen,
.media-item .startclosed {
	display: none;
}

.media-item .original {
	position: relative;
	height: 34px;
}

.media-item .progress {
	float: right;
	height: 22px;
	margin: 6px 10px 0 0;
	width: 200px;
	line-height: 2em;
	padding: 0;
	overflow: hidden;
	margin-bottom: 2px;
	border: 1px solid #d1d1d1;
	background: #f7f7f7;
	background-image: -webkit-gradient(linear, left bottom, left top, from(#fff), to(#f7f7f7));
	background-image: -webkit-linear-gradient(bottom, #fff, #f7f7f7);
	background-image:    -moz-linear-gradient(bottom, #fff, #f7f7f7);
	background-image:      -o-linear-gradient(bottom, #fff, #f7f7f7);
	background-image: linear-gradient(to top, #fff, #f7f7f7);
	-webkit-border-radius: 3px;
	border-radius: 3px;
	-webkit-box-shadow: inset 0 0 3px rgba(0,0,0,0.1);
	box-shadow: inset 0 0 3px rgba(0,0,0,0.1);
}

.media-item .bar {
	z-index: 9;
	width: 0;
	height: 100%;
	margin-top: -24px;
	background-color: #8cc1e9;
	background-image: -webkit-gradient(linear, left bottom, left top, from(#72a7cf), to(#8cc1e9));
	background-image: -webkit-linear-gradient(bottom, #72a7cf, #8cc1e9);
	background-image:    -moz-linear-gradient(bottom, #72a7cf, #8cc1e9);
	background-image:      -o-linear-gradient(bottom, #72a7cf, #8cc1e9);
	background-image: linear-gradient(to top, #72a7cf, #8cc1e9);
	-webkit-border-radius: 3px;
	border-radius: 3px;
	-webkit-box-shadow: 0 0 3px rgba(0,0,0,0.3);
	box-shadow: 0 0 3px rgba(0,0,0,0.3);
}

.media-item .progress .percent {
	z-index: 10;
	position: relative;
	width: 200px;
	padding: 0 8px;
	color: rgba(0,0,0,0.6);
}

.upload-php .fixed .column-parent {
	width: 15%;
}

.js .html-uploader #plupload-upload-ui {
	display: none;
}

.js .html-uploader #html-upload-ui {
	display: block;
}

.media-upload-form .media-item.error {
	margin: 0;
	padding: 0;
}

.media-upload-form .media-item.error p,
.media-item .error-div {
	line-height: 16px;
	margin: 5px 10px;
	padding: 0;
}

.media-item .error-div a.dismiss {
	display: block;
	float: right;
	margin: 5px 4px 0 15px;
}

/*------------------------------------------------------------------------------
  14.1 - Media Library
------------------------------------------------------------------------------*/

.find-box {
	width: 600px;
	height: 300px;
	overflow: hidden;
	padding: 33px 0 51px;
	position: absolute;
	z-index: 1000;
}

.find-box-head {
	cursor: move;
	font-weight: 600;
	height: 2em;
	line-height: 2em;
	padding: 1px 12px;
	position: absolute;
	top: 5px;
	width: 100%;
}

.find-box-inside {
	overflow: auto;
	padding: 6px;
	height: 100%;
}

.find-box-search {
	overflow: hidden;
	padding: 9px;
	position: relative;
}

.find-box-search .spinner {
	float: none;
	left: 125px;
	position: absolute;
	top: 9px;
}

#find-posts-input {
	float: left;
	width: 140px;
	height: 24px;
}

#find-posts-search {
	float: left;
	margin: 1px 4px 0 3px;
}

#find-posts-response {
	margin: 8px 0;
	padding: 0 1px 6px;
}

#find-posts-response table {
	width: 100%;
}

#find-posts-response .found-radio {
	padding: 3px 0 0 8px;
	width: 15px;
}

.find-box-buttons {
	padding: 8px;
	overflow: hidden;
}

.find-box #resize-se {
	position: absolute;
	right: 1px;
	bottom: 1px;
}

.ui-find-overlay {
	position: absolute;
	top: 0;
	left: 0;
	background-color: #000;
	opacity: 0.6;
	filter: alpha(opacity=60);
}

ul#dismissed-updates {
	display: none;
}

form.upgrade {
	margin-top: 8px;
}

form.upgrade .hint {
	font-style: italic;
	font-size: 85%;
	margin: -0.5em 0 2em 0;
}

#poststuff .inside .the-tagcloud {
	margin: 5px 0 10px;
	padding: 8px;
	border-width: 1px;
	border-style: solid;
	line-height: 1.8em;
	word-spacing: 3px;
	-webkit-border-radius: 6px;
	border-radius: 6px;
}

.drag-drop #drag-drop-area {
	border: 4px dashed #DDDDDD;
	height: 200px;
}

.drag-drop .drag-drop-inside {
	margin: 70px auto 0;
	width: 250px;
}

.drag-drop-inside p {
	color: #aaa;
	font-size: 14px;
	margin: 5px 0;
	display: none;
}

.drag-drop .drag-drop-inside p {
	text-align: center;
}

.drag-drop-inside p.drag-drop-info {
	font-size: 20px;
}

.drag-drop .drag-drop-inside p,
.drag-drop-inside p.drag-drop-buttons {
	display: block;
}

/*
#drag-drop-area:-moz-drag-over {
	border-color: #83b4d8;
}
borger color while dragging a file over the uploader drop area */
.drag-drop.drag-over #drag-drop-area {
	border-color: #83b4d8;
}

#plupload-upload-ui {
	position: relative;
}


/*------------------------------------------------------------------------------
  14.2 - Image Editor
------------------------------------------------------------------------------*/

.describe .image-editor {
	vertical-align: top;
}

.imgedit-wrap {
	position: relative;
}

.imgedit-settings p {
	margin: 8px 0;
}

.post-php .imgedit-wrap table {
	width: 100%;
}

.describe .imgedit-wrap table td,
.wp_attachment_holder .imgedit-wrap table td {
	vertical-align: top;
	padding-top: 0;
}

.describe .imgedit-wrap table td.imgedit-settings {
	padding: 0 5px;
}

.wp_attachment_holder .imgedit-wrap table td.imgedit-settings {
	width: 250px;
}

td.imgedit-settings input {
	margin-top: 0;
	vertical-align: middle;
}

.imgedit-wait {
	position: absolute;
	top: 0;
	background: #fff url('../../../../wp-admin/images/wpspin_light.gif') no-repeat scroll 22px 10px;
	background-size: 16px 16px;
	opacity: 0.7;
	filter: alpha(opacity=70);
	width: 100%;
	height: 500px;
	display: none;
}

.spinner {
	background: url('../../../../wp-admin/images/wpspin_light.gif') no-repeat;
	background-size: 16px 16px;
	display: none;
	float: right;
	opacity: 0.7;
	filter: alpha(opacity=70);
	width: 16px;
	height: 16px;
	margin: 5px 5px 0;
}

.no-float {
	float: none;
}

.media-disabled,
.imgedit-settings .disabled  {
	color: grey;
}

.wp_attachment_image,
.A1B1 {
	overflow: hidden;
}

.wp_attachment_image .button,
.A1B1 .button {
	float: left;
}

.no-js .wp_attachment_image .button {
	display: none;
}

.wp_attachment_image .spinner,
.A1B1 .spinner {
	float: left;
	padding: 0 4px 4px;
	vertical-align: bottom;
}

.imgedit-menu {
	margin: 0 0 12px;
	min-width: 300px;
}

.imgedit-menu div {
	float: left;
	width: 32px;
	background:none;
	margin: 0 8px 0 0;
	height: 32px;
	font-family:dashicons;
	-webkit-font-smoothing:antialiased;
	text-align:center;
	line-height: 28px;
}

.imgedit-menu div:before {
	font:20px/1 dashicons;
	vertical-align: middle;
}

.imgedit-crop:before {
	content:'\f165';
}

.imgedit-rleft:before {
	content:'\f166';
}

.imgedit-rright:before {
	content:'\f167';
}

.imgedit-flipv:before {
	content:'\f168';
}

.imgedit-fliph:before {
	content:'\f169';
}

.imgedit-undo:before {
	content:'\f171';
}

.imgedit-redo:before {
	content:'\f172';
}

.imgedit-crop-wrap {
	position: relative;
}

.imgedit-crop {
	margin: 0 8px 0 0;
}

.imgedit-rleft {
	margin: 0 3px;
}

.imgedit-rright {
	margin: 0 8px 0 3px;
}

.imgedit-flipv {
	margin: 0 3px;
}

.imgedit-fliph {
	margin: 0 8px 0 3px;
}

.imgedit-undo {
	margin: 0 3px;
}

.imgedit-redo {
	margin: 0 8px 0 3px;
}

.imgedit-applyto img {
	margin: 0 8px 0 0;
}

.imgedit-group-top {
	margin: 5px 0;
}

.imgedit-applyto .imgedit-label {
	padding: 2px 0 0;
	display: block;
}

.imgedit-help {
	display: none;
	font-style: italic;
	margin-bottom: 8px;
}

a.imgedit-help-toggle {
	text-decoration: none;
}

.form-table td.imgedit-response {
	padding: 0;
}

.imgedit-submit {
	margin: 8px 0;
}

.imgedit-submit-btn {
	margin-left: 20px;
}

.imgedit-wrap .nowrap {
	white-space: nowrap;
}

span.imgedit-scale-warn {
	color: red;
	font-size: 20px;
	font-style: normal;
	visibility: hidden;
	vertical-align: middle;
}

.imgedit-group {
	border-width: 1px;
	border-style: solid;
	-webkit-border-radius: 3px;
	border-radius: 3px;
	margin-bottom: 8px;
	padding: 2px 10px;
}

/*------------------------------------------------------------------------------
  15.0 - Comments Screen
------------------------------------------------------------------------------*/

.form-table {
	border-collapse: collapse;
	font-size: 14px;
	margin-top: 0.5em;
	width: 100%;
	margin-bottom: -8px;
	clear: both;
}

.form-table td {
	padding: 18px 10px;
	font-size: 14px;
	line-height: 1.3;
	margin-bottom: 9px;
}

.form-table th,
.form-wrap label {
	font-weight: normal;
	text-shadow: none;
	font-size: 14px;
	vertical-align: baseline;
}

.form-table th {
	vertical-align: top;
	text-align: left;
	padding: 20px 10px 20px 0;
	width: 200px;
	line-height: 1.3;
	font-weight: 600;
}

.form-table th.th-full {
	width: auto;
}

.form-table div.color-option {
	display: block;
	clear: both;
	margin-top: 12px;
}

.form-table input.tog {
	margin-top: 2px;
	margin-right: 2px;
	float: left;
}

.form-table td p {
	margin-top: 4px;
	margin-bottom: 0;
}

.form-table td fieldset label {
	margin: 0.25em 0 0.5em !important;
	display: inline-block;
}

.form-table td fieldset label,
.form-table td fieldset p,
.form-table td fieldset li {
	line-height: 1.4em;
}

.form-table input.tog,
.form-table input[type=radio] {
	margin-top: -4px;
	margin-right: 4px;
	float: none;
}

.form-table table.color-palette {
	vertical-align: bottom;
	float: left;
	margin: -12px 3px 11px;
}

.form-table .color-palette td {
	border-width: 1px 1px 0;
	border-style: solid solid none;
	height: 10px;
	line-height: 20px;
	width: 10px;
}

.commentlist li {
	padding: 1em 1em .2em;
	margin: 0;
	border-bottom-width: 1px;
	border-bottom-style: solid;
}

.commentlist li li {
	border-bottom: 0;
	padding: 0;
}

.commentlist p {
	padding: 0;
	margin: 0 0 .8em;
}

/* reply to comments */
#replyrow input {
	border-width: 1px;
	border-style: solid;
}

#replyrow td {
	padding: 2px;
}

#replysubmit {
	margin: 0;
	padding: 0 5px 3px;
	text-align: center;
}

#replysubmit .spinner {
	padding: 2px 0 0;
	vertical-align: top;
	float: right;
}

#replysubmit .button {
	margin-right: 5px;
}

#replysubmit .error {
	color: red;
	line-height: 21px;
	text-align: center;
}

#replyrow h5 {
	margin: .2em 0 0;
	padding: 0 5px;
	line-height: 1.4em;
	font-size: 1em;
}

#edithead .inside {
	float: left;
	padding: 3px 0 2px 5px;
	margin: 0;
	text-align: center;
}

#edithead .inside input {
	width: 180px;
}

#edithead label {
	padding: 2px 0;
}

#replycontainer {
	padding: 5px;
}

#replycontent {
	height: 120px;
	-webkit-box-shadow: none;
	box-shadow: none;
}

.comment-php .wp-editor-area {
	height: 200px;
}

.comment-ays {
	margin-bottom: 0;
	border-bottom-style: solid;
	border-bottom-width: 1px;
}

.comment-ays th {
	border-right-style: solid;
	border-right-width: 1px;
}

.trash-undo-inside,
.spam-undo-inside {
	margin: 1px 8px 1px 0;
	line-height: 16px;
}

.spam-undo-inside .avatar,
.trash-undo-inside .avatar {
	height: 20px;
	width: 20px;
	margin-right: 8px;
	vertical-align: middle;
}

.stuffbox .editcomment {
	clear: none;
}

#comment-status-radio p {
	margin: 3px 0 5px;
}

#comment-status-radio input {
	margin: 2px 3px 5px 0;
	vertical-align: middle;
}

#comment-status-radio label {
	padding: 5px 0;
}

.commentlist .avatar {
	vertical-align: text-top;
}


/*------------------------------------------------------------------------------
  16.0 - Themes
------------------------------------------------------------------------------*/

.theme-install-php .tablenav {
	height: auto;
}

.theme-install-php .spinner {
	margin-top: 9px;
}

h3.available-themes {
	margin: 0.3em 0 1em;
	float: left;
}

.available-theme {
	display: inline-block;
	margin-right: 10px;
	overflow: hidden;
	padding: 20px 20px 20px 0;
	vertical-align: top;
	width: 300px;
}

.available-theme .screenshot {
	width: 300px;
	height: 225px;
	display: block;
	border-width: 1px;
	border-style: solid;
	margin-bottom: 10px;
	overflow: hidden;
}

.available-theme img {
	width: 300px;
}

.available-theme h3 {
	margin: 15px 0 0;
}

.available-theme .theme-author {
	line-height: 18px;
}

.available-theme .action-links {
	margin-top: 10px;
	overflow: hidden;
}

.available-theme a.screenshot:focus {
	border-color: #777;
}

#current-theme .theme-info li,
.theme-options li,
.available-theme .action-links li {
	float: left;
	padding-right: 10px;
	margin-right: 10px;
	border-right: 1px solid #dfdfdf;
}

.available-theme .action-links li {
	padding-right: 8px;
	margin-right: 8px;
}

.ie8 .available-theme .action-links li {
	padding-right: 7px;
	margin-right: 7px;
}

#current-theme .theme-info li:last-child,
.theme-options li:last-child,
.available-theme .action-links li:last-child {
	padding-right: 0;
	margin-right: 0;
	border-right: 0;
}

.available-theme .action-links .delete-theme {
	float: right;
	margin-left: 8px;
	margin-right: 0;
}

.available-theme .action-links .delete-theme a {
	color: red;
	padding: 2px;
}

.available-theme .action-links .delete-theme a:hover {
	background: red;
	color: #fff;
	text-decoration: none;
}

.available-theme .action-links p {
	float: left;
}

#current-theme {
	margin: 20px 0 10px;
	padding: 0 0 20px;
	border-bottom-width: 1px;
	border-bottom-style: solid;
	overflow: hidden;
}

#current-theme.has-screenshot {
	padding-left: 330px;
}

#current-theme h3 {
	margin: 0;
	font-size: 12px;
	font-weight: normal;
	color: #999;
}

#current-theme h4 {
	margin: 3px 0 16px;
	font-size: 20px;
}

#current-theme h4 span {
	margin-left: 20px;
	font-size: 12px;
	font-weight: normal;
}

#current-theme a {
	border-bottom: none;
}

#current-theme .theme-info {
	margin: 1em 0;
	overflow: hidden;
}

#current-theme .theme-description {
	margin-top: 5px;
	max-width: 600px;
	line-height: 1.6em;
}

#current-theme img {
	float: left;
	width: 300px;
	margin-left: -330px;

	border-width: 1px;
	border-style: solid;
}

.theme-options {
	overflow: hidden;
	font-size: 14px;
	padding-bottom: 10px;
}

.theme-options .load-customize {
	margin-right: 30px;
	float: left;
}

.theme-options span {
	float: left;
	margin-right: 10px;
	text-transform: uppercase;
	font-size: 11px;
	line-height: 22px;
	color: #999;
}

.theme-options ul {
	float: left;
	margin: 0;
}

/* Allow for three-up on 1024px wide screens, e.g. tablets */
@media only screen and (max-width: 1200px) {
	.available-theme,
	.available-theme .screenshot,
	#current-theme img {
		width: 240px;
	}

	.available-theme .screenshot {
		height: 180px;
	}

	.available-theme img {
		width: 100%;
	}

	#current-theme.has-screenshot {
		padding-left: 270px;
	}

	#current-theme img {
		margin-left: -270px;
	}
}

#post-body ul.add-menu-item-tabs li.tabs a,
#TB_window #TB_title a.tb-theme-preview-link,
#TB_window #TB_title a.tb-theme-preview-link:visited {
	font-weight: 600;
	text-decoration: none;
}

#TB_window #TB_title {
	background-color: #222;
	color: #cfcfcf;
}

#broken-themes {
	text-align: left;
	width: 50%;
	border-spacing: 3px;
	padding: 3px;
}

.theme-install-php h4 {
	margin: 2.5em 0 8px;
}


/*------------------------------------------------------------------------------
  16.1 - Custom Header Screen
------------------------------------------------------------------------------*/

.appearance_page_custom-header #headimg {
	border: 1px solid #DFDFDF;
	overflow: hidden;
	width: 100%;
}

.appearance_page_custom-header #upload-form p label {
	font-size: 12px;
}

.appearance_page_custom-header .available-headers .default-header {
	float: left;
	margin: 0 20px 20px 0;
}

.appearance_page_custom-header .random-header {
	clear: both;
	margin: 0 20px 20px 0;
	vertical-align: middle;
}

.appearance_page_custom-header .available-headers label input,
.appearance_page_custom-header .random-header label input {
	margin-right: 10px;
}

.appearance_page_custom-header .available-headers label img {
	vertical-align: middle;
}


/*------------------------------------------------------------------------------
  16.2 - Custom Background Screen
------------------------------------------------------------------------------*/

div#custom-background-image {
	min-height: 100px;
	border: 1px solid #dfdfdf;
}

div#custom-background-image img {
	max-width: 400px;
	max-height: 300px;
}


/*------------------------------------------------------------------------------
  16.3 - Tabbed Admin Screen Interface (Experimental)
------------------------------------------------------------------------------*/

.nav-tab {
	border-style: solid;
	border-width: 1px 1px 0;
	font-size: 12px;
	line-height: 16px;
	display: inline-block;
	padding: 4px 14px 6px;
	text-decoration: none;
	margin: -4px 4px -1px 0;
}

.nav-tab-active {
	border-width: 1px;
}

.nav-tab-active,
.nav-tab-active:hover {
	border-bottom-width: 1px;
	border-bottom-style: solid;
}

h2.nav-tab-wrapper, h3.nav-tab-wrapper {
	border-bottom-width: 1px;
	border-bottom-style: solid;
	padding-bottom: 0;
}

h2 .nav-tab {
	padding: 4px 10px 6px;
	font-weight: 200;
	font-size: 20px;
	line-height: 24px;

}


/*------------------------------------------------------------------------------
  17.0 - Plugins
------------------------------------------------------------------------------*/

#dashboard_right_now .versions .b,
#post-status-display,
#post-visibility-display,
#adminmenu .wp-submenu li.current,
#adminmenu .wp-submenu li.current a,
#adminmenu .wp-submenu li.current a:hover,
.media-item .percent,
.plugins .name,
#pass-strength-result.strong,
#pass-strength-result.short,
#ed_reply_toolbar #ed_reply_strong,
.item-controls .item-order a,
.feature-filter .feature-name {
	font-weight: 600;
}

.plugins p {
	margin: 0 4px;
	padding: 0;
}

.plugins .desc p {
	margin: 0 0 8px;
}

.plugins td.desc {
	line-height: 1.5em;
}

.plugins .desc ul,
.plugins .desc ol {
	margin: 0 0 0 2em;
}

.plugins .desc ul {
	list-style-type: disc;
}

.plugins .row-actions-visible {
	font-size: 13px;
	padding: 0;
}

.plugins .inactive td,
.plugins .inactive th,
.plugins .active td,
.plugins .active th {
	padding: 10px 9px;
}

.plugins .update th,
.plugins .update td {
	border-bottom: 0;
}
.plugin-update-tr td {
	border-top: 0;
}

#wpbody-content .plugins .plugin-title,
#wpbody-content .plugins .theme-title {
	padding-right: 12px;
	white-space:nowrap;
}

.plugins .inactive .plugin-title strong {
	font-weight: 400;
}

.plugins .second,
.plugins .row-actions-visible {
	padding: 0 0 5px;
}

.plugins .update .second,
.plugins .update .row-actions-visible {
	padding-bottom: 0;
}

.plugins-php .widefat tfoot th,
.plugins-php .widefat tfoot td {
	border-top-style: solid;
	border-top-width: 1px;
}

.plugin-update-tr .update-message {
	border: none;
	font-size: 13px;
	font-weight: normal;
	margin: 6px 12px 12px;
	padding: 6px 12px;
}

.plugin-update-tr .update-message:before {
	content: '\f113';
	display: inline-block;
	font: 20px/1 dashicons;
	margin: 0 8px 0 -2px;
	-webkit-font-smoothing: antialiased;
	vertical-align: top;
}

.plugin-install-php h4 {
	margin: 2.5em 0 8px;
}


/*------------------------------------------------------------------------------
  18.0 - Users
------------------------------------------------------------------------------*/

#profile-page .form-table textarea {
	width: 500px;
	margin-bottom: 6px;
}

#profile-page .form-table #rich_editing {
	margin-right: 5px
}

#your-profile legend {
	font-size: 22px;
}

#display_name {
	width: 15em;
}

#createuser .form-field input {
	width: 25em;
}

/*------------------------------------------------------------------------------
  19.0 - Tools
------------------------------------------------------------------------------*/

.pressthis {
	margin: 20px 0;
}

.pressthis a,
.pressthis a:hover,
.pressthis a:focus,
.pressthis a:active {
	display: inline-block;
	position: relative;
	cursor: move;
	color: #333;
	background: #e6e6e6;
	-webkit-border-radius: 5px;
	border-radius: 5px;
	border: 1px solid #b4b4b4;
	font-style: normal;
	line-height: 16px;
	font-size: 14px;
	text-decoration: none;
}

.pressthis a:active {
	outline: none;
}

.pressthis a:hover:after {
	-webkit-transform: skew(20deg) rotate(9deg);
	-moz-transform: skew(20deg) rotate(9deg);
	transform: skew(20deg) rotate(9deg);
	-webkit-box-shadow: 0 10px 8px rgba(0, 0, 0, 0.7);
	box-shadow: 0 10px 8px rgba(0, 0, 0, 0.7);
}

.pressthis a span {
	display: inline-block;
	margin: 0px 0 0;
	padding: 0px 12px 8px 9px;
}

.pressthis a span:before {
	font:20px/1 dashicons;
	content:'\f157';
	position: relative;
	display: inline-block;
	top: 4px;
	margin-right: 4px;
}

.pressthis a:after {
	content: '';
	width: 70%;
	height: 55%;
	z-index: -1;
	position: absolute;
	right: 10px;
	bottom: 9px;
	background: transparent;

	-webkit-transform: skew(20deg) rotate(6deg);
	-moz-transform: skew(20deg) rotate(6deg);
	transform: skew(20deg) rotate(6deg);
	-webkit-box-shadow: 0 10px 8px rgba(0, 0, 0, 0.6);
	box-shadow: 0 10px 8px rgba(0, 0, 0, 0.6);
}

/*------------------------------------------------------------------------------
  20.0 - Settings
------------------------------------------------------------------------------*/

#utc-time, #local-time {
	padding-left: 25px;
	font-style: italic;
	font-family: "Open Sans", sans-serif;
}

.defaultavatarpicker .avatar {
	margin: 2px 0;
	vertical-align: middle;
}

.options-general-php .spinner {
	float: none;
	margin: -3px 3px;
}

/*------------------------------------------------------------------------------
  21.0 - Admin Footer
------------------------------------------------------------------------------*/

#wpfooter {
	position: absolute;
	bottom: 0;
	left: 0;
	right: 0;
	padding: 10px 0;
	margin-right: 20px;
	border-top-width: 1px;
	border-top-style: solid;
}

#wpfooter p {
	font-size: 13px;
	margin: 0;
	line-height: 20px;
}

#footer-thankyou {
	font-style: italic;
}

#wpfooter a {
	text-decoration: none;
}

#wpfooter a:hover {
	text-decoration: underline;
}

/*------------------------------------------------------------------------------
  22.0 - About Pages
------------------------------------------------------------------------------*/

.about-wrap {
	position: relative;
	margin: 30px 4% 0 1.5%;
	max-width: 1050px; /* readability */

	font-size: 15px;
}

.about-wrap div.updated,
.about-wrap div.error {
	display: none !important;
}

/* Typography */

.about-wrap p {
	line-height: 1.6em;
}

.about-wrap h1 {
	margin: 0.2em 200px 0 0;
	line-height: 1.2em;
	font-size: 3em;
	font-weight: 300;
}

.about-text,
.about-description,
.about-wrap li.wp-person a.web {
	font-family: "Open Sans", sans-serif;
	font-weight: normal;
	line-height: 1.6em;
	font-size: 20px;
}

.about-description {
	margin-top: 1.4em;
}

.about-text {
	font-size: 24px;
	font-weight: 300;
	margin: 1em 200px 1.4em 0;
	min-height: 60px;
}

.about-wrap h3 {
	font-size: 24px;
	margin-bottom: 1em;
	padding-top: 20px;
}

.about-wrap .feature-section {
	padding-bottom: 20px;
}

.about-wrap .feature-section h4 {
	margin-bottom: 0.6em;
}

.about-wrap .feature-section p {
	margin-top: 0.6em;
}

.about-wrap code {
	font-size: 14px;
}

/* Point Releases */

.about-wrap .point-releases {
	margin-top: 5px;
}

.about-wrap .changelog.point-releases h3 {
	padding-top: 35px;
	border-top-width: 1px;
	border-top-style: solid;
}

.about-wrap .changelog.point-releases h3:first-child {
	padding-top: 7px;
	border: 0;
}

/* WordPress Version Badge */

.wp-badge {
	background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMzJweCIgaGVpZ2h0PSIzMi4wMDJweCIgdmlld0JveD0iLTMxOS41IDU2OC40OTkgMzIgMzIuMDAyIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IC0zMTkuNSA1NjguNDk5IDMyIDMyLjAwMiIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+PHN0eWxlPi5zdHlsZTB7ZmlsbDoJI0ZGRkZGRjt9PC9zdHlsZT48Zz48Zz48cGF0aCBkPSJNLTMxNy4yMjYgNTg0LjQ5OWMwIDUuNCAzLjIgMTAuMSA3LjcgMTIuMzUzbC02LjU0Ny0xNy45MzggQy0zMTYuNzk5IDU4MC42Mi0zMTcuMjI2IDU4Mi41MDktMzE3LjIyNiA1ODQuNDk5eiIgY2xhc3M9InN0eWxlMCIvPjxwYXRoIGQ9Ik0tMjk0LjIzNCA1ODMuODA3YzAtMS42OTctMC42MDktMi44NzEtMS4xMzItMy43ODVjLTAuNjk1LTEuMTMyLTEuMzQ4LTIuMDg5LTEuMzQ4LTMuMjIgYzAtMS4yNjIgMC45NTYtMi40MzYgMi4zMDUtMi40MzZjMC4wNjEgMCAwLjEgMCAwLjIgMC4wMTFjLTIuNDQyLTIuMjM3LTUuNjk1LTMuNjA0LTkuMjY5LTMuNjA0IGMtNC43OTYgMC05LjAxNCAyLjQ2LTExLjQ2OCA2LjE4N2MwLjMyMiAwIDAuNiAwIDAuOSAwLjAxN2MxLjQzNiAwIDMuNjU4LTAuMTc1IDMuNjU4LTAuMTc1IGMwLjczOS0wLjA0MyAwLjggMSAwLjEgMS4xMzFjMCAwLTAuNzQ0IDAuMDg3LTEuNTcgMC4xMzFsNC45OTcgMTQuODY2bDMuMDA1LTkuMDA3bC0yLjEzOS01Ljg1OSBjLTAuNzM5LTAuMDQ0LTEuNDM5LTAuMTMxLTEuNDM5LTAuMTMxYy0wLjc0LTAuMDQzLTAuNjUzLTEuMTc0IDAuMDg3LTEuMTMxYzAgMCAyLjMgMC4yIDMuNiAwLjIgYzEuNDM1IDAgMy42NTgtMC4xNzUgMy42NTgtMC4xNzVjMC43MzktMC4wNDMgMC44IDEgMC4xIDEuMTMxYzAgMC0wLjc0NCAwLjA4Ny0xLjU3IDAuMTMxbDQuOTYgMTQuNzUzbDEuMzY5LTQuNTc0IEMtMjk0LjY4NyA1ODYuMzQ0LTI5NC4yMzQgNTg0Ljk4MS0yOTQuMjM0IDU4My44MDd6IiBjbGFzcz0ic3R5bGUwIi8+PHBhdGggZD0iTS0zMDMuMjU5IDU4NS42OTlsLTQuMTE5IDExLjk2N2MxLjIzIDAuNCAyLjUgMC42IDMuOSAwLjU1OWMxLjU5OSAwIDMuMTMxLTAuMjc1IDQuNTU4LTAuNzc3IGMtMC4wMzYtMC4wNjEtMC4wNy0wLjEyMy0wLjA5OS0wLjE4OUwtMzAzLjI1OSA1ODUuNjk5eiIgY2xhc3M9InN0eWxlMCIvPjxwYXRoIGQ9Ik0tMjkxLjQ1NiA1NzcuOTE0YzAuMDU5IDAuNCAwLjEgMC45IDAuMSAxLjQxMWMwIDEuMzkzLTAuMjYxIDIuOTU4LTEuMDQ0IDQuOTE2bC00LjE5MiAxMi4xIGM0LjA4LTIuMzc5IDYuODI0LTYuNzk5IDYuODI0LTExLjg2MkMtMjg5Ljc3NSA1ODIuMTEyLTI5MC4zODUgNTc5Ljg2OS0yOTEuNDU2IDU3Ny45MTR6IiBjbGFzcz0ic3R5bGUwIi8+PHBhdGggZD0iTS0zMDMuNSA1NjguNDk5Yy04LjgyMiAwLTE2IDcuMTc4LTE2IDE2YzAgOC44IDcuMiAxNiAxNiAxNS45OTlzMTYtNy4xNzggMTYtMTUuOTk5IEMtMjg3LjUgNTc1LjY3Ny0yOTQuNjc4IDU2OC40OTktMzAzLjUgNTY4LjQ5OXogTS0zMDMuNSA1OTkuNzY2Yy04LjQxOCAwLTE1LjI2Ny02Ljg1LTE1LjI2Ny0xNS4yNjcgYzAtOC40MTggNi44NDktMTUuMjY2IDE1LjI2Ny0xNS4yNjZjOC40MTcgMCAxNS4zIDYuOCAxNS4zIDE1LjI2NkMtMjg4LjIzNCA1OTIuOTE2LTI5NS4wODMgNTk5Ljc2Ni0zMDMuNSA1OTkuNzY2eiIgY2xhc3M9InN0eWxlMCIvPjwvZz48L2c+PC9zdmc+);
	background-position: center 30px;
	background-repeat: no-repeat;
	background-size: 110px 110px;
	font-size: 14px;
	text-align: center;
	font-weight: 600;
	margin: 5px 0 0;
	padding-top: 155px;
	height: 45px;
	display: inline-block;
	width: 165px;
	text-rendering: optimizeLegibility;
}

.about-wrap .wp-badge {
	position: absolute;
	top: 0;
	right: 0;
}

/* Tabs */

h2.nav-tab-wrapper {
	margin-left: 0;
	margin-bottom: 20px;
}

.about-wrap h2.nav-tab-wrapper {
	padding-left: 6px;
	padding-bottom: 1px !important;
	border-bottom-width: 1px;
	border-bottom-style: solid;
}

.about-wrap h2 .nav-tab {
	font-size: 20px;
	margin: 0 10px -2px 0;
	padding: 5px 10px;
	vertical-align: top;
}

.about-wrap h2 .nav-tab-active {
	font-weight: 600;
	padding-top: 3px;
}

/* Changelog / Update screen */

.about-wrap .feature-section img {
	border-width: 1px;
	border-style: solid;
	margin: 0 1.94% 10px 0;
}

.about-wrap .feature-section.three-col img {
	margin: 0.5em 0 0.5em 5px;
	max-width: 100%;
	float: none;
}

.ie8 .about-wrap .feature-section.three-col img {
	margin-left: 0;
}

.about-wrap .feature-section.images-stagger-right img {
	float: right;
	margin: 0 5px 12px 2em;
}

.about-wrap .feature-section.images-stagger-left img {
	float: left;
	margin: 0 2em 12px 5px;
}

.about-wrap .feature-section img.image-100 {
	margin: 0 0 2em 0;
	width: 100%;
}

.about-wrap .feature-section img.image-66 {
	width: 65%;
}

.about-wrap .feature-section img.image-50 {
	max-width: 50%;
}

.about-wrap .feature-section img.image-30 {
	max-width: 31.2381%;
}

.ie8 .about-wrap .feature-section img {
	border-width: 1px;
	border-style: solid;
}

.about-wrap .images-stagger-right img.image-30:nth-child(2) {
	margin-left: 1em;
}

.about-wrap .feature-section.col {
	margin-bottom: 0;
}

.about-wrap .feature-section.col h4 {
	margin:  0 0 0.6em 0;
}

.about-wrap .feature-section.col .last-feature {
	margin-right: 0;
}

.about-wrap .feature-section.two-col div {
	width: 47%;
	margin-right: 4.999999999%;
	float: left;
}

.about-wrap .feature-section.three-col div {
	width: 30%;
	margin-right: 4.999999999%;
	float: left;
}

.about-wrap .three-col-images {
	text-align: center;
}

.about-wrap .three-col-images img {
	margin: 0 0 10px;
}

.about-wrap .three-col-images .last-feature {
	float: right;
}

.about-wrap .three-col-images .first-feature {
	float: left;
}

.about-wrap .changelog .feature-section {
	overflow: hidden;
	padding-bottom: 0;
}

.about-wrap .changelog li {
	list-style-type: disc;
	margin-left: 3em;
}

@media only screen and (max-width: 900px) {
	.about-wrap .feature-section.images-stagger-left img,
	.about-wrap .feature-section.images-stagger-right img {
		clear: both;
	}
}

@media only screen and (max-width: 768px) {
	.about-wrap .feature-section img.image-66 {
		float: none;
		width: 98%;
		max-width: 98%;
	}

	.about-wrap .feature-section.images-stagger-right img.image-66 {
		margin-left: 3px;
	}

	.about-wrap .feature-section.images-stagger-left img.image-66 {
		margin-right: 3px;
	}
}

/* Return to Dashboard Home link */

.about-wrap .return-to-dashboard {
	margin: 30px 0 0 -5px;
	font-size: 14px;
	font-weight: 600;
}

.about-wrap .return-to-dashboard a {
	text-decoration: none;
	padding: 0 5px;
}

/* Credits */

.about-wrap h4.wp-people-group {
	margin-top: 2.6em;
	font-size: 16px;
}

.about-wrap ul.wp-people-group {
	overflow: hidden;
	padding: 5px;
	margin: 0 -15px 0 -5px;
}

.about-wrap ul.compact {
	margin-bottom: 0
}

.about-wrap li.wp-person {
	float: left;
	margin-right: 10px;
}

.about-wrap li.wp-person img.gravatar {
	float: left;
	margin: 0 10px 10px 0;
	padding: 2px;
	width: 60px;
	height: 60px;
}

.about-wrap ul.compact li.wp-person img.gravatar {
	width: 30px;
	height: 30px;
}

.about-wrap li.wp-person {
	height: 70px;
	width: 280px;
	padding-bottom: 15px;
}

.about-wrap ul.compact li.wp-person {
	height: auto;
	width: 180px;
	padding-bottom: 0;
	margin-bottom: 0;
}

.about-wrap #wp-people-group-validators + p.wp-credits-list {
	margin-top: 0;
}

.about-wrap li.wp-person a.web {
	display: block;
	margin: 6px 0 2px;
	font-size: 16px;
	text-decoration: none;
}

.about-wrap p.wp-credits-list a {
	white-space: nowrap;
}

/* Freedoms */

.freedoms-php .about-wrap ol {
	margin: 40px 60px;
}

.freedoms-php .about-wrap ol li {
	list-style-type: decimal;
	font-weight: 600;
}

.freedoms-php .about-wrap ol p {
	font-weight: normal;
	margin: 0.6em 0;
}

/*------------------------------------------------------------------------------
  23.0 - Full Overlay w/ Sidebar
------------------------------------------------------------------------------*/

body.full-overlay-active {
	overflow: hidden;
}

.wp-full-overlay {
	background: #fff;
	z-index: 500000;
	position: fixed;
	overflow: visible;
	top: 0;
	bottom: 0;
	left: 0;
	right: 0;
	height: 100%;
	min-width: 0;
}

.wp-full-overlay-sidebar {
	-webkit-box-sizing: border-box;
	-moz-box-sizing:    border-box;
	box-sizing:         border-box;

	position: fixed;
	width: 300px;
	height: 100%;
	top: 0;
	bottom: 0;
	left: 0;
	padding: 0;
	margin: 0;
	z-index: 10;
	overflow: auto;
	background: #f5f5f5;
	border-right: 1px solid rgba( 0, 0, 0, 0.2 );
}

.wp-full-overlay.collapsed .wp-full-overlay-sidebar {
	overflow: visible;
}

.wp-full-overlay.collapsed,
.wp-full-overlay.expanded .wp-full-overlay-sidebar {
	margin-left: 0 !important;
}

.wp-full-overlay.expanded {
	margin-left: 300px;
}

.wp-full-overlay.collapsed .wp-full-overlay-sidebar {
	margin-left: -300px;
}

.wp-full-overlay-sidebar:after {
	content: '';
	display: block;
	position: absolute;
	top: 0;
	bottom: 0;
	right: 0;
	width: 3px;
	box-shadow: -5px 0 4px -4px rgba(0, 0, 0, 0.1) inset;
	z-index: 1000;
}

.wp-full-overlay-main {
	position: absolute;
	left: 0;
	right: 0;
	top: 0;
	bottom: 0;
	height: 100%;
}

.wp-full-overlay-sidebar .wp-full-overlay-header {
	position: absolute;
	left: 0;
	right: 0;
	height: 45px;
	padding: 0 20px;
	line-height: 45px;
	z-index: 10;
	margin: 0;
}

.wp-full-overlay-sidebar .wp-full-overlay-header {
	border-top: 0;
	border-bottom: 1px solid #fff;
	box-shadow: inset 0 -1px 0 0px #dfdfdf;
}

.wp-full-overlay-sidebar .wp-full-overlay-footer {
	bottom: 0;
	border-bottom: 0;
	border-top: 1px solid #dfdfdf;
	box-shadow: inset 0 1px 0 0px #fff;
}

.wp-full-overlay-sidebar .wp-full-overlay-sidebar-content {
	position: absolute;
	top: 45px;
	bottom: 45px;
	left: 0;
	right: 0;
	overflow: auto;
}

.wp-full-overlay-sidebar-content .accordion-section:first-child {
	border-top: 1px solid #fff;
}

/* Close Link */
.wp-full-overlay .close-full-overlay {
	text-decoration: none;
}

/* Collapse Button */
.wp-full-overlay a.collapse-sidebar {
	position: absolute;
	bottom: 12px;
	left: 0;
	z-index: 50;
	display: block;
	width: 19px;
	height: 19px;
	margin-left: 15px;
	padding: 0;
	border-radius: 50%;
	text-decoration: none;
}

.wp-full-overlay.collapsed .collapse-sidebar {
	position: absolute;
	left: 100%;
}

.wp-full-overlay .collapse-sidebar-arrow {
	position: absolute;
	margin-top: 2px;
	margin-left: 2px;
	display: block;
	width: 15px;
	height: 15px;
	background: transparent url('../../../../wp-admin/images/arrows.png') no-repeat -1px -73px;
}

.wp-full-overlay.collapsed .collapse-sidebar-arrow {
	background-position: -1px -109px;
}

.wp-full-overlay .collapse-sidebar-label {
	position: absolute;
	left: 100%;
	color: #808080;
	line-height: 20px;
	margin-left: 10px;
}

.wp-full-overlay.collapsed .collapse-sidebar-label {
	display: none;
}

.wp-full-overlay .collapse-sidebar:hover .collapse-sidebar-label {
	color: #666;
}

/* Animations */
.wp-full-overlay,
.wp-full-overlay-sidebar,
.wp-full-overlay .collapse-sidebar,
.wp-full-overlay-main {
	-webkit-transition-property: left, right, top, bottom, width, margin;
	-moz-transition-property:    left, right, top, bottom, width, margin;
	-ms-transition-property:     left, right, top, bottom, width, margin;
	-o-transition-property:      left, right, top, bottom, width, margin;
	transition-property:         left, right, top, bottom, width, margin;

	-webkit-transition-duration: 0.2s;
	-moz-transition-duration:    0.2s;
	-ms-transition-duration:     0.2s;
	-o-transition-duration:      0.2s;
	transition-duration:         0.2s;
}


/*------------------------------------------------------------------------------
  24.0 - Customize Loader
------------------------------------------------------------------------------*/

.no-customize-support .hide-if-no-customize,
.customize-support .hide-if-customize,
.no-customize-support.wp-core-ui .hide-if-no-customize,
.no-customize-support .wp-core-ui .hide-if-no-customize,
.customize-support.wp-core-ui .hide-if-customize,
.customize-support .wp-core-ui .hide-if-customize {
	display: none;
}

#customize-container {
	display: none;
	background: #fff;
	z-index: 500000;
	position: fixed;
	overflow: visible;
	top: 0;
	bottom: 0;
	left: 0;
	right: 0;
	height: 100%;
}

.customize-active #customize-container {
	display: block;
}

.customize-loading #customize-container iframe {
	opacity: 0;
}

.customize-loading #customize-container {
	background: #fff url('../../../../wp-admin/images/wpspin_light.gif') no-repeat fixed center center;
	background-size: 16px 16px;
}

#customize-container iframe,
#theme-installer iframe {
	height: 100%;
	width: 100%;
	z-index: 20;

	-webkit-transition: opacity 0.3s;
	-moz-transition:    opacity 0.3s;
	-ms-transition:     opacity 0.3s;
	-o-transition:      opacity 0.3s;
	transition:         opacity 0.3s;
}

#customize-container .collapse-sidebar {
	bottom: 16px;
}

#customize-controls {
	margin-top: 0;
}

#theme-installer {
	display: none;
}

#theme-installer.single-theme {
	display: block;
}

.install-theme-info {
	display: none;
	padding: 10px 20px 20px;
}

.single-theme .install-theme-info {
	padding-top: 15px;
}

#theme-installer .install-theme-info {
	display: block;
}

.install-theme-info .theme-install {
	float: right;
	margin-top: 18px;
}

.install-theme-info .theme-name {
	font-size: 16px;
	line-height: 24px;
	margin-bottom: 0;
}

.install-theme-info .theme-screenshot {
	margin-top: 15px;
	width: 258px;
	border: 1px solid #ccc;
}

.install-theme-info .theme-details {
	overflow: hidden;
}

.theme-details .theme-version {
	margin: 15px 0;
	float: left;
}

.theme-details .star-holder {
	margin: 14px 0;
	float: right;
}

.theme-details .theme-description {
	float: left;
	color: #777;
	line-height: 20px;
}

/*------------------------------------------------------------------------------
  25.0 - Misc
------------------------------------------------------------------------------*/

#excerpt,
.attachmentlinks {
	margin: 0;
	height: 4em;
	width: 98%;
}

#template div {
	margin-right: 190px;
}

p.pagenav {
	margin: 0;
	display: inline;
}

.pagenav span {
	font-weight: 600;
	margin: 0 6px;
}

.row-title {
	font-size: 14px !important;
	font-weight: 600;
}

.column-author img, .column-username img {
	float: left;
	margin-right: 10px;
	margin-top: 1px;
}

.row-actions {
	font-size: 13px;
	visibility: hidden;
	padding: 2px 0 0;
}

.mobile .row-actions {
	visibility: visible;
}

tr:hover .row-actions,
div.comment-item:hover .row-actions {
	visibility: visible;
}

.row-actions-visible {
	padding: 2px 0 0;
}

.form-table .pre {
	padding: 8px;
	margin: 0;
}

table.form-table td .updated {
	font-size: 13px;
}

.tagchecklist {
	margin-left: 14px;
	font-size: 12px;
	overflow: auto;
}
.tagchecklist br {
	display: none;
}
.tagchecklist strong {
	margin-left: -8px;
	position: absolute;
}
.tagchecklist span {
	margin-right: 25px;
	display: block;
	float: left;
	font-size: 13px;
	line-height: 1.8em;
	white-space: nowrap;
	cursor: default;
}

.tagchecklist span a {
	cursor: pointer;
	display: block;
	float: left;
	height: 20px;
	margin: 0 0 0 -17px;
	overflow: hidden;
	position: absolute;
	text-indent: 0;
	width: 20px;
}

#poststuff h2 {
	margin-top: 20px;
	font-size: 1.5em;
	margin-bottom: 15px;
	padding: 0 0 3px;
	clear: left;
}

#poststuff h3,
.metabox-holder h3 {
	font-size: 15px;
	font-weight: normal;
	padding: 7px 12px;
	margin: 0;
	line-height: 1.4;
}

#poststuff .inside {
	margin: 6px 0 8px;
}

#poststuff .inside #parent_id,
#poststuff .inside #page_template {
	max-width: 100%;
}

.inline-edit-row #post_parent,
.inline-edit-row select[name="page_template"] {
	max-width: 80%;
}

.ie8 #poststuff .inside #parent_id,
.ie8 #poststuff .inside #page_template,
.ie8 .inline-edit-row #post_parent,
.ie8 .inline-edit-row select[name="page_template"] {
	width: 250px;
}

#post-visibility-select {
	line-height: 1.5em;
	margin-top: 3px;
}

#poststuff #submitdiv .inside {
	margin: 0;
	padding: 0;
}

.edit-form-section {
	margin-bottom: 20px;
}

#templateside ul li a {
	text-decoration: none;
}

.tool-box .title {
	margin: 8px 0;
	font-size: 18px;
	font-weight: normal;
	line-height: 24px;
}

#sidemenu {
	margin: -30px 15px 0 315px;
	list-style: none;
	position: relative;
	float: right;
	padding-left: 10px;
	font-size: 12px;
}

#sidemenu a {
	padding: 0 7px;
	display: block;
	float: left;
	line-height: 28px;
	border-top-width: 1px;
	border-top-style: solid;
	border-bottom-width: 1px;
	border-bottom-style: solid;
}

#sidemenu li {
	display: inline;
	line-height: 200%;
	list-style: none;
	text-align: center;
	white-space: nowrap;
	margin: 0;
	padding: 0;
}

#sidemenu a.current {
	font-weight: normal;
	padding-left: 6px;
	padding-right: 6px;
	-webkit-border-top-left-radius: 3px;
	-webkit-border-top-right-radius: 3px;
	border-top-left-radius: 3px;
	border-top-right-radius: 3px;
	border-width: 1px;
	border-style: solid;
}

#sidemenu li a .count-0 {
	display: none;
}

.plugin-install #description,
.plugin-install-network #description {
	width: 60%;
}

table .vers,
table .column-visible,
table .column-rating {
	text-align: left;
}

.error-message {
	color: red;
	font-weight: 600;
}

/* Scrollbar fix for bulk upgrade iframe */
body.iframe {
	height: 98%;
}


/* - Only used once or twice in all of WP - deprecate for global style
------------------------------------------------------------------------------*/
td.media-icon {
	text-align: center;
	width: 80px;
	padding-top: 8px;
	padding-bottom: 8px;
}

td.media-icon img {
	max-width: 80px;
	max-height: 60px;
}

#howto {
	font-size: 11px;
	margin: 0 5px;
	display: block;
}

.importers td {
	padding-right: 14px;
}

.importers {
	font-size: 16px;
	width: auto;
}

#namediv table {
	width: 100%;
}

#namediv td.first {
	width: 10px;
	white-space: nowrap;
}

#namediv input {
	width: 98%;
}

#namediv p {
	margin: 10px 0;
}

#submitdiv h3 {
	margin-bottom: 0 !important;
}

/* - Used - but could/should be deprecated with a CSS reset
------------------------------------------------------------------------------*/
.zerosize {
	height: 0;
	width: 0;
	margin: 0;
	border: 0;
	padding: 0;
	overflow: hidden;
	position: absolute;
}

br.clear {
	height: 2px;
	line-height: 2px;
}

.checkbox {
	border: none;
	margin: 0;
	padding: 0;
}

fieldset {
	border: 0;
	padding: 0;
	margin: 0;
}

.post-categories {
	display: inline;
	margin: 0;
	padding: 0;
}

.post-categories li {
	display: inline;
}


/*-----------------------------------------------------------------------------
 MERGED
-------------------------------------------------------------------------------*/

/* dashboard */
.edit-box {
	display: none;
}

h3:hover .edit-box {
	display: inline;
}

#dashboard-widgets form .input-text-wrap input {
	width: 100%;
}

#dashboard-widgets form .textarea-wrap textarea {
	width: 100%;
}

#dashboard-widgets .postbox form .submit {
	float: none;
	margin: .5em 0 0;
	padding: 0;
	border: none;
}

#dashboard-widgets-wrap #dashboard-widgets .postbox form .submit #publish {
	min-width: 0;
}

#dashboard-widgets a {
	text-decoration: none;
}

#dashboard-widgets h3 a {
	text-decoration: underline;
}

#dashboard-widgets h3 .postbox-title-action {
	position: absolute;
	right: 10px;
	padding: 0;
	top: 5px;
}

.js #dashboard-widgets h3 .postbox-title-action {
	right: 33px;
}

#dashboard-widgets h4 {
	font-weight: 600;
	font-size: 14px;
	margin: 0 0 .2em;
	padding: 0;
}

#dashboard_plugins h5 {
	font-size: 14px;
}

/* Right Now */
#dashboard_right_now p.sub,
#dashboard_right_now .table, #dashboard_right_now .versions {
	margin: -12px;
}

#dashboard_right_now .inside {
	font-size: 13px;
	padding-top: 20px;
}

#dashboard_right_now p.sub {
	padding: 5px 0 15px;
	font-size: 11px;
	font-weight: 600;
	left: 14px;
	letter-spacing: 1px;
	position: absolute;
	text-transform: uppercase;
	top: -17px;
}

#dashboard_right_now .table {
	margin: 0;
	padding: 0;
	position: relative;
}

#dashboard_right_now .table_content {
	float: left;
	width: 48%;
}

#dashboard_right_now .table_discussion {
	float: right;
	width: 45%;
}

#dashboard_right_now table td {
	padding: 3px 0;
	white-space: nowrap;
}

#dashboard_right_now table tr.first td {
	border-top: none;
}

#dashboard_right_now td.b {
	padding-right: 6px;
	text-align: right;
	font-size: 14px;
	width: 1%;
}

#dashboard_right_now td.b a {
	font-size: 18px;
}

#dashboard_right_now td.b a:hover {
	color: #d54e21;
}

#dashboard_right_now .t {
	padding-right: 12px;
}

#dashboard_right_now .t,
#dashboard_right_now .b {
	font-size: 14px;
	padding-top: 4px;
}

#dashboard_right_now .t a {
	white-space: nowrap;
}

#dashboard_right_now .spam {
	color: red;
}

#dashboard_right_now .waiting {
	color: #e66f00;
}

#dashboard_right_now .approved {
	color: green;
}

#dashboard_right_now .versions {
	padding: 6px 10px 12px;
	clear: both;
}

#dashboard_right_now a.button {
	float: right;
	clear: right;
	position: relative;
	top: -5px;
}

/* Recent Comments */
#dashboard_recent_comments h3 {
	margin-bottom: 0;
}

#dashboard_recent_comments .inside {
	margin-top: 0;
}

#dashboard_recent_comments .comment-meta .approve {
	font-style: italic;
	font-family: "Open Sans", sans-serif;
	font-size: 10px;
}

#dashboard_recent_comments .subsubsub {
	float: none;
	white-space: normal;
}

#the-comment-list {
	position: relative;
}

#the-comment-list .comment-item {
	padding: 1em 12px;
	border-top: 1px solid;
}

#the-comment-list .pingback {
	padding-left: 12px !important;
}

#the-comment-list .comment-item,
#the-comment-list #replyrow {
	margin: 0 -12px;
}

#the-comment-list .comment-item:first-child {
	border-top: none;
}

#the-comment-list .comment-item .avatar {
	float: left;
	margin: 0 10px 5px 0;
}

#the-comment-list .comment-item h4 {
	line-height: 1.5em;
	margin-top: 0;
	color: #777;
}

#the-comment-list .comment-item h4 cite {
	font-style: normal;
	font-weight: normal;
}

#the-comment-list .comment-item blockquote,
#the-comment-list .comment-item blockquote p {
	margin: 0;
	padding: 0;
	display: inline;
}

#dashboard_recent_comments #the-comment-list .trackback blockquote,
#dashboard_recent_comments #the-comment-list .pingback blockquote {
	display: block;
}

#the-comment-list .comment-item p.row-actions {
	margin: 3px 0 0;
	padding: 0;
	font-size: 13px;
}

/* QuickPress */
.no-js #dashboard_quick_press {
	display: none;
}

#dashboard_quick_press .easy-blogging {
	padding: 0 8px;
	text-align: left;
}

#dashboard_quick_press .input-text-wrap {
	position: relative;
}

#dashboard_quick_press .prompt {
	color: #bbb;
	position: absolute;
}

#dashboard_quick_press div.updated  {
	padding: 0 5px;
}

#title-wrap label,
#tags-input-wrap label {
	cursor: text;
}

#title-wrap #title {
	padding: 2px 6px;
	font-size: 1.3em;
	line-height: 100%;
	outline: none;
}

#tags-input-wrap #tags-input {
	outline: none;
	padding: 36px 6px;
}

#title-wrap #title-prompt-text {
	font-size: 1.3em;
	padding: 5px 8px;
}

#tags-input-wrap #tags-input-prompt-text {
	font-size: 1em;
	padding: 5px 8px;
}

#dashboard_quick_press .input-text-wrap,
#dashboard_quick_press .textarea-wrap {
	margin: 0 0 0.7 0;
}

#dashboard_quick_press .wp-media-buttons {
	margin: 0 0 .2em 1px;
	padding: 0;
}

#dashboard_quick_press .wp-media-buttons a {
	color: #777;
}

#dashboard-widgets #dashboard_quick_press form p.submit input {
	float: left;
}

#dashboard-widgets #dashboard_quick_press form p.submit #save-post {
	margin: 0 0.7em 0 1px;
}

#dashboard-widgets #dashboard_quick_press form p.submit #publish {
	float: right;
}

#dashboard-widgets #dashboard_quick_press form p.submit .spinner {
	vertical-align: middle;
	margin: 4px 6px 0 0;
}

/* Recent Drafts */
#dashboard_recent_drafts ul,
#dashboard_recent_drafts p {
	margin: 0;
	padding: 0;
	word-wrap: break-word;
}

#dashboard_recent_drafts ul {
	list-style: none;
}

#dashboard_recent_drafts ul li {
	margin-bottom: 1em;
}

#dashboard_recent_drafts h4 {
	line-height: 1.7em;
	word-wrap: break-word;
}

#dashboard_recent_drafts h4 abbr {
	font-weight: normal;
	font-family: "Open Sans", sans-serif;
	font-size: 12px;
	color: #999;
	margin-left: 3px;
}

/* Feeds */
.rss-widget ul {
	margin: 0;
	padding: 0;
	list-style: none;
}

a.rsswidget {
	font-size: 14px;
	font-weight: 600;
	line-height: 1.7em;
}

.rss-widget ul li {
	line-height: 1.5em;
	margin-bottom: 12px;
}

.rss-widget span.rss-date {
	color: #999;
	font-size: 13px;
	margin-left: 3px;
}

.rss-widget cite {
	display: block;
	text-align: right;
	margin: 0 0 1em;
	padding: 0;
}

.rss-widget cite:before {
	content: '\2014';
}

/* Plugins */
#dashboard_plugins h4 {
	line-height: 1.7em;
}

#dashboard_plugins h5 {
	font-weight: normal;
	font-size: 13px;
	margin: 0;
	display: inline;
	line-height: 1.4em;
}

#dashboard_plugins h5 a {
	line-height: 1.4em;
}

#dashboard_plugins .inside span {
	font-size: 12px;
	padding-left: 5px;
}

#dashboard_plugins p {
	margin: 0.3em 0 1.4em;
	line-height: 1.4em;
}

.dashboard-comment-wrap {
	overflow: hidden;
	word-wrap: break-word;
}


/* Browser Nag */
#dashboard_browser_nag a.update-browser-link {
	font-size: 1.2em;
	font-weight: 600;
}

#dashboard_browser_nag a {
	text-decoration: underline;
}

#dashboard_browser_nag p.browser-update-nag.has-browser-icon {
	padding-right: 125px;
}

#dashboard_browser_nag .browser-icon {
	margin-top: -35px;
}

#dashboard_browser_nag.postbox.browser-insecure {
	background-color: #ac1b1b;
	border-color: #ac1b1b;
}

#dashboard_browser_nag.postbox {
	background-color: #e29808;
	background-image: none;
	border-color: #edc048;
	color: #fff;
	-webkit-box-shadow: none;
	box-shadow: none;
}

#dashboard_browser_nag.postbox.browser-insecure h3 {
	border-bottom-color: #cd5a5a;
	color: #fff;
}

#dashboard_browser_nag.postbox h3 {
	border-bottom-color: #f6e2ac;
	background: transparent none;
	color: #fff;
	-webkit-box-shadow: none;
	box-shadow: none;
}

#dashboard_browser_nag a {
	color: #fff;
}

/* Make the browser nags easier to read with Open Sans */

#dashboard_browser_nag h3.hndle {
	border: none;
	font-weight: 600;
	font-size: 20px;
	padding-top: 10px;
}

.postbox#dashboard_browser_nag p a.dismiss {
	font-size: 14px;
}

.postbox#dashboard_browser_nag p,
.postbox#dashboard_browser_nag a,
.postbox#dashboard_browser_nag p.browser-update-nag {
	font-size: 16px;
}


/* login */

#loginform p.submit {
	border: none;
	margin: -10px 0 20px; /* May want to revisit this */
}

.login * {
	margin: 0;
	padding: 0;
}

.login form {
	margin-top: 20px;
	margin-left: 0;
	padding: 26px 24px 46px;
	font-weight: normal;
}

.login form .forgetmenot {
	font-weight: normal;
	float: left;
	margin-bottom: 0;
}

.login .button-primary {
	float: right;
}

#login form p {
	margin-bottom: 0;
}

#login form p.submit {
	padding: 0;
}

.login label {
	color: #777;
	font-size: 14px;
}

.login form .forgetmenot label {
	font-size: 12px;
	line-height: 19px;
}

.login h1 {
	text-align: center;
}

.login h1 a {
	
	background-position: center;
	background-repeat: no-repeat;
	color: #999;
	font-size: 20px;
	font-weight: normal;
	line-height: 1.3em;
	margin: 0 auto 25px;
	padding: 0;
	text-decoration: none;
	text-indent: -9999px;
	outline: none;
	overflow: hidden;
	display: block;
    
    <?php if( infusion_mobeus_get_option('login_logo') !== '' ) { echo ('
    background-size: contain;
    height:100px;
	width: auto;
	max-width:99%;
	
    ');
	} else { echo ('
	background-size: 80px 80px;
    width: 80px;
    height:80px;
	');};
	if( infusion_mobeus_get_option('disable_login_infusion') == 'on' ) {echo ('
	background-size: 80px 80px;
    width: 80px;
    height:80px;
	');};
	?>
}

#login {
	width: 320px;
	padding: 114px 0 0;
	margin: auto;
}

#login_error,
.login .message {
	margin-left: 0;
	padding: 12px;
}

.login #nav,
.login #backtoblog {
	font-size: 13px;
	padding: 0 24px 0;
}

.login #nav {
	margin: 24px 0 0 0;
}

#backtoblog {
	margin: 16px 0 0 0;
}

.login form .input,
.login input[type="text"] {
	color: #555;
	font-weight: 200;
	font-size: 24px;
	line-height: 1;
	width: 100%;
	padding: 3px;
	margin-top: 2px;
	margin-right: 6px;
	margin-bottom: 16px;
	border: 1px solid #e5e5e5;
	background: #fbfbfb;
	outline: none;
	-webkit-box-shadow: inset 1px 1px 2px rgba(200, 200, 200, 0.2);
	box-shadow: inset 1px 1px 2px rgba(200, 200, 200, 0.2);
}

.login #pass-strength-result {
	width: 250px;
	font-weight: 600;
	border-style: solid;
	border-width: 1px;
	margin: 12px 0 6px;
	padding: 6px 5px;
	text-align: center;
}

.mobile #login {
	padding: 20px 0;
}

.mobile #login form,
.mobile #login .message,
.mobile #login_error {
	margin-left: 0;
}

.mobile #login #nav,
.mobile #login #backtoblog {
	margin-left: 8px;
}

.mobile #login h1 a {
	width: auto;
}

body.interim-login {
	height: auto;
}

.interim-login #login {
	padding: 0;
	margin: 25px auto 20px;
}

.interim-login.login h1 a {
	width: auto;
}

.interim-login #login_error,
.interim-login.login .message {
	margin: 0 0 16px;
}

.interim-login.login form {
	margin: 0;
}

/* ms */
/* Dashboard: MS Specific Data */
#dashboard_right_now p.musub {
	margin: 20px -2px 0;
	padding: 15px 5px 10px;
	border-top: 1px solid #ececec;
	position: static;
}

.rtl #dashboard_right_now p.musub {
	padding-left: 0;
	padding-right: 16px;
}

#dashboard_right_now td.b a.musublink {
	font-size: 16px;
}

#dashboard_right_now div.musubtable {
	border-top: none;
}

#dashboard_right_now div.musubtable .t,
#dashboard_right_now div.musubtable .b {
	vertical-align: top;
	padding: 0;
	white-space: normal;
}

#dashboard_right_now div.musubtable .b {
	padding-right: 3px;
}

/* Background Color for Site Status */
.wp-list-table .site-deleted {
	background: #ff8573;
}
.wp-list-table .site-spammed {
	background: #faafaa;
}
.wp-list-table .site-archived {
	background: #ffebe8;
}
.wp-list-table .site-mature {
	background: #fecac2;
}

/* nav-menu */

.no-js #message {
	display: block;
}

#nav-menu-meta ul.outer-border {
	-webkit-border-radius: 3px;
	border-radius: 3px;
}

.accordion-section ul.category-tabs,
.accordion-section ul.add-menu-item-tabs,
.accordion-section ul.wp-tab-bar {
	margin: 0;
}

.accordion-section .categorychecklist {
	margin: 13px 0;
}

#nav-menu-meta .accordion-section-content {
	padding: 18px 13px;
}

#nav-menu-meta .button-controls {
	margin-bottom: 0;
}

#nav-menus-frame {
	margin-left: 300px;
	margin-top: 23px;
}

#nav-menus-frame .accordion-section-content .inside {
	font-size: 14px;
}

#wpbody-content #menu-settings-column {
	display:inline;
	width:281px;
	margin-left: -300px;
	clear: both;
	float: left;
	padding-top: 0;
}

#menu-settings-column .inside {
	clear: both;
	margin: 10px 0 0;
}

.metabox-holder-disabled .postbox,
.metabox-holder-disabled .accordion-section-content  {
	opacity: 0.5;
	filter: alpha(opacity=50);
}

.metabox-holder-disabled .button-controls .select-all {
	display: none;
}

#wpbody {
	position: relative;
}

.blank-slate .menu-name {
	height: 2em;
}

.blank-slate .menu-settings {
	border: none;
	margin-top: 0;
	padding-top: 0;
	overflow: hidden;
}

.is-submenu {
	font-style: italic;
	font-weight: normal;
	margin-left: 4px;
}

.manage-menus {
	margin-top: 23px;
	padding: 10px;
	overflow: hidden;
}

.manage-menus select {
	float: left;
	margin-right: 6px;
}

.manage-menus .selected-menu {
	float: left;
	margin: 5px 6px 0 0;
}

.manage-menus .submit-btn {
	float: left;
	margin-top: 1px;
}

.menu-edit p {
	margin: .3em 0 .6em;
}

.menu-edit #post-body-content h3 {
	margin: 0 0 10px;
}

#post-body #post-body-content h3 {
	margin-top: 1em;
}

.menu-settings {
	border-top-width: 1px;
	border-top-style: solid;
	margin-top: 2em;
	overflow: hidden;
}

.menu-settings dl {
	margin: 0 0 10px;
	overflow: hidden;
	position: relative;
}

.menu-settings dd {
	float: left;
	margin: 0;
	width: 60%;
	padding-left: 170px;
}

.menu-settings dt {
	clear: both;
	left: 0;
	padding: 3px 0 0;
	position: absolute;
}

.menu-edit .checkbox-input {
	margin-top: 4px;
}

.theme-location-set {
	font-size: 11px;
}

/* Menu Container */
#menu-management-liquid {
	float: left;
	min-width: 100%;
	margin-top: 3px;
}

#menu-management {
	position: relative;
	margin-right: 20px;
	margin-top: -3px;
	width: 100%;
}

#menu-management .menu-edit {
	margin-bottom: 20px;
}

.nav-menus-php #post-body {
	padding: 0 10px 10px;
	border-width: 1px 0;
	border-style: solid;
}

#nav-menu-header,
#nav-menu-footer {
	padding: 0 10px;
}

#nav-menu-header {
	border-bottom: 1px solid;
	margin-bottom: 0;
}

#nav-menu-header .menu-name-label {
	margin-top: 2px;
}

#nav-menu-footer {
	border-top: 1px solid;
}

.nav-menus-php #post-body div.updated,
.nav-menus-php #post-body div.error {
	margin: 0;
}

.nav-menus-php #post-body-content {
	position: relative;
	float: none;
}

#menu-management .menu-add-new abbr {
	font-weight:600;
}

#select-nav-menu-container {
	text-align: right;
	padding: 0 10px 3px 10px;
	margin-bottom: 5px;
}

#select-nav-menu {
	width: 100px;
	display: inline;
}

#menu-name-label {
	margin-top: -2px;
}

.widefat td.menu-location-menus {
	padding-bottom: 5px;
}

.menu-location-menus select {
	float: left;
}

#locations-nav-menu-wrapper {
	padding: 5px 0;
}

.locations-nav-menu-select select {
	float: left;
	width: 160px;
	margin-right: 5px;
}

.locations-row-links {
	float: left;
	margin: 6px 0 0 6px;
}

.locations-edit-menu-link,
.locations-add-menu-link {
	margin: 0 3px;
}

.locations-edit-menu-link {
	padding-right: 3px;
	border-right: 1px solid #ccc;
}

#wpbody .open-label {
	display: block;
	float:left;
}

#wpbody .open-label span {
	padding-right: 10px;
}

.js .input-with-default-title {
	font-style: italic;
}

#menu-management .inside {
	padding: 0 10px;
}

/* Add Menu Item Boxes */
.postbox .howto input,
.accordion-container .howto input {
	width: 180px;
	float: right;
}

.accordion-container .outer-border {
	margin: 0;
}

.customlinkdiv .howto input {
	width: 180px;
}

.customlinkdiv p {
	margin-top: 0
}

#nav-menu-theme-locations .howto select {
	width: 100%;
}

#nav-menu-theme-locations .button-controls {
	text-align: right;
}

.add-menu-item-view-all {
	height: 400px;
}

/* Button Primary Actions */
#menu-container .submit {
	margin: 0 0 10px;
	padding: 0;
}

.nav-menus-php .add-new-menu-action {
	float: left;
	margin: 6px 0 0 6px;
	line-height: 15px;
}

.nav-menus-php .meta-sep,
.nav-menus-php .submitdelete,
.nav-menus-php .submitcancel {
	display: block;
	float: left;
	margin: 4px 0;
	line-height: 15px;
}

.meta-sep {
	padding: 0 2px;
}

#cancel-save {
	text-decoration: underline;
	font-size: 12px;
	margin-left: 20px;
	margin-top: 5px;
}

.button.right, .button-secondary.right, .button-primary.right {
	float: right;
}

/* Button Secondary Actions */
.list-controls {
	float: left;
	margin-top: 5px;
}

.add-to-menu {
	float: right;
}

.postbox .spinner {
	display: none;
	vertical-align: middle;
}

.button-controls {
	clear:both;
	margin: 10px 0;
}

.show-all,
.hide-all {
	cursor: pointer;
}

.hide-all {
	display: none;
}

/* Create Menu */
#menu-name {
	width: 270px;
}

#manage-menu .inside {
	padding: 0px 0px;
}

/* Custom Links */
#available-links dt {
	display: block;
}

#add-custom-link .howto {
	font-size: 12px;
}

#add-custom-link label span {
	display: block;
	float: left;
	margin-top: 5px;
	padding-right: 5px;
}

.menu-item-textbox {
	width: 180px;
}

.nav-menus-php .howto span {
	margin-top: 6px;
	display: block;
	float: left;
}

/* Menu item types */
.quick-search {
	width: 190px;
}

.nav-menus-php .list-wrap {
	display: none;
	clear: both;
	margin-bottom: 10px;
}

.nav-menus-php .list-container {
	max-height: 200px;
	overflow-y: auto;
	padding: 10px 10px 5px;
}

.nav-menus-php .postbox p.submit {
	margin-bottom: 0;
}

/* Listings */
.nav-menus-php .list li {
	display: none;
	margin: 0;
	margin-bottom: 5px;
}

.nav-menus-php .list li .menu-item-title {
	cursor: pointer;
	display: block;
}

.nav-menus-php .list li .menu-item-title input {
	margin-right: 3px;
	margin-top: -3px;
}

.menu-item-title input[type=checkbox] {
	display: inline-block;
	margin-top: -4px;
}


/* Nav Menu */
#menu-container .inside {
	padding-bottom: 10px;
}

.menu {
	padding-top:1em;
}

#menu-to-edit {
	margin: 0;
	padding: 0.1em 0;
}

.menu ul {
	width: 100%;
}

.menu li {
	margin-bottom: 0;
	position:relative;
}

.menu-item-bar {
	clear:both;
	line-height:1.5em;
	position:relative;
	margin: 9px 0 0;
}

.menu-item-title {
	margin-left: 10px;
}

.menu-item-handle {
	border: 1px solid #dfdfdf;
	height: auto;
	line-height: 35px;
	margin-left: -1px;
	overflow: hidden;
	padding-left: 10px;
	position: relative;
	width: 400px;
	word-wrap: break-word;
}

#menu-to-edit .menu-item-invalid .menu-item-handle {
	background: #f6c9cc;
	background-image: -webkit-gradient(linear, left bottom, left top, from(#f6c9cc), to(#fdf8ff));
	background-image: -webkit-linear-gradient(bottom, #f6c9cc, #fdf8ff);
	background-image:    -moz-linear-gradient(bottom, #f6c9cc, #fdf8ff);
	background-image:      -o-linear-gradient(bottom, #f6c9cc, #fdf8ff);
	background-image: linear-gradient(to top, #f6c9cc, #fdf8ff);
}

.menu-item-edit-active .menu-item-handle {
	-webkit-border-bottom-right-radius: 0;
	-webkit-border-bottom-left-radius: 0;
	border-bottom-right-radius: 0;
	border-bottom-left-radius: 0;
}

.no-js .menu-item-edit-active .item-edit {
	display: none;
}

.js .menu-item-handle {
	cursor: move;
}

.menu li.deleting .menu-item-handle {
	background-image: none;
}

.menu-item-handle .item-title {
	font-size: 12px;
	font-weight: 600;
	padding: 7px 0;
	line-height: 20px;
	display:block;
	margin-right:13em;
}

/* Sortables */
li.menu-item.ui-sortable-helper dl {
	margin-top: 0;
}

li.menu-item.ui-sortable-helper .menu-item-transport dl {
	margin-top: 13px;
}

.menu .sortable-placeholder {
	height: 35px;
	width: 410px;
	margin-top: 13px;
}

/* WARNING: The factor of 30px is hardcoded into the nav-menus javascript. */
.menu-item-depth-0 { margin-left: 0px; }
.menu-item-depth-1 { margin-left: 30px; }
.menu-item-depth-2 { margin-left: 60px; }
.menu-item-depth-3 { margin-left: 90px; }
.menu-item-depth-4 { margin-left: 120px; }
.menu-item-depth-5 { margin-left: 150px; }
.menu-item-depth-6 { margin-left: 180px; }
.menu-item-depth-7 { margin-left: 210px; }
.menu-item-depth-8 { margin-left: 240px; }
.menu-item-depth-9 { margin-left: 270px; }
.menu-item-depth-10 { margin-left: 300px; }
.menu-item-depth-11 { margin-left: 330px; }

.menu-item-depth-0 .menu-item-transport { margin-left: 0px; }
.menu-item-depth-1 .menu-item-transport { margin-left: -30px; }
.menu-item-depth-2 .menu-item-transport { margin-left: -60px; }
.menu-item-depth-3 .menu-item-transport { margin-left: -90px; }
.menu-item-depth-4 .menu-item-transport { margin-left: -120px; }
.menu-item-depth-5 .menu-item-transport { margin-left: -150px; }
.menu-item-depth-6 .menu-item-transport { margin-left: -180px; }
.menu-item-depth-7 .menu-item-transport { margin-left: -210px; }
.menu-item-depth-8 .menu-item-transport { margin-left: -240px; }
.menu-item-depth-9 .menu-item-transport { margin-left: -270px; }
.menu-item-depth-10 .menu-item-transport { margin-left: -300px; }
.menu-item-depth-11 .menu-item-transport { margin-left: -330px; }

body.menu-max-depth-0 { min-width: 950px !important; }
body.menu-max-depth-1 { min-width: 980px !important; }
body.menu-max-depth-2 { min-width: 1010px !important; }
body.menu-max-depth-3 { min-width: 1040px !important; }
body.menu-max-depth-4 { min-width: 1070px !important; }
body.menu-max-depth-5 { min-width: 1100px !important; }
body.menu-max-depth-6 { min-width: 1130px !important; }
body.menu-max-depth-7 { min-width: 1160px !important; }
body.menu-max-depth-8 { min-width: 1190px !important; }
body.menu-max-depth-9 { min-width: 1220px !important; }
body.menu-max-depth-10 { min-width: 1250px !important; }
body.menu-max-depth-11 { min-width: 1280px !important; }

/* Menu item controls */
.item-type {
	font-size: 12px;
	padding: 7px 10px;
	line-height: 22px;
	display: block;
}

.item-controls {
	font-size: 12px;
	position: absolute;
	right: 20px;
	top: -1px;
}

.item-controls a {
	text-decoration: none;
}

.item-controls a:hover {
	cursor: pointer;
}

.item-controls .item-order {
	padding-right: 10px;
}

.nav-menus-php .item-edit {
	display: block;
	height: 36px;
	margin-right: 0 !important;
	overflow: hidden;
	position: absolute;
	right: -20px;
	text-indent:-999em;
	top: 0;
	width: 40px;
}

/* Menu editing */
.menu-instructions-inactive {
	display: none;
}

.menu-item-settings {
	display: block;
	width: 400px;
	padding: 10px 0 10px 10px;
	border: solid;
	border-width: 0 1px 1px 1px;
	-webkit-border-bottom-right-radius: 3px;
	-webkit-border-bottom-left-radius: 3px;
	border-bottom-left-radius: 3px;
	border-bottom-right-radius: 3px;
}

.menu-item-settings .field-move a {
	display: none;
	margin: 0 2px;
}

.menu-item-edit-active .menu-item-settings {
	display: block;
}

.menu-item-edit-inactive .menu-item-settings {
	display: none;
}

.add-menu-item-pagelinks {
	margin: .5em auto;
	text-align: center;
}

.link-to-original {
	display: block;
	margin: 0 0 10px;
	padding: 3px 5px 5px;
	font-size: 12px;
	font-style: italic;
}

.link-to-original a {
	padding-left: 4px;
	font-style: normal;
}

.hidden-field {
	display: none;
}

.menu-item-settings .description-thin,
.menu-item-settings .description-wide {
	margin-right: 10px;
	float: left;
}

.description-thin {
	width: 190px;
	height: 40px;
}

.description-wide {
	width: 390px;
}

.menu-item-actions {
	padding-top: 15px;
}

#cancel-save {
	cursor: pointer;
}

/* Major/minor publishing actions (classes) */
.nav-menus-php .major-publishing-actions {
	clear: both;
	padding: 3px 0 5px;
}

.nav-menus-php .major-publishing-actions .publishing-action {
	text-align: right;
	float: right;
	line-height: 23px;
	margin: 4px 0 1px;
}

.nav-menus-php .blank-slate .menu-settings {
	display: none;
}

.nav-menus-php .delete-action {
	float: left;
	margin-top: 2px;
}

.nav-menus-php .submitbox .submitcancel {
	border-bottom: 1px solid;
	padding: 1px 2px;
	text-decoration: none;
}

.nav-menus-php .major-publishing-actions .form-invalid {
	padding-left: 4px;
	margin-left: -4px;
	border: 0 none;
}

/* Clearfix */
#menu-item-name-wrap:after,
#menu-item-url-wrap:after,
#menu-name-label:after,
#menu-settings-column .inside:after,
#nav-menus-frame:after,
.nav-menus-php #post-body-content:after,
.nav-menus-php .button-controls:after,
.nav-menus-php .major-publishing-actions:after,
.nav-menus-php .menu-item-settings:after {
	clear: both;
	content: ".";
	display: block;
	height: 0;
	visibility: hidden;
}

#nav-menus-frame,
.button-controls,
#menu-item-url-wrap,
#menu-item-name-wrap {
	display: block;
}

/* Star ratings */
div.star-holder {
	position: relative;
	height: 17px;
	width: 100px;
	background: url('../../../../wp-admin/images/stars.png?ver=20121108') repeat-x bottom left;
}

div.star-holder .star-rating {
	background: url('../../../../wp-admin/images/stars.png?ver=20121108') repeat-x top left;
	height: 17px;
	float: left;
}

div.action-links {
	font-weight: normal;
	margin: 6px 0 0;
}

/* Header on thickbox */
#plugin-information-header {
	margin: 0;
	padding: 0 5px;
	font-weight: 600;
	position: relative;
	border-bottom-width: 1px;
	border-bottom-style: solid;
	height: 2.5em;
}
#plugin-information ul#sidemenu {
	font-weight: normal;
	margin: 0 5px;
	position: absolute;
	left: 0;
	bottom: -1px;
}

/* Install sidemenu */
#plugin-information {
	height: auto;
}

#plugin-information p.action-button {
	width: 100%;
	padding-bottom: 0;
	margin-bottom: 0;
	margin-top: 10px;
	-webkit-border-top-left-radius: 3px;
	-webkit-border-bottom-left-radius: 3px;
	border-top-left-radius: 3px;
	border-bottom-left-radius: 3px;
}

#plugin-information .action-button a {
	text-align: center;
	font-weight: 600;
	text-decoration: none;
	display: block;
	line-height: 2em;
}

#plugin-information h2 {
	clear: none !important;
	margin-right: 200px;
}

#plugin-information .fyi {
	margin: 0 10px 50px;
	width: 210px;
}

#plugin-information .fyi h2 {
	font-size: 0.9em;
	margin-bottom: 0;
	margin-right: 0;
}

#plugin-information .fyi h2.mainheader {
	padding: 5px;
	-webkit-border-top-left-radius: 3px;
	border-top-left-radius: 3px;
}

#plugin-information .fyi ul {
	padding: 10px 5px 10px 7px;
	margin: 0;
	list-style: none;
	-webkit-border-bottom-left-radius: 3px;
	border-bottom-left-radius: 3px;
}

#plugin-information .fyi li {
	margin-right: 0;
}

#plugin-information #section-holder {
	padding: 10px;
}

#plugin-information .section ul,
#plugin-information .section ol {
	margin-left: 16px;
	list-style-type: square;
	list-style-image: none;
}

#plugin-information #section-screenshots ol {
	list-style: none;
	margin: 0;
}

#plugin-information #section-screenshots li img {
	vertical-align: text-top;
	max-width: 100%;
	width: auto;
	height: auto;
}

#plugin-information #section-screenshots li p {
	font-style: italic;
	padding-left: 20px;
	padding-bottom: 2em;
}

#plugin-information #section-screenshots ol,
#plugin-information .updated,
#plugin-information pre {
	margin-right: 215px;
}

#plugin-information pre {
	padding: 7px;
	overflow: auto;
	border-width: 1px;
	border-style: solid;
}

.plugin-version-author-uri {
	font-size: 13px;
}

/* press-this */
body.press-this {
	color: #333;
	margin: 0;
	padding: 0;
	min-width: 675px;
	min-height: 400px;
}

img {
	border: none;
}

/* Header */
#wphead {
	border-bottom-width: 1px;
	border-bottom-style: solid;
}

.press-this #wphead {
	height: 32px;
	margin-left: 0;
	margin-right: 0;
	margin-bottom: 5px;
}

.press-this #header-logo {
	float: left;
	margin: 7px 7px 0;
	-webkit-user-select: none;
	-moz-user-select: none;
	user-select: none;
}

.press-this #wphead h1 {
	font-weight: normal;
	font-size: 16px;
	line-height: 32px;
	margin: 0;
	float: left;
}

.press-this #wphead h1 a {
	text-decoration: none;
}

.press-this #wphead h1 a:hover {
	text-decoration: underline;
}

.press-this #message {
	margin: 10px 0;
}

.press-this .posting {
	margin-right: 252px;
}

.press-this-sidebar {
	float: right;
	width: 240px;
	padding-top: 10px;
}

.press-this #title {
	margin-left: 0;
	margin-right: 0;
	-moz-box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-ms-box-sizing: border-box;
	box-sizing: border-box;
}

.press-this .tagchecklist span a {
	background: transparent url('../../../../wp-admin/images/xit.gif') no-repeat 0 0;
}

.press-this #titlediv {
	margin: 0;
}

.press-this .wp-media-buttons {
	cursor: default;
	padding: 8px 8px 0;
}

.press-this .howto {
	margin-top: 2px;
	margin-bottom: 3px;
	font-size: 12px;
	font-style: italic;
	display: block;
}

/* Editor/Main Column */
.press-this #poststuff {
	margin: 0 10px 10px;
	padding: 0;
}

.press-this #photo-add-url-div input[type="text"] {
	width: 220px;
}

#poststuff #editor-toolbar {
	height: 30px;
}

div.zerosize {
	border: 0 none;
	height: 0;
	margin: 0;
	overflow: hidden;
	padding: 0;
	width: 0;
}

.posting {
	margin-right: 212px;
	position: relative;
}

.press-this .inner-sidebar {
	width: 200px;
}

.press-this .inner-sidebar .sleeve {
	padding-top: 5px;
}

.press-this #submitdiv p {
	margin: 0;
	padding: 6px;
}

.press-this #submitdiv #publishing-actions {
	border-bottom: 1px solid #dfdfdf;
}

.press-this #publish {
	float: right;
}

.press-this #poststuff h2,
.press-this #poststuff h3 {
	font-size: 14px;
	line-height: 1;
}

.press-this #tagsdiv-post_tag h3,
.press-this #categorydiv h3 {
	cursor: pointer;
}

.press-this #submitdiv h3 {
	cursor: default;
}

h3.tb {
	font-weight: 600;
	font-size: 12px;
	margin-left: 5px;
}

#TB_window {
	border: 1px solid #333;
}

.press-this .postbox,
.press-this .stuffbox {
	margin-bottom: 10px;
	min-width: 0;
}

.js .meta-box-sortables .postbox:hover .handlediv {
	margin-right: 0 !important;
}

.js .sidebar-name:hover .sidebar-name-arrow:before,
.js .meta-box-sortables .postbox:hover .handlediv:before {
	right: 12px;
	content: '\f142';
	font: 20px/1 dashicons;
	display: inline-block;
	padding: 8px 10px;
	color: #888;
	top: 0;
	position: relative;
	-webkit-font-smoothing: antialiased;
	text-decoration: none !important;
}

.js .postbox.closed:hover .sidebar-name-arrow:before,
.js .meta-box-sortables .postbox.closed:hover .handlediv:before {
	content: '\f140';
}

.press-this #submitdiv:hover .handlediv {
	background: none;
}

.tbtitle {
	font-size: 1.7em;
	outline: none;
	padding: 3px 4px;
	border-color: #dfdfdf;
}

.press-this .actions {
	float: right;
	margin: -19px 0 0;
}

.press-this #extra-fields .actions {
	margin: -32px -7px 0 0;
}

.press-this .actions li {
	float: left;
	list-style: none;
	margin-right: 10px;
}

#extra-fields .button {
	margin-right: 5px;
}

/* Photo Styles */
#photo_saving {
	margin: 0 8px 8px;
	vertical-align: middle;
}

#img_container_container {
	overflow: auto;
}

#extra-fields {
	margin-top: 10px;
	position: relative;
}

#extra-fields h2 {
	margin: 12px;
}

#waiting {
	margin-top: 10px;
	overflow: hidden;
}

#waiting span {
	float: right;
	margin: 0 0 0 5px;
}

#waiting .spinner {
	display: block;
}

#extra-fields .postbox {
	margin-bottom: 5px;
}

#extra-fields .titlewrap {
	padding: 0;
	overflow: auto;
	height: 100px;
}

#img_container a {
	display: block;
	float: left;
	overflow: hidden;
}

#img_container img,
#img_container a {
	width: 68px;
	height: 68px;
}

#img_container img {
	border: none;
	background-color: #f4f4f4;
	cursor: pointer;
}

#img_container a,
#img_container a:link,
#img_container a:visited {
	border: 1px solid #ccc;
	display: block;
	position: relative;
}

#img_container a:hover,
#img_container a:active {
	border-color: #000;
	z-index: 1000;
	border-width: 2px;
	margin: -1px;
}

/* Video */
#embed-code {
	width: 100%;
	height: 98px;
}

/* Categories */
.press-this .categorydiv div.tabs-panel {
	height: 100px;
}

/* Tags */
.press-this .tagsdiv .newtag {
	width: 120px;
}

.press-this #content {
	margin: 5px 0;
	padding: 0 5px;
	border: 0 none;
	height: 345px;
	font-family: Consolas, Monaco, monospace;
	font-size: 13px;
	line-height: 19px;
	background: transparent;
}

/* Submit */
.press-this #publishing-actions .spinner {
	display: inline;
	vertical-align: middle;
}

#TB_ajaxContent #options {
	position: absolute;
	top: 20px;
	right: 25px;
	padding: 5px;
}

#TB_ajaxContent h3 {
	margin-bottom: .25em;
}

.error a {
	text-decoration: underline;
}

.updated a {
	text-decoration: none;
	padding-bottom: 2px;
}

/* tag hints */
.taghint {
	color: #aaa;
	margin: -17px 0 0 7px;
	visibility: hidden;
}

input.newtag ~ div.taghint {
	visibility: visible;
}

input.newtag:focus ~ div.taghint {
	visibility: hidden;
}

/* TinyMCE */
#mce_fullscreen_container {
	background: #fff;
}

#photo-add-url-div input[type="text"] {
	width: 300px;
}

/* theme-editor */
.alignleft h3 {
	margin: 0;
}

h3 span {
	font-weight: normal;
}

#template textarea {
	font-family: Consolas, Monaco, monospace;
	font-size: 13px;
	width: 97%;
	background: #f9f9f9;
	outline: none;
}

#template p {
	width: 97%;
}

#templateside {
	float: right;
	width: 190px;
	word-wrap: break-word;
}

#templateside h3,
#postcustomstuff p.submit {
	margin: 0;
}

#templateside h4 {
	margin: 1em 0 0;
}

#templateside ol,
#templateside ul {
	margin: .5em;
	padding: 0;
}

#templateside li {
	margin: 4px 0;
}

#templateside ul li a span.highlight {
	display:block;
}

.nonessential {
	font-size: 11px;
	font-style: italic;
	padding-left: 12px;
}

.highlight {
	padding: 3px 3px 3px 12px;
	margin-left: -12px;
	font-weight: 600;
	border: 0 none;
}

#documentation {
	margin-top: 10px;
}
#documentation label {
	line-height: 22px;
	vertical-align: top;
	font-weight: 600;
}

.fileedit-sub {
	padding: 10px 0 8px;
	line-height: 180%;
}

#filter-box {
	clear: both;
}

.feature-filter {
	padding: 8px 12px 0;
}

.feature-filter .feature-group {
	float: left;
	margin: 5px 10px 10px;
}

.feature-filter .feature-group li {
	display: inline-block;
	vertical-align: top;
	list-style-type: none;
	padding-right: 25px;
	width: 150px;
}

.feature-container {
	width: 100%;
	overflow: auto;
	margin-bottom: 10px;
}

/* widgets */

/* 2 column liquid layout */
div.widget-liquid-left {
	float: left;
	clear: left;
	width: 100%;
	margin-right: -325px;
}

div#widgets-left {
	margin-left: 5px;
	margin-right: 325px;
}

div#widgets-right {
	width: 285px;
	margin: 0 auto;
}

div.widget-liquid-right {
	float: right;
	clear: right;
	width: 300px;
}

.widget-liquid-right .widget {
	position: relative;
}

.widget-liquid-right .widget,
.inactive-sidebar .widget,
.widget-liquid-right .sidebar-description {
	width: 250px;
	margin: 0 auto 20px;
	overflow: hidden;
}

.widget-liquid-right .sidebar-description {
	margin-bottom: 10px;
}

.inactive-sidebar .widget {
	margin: 0 10px 20px;
	display: inline-block;
}

div.sidebar-name h3 {
	font-weight: normal;
	font-size: 15px;
	margin: 0;
	padding: 8px 10px;
	overflow: hidden;
	white-space: nowrap;
}

div.sidebar-name {
	font-size: 13px;
	border-bottom-width: 1px;
	border-bottom-style: solid;
}

.js .sidebar-name {
	cursor: pointer;
}

.js .closed .sidebar-name {
	-webkit-border-bottom-right-radius: 3px;
	-webkit-border-bottom-left-radius: 3px;
	border-bottom-right-radius: 3px;
	border-bottom-left-radius: 3px;
}

.widget-liquid-right .widgets-sortables,
#widgets-left .widget-holder {
	border-width: 0 1px 1px;
	border-style: none solid solid;
	-webkit-border-bottom-right-radius: 3px;
	-webkit-border-bottom-left-radius: 3px;
	border-bottom-right-radius: 3px;
	border-bottom-left-radius: 3px;
}

.js .closed .widgets-sortables,
.js .closed .widget-holder {
	display: none;
}

.widget-liquid-right .widgets-sortables {
	padding: 15px 0 0;
}

#available-widgets .widget-holder {
	padding: 7px 5px 0;
}

#available-widgets .widget {
	-webkit-box-shadow: none;
	box-shadow: none;
}

.inactive-sidebar {
	padding: 5px 5px 0;
}

#widget-list .widget {
	width: 250px;
	margin: 0 10px 15px;
	border: 0 none;
	background: transparent;
	display: inline-block;
	vertical-align: top;
}

#widget-list .widget-description {
	padding: 5px 8px;
}

.widget-placeholder {
	border-width: 1px;
	border-style: dashed;
	margin: 0 auto 20px;
	height: 27px;
	width: 250px;
}

.inactive-sidebar .widget-placeholder {
	margin: 0 10px 20px;
	float: left;
}

div.widgets-holder-wrap {
	padding: 0;
	margin: 10px 0 20px;
}

#widgets-left #available-widgets {
	background-color: transparent;
	border: 0 none;
}

ul#widget-list {
	list-style: none;
	margin: 0;
	padding: 0;
	min-height: 100px;
}

.widget .widget-top {
	margin-bottom: -1px;
	font-size: 12px;
	font-weight: 600;
	height: 26px;
	overflow: hidden;
}

.widget .widget-top,
.menu-item-handle {
	margin-top: 0;
	padding: 4px;
}

.widget-top .widget-title {
	padding: 7px 9px;
}

.widget-top .widget-title-action {
	float: right;
}

a.widget-action {
	display: block;
	width: 24px;
	height: 26px;
}

#available-widgets a.widget-action {
	display: none;
}

.widget-top a.widget-action,
.widget-top a.widget-action:hover {
	background: none !important;
	border: none !important;
	width: 30px;
	margin-right: 0 !important;
	margin-top: 2px;
}

.nav-menus-php .item-edit:after,
.widget-top a.widget-action:after,
.control-section .accordion-section-title::after,
.accordion-section-title::after {
	right: 0;
	content: '\f140';
	border: none;
	background: none;
	font: 20px/1 dashicons;
	display: block;
	padding: 0;
	text-indent: 0;
	text-align: center;
	position: relative;
	-webkit-font-smoothing: antialiased;
	text-decoration: none !important;
}

.control-section .accordion-section-title::after,
.accordion-section-title::after {
	float: right;
	right: 20px;
	top: -2px;
}

.nav-menus-php .menu-item-edit-active .item-edit:after {
	content: '\f142';
}

.nav-menus-php .item-controls .item-type {
	padding: 10px 12px;
	margin-right: 10px;
}


.widget .widget-inside,
.widget .widget-description {
	padding: 12px 12px 10px;
	font-size: 12px;
	line-height: 16px;
}

.widget-inside,
.widget-description {
	display: none;
}

#available-widgets .widget-description {
	display: block;
}

.widget .widget-inside p {
	margin: 0 0 1em;
	padding: 0;
}

.widget-title h4 {
	margin: 0;
	padding-bottom: 0.2em;
	line-height: 1;
	overflow: hidden;
	white-space: nowrap;
}

.widgets-sortables {
	min-height: 90px;
}

.widget-control-actions {
	margin-top: 8px;
}

.widget-control-actions a {
	text-decoration: none;
}

.widget-control-actions a:hover {
	text-decoration: underline;
}

.widget-control-actions div.alignleft {
	margin-top: 6px;
}

div#sidebar-info {
	padding: 0 1em;
	margin-bottom: 1em;
	font-size: 12px;
}

.widget-title a,
.widget-title a:hover {
	text-decoration: none;
	border-bottom: none;
}

.widget-control-edit {
	display: block;
	font-size: 12px;
	font-weight: normal;
	line-height: 26px;
	padding: 0 8px 0 0;
}

a.widget-control-edit {
	text-decoration: none;
}

.widget-control-edit .add,
.widget-control-edit .edit {
	display: none;
}

#available-widgets .widget-control-edit .add,
#widgets-right .widget-control-edit .edit,
.inactive-sidebar .widget-control-edit .edit {
	display: inline;
}

.editwidget {
	margin: 0 auto 15px;
}

.editwidget .widget-inside {
	display: block;
	padding: 10px;
}

.inactive p.description {
	margin: 5px 15px 10px;
}

#available-widgets p.description {
	margin: 0 12px 12px;
}

.widget-position {
	margin-top: 8px;
}

.inactive {
	padding-top: 2px;
}

.sidebar-name .spinner {
	float: none;
	margin: 0 3px -3px;
}

.sidebar-name-arrow {
	float: right;
	height: 29px;
	width: 26px;
}

.widget-title .in-widget-title {
	font-size: 12px;
	white-space: nowrap;
}

#removing-widget {
	display: none;
	font-weight: normal;
	padding-left: 15px;
	font-size: 12px;
	line-height: 1;
}

.widget-control-noform,
#access-off,
.widgets_access .widget-action,
.widgets_access .sidebar-name-arrow,
.widgets_access #access-on,
.widgets_access .widget-holder .description {
	display: none;
}

.widgets_access .widget-holder,
.widgets_access #widget-list {
	padding-top: 10px;
}

.widgets_access #access-off {
	display: inline;
}

.widgets_access #wpbody-content .widget-title-action,
.widgets_access #wpbody-content .widget-control-edit,
.widgets_access .closed .widgets-sortables,
.widgets_access .closed .widget-holder {
	display: block;
}

.widgets_access .closed .sidebar-name {
	-webkit-border-bottom-right-radius: 0;
	-webkit-border-bottom-left-radius: 0;
	border-bottom-right-radius: 0;
	border-bottom-left-radius: 0;
}

.widgets_access .sidebar-name,
.widgets_access .widget .widget-top {
	cursor: default;
}

/* Enable draggable on IE10 touch events until it's rolled into jQuery UI core */
.ui-sortable,
.ui-draggable {
	-ms-touch-action: none;
}

/* Accordion */

.accordion-section {
	border-top: 1px solid #fff;
	border-bottom: 1px solid #dfdfdf;
	margin: 0;
}

.accordion-section:first-child {
	border-top: 1px solid #dfdfdf;
}

.accordion-section:last-child {
	box-shadow: 0 1px 0 0px #fff;
}

.accordion-section.open .accordion-section-content,
.no-js .accordion-section .accordion-section-content {
	display: block;
	background: #fdfdfd;
	border-left: 1px solid #dfdfdf;
	border-right: 1px solid #dfdfdf;
}

.accordion-section.open:hover {
	border-bottom-color: #dfdfdf;
}

.accordion-section-content {
	display: none;
	padding: 10px 20px 15px;
	overflow: hidden;
}

.accordion-section-title {
	margin: 0;
	padding: 15px 20px;
	position: relative;
	border-left: 1px solid #dfdfdf;
	border-right: 1px solid #dfdfdf;

	cursor: pointer;

	-webkit-user-select: none;
	-moz-user-select: none;
	user-select: none;
}

.accordion-section-title:after {
	content: '';
	width: 0;
	height: 0;
	border-color: #ccc transparent;
	border-style: solid;
	border-width: 6px 6px 0;
	position: absolute;
	top: 25px;
	right: 20px;
	z-index: 1;
}

.accordion-section-title:focus {
	outline: none;
}

.accordion-section-title:hover:after,
.accordion-section-title:focus:after {
	border-color: #aaa transparent;
}

.cannot-expand .accordion-section-title {
	cursor: auto;
}

.cannot-expand .accordion-section-title:after {
	display: none;
}

.control-section .accordion-section-title {
	border-left: none;
	border-right: none;
	border-bottom: none;
	padding: 10px 10px 10px 14px;
	font-size: 15px;
	font-family: "Open Sans", sans-serif;
	font-weight: normal;
	background: #f5f5f5;
	background-image: -webkit-gradient(linear, left bottom, left top, from(#eee), to(#f5f5f5));
	background-image: -webkit-linear-gradient(bottom, #eee, #f5f5f5);
	background-image:    -moz-linear-gradient(bottom, #eee, #f5f5f5);
	background-image:      -o-linear-gradient(bottom, #eee, #f5f5f5);
	background-image: linear-gradient(to top, #eee, #f5f5f5);
}

.control-section .accordion-section-title:hover:after,
.control-section .accordion-section-title:focus:after {
	border-color: #eee transparent;
}

.control-section:hover .accordion-section-title,
.control-section .accordion-section-title:hover,
.control-section.open .accordion-section-title,
.control-section .accordion-section-title:focus {
	color: #fff;
	background: #808080;
	background-image: -webkit-gradient(linear, left bottom, left top, from(#6d6d6d), to(#808080));
	background-image: -webkit-linear-gradient(bottom, #6d6d6d, #808080);
	background-image:    -moz-linear-gradient(bottom, #6d6d6d, #808080);
	background-image:      -o-linear-gradient(bottom, #6d6d6d, #808080);
	background-image: linear-gradient(to top, #6d6d6d, #808080);
	border-left: 1px solid #808080;
	border-right: 1px solid #808080;
}

.control-section.accordion-section:hover,
.control-section.accordion-section.open {
	border-top-color: #808080;
}

.control-section.open .accordion-section-title {
	border-bottom: 1px solid #6d6d6d;
}

.menu #TB_window .updated {
	margin: 16px 0 0;
}

/* =Media Queries
-------------------------------------------------------------- */

@media only screen and (max-width: 768px) {
	/* categories */
	#col-left {
		width: 100%;
	}

	#col-right {
		width: 100%;
	}
}

@media only screen and (min-width: 769px) {
	/* categories */
	#col-left {
		width: 35%;
	}

	#col-right {
		width: 65%;
	}
}

@media only screen and (max-width: 860px) {

	/* categories */
	#col-left {
		width: 35%;
	}

	#col-right {
		width: 65%;
	}
}

@media only screen and (min-width: 980px) {

	/* categories */
	#col-left {
		width: 35%;
	}

	#col-right {
		width: 65%;
	}
}

@media only screen and (max-width: 768px) {
	/* categories */
	#col-left {
		width: 100%;
	}

	#col-right {
		width: 100%;
	}

	.form-field input,
	.form-field textarea {
		width: 99%;
	}

	.form-wrap .form-field {
		padding:0;
	}

	/* users */
	#profile-page .form-table textarea {
		max-width: 400px;
		width: auto;
	}
}



/* =Localized CSS
-------------------------------------------------------------- */

/* zh_CN: Remove italic properties. */
.locale-zh-cn .howto,
.locale-zh-cn .tablenav .displaying-num,
.locale-zh-cn .js .input-with-default-title,
.locale-zh-cn .link-to-original,
.locale-zh-cn .inline-edit-row fieldset span.title,
.locale-zh-cn .inline-edit-row fieldset span.checkbox-title,
.locale-zh-cn #utc-time,
.locale-zh-cn #local-time,
.locale-zh-cn p.install-help,
.locale-zh-cn p.help,
.locale-zh-cn p.description,
.locale-zh-cn span.description,
.locale-zh-cn .form-wrap p {
	font-style: normal;
}

/* zh_CN: Enlarge dashboard widget 'Configure' link */
.locale-zh-cn .hdnle a { font-size: 12px; }

/* zn_CH: Enlarge font size, set font-size: normal */
.locale-zh-cn form.upgrade .hint { font-style: normal; font-size: 100%; }

/* Zn_CH: Distraction free writing.
 *  More beautiful font for "Just write."
 *  Larger text for HTML/Visual mode.
 */
.locale-zh-cn #wp-fullscreen-tagline { font-family: KaiTi, "楷体", sans-serif; }
.locale-zh-cn #wp-fullscreen-modes a { font-size: 12px; }

/* zh_CN: Enlarge font-size. */
.locale-zh-cn #sort-buttons { font-size: 1em !important; }

/* ru_RU: Text needs more room to breathe. */
.locale-ru-ru .inline-edit-row fieldset label span.title {
	width: auto; /* default 5em */
	min-width: 5em;
}
.locale-ru-ru.press-this .posting {
	margin-right: 257px; /* default 212px + 45px */
}
.locale-ru-ru.press-this #photo-add-url-div input[type="text"]  {
	width: 255px; /* default 300px - 45px */
}
.locale-ru-ru.press-this #side-sortables {
	width: 245px; /* default 200px + 45px */
}
.locale-ru-ru #customize-header-actions .button {
	padding: 0 8px 1px; /* default 0 10px 1px; */
}

/* lt_LT: QuickEdit */
.locale-lt-lt .inline-edit-row fieldset label span.title {
	width: 8em;
}
.locale-lt-lt .inline-edit-row fieldset label span.input-text-wrap {
	margin-left: 8em;
}

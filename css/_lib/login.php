<?php if( infusion_mobeus_get_option('disable_login_infusion') == 'on' ) { 


echo ('

.login form .input,
.login input[type="text"],
.login form input[type="checkbox"] {
	border-color: #ddd !important; /* Override !important in checkbox style */
	-webkit-box-shadow: inset 1px 1px 2px rgba(0,0,0,0.08);
	box-shadow: inset 1px 1px 2px rgba(0,0,0,0.08);
}

.login form input[type="checkbox"] {
	background-color: #fbfbfb;
}

.login form {
	background: #fff;
	-webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.13);
	box-shadow: 0 1px 3px rgba(0,0,0,0.13);
}

body.login {
	background: #eee;
}

.login #nav a,
.login #backtoblog a {
	text-decoration: none;
	color: #999;
}

.login #nav a:hover,
.login #backtoblog a:hover {
	color: #2ea2cc;
}

.login h1 a:hover {
	color: #2ea2cc;
}
.login h1 a {
	background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIGlkPSJMYXllcl8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjY0cHgiIGhlaWdodD0iNjRweCIgdmlld0JveD0iMCAwIDY0IDY0IiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCA2NCA2NCIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+PHN0eWxlPi5zdHlsZTB7ZmlsbDoJIzAwNzRBMjt9PC9zdHlsZT48Zz48Zz48cGF0aCBkPSJNNC41NDggMzEuOTk5YzAgMTAuOSA2LjMgMjAuMyAxNS41IDI0LjcwNkw2LjkyNSAyMC44MjdDNS40MDIgMjQuMiA0LjUgMjggNC41IDMxLjk5OXogTTUwLjUzMSAzMC42MTRjMC0zLjM5NC0xLjIxOS01Ljc0Mi0yLjI2NC03LjU3Yy0xLjM5MS0yLjI2My0yLjY5NS00LjE3Ny0yLjY5NS02LjQzOWMwLTIuNTIzIDEuOTEyLTQuODcyIDQuNjA5LTQuODcyIGMwLjEyMSAwIDAuMiAwIDAuNCAwLjAyMkM0NS42NTMgNy4zIDM5LjEgNC41IDMyIDQuNTQ4Yy05LjU5MSAwLTE4LjAyNyA0LjkyMS0yMi45MzYgMTIuNCBjMC42NDUgMCAxLjMgMCAxLjggMC4wMzNjMi44NzEgMCA3LjMxNi0wLjM0OSA3LjMxNi0wLjM0OWMxLjQ3OS0wLjA4NiAxLjcgMi4xIDAuMiAyLjMgYzAgMC0xLjQ4NyAwLjE3NC0zLjE0MiAwLjI2MWw5Ljk5NyAyOS43MzVsNi4wMDgtMTguMDE3bC00LjI3Ni0xMS43MThjLTEuNDc5LTAuMDg3LTIuODc5LTAuMjYxLTIuODc5LTAuMjYxIGMtMS40OC0wLjA4Ny0xLjMwNi0yLjM0OSAwLjE3NC0yLjI2MmMwIDAgNC41IDAuMyA3LjIgMC4zNDljMi44NyAwIDcuMzE3LTAuMzQ5IDcuMzE3LTAuMzQ5IGMxLjQ3OS0wLjA4NiAxLjcgMi4xIDAuMiAyLjI2MmMwIDAtMS40ODkgMC4xNzQtMy4xNDIgMC4yNjFsOS45MiAyOS41MDhsMi43MzktOS4xNDggQzQ5LjYyOCAzNS43IDUwLjUgMzMgNTAuNSAzMC42MTR6IE0zMi40ODEgMzQuNGwtOC4yMzcgMjMuOTM0YzIuNDYgMC43IDUuMSAxLjEgNy44IDEuMSBjMy4xOTcgMCA2LjI2Mi0wLjU1MiA5LjExNi0xLjU1NmMtMC4wNzItMC4xMTgtMC4xNDEtMC4yNDMtMC4xOTYtMC4zNzlMMzIuNDgxIDM0LjR6IE01Ni4wODggMTguOCBjMC4xMTkgMC45IDAuMiAxLjggMC4yIDIuODIzYzAgMi43ODUtMC41MjEgNS45MTYtMi4wODggOS44MzJsLTguMzg1IDI0LjI0MmM4LjE2MS00Ljc1OCAxMy42NS0xMy42IDEzLjY1LTIzLjcyOCBDNTkuNDUxIDI3LjIgNTguMiAyMi43IDU2LjEgMTguODN6IE0zMiAwYy0xNy42NDUgMC0zMiAxNC4zNTUtMzIgMzJDMCA0OS42IDE0LjQgNjQgMzIgNjRzMzItMTQuMzU1IDMyLTMyLjAwMSBDNjQgMTQuNCA0OS42IDAgMzIgMHogTTMyIDYyLjUzM2MtMTYuODM1IDAtMzAuNTMzLTEzLjY5OC0zMC41MzMtMzAuNTM0QzEuNDY3IDE1LjIgMTUuMiAxLjUgMzIgMS41IHMzMC41MzQgMTMuNyAzMC41IDMwLjUzMkM2Mi41MzMgNDguOCA0OC44IDYyLjUgMzIgNjIuNTMzeiIgY2xhc3M9InN0eWxlMCIvPjwvZz48L2c+PC9zdmc+);
');}
else {
	
	
	
	if( infusion_mobeus_get_option('login_bg_colour') !== '' ) { 
	echo('
	body.login {
	background:  '.infusion_mobeus_get_option('login_bg_colour').';}');}
	
	else{ echo('body.login {
	background: #000;}');};
	};
	
	if( infusion_mobeus_get_option('login_logo') !== '' ) { echo('.login h1 a {
	background-image: url('. infusion_mobeus_get_option('login_logo') .'); }');}
	
	else{echo('
	.login h1 a {
	background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIGlkPSJMYXllcl8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjY0cHgiIGhlaWdodD0iNjRweCIgdmlld0JveD0iMCAwIDY0IDY0IiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCA2NCA2NCIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+PHN0eWxlPi5zdHlsZTB7ZmlsbDoJIzAwNzRBMjt9PC9zdHlsZT48Zz48Zz48cGF0aCBkPSJNNC41NDggMzEuOTk5YzAgMTAuOSA2LjMgMjAuMyAxNS41IDI0LjcwNkw2LjkyNSAyMC44MjdDNS40MDIgMjQuMiA0LjUgMjggNC41IDMxLjk5OXogTTUwLjUzMSAzMC42MTRjMC0zLjM5NC0xLjIxOS01Ljc0Mi0yLjI2NC03LjU3Yy0xLjM5MS0yLjI2My0yLjY5NS00LjE3Ny0yLjY5NS02LjQzOWMwLTIuNTIzIDEuOTEyLTQuODcyIDQuNjA5LTQuODcyIGMwLjEyMSAwIDAuMiAwIDAuNCAwLjAyMkM0NS42NTMgNy4zIDM5LjEgNC41IDMyIDQuNTQ4Yy05LjU5MSAwLTE4LjAyNyA0LjkyMS0yMi45MzYgMTIuNCBjMC42NDUgMCAxLjMgMCAxLjggMC4wMzNjMi44NzEgMCA3LjMxNi0wLjM0OSA3LjMxNi0wLjM0OWMxLjQ3OS0wLjA4NiAxLjcgMi4xIDAuMiAyLjMgYzAgMC0xLjQ4NyAwLjE3NC0zLjE0MiAwLjI2MWw5Ljk5NyAyOS43MzVsNi4wMDgtMTguMDE3bC00LjI3Ni0xMS43MThjLTEuNDc5LTAuMDg3LTIuODc5LTAuMjYxLTIuODc5LTAuMjYxIGMtMS40OC0wLjA4Ny0xLjMwNi0yLjM0OSAwLjE3NC0yLjI2MmMwIDAgNC41IDAuMyA3LjIgMC4zNDljMi44NyAwIDcuMzE3LTAuMzQ5IDcuMzE3LTAuMzQ5IGMxLjQ3OS0wLjA4NiAxLjcgMi4xIDAuMiAyLjI2MmMwIDAtMS40ODkgMC4xNzQtMy4xNDIgMC4yNjFsOS45MiAyOS41MDhsMi43MzktOS4xNDggQzQ5LjYyOCAzNS43IDUwLjUgMzMgNTAuNSAzMC42MTR6IE0zMi40ODEgMzQuNGwtOC4yMzcgMjMuOTM0YzIuNDYgMC43IDUuMSAxLjEgNy44IDEuMSBjMy4xOTcgMCA2LjI2Mi0wLjU1MiA5LjExNi0xLjU1NmMtMC4wNzItMC4xMTgtMC4xNDEtMC4yNDMtMC4xOTYtMC4zNzlMMzIuNDgxIDM0LjR6IE01Ni4wODggMTguOCBjMC4xMTkgMC45IDAuMiAxLjggMC4yIDIuODIzYzAgMi43ODUtMC41MjEgNS45MTYtMi4wODggOS44MzJsLTguMzg1IDI0LjI0MmM4LjE2MS00Ljc1OCAxMy42NS0xMy42IDEzLjY1LTIzLjcyOCBDNTkuNDUxIDI3LjIgNTguMiAyMi43IDU2LjEgMTguODN6IE0zMiAwYy0xNy42NDUgMC0zMiAxNC4zNTUtMzIgMzJDMCA0OS42IDE0LjQgNjQgMzIgNjRzMzItMTQuMzU1IDMyLTMyLjAwMSBDNjQgMTQuNCA0OS42IDAgMzIgMHogTTMyIDYyLjUzM2MtMTYuODM1IDAtMzAuNTMzLTEzLjY5OC0zMC41MzMtMzAuNTM0QzEuNDY3IDE1LjIgMTUuMiAxLjUgMzIgMS41IHMzMC41MzQgMTMuNyAzMC41IDMwLjUzMkM2Mi41MzMgNDguOCA0OC44IDYyLjUgMzIgNjIuNTMzeiIgY2xhc3M9InN0eWxlMCIvPjwvZz48L2c+PC9zdmc+);');};

	echo('
	

.login form .input,
.login input[type="text"],
.login form input[type="checkbox"] {
	border-color: #ddd !important; /* Override !important in checkbox style */
	-webkit-box-shadow: inset 1px 1px 2px rgba(0,0,0,0.08);
	box-shadow: inset 1px 1px 2px rgba(0,0,0,0.08);
}

.login form input[type="checkbox"] {
	background-color: #fbfbfb;
}

.login form {
	background: #fff;
	-webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.13);
	box-shadow: 0 1px 3px rgba(0,0,0,0.13);
} 


.login #nav a,
.login #backtoblog a {
	text-decoration: none;
	color: #999;
}

.login #nav a:hover,
.login #backtoblog a:hover {
	color: #2ea2cc;
}

.login h1 a:hover {
	color: #2ea2cc;
}

');?>
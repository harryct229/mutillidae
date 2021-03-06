<div id="smoothmenu1" class="ddsmoothmenu">
	<ul>
		<li style="border-color: #ffffff;border-style: solid;border-width: 1px">
			<a href="#">OWASP 2013</a>
			<ul>
				<li>
					<a href="https://www.owasp.org/index.php/Top_10_2013-A1-Injection" target="_blank">A1 - Injection (SQL)</a>
					<ul>
						<li>
							<a href="">SQLi - Extract Data</a>
							<ul>
								<li><a href="index.php?page=user-info.php">User Info</a></li>
							</ul>
						</li>
						<li>
							<a href="">SQLi - Bypass Authentication</a>
							<ul>
								<li><a href="index.php?page=login.php">Login</a></li>
							</ul>
						</li>
						<li>
							<a href="">SQLi - Insert Injection</a>
							<ul>
								<li><a href="?page=add-to-your-blog.php">Add to your blog</a></li>
								<li><a href="index.php?page=register.php">Register</a></li>
								<li><a href="index.php?page=captured-data.php">View Captured Data</a></li>
							</ul>
						</li>
						<li>
							<a href="">Blind SQL via Timing</a>
							<ul>
								<li><a href="index.php?page=login.php">Login</a></li>
								<li><a href="index.php?page=user-info.php">User Info</a></li>
							</ul>
						</li>
						<li>
							<a href="">SQLMAP Practice</a>
							<ul>
								<li><a href="index.php?page=sqlmap-targets.php">SQLMAP Practice Targets</a></li>
								<li><a href="index.php?page=login.php">Login</a></li>
								<li><a href="index.php?page=view-someones-blog.php">View Someones Blog</a></li>
								<li><a href="index.php?page=user-info.php">User Info</a></li>
							</ul>
						</li>
						<li>
							<a href="">Via JavaScript Object Notation (JSON)</a>
							<ul>
								<li><a href="index.php?page=pen-test-tool-lookup.php">Pen Test Tool Lookup</a></li>
								<li><a href="index.php?page=pen-test-tool-lookup-ajax.php">Pen Test Tool Lookup (AJAX)</a></li>
							</ul>
						</li>
						<li>
							<a href="">Via SOAP Web Service</a>
							<ul>
								<li><a href="./webservices/soap/ws-user-account.php">Lookup User</a></li>
							</ul>
						</li>
						<li>
							<a href="">Via REST Web Service</a>
							<ul>
								<li><a href="./webservices/rest/ws-user-account.php">User Account Management</a></li>
							</ul>
						</li>								
					</ul>
				</li>
				<li>
					<a href="https://www.owasp.org/index.php/Top_10_2013-A1-Injection" target="_blank">A1 - Injection (Other)</a>
						<ul>
						<li>
							<a href="">HTML Injection (HTMLi)</a>
							<ul>
								<li><a href="index.php?page=add-to-your-blog.php">Add to your blog</a></li>
								<li><a href="index.php?page=browser-info.php">Browser Info</a></li>
								<li><a href="index.php?page=dns-lookup.php">DNS Lookup</a></li>
								<li><a href="index.php?page=pen-test-tool-lookup.php">Pen Test Tool Lookup</a></li>
								<li><a href="index.php?page=text-file-viewer.php">Text File Viewer</a></li>
								<li><a href="index.php?page=user-info.php">User Info</a></li>
								<li><a href="index.php?page=set-background-color.php">Set Background Color</a></li>
								<li><a href="index.php?page=html5-storage.php">HTML5 Storage</a></li>
								<li><a href="index.php?page=capture-data.php">Capture Data Page</a></li>
								<li><a href="index.php?page=captured-data.php">View Captured Data</a></li>
								<li><a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php">Document Viewer</a></li>
								<li><a href="index.php?page=arbitrary-file-inclusion.php">Arbitrary File Inclusion</a></li>
								<li><a href="index.php?page=user-poll.php">Poll Question</a></li>
								<li><a href="index.php?page=register.php">Register User</a></li>
								<li><a href="index.php?page=login.php">Login</a></li>
								<li><a href="index.php?page=back-button-discussion.php">Those "Back" Buttons</a></li>
							</ul>
						</li>
						<li>
							<a href="">HTMLi via HTTP Headers</a>
							<ul>
								<li><a href="index.php?page=back-button-discussion.php">Those "Back" Buttons</a></li>
								<li><a href="index.php?page=browser-info.php">Browser Info</a></li>
								<li><a href="index.php?page=site-footer-xss-discussion.php">Site Footer</a><li>
								<li><a href="">HTTP Response Splitting (Hint: Difficult)</a></li>
							</ul>
						</li>
						<li>
							<a href="">HTMLi Via DOM Injection</a>
							<ul>
								<li><a href="index.php?page=html5-storage.php">HTML5 Storage</a></li>
							</ul>
						</li>								
						<li>
							<a href="">HTMLi Via Cookie Injection</a>
							<ul>
								<li><a href="index.php?page=capture-data.php">Capture Data Page</a></li>
							</ul>
						</li>
						<li>
							<a href="">Frame Source Injection</a>
							<ul>
								<li><a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php">Document Viewer</a></li>
							</ul>
						</li>
						<li>
							<a href="">Command Injection</a>
							<ul>
								<li><a href="index.php?page=dns-lookup.php">DNS Lookup</a></li>
								<li><a href="./webservices/soap/ws-lookup-dns-record.php">DNS Lookup (SOAP Web Service)</a></li>
							</ul>
						</li>
						<li>
							<a href="">JavaScript Injection</a>
							<ul>
								<li><a href="index.php?page=back-button-discussion.php">Those "Back" Buttons</a></li>
								<li>
									<a href="index.php?page=password-generator.php&username=<?php echo $logged_in_user ?>">
										Password Generator
									</a>
								</li>
								<li><a href="index.php?page=browser-info.php">Browser Info</a></li>
							</ul>
						</li>
						<li>
							<a href="">HTTP Parameter Pollution</a>
							<ul>
								<li><a href="index.php?page=user-poll.php">Poll Question</a></li>
								<li><a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php">Document Viewer</a></li>
							</ul>
						</li>
						<li>
							<a href="">Cascading Style Injection</a>
							<ul>
								<li><a href="index.php?page=set-background-color.php">Set Background Color</a></li>
							</ul>
						</li>
						<li>
							<a href="">JavaScript Object Notation (JSON) Injection</a>
							<ul>
								<li><a href="index.php?page=pen-test-tool-lookup.php">Pen Test Tool Lookup</a></li>
								<li><a href="index.php?page=pen-test-tool-lookup-ajax.php">Pen Test Tool Lookup (AJAX)</a></li>
							</ul>
						</li>
						<li>
							<a href="">Buffer Overflow</a>
							<ul>
								<li><a href="index.php?page=repeater.php">Repeater</a></li>
							</ul>
						</li>
						<li>
							<a href="">Parameter Addition</a>
							<ul>
								<li><a href="index.php?page=repeater.php">Repeater</a></li>
								<li><a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba">View User Privileges</a></li>								
							</ul>
						</li>
						<li>
							<a href="">XML External Entity Injection</a>
							<ul>
								<li><a href="index.php?page=xml-validator.php">XML Validator</a></li>
							</ul>
						</li>
						<li>
							<a href="">Application Log Injection</a>
							<ul>
								<li><a href="index.php?page=add-to-your-blog.php">Add to your blog</a></li>
								<li><a href="index.php?page=dns-lookup.php">DNS Lookup</a></li>
								<li><a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php">Document Viewer</a></li>
								<li><a href="index.php?page=capture-data.php">Capture Data Page</a></li>
								<li><a href="index.php?page=login.php">Login</a></li>
								<li><a href="index.php?page=register.php">Register User</a></li>
								<li><a href="index.php?page=source-viewer.php">Source Viewer</a></li>
								<li><a href="index.php?page=text-file-viewer.php">Text File Viewer</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<a href="https://www.owasp.org/index.php/Top_10_2013-A2-Broken_Authentication_and_Session_Management" target="_blank">
						A2 - Broken Authentication and Session Management
					</a>
					<ul>
						<li><a href="">Authentication Bypass</a>
							<ul>
								<li><a href="">Via Brute Force</a>
									<ul>
										<li><a href="index.php?page=login.php">Login</a></li>
									</ul>
								</li>
								<li><a href="index.php?page=privilege-escalation.php">Via Cookies</a></li>
								<li><a href="">Via SQL Injection</a>
									<ul>
										<li><a href="index.php?page=login.php">Login</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li><a href="">Priviliege Escalation</a>
							<ul>
								<li><a href="index.php?page=privilege-escalation.php">Via Cookies</a></li>
								<li><a href="index.php?page=login.php">Login</a></li>
								<li><a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba">View User Privileges</a></li>
							</ul>								
						</li>
						<li><a href="">Username Enumeration</a>
							<ul>
								<li><a href="index.php?page=login.php">Login</a></li>
								<li><a href="./webservices/soap/ws-user-account.php">Lookup User (SOAP Web Service)</a></li>
								<li><a href="./webservices/rest/ws-user-account.php">User Account Management(REST Web Service)</a></li>
							</ul>
						</li>							
					</ul>
				</li>
				<li>
					<a href="https://www.owasp.org/index.php/Top_10_2013-A3-Cross-Site_Scripting_%28XSS%29" target="_blank">A3 - Cross Site Scripting (XSS)</a>
					<ul>
						<li>
							<a href="">Reflected (First Order)</a>
							<ul>
								<li><a href="index.php?page=dns-lookup.php">DNS Lookup</a></li>
								<li><a href="index.php?page=pen-test-tool-lookup.php">Pen Test Tool Lookup</a></li>
								<li><a href="index.php?page=text-file-viewer.php">Text File Viewer</a></li>
								<li><a href="index.php?page=user-info.php">User Info</a></li>
								<li><a href="index.php?page=set-background-color.php">Set Background Color</a></li>
								<li><a href="index.php?page=html5-storage.php">HTML5 Storage</a></li>
								<li><a href="index.php?page=capture-data.php">Capture Data Page</a></li>
								<li><a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php">Document Viewer</a></li>
								<li><a href="index.php?page=arbitrary-file-inclusion.php">Arbitrary File Inclusion</a></li>
								<li><a href="index.php?page=xml-validator.php">XML Validator</a></li>
								<li><a href="index.php?page=user-poll.php">Poll Question</a></li>
								<li><a href="index.php?page=register.php">Register User</a></li>
								<li><a href="index.php?page=browser-info.php">Browser Info</a></li>
								<li><a href="index.php?page=back-button-discussion.php">Those "Back" Buttons</a></li>
							</ul>
						</li>
						<li>
							<a href="">Persistent (Second Order)</a>
							<ul>
								<li><a href="index.php?page=add-to-your-blog.php">Add to your blog</a></li>
								<li><a href="index.php?page=view-someones-blog.php">View someone's blog</a></li>
								<li><a href="index.php?page=show-log.php">Show Log</a><li>
							</ul>
						</li>
						<li>
							<a href="">DOM Injection</a>
							<ul>
								<li><a href="index.php?page=html5-storage.php">HTML5 Storage</a></li>
							</ul>
						</li>								
						<li>
							<a href="">Via "Input" (GET/POST)</a>
							<ul>
								<li><a href="index.php?page=add-to-your-blog.php">Add to your blog</a></li>
								<li><a href="index.php?page=view-someones-blog.php">View someone's blog</a></li>
								<li><a href="index.php?page=show-log.php">Show Log</a><li>
								<li><a href="index.php?page=text-file-viewer.php">Text File Viewer</a></li>
								<li><a href="index.php?page=dns-lookup.php">DNS Lookup</a></li>
								<li><a href="index.php?page=user-info.php">User Info</a></li>
								<li><a href="index.php">Missing HTTPOnly Attribute</a></li>
								<li><a href="index.php?page=set-background-color.php">Set Background Color</a></li>
								<li><a href="index.php?page=pen-test-tool-lookup.php">Pen Test Tool Lookup</a></li>
								<li><a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php">Document Viewer</a></li>
							</ul>
						</li>
						<li>
							<a href="">Via HTTP Headers</a>
							<ul>
								<li><a href="index.php?page=browser-info.php">Browser Info</a></li>
								<li><a href="index.php?page=show-log.php">Show Log</a><li>
								<li><a href="index.php?page=site-footer-xss-discussion.php">Site Footer</a><li>
								<li><a href="index.php?page=html5-storage.php">Those &quot;BACK&quot; Buttons</a></li>
							</ul>
						</li>
						<li>
							<a href="">Via HTTP Attribute</a>
							<ul>
								<li><a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php">Document Viewer</a></li>
							</ul>								
						</li>								
						<li>
							<a href="">Via Misconfiguration</a>
							<ul>
								<li><a href="index.php">Missing HTTPOnly Attribute</a></li>
							</ul>
						</li>
						<li>
							<a href="">Against HTML 5 Storage</a>
							<ul>
								<li><a href="index.php?page=html5-storage.php">HTML5 Storage</a></li>
							</ul>
						</li>
						<li>
							<a href="">Against JSON</a>
							<ul>
								<li><a href="index.php?page=pen-test-tool-lookup.php">Pen Test Tool Lookup</a></li>
							</ul>
						</li>
						<li>
							<a href="">Via Cookie Injection</a>
							<ul>
								<li><a href="index.php?page=capture-data.php">Capture Data Page</a></li>
							</ul>
						</li>
						<li>
							<a href="">Via XML Injection</a>
							<ul>
								<li><a href="index.php?page=xml-validator.php">XML Validator</a></li>
							</ul>
						</li>
						<li>
							<a href="">BeeF Framework Targets</a>
							<ul>
								<li><a href="index.php?page=add-to-your-blog.php">Add to your blog</a></li>
								<li><a href="index.php?page=view-someones-blog.php">View someone's blog</a></li>
								<li><a href="index.php?page=show-log.php">Show Log</a><li>
								<li><a href="index.php?page=dns-lookup.php">DNS Lookup</a></li>
								<li><a href="index.php?page=pen-test-tool-lookup.php">Pen Test Tool Lookup</a></li>
								<li><a href="index.php?page=text-file-viewer.php">Text File Viewer</a></li>
								<li><a href="index.php?page=user-info.php">User Info</a></li>
								<li><a href="index.php?page=set-background-color.php">Set Background Color</a></li>
								<li><a href="index.php?page=html5-storage.php">HTML5 Storage</a></li>
								<li><a href="index.php?page=capture-data.php">Capture Data Page</a></li>
								<li><a href="index.php?page=document-viewer.php&PathToDocument=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php">Document Viewer</a></li>
								<li><a href="index.php?page=arbitrary-file-inclusion.php">Arbitrary File Inclusion</a></li>
								<li><a href="index.php?page=xml-validator.php">XML Validator</a></li>
								<li><a href="index.php?page=user-poll.php">Poll Question</a></li>
								<li><a href="index.php?page=register.php">Register User</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<a href="https://www.owasp.org/index.php/Top_10_2013-A4-Insecure_Direct_Object_References" target="_blank">A4 - Insecure Direct Object References</a>
					<ul>
						<li><a href="index.php?page=text-file-viewer.php">Text File Viewer</a></li>
						<li><a href="index.php?page=source-viewer.php">Source Viewer</a></li>
						<li><a href="index.php?page=credits.php">Credits</a></li>
						<li><a href="index.php?page=privilege-escalation.php">Cookies</a></li>
						<li><a href="index.php?page=arbitrary-file-inclusion.php">Arbitrary File Inclusion</a></li>
					</ul>
				</li>
				<li>
					<a href="https://www.owasp.org/index.php/Top_10_2013-A5-Security_Misconfiguration" target="_blank">A5 - Security Misconfiguration</a>
					<ul>
						<li><a href="index.php?page=secret-administrative-pages.php">"Secret" Administrative Pages</a></li>
						<li><a href="index.php?page=directory-browsing.php">Directory Browsing</a></li>
						<li>
							<a href="">Method Tampering (GET for POST)</a>
							<ul>
								<li><a href="index.php?page=add-to-your-blog.php">Add to your blog</a></li>
								<li><a href="index.php?page=user-info.php">User Info</a></li>
								<li><a href="index.php?page=user-poll.php">Poll Question</a></li>
								<li><a href="index.php?page=dns-lookup.php">DNS Lookup</a></li>
							</ul>
						</li>
						<li>
							<a href="index.php?page=user-agent-impersonation.php">User-Agent Impersonation</a>
						</li>
						<li>
							<a href="index.php?page=upload-file.php">Unrestricted File Upload</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="https://www.owasp.org/index.php/Top_10_2013-A6-Sensitive_Data_Exposure" target="_blank">A6 - Sensitive Data Exposure</a>
					<ul>
						<li>
							<a href="">Information Disclosure</a>
							<ul>
								<li><a href="index.php?page=phpmyadmin.php">PHP MyAdmin Console</a></li>
								<li><a href="index.php?page=phpinfo.php">PHP Info Page</a></li>
								<li><a href="index.php?page=robots-txt.php">Robots.txt</a></li>
								<li><a href="index.php?page=secret-administrative-pages.php">"Secret" Administrative Pages</a></li>
								<li><a href="index.php?page=html5-storage.php">HTML5 Storage</a></li>
								<li><a href="index.php">Cache-Control</a></li>
								<li><a href="index.php">X-Powered-By HTTP Header</a></li>
								<li><a href="index.php">HTML/JavaScript Comments</a></li>
								<li><a href="index.php?page=framing.php">Click-Jacking</a></li>
								<li><a href="framer.html">Cross-Site Framing (Third-Party Framing)</a></li>
							</ul>
						</li>
						<li>
							<a href="">Application Path Disclosure</a>
							<ul>
								<li><a href="index.php?page=phpmyadmin.php">PHP MyAdmin Console</a></li>
								<li><a href="index.php?page=phpinfo.php">PHP Info Page</a></li>
								<li><a href="index.php?page=robots-txt.php">Robots.txt</a></li>
							</ul>
						</li>
						<li>
							<a href="">Platform Path Disclosure</a>
							<ul>
								<li><a href="index.php?page=phpmyadmin.php">PHP MyAdmin Console</a></li>
								<li><a href="index.php?page=phpinfo.php">PHP Info Page</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<a href="https://www.owasp.org/index.php/Top_10_2013-A7-Missing_Function_Level_Access_Control" target="_blank">A7 - Missing Function Level Access Control</a>
					<ul>
						<li><a href="index.php?page=robots-txt.php">Robots.txt</a></li>
						<li><a href="index.php?page=secret-administrative-pages.php">"Secret" Administrative Pages</a></li>
					</ul>
				</li>
				<li>
					<a href="https://www.owasp.org/index.php/Top_10_2013-A8-Cross-Site_Request_Forgery_%28CSRF%29" target="_blank">A8 - Cross Site Request Forgery (CSRF)</a>
					<ul>
						<li><a href="index.php?page=add-to-your-blog.php">Add to your blog</a></li>
						<li><a href="index.php?page=register.php">Register User</a></li>
						<li><a href="index.php?page=user-poll.php">Poll Question</a></li>
					</ul>
				</li>
				<li>
					<a href="https://www.owasp.org/index.php/Top_10_2013-A9-Using_Components_with_Known_Vulnerabilities" target="_blank">A9 - Using Components with Known Vulnerabilities</a>
					<ul>
						<li><a href="index.php?page=phpmyadmin.php">PHP MyAdmin Console</a></li>
						<li><a href="index.php?page=phpinfo.php">PHP Info Page</a></li>
					</ul>
				</li>
				<li>
					<a href="https://www.owasp.org/index.php/Top_10_2013-A10-Unvalidated_Redirects_and_Forwards" target="_blank">A10 - Unvalidated Redirects and Forwards</a>
					<ul>
						<li><a href="?page=credits.php">Credits</a></li>
						<?php if (isset($_COOKIE["uid"]) && $_COOKIE["uid"]==1) { ?>		
						<li><a href="set-up-database.php">Setup/reset the DB</a></li>
						<?php } else { ?>
						<a href="#">Setup/reset the DB (Disabled: Not Admin)</a></li>
						<?php }; ?>		
					</ul>
				</li>
			</ul>
		</li>
	</ul>
	<ul>
		<li style="border-color: #ffffff;border-style: solid;border-width: 1px">
			<a href="#">OWASP 2010</a>
			<ul>
				<li>
					<a href="http://www.owasp.org/index.php/Top_10_2010-A7" target="_blank">2010 A7 - Insecure Cryptographic Storage</a>
					<ul>
						<li><a href="index.php?page=user-info.php">User Info</a></li>
						<li><a href="index.php?page=html5-storage.php">HTML5 Storage</a></li>
						<li><a href="index.php?page=view-user-privilege-level.php&iv=6bc24fc1ab650b25b4114e93a98f1eba">View User Privileges</a></li>
					</ul>
				</li>
				<li>
					<a href="http://www.owasp.org/index.php/Top_10_2010-A8" target="_blank">2010 A8 - Failure to Restrict URL Access</a>
					<ul>
						<li><a href="index.php?page=phpmyadmin.php">PHP MyAdmin Console</a></li>
						<li><a href="index.php?page=source-viewer.php">Source Viewer</a></li>
						<li><a href="index.php?page=secret-administrative-pages.php">"Secret" Administrative Pages</a></li>
						<li><a href="index.php?page=robots-txt.php">Robots.txt</a></li>
						<li><a href="index.php?page=arbitrary-file-inclusion.php">Arbitrary File Inclusion</a></li>
						<li><a href="index.php?page=phpinfo.php">PHP Info Page</a></li>					
					</ul>
				</li>
				<li>
					<a href="http://www.owasp.org/index.php/Top_10_2010-A9" target="_blank">2010 A9 - Insufficient Transport Layer Protection</a>
					<ul>
						<li><a href="index.php?page=ssl-misconfiguration.php">SSL Misconfiguration</a></li>
						<li><a href="index.php?page=login.php">Login</a></li>
						<li><a href="index.php?page=user-info.php">User Info</a></li>
					</ul>
				</li>
			</ul>
		</li>
	</ul>	
	<ul>
		<li style="border-color: #ffffff;border-style: solid;border-width: 1px">
			<a href="#">OWASP 2007</a>
			<ul>
				<li>
					<a href="http://www.owasp.org/index.php/Top_10_2007-A3" target="_blank">OWASP 2007 A3 - Malicious File Execution</a>
					<ul>
						<li><a href="?page=text-file-viewer.php">Text File Viewer</a></li>
						<li><a href="?page=source-viewer.php">Source Viewer</a></li>
					</ul>		
				</li>
				<li>
					<a href="http://www.owasp.org/index.php/Top_10_2007-A6" target="_blank">OWASP 2007 A6 - Information Leakage</a>
					<ul>
						<li><a href="index.php">Cache-Control</a></li>
						<li><a href="index.php">X-Powered-By HTTP Header</a></li>
						<li><a href="index.php">HTML/JavaScript Comments</a></li>
						<li><a href="index.php?page=framing.php">Click-Jacking</a></li>
						<li><a href="framer.html">Cross-Site Framing (Third-Party Framing)</a></li>
						<li><a href="index.php?page=html5-storage.php">HTML5 Storage</a></li>
						<li><a href="index.php?page=phpmyadmin.php">PHP MyAdmin Console</a></li>
						<li><a href="index.php?page=phpinfo.php">PHP Info Page</a></li>
						<li><a href="index.php?page=robots-txt.php">Robots.txt</a></li>
					</ul>		
				</li>
				<li>
					<a href="http://www.owasp.org/index.php/Top_10_2007-A6" target="_blank">OWASP 2007 A6 - Improper Error Handling</a>
					<ul>
						<li><a href="index.php?page=user-info.php">User Info</a></li>
						<li><a href="index.php?page=login.php">Login</a></li>
						<li><a href="index.php?page=register.php">Register</a></li>
						<li><a href="index.php?page=pen-test-tool-lookup.php">Pen Test Tool Lookup</a></li>
						<li><a href="index.php?page=pen-test-tool-lookup-ajax.php">Pen Test Tool Lookup (AJAX)</a></li>
						<li><a href="./webservices/soap/ws-user-account.php">Lookup User (SOAP Web Service)</a></li>
					</ul>		
				</li>
			</ul>
		</li>
	</ul>	
	<ul>
		<li style="border-color: #ffffff; border-style: solid;border-width: 1px">
			<a href="#">Web Services</a>
			<ul>
				<li>
					<a href="">SOAP</a>
					<ul>
						<li>
							<a href="">Test Page</a>
							<ul>
								<li><a href="./webservices/soap/ws-hello-world.php">Hello World</a></li>
							</ul>
						</li>
						<li>
							<a href="">Command Injection</a>
							<ul>
								<li><a href="./webservices/soap/ws-lookup-dns-record.php">DNS Lookup</a></li>
							</ul>
						</li>
						<li>
							<a href="">SQL Injection</a>
							<ul>
								<li><a href="./webservices/soap/ws-user-account.php">Lookup User</a></li>
							</ul>
						</li>
						<li>
							<a href="">Username Enumeration</a>
							<ul>
								<li><a href="./webservices/soap/ws-user-account.php">Lookup User</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<a href="">REST</a>
					<ul>
						<li>
							<a href="">SQL Injection</a>
							<ul>
								<li><a href="./webservices/rest/ws-user-account.php">User Account Management</a></li>
							</ul>
						</li>
						<li>
							<a href="">Username Enumeration</a>
							<ul>
								<li><a href="./webservices/rest/ws-user-account.php">User Account Management</a></li>
							</ul>
						</li>
					</ul>
				</li>						
			</ul>
		</li>
		<li style="border-color: #ffffff; border-style: solid;border-width: 1px">
			<a href="#">HTML 5</a>
			<ul>
				<li>
					<a href="">HTML 5 Web Storage</a>
					<ul>
						<li><a href="index.php?page=html5-storage.php">HTML5 Storage</a></li>
					</ul>
				</li>
				<li>
					<a href="">JavaScript Object Notation (JSON)</a>
					<ul>
						<li><a href="index.php?page=pen-test-tool-lookup.php">Pen Test Tool Lookup</a></li>
						<li><a href="index.php?page=pen-test-tool-lookup-ajax.php">Pen Test Tool Lookup (AJAX)</a></li>
					</ul>
				</li>
				<li>
					<a href="">Asyncronous JavaScript and XML (AJAX)</a>
					<ul>
						<li><a href="index.php?page=pen-test-tool-lookup-ajax.php">Pen Test Tool Lookup (AJAX)</a></li>
					</ul>
				</li>
			</ul>
		</li>
		<li style="border-color: #ffffff; border-style: solid;border-width: 1px">
			<a href="#">Others</a>
			<ul>
				<li>
					<a href="">Unrestricted File Upload</a>
					<ul>
						<li><a href="index.php?page=upload-file.php">File Upload</a></li>
					</ul>
				</li>
				<li>
					<a href="">XML External Entity Injection</a>
					<ul>
						<li><a href="index.php?page=xml-validator.php">XML Validator</a></li>
					</ul>
				</li>
				<li>
					<a href="">Local File Inclusion</a>
					<ul>
						<li><a href="index.php?page=arbitrary-file-inclusion.php">Arbitrary File Inclusion</a></li>
					</ul>
				</li>
				<li>
					<a href="">Remote File Inclusion</a>
					<ul>
						<li><a href="index.php?page=arbitrary-file-inclusion.php">Arbitrary File Inclusion</a></li>
					</ul>
				</li>
				<li>
					<a href="">Denial of Service</a>
					<ul>
						<li><a href="?page=text-file-viewer.php">Text File Viewer</a></li>
						<li><a href="?page=show-log.php">Show Web Log</a><li>
					</ul>		
				</li>
				<li>
					<a href="">JavaScript Validation Bypass</a>
					<ul>
						<li><a href="index.php?page=login.php">Login</a></li>
						<li><a href="index.php?page=user-info.php">User Info</a></li>
						<li><a href="index.php?page=add-to-your-blog.php">Add to your blog</a></li>
						<li><a href="index.php?page=html5-storage.php">HTML5 Storage</a></li>
						<li><a href="index.php?page=dns-lookup.php">DNS Lookup</a></li>
						<li><a href="index.php?page=repeater.php">Repeater</a></li>
					</ul>		
				</li>
				<li>
					<a href="index.php?page=user-agent-impersonation.php">User-Agent Impersonation</a>
				</li>
				<li>
					<a href="">Data Capture Pages</a>
					<ul>
						<li><a href="index.php?page=capture-data.php">Data Capture</a></li>
						<li><a href="index.php?page=captured-data.php">View Captured Data</a></li>
					</ul>		
				</li>
				
			</ul>
		</li>
		<li style="border-color: #ffffff;border-style: solid;border-width: 1px">
			<a href="">Documentation</a>
			<ul>
				<li><a href="index.php?page=documentation/change-log.html">Change Log</a></li>
				<li><a href="index.php?page=credits.php">Credits</a></li>
				<li>
					<a href="index.php?page=documentation/how-to-access-Mutillidae-over-Virtual-Box-network.php">
						How to Access Mutillidae over Virtual Box "Host Only" Network
					</a>
				</li>
				<li><a href="index.php?page=installation.php">Installation Instructions</a></li>
				<li><a href="/mutillidae/documentation/mutillidae-installation-on-xampp-win7.pdf">Installation Instructions: Windows 7 (PDF)</a></li>
				<li><a href="index.php?page=documentation/vulnerabilities.php">Listing of Vulnerabilities</a></li>
				<li>
					<a href="https://www.sans.org/reading-room/whitepapers/application/introduction-owasp-mutillidae-ii-web-pen-test-training-environment-34380" target="_blank">
						Whitepaper: Introduction to OWASP Mutillidae II Web Pen Test Training Environment
					</a>
				</li>
			</ul>
		</li>
		<li style="border-color: #ffffff;border-style: solid;border-width: 1px">
			<a href="#">Resources</a>
			<ul>
				<li>
					<a onclick="bookmarkSite();" href="">
						Bookmark Site
					</a>
				</li>
				<li>
					<a href="http://sourceforge.net/projects/mutillidae/files/mutillidae-project/" target="_blank">
						Latest Version of OWASP Mutillidae II
					</a>
				</li>
				<li>
					<a href="https://www.owasp.org/index.php/Top_Ten" target="_blank">
						OWASP Top Ten
					</a>
				</li>
				<li>
					<a href="https://addons.mozilla.org/en-US/firefox/collections/jdruin/pro-web-developer-qa-pack/" target="_blank">
						Professional Web Application Developer Quality Assurance Pack
					</a>
				</li>
				<li>
					<a href="http://samurai.inguardians.com/" target="_blank">
						Samurai Web Testing Framework
					</a>
				</li>
			</ul>
		</li>
	</ul>
	<br style="clear: left" />
</div>
<div>&nbsp;</div>
<div class="label" style="text-align: center;">
	<a 
		href="https://www.sans.org/reading-room/whitepapers/application/introduction-owasp-mutillidae-ii-web-pen-test-training-environment-34380" 
		target="_blank"
		title="Whitepaper: Introduction to OWASP Mutillidae II Web Pen Test Training Environment"
	>			
		<img align="middle" alt="Webpwnized Twitter Channel" src="./images/pdf-icon-48-48.png" />
		<br/>
		Getting Started: Project Whitepaper
	</a>
</div>		

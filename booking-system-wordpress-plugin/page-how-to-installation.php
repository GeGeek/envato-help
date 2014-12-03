            
            <div id="main">
                <section>
                    <h2>Installation</h2>
                    
                    <p>
                        After you download the zip file <strong class="bold">codecanyon-2675936-booking-system-pro-wordpress-plugin.zip</strong> from CodeCanyon you unpack it on your computer. There you have a file  <strong class="bold">dopbsp.zip</strong> (for automatic installation) and a folder <strong class="bold">dopbsp</strong> (for manual installation) you can use.
                    </p>
                    
                    <ol>
                        <li>
                            <a href="#installation-automatic-installation">Automatic installation</a>
                        </li>
                        <li>
                            <a href="#installation-manual-installation">Manual installation</a>
                        </li>
                        <li>
                            <a href="#installation-important-information">Important information</a>
                        </li>
                        <li>
                            <a href="#installation-the-server-crashed">The server crashed!</a>
                        </li>
                        <li>
                            <a href="#installation-installation-failed">Installation failed</a>
                        </li>
                    </ol>
                </section>
                
                <section id="installation-automatic-installation">
                    <h4>Automatic installation</h4>
                    
                    <p>
                        To add the Booking System plugin using the built-in plugin installer:
                    </p> 
                    <ul>
                        <li><strong>Step 1</strong> - Go to <strong class="bold">Plugins</strong> -> <strong class="bold">Add New</strong> in WordPress administration area.</li>
                        <li><strong>Step 2</strong> - Click <strong class="bold">Upload Plugin</strong> on top of the page.</li>
                        <li><strong>Step 3</strong> - Click <strong class="bold">Choose File</strong> and select <strong class="bold">dopbsp.zip</strong> from your computer, the one from the zip file you downloaded from CodeCanyon.</li>
                        <li><strong>Step 4</strong> - Click <strong class="bold">Install Now</strong> to install the Booking System.</li>
                        <li><strong>Step 5</strong> - After installation is complete, click <strong class="bold">Activate Plugin</strong> to activate the Booking System.</li>
                    </ul>
                </section>
                
                <section id="installation-manual-installation">
                    <h4>Manual installation</h4>
                    
                    <p>
                        Installation of the Booking System manually requires FTP familiarity.
                    </p> 
                    <ul>
                        <li><strong>Step 1</strong> - With your FTP program connect to your web server.</li>
                        <li><strong>Step 2</strong> - Go where your WordPress files are, to folder <strong class="bold">wp-content/plugins</strong>.</li>
                        <li><strong>Step 3</strong> - Upload the folder <strong class="bold">dopbsp</strong> from the zip file you downloaded from CodeCanyon.</li>
                        <li><strong>Step 4</strong> - Go to <strong class="bold">Plugins</strong> screen, in WordPress administration area, and find the newly uploaded Booking System in the list.</li>
                        <li><strong>Step 5</strong> - Click <strong class="bold">Activate</strong> to activate it.</li>
                    </ul>
                </section>
                
                <section id="installation-important-information">
                    <h4>Important information</h4>
                    
                    <p>
                        On some servers, when you install or update the Booking System, the process can be very slow. This is caused by WordPress function <a href="http://codex.wordpress.org/Creating_Tables_with_Plugins#Creating_or_Updating_the_Table" target="_blank">dbDelta()</a> which creates and updates your database.
                    </p>
                    <p>
                        We recommend you be patient and allow the installation to finish, but if something happens during it and the database is not created, please use the following steps:
                    </p>
                    <ul>
                        <li><strong>Step 1</strong> - With your FTP program connect to your web server.</li>
                        <li><strong>Step 2</strong> - Go where your WordPress files are, to folder <strong class="bold">wp-content/plugins/dopbsp</strong>.</li>
                        <li><strong>Step 3</strong> - Open and edit the file <strong class="bold">dopbsp-config.php</strong>.</li>
                        <li><strong>Step 4</strong> - Set constant <strong class="bold">DOPBSP_CONFIG_INIT_DATABASE</strong> value to <strong class="bold">true</strong> @line 18.</li>
                        <li><strong>Step 5</strong> - Go to WordPress administration area and refresh the page. It does not matter on which page you are.</li>
                        <li><strong>Step 6</strong> - Set constant <strong class="bold">DOPBSP_CONFIG_INIT_DATABASE</strong> value back to <strong class="bold">false</strong>.</li>
                    </ul>
                    <p>
                        You can also use <a href="http://envato-help.dotonpaper.net/booking-system-wordpress-plugin/?page=back-end-tools" target="_blank">Repair database & text</a> tool.
                    </p>
                </section>
                
                <section id="installation-the-server-crashed">
                    <h4>The server crashed</h4>
                    
                    <p>
                        When installing or updating the reservation system, because of the large number of processes that are run only when the plugin is installed, it is possible that your server will crash.
                    </p>
                    <p>
                        One solution is to increase the memory allocated to PHP. WordPress provides some <a href="http://codex.wordpress.org/Editing_wp-config.php#Increasing_memory_allocated_to_PHP" target="_blank">instructions</a> on how to do that.
                    </p>
                </section>
                
                <section id="installation-installation-failed">
                    <h4>Installation failed</h4>
                    
                    <p>
                        If the booking system did not install properly, or you have problems with WordPress administration area after installation, please contact us on our <a href="http://envato-support.dotonpaper.net/" target="_blank">Support Forums</a> and we will debug the problem for you.
                    </p>
                    <p>
                        Always the problem is caused by an incompatibility with another plugin, theme or the server is not configured correctly.
                    </p>
                </section>
            </div>
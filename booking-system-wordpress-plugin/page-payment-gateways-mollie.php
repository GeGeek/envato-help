            
            <div id="main">
                <section>
                    <h2>Payment gateways - Mollie (add-on)</h2>
                    
                    <p>
                        To use Mollie payment with Pinpoint Booking System, you need to use an add-on, which you can get <a href="http://shop.dotonpaper.net/product/pinpoint-booking-system-wordpress-plugin-add-on-mollie-payment/" target="_blank">here</a>.
                        <br />
                        The add-on is compatible with <a href="http://codecanyon.net/item/pinpoint-booking-system-pro-book-everything-with-wordpress/2675936?ref=DOTonPAPER" target="_blank">Pinpoint Booking System PRO</a> (minimum version 2.1.1) and <a href="https://wordpress.org/plugins/booking-system/" target="_blank">Pinpoint Booking System FREE</a> (minimum version 2.1.1).
                    </p>
                    
                    <ol>
                        <li>
                            <a href="#mollie-installation">Installation</a>
                        </li>
                        <li>
                            <a href="#mollie-settings">Settings</a>
                        </li>
                        <li>
                            <a href="#mollie-changelog">Changelog</a>
                        </li>
                    </ol>
                </section>
                
                <section id="mollie-installation">
                    <h2>Installation</h2>
                    
                    <p>
                        After you download the zip file <strong class="bold">dopbsp-mollie.zip</strong> from <a href="http://shop.dotonpaper.net/my-account/" target="_blank">http://shop.dotonpaper.net/my-account/</a> you can use it for automatic installation or you can unpack <strong class="bold">dopbsp-mollie.zip</strong> to use it for manual installation.
                    </p>
                    
                    <h4>Automatic installation</h4>
                    <p>
                        Add the Mollie Payment add-on using the built-in plugin installer:
                    </p> 
                    <ul>
                        <li><strong>Step 1</strong> - Go to <strong class="bold">Plugins</strong> -> <strong class="bold">Add New</strong> in WordPress administration area.</li>
                        <li><strong>Step 2</strong> - Click <strong class="bold">Upload Plugin</strong> on top of the page.</li>
                        <li><strong>Step 3</strong> - Click <strong class="bold">Choose File</strong> and select <strong class="bold">dopbsp-mollie.zip</strong> from your computer, the one from the zip file you downloaded from <a href="http://shop.dotonpaper.net/my-account/" target="_blank">http://shop.dotonpaper.net/my-account/</a>.</li>
                        <li><strong>Step 4</strong> - Click <strong class="bold">Install Now</strong> to install <strong>Mollie Payment add-on</strong>.</li>
                        <li><strong>Step 5</strong> - After installation is complete, click <strong class="bold">Activate Plugin</strong> to activate <strong>Pinpoint Booking System add-on: Mollie Payment</strong>.</li>
                    </ul>
                    
                    <h4>Manual installation</h4>
                    <p>
                        Manual installation requires FTP familiarity.
                    </p> 
                    <ul>
                        <li><strong>Step 1</strong> - With your FTP program connect to your web server.</li>
                        <li><strong>Step 2</strong> - Go where your WordPress files are, to folder <strong class="bold">wp-content/plugins</strong>.</li>
                        <li><strong>Step 3</strong> - Upload the folder <strong class="bold">dopbsp-mollie</strong> from the zip file you downloaded from <a href="http://shop.dotonpaper.net/my-account/" target="_blank">http://shop.dotonpaper.net/my-account/</a>.</li>
                        <li><strong>Step 4</strong> - Go to <strong class="bold">Plugins</strong> screen, in WordPress administration area, and find the newly uploaded <strong>Pinpoint Booking System add-on: Mollie Payment</strong> in the list.</li>
                        <li><strong>Step 5</strong> - Click <strong class="bold">Activate</strong> to activate it.</li>
                    </ul>
                </section>
                
                <section id="mollie-settings">
                    <h2>Settings</h2>
                    
                    <h4>Calendar settings</h4>
                    <p>
                        Once the add-on is activated, it will create all the elements needed to integrate the payment gateway in the booking system.
                    </p>
                    <p>
                        To configure Mollie Payment go to <strong>Calendar payment gateways</strong> in <strong>WordPress admin -> Pinpoint Booking System -> Calendars -> Select calendar -> Click on payment gateways icon</strong>, and set the settings.
                    </p>
                    <p>
                        To get Mollie API keys, log in to your Mollie account and go to your <a href="https://www.mollie.com/beheer/account/profielen/" target="_blank">Profile</a> page. <a href="https://www.mollie.com/beheer/account/profielen/" target="_blank">https://www.mollie.com/beheer/account/profielen/</a>
                    </p>
                    <div class="toggle-wrapper displayed">
                        <a class="toggle" href="javascript:void(0)">Calendar payment gateways settings <span class="icon"></span></a>
                        <div class="toggle-content">
                            <table>
                                <tbody>
                                    <tr>
                                        <td><strong>Enable Mollie payment</strong></td>
                                        <td>Default value: Disabled. Allow users to pay with Mollie. The period is instantly booked.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Mollie key</strong></td>
                                        <td>Enter Mollie API key.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Enable Mollie test</strong></td>
                                        <td>Default value: Disabled. Enable Mollie test.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Mollie test key</strong></td>
                                        <td>Enter Mollie API key for testing.</td>
                                    </tr>
                                   
                                    <tr>
                                        <td><strong>Enable refunds</strong></td>
                                        <td>Default value: Disabled. Users that paid with Mollie will be refunded automatically if a reservation is canceled.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Refund value</strong></td>
                                        <td>Default value: 100. Enter the refund value from reservation total price.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Refund type</strong></td>
                                        <td>Default value: Percent. Select refund value type. It can be a fixed value or a percent from reservation price.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Redirect after payment</strong></td>
                                        <td>Enter the URL where to redirect after the payment has been completed. Leave it blank to redirect back to the calendar.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    <h4>Notifications settings</h4>
                    <p>
                        You can configure if you want to be notified when a payment is done using Mollie Payment in <strong>Calendar notifications</strong> in <strong>WordPress admin -> Pinpoint Booking System -> Calendars -> Select calendar -> Click on notifications icon</strong>.
                    </p>
                    <p>
                        You can edit notification messages in <a href="http://envato-help.dotonpaper.net/booking-system-wordpress-plugin/back-end-emails">Email templates</a> section.
                    </p>
                    
                    <div class="toggle-wrapper displayed">
                        <a class="toggle" href="javascript:void(0)">Notifications settings <span class="icon"></span></a>
                        <div class="toggle-content">
                            <table>
                                <tbody>
                                    <tr>
                                        <td><strong>Mollie - Notify admin</strong></td>
                                        <td>Enable to send an email notification to admin on book request payed with Mollie.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Mollie - Notify user</strong></td>
                                        <td>Enable to send an email notification to user on book request payed with Mollie.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
                
                <section id="mollie-changelog">
                    <h2>Changelog</h2>
                    
                    <p>
                        The payment add-on is updated periodically, with new features and fixes for bugs.
                    </p>
                    
                    <a href="javascript:toggle('mollie-changelog', 'hide')" class="toggle-all hide">
                        <span class="label">Close all</span>
                        <span class="icon"></span>
                    </a>
                    <a href="javascript:toggle('mollie-changelog', 'display')" class="toggle-all display">
                        <span class="label">Open all</span>
                        <span class="icon"></span>
                    </a>
                    <br class="clear" />
                    
                    <div class="toggle-wrapper toggle-mollie-changelog displayed">
                        <a class="toggle" href="javascript:void(0)">Version 1.0.2 - 14 September 2015 - <span class="info">requires Pinpoint Booking System PRO v2.1.1 or Pinpoint Booking System FREE v2.1.1</span> <span class="icon"></span></a>
                        <div class="toggle-content">
                            <h6>New features:</h6>
                            <ul>
                                <li>Compatibility added for Pinpoint Booking System PRO 2.1.1 and Pinpoint Booking System FREE 2.1.1</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="toggle-wrapper toggle-mollie-changelog hidden">
                        <a class="toggle" href="javascript:void(0)">Version 1.0.1 - 31 August 2015 - <span class="info">requires Pinpoint Booking System PRO v2.0.9 or Pinpoint Booking System FREE v2.0</span> <span class="icon"></span></a>
                        <div class="toggle-content">
                            <h6>Repaired bugs:</h6>
                            <ul>
                                <li>Webhook bug fixed.</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="toggle-wrapper toggle-mollie-changelog hidden">
                        <a class="toggle" href="javascript:void(0)">Version 1.0 - 09 June 2015 - <span class="info">requires Pinpoint Booking System PRO v2.0.9 or Pinpoint Booking System FREE v2.0</span> <span class="icon"></span></a>
                        <div class="toggle-content">
                            <ul>
                                <li>Initial release of Pinpoint Booking System (WordPress Plugin) add-on: Mollie Payment.</li>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>
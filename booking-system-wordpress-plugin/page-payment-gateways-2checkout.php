            
            <div id="main">
                <section>
                    <h2>Payment gateways - 2Checkout (add-on)</h2>
                    
                    <p>
                        To use 2Checkout payment with the booking system, you need to use an add-on, which you can get <a href="http://shop.dotonpaper.net/product/booking-system-wordpress-plugin-add-on-2checkout-payment/" target="_blank">here</a>. The add-on is compatible only with the <a href="http://codecanyon.net/item/booking-system-pro-wordpress-plugin/2675936?ref=DOTonPAPER" target="_blank">PRO version</a> of the Booking System (minimum 2.0.9).
                    </p>
                    
                    <ol>
                        <li>
                            <a href="#stripe-installation">Installation</a>
                        </li>
                        <li>
                            <a href="#stripe-settings">Settings</a>
                        </li>
                        <li>
                            <a href="#stripe-changelog">Changelog</a>
                        </li>
                    </ol>
                </section>
                
                <section id="stripe-installation">
                    <h2>Installation</h2>
                    
                    <p>
                        After you download the zip file <strong class="bold">dop-booking-system-wordpress-plugin-add-on-2checkout-payment.zip</strong> from CodeCanyon you unpack it on your computer. There you have a file  <strong class="bold">dopbsp-2checkout.zip</strong> (for automatic installation) and a folder <strong class="bold">dopbsp-2checkout</strong> (for manual installation) you can use.
                    </p>
                    
                    <h4>Automatic installation</h4>
                    <p>
                        To add the 2Checkout Payment addon using the built-in plugin installer:
                    </p> 
                    <ul>
                        <li><strong>Step 1</strong> - Go to <strong class="bold">Plugins</strong> -> <strong class="bold">Add New</strong> in WordPress administration area.</li>
                        <li><strong>Step 2</strong> - Click <strong class="bold">Upload Plugin</strong> on top of the page.</li>
                        <li><strong>Step 3</strong> - Click <strong class="bold">Choose File</strong> and select <strong class="bold">dopbsp-2checkout.zip</strong> from your computer, the one from the zip file you downloaded from CodeCanyon.</li>
                        <li><strong>Step 4</strong> - Click <strong class="bold">Install Now</strong> to install the Booking System.</li>
                        <li><strong>Step 5</strong> - After installation is complete, click <strong class="bold">Activate Plugin</strong> to activate the 2Checkout Payment.</li>
                    </ul>
                    
                    <h4>Manual installation</h4>
                    <p>
                        Manual installation requires FTP familiarity.
                    </p> 
                    <ul>
                        <li><strong>Step 1</strong> - With your FTP program connect to your web server.</li>
                        <li><strong>Step 2</strong> - Go where your WordPress files are, to folder <strong class="bold">wp-content/plugins</strong>.</li>
                        <li><strong>Step 3</strong> - Upload the folder <strong class="bold">dopbsp-2checkout</strong> from the zip file you downloaded from CodeCanyon.</li>
                        <li><strong>Step 4</strong> - Go to <strong class="bold">Plugins</strong> screen, in WordPress administration area, and find the newly uploaded <strong>Booking System PRO add-in: 2Checkout Payment</strong> in the list.</li>
                        <li><strong>Step 5</strong> - Click <strong class="bold">Activate</strong> to activate it.</li>
                    </ul>
                </section>
                
                <section id="stripe-settings">
                    <h2>Settings</h2>
                    
                    <h4>Calendar settings</h4>
                    <p>
                        Once the add-on is activated, it will create all the elements needed to integrate the payment gateway in the booking system.
                    </p>
                    <p>
                        To configure 2Checkout Payment go to <strong>Calendar payment gateways</strong> in <strong>WordPress admin -> Booking System PRO -> Calendars -> Select calendar -> Click on payment gateways icon</strong>, and set the settings.
                    </p>
                    <p>
                        To get 2Checkout API keys, log in to your 2Checkout account and go to <strong>API Keys</strong> in your <strong>Account Settings</strong>. <a href="http://help.2checkout.com/articles/FAQ/Where-do-I-find-the-Publishable-and-Private-keys/" target="_blank">http://help.2checkout.com/articles/FAQ/Where-do-I-find-the-Publishable-and-Private-keys/</a>
                    </p>
                    <p>
                        To get 2Checkout seller ID, log in to your 2Checkout account and go to <strong>Seller ID</strong> in your <strong>Account Settings</strong>. <a href="http://help.2checkout.com/articles/FAQ/Where-is-my-Seller-ID" target="_blank">http://help.2checkout.com/articles/FAQ/Where-is-my-Seller-ID</a>
                    </p>
                    <div class="toggle-wrapper displayed">
                        <a class="toggle" href="javascript:void(0)">Calendar payment gateways settings <span class="icon"></span></a>
                        <div class="toggle-content">
                            <table>
                                <tbody>
                                    <tr>
                                        <td><strong>Enable 2Checkout payment</strong></td>
                                        <td>Default value: Disabled. Allow users to pay with 2Checkout. The period is instantly booked.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>2Checkout private key</strong></td>
                                        <td>Enter 2Checkout API private key.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>2Checkout publishable key</strong></td>
                                        <td>Enter 2Checkout API publishable key.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>2Checkout username</strong></td>
                                        <td>Enter 2Checkout username.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>2Checkout password</strong></td>
                                        <td>Enter 2Checkout password.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Enable 2Checkout sandbox</strong></td>
                                        <td>Default value: Disabled. Enable 2Checkout sandbox.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>2Checkout sandbox secret key</strong></td>
                                        <td>Enter 2Checkout API secret key for sandbox.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>2Checkout sandbox publishable key</strong></td>
                                        <td>Enter 2Checkout API publishable key for sandbox.</td>
                                    </tr>
                                    
                                    <tr>
                                        <td><strong>2Checkout sandbox username</strong></td>
                                        <td>Enter 2Checkout sandbox username.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>2Checkout sandbox password</strong></td>
                                        <td>Enter 2Checkout sandbox password.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>2Checkout sandbox seller ID</strong></td>
                                        <td>Enter 2Checkout sandbox seller ID.</td>
                                    </tr>
                                    
                                    <tr>
                                        <td><strong>Enable refunds</strong></td>
                                        <td>Default value: Disabled. Users that paid with 2Checkout will be refunded automatically if a reservation is canceled.</td>
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
                        You can configure if you want to be notified when a payment is done using 2Checkout Payment in <strong>Calendar notifications</strong> in <strong>WordPress admin -> Booking System PRO -> Calendars -> Select calendar -> Click on notifications icon</strong>.
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
                                        <td><strong>2Checkout - Notify admin</strong></td>
                                        <td>Enable to send an email notification to admin on book request payed with 2Checkout.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>2Checkout - Notify user</strong></td>
                                        <td>Enable to send an email notification to user on book request payed with 2Checkout.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
                
                <section id="stripe-changelog">
                    <h2>Changelog</h2>
                    
                    <p>
                        The payment add-on is updated periodically, with new features and fixes for bugs.
                    </p>
                    
                    <a href="javascript:toggle('changelog', 'hide')" class="toggle-all hide">
                        <span class="label">Close all</span>
                        <span class="icon"></span>
                    </a>
                    <a href="javascript:toggle('changelog', 'display')" class="toggle-all display">
                        <span class="label">Open all</span>
                        <span class="icon"></span>
                    </a>
                    <br class="clear" />
                    
                    <div class="toggle-wrapper toggle-changelog displayed">
                        <a class="toggle" href="javascript:void(0)">Version 1.0 - 28 May 2015 - <span class="info">requires Booking System PRO v2.0.9</span> <span class="icon"></span></a>
                        <div class="toggle-content">
                            <ul>
                                <li>Initial release of Booking System PRO (WordPress Plugin) add-on: 2Checkout Payment.</li>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>
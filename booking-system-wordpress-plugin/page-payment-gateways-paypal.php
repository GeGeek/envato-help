            
            <div id="main">
                <section>
                    <h2>Payment gateways - PayPal</h2>
                    
                    <p>
                        PayPal payment is included by default in the booking system.
                    </p>
                </section>
                
                <section id="paypal-settings">
                    <h2>Settings</h2>
                    
                    <h4>Calendar settings</h4>
                    <p>
                        To configure PayPal go to <strong>Calendar payment gateways</strong> in <strong>WordPress admin -> Booking System PRO -> Calendars -> Select calendar -> Click on payment gateways icon</strong>, and set the settings.
                    </p>
                    <p>
                        To get PayPal API credentials, follow the instructions on this <a href="https://developer.paypal.com/docs/classic/api/apiCredentials/" target="_blank">page</a>.
                    </p>
                    <p>
                        To get PayPal Sandbox API credentials, follow the instructions on this <a href="https://developer.paypal.com/docs/classic/lifecycle/sb_credentials/" target="_blank">page</a>.
                    </p>
                    
                    <div class="toggle-wrapper displayed">
                        <a class="toggle" href="javascript:void(0)">Calendar payment gateways settings <span class="icon"></span></a>
                        <div class="toggle-content">
                            <table>
                                <tbody>
                                    <tr>
                                        <td><strong>Enable PayPal payment</strong></td>
                                        <td>Default value: Disabled. Allow users to pay with PayPal. The period is instantly booked.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Enable PayPal credit card payment</strong></td>
                                        <td>Default value: Disabled. Enable so that users can pay directly with their credit card.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>PayPal API user name</strong></td>
                                        <td>Enter PayPal API credentials user name. View documentation to see from were you can get them.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>PayPal API password</strong></td>
                                        <td>Enter PayPal API credentials password. View documentation to see from were you can get them.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>PayPal API signature</strong></td>
                                        <td>Enter PayPal API credentials signature. View documentation to see from were you can get them.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Enable PayPal sandbox</strong></td>
                                        <td>Default value: Disabled. Enable to use PayPal sandbox features.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>PayPal API sandbox user name</strong></td>
                                        <td>Enter PayPal API sandbox credentials user name.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>PayPal API sandbox password</strong></td>
                                        <td>Enter PayPal API sandbox credentials password.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>PayPal API sandbox signature</strong></td>
                                        <td>Enter PayPal API sandbox credentials signature.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Enable refunds</strong></td>
                                        <td>Default value: Disabled. Users that paid with PayPal will be refunded automatically if a reservation is canceled.</td>
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
                        You can configure if you want to be notified when a payment is done using PayPal Payment in <strong>Calendar notifications</strong> in <strong>WordPress admin -> Booking System PRO -> Calendars -> Select calendar -> Click on notifications icon</strong>.
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
                                        <td><strong>Stripe - Notify admin</strong></td>
                                        <td>Enable to send an email notification to admin on book request payed with Stripe.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Stripe - Notify user</strong></td>
                                        <td>Enable to send an email notification to user on book request payed with Stripe.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
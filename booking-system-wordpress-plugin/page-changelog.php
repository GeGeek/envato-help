            
            <div id="main">
                <section>
                    <h2>Changelog</h2>
                    
                    <p>
                        The booking system is updated periodically, with new features and fixes for bugs. All updates are free. Please read the update instructions <a href="http://envato-help.dotonpaper.net/booking-system-wordpress-plugin/?page=update">here</a>.
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
                        <a class="toggle" href="javascript:void(0)">Version 2.0.3 - 28 August 2014 <span class="icon"></span></a>
                        <div class="toggle-content">
                            <h6>New features:</h6>
                            <ul>
                                <li>"Dashboard" memory tests have been improved.</li>
                                <li>Bookings/reservations calendars jump to the last added/removed month.</li>
                                <li>Currency can be displayed with space when price is shown, both in booking calendars and WordPress back end.</li>
                                <li>Displaying all translation initially in WordPress admin can be disabled in the configuration file.</li>
                                <li>Reservations calendar has been added/improved, in WordPress back end.</li>
                                <li>WooCommerce code can be enabled in configuration file, if WooCommerce is not detected.</li>
                            </ul>

                            <h6>Bug fixes:</h6>
                            <ul>
                                <li>"Dashboard" MySQL test works in PHP 5.5 or higher, bug fixed.</li>
                                <li>Booking/reservation notifications & payment gateway settings can be edited in custom posts, bug fixed.</li>
                                <li>DOP Select jQuery plugin not working with some themes, in front end booking calendar, bug fixed.</li>
                                <li>Information tooltip is displayed, bug fixed in front end booking calendar.</li>
                                <li>Messages modal always hides in WordPress back end, bug fixed.</li>
                                <li>November & December months are displayed correctly in reservations, booking notifications ...</li>
                                <li>Number of days in booking/reservation is calculated correctly in October, bug fixed.</li>
                                <li>PayPal cancel, error, success links are set correctly in front end booking calendar, bug fixed.</li>
                                <li>Price decimals ending in 0 display correctly in back end bookings/reservations and notifications, bug fixed.</li>
                                <li>Translation may be forced reset, bug fixed.</li>
                                <li>Weekdays are displayed correctly in WordPress back end datepickers, bug fixed.</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="toggle-wrapper toggle-changelog hidden">
                        <a class="toggle" href="javascript:void(0)">Version 2.0.2 - 04 August 2014 <span class="icon"></span></a>
                        <div class="toggle-content">
                            <h6>New features:</h6>
                            <ul>
                                <li>"Dashboard" added. Display a landing page and server environment.</li>
                                <li>Armenian dram currency added.</li>
                                <li>Bangladesh Taka currency added.</li>
                                <li>Booking notifications can be sent using PHP mail function.</li>
                                <li>Booking notifications can be sent using WordPress wp_mail function.</li>
                                <li>Booking notifications methods can be tested.</li>
                                <li>DOP Select jquery plugin updated.</li>
                                <li>Form data, that was entered when the a booking was requested, can be displayed in calendar information tooltip and/or day/hour body.</li>
                            </ul>

                            <h6>Bug fixes:</h6>
                            <ul>
                                <li>Administrators are removed from calendar user permissions list, bug fixed.</li>
                                <li>Set minimum booking period for less than 1 hour, bug fixed.</li>
                                <li>Use different product type in WooCommerce, bug fixed.</li>
                                <li>User booking notifications are not sent to admin, bug fixed.</li>
                                <li>WooCommerce cart & order display the right language for bookings, bug fixed.</li>
                                <li>WooCommerce booking with "Direct bank transfer" error has been fixed.</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="toggle-wrapper toggle-changelog hidden">
                        <a class="toggle" href="javascript:void(0)">Version 2.0.1 - 25 July 2014 <span class="icon"></span></a>
                        <div class="toggle-content">
                            <h6>New features:</h6>
                            <ul>
                                <li>Jump to "Add to cart" button in WooCommerce after a reservation has been selected for booking.</li>
                                <li>Kenya Shilling currency added.</li>
                                <li>Bookings can be limited to minutes.</li>
                                <li>Set booking period rules for minutes.</li>
                                <li>Update schedule after a booking request is payed with PayPal, bug fixed.</li>
                            </ul>

                            <h6>Bug fixes:</h6>
                            <ul>
                                <li>Adding reservations from back end update availability, bug fixed.</li>
                                <li>Booking notifications are sent in the language that was used when the reservation was created.</li>
                                <li>Booking notifications are sent to multiple admins, bug fixed.</li>
                                <li>Period is booked after payment is done with some WooCommerce payment gateways extensions, bug fixed.</li>
                                <li>TinyMCE button incompatibility with some themes has been fixed.</li>
                                <li>Update schedule after a booking request is payed with PayPal, bug fixed.</li>
                                <li>Users permissions for specific calendars have been fixed.</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="toggle-wrapper toggle-changelog hidden">
                        <a class="toggle" href="javascript:void(0)">Version 2.0 - 22 July 2014 <span class="icon"></span></a>
                        <div class="toggle-content">
                            <h6>New features:</h6>
                            <ul>
                                <li>"Coupons" added. Create voucher codes for your clients to use with their booking requests.</li>
                                <li>"Discounts" added. Give discounts for the period booked, in different time periods.</li>
                                <li>"Email templates" added. Customize your booking notifications directly from administration area.</li>
                                <li>"Extras" added. Add amenities, services & other stuff, with price or not, to a booking/reservation.</li>
                                <li>"Rules" added. Currently you can set min/max time lapse for a booking request.</li>
                                <li>"Taxes & fees" added. Set taxes & fees that need to be paid (VAT tax for example) with the booking.</li>
                                <li>"Translation" page has been updated in WordPress admin.</li>
                                <li>Add user permissions using custom roles in WordPress admin.</li>
                                <li>AJAX requests no longer return 403, 404 errors in front end.</li>
                                <li>All algorithms are improved and work faster. Install, save, search ...</li>
                                <li>Back end UI/CSS has been changed. A new design has been created for WordPress administration area.</li>
                                <li>Booking notifications are sent without SMTP, if it does not work.</li>
                                <li>Booking notifications can be enabled/disabled in administration area.</li>
                                <li>Booking notifications can be sent to multiple admins.</li>
                                <li>Complete code core changes. Everything is OOP & commented.</li>
                                <li>Currency can be positioned before or after price, in booking calendar.</li>
                                <li>Custom post types do not appear anymore in blog posts by default.</li>
                                <li>Data save/load speed & server memory usage has been optimized.</li>
                                <li>Different levels of checking availability have been added in the booking process.</li>
                                <li>Front end booking calendar info messages hide after a few seconds.</li>
                                <li>Front end booking calendar's sidebar view is customizable.</li>
                                <li>Front end booking calendar speed has been improved.</li>
                                <li>Front end UI/CSS has been changed. A new design has been created for front end booking calendar and all classes and ids are unique.</li>
                                <li>Language is not saved anymore in sessions in front end.</li>
                                <li>Language codes have been changed to international codes for: Albanian (al->sq), Basque (bs->eu), Belarusian (by->be), Chinese (cn->zh), Croatian (cr->hr), Czech (cz->cs), Danish (dk->da), Dutch (du->nl), Greek (gr->el), Haitian Creole(ha->ht), Irish (ir->ga), Malay (mg->ms), Maltese (ma->mt), Persian (pe->fa), Spanish (sp->es), Swedish (se->sv), Welsh (we->cy).</li>
                                <li>Languages can be enabled/disabled in WordPress back end.</li>
                                <li>Major database changes. Column changes and more indexes created.</li>
                                <li>PHPMailer class is used when sending booking notifications.</li>
                                <li>Possibility to select more than one group of days/hours in a booking/reservation has been added.</li>
                                <li>Redirect after a booking has been made, has been added.</li>
                                <li>Redirect after a booking has been payed with PayPal, has been added.</li>
                                <li>Reservations view is the same after page is refreshed.</li>
                                <li>Set the number of months to be initially displayed in the booking calendar.</li>
                                <li>Stop bookings in advance added.</li>
                                <li>Translation works with special characters.</li>
                                <li>UAE Dirham currency added.</li>
                                <li>Verification if a booking calendar has been attached to WooCommerce product has been added.</li>
                                <li>WooCommerce integration has been changed. This should fix all incompatibility & bugs problems that were in previous version.</li>
                            </ul>

                            <h6>Bug fixes:</h6>
                            <ul>
                                <li>Availability text is visible on special days, bug fixed.</li>
                                <li>Compatibility with PHP 5.3 or higher has been fixed.</li>
                                <li>Current year changes on booking calendar resize, bug fixed.</li>
                                <li>Days availability is restored when you cancel a booking/reservation.</li>
                                <li>IE bugs fixed.</li>
                                <li>Minimum booking period error message does not display randomly when you select only check in date, in booking calendar.</li>
                                <li>Payment transaction ID is displayed in booking notification emails.</li>
                                <li>Required checkbox validation bug fixed, in booking form.</li>
                                <li>Translation for dynamic items display correctly, both in booking calendar and WordPress admin.</li>
                                <li>Translation not saving, bug fixed, both in booking calendar and WordPress admin.</li>
                                <li>Turkish Lira sign has been fixed.</li>
                                <li>User capabilities fixed, in WordPress admin.</li>
                                <li>WooCommerce redirect to cart page after a booking/reservation is added to cart, bug fixed.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="toggle-wrapper toggle-changelog hidden">
                        <a class="toggle" href="javascript:void(0)">Version 1.9.5 - 01 March 2014 <span class="icon"></span></a>
                        <div class="toggle-content">
                            <h6>New features:</h6>
                            <ul>
                                <li>"wp_mail()" function replaced with "mail()".</li>
                            </ul>

                            <h6>Bug fixes:</h6>
                            <ul>
                                <li>Booking calendar display even it is used twice on same page.</li>
                                <li>Booking order is added to WooCommerce cart even if form is removed from product page.</li>
                                <li>Booking/reservation details appear on WooCommerce notifications email.</li>
                                <li>Booking/reservation details appear on WooCommerce order.</li>
                                <li>Booking/reservation save bug fixed.</li>
                                <li>Installation on XAMP server fixed.</li>
                                <li>WooCommerce date format fixed.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="toggle-wrapper toggle-changelog hidden">
                        <a class="toggle" href="javascript:void(0)">Version 1.9 - 16 December 2013 <span class="icon"></span></a>
                        <div class="toggle-content">
                            <h6>New features:</h6>
                            <ul>
                                <li>Bookings/reservations appear in custom post type.</li>
                                <li>Config file added.</li>
                                <li>Delete booking/reservation added.</li>
                                <li>Installation algorithms have been optimized.</li>
                                <li>Set default database values before installation.</li>
                                <li>Set default language for back end and/or front end before installation.</li>
                                <li>Set default users permissions before installation.</li>
                                <li>Submit button ("Add to cart" / "Book") is hidden when you submit a booking or you add a reservation to cart.</li>
                                <li>Translation edit has been optimized.</li>
                                <li>When a booking calendar is deleted the reservations area is removed.</li>
                                <li>WooCommerce support added.</li>
                            </ul>

                            <h6>Bug fixes:</h6>
                            <ul>
                                <li>bbPress incompatibility, bug fixed.</li>
                                <li>Booking calendars not loading, bug fixed.</li>
                                <li>Bookings/reservations currency display bug fixed.</li>
                                <li>CSS bugs fixed.</li>
                                <li>Delete plugin data/database, bug fixed.</li>
                                <li>Front end translation not showing, bug fixed.</li>
                                <li>Month not displaying in booking notification emails bug fixed.</li>
                                <li>Navigation after data is saved in back end fixed.</li>
                                <li>Reservations calendar is generated correctly when filters are modified.</li>
                                <li>Save translation bug fixed.</li>
                                <li>Translation display bug fixed when using characters like ' or ", both in booking calendar and WordPress admin.</li>
                                <li>Translation edit has been optimized.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="toggle-wrapper toggle-changelog hidden">
                        <a class="toggle" href="javascript:void(0)">Version 1.8 - 01 November 2013 <span class="icon"></span></a>
                        <div class="toggle-content">
                            <h6>New features:</h6>
                            <ul>
                                <li>Add bookings/reservations in WordPress admin.</li>
                                <li>Approving/canceling a reservation modifies the booking calendar data.</li>
                                <li>Bookings/reservations logic has been completely modified (search added, filters added, calendar & list view added).</li>
                                <li>Plugin paths updated.</li>
                                <li>Prices, deposits, discounts can have float values.</li>
                                <li>Translation system has been updated.</li>
                                <li>User management updated.</li>
                            </ul>

                            <h6>Bug fixes:</h6>
                            <ul>
                                <li>Back end CSS bugs fixed.</li>
                                <li>Custom post types bugs fixed.</li>
                                <li>Edit unavailable days, bug fixed.</li>
                                <li>Front end booking calendar CSS bugs fixed.</li>
                                <li>Instant/waiting approval display, bug fixed.</li>
                                <li>JavaScript in admin posts fixed.</li>
                                <li>Localhost bugs fixed.</li>
                                <li>Select days from different months on front end booking calendar, bug fixed.</li>
                                <li>Windows server mySQL text fields bug fixed.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="toggle-wrapper toggle-changelog hidden">
                        <a class="toggle" href="javascript:void(0)">Version 1.7 - 31 July 2013 <span class="icon"></span></a>
                        <div class="toggle-content">
                            <h6>New features:</h6>
                            <ul>
                                <li>Add booking calendars in widgets.</li>
                                <li>Back end style changes.</li>
                                <li>Calendar ID is removed from clients booking notification emails.</li>
                                <li>Custom post type added.</li>
                                <li>Hours info is displayed on day hover, in booking calendar.</li>
                                <li>Major changes in booking hours logic and display.</li>
                                <li>Newly created booking forms display correct after PayPal Payment.</li>
                                <li>Send email using normal function if SMTP is incorrect.</li>
                                <li>Text on Settings page, in WordPress admin, has been changed.</li>
                                <li>Translation for check fields added.</li>
                                <li>User role is updated when is changed in WordPress admin.</li>
                                <li>When hours are enabled, days details can be set manually or set depending on hours details on that current day.</li>
                            </ul>

                            <h6>Bug fixes:</h6>
                            <ul>
                                <li>Approve booking/reservation bug fixed.</li>
                                <li>CSS bug fixes, in booking calendar.</li>
                                <li>Date select is fixed when minimum amount of days is set.</li>
                                <li>Datepicker bug fix, when you can select only one day, in booking calendar.</li>
                                <li>Drop down fields display correct selected option in booking notifications.</li>
                                <li>PayPal booking notification email content bug fixed.</li>
                                <li>Tables not created on Windows OS bug fixed.</li>
                                <li>WordPress update error fixed.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="toggle-wrapper toggle-changelog hidden">
                        <a class="toggle" href="javascript:void(0)">Version 1.6 - 15 June 2013 <span class="icon"></span></a>
                        <div class="toggle-content">
                            <h6>New features:</h6>
                            <ul>
                                <li>Admin language is different for each user, in WordPress back end.</li>
                                <li>Database update.</li>
                                <li>Display calendar id & name in notifications emails.</li>
                                <li>Display hours interval from current hour to next one.</li>
                                <li>Possibility to hide number of items select field has been added, in booking calendar.</li>
                                <li>You can set booking requests to by approved instantly, or not.</li>
                                <li>You have the possibility to calculate the total price using the last hour selected value, or not.</li>
                            </ul>

                            <h6>Bug fixes:</h6>
                            <ul>
                                <li>Compatibility fixes, in WordPress back end.</li>
                                <li>Custom booking forms tweaks.</li>
                                <li>Datepicker & Google translate incompatibility, bug fixed in booking calendar.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="toggle-wrapper toggle-changelog hidden">
                        <a class="toggle" href="javascript:void(0)">Version 1.5 - 08 June 2013 <span class="icon"></span></a>
                        <div class="toggle-content">
                            <h6>New features:</h6>
                            <ul>
                                <li>Custom booking forms added.</li>
                                <li>Email header is custom.</li>
                            </ul>

                            <h6>Bug fixes:</h6>
                            <ul>
                                <li>CSS incompatibility fixes, in front end booking calendar.</li>
                                <li>Datepicker z-index bug fixed, in front end booking calendar.</li>
                                <li>Group day date is displayed correctly after select, in front end booking calendar.</li>
                                <li>Users permissons translation fixed.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="toggle-wrapper toggle-changelog hidden">
                        <a class="toggle" href="javascript:void(0)">Version 1.4 - 03 June 2013 <span class="icon"></span></a>
                        <div class="toggle-content">
                            <h6>New features:</h6>
                            <ul>
                                <li>ACAO buster added.</li>
                                <li>Administrators can create booking calendars for users.</li>
                                <li>Booking calendar loading time is improved.</li>
                                <li>Booking notifications are sent using "wp_mail()".</li>
                                <li>Database is deleted when you delete the booking system plugin.</li>
                                <li>Display only an information calendar in front end.</li>
                                <li>Select first day of the week, in booking calendar.</li>
                                <li>Small admin changes.</li>
                                <li>Update booking notification added.</li>
                                <li>User permissions updated, in booking system back end.</li>
                            </ul>

                            <h6>Bug fixes:</h6>
                            <ul>
                                <li>Admin change language bug fixed.</li>
                                <li>Booking calendar resize on hidden elements, bug fixed.</li>
                                <li>Indonesia Rupiah currency bug fixed.</li>
                                <li>PayPal credit card payment bug fixed.</li>
                                <li>PayPal session bug fixed.</li>
                                <li>Slow admin bug fixed.</li>
                                <li>Touch devices freeze bug fixed.</li>
                                <li>Translation fixes, both in front end booking calendar and back end.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="toggle-wrapper toggle-changelog hidden">
                        <a class="toggle" href="javascript:void(0)">Version 1.3 - 13 December 2012 <span class="icon"></span></a>
                        <div class="toggle-content">
                            <h6>New features:</h6>
                            <ul>
                                <li>Deposit feature has been added, for booking requests.</li>
                                <li>Discounts by number of days booked have been added.</li>
                                <li>Front end booking calendar is responsive.</li>
                                <li>Touch devices navigation has been enabled.</li>
                                <li>You can translate the sidebar datepicker.</li>
                                <li>You can use PayPal credit card payment, for booking requests.</li>
                            </ul>

                            <h6>Bug fixes:</h6>
                            <ul>
                                <li>Booking notifications message and language bugs have been fixed.</li>
                                <li>Correct hours format is displayed, in front end booking calendar.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="toggle-wrapper toggle-changelog hidden">
                        <a class="toggle" href="javascript:void(0)">Version 1.2 - 01 November 2012 <span class="icon"></span></a>
                        <div class="toggle-content">
                            <h6>New features:</h6>
                            <ul>
                                <li>AM/PM hour format added, in front end booking calendar and WordPress admin.</li>
                                <li>Booking/reservation cancel added.</li>
                                <li>Language files added (but not translated), for front end booking calendar and back end WordPress admin.</li>
                                <li>Morning check out added, in booking calendar.</li>
                                <li>Past hours are removed from current day, in booking calendar.</li>
                                <li>Shortcode generator doesn't appear if you are not allowed to create booking calendars or you did not create any booking calendars.</li>
                                <li>You can select minimum and/or maximum amount of days that can be booked.</li>
                                <li>You can set default hours values by day(s), in WordPress admin.</li>
                            </ul>

                            <h6>Bug fixes:</h6>
                            <ul>
                                <li>Hours data save bug fixed.</li>
                                <li>Rejected booking/reservation notification email fixed.</li>
                                <li>SMTP SSL fix, when sending booking notifications.</li>
                                <li>User permissions bug fixed, in WordPress admin.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="toggle-wrapper toggle-changelog hidden">
                        <a class="toggle" href="javascript:void(0)">Version 1.1 - 05 September 2012 <span class="icon"></span></a>
                        <div class="toggle-content">
                            <h6>New features:</h6>
                            <ul>
                                <li>Administrators can view and edit users booking calendars.</li>
                                <li>Clean script to remove past days info to clear database from unnecessary data.</li>
                                <li>Database structure has been changed (now is much faster to save/load data & works on server with few resources).</li>
                                <li>Emails template system added, for booking notifications.</li>
                                <li>PayPal bugs fixed.</li>
                                <li>Reservation ID is displayed in notifications emails.</li>
                                <li>Terms & Conditions checkbox and link added.</li>
                                <li>You can now add the booking calendar sidebar in a widget area.</li>
                                <li>You can set if individual users can create or not booking calendars.</li>
                                <li>You can use SMTP to send booking notifications emails.</li>
                            </ul>

                            <h6>Bug fixes:</h6>
                            <ul>
                                <li>"ereg()" function replaced with "preg_match()".</li>
                                <li>Back end & front end CSS incompatibility fixes.</li>
                                <li>Delete booking calendar bug fixed.</li>
                                <li>Display correct month in future years, bug fixed.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="toggle-wrapper toggle-changelog hidden">
                        <a class="toggle" href="javascript:void(0)">Version 1.0 - 15 July 2012 <span class="icon"></span></a>
                        <div class="toggle-content">
                            <ul>
                                <li>Initial release of Booking System PRO (WordPress Plugin).</li>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>
            
            <div id="main">
                <section>
                    <h2>Changelog</h2>

                    <div class="toggle-wrapper">
                        <a class="toggle" href="javascript:void(0)">Version 2.0 - Beta <span class="icon"></span></a>
                        <div class="toggle-content">
                            <ul>
                                <li>NOTICE! If you intend to update from an older version most of the translation you added will be lost.</li>
                            </ul>
                            
                            <ul>
                                <li>"Coupons" added. Create voucher codes for your clients.</li>
                                <li>"Discounts" added. Give discounts for the booked period, in different time periods.</li>
                                <li>"Email templates" added. Customize your notifications directly from administration area.</li>
                                <li>"Extras" added. Add amenities, services & other stuff, with price or not, to a reservation.</li>
                                <li>"Rules" added. Currently you can set min/max time lapse.</li>
                                <li>"Taxes & fees" added. Set taxes & fees that need to be paid (VAT tax for example).</li>
                                <li>"Translation" page has been updated.</li>
                                <li>Add user permissions using custom roles.</li>
                                <li>AJAX requests no longer return 403, 404 errors in front end.</li>
                                <li>All algorithms are improved and work faster. Install, save, search ...</li>
                                <li>Back end UI/CSS has been changed. A new design has been created for administration area.</li>
                                <li>Complete code core changes. Everything is OOP & commented.</li>
                                <li>Custom post types do not appear anymore in blog posts by default.</li>
                                <li>Data save/load speed & server memory usage has been optimized.</li>
                                <li>Different levels of checking availability have been added in the booking process.</li>
                                <li>Front end UI/CSS has been changed. A new design has been created for front end calendar and all classes and ids are unique.</li>
                                <li>Language is not saved anymore in sessions in front end.</li>
                                <li>Language codes have been changed to international codes for: Albanian (al->sq), Basque (bs->eu), Belarusian (by->be), Chinese (cn->zh), Croatian (cr->hr), Czech (cz->cs), Danish (dk->da), Dutch (du->nl), Greek (gr->el), Haitian Creole(ha->ht), Irish (ir->ga), Malay (mg->ms), Maltese (ma->mt), Persian (pe->fa), Spanish (sp->es), Swedish (se->sv), Welsh (we->cy).</li>
                                <li>Languages can be enabled/disabled in back end.</li>
                                <li>Major database changes. Column changes and more indexes created.</li>
                                <li>Notifications can be enabled/disabled in administration area.</li>
                                <li>Notifications can be sent to multiple admins.</li>
                                <li>PHPMailer class is used when sending notifications.</li>
                                <li>Possibility to select more than one group of days/hours in a reservation has been added.</li>
                                <li>Translation works with special characters.</li>
                                <li>UAE Dirham currency added.</li>
                                <li>Verification if calendar has been attached to WooCommerce product has been added.</li>
                                <li>WooCommerce integration has been changed. This should fix all incompatibility problems that were in previous version.</li>
                            </ul>
                            
                            <h6>What needs to be finished before final release (if you do not need them you can use 2.0):</h6>
                            <ul>
                                <li>Custom post types</li>
                                <li>General/global settings.</li>
                                <li>Reservations back end add/edit.</li>
                                <li>Reservations calendar.</li>
                                <li>Demo website.</li>
                                <li>Documentation</li>
                                <li>Some new features may appear ...</li>
                            </ul>

                            <h6>Bug fixes (incomplete list):</h6>
                            <ul>
                                <li>Availability text is visible on special days, bug fixed.</li>
                                <li>Current year changes on calendar resize, bug fixed.</li>
                                <li>IE bugs fixed.</li>
                                <li>Required checkbox validation bug fixed.</li>
                                <li>User capabilities fixed.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="toggle-wrapper hidden">
                        <a class="toggle" href="javascript:void(0)">Version 1.9.5 - 01 March 2013 <span class="icon"></span></a>
                        <div class="toggle-content">
                            <h6>New features:</h6>
                            <ul>
                                <li>"wp_mail()" function replaced with "mail()".</li>
                            </ul>

                            <h6>Bug fixes:</h6>
                            <ul>
                                <li>Booking order is added to WooCommerce cart even if form is removed from product page.</li>
                                <li>Calendar display even it is used twice on same page.</li>
                                <li>Installation on XAMP server fixed.</li>
                                <li>Reservation details appear on WooCommerce notifications email.</li>
                                <li>Reservation details appear on WooCommerce order.</li>
                                <li>Reservation save bug fixed.</li>
                                <li>Woocommerce date format fixed.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="toggle-wrapper hidden">
                        <a class="toggle" href="javascript:void(0)">Version 1.9 - 16 December 2013 <span class="icon"></span></a>
                        <div class="toggle-content">
                            <h6>New features:</h6>
                            <ul>
                                <li>Config file added.</li>
                                <li>Delete reservation added.</li>
                                <li>front end translation not showing bug fix.</li>
                                <li>Installation algorithms have been optimized.</li>
                                <li>Reservations appear in custom post type.</li>
                                <li>Set default database values before installation.</li>
                                <li>Set default language for back end and/or front end before installation.</li>
                                <li>Set default users permissions before installation.</li>
                                <li>Submit button ("Add to cart" / "Book") is hidden when you submit a booking or you add a reservation to cart.</li>
                                <li>Translation edit has been optimized.</li>
                                <li>When a calendar is deleted the reservations area is removed.</li>
                                <li>WooCommerce support added.</li>
                            </ul>

                            <h6>Bug fixes:</h6>
                            <ul>
                                <li>bbPress incompatibility, bug fixed.</li>
                                <li>Calendars not loading, bug fixed.</li>
                                <li>CSS bugs fixed.</li>
                                <li>Delete plugin data/database, bug fixed.</li>
                                <li>front end translation not showing bug fix.</li>
                                <li>Month not displaying in notification emails bug fixed.</li>
                                <li>Navigation after data is saved in back end fixed.</li>
                                <li>Reservations calendar is generated correctly when filters are modified.</li>
                                <li>Reservations currency display bug fixed.</li>
                                <li>Save translation bug fixed.</li>
                                <li>Translation display bug fixed when using characters like ' or ".</li>
                                <li>Translation edit has been optimized.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="toggle-wrapper hidden">
                        <a class="toggle" href="javascript:void(0)">Version 1.8 - 01 November 2013 <span class="icon"></span></a>
                        <div class="toggle-content">
                            <h6>New features:</h6>
                            <ul>
                                <li>Add reservations in admin.</li>
                                <li>Approving/canceling a reservation modifies the calendar data.</li>
                                <li>Plugin paths updated.</li>
                                <li>Prices, deposits, discounts can have float values.</li>
                                <li>Reservations logic has been completely modified (search added, filters added, calendar & list view added).</li>
                                <li>Translation system has been updated.</li>
                                <li>User management updated.</li>
                            </ul>

                            <h6>Bug fixes:</h6>
                            <ul>
                                <li>Back end CSS bugs fixed.</li>
                                <li>Custom post types bugs fixed.</li>
                                <li>Edit unavailable days, bug fixed.</li>
                                <li>Front end CSS bugs fixed.</li>
                                <li>Instant/waiting approval display, bug fixed.</li>
                                <li>JavaScript in admin posts fixed.</li>
                                <li>Localhost bugs fixed.</li>
                                <li>Select days from different months on front end calendar, bug fixed.</li>
                                <li>Windows server mySQL text fields bug fixed.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="toggle-wrapper hidden">
                        <a class="toggle" href="javascript:void(0)">Version 1.7 - 31 July 2013 <span class="icon"></span></a>
                        <div class="toggle-content">
                            <h6>New features:</h6>
                            <ul>
                                <li>Add calendars in widgets.</li>
                                <li>Back end style changes.</li>
                                <li>Calendar ID is removed from clients notification emails.</li>
                                <li>Custom post type added.</li>
                                <li>Hours info displayed on day hover.</li>
                                <li>Major changes in hours logic and display.</li>
                                <li>Newly created forms display correct after PayPal Payment.</li>
                                <li>Send email using normal function if SMTP is incorrect.</li>
                                <li>Text on Settings page has been changed.</li>
                                <li>Translation for check fields added.</li>
                                <li>User role is updated when is changed in WP admin.</li>
                                <li>When hours are enabled days details can be set manually or set depending on hours details on that current day.</li>
                            </ul>

                            <h6>Bug fixes:</h6>
                            <ul>
                                <li>Approve reservation bug fixed.</li>
                                <li>CSS bug fixes.</li>
                                <li>Date select is fixed when minimum amount of days is set.</li>
                                <li>Datepicker bug fix, when you can select only one day.</li>
                                <li>Drop down fields display correct selected option in email.</li>
                                <li>PayPal notification email content bug fixed.</li>
                                <li>Tables not created on Windows OS bug fixed.</li>
                                <li>WordPress update error fixed.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="toggle-wrapper hidden">
                        <a class="toggle" href="javascript:void(0)">Version 1.6 - 15 June 2013 <span class="icon"></span></a>
                        <div class="toggle-content">
                            <h6>New features:</h6>
                            <ul>
                                <li>Admin language is different for each user.</li>
                                <li>Database update.</li>
                                <li>Display calendar id & name in notifications emails.</li>
                                <li>Display hours interval from current hour to next one.</li>
                                <li>Posibility to hide number of items select field has been added.</li>
                                <li>You can set booking requests to by approved instanly, or not.</li>
                                <li>You have the possibility to calculate the total price using the last hour selected value, or not.</li>
                            </ul>

                            <h6>Bug fixes:</h6>
                            <ul>
                                <li>Compatibility fixes.</li>
                                <li>Custom forms tweaks.</li>
                                <li>Datepicker & Google translate incompatibility, bug fixed.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="toggle-wrapper hidden">
                        <a class="toggle" href="javascript:void(0)">Version 1.5 - 08 June 2013 <span class="icon"></span></a>
                        <div class="toggle-content">
                            <h6>New features:</h6>
                            <ul>
                                <li>Custom forms added.</li>
                                <li>Email header is custom.</li>
                            </ul>

                            <h6>Bug fixes:</h6>
                            <ul>
                                <li>CSS incompatibility fixes.</li>
                                <li>Datepicker z-index bug fixed.</li>
                                <li>Group day date is displayed correctly after select.</li>
                                <li>Users permissons translation fixed.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="toggle-wrapper hidden">
                        <a class="toggle" href="javascript:void(0)">Version 1.4 - 03 June 2013 <span class="icon"></span></a>
                        <div class="toggle-content">
                            <h6>New features:</h6>
                            <ul>
                                <li>ACAO buster added.</li>
                                <li>Administrators can create calendars for users.</li>
                                <li>Calendar loading time is improved.</li>
                                <li>Database is deleted when you delete the plugin.</li>
                                <li>Display only an information calendar in front end.</li>
                                <li>Emails are sent using "wp_mail()".</li>
                                <li>Select first day of the week.</li>
                                <li>Small admin changes.</li>
                                <li>Update notification added.</li>
                                <li>User permissions updated.</li>
                            </ul>

                            <h6>Bug fixes:</h6>
                            <ul>
                                <li>Admin change language bug fixed.</li>
                                <li>Calendar resize on hidden elements, bug fixed.</li>
                                <li>Indonesia Rupiah currency bug fixed.</li>
                                <li>PayPal credit card payment bug fixed.</li>
                                <li>PayPal session bug fixed.</li>
                                <li>Slow admin bug fixed.</li>
                                <li>Touch devices freeze bug fixed.</li>
                                <li>Translation fixes.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="toggle-wrapper hidden">
                        <a class="toggle" href="javascript:void(0)">Version 1.3 - 13 December 2012 <span class="icon"></span></a>
                        <div class="toggle-content">
                            <h6>New features:</h6>
                            <ul>
                                <li>Deposit feature has been added.</li>
                                <li>Discounts by number of days booked have been added.</li>
                                <li>Front end responsive has been added.</li>
                                <li>Touch devices navigation has been enabled.</li>
                                <li>You can translate the sidebar datepicker.</li>
                                <li>You can use PayPal credit card payment.</li>
                            </ul>

                            <h6>Bug fixes:</h6>
                            <ul>
                                <li>Correct hours format is displayed.</li>
                                <li>Email message and language bugs have been fixed.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="toggle-wrapper hidden">
                        <a class="toggle" href="javascript:void(0)">Version 1.2 - 01 November 2012 <span class="icon"></span></a>
                        <div class="toggle-content">
                            <h6>New features:</h6>
                            <ul>
                                <li>AM/PM hour format added.</li>
                                <li>Language files added (but not translated).</li>
                                <li>Morning check out added.</li>
                                <li>Past hours are removed from current day.</li>
                                <li>Reservation cancel added.</li>
                                <li>Shortcode generator doesn't appear if you are not allowed to create calendars or you didn't create any calendars.</li>
                                <li>You can select minimum and/or maximum amount of days that can be booked.</li>
                                <li>You can set default hours values by day(s).</li>
                            </ul>

                            <h6>Bug fixes:</h6>
                            <ul>
                                <li>Hours data save bug fixed.</li>
                                <li>Rejected reservation notification email fixed.</li>
                                <li>SMTP SSL fix.</li>
                                <li>User permissions bug fixed.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="toggle-wrapper hidden">
                        <a class="toggle" href="javascript:void(0)">Version 1.1 - 05 September 2012 <span class="icon"></span></a>
                        <div class="toggle-content">
                            <h6>New features:</h6>
                            <ul>
                                <li>Administrators can view and edit users calendars.</li>
                                <li>Clean script to remove past days info to clear database from unnecessary data.</li>
                                <li>Database structure has been changed (now is much faster to save/load data & works on server with few resources).</li>
                                <li>Emails template system added.</li>
                                <li>PayPal bugs fixed.</li>
                                <li>Reservation ID is displayed in notifications emails.</li>
                                <li>Terms & Conditions checkbox and link added.</li>
                                <li>You can now add calendar sidebar in a widget area.</li>
                                <li>You can set if individual users can create or not calendars.</li>
                                <li>You can use SMTP to send notification emails.</li>
                            </ul>

                            <h6>Bug fixes:</h6>
                            <ul>
                                <li>"ereg()" function replaced with "preg_match()".</li>
                                <li>Back end & front end CSS incompatibility fixes.</li>
                                <li>Delete calendar bug fixed.</li>
                                <li>Display correct month in future years, bug fixed.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="toggle-wrapper hidden">
                        <a class="toggle" href="javascript:void(0)">Version 1.0 - 15 July 2012 <span class="icon"></span></a>
                        <div class="toggle-content">
                            <ul>
                                <li>Initial release.</li>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>
            
            <div id="main">
                <section>
                    <h2>Front end - The code</h2>
                    
                    <p>
                        Add the plugin to a container (HTML tag, class or id).
                    </p>
                </section>
                
                <section>
                    <h2>DOPBSCalendarView.m  :</h2>
                    
<pre>
#define calendarId @"0"
#define calendarYear @"2015" 

#define jsonLinkData @"http://dopstudios.net/envato/jquery/booking-calendar-pro/dopbcp/php-file/load.php"
#define jsonLinkFormData @"http://dopstudios.net/envato/jquery/booking-calendar-example-pro/dopbcp/php-file/load-calendar.php?calendar=0"
</pre>
                    
                    <p>
                        Define the macros above to start your application calendar.
                    </p>
                    
                    <h2>DOPBSCalendarView.m</h2>
                    <strong> – (void)initFirstDay</strong>
                    <p>
                        Depending on the device define the container width of the calendar (containerWidth constant) by setting properly the following variables:
                    </p>
                    <ul>
                        <li>iPadCalendarWidth</li>
                        <li>iPhoneCalendarWidth</li>
                    </ul>
                   
                </section> 
                
                <section>
                    <h2>JSON</h2>
                    
                    <p>
                        You can add the following options to the front end version of the plugin iOS application:
                    </p>
                    <ul class="settings">
                        <li>
                            <div class="property">loadURL</div>
                            <div class="info">Default value: 'dopbcp/php-file/load.php'.<br />URL from were JSON data is loaded.</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property">sendURL</div>
                            <div class="info">Default value: 'dopbcp/php-file/send.php'.<br />URL from were JSON reservation data is saved.</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property">reinitialize</div>
                            <div class="info">Default value: false.<br />reinitialize the calendar if already loaded.</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property">calendar</div>
                            <div class="info">calendar contains 2 attributes: data and text</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property second">data</div>
                            <div class="info">data is used to change calendar configuration</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property third">bookingStop</div>
                            <div class="info">Default value: 0.<br /> Set the number of minutes before the booking is stopped in advance. For 1 hour you have 60 minutes, for 1 day you have 1440 minutes.</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property third">dateType</div>
                            <div class="info">Default value: 0.<br /> Select date format: 0 for American (mm dd, yyyy) or 1 for European (dd mm yyyy).</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property third">language</div>
                            <div class="info">Default value: en.<br /> Set your calendar language.</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property third">languages</div>
                            <div class="info">Default value: [].<br /> Set your calendar languages.</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property third">view</div>
                            <div class="info">Default value: false.<br /> Set true to display only booking information in calendar.</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property second">text</div>
                            <div class="info">text is used to change calendar texts</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property third">addMonth</div>
                            <div class="info">Default value: 'Add month view'.<br /> Add Month View button title (plus icon).</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property third">available</div>
                            <div class="info">Default value: 'available'.<br /> available text</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property third">availableMultiple</div>
                            <div class="info">Default value: 'available'.<br /> available multiple text</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property third">booked</div>
                            <div class="info">Default value: 'booked'.<br /> Booked Day text.</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property third">nextMonth</div>
                            <div class="info">Default value: 'Next month'.<br /> Next Month button title.</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property third">previousMonth</div>
                            <div class="info">Default value: 'Previous month'.<br /> Previous Month button title.</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property third">removeMonth</div>
                            <div class="info">Default value: 'Remove month view'.<br /> Remove Month View button title (minus icon).</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property third">unavailable</div>
                            <div class="info">Default value: 'unavailable'.<br /> Unavailable Day text.</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property">currency</div>
                            <div class="info">currency contains 2 attributes: data and text.</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property second">data</div>
                            <div class="info">data is used to change currency configuration</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property third">code</div>
                            <div class="info">Default value: 'USD'.<br /> Set calendar currency.</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property third">position</div>
                            <div class="info">Default value: 'before'.<br /> Set your currency position.</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property third">sign</div>
                            <div class="info">Default value: '$'.<br /> Set your currency sign.</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property">days</div>
                            <div class="info">days contains 2 attributes: data and text.</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property second">data</div>
                            <div class="info">data is used to change days configuration</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property third">available</div>
                            <div class="info">Default value: [true, true, true, true, true, true, true].<br /> Set available/unavailable days starting with Monday.</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property third">first</div>
                            <div class="info">Default value: 1.<br /> Set the first day of the week (1 = Monday, 2 = Tuesday, 3 = Wednesday, 4 = Thursday, 5 = Friday, 6 = Saturday, 7 = Sunday)</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property third">morningCheckOut</div>
                            <div class="info">Default value: false.<br /> This option enables "Check in" in the afternoon of first day and "Check out" in the morning of the day after last day.</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property third">multipleSelect</div>
                            <div class="info">Default value: true.<br /> Use Check in/Check out or select only one day.</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property second">text</div>
                            <div class="info">text is used to change days texts</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property third">names</div>
                            <div class="info">Default value: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'].<br /> Weekdays long names.</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property third">shortNames</div>
                            <div class="info">Default value: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'].<br /> Weekdays short names.</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property">form</div>
                            <div class="info">Form</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property second">data</div>
                            <div class="info">data is used to change form configuration</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property third">form</div>
                            <div class="info">Form fields</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property last">id</div>
                            <div class="info">Default value: '1'.<br /> Field id</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property last">form_id</div>
                            <div class="info">Default value: '1'.<br /> Form id</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property last">type</div>
                            <div class="info">Default value: 'text'.<br /> Field type</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property last">position</div>
                            <div class="info">Default value: '1'.<br /> Field position</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property last">multiple_select</div>
                            <div class="info">Default value: 'false'.<br /> Set true if you want to select multiple options from this field.</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property last">allowed_characters</div>
                            <div class="info">Default value: ''.<br /> Enter the caracters allowed in this field. Leave it blank if all characters are allowed.</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property last">size</div>
                            <div class="info">Default value: '0'.<br /> Enter the maximum number of characters allowed. Leave it blank for unlimited.</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property last">is_email</div>
                            <div class="info">Default value: 'false'.<br /> Set true if you want this field to be verified if an email has been added or not.</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property last">required</div>
                            <div class="info">Default value: 'true'.<br /> Set true if you want the field to be mandatory.</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property last">translation</div>
                            <div class="info">Default value: 'New Field'.<br /> Field label</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property second">text</div>
                            <div class="info">text is used to change form texts</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property third">checked</div>
                            <div class="info">Default value: 'Checked'.<br /> Checked text</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property third">invalidEmail</div>
                            <div class="info">Default value: 'is invalid. Please enter a valid email.'.<br /> Invalid email text</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property third">required</div>
                            <div class="info">Default value: 'is required.'.<br /> Is required text</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property third">title</div>
                            <div class="info">Default value: 'Contact information'.<br /> form title text</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property third">unchecked</div>
                            <div class="info">Default value: 'Unchecked'.<br /> unchecked text</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property">ID</div>
                            <div class="info">Default value: 0.<br /> Calendar ID. Change it if you have more then one calendar.</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property">months</div>
                            <div class="info">Calendar months.</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property second">data</div>
                            <div class="info">data is used to change months configuration</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property third">no</div>
                            <div class="info">Default value: 1.<br /> Set the number of months initialy displayed.</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property second">text</div>
                            <div class="info">text is used to change months texts</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property third">names</div>
                            <div class="info">Default value: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'].<br /> Months long names.</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property third">shortNames</div>
                            <div class="info">Default value: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'].<br /> Months short names.</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property">order</div>
                            <div class="info">Order.</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property second">data</div>
                            <div class="info">data is used to change order configuration</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property third">redirect</div>
                            <div class="info">Default value: ''.<br /> Set the link where want to be redirected after booking is done. Leave it empty if you don't redirect.</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property third">terms</div>
                            <div class="info">Default value: false.<br /> Set true if you want to enable terms and conditions.</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property third">termsLink</div>
                            <div class="info">Default value: ''.<br /> Set the terms and condition link. Leave it empty if you don't want terms and condition.</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property second">text</div>
                            <div class="info">text is used to change order texts</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property third">book</div>
                            <div class="info">Default value: 'Book now'.<br /> book button</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property third">success</div>
                            <div class="info">Default value: 'Reservation has been added!'.<br /> Reservation success message</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property third">terms</div>
                            <div class="info">Default value: 'I accept to agree to the Terms & Conditions.'.<br /> Terms and conditions label</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property third">termsInvalid</div>
                            <div class="info">Default value: 'You must agree with our Terms & Conditions to continue.'.<br /> Terms & condtions - error message</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property third">title</div>
                            <div class="info">Default value: 'Order'.<br /> Order title</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property third">unavailable</div>
                            <div class="info">Default value: 'The period you selected is not available anymore. The calendar will refresh to update the schedule.'.<br /> Error message for unavailable selected period</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property">reservation</div>
                            <div class="info">Reservation.</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property second">text</div>
                            <div class="info">text is used to change reservation texts</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property third">price</div>
                            <div class="info">Default value: 'Price'.<br /> Reservation price text</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property third">priceChange</div>
                            <div class="info">Default value: 'Price change'.<br /> Reservation Price change text</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property third">priceTotal</div>
                            <div class="info">Default value: 'Total'.<br /> Reservation Total text</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property third">selectDays</div>
                            <div class="info">Default value: 'Please select the days from calendar.'.<br /> Reservation select days text</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property third">title</div>
                            <div class="info">Default value: 'Reservation'.<br /> Reservation title</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property third">titleDetails</div>
                            <div class="info">Default value: 'Details'.<br /> Reservation Details title</div>
                            <br class="clear" />
                        </li>
                    </ul>
                </section>
            </div>
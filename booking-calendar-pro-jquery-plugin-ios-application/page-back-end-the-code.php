            
            <div id="main">
                <section>
                    <h2>Back end - The code</h2>
                    
                    <p>
                        Add the plugin to a container (HTML tag, class or id).
                    </p>
                </section>
                
                <section>
                    <h2>Simple Calendar example</h2>
                    
                    <p>
                        To display the booking calendar please use the following example:
                    </p>
<pre>
$('#backend').DOPBackendBookingCalendarPRO();
</pre>
                    
                    <h2>Custom Calendar example</h2>
                    
                    <p>
                        To display the booking calendar with custom settings please read the JSON section and use the following example:
                    </p>
<pre>
$('#backend').DOPBackendBookingCalendarPRO({
    'ID': 1,
    'loadURL': 'dopbcp/php-database/load.php',
    'saveURL': 'dopbcp/php-database/save.php'
});
</pre>
                </section>
                
                <section>
                    <h2>JSON</h2>
                    
                    <p>
                        You can add the following options to the back end version of the plugin:
                    </p>
                    <ul class="settings">
                        <li>
                            <div class="property">AddtMonthViewText</div>
                            <div class="info">Default value: 'Add Month View'.<br />Add Month View button title (plus icon).</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property">AvailableLabel</div>
                            <div class="info">Default value: 'No. Available'.<br />Form label for Number of Available Items.</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property">AvailableOneText</div>
                            <div class="info">Default value: 'available'.<br />Available Day text for one item.</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property">AvailableText</div>
                            <div class="info">Default value: 'available'.<br />Available text for more items.</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property">BookedText</div>
                            <div class="info">Default value: 'booked'.<br />Booked Day text.</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property">Currency</div>
                            <div class="info">Default value: '$'.<br />Currency icon.</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property">DateEndLabel</div>
                            <div class="info">Default value: 'End Date'.<br />Form label for End Date.</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property">DateStartLabel</div>
                            <div class="info">Default value: 'Start Date'.<br />Form label for Start Date.</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property">DateType</div>
                            <div class="info">Default value: 1.<br />Form date display type (1 = American, 2 = European)</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property">GroupDaysLabel</div>
                            <div class="info">Default value: 'Group Days'.<br />Form label for Group Days checkbox.</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property">ID</div>
                            <div class="info">Default value: 0.<br />Calendar ID. Change it if you have more then one calendar. Make it the same as the Front End version.</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property">InfoLabel</div>
                            <div class="info">Default value: 'Information (users will see this message)'.<br />Form label for Information field.</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property">NextMonthText</div>
                            <div class="info">Default value: 'Next Month'.<br />Next Month button title.</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property">NotesLabel</div>
                            <div class="info">Default value: 'Notes (only you will see this message)'.<br />Form label for Notes field.</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property">PreviousMonthText</div>
                            <div class="info">Default value: 'Previous Month'.<br />Previous Month button title.</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property">PriceLabel</div>
                            <div class="info">Default value: 'Price'.<br />Form label for Price Field.</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property">PromoLabel</div>
                            <div class="info">Default value: 'Promo Price'.<br />Form label for Promo Price field.</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property">reinitialize</div>
                            <div class="info">Default value: false.<br />reinitialize the calendar if already loaded.</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property">RemoveMonthViewText</div>
                            <div class="info">Default value: 'Remove Month View'.<br />Remove Month View button title (minus icon).</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property">ResetConfirmation</div>
                            <div class="info">Default value: 'Are you sure you want to reset data?'.<br />Form Reset Confirmation text.</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property">StatusAvailableText</div>
                            <div class="info">Default value: 'Available'.<br />Form Status - Available text.</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property">StatusBookedText</div>
                            <div class="info">Default value: 'Booked'.<br />Form Status - Booked text.</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property">StatusLabel</div>
                            <div class="info">Default value: 'Status'.<br />Form label for Status Select field.</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property">StatusSpecialText</div>
                            <div class="info">Default value: 'Special'.<br />Form Status - Special text.</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property">StatusUnavailableText</div>
                            <div class="info">Default value: 'Unavailable'.<br />Form Status - Unavailable text.</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property">UnavailableText</div>
                            <div class="info">Default value: 'unavailable'.<br />Unavailable Day text.</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property">LoadedText</div>
                            <div class="info">Default value: 'Calendar data loaded successfully.'.<br />Calendar data loaded successfully text for loader message.</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property">SavedText</div>
                            <div class="info">Default value: 'Calendar data saved successfully.'.<br />Calendar data saved successfully text for loader message.</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property">SavingText</div>
                            <div class="info">Default value: 'Saving calendar...'.<br />Saving calendar text for loader message.</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property">LoadingText</div>
                            <div class="info">Default value: 'Loading calendar...'.<br />Loading calendar text for loader message.</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property">loadURL</div>
                            <div class="info">Default value: 'dopbcp/php-file/load.php'.<br />URL from were JSON data is loaded.</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property">saveURL</div>
                            <div class="info">Default value: 'dopbcp/php-file/save.php'.<br />URL from were JSON data is saved.</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property">form</div>
                            <div class="info">form contains 2 attributes: data and text.<br /></div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property second">data</div>
                            <div class="info">data is used to change form configuration<br /></div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property third">style</div>
                            <div class="info">Default value: 5<br />Form style: 1, 2, 3, 4 ,5.</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property second">text</div>
                            <div class="info">text is used to change form texts<br /></div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property third">checkIn</div>
                            <div class="info">Default value: 'Check in'<br />Check in text for form.</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property third">checkOut</div>
                            <div class="info">Default value: 'Check out'<br />Check out text for form.</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property third">submit</div>
                            <div class="info">Default value: 'Submit'<br />Submit text button.</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property third">reset</div>
                            <div class="info">Default value: 'Reset'<br />Reset text button.</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property">days</div>
                            <div class="info">days contains 2 attributes: data and text.<br /></div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property second">data</div>
                            <div class="info">data is used to change days configuration<br /></div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property third">available</div>
                            <div class="info">Default value: [true, true, true, true, true, true, true].<br />Set available/unavailable days starting with Monday.</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property third">first</div>
                            <div class="info">Default value: 1.<br />Set the first day of the week (1 = Monday, 2 = Tuesday, 3 = Wednesday, 4 = Thursday, 5 = Friday, 6 = Saturday, 7 = Sunday)</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property second">text</div>
                            <div class="info">text is used to change days texts<br /></div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property third">names</div>
                            <div class="info">Default value: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'].<br />Weekdays long names.</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property third">shortNames</div>
                            <div class="info">Default value: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'].<br />Weekdays short names.</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property">months</div>
                            <div class="info">months contains 2 attributes: data and text.<br /></div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property second">data</div>
                            <div class="info">data is used to change month configuration<br /></div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property third">no</div>
                            <div class="info">Default value: 1.<br />Set the number of months initialy displayed.</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property second">text</div>
                            <div class="info">text is used to change months texts<br /></div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property third">names</div>
                            <div class="info">Default value: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'].<br />Months long names.</div>
                            <br class="clear" />
                        </li>
                        <li>
                            <div class="property third">shortNames</div>
                            <div class="info">Default value: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'].<br />Months short names.</div>
                            <br class="clear" />
                        </li>
                    </ul>
                </section>
            </div>
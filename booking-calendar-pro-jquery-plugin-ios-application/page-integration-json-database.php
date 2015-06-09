            
            <div id="main">
                <section>
                    <h2>Integration & JSON/Database structure</h2>
                    
                    <p>
                        The calendar receives and saves data in a JSON format.
                    </p>
                </section>
                
                <section>
                    <h2>JSON Structure</h2>
                    
<pre style="font-size: 11px;">
{
    "YYYY-MM-DD":{"available": "", // Number of Available Items
                  "bind": 0, // Set if a day is a part of a group (0 = none; 1 = first day of a group; 2 = in the group; 3 = last day of a group)
                  "info": "", // Day informations
                  "notes": "", // Day notes
                  "price": "", // Price
                  "promo": "", // Promotional Price
                  "status": ""}, // Day status (none, available, booked, special, unavailable)
    // Another day              
    "YYYY-MM-DD":{"available": "",
                  "bind": 0,
                  "info": "",
                  "notes": "",
                  "price": "",
                  "promo": "",
                  "status": ""}
}
</pre>
                    
                    <p>
                        You can connect the plugin to your own script to get data using <strong>loadURL</strong> option
                    </p>
                    <p>
                        You will receive a POST variable in your script named <strong>dopbcp_calendar_id</strong> representing Calendar ID. You can pass any variable using GET method.
                    </p>
                    
                    <h2>Make sure you parse the JSON in the above format.</h2>
<pre>
$('#frontend').DOPFrontendBookingCalendarPRO({
    'ID': 1,
    'loadURL': 'your-script.php?var1=value1&var2=value2'
});
</pre>
                    
                    <p>
                        You can connect the plugin to your own script to get save using <strong>saveURL</strong> option.
                    </p>
                    <p>
                        You will receive 2 POST variables in your script named <strong>dopbcp_calendar_id</strong>, representing Calendar ID, and <strong>dopbcp_schedule</strong>, representing the calendar data saved in the above JSON format. You can pass any variable using GET method.
                    </p>
<pre>
$('#backend').DOPBackendBookingCalendarPRO({
    'ID': 1,
    'saveURL': 'your-script.php?var1=value1&var2=value2'
});
</pre>
                </section>
                
                <section>
                    <h2>Database Structure</h2>
                    
                    <p>
                        In the example I provide you have 2 fields:
                    </p>
                    <ul>
                        <li>
                            <strong>id</strong> type INT - calendar id
                        </li>
                        <li>
                            <strong>data</strong> type TEXT - were jSON is saved
                        </li>
                    </ul>
                    
                    <p>
                        Please take into consideration that you can save the JSON into a file or you can break it to save the data into your own database structure.
                    </p>
                </section>
            </div>
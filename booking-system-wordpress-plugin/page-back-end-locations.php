            
            <div id="main">
                <section>
                    <h2>Back end - Locations</h2>
                    
                    <p>
                        In this back end section you can create locations on a Google map, and add calendars to it. Each location can have multiple calendars which is ideal for business models that need to create more of them.
                    </p>
                    <p>
                        A location will display in <a href="?page=back-end-search" target="_parent">Search</a> Google map results if the assigned calendars are available.
                    </p>
                </section>
                
                <section id="search-create-edit">
                    <!--
                        Toggle buttons
                    -->
                    <a href="javascript:toggle('back-end-locations', 'hide')" class="toggle-all hide">
                        <span class="label">Close all</span>
                        <span class="icon"></span>
                    </a>
                    <a href="javascript:toggle('back-end-locations', 'display')" class="toggle-all display">
                        <span class="label">Open all</span>
                        <span class="icon"></span>
                    </a>
                    <br class="clear" />
                    
                    <!--
                        Add a location.
                    -->
                    <div class="toggle-wrapper toggle-back-end-locations displayed">
                        <a class="toggle" href="javascript:void(0)">Add a location <span class="icon"></span></a>
                        <div class="toggle-content">
                            <ul>
                                <li><strong>Step 1</strong> - Click the <strong class="bold">plus</strong> button to add a new location.</li>
                            </ul>
                            <p>
                                <img src="http://envato-help.dotonpaper.net/booking-system-wordpress-plugin/content/locations/back-end-location-add.jpg" alt="Booking System WordPress Plugin - Add location in back end" title="Booking System WordPress Plugin - Add location in back end" />
                            </p>
                            <p>
                                After you clicked the button, the location will appear in the list below.
                            </p>
                            
                        </div>
                    </div>
                    
                    <!--
                        Set search data.
                    -->
                    <div class="toggle-wrapper toggle-back-end-search displayed">
                        <a class="toggle" href="javascript:void(0)">Set location data <span class="icon"></span></a>
                        <div class="toggle-content">
                            <ul>
                                <li><strong class="bold">Step 1</strong> - Select the location from the list to display the data.</li>
                            </ul>
                            <p>
                                <img src="http://envato-help.dotonpaper.net/booking-system-wordpress-plugin/content/locations/back-end-location-set.jpg" alt="Booking System WordPress Plugin - Set location data in back end" title="Booking System WordPress Plugin - Set location data in back end" />
                            </p>
                            <ul>
                                <li><strong>Item 2</strong> - Change name.</li>
                                <li><strong>Item 3</strong> - Enter the address of the location. Google maps API will display hints depending on what you enter.</li>
                                <li><strong>Item 4</strong> - You can drag the marker on the map to point the exact location and to select the address.</li>
                                <li><strong>Item 5</strong> - If Google maps API does not display the correct address, but the marker is in the right position, you can enter manually the address you want to display.</li>
                                <li><strong>Item 6</strong> - Select the calendars that will be available at this location.</li>
                                <li><strong>Button 7</strong> - Delete location.</li>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>
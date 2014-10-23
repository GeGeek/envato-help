            
            <div id="main">
                <section>
                    <h2>Back end - Locations</h2>
                    
                    <p>
                        In this back end section you can create locations on a google map, and add calendars to it. Each location can have multiple calendars which is ideal for business models that need to create more of them.
                    </p>
                    <p>
                        A location will display in <a href="?page=back-end-search" target="_parent">Search</a> google map results if the assigned calendars are available.
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
                            <!--
                            <ul>
                                <li><strong>Step 1</strong> - Click the <strong class="bold">plus</strong> button to add a new search item.</li>
                            </ul>
                            <p>
                                <img src="http://envato-help.dotonpaper.net/booking-system-wordpress-plugin/content/search/back-end-search-add.jpg" alt="Booking System WordPress Plugin - Add search in back end" title="Booking System WordPress Plugin - Add search in back end" />
                            </p>
                            <p>
                                After you clicked the button, the search item will appear in the list below.
                            </p>
                            -->
                        </div>
                    </div>
                    
                    <!--
                        Set search data.
                    -->
                    <div class="toggle-wrapper toggle-back-end-search displayed">
                        <a class="toggle" href="javascript:void(0)">Set location data <span class="icon"></span></a>
                        <div class="toggle-content">
                            <!--
                            <ul>
                                <li><strong class="bold">Step 1</strong> - Select the search item from the list to display the data.</li>
                            </ul>
                            <p>
                                <img src="http://envato-help.dotonpaper.net/booking-system-wordpress-plugin/content/search/back-end-search-set.jpg" alt="Booking System WordPress Plugin - Set search data in back end" title="Booking System WordPress Plugin - Set search data in back end" />
                            </p>
                            <ul>
                                <li><strong>Item 2</strong> - Change name.</li>
                                <li><strong>Item 3</strong> - Exclude calendars from search. Only calendars that have a post/page ID attached and have availability set only for hours or only for days, depending on search item settings, are displayed.</li>
                                <li><strong>Button 4</strong> - Display search item data.</li>
                                <li><strong>Button 5</strong> - Display search item settings.</li>
                                <li><strong>Button 6</strong> - Delete search item.</li>
                            </ul>
                            -->
                        </div>
                    </div>
                </section>
            </div>
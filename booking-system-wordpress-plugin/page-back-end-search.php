            
            <div id="main">
                <section>
                    <h2>Back end - Search</h2>
                    
                    <p>
                        Here you can create search items, to filter calendars availability, and customize them to your needs. An unlimited number of of search items can be created, with different options, and used on your website.
                    </p>
                    
                    <ol>
                        <li>
                            <a href="#search-important-information">Important information</a>
                        </li>
                        <li>
                            <a href="#search-create-edit">Create & edit an search item</a>
                        </li>
                        <li>
                            <a href="#search-settings">Search item settings</a>
                        </li>
                    </ol>
                </section>
                
                <section id="search-important-information">
                    <h4>Important information</h4>
                    
                    <p>
                        There are a set of conditions for the calendars to be displayed in search results:
                    </p>
                    <ul>
                        <li>
                            <p>
                                A search can be used only for days or only for hours, so if the hours are enabled, only calendars that have availability set for hours will be displayed ... if the hours are disabled, in search settings, only calendars that have availability set for days will be displayed. This will change in the future, to search both models, with the possibility to enable/disable it.                                
                            </p>
                            <br />
                        </li>
                        <li>
                            <p>
                                Each calendar need to have a post/page ID attached to it. This is because search results display: post featured image, excerpt (description) and the link of the page/post where the calendar is displayed.
                            </p>
                            <p>
                                If you create a custom posts type the post ID is attached automatically, but for calendars that are added in pages using shortcodes you need to add the post/page ID manually.
                            </p>
                            <p>
                                To attach the page/post ID manually to a calendar go to:<br />
                                <strong><em>WordPress back end -> Booking System PRO -> Calendars -> Select the calendar -> Edit calendar settings</em></strong><br />
                                ... and enter the ID in <strong>Post ID</strong> option. To find the post/page ID please read this <a href="http://codex.wordpress.org/FAQ_Working_with_WordPress#How_do_I_determine_a_Post.2C_Page.2C_Category.2C_Tag.2C_Link.2C_Link_Category.2C_or_User_ID.3F" target="_blank">instructions</a> from WordPress codex.
                            </p>
                            <p>
                                <img src="http://envato-help.dotonpaper.net/booking-system-wordpress-plugin/content/search/back-end-search-post-id.jpg" alt="Booking System WordPress Plugin - Calendar post ID" title="Booking System WordPress Plugin - Calendar post ID" />
                            </p>
                            <br />
                        </li>
                        <li>
                            <p>
                                For calendars to appear in search map you need to attach them to locations. Please view <a href="?page=back-end-locations" target="_parent">Locations</a> documentation for more informations.
                            </p>
                            <br />
                        </li>
                        <li>
                            <p>
                                Calendars created before version 2.0.4 must have availability set again. This is because available days/hours need to be indexed for a faster search.
                            </p>
                        </li>
                    </ul>
                </section>
                
                <section id="search-create-edit">
                    <h2>Create & edit an search item</h2>
                    
                    <!--
                        Toggle buttons
                    -->
                    <a href="javascript:toggle('back-end-search', 'hide')" class="toggle-all hide">
                        <span class="label">Close all</span>
                        <span class="icon"></span>
                    </a>
                    <a href="javascript:toggle('back-end-search', 'display')" class="toggle-all display">
                        <span class="label">Open all</span>
                        <span class="icon"></span>
                    </a>
                    <br class="clear" />
                    
                    <!--
                        Add search item.
                    -->
                    <div class="toggle-wrapper toggle-back-end-search displayed">
                        <a class="toggle" href="javascript:void(0)">Add an search item <span class="icon"></span></a>
                        <div class="toggle-content">
                            <ul>
                                <li><strong>Step 1</strong> - Click the <strong class="bold">plus</strong> button to add a new search item.</li>
                            </ul>
                            <p>
                                <img src="http://envato-help.dotonpaper.net/booking-system-wordpress-plugin/content/search/back-end-search-add.jpg" alt="Booking System WordPress Plugin - Add search in back end" title="Booking System WordPress Plugin - Add search in back end" />
                            </p>
                            <p>
                                After you clicked the button, the search item will appear in the list below.
                            </p>
                        </div>
                    </div>
                    
                    <!--
                        Set search data.
                    -->
                    <div class="toggle-wrapper toggle-back-end-search displayed">
                        <a class="toggle" href="javascript:void(0)">Set an search item data <span class="icon"></span></a>
                        <div class="toggle-content">
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
                        </div>
                    </div>
                </section>
                
                <section id="search-settings">
                    <h2>Search item settings</h2>
                    
                    <!--
                        Toggle buttons
                    -->
                    <a href="javascript:toggle('back-end-search-settings', 'hide')" class="toggle-all hide">
                        <span class="label">Close all</span>
                        <span class="icon"></span>
                    </a>
                    <a href="javascript:toggle('back-end-search-settings', 'display')" class="toggle-all display">
                        <span class="label">Open all</span>
                        <span class="icon"></span>
                    </a>
                    <br class="clear" />
                    
                    <!--
                        General settings.
                    -->
                    <div class="toggle-wrapper toggle-back-end-search-settings displayed">
                        <a class="toggle" href="javascript:void(0)">General settings <span class="icon"></span></a>
                        <div class="toggle-content">
                            <table>
                                <tbody>
                                    <tr>
                                        <td><strong>Date type</strong></td>
                                        <td>Default value: American. Select date format: American (mm dd, yyyy) or European (dd mm yyyy).</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Style template</strong></td>
                                        <td>Default value: default. Select styles template.</td>
                                    </tr>
                                    <!--
                                    <tr>
                                        <td><strong>Enable search input</strong></td>
                                        <td>Default value: Disabled. Enable the option to search by name or location (a location needs to be created).</td>
                                    </tr>
                                    -->
                                    <tr>
                                        <td><strong>Filter results by price</strong></td>
                                        <td>Default value: Disabled. Enable the option to filter results by price.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    <!--
                        View settings.
                    -->
                    <div class="toggle-wrapper toggle-back-end-search-settings displayed">
                        <a class="toggle" href="javascript:void(0)">View settings <span class="icon"></span></a>
                        <div class="toggle-content">
                            <table>
                                <tbody>
                                    <tr>
                                        <td><strong>Defaul view</strong></td>
                                        <td>Default value: List. Select the default view that the search results will first display.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>List view</strong></td>
                                        <td>Default value: Enabled. Enable to display results in list view.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Grid view</strong></td>
                                        <td>Default value: Disabled. Enable to display results in grid view.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Map view</strong></td>
                                        <td>Default value: Disabled. Enable to display results on a google map.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Results per page</strong></td>
                                        <td>Default value: 10. Set the number of results to display on a page.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Sidebar position</strong></td>
                                        <td>Default value: Left. Set filters sidebar position: Left, Right & Top.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    <!--
                        Currency settings.
                    -->
                    <div class="toggle-wrapper toggle-back-end-search-settings displayed">
                        <a class="toggle" href="javascript:void(0)">Currency settings <span class="icon"></span></a>
                        <div class="toggle-content">
                            <table>
                                <tbody>
                                    <tr>
                                        <td><strong>Currency</strong></td>
                                        <td>Default value: United States Dollar ($, USD). Select search default currency.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Currency position</strong></td>
                                        <td>Default value: Before. Select currency position.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    <!--
                        Days settings.
                    -->
                    <div class="toggle-wrapper toggle-back-end-search-settings displayed">
                        <a class="toggle" href="javascript:void(0)">Days settings <span class="icon"></span></a>
                        <div class="toggle-content">
                            <table>
                                <tbody>
                                    <tr>
                                        <td><strong>First weekday</strong></td>
                                        <td>Default value: Monday. Select search first weekday.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Search start/end days</strong></td>
                                        <td>Default value: Enabled. Use start/end days or select only one day to filter results.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    <!--
                        Hours settings.
                    -->
                    <div class="toggle-wrapper toggle-back-end-search-settings displayed">
                        <a class="toggle" href="javascript:void(0)">Hours settings <span class="icon"></span></a>
                        <div class="toggle-content">
                            <table>
                                <tbody>
                                    <tr>
                                        <td><strong>Search hours</strong></td>
                                        <td>Default value: Disabled. Enable hours to use them to filter results.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Define hours</strong></td>
                                        <td>Enter hh:mm ... add one per line.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Search start/end hours</strong></td>
                                        <td>Default value: Enabled. Use start/end hours or select only one hour to filter results.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Enable AM/PM format</strong></td>
                                        <td>Default value: Disabled. Display hours in AM/PM format. NOTE: Hours definitions still need to be in 24 hours format.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    <!--
                        Availability settings.
                    -->
                    <div class="toggle-wrapper toggle-back-end-search-settings displayed">
                        <a class="toggle" href="javascript:void(0)">Availability settings <span class="icon"></span></a>
                        <div class="toggle-content">
                            <table>
                                <tbody>
                                    <tr>
                                        <td><strong>Filter results by no of items available</strong></td>
                                        <td>Default value: Disabled. Enable the option to filter results by the number of items available to book.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Minimum availability value</strong></td>
                                        <td>Default value: 1. Set minimum availability value to filter results.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Maximum availability value</strong></td>
                                        <td>Default value: 10. Set maximum availability value to filter results.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
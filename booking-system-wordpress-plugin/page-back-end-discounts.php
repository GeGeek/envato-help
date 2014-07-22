            
            <div id="main">
                <section>
                    <h2>Back end - Discounts</h2>
                    
                    <p>
                        Set discount values when a client is booking a specific number of days/hours.
                    </p>
                    <p>
                        You need to select the discounts you want to use in calendar settings. Same discounts can be used in an unlimited number of calendars.
                    </p>
                </section>
                
                <section>
                    <!--
                        Toggle buttons
                    -->
                    <a href="javascript:toggle('back-end-discounts', 'hide')" class="toggle-all hide">
                        <span class="label">Close all</span>
                        <span class="icon"></span>
                    </a>
                    <a href="javascript:toggle('back-end-discounts', 'display')" class="toggle-all display">
                        <span class="label">Open all</span>
                        <span class="icon"></span>
                    </a>
                    <br class="clear" />
                    
                    <!--
                        Add a discount.
                    -->
                    <div class="toggle-wrapper toggle-back-end-discounts displayed">
                        <a class="toggle" href="javascript:void(0)">Add a discount <span class="icon"></span></a>
                        <div class="toggle-content">
                            <ul>
                                <li><strong class="bold">Step 1</strong> - Click the <strong class="bold">"plus"</strong> button to add a new discount.</li>
                            </ul>
                            <p>
                                <img src="http://envato-help.dotonpaper.net/booking-system-wordpress-plugin/content/back-end-discounts-add.jpg" alt="" />
                            </p>
                            <p>
                                After you clicked the button, the discount will appear in the list below.
                            </p>
                        </div>
                    </div>
                    
                    <!--
                        Set discount data.
                    -->
                    <div class="toggle-wrapper toggle-back-end-discounts displayed">
                        <a class="toggle" href="javascript:void(0)">Set discount data <span class="icon"></span></a>
                        <div class="toggle-content">
                            <ul>
                                <li><strong class="bold">Step 1</strong> - Select the discount from the list to display the information.</li>
                                <li><strong class="bold">Item 2</strong> - Change name.</li>
                                <li><strong class="bold">Item 3</strong> - Change to the language you want to edit the discount.</li>
                                <li><strong class="bold">Step 4</strong> - Add discount item.</li>
                                <li><strong class="bold">Step 5</strong> - Delete discount.</li>
                            </ul>
                            <p>
                                <img src="http://envato-help.dotonpaper.net/booking-system-wordpress-plugin/content/back-end-discounts-set.jpg" alt="" />
                            </p>
                            <p>
                                After you clicked the add button, the discount item will appear under it.
                            </p>
                        </div>
                    </div>
                    
                    <!--
                        Set discount item data.
                    -->
                    <div class="toggle-wrapper toggle-back-end-discounts displayed">
                        <a class="toggle" href="javascript:void(0)">Set discount item data <span class="icon"></span></a>
                        <div class="toggle-content">
                            <p>
                                A <strong class="bold">discount item</strong> contains the data for a booked time lapse.
                            </p>
                            <p>
                                The order of the items gives usage priority. The last item has a higher priority.
                            </p>
                            <ul>
                                <li><strong class="bold">Button 1</strong> - Toggle item settings.</li>
                                <li><strong class="bold">Button 2</strong> - Delete item.</li>
                                <li><strong class="bold">Button 3</strong> - Sort item.</li>
                            </ul>
                            <p>
                                <img src="http://envato-help.dotonpaper.net/booking-system-wordpress-plugin/content/back-end-discount-item-set.jpg" alt="" />
                            </p>
                            <ul>
                                <li><strong class="bold">Item 4</strong> - Enter item label.</li>
                                <li><strong class="bold">Item 5</strong> - Enter the number of days/hours for the begining of the time lapse. Leave it blank for it to start from 1 day/hour.</li>
                                <li><strong class="bold">Item 6</strong> - Enter the number of days/hours for the ending of the time lapse. Leave it blank to be unlimited..</li>
                                <li><strong class="bold">Item 7</strong> - Select item price operation. You can add or subtract a value.</li>
                                <li><strong class="bold">Item 8</strong> - Enter item price.</li>
                                <li><strong class="bold">Item 9</strong> - Select item price type. It can be a fixed value or a percent from price.</li>
                                <li><strong class="bold">Item 10</strong> - Select item price by. The price can be calculated once or by day/hour.</li>
                                <li><strong class="bold">Button 11</strong> - Add discount item rule.</li>
                            </ul>
                            <p>
                                After you clicked the add button, the discount item rule will appear under it.
                            </p>
                        </div>
                    </div>
                    
                    <!--
                        Set discount item rule data.
                    -->
                    <div class="toggle-wrapper toggle-back-end-discounts displayed">
                        <a class="toggle" href="javascript:void(0)">Set discount item rule data <span class="icon"></span></a>
                        <div class="toggle-content">
                            <p>
                                A <strong class="bold">discount item rule</strong> set the discounts for a specific time period.
                            </p>
                            <p>
                                The order of the rules gives usage priority. The last rule has a higher priority. A rule will also overwrite item data.
                            </p>
                            <ul>
                                <li><strong class="bold">Button 1</strong> - Delete rule.</li>
                                <li><strong class="bold">Button 1</strong> - Sort rule.</li>
                            </ul>
                            <p>
                                <img src="http://envato-help.dotonpaper.net/booking-system-wordpress-plugin/content/back-end-discount-item-rule-set.jpg" alt="" />
                            </p>
                            <ul>
                                <li><strong class="bold">Item 3</strong> - Enter rule start date, when the discount item rule will start being used. Leave it blank to start today.</li>
                                <li><strong class="bold">Item 4</strong> - Enter rule end date, when the discount item rule will stop being used. Leave it blank for the rule to never finish.</li>
                                <li><strong class="bold">Item 5</strong> - Enter rule start hour, when the discount item rule will start being used. Leave it blank so that the rule will begin from the start of the day.</li>
                                <li><strong class="bold">Item 6</strong> - Enter rule end hour, when the discount item rule will end being used. Leave it blank, so that the rule will expire at end of the day.</li>
                                <li><strong class="bold">Item 7</strong> - Select rule price operation. You can add or subtract a value.</li>
                                <li><strong class="bold">Item 8</strong> - Enter rule price.</li>
                                <li><strong class="bold">Item 9</strong> - Select rule price type. It can be a fixed value or a percent from price.</li>
                                <li><strong class="bold">Item 10</strong> - Select rule price by. The price can be calculated once or by day/hour.</li>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>
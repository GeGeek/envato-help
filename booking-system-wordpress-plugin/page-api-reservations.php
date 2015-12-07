            
            <div id="main">
                <section>
                    <h2>API - Reservations</h2>
                    
                    <p>
                        The Pinpoint Booking System API works on a key system to control access. Each user has his own unique API key.
                    </p>
                    
                    <ol>
                        <li id="reservations-parameters">
                            <a href="#reservations-parameters">Parameters</a>
                        </li>
                        <li>
                            Response details
                        </li>
                        <li>
                            Response example
                        </li>
                    </ol>
                </section>
                
                <section id="reservations-parameters">
                    <h2>Parameters</h2>
                    
                    <div class="toggle-wrapper toggle-api-reservations-parameters displayed">
                        <a class="toggle" href="javascript:void(0)">Parameters list <span class="icon"></span></a>
                        <div class="toggle-content">
                            <table>
                                <thead>
                                    <th>Parameter</th>
                                    <th>Description</th>
                                    <th>Default</th>
                                    <th>Value</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong>calendar_id</strong></td>
                                        <td>The list of calendars' IDs for which the reservations will be returned.</td>
                                        <td>If the parameter is not given, a search will be conducted in all calendars belonging to a particular user.</td>
                                        <td>
                                            A list of IDs separated by commas or a single ID.
                                            <br /><br />
                                            <strong>Example: 1,2,3</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>start_date</strong></td>
                                        <td>Select the day from where returned reservations start.</td>
                                        <td>If the parameter is empty, all reservations that are still available today will be returned.</td>
                                        <td>
                                            The date in <em>YYYY-MM-DD</em> format.
                                            <br /><br />
                                            <strong>Example: 2015-09-15</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>end_date</strong></td>
                                        <td>Select the day where returned reservations end.</td>
                                        <td>If the parameter is empty, all reservations that have the end date after today will be returned.</td>
                                        <td>
                                            The date in <em>YYYY-MM-DD</em> format.
                                            <br /><br />
                                            <strong>Example: 2016-09-15</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>start_hour</strong></td>
                                        <td>Select the hour from where returned reservations start.</td>
                                        <td>The start hour is 00:00.</td>
                                        <td>
                                            The time in <em>HH:MM</em> format.
                                            <br /><br />
                                            <strong>Example: 12:15</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>end_hour</strong></td>
                                        <td>Select the hour where returned reservations end.</td>
                                        <td>The end hour is 24:00.</td>
                                        <td>
                                            The time in <em>HH:MM</em> format.
                                            <br /><br />
                                            <strong>Example: 20:00</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>status</strong></td>
                                        <td>Return reservations with selected status.</td>
                                        <td>As default, all reservations are returned except <strong>expired</strong> ones.</td>
                                        <td>
                                            A list of statuses separated by commas or a single status.
                                            <br /><br />
                                            <strong>Values:</strong>
                                            <ul>
                                                <li><em>pending</em></li>
                                                <li><em>approved</em></li>
                                                <li><em>rejected</em></li>
                                                <li><em>canceled</em></li>
                                                <li><em>expired</em></li>
                                            </ul>
                                            <strong>Example: canceled,rejected</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>payment_methods</strong></td>
                                        <td>Return reservations with selected payment methods.</td>
                                        <td>If no payment method is set, the parameter will be omitted in search.</td>
                                        <td>
                                            A list of payment methods separated by commas or a single payment method.
                                            <br /><br />
                                            <strong>Values:</strong>
                                            <br/>
                                            <ul>
                                                <li><em>none</em> (will return the reservations with no payment)</li>
                                                <li><em>default</em> (will return the reservations that will be paid on arrival)</li>
                                                <li><em>woocommerce</em> (will return the reservations that were paid via WooCommerce)</li>
                                                <li><em>paypal</em> (will return the reservations paid with PayPal)<br/>
                                            </ul>
                                            <strong>Example: none,default,woocommerce</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>search</strong></td>
                                        <td>The value that will be searched in reservations' data.</td>
                                        <td>If the parameter is empty or it is not set, no search will be performed.</td>
                                        <td>
                                            You can send any string to search in:
                                            <ul>
                                                <li>reservations IDs</li>
                                                <li>transactions IDs</li>
                                                <li>forms data</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>page</strong></td>
                                        <td>Select returned reservations page.</td>
                                        <td>First page will be returned by default.</td>
                                        <td>
                                            Set the page number which you want to be returned. 
                                            <br /><br />
                                            <strong>Example: 2</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>per_page</strong></td>
                                        <td>Select the number of reservations which will be returned.</td>
                                        <td>By default, 10 reservations are returned on API call.</td>
                                        <td>
                                            Set the number of reservations per page that will be returned. 
                                            <br /><br />
                                            <strong>Example: 25</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>order</strong></td>
                                        <td>Order the returned reservations ascending or descending.</td>
                                        <td>Reservations are ordered ascending by default.</td>
                                        <td>
                                            Values:
                                            <ul>
                                                <li><em>ASC</em> (ascending)</li>
                                                <li><em>DESC</em> (descending)</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>order_by</strong></td>
                                        <td>Select the field after which the reservations will be sorted.</td>
                                        <td>By default the reservations are ordered by <strong>check_in</strong> (start date).</td>
                                        <td>
                                            Values:
                                            <ul>
                                                <li><em>check_in</em> (reservation start date)</li>
                                                <li><em>check_out</em> (reservation end date)</li>
                                                <li><em>start_hour</em> (reservation start hour)</li>
                                                <li><em>end_hour</em> (reservation end hour)</li>
                                                <li><em>id</em> (reservation ID)</li>
                                                <li><em>status</em> (reservation status)</li>
                                                <li><em>date_created</em> (reservation request date)</li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
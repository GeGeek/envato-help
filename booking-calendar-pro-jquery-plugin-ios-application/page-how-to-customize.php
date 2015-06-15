            
            <div id="main">
                <section>
                    <h2>How to customize it</h2>
                    
                    <p>
                        You can customize the calendar from this files:
                    </p>
                    
                    <div class="toggle-wrapper displayed">
                        <a class="toggle" href="javascript:void(0)"><strong>BookingCalendarCell.m</strong><span class="icon"></span></a>
                        <div class="toggle-content">
                            <strong> - (void)setCellColorOfAvailability  method </strong>
                            <p>
                                Include the following macro in your <strong>BookingCalendarCell</strong> header file and call it from implementation file in order to get UIColor using hexadecimal value : <strong>UIColorFromRGB(rgbValue)</strong>
                            </p>
<pre>
/* <<<<<<<<<< Change to your DEFAULT color. */ 
/* <<<<<<<<<< Change to your AVAILABLE color. */
/* <<<<<<<<<< Change to your BOOKED color. */ 
/* <<<<<<<<<< Change to your SPECIAL color. */ 
/* <<<<<<<<<< Change to your UNAVAILABLE color. */ 
/* <<<<<<<<<< Change to your SELECTED color. */
/* <<<<<<<<<< Change to your SELECTED color. */
</pre>
                            <p>Default colors are: </p>
                            <ul>
                                <li> for AVAILABLE days: UIColorFromRGB (0x68ba68);</li>
                                <li> for BOOKED days:  UIColorFromRGB (0xdd6464);</li>
                                <li> for SPECIAL days: UIColorFromRGB (0xba68ba);</li>
                                <li> for UNAVAILABLE and DEFAULT days: UIColorFromRGB (0xcccccc);</li>
                                <li> for SELECTED days: UIColorFromRGB (0x464646);</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="toggle-wrapper  hidden">
                        <a class="toggle" href="javascript:void(0)"><strong>BookingCalendarView.m</strong><span class="icon"></span></a>
                        <div class="toggle-content">
                            <strong> – (void)setDefaultStyle:</strong>
                            <p>
                              Inside this method you can customize the calendar by calling any of the methods defined in the following category: BookingCalendarView+Settings  
                            </p>
<pre>
/* <<<<<<<< Change to your TITLE text color. */
/* <<<<<<<< Change to your TITLE font and size */
/* <<<<<<<< Change to your DAYOfWEEK font and size. */
/* <<<<<<<< Change to your DAYOfWEEK text color. */
/* <<<<<<<< Change to your DAYSHEADER background color. */
/* <<<<<<<< Change to your CALENDAR CONTAINER background color. */
</pre>
                            
                            <strong> – (void)setCalendarFrames:</strong>
<pre>
/* <<<<<<<<<< Change to your CALENDAR CONTAINER width and color border. */
/* <<<<<<<<<< Change to your NAVIGATION BUTTONS images. */    
</pre>
                        </div>
                    </div>
                    
                    <div class="toggle-wrapper  hidden">
                        <a class="toggle" href="javascript:void(0)"><strong>BookingCalendarController.m</strong><span class="icon"></span></a>
                        <div class="toggle-content">
                            <strong> – (id)init method:</strong>
<pre>
/* <<<<<<<<<< Change to your START DAY of the week. */
/* <<<<<<<<<< Set the backgroundColor for calendar, the one that appears when launching the App*/
/* <<<<<<<<<< set to YES if you want your calendar container height to adapt to the number of a month weeks */   
/* <<<<<<<<<< SET calendar to morningCheckOut */
/* <<<<<<<< Set the Application HEADER and customize title */
</pre>
                          
                            <strong>  -(void)customizeButtons</strong>
                            <p>Add / Remove buttons can be changed in the following method.</p>

                        </div>
                    </div>
                    
                    <div class="toggle-wrapper  hidden">
                        <a class="toggle" href="javascript:void(0)"><strong>BookingCalendarController+newCalendar.m</strong><span class="icon"></span></a>
                        <div class="toggle-content">
                            <strong> - (void) creatNewCalendar:</strong>
                            <p>
                                Is recursively creating those 4 calendars (the maximum number of calendars you can add)  and you can customize them here.
                            </p>
                        </div>
                    </div>
                    
                    <div class="toggle-wrapper  hidden">
                        <a class="toggle" href="javascript:void(0)"><strong>MenuDropDown.m</strong><span class="icon"></span></a>
                        <div class="toggle-content">
                            <p>
                                In MenuDropDown.m file can be customized the drop down from booking chart where you can choose the number of days for which you want to make the reservation.
                            </p>
                            
                        </div>
                    </div>
                    
                    <div class="toggle-wrapper  hidden">
                        <a class="toggle" href="javascript:void(0)"><strong>BookingChart.m</strong><span class="icon"></span></a>
                        <div class="toggle-content">
                            <p>
                                In BookingChart.m file you can customize the the elements in form section.
                            </p>
                        </div>
                    </div>
                </section>
            </div>
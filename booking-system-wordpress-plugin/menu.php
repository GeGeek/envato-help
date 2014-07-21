
                <ul id="menu">
                    <li class="home<?php echo strpos($page, 'home') !== false || !file_exists('page-'.$page.'.php') ? ' selected':''; ?>">
                        <span class="icon"></span>
                        <a href="?page=home">Home</a>
                    </li>
                    <li class="how-to<?php echo strpos($page, 'how-to') !== false ? ' selected':''; ?>">
                        <span class="icon"></span>
                        <a href="?page=how-to">How to use it<span class="icon-toggle "></span></a>
                    </li>
                    <li class="back-end<?php echo strpos($page, 'front-end') !== false ? ' selected':''; ?>">
                        <span class="icon"></span>
                        <a href="?page=front-end">Front end</a>
                    </li>
                    <li class="back-end<?php echo strpos($page, 'back-end') !== false ? ' selected':''; ?>">
                        <span class="icon"></span>
                        <a href="javascript:void(0)">Back end<span class="icon-toggle "></span></a>
                        <ul class="<?php echo strpos($page, 'back-end') !== false ? 'displayed':'hidden'; ?>">
                            <li><a href="?page=back-end-general"<?php echo strpos($page, 'back-end-general') !== false ? ' class="selected"':''; ?>><span class="icon"></span>General informations</a></li>
                            <li><a href="?page=back-end-calendars"<?php echo strpos($page, 'back-end-calendars') !== false ? ' class="selected"':''; ?>><span class="icon"></span>Calendars</a></li>
                            <li><a href="?page=back-end-coupons"<?php echo strpos($page, 'back-end-coupons') !== false ? ' class="selected"':''; ?>><span class="icon"></span>Coupons</a></li>
                            <li><a href="?page=back-end-discounts"<?php echo strpos($page, 'back-end-discounts') !== false ? ' class="selected"':''; ?>><span class="icon"></span>Discounts</a></li>
                            <li><a href="?page=back-end-emails"<?php echo strpos($page, 'back-end-emails') !== false ? ' class="selected"':''; ?>><span class="icon"></span>Email templates</a></li>
                            <li><a href="?page=back-end-extras"<?php echo strpos($page, 'back-end-extras') !== false ? ' class="selected"':''; ?>><span class="icon"></span>Extras</a></li>
                            <li><a href="?page=back-end-forms"<?php echo strpos($page, 'back-end-forms') !== false ? ' class="selected"':''; ?>><span class="icon"></span>Forms</a></li>
                            <li><a href="?page=back-end-reservations"<?php echo strpos($page, 'back-end-reservations') !== false ? ' class="selected"':''; ?>><span class="icon"></span>Reservations</a></li>
                            <li><a href="?page=back-end-rules"<?php echo strpos($page, 'back-end-rules') !== false ? ' class="selected"':''; ?>><span class="icon"></span>Rules</a></li>
                            <li><a href="?page=back-end-settings"<?php echo strpos($page, 'back-end-settings') !== false ? ' class="selected"':''; ?>><span class="icon"></span>Settings</a></li>
                            <li><a href="?page=back-end-fees"<?php echo strpos($page, 'back-end-fees') !== false ? ' class="selected"':''; ?>><span class="icon"></span>Taxes & fees</a></li>
                            <li><a href="?page=back-end-translation"<?php echo strpos($page, 'back-end-translation') !== false ? ' class="selected"':''; ?>><span class="icon"></span>Translation</a></li>
                        </ul>
                    </li>
                    <li class="woocommerce<?php echo strpos($page, 'woocommerce') !== false ? ' selected':''; ?>">
                        <span class="icon"></span>
                        <a href="?page=woocommerce">WooCommerce extension</a>
                    </li>
                    <li class="hooks<?php echo strpos($page, 'hooks') !== false ? ' selected':''; ?>">
                        <span class="icon"></span>
                        <a href="?page=hooks">Hooks</a>
                    </li>
                    <li class="faq<?php echo strpos($page, 'faq') !== false ? ' selected':''; ?>">
                        <span class="icon"></span>
                        <a href="?page=faq">FAQ</a>
                    </li>
                    <li class="update<?php echo strpos($page, 'update') !== false ? ' selected':''; ?>">
                        <span class="icon"></span>
                        <a href="?page=update">How to update</a>
                    </li>
                    <li class="changelog<?php echo strpos($page, 'changelog') !== false ? ' selected':''; ?>">
                        <span class="icon"></span>
                    	<a href="?page=changelog">Changelog</a>
                    </li>
                    <li class="assets<?php echo strpos($page, 'assets') !== false ? ' selected':''; ?>">
                        <span class="icon"></span>
                    	<a href="?page=assets">Assets</a>
                    </li>
                    <li class="support<?php echo strpos($page, 'support') !== false ? ' selected':''; ?>">
                        <span class="icon"></span>
                        <a href="?page=support">Support</a>
                    </li>
                </ul>
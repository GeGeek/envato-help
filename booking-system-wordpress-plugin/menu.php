
                <ul id="menu">
                    <li class="home<?php echo strpos($page, 'home') !== false || !file_exists('page-'.$page.'.php') ? ' selected':''; ?>">
                        <span class="icon"></span>
                        <a href="home" target="_parent">Home</a>
                    </li>
                    <li class="how-to<?php echo strpos($page, 'how-to') !== false ? ' selected':''; ?>">
                        <span class="icon"></span>
                        <a href="javascript:void(0)" target="_parent">How to use it<span class="icon-toggle "></span></a>
                        <ul class="<?php echo strpos($page, 'how-to') !== false ? 'displayed':'hidden'; ?>">
                            <li><a href="how-to-server-requirements" target="_parent"<?php echo strpos($page, 'how-to-server-requirements') !== false ? ' class="selected"':''; ?>><span class="icon"></span>Server requirements</a></li>
                            <li><a href="how-to-installation" target="_parent"<?php echo strpos($page, 'how-to-installation') !== false ? ' class="selected"':''; ?>><span class="icon"></span>Installation</a></li>
                            <li><a href="how-to-good-to-know" target="_parent"<?php echo strpos($page, 'how-to-good-to-know') !== false ? ' class="selected"':''; ?>><span class="icon"></span>Good to know</a></li>
                        </ul>
                    </li>
                    <li class="front-end<?php echo strpos($page, 'front-end') !== false ? ' selected':''; ?>">
                        <span class="icon"></span>
                        <a href="javascript:void(0)" target="_parent">Front end</a>
                        <ul class="<?php echo strpos($page, 'front-end') !== false ? 'displayed':'hidden'; ?>">
                            <li><a href="front-end-the-calendar" target="_parent"<?php echo strpos($page, 'front-end-the-calendar') !== false ? ' class="selected"':''; ?>><span class="icon"></span>The calendar</a></li>
                            <li><a href="front-end-shortcodes" target="_parent"<?php echo strpos($page, 'front-end-shortcodes') !== false ? ' class="selected"':''; ?>><span class="icon"></span>Shortcodes</a></li>
                        </ul>
                    </li>
                    <li class="back-end<?php echo strpos($page, 'back-end') !== false ? ' selected':''; ?>">
                        <span class="icon"></span>
                        <a href="javascript:void(0)">Back end<span class="icon-toggle "></span></a>
                        <ul class="<?php echo strpos($page, 'back-end') !== false ? 'displayed':'hidden'; ?>">
                            <li><a href="back-end-general" target="_parent"<?php echo strpos($page, 'back-end-general') !== false ? ' class="selected"':''; ?>><span class="icon"></span>General informations</a></li>
                            <li><a href="back-end-calendars" target="_parent"<?php echo strpos($page, 'back-end-calendars') !== false ? ' class="selected"':''; ?>><span class="icon"></span>Calendars</a></li>
                            <li><a href="back-end-coupons" target="_parent"<?php echo strpos($page, 'back-end-coupons') !== false ? ' class="selected"':''; ?>><span class="icon"></span>Coupons</a></li>
                            <li><a href="back-end-discounts" target="_parent"<?php echo strpos($page, 'back-end-discounts') !== false ? ' class="selected"':''; ?>><span class="icon"></span>Discounts</a></li>
                            <li><a href="back-end-emails" target="_parent"<?php echo strpos($page, 'back-end-emails') !== false ? ' class="selected"':''; ?>><span class="icon"></span>Email templates</a></li>
                            <li><a href="back-end-extras" target="_parent"<?php echo strpos($page, 'back-end-extras') !== false ? ' class="selected"':''; ?>><span class="icon"></span>Extras</a></li>
                            <!--<li><a href="back-end-forms" target="_parent"<?php echo strpos($page, 'back-end-forms') !== false ? ' class="selected"':''; ?>><span class="icon"></span>Forms</a></li>-->
                            <li><a href="back-end-locations" target="_parent"<?php echo strpos($page, 'back-end-locations') !== false ? ' class="selected"':''; ?>><span class="icon"></span>Locations</a></li>
                            <!--<li><a href="back-end-reservations" target="_parent"<?php echo strpos($page, 'back-end-reservations') !== false ? ' class="selected"':''; ?>><span class="icon"></span>Reservations</a></li>-->
                            <li><a href="back-end-rules" target="_parent"<?php echo strpos($page, 'back-end-rules') !== false ? ' class="selected"':''; ?>><span class="icon"></span>Rules</a></li>
                            <!--<li><a href="back-end-settings" target="_parent"<?php echo strpos($page, 'back-end-settings') !== false ? ' class="selected"':''; ?>><span class="icon"></span>Settings</a></li>-->
                            <li><a href="back-end-fees" target="_parent"<?php echo strpos($page, 'back-end-fees') !== false ? ' class="selected"':''; ?>><span class="icon"></span>Taxes & fees</a></li>
                            <li><a href="back-end-search" target="_parent"<?php echo strpos($page, 'back-end-search') !== false ? ' class="selected"':''; ?>><span class="icon"></span>Search</a></li>
                            <li><a href="back-end-tools" target="_parent"<?php echo strpos($page, 'back-end-tools') !== false ? ' class="selected"':''; ?>><span class="icon"></span>Tools</a></li>
                            <li><a href="back-end-translation" target="_parent"<?php echo strpos($page, 'back-end-translation') !== false ? ' class="selected"':''; ?>><span class="icon"></span>Translation</a></li>
                        </ul>
                    </li>
                    <li class="payment-gateways<?php echo strpos($page, 'payment-gateways') !== false ? ' selected':''; ?>">
                        <span class="icon"></span>
                        <a href="javascript:void(0)" target="_parent">Payment gateways<span class="icon-toggle "></span></a>
                        <ul class="<?php echo strpos($page, 'payment-gateways') !== false ? 'displayed':'hidden'; ?>">
                            <!--<li><a href="payment-gateways-2checkout" target="_parent"<?php echo strpos($page, 'payment-gateways-2checkout') !== false ? ' class="selected"':''; ?>><span class="icon"></span>2Checkout (add-on)</a></li>-->
                            <!--<li><a href="payment-gateways-authorize-net" target="_parent"<?php echo strpos($page, 'payment-gateways-authorize-net') !== false ? ' class="selected"':''; ?>><span class="icon"></span>Authorize.Net (add-on)</a></li>-->
                            <li><a href="payment-gateways-paypal" target="_parent"<?php echo strpos($page, 'payment-gateways-paypal') !== false ? ' class="selected"':''; ?>><span class="icon"></span>PayPal</a></li>
                            <!--<li><a href="payment-gateways-skrill" target="_parent"<?php echo strpos($page, 'payment-gateways-stripe') !== false ? ' class="selected"':''; ?>><span class="icon"></span>Skrill (add-on)</a></li>-->
                            <li><a href="payment-gateways-stripe" target="_parent"<?php echo strpos($page, 'payment-gateways-stripe') !== false ? ' class="selected"':''; ?>><span class="icon"></span>Stripe (add-on)</a></li>
                        </ul>
                    </li>
                    <li class="woocommerce<?php echo strpos($page, 'woocommerce') !== false ? ' selected':''; ?>">
                        <span class="icon"></span>
                        <a href="woocommerce" target="_parent">WooCommerce extension</a>
                    </li>
                    <li class="hooks<?php echo strpos($page, 'hooks') !== false ? ' selected':''; ?>">
                        <span class="icon"></span>
                        <a href="javascript:void(0)">Hooks</a>
                        <ul class="<?php echo strpos($page, 'hooks') !== false ? 'displayed':'hidden'; ?>">
                            <!--<li><a href="hooks-actions" target="_parent"<?php echo strpos($page, 'hooks-actions') !== false ? ' class="selected"':''; ?>><span class="icon"></span>Actions</a></li>-->
                            <li><a href="hooks-filters" target="_parent"<?php echo strpos($page, 'hooks-filters') !== false ? ' class="selected"':''; ?>><span class="icon"></span>Filters</a></li>
                        </ul>
                    </li>
<!--                    <li class="faq<?php echo strpos($page, 'faq') !== false ? ' selected':''; ?>">
                        <span class="icon"></span>
                        <a href="faq" target="_parent">FAQ</a>
                    </li>-->
                    <li class="update<?php echo strpos($page, 'update') !== false ? ' selected':''; ?>">
                        <span class="icon"></span>
                        <a href="update" target="_parent">How to update</a>
                    </li>
                    <li class="changelog<?php echo strpos($page, 'changelog') !== false ? ' selected':''; ?>">
                        <span class="icon"></span>
                    	<a href="changelog" target="_parent">Changelog</a>
                    </li>
                    <li class="assets<?php echo strpos($page, 'assets') !== false ? ' selected':''; ?>">
                        <span class="icon"></span>
                    	<a href="assets" target="_parent">Assets</a>
                    </li>
                </ul>
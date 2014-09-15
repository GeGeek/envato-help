
                <ul id="menu">
                    <li class="home<?php echo strpos($page, 'home') !== false || !file_exists('page-'.$page.'.php') ? ' selected':''; ?>">
                        <span class="icon"></span>
                        <a href="?page=home" target="_parent">Home</a>
                    </li>
                    <li class="how-to<?php echo strpos($page, 'how-to') !== false ? ' selected':''; ?>">
                        <span class="icon"></span>
                        <a href="javascript:void(0)" target="_parent">How to use it<span class="icon-toggle "></span></a>
                        <ul class="<?php echo strpos($page, 'how-to') !== false ? 'displayed':'hidden'; ?>">
                            <li><a href="?page=how-to-server-requirements" target="_parent"<?php echo strpos($page, 'how-to-server-requirements') !== false ? ' class="selected"':''; ?>><span class="icon"></span>Server requirements</a></li>
                            <li><a href="?page=how-to-installation" target="_parent"<?php echo strpos($page, 'how-to-installation') !== false ? ' class="selected"':''; ?>><span class="icon"></span>Installation</a></li>
                        </ul>
                    </li>
<!--                    <li class="front-end<?php echo strpos($page, 'front-end') !== false ? ' selected':''; ?>">
                        <span class="icon"></span>
                        <a href="?page=front-end" target="_parent">Front end</a>
                    </li>-->
                    <li class="back-end<?php echo strpos($page, 'back-end') !== false ? ' selected':''; ?>">
                        <span class="icon"></span>
                        <a href="javascript:void(0)">Back end<span class="icon-toggle "></span></a>
                        <ul class="<?php echo strpos($page, 'back-end') !== false ? 'displayed':'hidden'; ?>">
                            <li><a href="?page=back-end-general" target="_parent"<?php echo strpos($page, 'back-end-general') !== false ? ' class="selected"':''; ?>><span class="icon"></span>General informations</a></li>
                            <li><a href="?page=back-end-calendars" target="_parent"<?php echo strpos($page, 'back-end-calendars') !== false ? ' class="selected"':''; ?>><span class="icon"></span>Calendars</a></li>
                            <li><a href="?page=back-end-coupons" target="_parent"<?php echo strpos($page, 'back-end-coupons') !== false ? ' class="selected"':''; ?>><span class="icon"></span>Coupons</a></li>
                            <li><a href="?page=back-end-discounts" target="_parent"<?php echo strpos($page, 'back-end-discounts') !== false ? ' class="selected"':''; ?>><span class="icon"></span>Discounts</a></li>
                            <li><a href="?page=back-end-emails" target="_parent"<?php echo strpos($page, 'back-end-emails') !== false ? ' class="selected"':''; ?>><span class="icon"></span>Email templates</a></li>
                            <li><a href="?page=back-end-extras" target="_parent"<?php echo strpos($page, 'back-end-extras') !== false ? ' class="selected"':''; ?>><span class="icon"></span>Extras</a></li>
                            <!--<li><a href="?page=back-end-forms" target="_parent"<?php echo strpos($page, 'back-end-forms') !== false ? ' class="selected"':''; ?>><span class="icon"></span>Forms</a></li>-->
                            <!--<li><a href="?page=back-end-reservations" target="_parent"<?php echo strpos($page, 'back-end-reservations') !== false ? ' class="selected"':''; ?>><span class="icon"></span>Reservations</a></li>-->
                            <!--<li><a href="?page=back-end-rules" target="_parent"<?php echo strpos($page, 'back-end-rules') !== false ? ' class="selected"':''; ?>><span class="icon"></span>Rules</a></li>-->
                            <!--<li><a href="?page=back-end-settings" target="_parent"<?php echo strpos($page, 'back-end-settings') !== false ? ' class="selected"':''; ?>><span class="icon"></span>Settings</a></li>-->
                            <!--<li><a href="?page=back-end-fees" target="_parent"<?php echo strpos($page, 'back-end-fees') !== false ? ' class="selected"':''; ?>><span class="icon"></span>Taxes & fees</a></li>-->
                            <!--<li><a href="?page=back-end-translation" target="_parent"<?php echo strpos($page, 'back-end-translation') !== false ? ' class="selected"':''; ?>><span class="icon"></span>Translation</a></li>-->
                        </ul>
                    </li>
                    <li class="woocommerce<?php echo strpos($page, 'woocommerce') !== false ? ' selected':''; ?>">
                        <span class="icon"></span>
                        <a href="?page=woocommerce" target="_parent">WooCommerce extension</a>
                    </li>
<!--                    <li class="hooks<?php echo strpos($page, 'hooks') !== false ? ' selected':''; ?>">
                        <span class="icon"></span>
                        <a href="?page=hooks" target="_parent">Hooks</a>
                    </li>
                    <li class="faq<?php echo strpos($page, 'faq') !== false ? ' selected':''; ?>">
                        <span class="icon"></span>
                        <a href="?page=faq" target="_parent">FAQ</a>
                    </li>-->
                    <li class="update<?php echo strpos($page, 'update') !== false ? ' selected':''; ?>">
                        <span class="icon"></span>
                        <a href="?page=update" target="_parent">How to update</a>
                    </li>
                    <li class="changelog<?php echo strpos($page, 'changelog') !== false ? ' selected':''; ?>">
                        <span class="icon"></span>
                    	<a href="?page=changelog" target="_parent">Changelog</a>
                    </li>
                    <li class="assets<?php echo strpos($page, 'assets') !== false ? ' selected':''; ?>">
                        <span class="icon"></span>
                    	<a href="?page=assets" target="_parent">Assets</a>
                    </li>
                </ul>
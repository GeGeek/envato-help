
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
                            <li><a href="front-end-the-code" target="_parent"<?php echo strpos($page, 'front-end-the-code') !== false ? ' class="selected"':''; ?>><span class="icon"></span>The code</a></li>
                        </ul>
                    </li>
                    <li class="back-end<?php echo strpos($page, 'back-end') !== false ? ' selected':''; ?>">
                        <span class="icon"></span>
                        <a href="javascript:void(0)">Back end<span class="icon-toggle "></span></a>
                        <ul class="<?php echo strpos($page, 'back-end') !== false ? 'displayed':'hidden'; ?>">
                            <li><a href="back-end-the-calendar" target="_parent"<?php echo strpos($page, 'back-end-the-calendar') !== false ? ' class="selected"':''; ?>><span class="icon"></span>The Calendar</a></li>
                            <li><a href="back-end-the-code" target="_parent"<?php echo strpos($page, 'back-end-the-code') !== false ? ' class="selected"':''; ?>><span class="icon"></span>The Code</a></li>
                        </ul>
                    </li>
<!--                    <li class="faq<?php echo strpos($page, 'faq') !== false ? ' selected':''; ?>">
                        <span class="icon"></span>
                        <a href="faq" target="_parent">FAQ</a>
                    </li>-->
                    <li class="hooks<?php echo strpos($page, 'integration-json-database') !== false ? ' selected':''; ?>">
                        <span class="icon"></span>
                        <a href="integration-json-database" target="_parent">Integration & JSON/Database structure</a>
                    </li>
                    <li class="assets<?php echo strpos($page, 'how-to-customize') !== false ? ' selected':''; ?>">
                        <span class="icon"></span>
                        <a href="how-to-customize" target="_parent">How to customize it</a>
                    </li>
                    <li class="update<?php echo strpos($page, 'update') !== false ? ' selected':''; ?>">
                        <span class="icon"></span>
                        <a href="update" target="_parent">How to update</a>
                    </li>
                    <li class="changelog<?php echo strpos($page, 'changelog') !== false ? ' selected':''; ?>">
                        <span class="icon"></span>
                    	<a href="changelog" target="_parent">Changelog</a>
                    </li>
                </ul>
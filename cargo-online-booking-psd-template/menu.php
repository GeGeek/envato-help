
                <ul id="menu">
                    <li class="home<?php echo strpos($page, 'home') !== false || !file_exists('page-'.$page.'.php') ? ' selected':''; ?>">
                        <span class="icon"></span>
                        <a href="?page=home" target="_parent">Home</a>
                    </li>
                    <li class="psd-files<?php echo strpos($page, 'psd-files') !== false ? ' selected':''; ?>">
                        <span class="icon"></span>
                        <a href="?page=psd-files" target="_parent">PSD files included<span class="icon-toggle "></span></a>
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
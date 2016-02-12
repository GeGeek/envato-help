            
            <div id="main">
                <section>
                    <h2>Changelog</h2>
                    
                    <p>
                        The booking system is updated periodically, with new features and fixes for bugs. All updates are free. Please read the update instructions <a href="http://envato-help.dotonpaper.net/booking-system-wordpress-plugin/?page=update">here</a>.
                    </p>
                    
                    <ol>
                        <li>
                            <a href="#changelog-pro">PRO version</a>
                        </li>
                        <li>
                            <a href="#changelog-free">Free version</a>
                        </li>
                    </ol>
                </section>
                
                <section id="changelog-pro">
                    <h2>PRO version changelog</h2>
                    
                    <a href="javascript:toggle('changelog-pro', 'hide')" class="toggle-all hide">
                        <span class="label">Close all</span>
                        <span class="icon"></span>
                    </a>
                    <a href="javascript:toggle('changelog-pro', 'display')" class="toggle-all display">
                        <span class="label">Open all</span>
                        <span class="icon"></span>
                    </a>
                    <br class="clear" />
<?php
    $changelog = json_decode(file_get_contents('https://changelog.wordpressbooking.systems/pinpoint-booking-system-wordpress-plugin-pro.json'), TRUE);
    $i = 0;
    
    foreach ($changelog as $changelog_item){
        $i++;
?>
                    <div class="toggle-wrapper toggle-changelog-pro <?php echo $i == 1 ? 'displayed':'hidden'; ?>">
                        <a class="toggle" href="javascript:void(0)">Version <?php echo $changelog_item['version']; ?> - <?php echo $changelog_item['date']; ?><?php echo $changelog_item['info'] != '' ?  '- <span class="info">'.$changelog_item['info'].'</span>':''; ?> <span class="icon"></span></a>
                        <div class="toggle-content">
<?php
        $html = array();
        $features = $changelog_item['features'];
        $bugs = $changelog_item['bugs'];

        if (count($features) > 0){
            array_push($html, $i == count($changelog) ? '':'<h6>New features:</h6>');
            array_push($html, '<ul>');
                                
            foreach ($features as $feature){
                array_push($html, '<li>'.$feature.'</li>');
            }
            array_push($html, '</ul>');
        }

        if (count($bugs) > 0){
            array_push($html, '<h6>Repaired bugs:</h6>');
            array_push($html, '<ul>');
                                
            foreach ($bugs as $bug){
                array_push($html, '<li>'.$bug.'</li>');
            }
            array_push($html, '</ul>');
        }
        
        echo implode('', $html);
?>
                        </div>
                    </div>
<?php
    }
?>
                </section>
                
                <section id="changelog-free">
                    <h2>Free version changelog</h2>
                    
                    <a href="javascript:toggle('changelog-free', 'hide')" class="toggle-all hide">
                        <span class="label">Close all</span>
                        <span class="icon"></span>
                    </a>
                    <a href="javascript:toggle('changelog-free', 'display')" class="toggle-all display">
                        <span class="label">Open all</span>
                        <span class="icon"></span>
                    </a>
                    <br class="clear" />
<?php
    $changelog = json_decode(file_get_contents('https://changelog.wordpressbooking.systems/pinpoint-booking-system-wordpress-plugin-free.json'), TRUE);
    $i = 0;
    
    foreach ($changelog as $changelog_item){
        $i++;
?>
                    <div class="toggle-wrapper toggle-changelog-free <?php echo $i == 1 ? 'displayed':'hidden'; ?>">
                        <a class="toggle" href="javascript:void(0)">Version <?php echo $changelog_item['version']; ?> - <?php echo $changelog_item['date']; ?><?php echo $changelog_item['info'] != '' ?  '- <span class="info">'.$changelog_item['info'].'</span>':''; ?> <span class="icon"></span></a>
                        <div class="toggle-content">
<?php
        $html = array();
        $features = $changelog_item['features'];
        $bugs = $changelog_item['bugs'];

        if (count($features) > 0){
            array_push($html, $i == count($changelog) ? '':'<h6>New features:</h6>');
            array_push($html, '<ul>');
                                
            foreach ($features as $feature){
                array_push($html, '<li>'.$feature.'</li>');
            }
            array_push($html, '</ul>');
        }

        if (count($bugs) > 0){
            array_push($html, '<h6>Repaired bugs:</h6>');
            array_push($html, '<ul>');
                                
            foreach ($bugs as $bug){
                array_push($html, '<li>'.$bug.'</li>');
            }
            array_push($html, '</ul>');
        }
        
        echo implode('', $html);
?>
                        </div>
                    </div>
<?php
    }
?>
                </section>
            </div>
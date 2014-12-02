            
            <div id="main">
                <section>
                    <h2>Shortcodes</h2>
                    
                    <p>
                        You can add the booking system in your WordPress content, like many other plugins, using a shortcode.
                    </p>
                </section>
                
                <section>
                    <h2>Calendar shortcode</h2>
                    
                    <p>
                        To display the booking calendar please use the following shortcode:
                    </p>
<pre>
[dopbsp id=1]
</pre>
                    <p>
                        ... where the attribute <strong class='bold'>id</strong> is the ID of the calendar you want to add on your page/post. In the above example we inserted into our content the calendar with ID 1.
                    </p>
                </section>
                
                <section>
                    <h2>Search shortcode</h2>
                    
                    <p>
                        To display an search item on your page please use the following shortcode:
                    </p>
<pre>
[dopbsp item=search id=1]
</pre>
                    <p>
                        ... where the attribute <strong class='bold'>id</strong> is the ID of the search item, you created in WordPress back end <a href="?page=back-end-search" target="_parent">Search</a> section, and you want to add on your page/post.
                    </p>
                </section>
                
                <section>
                    <h2>Change language</h2>
                    
                    <p>
                        To change the booking calendar language please use the following shortcode:
                    </p>
<pre>
[dopbsp id=1 lang=fr]
[dopbsp item=search id=1 lang=fr]
</pre>
                    <p>
                        ... where the attribute <strong class='bold'>lang</strong> is the code of the language you want to use. The default value is <strong class='bold'>en</strong> (English). In the above example we inserted into our content the calendar with the French translation.
                    </p>
                    <p>
                        You can have same calendar with different translations. For example if you are using a translation plugin like <strong>WPML</strong>, and you have 2 translations, German and French, you can add the shortcode:
                    </p>
<pre>
[dopbsp id=1 lang=de]
</pre>
                    <p>
                        in German content, and the shortcode:
                    </p>
<pre>
[dopbsp id=1 lang=fr]
</pre>
                    <p>
                        in French content.
                    </p>
                </section>
                
                <section>
                    <h2>Language codes</h2>
                    
                    <p>
                        Here is a list of all the language codes you can use.
                    </p>
                    
                    <div class="toggle-wrapper hidden">
                        <a class="toggle" href="javascript:void(0)">Language codes list <span class="icon"></span></a>
                        <div class="toggle-content">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>Afrikaans (Afrikaans)</td>
                                        <td><strong>af</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Albanian (Shqiptar)</td>
                                        <td><strong>sq</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Arabic (>العربية)</td>
                                        <td><strong>ar</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Azerbaijani (Azərbaycan)</td>
                                        <td><strong>az</strong></td>
                                    </tr>  
                                    <tr>
                                        <td>Basque (Euskal)</td>
                                        <td><strong>eu</strong></td>
                                    </tr>  
                                    <tr>
                                        <td>Belarusian (Беларускай)</td>
                                        <td><strong>be</strong></td>
                                    </tr>  
                                    <tr>
                                        <td>Bulgarian (Български)</td>
                                        <td><strong>bg</strong></td>
                                    </tr>  
                                    <tr>
                                        <td>Catalan (Català)</td>
                                        <td><strong>ca</strong></td>
                                    </tr>  
                                    <tr>
                                        <td>Chinese (中国的)</td>
                                        <td><strong>zh</strong></td>
                                    </tr>  
                                    <tr>
                                        <td>Croatian (Hrvatski)</td>
                                        <td><strong>hr</strong></td>
                                    </tr>  
                                    <tr>
                                        <td>Czech (Český)</td>
                                        <td><strong>cs</strong></td>
                                    </tr>  
                                    <tr>
                                        <td>Danish (Dansk)</td>
                                        <td><strong>da</strong></td>
                                    </tr>  
                                    <tr>
                                        <td>Dutch (Nederlands)</td>
                                        <td><strong>nl</strong></td>
                                    </tr>  
                                    <tr>
                                        <td>English</td>
                                        <td><strong>en</strong></td>
                                    </tr>  
                                    <tr>
                                        <td>Esperanto (Esperanto)</td>
                                        <td><strong>eo</strong></td>
                                    </tr>  
                                    <tr>
                                        <td>Estonian (Eesti)</td>
                                        <td><strong>et</strong></td>
                                    </tr>  
                                    <tr>
                                        <td>Filipino (na Filipino)</td>
                                        <td><strong>fl</strong></td>
                                    </tr>  
                                    <tr>
                                        <td>Finnish (Suomi)</td>
                                        <td><strong>fi</strong></td>
                                    </tr>
                                    <tr>
                                        <td>French (Français)</td>
                                        <td><strong>fr</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Galician (Galego)</td>
                                        <td><strong>gl</strong></td>
                                    </tr>
                                    <tr>
                                        <td>German (Deutsch)</td>
                                        <td><strong>de</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Greek (Ɛλληνικά)</td>
                                        <td><strong>el</strong></td>
                                    </tr>  
                                    <tr>
                                        <td>Haitian Creole (Kreyòl Ayisyen)</td>
                                        <td><strong>ht</strong></td>
                                    </tr>  
                                    <tr>
                                        <td>Hebrew (עברית)</td>
                                        <td><strong>he</strong></td>
                                    </tr>  
                                    <tr>
                                        <td>Hindi (हिंदी)</td>
                                        <td><strong>hi</strong></td>
                                    </tr>  
                                    <tr>
                                        <td>Hungarian (Magyar)</td>
                                        <td><strong>hu</strong></td>
                                    </tr>  
                                    <tr>
                                        <td>Icelandic (Íslenska)</td>
                                        <td><strong>is</strong></td>
                                    </tr>  
                                    <tr>
                                        <td>Indonesian (Indonesia)</td>
                                        <td><strong>id</strong></td>
                                    </tr> 
                                    <tr>
                                        <td>Irish (Gaeilge)</td>
                                        <td><strong>ga</strong></td>
                                    </tr> 
                                    <tr>
                                        <td>Italian (Italiano)</td>
                                        <td><strong>it</strong></td>
                                    </tr> 
                                    <tr>
                                        <td>Japanese (日本の)</td>
                                        <td><strong>ja</strong></td>
                                    </tr>  
                                    <tr>
                                        <td>Korean (한국의)</td>
                                        <td><strong>ko</strong></td>
                                    </tr>  
                                    <tr>
                                        <td>Latvian (Latvijas)</td>
                                        <td><strong>lv</strong></td>
                                    </tr>  
                                    <tr>
                                        <td>Lithuanian (Lietuvos)</td>
                                        <td><strong>lt</strong></td>
                                    </tr>  
                                    <tr>
                                        <td>Macedonian (македонски)</td>
                                        <td><strong>mk</strong></td>
                                    </tr>  
                                    <tr>
                                        <td>Malay (Melayu)</td>
                                        <td><strong>ms</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Maltese (Maltija)</td>
                                        <td><strong>mt</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Norwegian (Norske)</td>
                                        <td><strong>no</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Persian (فارسی)</td>
                                        <td><strong>fa</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Polish (Polski)</td>
                                        <td><strong>pl</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Portuguese (Português)</td>
                                        <td><strong>pt</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Romanian (Română)</td>
                                        <td><strong>ro</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Russian (Pусский)</td>
                                        <td><strong>ru</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Serbian (Cрпски)</td>
                                        <td><strong>sr</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Slovak (Slovenských)</td>
                                        <td><strong>sk</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Slovenian (Slovenski)</td>
                                        <td><strong>sl</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Spanish (Español)</td>
                                        <td><strong>es</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Swahili (Kiswahili)</td>
                                        <td><strong>sw</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Swedish (Svenskt)</td>
                                        <td><strong>sv</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Thai (ภาษาไทย)</td>
                                        <td><strong>th</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Turkish (Türk)</td>
                                        <td><strong>tr</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Ukrainian (Український)</td>
                                        <td><strong>uk</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Urdu (اردو)</td>
                                        <td><strong>ur</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Vietnamese (Việt)</td>
                                        <td><strong>vi</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Welsh (Cymraeg)</td>
                                        <td><strong>cy</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Yiddish (ייִדיש)</td>
                                        <td><strong>yi</strong></td>
                                    </tr>  
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
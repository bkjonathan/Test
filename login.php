
<?php
require_once 'template/head.php';
require_once 'template/nav.php';
?>
<div class="tm-wrapper">
    <div class="tm-block-top-main">
        <div class="uk-container uk-container-center">

            <div class="tm-middle uk-grid" data-uk-grid-match data-uk-grid-margin>

                <div class="tm-main uk-width-medium-3-4">

                    <main class="tm-content">

                        <ul class="uk-breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li class="uk-active"><span>Login</span></li>
                        </ul>

                        <div id="system-message-container">
                        </div>
                        <div class="login">


                            <form action="source/login.php" method="post"
                                  class="form-validate form-horizontal well">

                                <fieldset>
                                    <div class="control-group">
                                        <div class="control-label">
                                            <label id="username-lbl" for="username" class="required">
                                                Username<span class="star">&#160;*</span></label>
                                        </div>
                                        <div class="controls">
                                            <input type="text" name="name" id="username" value=""
                                                   class="validate-username required" size="25" required
                                                   aria-required="true" autofocus/>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <div class="control-label">
                                            <label id="password-lbl" for="password" class="required">
                                                Password<span class="star">&#160;*</span></label>
                                        </div>
                                        <div class="controls">
                                            <input type="password" name="password" id="password" value=""
                                                   class="validate-password required" size="25" maxlength="99" required
                                                   aria-required="true"/></div>
                                    </div>


                                    <div class="control-group">
                                        <div class="controls">
                                            <button type="submit" class="btn btn-primary">
                                                Log in
                                            </button>
                                        </div>
                                    </div>
                            </form>
                        </div>

                    </main>


                </div>

                <aside class="tm-sidebar-b uk-width-medium-1-4">
                    <div class="uk-panel uk-panel-box"><h3 class="uk-panel-title">Why Soccer Insider?</h3>
                        <strong><span style="color: #00cc00">FREE TIPS IF DRAW/LOSE</span></strong><br>
                        Guaranteed Free Tips Compensation. Continued Access on site on
                        the Next Match Day<br>
                        <br>
                        <strong><span style="color: #00cc00">HIGH AVERAGE ASIAN ODDS</span></strong><br>
                        Asian Handicaps Odds Based Advice with Minimum Recommended Odds 1.80<br>
                        <br>
                        <strong><span style="color: #00cc00">LONG TERM CONSISTENCY</span></strong><br>
                        Profitable Long Term Investment Opportunities Averaging Above 70% Winning Hit Rates!
                    </div>
                    <div class="uk-panel uk-panel-box"><h3 class="uk-panel-title">Resources</h3>
                        <center>

                            <a href="http://www.limso.org" target="_blank"><img
                                    src="http://www.limso.org/images/limso.88_31.gif" border=0
                                    alt="Limso.Org"/></a>
                            <br/>
                            <a href="http://www.asiabookie.info" target="_blank"><img
                                    src="http://www.asiabookie.info/images/asiabookie.jpg" border=0
                                    alt="Asiabookie.info"/></a>
                            <br/>

                            <a href="http://www.soccerpicks.info/" target="_blank"><img
                                    src="https://www.soccerpicks.info/button.php?u=soccerinsider"
                                    alt="SoccerPicks,Info Top Sites" border="0"/></a>

                            <a href="http://www.asianbookie.biz" target="_blank"><img
                                    src="http://www.asianbookie.biz/images/asianbookie.jpg" alt="AsianBookie.Biz"
                                    border="0"/></a>

                        </center>


                    </div>
                </aside>

            </div>

        </div>
    </div>


    <div class="tm-block-footer">
        <div class="uk-container uk-container-center">

            <footer class="tm-footer tm-link-muted">

                <a class="tm-totop-scroller" data-uk-smooth-scroll href="login-view=login.html#"></a>

                <div class="uk-panel">
                    Copyright © Soccer-Insider. All Rights Reserved. <a
                        href="index.php-option=com_content&amp;view=article&amp;id=8.html">Terms of Service</a> | <a
                        href="index.php-option=com_content&amp;view=article&amp;id=9.html">Privacy Policy</a> | <a
                        href="index.php-option=com_content&amp;view=article&amp;id=10.html">Disclaimer</a>


                </div>
            </footer>

        </div>
    </div>

</div>


<?php
require_once 'template/foot.php'
?>
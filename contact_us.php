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
                            <li class="uk-active"><span>Contact us</span></li>
                        </ul>

                        <div id="system-message-container">
                        </div>

                        <div class="contact" itemscope itemtype="https://schema.org/Person">


                            <h3></h3>


                            <dl class="contact-address dl-horizontal" itemprop="address" itemscope
                                itemtype="https://schema.org/PostalAddress">


                            </dl>


                            <h3>Contact Form</h3>
                            <div class="contact-form">
                                <form id="contact-form" action="contact-us.html" method="post"
                                      class="form-validate form-horizontal well">
                                    <fieldset>
                                        <legend>Send an Email</legend>
                                        <div class="control-group">
                                            <div class="control-label">
                                                <span class="spacer"><span class="before"></span><span
                                                        class="text"><label id="jform_spacer-lbl" class=""><strong
                                                                class="red">*</strong> Required field</label></span><span
                                                        class="after"></span></span></div>
                                            <div class="controls"></div>
                                        </div>
                                        <div class="control-group">
                                            <div class="control-label">
                                                <label id="jform_contact_name-lbl" for="jform_contact_name"
                                                       class="hasPopover required" title="Name"
                                                       data-content="Your name.">
                                                    Name<span class="star">&#160;*</span></label>
                                            </div>
                                            <div class="controls"><input type="text" name="jform[contact_name]"
                                                                         id="jform_contact_name" value=""
                                                                         class="required" size="30" required
                                                                         aria-required="true"/>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <div class="control-label">
                                                <label id="jform_contact_email-lbl" for="jform_contact_email"
                                                       class="hasPopover required" title="Email"
                                                       data-content="Email Address for contact.">
                                                    Email<span class="star">&#160;*</span></label>
                                            </div>
                                            <div class="controls"><input type="email" name="jform[contact_email]"
                                                                         class="validate-email required"
                                                                         id="jform_contact_email" value=""
                                                                         size="30" autocomplete="email" required
                                                                         aria-required="true"/></div>
                                        </div>
                                        <div class="control-group">
                                            <div class="control-label">
                                                <label id="jform_contact_emailmsg-lbl" for="jform_contact_emailmsg"
                                                       class="hasPopover required" title="Subject"
                                                       data-content="Enter the subject of your message here.">
                                                    Subject<span class="star">&#160;*</span></label>
                                            </div>
                                            <div class="controls"><input type="text" name="jform[contact_subject]"
                                                                         id="jform_contact_emailmsg" value=""
                                                                         class="required" size="60" required
                                                                         aria-required="true"/>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <div class="control-label">
                                                <label id="jform_contact_message-lbl" for="jform_contact_message"
                                                       class="hasPopover required" title="Message"
                                                       data-content="Enter your message here.">
                                                    Message<span class="star">&#160;*</span></label>
                                            </div>
                                            <div class="controls"><textarea name="jform[contact_message]"
                                                                            id="jform_contact_message" cols="50"
                                                                            rows="10" class="required" required
                                                                            aria-required="true"></textarea></div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>


                        </div>

                    </main>


                </div>

                <aside class="tm-sidebar-b uk-width-medium-1-4">
                    <div class="uk-panel uk-panel-box"><h3 class="uk-panel-title">Latest Tips</h3>
                        <table width="100%" border="0">
                            <tr>
                                <td>
                                    <div align="center"><strong>8th June 2017<br/>
                                            International Friendly</strong><br/>
                                        <p align="center"><font color="#00cc00" size="4"><b> Peru<br/>
                                                    vs<br/>
                                                    Paraguay</b></font></p>
                                        <a href="join.html"> <img src="images/buy_now.gif" border="0"/> <br/>
                                            &pound;50 </a></div>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="uk-panel uk-panel-box"><h3 class="uk-panel-title">Login Form</h3>
                        <form class="uk-form" action="contact-us.html" method="post">


                            <div class="uk-form-row">
                                <input class="uk-width-1-1" type="text" name="username" size="18"
                                       placeholder="Username">
                            </div>

                            <div class="uk-form-row">
                                <input class="uk-width-1-1" type="password" name="password" size="18"
                                       placeholder="Password">
                            </div>


                            <div class="uk-form-row">
                                <label for="modlgn-remember-605237620">Remember Me</label>
                                <input id="modlgn-remember-605237620" type="checkbox" name="remember" value="yes"
                                       checked>
                            </div>

                            <div class="uk-form-row">
                                <button class="uk-button uk-button-primary" value="Log in" name="Submit" type="submit">
                                    Log in
                                </button>
                            </div>

                            <ul class="uk-list uk-margin-bottom-remove">
                                <li><a href="login-view=reset.html">Forgot your password?</a></li>
                                <li><a href="login-view=remind.html">Forgot your username?</a></li>
                                <li><a href="http://www.soccer-insider.com/login?view=registration">Create an
                                        account</a></li>
                            </ul>



                        </form>
                    </div>
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

                <a class="tm-totop-scroller" data-uk-smooth-scroll href="contact-us.html#"></a>

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
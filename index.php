<?php
require_once 'autoload.php';
$db = new DB();
$tips=$db->getRows('main',['order_by'=>'id DESC','where'=>['status'=>1]]);
require_once 'template/head.php';
require_once 'template/nav.php';
?>
<style>
    #pre_match div{
        background-color: white;
        width: 100%;
        color: gray;
        font-weight: 800;

    }



    /*Remove that CSS*/
    .col-md-3 {
        margin-left:5%;
    }
    /*Remove that CSS*/



    button {
        margin: 20px 0;
        line-height: 34px;
        position: relative;
        cursor: pointer;
        user-select: none;
        outline:none !important;
        width:100%;
    }

    button:active {

        outline:none;
    }

    button.ribbon {

        outline:none;
        outline-color: transparent;
    }
    button.ribbon:before, button.ribbon:after {
        top: 5px;
        z-index: -10;
    }
    button.ribbon:before {
        border-color: #53dab6 #53dab6 #53dab6 transparent;
        left: -25px;
        border-width: 17px;
    }
    button.ribbon:after {
        border-color: #53dab6 transparent #53dab6 #53dab6;
        right: -25px;
        border-width: 17px;
    }

    button:before, button:after {
        content: '';
        position: absolute;
        height: 0;
        width: 0;
        border-style: solid;
        border-width: 0;
        outline:none;
    }

    button.btn-default:before {
        border-color: #757575 #757575 #757575 transparent;
    }
    button.btn-default:after {
        border-color: #757575 transparent #757575 #757575;
    }



    button.btn-primary:before {
        border-color: #2e6da4 #2e6da4 #2e6da4 transparent;
    }
    button.btn-primary:after {
        border-color: #2e6da4 transparent #2e6da4 #2e6da4;
    }


    button.btn-success:before {
        border-color: #398439 #398439 #398439 transparent;
    }
    button.btn-success:after {
        border-color: #398439 transparent #398439 #398439;
    }


    button.btn-info:before {
        border-color: #269abc #269abc #269abc transparent;
    }
    button.btn-info:after {
        border-color: #269abc transparent #269abc #269abc;
    }


    button.btn-warning:before {
        border-color: #d58512 #d58512 #d58512 transparent;
    }
    button.btn-warning:after {
        border-color: #d58512 transparent #d58512 #d58512;
    }


    button.btn-danger:before {
        border-color: #ac2925 #ac2925 #ac2925 transparent;
    }
    button.btn-danger:after {
        border-color: #ac2925 transparent #ac2925 #ac2925;
    }


    .update-nag{
        display: inline-block;
        font-size: 14px;
        text-align: left;
        background-color: gainsboro;;
        height: 70px;
        -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.2);
        box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
        margin-bottom: 10px;
        width: 100%;
    }

    .update-nag:hover{
        cursor: pointer;
        -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.4);
        box-shadow: 0 1px 1px 0 rgba(0,0,0,.3);
    }

    .update-nag > .update-split{
        background: #337ab7;
        width: 40px;
        float: left;
        color: #fff!important;
        height: 100%;
        text-align: center;
    }

    .update-nag > .update-split > .glyphicon{
        position:relative;
        top: calc(50% - 9px)!important; /* 50% - 3/4 of icon height */
    }
    .update-nag > .update-split.update-success{
        background: #5cb85c!important;
    }

    .update-nag > .update-split.update-danger{
        background: #d9534f!important;
    }

    .update-nag > .update-split.update-info{
        background: #5bc0de!important;
    }



    .update-nag > .update-text{
        line-height: 19px;
        padding-top: 24px;
        padding-left: 45px;
        padding-right: 20px;
    }

</style>
<div class="tm-wrapper">


    <div class="tm-block-top-main">
        <div class="uk-container uk-container-center">

            <div class="tm-middle uk-grid" data-uk-grid-match data-uk-grid-margin>

                <div class="tm-main uk-width-medium-3-4">
                    <main class="tm-content">

                        <ul class="uk-breadcrumb">
                            <li class="uk-active"><span>Home</span></li>
                        </ul>

                        <div id="system-message-container">
                        </div>


                        <div class="uk-grid tm-leading-article">
                            <div class="uk-width-1-1">
                                <article class="uk-article" data-permalink="http://www.soccer-insider.com/9-soccer/1-soccer-betting-advice-from-the-oracle">


                                    <h1 class="uk-article-title">
                                        Soccer Betting Advice from The Oracle
                                    </h1>


                                    <div>
                                        Welcome to Soccer-Insider.Com, the home of The Oracle.<br/>
                                        <br/>
                                        This is a soccer betting membership site concentrating exclusively on soccer and
                                        focusing on a number of different leagues, not just in the UK but across Europe.<br/>
                                        <br/>
                                        All selections are made by our industry soccer insider &quot;The Oracle&quot;.
                                        Very soon you too can be profiting simply by following his easy to follow
                                        football betting advice.<br/>
                                        <br/>
                                        His recommendations will always be single bets and in <b>asianhandicap</b> as
                                        anybody can tip Man Utd and Chelsea just to win each week, the skill is in
                                        identifying teams who have been underestimated at larger prices. Doubles or
                                        Trebles and upwards are just not profitable and they are the bedrock of
                                        bookmakers soccer profits. He very rarely tips odds less than value of 1.8 as he
                                        is aware a lot of punters bet in relatively small stakes and prefer to maximise
                                        their profits by backing larger prices.<br/>
                                        <br/>
                                        It is also important that you open an account with all the major online
                                        bookmakers, mainly Ladbrokes, William Hills, Paddy Power, Stan James, Skybet,
                                        Blue Square, Betfred, Sbobet, Dafabet, Sportingbet, Bet Direct and Victor
                                        Chandler. Most offer free bets to new customers and are very safe to bet with.
                                        It is crucial that you also have a Betfair account as being able to lay teams is
                                        a very useful tool and you can often back selections at far bigger prices than
                                        are available with bookmakers. If you have a Ladbrokes or Hills shop near you
                                        then you should place your bets on their shop coupons as often as possible as
                                        you will benefit from prices that have gone online and from their inability to
                                        monitor your bets. If you just take the Oracle's selections and go down to your
                                        local bookmaker in the high street you will also struggle to maximise your
                                        profits. It is crucial to your long term profits that you take the best
                                        available price. Even if you are only having relatively small bets, over the
                                        season the extra bit of value you are taking will add up to a nice sum.<br/>
                                        <br/>
                                        There are other sites who have ex players and managers giving their opinions.
                                        The big difference though is whilst they know about football they don't know
                                        about betting. Just from reading some of their comments you can tell that they
                                        have no idea what value is or when something is the wrong price. They've never
                                        worked on a trading floor and don't know how bookmakers think or the methods
                                        they use to formulate their prices. More importantly they don't know the flaws
                                        in some of these methods.<br/>
                                        <br/>
                                        Check out the <a href="http://soccer-insider.com/past-records">past records</a>
                                        section to see all the Oracle's previous winners.<br/>
                                        <br/>
                                        <a href="http://soccer-insider.com/join">Join up</a> today and start receiving
                                        the Oracle's expert football betting advice immediately.
                                    </div>


                                </article>
                            </div>
                        </div>
                        <div class="uk-grid" data-uk-grid-match data-uk-grid-margin>
                            <div class="uk-width-medium-1-1">
                                <article class="uk-article" data-permalink="http://www.soccer-insider.com/10-past-records/41-june-2017">


                                    <h1 class="uk-article-title">
                                        June 2017
                                    </h1>


                                    <div>
                                        <table width="100%" border="1" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td height="30" width="10%" bgcolor="#000000">
                                                    <div align="center"><strong style="color:#FFFFFF">DATE</strong>
                                                    </div>
                                                </td>
                                                <td height="30" width="20%" bgcolor="#000000">
                                                    <div align="center"><strong style="color:#FFFFFF">HOME</strong>
                                                    </div>
                                                </td>
                                                <td height="30" width="10%" bgcolor="#000000">
                                                    <div align="center"><strong style="color:#FFFFFF">ODDS</strong>
                                                    </div>
                                                </td>
                                                <td height="30" width="20%" bgcolor="#000000">
                                                    <div align="center"><strong style="color:#FFFFFF">AWAY</strong>
                                                    </div>
                                                </td>
                                                <td height="30" width="20%" bgcolor="#000000">
                                                    <div align="center"><strong style="color:#FFFFFF">INSIDER
                                                            TIPS</strong></div>
                                                </td>
                                                <td height="30" width="10%" bgcolor="#000000">
                                                    <div align="center"><strong style="color:#FFFFFF">SCORE</strong>
                                                    </div>
                                                </td>
                                                <td height="30" width="10%" bgcolor="#000000">
                                                    <div align="center"><strong style="color:#FFFFFF">VERDICT</strong>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td height="21" align="center">07</td>
                                                <td align="center">Atletico Mineiro</td>
                                                <td align="center">0:1 1/2</td>
                                                <td align="center"> Avai SC</td>
                                                <td align="center">Atletico Mineiro</td>
                                                <td align="center">1-0</td>
                                                <td align="center">Lose</td>
                                            </tr>
                                            <tr>
                                                <td height="21" align="center">06</td>
                                                <td align="center">ABC RN</td>
                                                <td align="center">0:1/4</td>
                                                <td align="center"> Paysandu PA</td>
                                                <td align="center">ABC RN</td>
                                                <td align="center">2-1</td>
                                                <td align="center"><font color="#00cc00"><strong>WIN</strong></font>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td height="21" align="center">04</td>
                                                <td align="center">Aalesund</td>
                                                <td align="center">0:1/2</td>
                                                <td align="center">Haugesund</td>
                                                <td align="center">Haugesund</td>
                                                <td align="center">0-1</td>
                                                <td align="center"><font color="#00cc00"><strong>WIN</strong></font>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td height="21" align="center">03</td>
                                                <td align="center">Juventus</td>
                                                <td align="center">0:0</td>
                                                <td align="center">Real Madrid</td>
                                                <td align="center">Real Madrid</td>
                                                <td align="center">1-4</td>
                                                <td align="center"><font color="#00cc00"><strong>WIN</strong></font>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td height="21" align="center">02</td>
                                                <td align="center">Elfsborg</td>
                                                <td align="center">0:1/4</td>
                                                <td align="center"> BK Hacken</td>
                                                <td align="center">Elfsborg</td>
                                                <td align="center">2-0</td>
                                                <td align="center"><font color="#00cc00"><strong>WIN</strong></font>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>


                                </article>
                            </div>
                        </div>


                    </main>


                </div>

                <aside class="tm-sidebar-b uk-width-medium-1-4">
                    <h3 class="uk-panel-title">Latest Tips</h3>
                    <?php
                    foreach ($tips as $tip){
//                        echo "<button type=\"button\" class=\"btn btn-danger ribbon\"><img src=\"asset/images/2.png\" width=\"25\" height=\"25\">".$tip['home'].'-'.$tip['away']."</button>";
                        echo ' <div class="col-md-12">
                                  <div class="update-nag">
                                    <div class="update-split" style="background-color: lavender !important;"><img src="asset/images/2.png" width="35px" height="35px"style="margin-top: 50%;"></div>
                                    <div class="update-text">
                                    <center><b>
                                    '.$tip['home'].'-'.$tip['away'].'
                                    </b></center>
                                    </div>
                                  </div>
                                </div>';
                    }
                    ?>

                    <div class="uk-panel uk-panel-box" style="margin-top: 70px;"><h3 class="uk-panel-title">Why Soccer Insider?</h3>
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

                <a class="tm-totop-scroller" data-uk-smooth-scroll href="index.php.html#"></a>

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
@extends('layouts.app')

@section('content')


<!--.side-menu-->

<h2 class="text-center text-secondary pb-2">PANEL DE CONTROL</h2>

<div class="container-fluid text-center">
    <div class="row">

        <!--.col-->
        <div class="col-xl-6">
            <div class="row">
                <div class="col-sm-6">
                    <article class="statistic-box red">
                        <div>
                            <div class="number text-light">26</div>
                            <div class="caption">
                                <div>Open tickets</div>
                            </div>
                            <div class="percent">
                                <div class="arrow up"></div>
                                <p>15%</p>
                            </div>
                        </div>
                    </article>
                </div>
                <!--.col-->
                <div class="col-sm-6">
                    <article class="statistic-box purple">
                        <div>
                            <div class="number text-light">12</div>
                            <div class="caption">
                                <div>Closes tickets</div>
                            </div>
                            <div class="percent">
                                <div class="arrow down"></div>
                                <p>11%</p>
                            </div>
                        </div>
                    </article>
                </div>
                <!--.col-->
                <div class="col-sm-6">
                    <article class="statistic-box yellow">
                        <div>
                            <div class="number text-light">104</div>
                            <div class="caption">
                                <div>New clients</div>
                            </div>
                            <div class="percent">
                                <div class="arrow down"></div>
                                <p>5%</p>
                            </div>
                        </div>
                    </article>
                </div>
                <!--.col-->
                <div class="col-sm-6">
                    <article class="statistic-box green">
                        <div>
                            <div class="number text-light">29</div>
                            <div class="caption">
                                <div>Here is an example of a long name</div>
                            </div>
                            <div class="percent">
                                <div class="arrow up"></div>
                                <p>84%</p>
                            </div>
                        </div>
                    </article>
                </div>
                <!--.col-->
            </div>
            <!--.row-->
        </div>
        <!--.col-->
        <div class="col-xl-6">
            <div class="row">
                <div class="col-sm-6">
                    <article class="statistic-box red">
                        <div>
                            <div class="number text-light">26</div>
                            <div class="caption">
                                <div>Open tickets</div>
                            </div>
                            <div class="percent">
                                <div class="arrow up"></div>
                                <p>15%</p>
                            </div>
                        </div>
                    </article>
                </div>
                <!--.col-->
                <div class="col-sm-6">
                    <article class="statistic-box purple">
                        <div>
                            <div class="number text-light">12</div>
                            <div class="caption">
                                <div>Closes tickets</div>
                            </div>
                            <div class="percent">
                                <div class="arrow down"></div>
                                <p>11%</p>
                            </div>
                        </div>
                    </article>
                </div>
                <!--.col-->
                <div class="col-sm-6">
                    <article class="statistic-box yellow">
                        <div>
                            <div class="number text-light">104</div>
                            <div class="caption">
                                <div>New clients</div>
                            </div>
                            <div class="percent">
                                <div class="arrow down"></div>
                                <p>5%</p>
                            </div>
                        </div>
                    </article>
                </div>
                <!--.col-->
                <div class="col-sm-6">
                    <article class="statistic-box green">
                        <div>
                            <div class="number text-light">29</div>
                            <div class="caption">
                                <div>Here is an example of a long name</div>
                            </div>
                            <div class="percent">
                                <div class="arrow up"></div>
                                <p>84%</p>
                            </div>
                        </div>
                    </article>
                </div>
                <!--.col-->
            </div>
            <!--.row-->
        </div>
        <!--.col-->
        <div class="col-xl-12">
            <div class="chart-statistic-box">
                <div class="chart-txt">
                    <div class="chart-txt-top">
                        <p><span class="unit">$</span><span class="number text-light">1540</span></p>
                        <p class="caption">Week income</p>
                    </div>
                    <table class="tbl-data">
                        <tr>
                            <td class="price color-purple">120$</td>
                            <td>Orders</td>
                        </tr>
                        <tr>
                            <td class="price color-yellow">15$</td>
                            <td>Investments</td>
                        </tr>
                        <tr>
                            <td class="price color-lime">55$</td>
                            <td>Others</td>
                        </tr>
                    </table>
                </div>
                <div class="chart-container">
                    <div class="chart-container-in">
                        <div id="chart_div"></div>
                        <header class="chart-container-title">Income</header>
                        <div class="chart-container-x">
                            <div class="item"></div>
                            <div class="item">tue</div>
                            <div class="item">wed</div>
                            <div class="item">thu</div>
                            <div class="item">fri</div>
                            <div class="item">sat</div>
                            <div class="item">sun</div>
                            <div class="item">mon</div>
                            <div class="item"></div>
                        </div>
                        <div class="chart-container-y">
                            <div class="item">300</div>
                            <div class="item"></div>
                            <div class="item">250</div>
                            <div class="item"></div>
                            <div class="item">200</div>
                            <div class="item"></div>
                            <div class="item">150</div>
                            <div class="item"></div>
                            <div class="item">100</div>
                            <div class="item"></div>
                            <div class="item">50</div>
                            <div class="item"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--.chart-statistic-box-->
        </div>
        
    </div>
    <!--.row-->

</div>
<!--.container-fluid-->

<!--.page-content-->



@endsection
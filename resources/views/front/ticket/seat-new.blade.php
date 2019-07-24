@extends('front.master')
@section('title')
    Home
@endsection

@section('content')
    <!-- Search bar -->

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 style="text-align: center">SeeMyShow : Movie </h2>
            </div>
        </div>
    </div>

    <div class="container">


        <div/>

        <!-- Main content -->

        <section class="container">
            <div class="order-container">
                <div class="order">
                    <img class="order__images" alt='' src="{{asset('/front/')}}/images/tickets.png">
                    <p class="order__title">Book a ticket <br><span class="order__descript">and have fun movie time</span></p>

                </div>
            </div>
            <div class="order-step-area">
                <div class="order-step first--step  ">1. What &amp; Where &amp; When &amp; Choose a sit</div>
                <div class="order-step second--step order-step--disable">2. Show Cart </div>
                <div class="order-step third--step order-step--disable">3. Check out</div>
            </div>



        </section>


        <section class="container">
            <div class="order-container">
                <div class="order">
                    <img class="order__images" alt="" src="images/tickets.png">
                    <p class="order__title">Book a ticket <br><span class="order__descript">and have fun movie time</span></p>
                    <div class="order__control">
                        <a href="#" class="order__control-btn active">Purchase</a>
                        <a href="#" class="order__control-btn">Reserve</a>
                    </div>
                </div>
            </div>
            <div class="order-step-area">
                <div class="order-step first--step order-step--disable ">1. What &amp; Where &amp; When</div>
                <div class="order-step second--step">2. Choose a sit</div>
            </div>

            <div class="choose-sits">
                <div class="choose-sits__info choose-sits__info--first">
                    <ul>
                        <li class="sits-price marker--none"><strong>Price</strong></li>
                        <li class="sits-price sits-price--cheap">$10</li>
                        <li class="sits-price sits-price--middle">$20</li>
                        <li class="sits-price sits-price--expensive">$30</li>
                    </ul>
                </div>

                <div class="choose-sits__info">
                    <ul>
                        <li class="sits-state sits-state--not">Not available</li>
                        <li class="sits-state sits-state--your">Your choice</li>
                    </ul>
                </div>

                <div class="col-sm-12 col-lg-10 col-lg-offset-1">
                    <div class="sits-area hidden-xs">
                        <div class="sits-anchor">screen</div>

                        <div class="sits">
                            <aside class="sits__line">
                                <span class="sits__indecator">A</span>
                                <span class="sits__indecator">B</span>
                                <span class="sits__indecator">C</span>
                                <span class="sits__indecator">D</span>
                                <span class="sits__indecator">E</span>
                                <span class="sits__indecator">F</span>
                                <span class="sits__indecator">G</span>
                                <span class="sits__indecator">I</span>
                                <span class="sits__indecator additional-margin">J</span>
                                <span class="sits__indecator">K</span>
                                <span class="sits__indecator">L</span>
                            </aside>

                            <div class="sits__row">
                                <span class="sits__place sits-price--cheap" data-place="A2" data-price="10">A2</span>
                                <span class="sits__place sits-price--cheap" data-place="A3" data-price="10">A3</span>
                                <span class="sits__place sits-price--cheap" data-place="A4" data-price="10">A4</span>
                                <span class="sits__place sits-price--cheap" data-place="A5" data-price="10">A5</span>
                                <span class="sits__place sits-price--cheap" data-place="A6" data-price="10">A6</span>
                                <span class="sits__place sits-price--cheap" data-place="A7" data-price="10">A7</span>
                                <span class="sits__place sits-price--cheap" data-place="A8" data-price="10">A8</span>
                                <span class="sits__place sits-price--cheap" data-place="A9" data-price="10">A9</span>
                                <span class="sits__place sits-price--cheap" data-place="A10" data-price="10">A10</span>
                                <span class="sits__place sits-price--cheap" data-place="A11" data-price="10">A11</span>
                                <span class="sits__place sits-price--cheap" data-place="A12" data-price="10">A12</span>
                                <span class="sits__place sits-price--cheap" data-place="A13" data-price="10">A13</span>
                                <span class="sits__place sits-price--cheap" data-place="A14" data-price="10">A14</span>
                                <span class="sits__place sits-price--cheap" data-place="A15" data-price="10">A15</span>
                                <span class="sits__place sits-price--cheap" data-place="A16" data-price="10">A16</span>
                                <span class="sits__place sits-price--cheap" data-place="A17" data-price="10">A17</span>
                            </div>

                            <div class="sits__row">
                                <span class="sits__place sits-price--cheap" data-place="B1" data-price="10">B1</span>
                                <span class="sits__place sits-price--cheap" data-place="B2" data-price="10">B2</span>
                                <span class="sits__place sits-price--cheap sits-state--your" data-place="B3" data-price="10">B3</span>
                                <span class="sits__place sits-price--cheap" data-place="B4" data-price="10">B4</span>
                                <span class="sits__place sits-price--cheap" data-place="B5" data-price="10">B5</span>
                                <span class="sits__place sits-price--cheap" data-place="B6" data-price="10">B6</span>
                                <span class="sits__place sits-price--cheap" data-place="B7" data-price="10">B7</span>
                                <span class="sits__place sits-price--cheap" data-place="B8" data-price="10">B8</span>
                                <span class="sits__place sits-price--cheap" data-place="B9" data-price="10">B9</span>
                                <span class="sits__place sits-price--cheap" data-place="B10" data-price="10">B10</span>
                                <span class="sits__place sits-price--cheap" data-place="B11" data-price="10">B11</span>
                                <span class="sits__place sits-price--cheap" data-place="B12" data-price="10">B12</span>
                                <span class="sits__place sits-price--cheap" data-place="B13" data-price="10">B13</span>
                                <span class="sits__place sits-price--cheap" data-place="B14" data-price="10">B14</span>
                                <span class="sits__place sits-price--cheap" data-place="B15" data-price="10">B15</span>
                                <span class="sits__place sits-price--cheap" data-place="B16" data-price="10">B16</span>
                                <span class="sits__place sits-price--cheap" data-place="B17" data-price="10">B17</span>
                                <span class="sits__place sits-price--cheap" data-place="B18" data-price="10">B18</span>
                            </div>

                            <div class="sits__row">
                                <span class="sits__place sits-price--cheap" data-place="C1" data-price="10">C1</span>
                                <span class="sits__place sits-price--cheap" data-place="C2" data-price="10">C2</span>
                                <span class="sits__place sits-price--cheap" data-place="C3" data-price="10">C3</span>
                                <span class="sits__place sits-price--cheap" data-place="C4" data-price="10">C4</span>
                                <span class="sits__place sits-price--cheap" data-place="C5" data-price="10">C5</span>
                                <span class="sits__place sits-price--cheap" data-place="C6" data-price="10">C6</span>
                                <span class="sits__place sits-price--cheap" data-place="C7" data-price="10">C7</span>
                                <span class="sits__place sits-price--cheap" data-place="C8" data-price="10">C8</span>
                                <span class="sits__place sits-price--cheap" data-place="C9" data-price="10">C9</span>
                                <span class="sits__place sits-price--cheap" data-place="C10" data-price="10">C10</span>
                                <span class="sits__place sits-price--cheap" data-place="C11" data-price="10">C11</span>
                                <span class="sits__place sits-price--cheap" data-place="C12" data-price="10">C12</span>
                                <span class="sits__place sits-price--cheap" data-place="C13" data-price="10">C13</span>
                                <span class="sits__place sits-price--cheap" data-place="C14" data-price="10">C14</span>
                                <span class="sits__place sits-price--cheap" data-place="C15" data-price="10">C15</span>
                                <span class="sits__place sits-price--cheap" data-place="C16" data-price="10">C16</span>
                                <span class="sits__place sits-price--cheap" data-place="C17" data-price="10">C17</span>
                                <span class="sits__place sits-price--cheap" data-place="C18" data-price="10">C18</span>
                            </div>

                            <div class="sits__row">
                                <span class="sits__place sits-price--cheap" data-place="D1" data-price="10">D1</span>
                                <span class="sits__place sits-price--cheap" data-place="D2" data-price="10">D2</span>
                                <span class="sits__place sits-price--cheap" data-place="D3" data-price="10">D3</span>
                                <span class="sits__place sits-price--cheap" data-place="D4" data-price="10">D4</span>
                                <span class="sits__place sits-price--cheap" data-place="D5" data-price="10">D5</span>
                                <span class="sits__place sits-price--cheap" data-place="D6" data-price="10">D6</span>
                                <span class="sits__place sits-price--cheap sits-state--not" data-place="D7" data-price="10">D7</span>
                                <span class="sits__place sits-price--cheap sits-state--not" data-place="D8" data-price="10">D8</span>
                                <span class="sits__place sits-price--cheap" data-place="D9" data-price="10">D9</span>
                                <span class="sits__place sits-price--cheap" data-place="D10" data-price="10">D10</span>
                                <span class="sits__place sits-price--cheap" data-place="D11" data-price="10">D11</span>
                                <span class="sits__place sits-price--cheap" data-place="D12" data-price="10">D12</span>
                                <span class="sits__place sits-price--cheap" data-place="D13" data-price="10">D13</span>
                                <span class="sits__place sits-price--cheap" data-place="D14" data-price="10">D14</span>
                                <span class="sits__place sits-price--cheap" data-place="D15" data-price="10">D15</span>
                                <span class="sits__place sits-price--cheap" data-place="D16" data-price="10">D16</span>
                                <span class="sits__place sits-price--cheap" data-place="D17" data-price="10">D17</span>
                                <span class="sits__place sits-price--cheap" data-place="D18" data-price="10">D18</span>
                            </div>

                            <div class="sits__row">
                                <span class="sits__place sits-price--middle" data-place="E1" data-price="20">E1</span>
                                <span class="sits__place sits-price--middle" data-place="E2" data-price="20">E2</span>
                                <span class="sits__place sits-price--middle" data-place="E3" data-price="20">E3</span>
                                <span class="sits__place sits-price--middle" data-place="E4" data-price="20">E4</span>
                                <span class="sits__place sits-price--middle" data-place="E5" data-price="20">E5</span>
                                <span class="sits__place sits-price--middle" data-place="E6" data-price="20">E6</span>
                                <span class="sits__place sits-price--middle" data-place="E7" data-price="20">E7</span>
                                <span class="sits__place sits-price--middle" data-place="E8" data-price="20">E8</span>
                                <span class="sits__place sits-price--middle" data-place="E9" data-price="20">E9</span>
                                <span class="sits__place sits-price--middle" data-place="E10" data-price="20">E10</span>
                                <span class="sits__place sits-price--middle" data-place="E11" data-price="20">E11</span>
                                <span class="sits__place sits-price--middle" data-place="E12" data-price="20">E12</span>
                                <span class="sits__place sits-price--middle" data-place="E13" data-price="20">E13</span>
                                <span class="sits__place sits-price--middle" data-place="E14" data-price="20">E14</span>
                                <span class="sits__place sits-price--middle" data-place="E15" data-price="20">E15</span>
                                <span class="sits__place sits-price--middle" data-place="E16" data-price="20">E16</span>
                                <span class="sits__place sits-price--middle" data-place="E17" data-price="20">E17</span>
                                <span class="sits__place sits-price--middle" data-place="E18" data-price="20">E18</span>
                            </div>

                            <div class="sits__row">
                                <span class="sits__place sits-price--middle" data-place="F1" data-price="20">F1</span>
                                <span class="sits__place sits-price--middle" data-place="F2" data-price="20">F2</span>
                                <span class="sits__place sits-price--middle" data-place="F3" data-price="20">F3</span>
                                <span class="sits__place sits-price--middle" data-place="F4" data-price="20">F4</span>
                                <span class="sits__place sits-price--middle" data-place="F5" data-price="20">F5</span>
                                <span class="sits__place sits-price--middle" data-place="F6" data-price="20">F6</span>
                                <span class="sits__place sits-price--middle" data-place="F7" data-price="20">F7</span>
                                <span class="sits__place sits-price--middle" data-place="F8" data-price="20">F8</span>
                                <span class="sits__place sits-price--middle" data-place="F9" data-price="20">F9</span>
                                <span class="sits__place sits-price--middle" data-place="F10" data-price="20">F10</span>
                                <span class="sits__place sits-price--middle" data-place="F11" data-price="20">F11</span>
                                <span class="sits__place sits-price--middle" data-place="F12" data-price="20">F12</span>
                                <span class="sits__place sits-price--middle" data-place="F13" data-price="20">F13</span>
                                <span class="sits__place sits-price--middle" data-place="F14" data-price="20">F14</span>
                                <span class="sits__place sits-price--middle" data-place="F15" data-price="20">F15</span>
                                <span class="sits__place sits-price--middle" data-place="F16" data-price="20">F16</span>
                                <span class="sits__place sits-price--middle" data-place="F17" data-price="20">F17</span>
                                <span class="sits__place sits-price--middle" data-place="F18" data-price="20">F18</span>
                            </div>

                            <div class="sits__row">
                                <span class="sits__place sits-price--middle" data-place="G1" data-price="20">G1</span>
                                <span class="sits__place sits-price--middle" data-place="G2" data-price="20">G2</span>
                                <span class="sits__place sits-price--middle" data-place="G3" data-price="20">G3</span>
                                <span class="sits__place sits-price--middle" data-place="G4" data-price="20">G4</span>
                                <span class="sits__place sits-price--middle" data-place="G5" data-price="20">G5</span>
                                <span class="sits__place sits-price--middle" data-place="G6" data-price="20">G6</span>
                                <span class="sits__place sits-price--middle" data-place="G7" data-price="20">G7</span>
                                <span class="sits__place sits-price--middle" data-place="G8" data-price="20">G8</span>
                                <span class="sits__place sits-price--middle" data-place="G9" data-price="20">G9</span>
                                <span class="sits__place sits-price--middle" data-place="G10" data-price="20">G10</span>
                                <span class="sits__place sits-price--middle" data-place="G11" data-price="20">G11</span>
                                <span class="sits__place sits-price--middle" data-place="G12" data-price="20">G12</span>
                                <span class="sits__place sits-price--middle" data-place="G13" data-price="20">G13</span>
                                <span class="sits__place sits-price--middle" data-place="G14" data-price="20">G14</span>
                                <span class="sits__place sits-price--middle" data-place="G15" data-price="20">G15</span>
                                <span class="sits__place sits-price--middle" data-place="G16" data-price="20">G16</span>
                                <span class="sits__place sits-price--middle" data-place="G17" data-price="20">G17</span>
                                <span class="sits__place sits-price--middle" data-place="G18" data-price="20">G18</span>
                            </div>

                            <div class="sits__row">
                                <span class="sits__place sits-price--middle" data-place="I3" data-price="20">I3</span>
                                <span class="sits__place sits-price--middle" data-place="I4" data-price="20">I4</span>
                                <span class="sits__place sits-price--middle" data-place="I5" data-price="20">I5</span>
                                <span class="sits__place sits-price--middle" data-place="I6" data-price="20">I6</span>
                                <span class="sits__place sits-price--middle" data-place="I7" data-price="20">I7</span>
                                <span class="sits__place sits-price--middle" data-place="I8" data-price="20">I8</span>
                                <span class="sits__place sits-price--middle" data-place="I9" data-price="20">I9</span>
                                <span class="sits__place sits-price--middle" data-place="I10" data-price="20">I10</span>
                                <span class="sits__place sits-price--middle" data-place="I11" data-price="20">I11</span>
                                <span class="sits__place sits-price--middle" data-place="I12" data-price="20">I12</span>
                                <span class="sits__place sits-price--middle" data-place="I13" data-price="20">I13</span>
                                <span class="sits__place sits-price--middle" data-place="I14" data-price="20">I14</span>
                                <span class="sits__place sits-price--middle" data-place="I15" data-price="20">I15</span>
                                <span class="sits__place sits-price--middle" data-place="I16" data-price="20">I16</span>
                            </div>

                            <div class="sits__row additional-margin">
                                <span class="sits__place sits-price--expensive" data-place="J5" data-price="30">J5</span>
                                <span class="sits__place sits-price--expensive" data-place="J6" data-price="30">J6</span>
                                <span class="sits__place sits-price--expensive" data-place="J7" data-price="30">J7</span>
                                <span class="sits__place sits-price--expensive" data-place="J8" data-price="30">J8</span>
                                <span class="sits__place sits-price--expensive" data-place="J9" data-price="30">J9</span>
                                <span class="sits__place sits-price--expensive" data-place="J10" data-price="30">J10</span>
                                <span class="sits__place sits-price--expensive" data-place="J11" data-price="30">J11</span>
                                <span class="sits__place sits-price--expensive" data-place="J12" data-price="30">J12</span>
                                <span class="sits__place sits-price--expensive" data-place="J13" data-price="30">J13</span>
                                <span class="sits__place sits-price--expensive" data-place="J14" data-price="30">J14</span>
                            </div>

                            <div class="sits__row">
                                <span class="sits__place sits-price--expensive" data-place="K5" data-price="30">K5</span>
                                <span class="sits__place sits-price--expensive" data-place="K6" data-price="30">K6</span>
                                <span class="sits__place sits-price--expensive" data-place="K7" data-price="30">K7</span>
                                <span class="sits__place sits-price--expensive" data-place="K8" data-price="30">K8</span>
                                <span class="sits__place sits-price--expensive" data-place="K9" data-price="30">K9</span>
                                <span class="sits__place sits-price--expensive" data-place="K10" data-price="30">K10</span>
                                <span class="sits__place sits-price--expensive" data-place="K11" data-price="30">K11</span>
                                <span class="sits__place sits-price--expensive" data-place="K12" data-price="30">K12</span>
                                <span class="sits__place sits-price--expensive" data-place="K13" data-price="30">K13</span>
                                <span class="sits__place sits-price--expensive" data-place="K14" data-price="30">K14</span>
                            </div>

                            <div class="sits__row">
                                <span class="sits__place sits-price--expensive" data-place="L6" data-price="30">L6</span>
                                <span class="sits__place sits-price--expensive" data-place="L7" data-price="30">L7</span>
                                <span class="sits__place sits-price--expensive" data-place="L8" data-price="30">L8</span>
                                <span class="sits__place sits-price--expensive" data-place="L9" data-price="30">L9</span>
                                <span class="sits__place sits-price--expensive" data-place="L10" data-price="30">L10</span>
                                <span class="sits__place sits-price--expensive" data-place="L11" data-price="30">L11</span>
                                <span class="sits__place sits-price--expensive" data-place="L12" data-price="30">L12</span>
                                <span class="sits__place sits-price--expensive" data-place="L13" data-price="30">L13</span>
                            </div>

                            <aside class="sits__checked">
                                <div class="checked-place"><span class="choosen-place B3">B3</span>

                                </div>
                                <div class="checked-result">$10</div>
                            </aside>
                            <footer class="sits__number">
                                <span class="sits__indecator">1</span>
                                <span class="sits__indecator">2</span>
                                <span class="sits__indecator">3</span>
                                <span class="sits__indecator">4</span>
                                <span class="sits__indecator">5</span>
                                <span class="sits__indecator">6</span>
                                <span class="sits__indecator">7</span>
                                <span class="sits__indecator">8</span>
                                <span class="sits__indecator">9</span>
                                <span class="sits__indecator">10</span>
                                <span class="sits__indecator">11</span>
                                <span class="sits__indecator">12</span>
                                <span class="sits__indecator">13</span>
                                <span class="sits__indecator">14</span>
                                <span class="sits__indecator">15</span>
                                <span class="sits__indecator">16</span>
                                <span class="sits__indecator">17</span>
                                <span class="sits__indecator">18</span>
                            </footer>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 visible-xs">
                    <div class="sits-area--mobile">
                        <div class="sits-area--mobile-wrap">
                            <div class="sits-select">
                                <select name="sorting_item" class="sits__sort sit-row" tabindex="0" sb="21708236" style="display: none;">
                                    <option value="1" selected="selected">A</option>
                                    <option value="2">B</option>
                                    <option value="3">C</option>
                                    <option value="4">D</option>
                                    <option value="5">E</option>
                                    <option value="6">F</option>
                                    <option value="7">G</option>
                                    <option value="8">I</option>
                                    <option value="9">J</option>
                                    <option value="10">K</option>
                                    <option value="11">L</option>
                                </select><div id="sbHolder_21708236" class="sbHolder" tabindex="0"><a id="sbToggle_21708236" href="#" class="sbToggle"></a><a id="sbSelector_21708236" href="#" class="sbSelector">A</a><ul id="sbOptions_21708236" class="sbOptions" style="display: none;"><li><a href="#1" rel="1" class="sbFocus">A</a></li><li><a href="#2" rel="2">B</a></li><li><a href="#3" rel="3">C</a></li><li><a href="#4" rel="4">D</a></li><li><a href="#5" rel="5">E</a></li><li><a href="#6" rel="6">F</a></li><li><a href="#7" rel="7">G</a></li><li><a href="#8" rel="8">I</a></li><li><a href="#9" rel="9">J</a></li><li><a href="#10" rel="10">K</a></li><li><a href="#11" rel="11">L</a></li></ul></div>

                                <select name="sorting_item" class="sits__sort sit-number" tabindex="1" sb="77349056" style="display: none;">
                                    <option value="1" selected="selected">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                </select><div id="sbHolder_77349056" class="sbHolder" tabindex="1"><a id="sbToggle_77349056" href="#" class="sbToggle"></a><a id="sbSelector_77349056" href="#" class="sbSelector">1</a><ul id="sbOptions_77349056" class="sbOptions" style="display: none;"><li><a href="#1" rel="1" class="sbFocus">1</a></li><li><a href="#2" rel="2">2</a></li><li><a href="#3" rel="3">3</a></li><li><a href="#4" rel="4">4</a></li><li><a href="#5" rel="5">5</a></li><li><a href="#6" rel="6">6</a></li><li><a href="#7" rel="7">7</a></li><li><a href="#8" rel="8">8</a></li><li><a href="#9" rel="9">9</a></li><li><a href="#10" rel="10">10</a></li><li><a href="#11" rel="11">11</a></li><li><a href="#12" rel="12">12</a></li><li><a href="#13" rel="13">13</a></li><li><a href="#14" rel="14">14</a></li><li><a href="#15" rel="15">15</a></li><li><a href="#16" rel="16">16</a></li><li><a href="#17" rel="17">17</a></li><li><a href="#18" rel="18">18</a></li></ul></div>

                                <a href="#" class="btn btn-md btn--warning toogle-sits">Choose sit</a>
                            </div>
                        </div>

                        <a href="#" class="watchlist add-sits-line">Add new sit</a>

                        <aside class="sits__checked">
                            <div class="checked-place"><span class="choosen-place B3">B3</span>
                                <span class="choosen-place"></span>
                            </div>
                            <div class="checked-result">$10</div>
                        </aside>

                        <img alt="" src="images/components/sits_mobile.png">
                    </div>
                </div>

            </div>


        </section>


        <div class="clearfix"></div>






        <div class="clearfix"></div>


@endsection


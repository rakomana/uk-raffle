@extends('layouts.app')

@section('content')

  <!-- inner-hero-section start -->
  <section class="inner-hero-section bg_img" data-background="assets/images/bg-img/inner-hero.jpg">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="page-title">Lottery Single</h2>
          <ol class="breadcum d-flex">
            <li><a href="index.html">Home</a></li>
            <li>Single Lottery</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <!-- inner-hero-section end -->

  <!-- lottery-single-section start -->
  <section class="lottery-single-section pt-120 pb-120 section-bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="lottery-single-wrapper">
            <div class="lottery-single-header">
              <div class="lottery-details">
                <div class="icon"><img src="assets/images/jackpot/5.png" alt="icon-image"></div>
                <div class="details">
                  <h4 class="jackpot-name">Euro Jackpot</h4>
                  <span class="jackpot-amount">$251,151,362</span>
                  <p class="next-draw-time">Next Draw : <span id="remainTime3"></span></p>
                </div>
              </div>
              <div class="lottery-action">
                <button type="button">Quick pick all</button>
                <button type="button" class="border-radius-100"><i class="fa fa-plus"></i></button>
                <button type="button" class="border-radius-100"><i class="fa fa-minus"></i></button>
              </div>
            </div>
            <div class="lottery-single-body">
              <div class="row mb-none-30">
                <div class="col-lg-3 col-sm-6">
                  <div class="lottery-play-single mb-30">
                    <div class="lottery-play-header">
                      <p>Pick 5 numbers</p>
                      <div class="btn-area">
                        <button type="button">Quick Pick</button>
                        <button type="button">Clear All</button>
                      </div>
                    </div><!-- lottery-play-header end -->
                    <div class="lottery-play-body">
                      <div class="main-num-list">
                        <span>01</span>
                        <span>02</span>
                        <span>03</span>
                        <span>04</span>
                        <span>05</span>
                        <span>06</span>
                        <span>07</span>
                        <span>08</span>
                        <span>09</span>
                        <span>10</span>
                        <span>11</span>
                        <span class="selected">12</span>
                        <span>13</span>
                        <span>14</span>
                        <span>15</span>
                        <span>16</span>
                        <span>17</span>
                        <span>18</span>
                        <span>19</span>
                        <span>20</span>
                        <span>21</span>
                        <span>22</span>
                        <span class="selected">23</span>
                        <span>24</span>
                        <span>25</span>
                        <span class="selected">26</span>
                        <span>27</span>
                        <span>28</span>
                        <span>29</span>
                        <span>30</span>
                        <span>31</span>
                        <span>32</span>
                        <span>33</span>
                        <span>34</span>
                        <span>35</span>
                        <span>36</span>
                        <span>37</span>
                        <span>38</span>
                        <span class="selected">39</span>
                        <span>40</span>
                        <span class="selected">41</span>
                        <span>42</span>
                        <span>43</span>
                        <span>44</span>
                        <span>45</span>
                        <span>46</span>
                        <span>47</span>
                        <span>48</span>
                        <span>49</span>
                        <span>50</span>
                      </div><!-- main-num-list end -->
                      <div class="bonus-num-list">
                        <span>01</span>
                        <span>02</span>
                        <span class="selected">03</span>
                        <span>04</span>
                        <span>05</span>
                        <span>06</span>
                        <span>07</span>
                        <span>08</span>
                        <span>09</span>
                        <span>10</span>
                      </div><!-- bonus-num-list end -->
                    </div><!-- lottery-play-body end -->
                    <div class="lottery-play-footer">
                      <p>Selected Numbers</p>
                      <div class="selected-numbers">
                        <span>12</span>
                        <span>23</span>
                        <span>26</span>
                        <span>39</span>
                        <span>41</span>
                        <span>03</span>
                      </div>
                    </div><!-- lottery-play-footer end -->
                  </div>
                </div><!-- lottery-play-single end -->
                <div class="col-lg-3 col-sm-6">
                  <div class="lottery-play-single mb-30">
                    <div class="lottery-play-header">
                      <p>Pick 5 numbers</p>
                      <div class="btn-area">
                        <button type="button">Quick Pick</button>
                        <button type="button">Clear All</button>
                      </div>
                    </div><!-- lottery-play-header end -->
                    <div class="lottery-play-body">
                      <div class="main-num-list">
                        <span>01</span>
                        <span>02</span>
                        <span>03</span>
                        <span>04</span>
                        <span>05</span>
                        <span class="selected">06</span>
                        <span>07</span>
                        <span>08</span>
                        <span>09</span>
                        <span>10</span>
                        <span>11</span>
                        <span>12</span>
                        <span>13</span>
                        <span>14</span>
                        <span>15</span>
                        <span>16</span>
                        <span>17</span>
                        <span>18</span>
                        <span>19</span>
                        <span>20</span>
                        <span>21</span>
                        <span>22</span>
                        <span class="selected">23</span>
                        <span>24</span>
                        <span>25</span>
                        <span>26</span>
                        <span>27</span>
                        <span>28</span>
                        <span>29</span>
                        <span>30</span>
                        <span class="selected">31</span>
                        <span>32</span>
                        <span>33</span>
                        <span class="selected">34</span>
                        <span>35</span>
                        <span>36</span>
                        <span>37</span>
                        <span>38</span>
                        <span>39</span>
                        <span>40</span>
                        <span>41</span>
                        <span>42</span>
                        <span class="selected">43</span>
                        <span>44</span>
                        <span>45</span>
                        <span>46</span>
                        <span>47</span>
                        <span>48</span>
                        <span>49</span>
                        <span>50</span>
                      </div><!-- main-num-list end -->
                      <div class="bonus-num-list">
                        <span>01</span>
                        <span>02</span>
                        <span>03</span>
                        <span>04</span>
                        <span class="selected">05</span>
                        <span>06</span>
                        <span>07</span>
                        <span>08</span>
                        <span>09</span>
                        <span>10</span>
                      </div><!-- bonus-num-list end -->
                    </div><!-- lottery-play-body end -->
                    <div class="lottery-play-footer">
                      <p>Selected Numbers</p>
                      <div class="selected-numbers">
                        <span>06</span>
                        <span>23</span>
                        <span>31</span>
                        <span>34</span>
                        <span>43</span>
                        <span>05</span>
                      </div>
                    </div><!-- lottery-play-footer end -->
                  </div>
                </div><!-- lottery-play-single end -->
                <div class="col-lg-3 col-sm-6">
                  <div class="lottery-play-single mb-30">
                    <div class="lottery-play-header">
                      <p>Pick 5 numbers</p>
                      <div class="btn-area">
                        <button type="button">Quick Pick</button>
                        <button type="button">Clear All</button>
                      </div>
                    </div><!-- lottery-play-header end -->
                    <div class="lottery-play-body">
                      <div class="main-num-list">
                        <span>01</span>
                        <span>02</span>
                        <span>03</span>
                        <span>04</span>
                        <span>05</span>
                        <span>06</span>
                        <span>07</span>
                        <span>08</span>
                        <span>09</span>
                        <span>10</span>
                        <span>11</span>
                        <span>12</span>
                        <span>13</span>
                        <span class="selected">14</span>
                        <span>15</span>
                        <span>16</span>
                        <span>17</span>
                        <span>18</span>
                        <span>19</span>
                        <span>20</span>
                        <span>21</span>
                        <span class="selected">22</span>
                        <span>23</span>
                        <span>24</span>
                        <span>25</span>
                        <span>26</span>
                        <span>27</span>
                        <span>28</span>
                        <span>29</span>
                        <span>30</span>
                        <span>31</span>
                        <span>32</span>
                        <span>33</span>
                        <span class="selected">34</span>
                        <span>35</span>
                        <span>36</span>
                        <span class="selected">37</span>
                        <span>38</span>
                        <span>39</span>
                        <span>40</span>
                        <span>41</span>
                        <span>42</span>
                        <span>43</span>
                        <span class="selected">44</span>
                        <span>45</span>
                        <span>46</span>
                        <span>47</span>
                        <span>48</span>
                        <span>49</span>
                        <span>50</span>
                      </div><!-- main-num-list end -->
                      <div class="bonus-num-list">
                        <span>01</span>
                        <span>02</span>
                        <span>03</span>
                        <span>04</span>
                        <span>05</span>
                        <span>06</span>
                        <span class="selected">07</span>
                        <span>08</span>
                        <span>09</span>
                        <span>10</span>
                      </div><!-- bonus-num-list end -->
                    </div><!-- lottery-play-body end -->
                    <div class="lottery-play-footer">
                      <p>Selected Numbers</p>
                      <div class="selected-numbers">
                        <span>14</span>
                        <span>22</span>
                        <span>34</span>
                        <span>37</span>
                        <span>44</span>
                        <span>07</span>
                      </div>
                    </div><!-- lottery-play-footer end -->
                  </div>
                </div><!-- lottery-play-single end -->
                <div class="col-lg-3 col-sm-6">
                  <div class="lottery-play-single mb-30">
                    <div class="lottery-play-header">
                      <p>Pick 5 numbers</p>
                      <div class="btn-area">
                        <button type="button">Quick Pick</button>
                        <button type="button">Clear All</button>
                      </div>
                    </div><!-- lottery-play-header end -->
                    <div class="lottery-play-body">
                      <div class="main-num-list">
                        <span>01</span>
                        <span>02</span>
                        <span>03</span>
                        <span>04</span>
                        <span>05</span>
                        <span>06</span>
                        <span class="selected">07</span>
                        <span>08</span>
                        <span>09</span>
                        <span>10</span>
                        <span>11</span>
                        <span>12</span>
                        <span>13</span>
                        <span>14</span>
                        <span>15</span>
                        <span>16</span>
                        <span>17</span>
                        <span class="selected">18</span>
                        <span>19</span>
                        <span>20</span>
                        <span>21</span>
                        <span>22</span>
                        <span>23</span>
                        <span>24</span>
                        <span>25</span>
                        <span>26</span>
                        <span class="selected">27</span>
                        <span>28</span>
                        <span>29</span>
                        <span>30</span>
                        <span>31</span>
                        <span>32</span>
                        <span>33</span>
                        <span class="selected">34</span>
                        <span>35</span>
                        <span>36</span>
                        <span>37</span>
                        <span>38</span>
                        <span>39</span>
                        <span>40</span>
                        <span>41</span>
                        <span class="selected">42</span>
                        <span>43</span>
                        <span>44</span>
                        <span>45</span>
                        <span>46</span>
                        <span>47</span>
                        <span>48</span>
                        <span>49</span>
                        <span>50</span>
                      </div><!-- main-num-list end -->
                      <div class="bonus-num-list">
                        <span>01</span>
                        <span>02</span>
                        <span>03</span>
                        <span class="selected">04</span>
                        <span>05</span>
                        <span>06</span>
                        <span>07</span>
                        <span>08</span>
                        <span>09</span>
                        <span>10</span>
                      </div><!-- bonus-num-list end -->
                    </div><!-- lottery-play-body end -->
                    <div class="lottery-play-footer">
                      <p>Selected Numbers</p>
                      <div class="selected-numbers">
                        <span>07</span>
                        <span>18</span>
                        <span>27</span>
                        <span>34</span>
                        <span>42</span>
                        <span>04</span>
                      </div>
                    </div><!-- lottery-play-footer end -->
                  </div>
                </div><!-- lottery-play-single end -->
              </div>
            </div>
            <div class="lottery-single-footer">
              <div class="row justify-content-between">
                <div class="col-lg-5">
                  <div class="winning-chance">
                    <h5 class="title">Winning Chance</h5>
                    <div class="progessbar">
                      <div class="progessbar-inner">70%</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-7">
                  <div class="amount-details">
                    <div class="left">
                      <p>01 Draw with 3 ticket : <span>03 x $399.45</span></p>
                      <p>Total Discount : <span>$0.00</span></p>
                    </div>
                    <div class="right">
                      <span class="total-amount">$588.65</span>
                      <button type="submit" class="cart-btn">Add cart</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- lottery-single-section end -->

  <!-- overview-section start -->
  <section class="overview-section pt-120 pb-120 section-bg-two">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="section-header text-center">
            <h2 class="section-title">Quick Overview</h2>
            <p>Lifant allows you to participate in the world’s biggest lotteries. We give you the possibility of purchasing lottery tickets in a safe and convenient manner from the comfort of your home. Let's see the quick reviews.</p>
          </div>
        </div>
      </div>
      <div class="row mb-none-30">
        <div class="col-lg-4 col-md-6">
          <div class="overview-single mb-30">
            <div class="icon"><img src="assets/images/svg-icon/overview/1.svg" alt="svg-icon"></div>
            <div class="content">
              <h4 class="title">How to play</h4>
              <p>Step 1: Register with Lotters. Step 2: Choose which lottery you wish to play. Step 4: Pick your numbers. Step 5: Cart your ticket. Step 6: Check the draw results.</p>
            </div>
          </div>
        </div><!-- overview-single end -->
        <div class="col-lg-4 col-md-6">
          <div class="overview-single mb-30">
            <div class="icon"><img src="assets/images/svg-icon/overview/2.svg" alt="svg-icon"></div>
            <div class="content">
              <h4 class="title">Why Play With Lotters</h4>
              <p>Lotters is the best service to acquire lotteries of world-famous state lotteries online. We offer some of the lowest prices on tickets of the lotteries we represent.</p>
            </div>
          </div>
        </div><!-- overview-single end -->
        <div class="col-lg-4 col-md-6">
          <div class="overview-single mb-30">
            <div class="icon"><img src="assets/images/svg-icon/overview/3.svg" alt="svg-icon"></div>
            <div class="content">
              <h4 class="title">When’s the draw?</h4>
              <p>We are providing the most updated lottery draw. Results of each draw are published on our website in the "Results" section within three hours after they are published.</p>
            </div>
          </div>
        </div><!-- overview-single end -->
      </div>
    </div>
  </section>
  <!-- overview-section end -->

  <!-- action-section start -->
  <section class="action-section section-bg">
    <div class="container">
      <div class="row align-items-center justify-content-between">
        <div class="col-lg-8">
          <div class="action-content">
            <h2 class="title">Have you any questions?</h2>
            <p>If you have any questions or queries our helpful support team will be more than happy to assist.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="btn-area text-lg-right text-center">
            <a href="#0" class="cmn-btn">Contact with us</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- action-section end -->


 <!-- scroll-to-top start -->
 <div class="scroll-to-top">
    <span class="scroll-icon">
      <i class="fa fa-rocket"></i>
    </span>
  </div>
  <!-- scroll-to-top end -->

  @endsection
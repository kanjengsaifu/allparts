

<section>
      <a name="a"></a>
      <aside class="aside3">
        <h2><img src="images/flecha.png" width="30px" height="30px"> &nbsp;laterall_1</h2>
        <div>
          <ul class="listpro">
            <li><span>&#9658;</span><a href="productos/"> laterall_2</a></li>
            <li><span>&#9658;</span><a href="productos/1"> laterall_3</a></li>
            <li><span>&#9658;</span><a href="productos/2"> laterall_4</a></li>
            <li><span>&#9658;</span><a href="productos/3"> laterall_5</a></li>
            <li><span>&#9658;</span><a href="productos/4"> laterall_6</a></li>
            <li><span>&#9658;</span><a href="productos/5"> laterall_7</a></li>
            <li><span>&#9658;</span><a href="productos/6"> laterall_8</a></li>
            <li><span>&#9658;</span><a href="productos/7"> laterall_9</a></li>
            <li><span>&#9658;</span><a href="productos/8"> lateralll_10</a></li>
            <li><span>&#9658;</span><a href="productos/9"> lateralll_11</a></li>
            <li><span>&#9658;</span><a href="productos/10"> lateralll_12</a></li>
            <li><span>&#9658;</span><a href="productos/11"> lateralll_13</a></li>
            <li><span>&#9658;</span><a href="productos/12"> lateralll_14</a></li>
            <li><span>&#9658;</span><a href="productos/13"> lateralll_15</a></li>
            <li><span>&#9658;</span><a href="productos/14"> lateralll_16</a></li>
            <li><span>&#9658;</span><a href="productos/15"> lateralll_17</a></li>
            <li><span>&#9658;</span><a href="productos/16"> lateralll_18</a></li>
            <li><span>&#9658;</span><a href="productos/17"> lateralll_19</a></li>
            <li><span>&#9658;</span><a href="productos/18"> lateralll_20</a></li>
            <li><span>&#9658;</span><a href="productos/19"> lateralll_21</a></li>
            <li><span>&#9658;</span><a href="productos/20"> lateralll_22</a></li>
          </ul>
        </div>
      </aside>
      <article class="article3">
        <?php
          if ((isset($_GET['tipoPro']) && $_GET['tipoPro']=="0") || (isset($_GET['tipoPro']) && $_GET['tipoPro'] == null))
          {
            echo "<h2>lateral_1</h2>";
            echo "<p>sublateraall_1</p><br>";
            echo "<h2>article_1</h2><br>";
            echo "<ul>";
            echo "<li class='prolist'><span>&#8226;</span><a href='productos/a0'> BENDIX</a></li>";
            echo "<li class='prolist'><span>&#8226;</span><a href='productos/a1'> BOBCAT</a></li>";
            echo "<li class='prolist'><span>&#8226;</span><a href='productos/a2'> CARRIER</a></li>";
            echo "<li class='prolist'><span>&#8226;</span><a href='productos/a3'> CASE</a></li>";
            echo "<li class='prolist'><span>&#8226;</span><a href='productos/a4'> CATERPILLAR</a></li>";
            echo "<li class='prolist'><span>&#8226;</span><a href='productos/a5'> CUMMINS</a></li>";
            echo "<li class='prolist'><span>&#8226;</span><a href='productos/a6'> DETROIT</a></li>";
            echo "<li class='prolist'><span>&#8226;</span><a href='productos/a7'> FORD</a></li>";
            echo "<li class='prolist'><span>&#8226;</span><a href='productos/a8'> HINO</a></li>";
            echo "<li class='prolist'><span>&#8226;</span><a href='productos/a9'> IHC</a></li>";
            echo "<li class='prolist'><span>&#8226;</span><a href='productos/a10'> ISUZU</a></li>";
            echo "<li class='prolist'><span>&#8226;</span><a href='productos/a11'> JOHN DEERE</a></li>";
            echo "<li class='prolist'><span>&#8226;</span><a href='productos/a12'> KUBOTA</a></li>";
            echo "<li class='prolist'><span>&#8226;</span><a href='productos/a13'> MASSEY FERGUSON</a></li>";
            echo "<li class='prolist'><span>&#8226;</span><a href='productos/a14'> MAZDA</a></li>";
            echo "<li class='prolist'><span>&#8226;</span><a href='productos/a15'> NAVISTAR</a></li>";
            echo "<li class='prolist'><span>&#8226;</span><a href='productos/a16'> NISSAN</a></li>";
            echo "<li class='prolist'><span>&#8226;</span><a href='productos/a17'> PERKINS</a></li>";
            echo "<li class='prolist'><span>&#8226;</span><a href='productos/a18'> THERMO-KING</a></li>";
            echo "<li class='prolist'><span>&#8226;</span><a href='productos/a19'> TOYOTA</a></li>";
            echo "<li class='prolist'><span>&#8226;</span><a href='productos/a20'> WAUKESHA</a></li>";
            echo "<li class='prolist'><span>&#8226;</span><a href='productos/a21'> YANMAR</a></li>";
            echo "</ul>";
            echo "<br><br><h4>article_2 <a href='cotizaciones/'>article_3</a></h4>";
          } else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="1" )
          {
            echo "<h2>subarticlee_3</h2><br>";
            echo "<img width='130' height='110' src='images/pro/1/1.jpg'>";
            echo "<img width='130' height='110' src='images/pro/1/2.jpg'>";
            echo "<img width='130' height='110' src='images/pro/1/3.jpg'>";
            echo "<img width='130' height='110' src='images/pro/1/4.jpg'>";
            echo "<br><br><h4>article_2 <a href='cotizaciones/'>article_3</a></h4>";
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="2" )
          {
            echo "<h2>article_4</h2><br>";
            echo "<img width='130' height='110' src='images/pro/2/1.jpg'>";
            echo "<img width='130' height='110' src='images/pro/2/2.jpg'>";
            echo "<img width='130' height='110' src='images/pro/2/3.jpg'>";
            echo "<img width='130' height='110' src='images/pro/2/4.jpg'>";
            echo "<img width='130' height='110' src='images/pro/2/5.jpg'>";
            echo "<img width='130' height='110' src='images/pro/2/6.jpg'>";
            echo "<img width='130' height='110' src='images/pro/2/7.jpg'>";
            echo "<br><br><h4>article_2 <a href='cotizaciones/'>article_3</a></h4>";
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="3" )
          {
            echo "<h2>article_5</h2><br>";
            echo "<img width='130' height='110' src='images/pro/3/1.jpg'>";
            echo "<img width='130' height='110' src='images/pro/3/2.jpg'>";
            echo "<img width='130' height='110' src='images/pro/3/3.jpg'>";
            echo "<img width='130' height='110' src='images/pro/3/4.jpg'>";
            echo "<img width='130' height='110' src='images/pro/3/5.jpg'>";
            echo "<img width='130' height='110' src='images/pro/3/6.jpg'>";
            echo "<img width='130' height='110' src='images/pro/3/7.jpg'>";
            echo "<img width='130' height='110' src='images/pro/3/8.jpg'>";
            echo "<img width='130' height='110' src='images/pro/3/9.jpg'>";
            echo "<br><br><h4>article_2 <a href='cotizaciones/'>article_3</a></h4>";
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="4" )
          {
            echo "<h2>article_6</h2><br>";
            echo "<img width='130' height='110' src='images/pro/4/1.gif'>";
            echo "<img width='130' height='110' src='images/pro/4/2.jpg'>";
            echo "<img width='130' height='110' src='images/pro/4/3.jpg'>";
            echo "<img width='130' height='110' src='images/pro/4/4.jpg'>";
            echo "<img width='130' height='110' src='images/pro/4/5.jpg'>";
            echo "<img width='130' height='110' src='images/pro/4/6.jpg'>";
            echo "<img width='130' height='110' src='images/pro/4/7.jpg'>";
            echo "<img width='130' height='110' src='images/pro/4/8.jpg'>";
            echo "<br><br><h4>article_2 <a href='cotizaciones/'>article_3</a></h4>";
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="5" )
          {
            echo "<h2>article_7</h2><br>";
            echo "<img width='130' height='110' src='images/pro/5/1.jpg'>";
            echo "<img width='130' height='110' src='images/pro/5/2.jpg'>";
            echo "<img width='130' height='110' src='images/pro/5/3.jpg'>";
            echo "<img width='130' height='110' src='images/pro/5/4.jpg'>";
            echo "<img width='130' height='110' src='images/pro/5/5.jpg'>";
            echo "<img width='130' height='110' src='images/pro/5/6.gif'>";
            echo "<img width='130' height='110' src='images/pro/5/7.jpg'>";
            echo "<br><br><h4>article_2 <a href='cotizaciones/'>article_3</a></h4>";
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="6" )
          {
            echo "<h2>article_8</h2><br>";
            echo "<img width='130' height='110' src='images/pro/6/1.jpg'>";
            echo "<img width='130' height='110' src='images/pro/6/2.jpg'>";
            echo "<br><br><h4>article_2 <a href='cotizaciones/'>article_3</a></h4>";
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="7" )
          {
            echo "<h2>article_9</h2><br>";
            echo "<img width='130' height='110' src='images/pro/7/1.jpg'>";
            echo "<img width='130' height='110' src='images/pro/7/2.jpg'>";
            echo "<img width='130' height='110' src='images/pro/7/3.jpg'>";
            echo "<img width='130' height='110' src='images/pro/7/4.jpg'>";
            echo "<br><br><h4>article_2 <a href='cotizaciones/'>article_3</a></h4>";
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="8" )
          {
            echo "<h2>articlee_10</h2><br>";
            echo "<img width='130' height='110' src='images/pro/8/1.jpg'>";
            echo "<img width='130' height='110' src='images/pro/8/2.jpg'>";
            echo "<img width='130' height='110' src='images/pro/8/3.jpg'>";
            echo "<br><br><h4>article_2 <a href='cotizaciones/'>article_3</a></h4>";
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="9" )
          {
            echo "<h2>articlee_11</h2><br>";
            echo "<img width='130' height='110' src='images/pro/9/1.jpg'>";
            echo "<img width='130' height='110' src='images/pro/9/2.jpg'>";
            echo "<img width='130' height='110' src='images/pro/9/3.jpg'>";
            echo "<img width='130' height='110' src='images/pro/9/4.jpg'>";
            echo "<img width='130' height='110' src='images/pro/9/5.gif'>";
            echo "<img width='130' height='110' src='images/pro/9/6.jpg'>";
            echo "<img width='130' height='110' src='images/pro/9/7.jpg'>";
            echo "<img width='130' height='110' src='images/pro/9/8.jpg'>";
            echo "<br><br><h4>article_2 <a href='cotizaciones/'>article_3</a></h4>";
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="10" )
          {
            echo "<h2>articlee_12</h2><br>";
            echo "<img width='130' height='110' src='images/pro/10/1.jpg'>";
            echo "<img width='130' height='110' src='images/pro/10/2.jpg'>";
            echo "<img width='130' height='110' src='images/pro/10/3.jpg'>";
            echo "<img width='130' height='110' src='images/pro/10/4.jpg'>";
            echo "<br><br><h4>article_2 <a href='cotizaciones/'>article_3</a></h4>";
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="11" )
          {
            echo "<h2>articlee_13</h2><br>";
            echo "<img width='130' height='110' src='images/pro/11/1.jpg'>";
            echo "<img width='130' height='110' src='images/pro/11/2.jpg'>";
            echo "<img width='130' height='110' src='images/pro/11/3.jpg'>";
            echo "<img width='130' height='110' src='images/pro/11/4.jpg'>";
            echo "<img width='130' height='110' src='images/pro/11/5.jpg'>";
            echo "<img width='130' height='110' src='images/pro/11/6.jpg'>";
            echo "<img width='130' height='110' src='images/pro/11/7.jpg'>";
            echo "<img width='130' height='110' src='images/pro/11/8.jpg'>";
            echo "<br><br><h4>article_2 <a href='cotizaciones/'>article_3</a></h4>";
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="12" )
          {
            echo "<h2>articlee_14</h2><br>";
            echo "<img width='130' height='110' src='images/pro/12/1.jpg'>";
            echo "<img width='130' height='110' src='images/pro/12/2.jpg'>";
            echo "<img width='130' height='110' src='images/pro/12/3.jpg'>";
            echo "<img width='130' height='110' src='images/pro/12/4.jpg'>";
            echo "<img width='130' height='110' src='images/pro/12/5.jpg'>";
            echo "<img width='130' height='110' src='images/pro/12/6.jpg'>";
            echo "<img width='130' height='110' src='images/pro/12/7.jpg'>";
            echo "<br><br><h4>article_2 <a href='cotizaciones/'>article_3</a></h4>";
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="13" )
          {
            echo "<h2>articlee_15</h2><br>";
            echo "<img width='130' height='110' src='images/pro/13/1.jpg'>";
            echo "<img width='130' height='110' src='images/pro/13/2.jpg'>";
            echo "<img width='130' height='110' src='images/pro/13/3.jpg'>";
            echo "<img width='130' height='110' src='images/pro/13/4.jpg'>";
            echo "<img width='130' height='110' src='images/pro/13/5.jpg'>";
            echo "<img width='130' height='110' src='images/pro/13/6.jpg'>";
            echo "<img width='130' height='110' src='images/pro/13/7.jpg'>";
            echo "<img width='130' height='110' src='images/pro/13/8.jpg'>";
            echo "<img width='130' height='110' src='images/pro/13/9.jpg'>";
            echo "<img width='130' height='110' src='images/pro/13/10.jpg'>";
            echo "<img width='130' height='110' src='images/pro/13/11.jpg'>";
            echo "<img width='130' height='110' src='images/pro/13/12.jpg'>";
            echo "<img width='130' height='110' src='images/pro/13/13.jpg'>";
            echo "<img width='130' height='110' src='images/pro/13/14.jpg'>";
            echo "<img width='130' height='110' src='images/pro/13/15.jpg'>";
            echo "<img width='130' height='110' src='images/pro/13/16.jpg'>";
            echo "<img width='130' height='110' src='images/pro/13/17.jpg'>";
            echo "<br><br><h4>article_2 <a href='cotizaciones/'>article_3</a></h4>";         
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="14" )
          {
            echo "<h2>articlee_16</h2><br>";
            echo "<img width='130' height='110' src='images/pro/14/1.jpg'>";
            echo "<img width='130' height='110' src='images/pro/14/2.jpg'>";
            echo "<img width='130' height='110' src='images/pro/14/3.jpg'>";
            echo "<img width='130' height='110' src='images/pro/14/4.jpg'>";
            echo "<br><br><h4>article_2 <a href='cotizaciones/'>article_3</a></h4>";
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="15" )
          {
            echo "<h2>articlee_17</h2><br>";
            echo "<img width='130' height='110' src='images/pro/15/1.jpg'>";
            echo "<img width='130' height='110' src='images/pro/15/2.gif'>";
            echo "<img width='130' height='110' src='images/pro/15/3.jpg'>";
            echo "<img width='130' height='110' src='images/pro/15/4.jpg'>";
            echo "<img width='130' height='110' src='images/pro/15/5.jpg'>";
            echo "<img width='130' height='110' src='images/pro/15/6.jpg'>";
            echo "<br><br><h4>article_2 <a href='cotizaciones/'>article_3</a></h4>";
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="16" )
          {
            echo "<h2>articlee_18</h2><br>";
            echo "<img width='130' height='110' src='images/pro/16/1.jpg'>";
            echo "<img width='130' height='110' src='images/pro/16/2.jpg'>";
            echo "<img width='130' height='110' src='images/pro/16/3.jpg'>";
            echo "<img width='130' height='110' src='images/pro/16/4.jpg'>";
            echo "<img width='130' height='110' src='images/pro/16/5.jpg'>";
            echo "<img width='130' height='110' src='images/pro/16/6.jpg'>";
            echo "<img width='130' height='110' src='images/pro/16/7.jpg'>";
            echo "<img width='130' height='110' src='images/pro/16/8.jpg'>";
            echo "<img width='130' height='110' src='images/pro/16/9.gif'>";
            echo "<br><br><h4>article_2 <a href='cotizaciones/'>article_3</a></h4>";
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="17" )
          {
            echo "<h2>articlee_19</h2><br>";
            echo "<img width='130' height='110' src='images/pro/17/1.jpg'>";
            echo "<img width='130' height='110' src='images/pro/17/2.jpg'>";
            echo "<img width='130' height='110' src='images/pro/17/3.jpg'>";
            echo "<img width='130' height='110' src='images/pro/17/4.jpg'>";
            echo "<img width='130' height='110' src='images/pro/17/5.jpg'>";
            echo "<img width='130' height='110' src='images/pro/17/6.jpg'>";
            echo "<img width='130' height='110' src='images/pro/17/7.jpg'>";
            echo "<img width='130' height='110' src='images/pro/17/8.jpg'>";
            echo "<br><br><h4>article_2 <a href='cotizaciones/'>article_3</a></h4>";
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="18" )
          {
            echo "<h2>articlee_20</h2><br>";
            echo "<img width='130' height='110' src='images/pro/18/1.jpg'>";
            echo "<img width='130' height='110' src='images/pro/18/2.jpg'>";
            echo "<img width='130' height='110' src='images/pro/18/3.jpg'>";
            echo "<img width='130' height='110' src='images/pro/18/4.jpg'>";
            echo "<img width='130' height='110' src='images/pro/18/5.jpg'>";
            echo "<br><br><h4>article_2 <a href='cotizaciones/'>article_3</a></h4>";
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="19" )
          {
            echo "<h2>articlee_21</h2><br>";
            echo "<img width='130' height='110' src='images/pro/19/1.jpg'>";
            echo "<img width='130' height='110' src='images/pro/19/2.jpg'>";
            echo "<img width='130' height='110' src='images/pro/19/3.jpg'>";
            echo "<img width='130' height='110' src='images/pro/19/4.jpg'>";
            echo "<img width='130' height='110' src='images/pro/19/5.jpg'>";
            echo "<img width='130' height='110' src='images/pro/19/6.jpg'>";
            echo "<img width='130' height='110' src='images/pro/19/7.jpg'>";
            echo "<img width='130' height='110' src='images/pro/19/8.jpg'>";
            echo "<img width='130' height='110' src='images/pro/19/9.jpg'>";
            echo "<img width='130' height='110' src='images/pro/19/10.jpg'>";
            echo "<img width='130' height='110' src='images/pro/19/11.jpg'>";
            echo "<img width='130' height='110' src='images/pro/19/12.jpg'>";
            echo "<img width='130' height='110' src='images/pro/19/13.jpg'>";
            echo "<img width='130' height='110' src='images/pro/19/14.jpg'>";
            echo "<img width='130' height='110' src='images/pro/19/15.jpg'>";
            echo "<img width='130' height='110' src='images/pro/19/16.jpg'>";
            echo "<br><br><h4>article_2 <a href='cotizaciones/'>article_3</a></h4>";
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="20" )
          {
            echo "<h2>articlee_22</h2><br>";
            echo "<img width='130' height='110' src='images/pro/20/1.jpg'>";
            echo "<img width='130' height='110' src='images/pro/20/2.jpg'>";
            echo "<img width='130' height='110' src='images/pro/20/3.jpg'>";
            echo "<img width='130' height='110' src='images/pro/20/4.jpg'>";
            echo "<img width='130' height='110' src='images/pro/20/5.jpg'>";
            echo "<img width='130' height='110' src='images/pro/20/6.jpg'>";
            echo "<img width='130' height='110' src='images/pro/20/7.gif'>";
            echo "<img width='130' height='110' src='images/pro/20/8.jpg'>";
            echo "<img width='130' height='110' src='images/pro/20/9.jpg'>";
            echo "<img width='130' height='110' src='images/pro/20/10.jpg'>";
            echo "<img width='130' height='110' src='images/pro/20/11.jpg'>";
            echo "<img width='130' height='110' src='images/pro/20/12.jpg'>";
            echo "<img width='130' height='110' src='images/pro/20/13.jpg'>";
            echo "<img width='130' height='110' src='images/pro/20/14.jpg'>";
            echo "<img width='130' height='110' src='images/pro/20/15.jpg'>";
            echo "<br><br><h4>article_2 <a href='cotizaciones/'>article_3</a></h4>";
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="a0")
          {
            echo "<h2 class='padd'>BENDIX<span>lateral_1</span></h2>";
            echo "<div class='overhaul'>";
            echo "<h3>articlee_23</h3>";
            echo "<ul class='over'>";
            echo "<li>TUFLO 400</li>";
            echo "<li>TUFLO 500</li>";
            echo "<li>TUFLO 501</li>";
            echo "<li>TUFLO 550</li>";
            echo "<li>TUFLO 600</li>";
            echo "<li>TUFLO 700</li>";
            echo "<li>TUFLO 750</li>";
            echo "<li>TUFLO 1000</li>";
            echo "</ul>";
            echo "<h3>articlee_24</h3>";
            echo "<ul>";
            echo "<li>articlee_25<li>";
            echo "<li>articlee_26</li>";
            echo "<li>articlee_27</li>";
            echo "<li>articlee_28</li>";
            echo "<li>articlee_29</li>";
            echo "<li>articlee_30</li>";
            echo "</ul>";
            echo "</div>";
            echo "<br><br><h4>article_2 <a href='cotizaciones/'>article_3</a></h4>";          
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="a1")
          {
            echo "<h2 class='padd'>BOBCAT<span>lateral_1</span></h2>";
            echo "<div class='overhaul'>";
            echo "<h3>articlee_23</h3>";
            echo "<ul class='over'>";
            echo "<li>320</li>";
            echo "<li>322</li>";
            echo "<li>325</li>";
            echo "<li>328</li>";
            echo "<li>331</li>";
            echo "<li>334</li>";
            echo "<li>337</li>";
            echo "<li>341</li>";
            echo "<li>742</li>";
            echo "<li>743</li>";
            echo "<li>751</li>";
            echo "<li>753</li>";
            echo "<li>763</li>";
            echo "<li>773</li>";
            echo "<li>825</li>";
            echo "<li>853</li>";
            echo "<li>943</li>";
            echo "<li>953</li>";
            echo "<li>970</li>";
            echo "<li>974</li>";
            echo "<li>1213</li>";
            echo "<li>1600</li>";
            echo "<li>2400</li>";
            echo "<li>2410-E</li>";
            echo "<li>2410-L</li>";
            echo "<li>642-B</li>";
            echo "<li>642-E</li>";
            echo "<li>643-L</li>";
            echo "<li>742B-E</li>";
            echo "<li>742B-L</li>";
            echo "<li>751G</li>";
            echo "<li>753G</li>";
            echo "<li>753H</li>";
            echo "<li>753L</li>";
            echo "<li>763G</li>";
            echo "<li>773G-E</li>";
            echo "<li>773G-L</li>";
            echo "<li>843B</li>";
            echo "<li>843-L</li>";
            echo "<li>963G-E</li>";
            echo "<li>963G-L</li>";            
            echo "</ul>";
            echo "</div>";
            echo "<br><br><h4>article_2 <a href='cotizaciones/'>article_3</a></h4>";          
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="a2")
          {
            echo "<h2 class='padd'>CARRIER<span>lateral_1</span></h2>";
            echo "<div class='overhaul'>";
            echo "<h3>articlee_23</h3>";
            echo "<ul class='over'>";
            echo "<li>CT3-44-TV</li>";
            echo "<li>CT4-114-IDI</li>";
            echo "<li>CT4-114-DI</li>";
            echo "<li>CT4-114-TV</li>";
            echo "<li>CT4-133-DI</li>";
            echo "<li>CT4-134-DI</li>";
            echo "<li>CT4-134-TV</li>";
            echo "</ul>";
            echo "<h3>articlee_24</h3>";
            echo "<ul>";
            echo "<li>articlee_31</li>";
            echo "<li>articlee_25</li>";
            echo "<li>articlee_32</li>";
            echo "<li>articlee_33</li>";
            echo "<li>articlee_34</li>";
            echo "<li>articlee_35</li>";
            echo "<li>articlee_36</li>";
            echo "<li>articlee_37</li>";
            echo "<li>articlee_38</li>";
            echo "</ul>";
            echo "</div>";
            echo "<br><br><h4>article_2 <a href='cotizaciones/'>article_3</a></h4>";        
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="a3")
          {
            echo "<h2 class='padd'>CASE<span>lateral_1</span></h2>";
            echo "<div class='overhaul'>";
            echo "<h3>articlee_23</h3>";
            echo "<ul class='over'>";
            echo "<li>G180D EARLY</li>";
            echo "<li>G180D LATE</li>";
            echo "<li>G207D EARLY</li>";
            echo "<li>G207D LATE</li>";
            echo "<li>A267BD</li>";
            echo "<li>A267D</li>";
            echo "<li>A401BD</li>"; 
            echo "<li>A401D</li>"; 
            echo "<li>A301D</li>"; 
            echo "<li>A301DF</li>"; 
            echo "<li>A301BD</li>"; 
            echo "<li>A451D</li>"; 
            echo "<li>A451BD</li>"; 
            echo "<li>A451BDT</li>"; 
            echo "<li>A336BD</li>"; 
            echo "<li>A336BDT</li>"; 
            echo "<li>G148</li>"; 
            echo "<li>G148D</li>"; 
            echo "<li>CASE 239NA</li>"; 
            echo "<li>CASE 239T</li>"; 
            echo "<li>CASE 239TA</li>"; 
            echo "<li>CASE 359N)</li>"; 
            echo "<li>CASE 359T</li>"; 
            echo "<li>CASE 359TA</li>"; 
            echo "<li>CASE 505T</li>"; 
            echo "<li>CASE 505TA</li>"; 
            echo "<li>CASE 855</li>";             
            echo "</ul>";
            echo "</div>";
            echo "<br><br><h4>article_2 <a href='cotizaciones/'>article_3</a></h4>";           
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="a4")
          {
            echo "<h2 class='padd'>CATERPILLAR<span>lateral_1</span></h2>";
            echo "<div class='overhaul'>";
            echo "<h3>articlee_23</h3>";
            echo "<ul class='over'>";
            echo "<li>3508</li>";
            echo "<li>3512</li>";
            echo "<li>3516</li>";
            echo "<li>3524</li>";
            echo "<li>G3508</li>";
            echo "<li>G3512</li>";
            echo "<li>G3516</li>";
            echo "<li>G3520</li>";
            echo "<li>3406</li>";
            echo "<li>3408</li>";
            echo "<li>3412</li>";
            echo "<li>3406E</li>";
            echo "<li>3408E</li>";
            echo "<li>3412E</li>";
            echo "<li>G3406</li>";
            echo "<li>G3408</li>";
            echo "<li>G3412</li>";
            echo "<li>3304</li>";
            echo "<li>3306</li>";
            echo "<li>D333</li>";
            echo "<li>G3304</li>";
            echo "<li>G3306</li>";
            echo "<li>G333</li>";
            echo "<li>3204</li>";
            echo "<li>3208N</li>";
            echo "<li>3208T</li>";
            echo "<li>3114</li>";
            echo "<li>3116</li>";
            echo "<li>3126</li>";
            echo "<li>3176</li>";
            echo "<li>3013</li>";
            echo "<li>3024</li>";
            echo "<li>3046</li>";
            echo "<li>3054</li>";
            echo "<li>3056</li>";
            echo "<li>3064</li>";
            echo "<li>3066</li>";
            echo "<li>D379</li>";
            echo "<li>D398</li>";
            echo "<li>D399</li>";
            echo "<li>G379</li>";
            echo "<li>G398</li>";
            echo "<li>G399</li>";
            echo "<li>D353</li>";
            echo "<li>G353</li>";
            echo "<li>D339</li>";
            echo "<li>D342</li>";
            echo "<li>G342</li>";
            echo "<li>D343</li>";
            echo "<li>D346</li>";
            echo "<li>D348</li>";
            echo "<li>C7</li>";
            echo "<li>C9</li>";
            echo "<li>C10</li>";
            echo "<li>C11</li>";
            echo "<li>C12</li>";
            echo "<li>C13</li>";
            echo "<li>C15</li>";
            echo "<li>C16</li>";
            echo "<li>C18</li>";
            echo "<li>C27</li>";
            echo "<li>C32</li>";
            echo "<li>1140</li>";
            echo "<li>1145</li>";
            echo "<li>1160</li>";
            echo "<li>1673</li>";
            echo "<li>1674</li>";
            echo "<li>1676</li>";
            echo "<li>1693</li>";
            echo "</ul>";
            echo "<h3>articlee_24</h3>";
            echo "<ul>";
            echo "<li>articlee_39</li>";
            echo "<li>articlee_40</li>";
            echo "<li>articlee_41</li>";
            echo "<li>articlee_42</li>";
            echo "<li>articlee_43</li>";
            echo "<li>articlee_36</li>";
            echo "<li>articlee_44</li>";
            echo "<li>articlee_45</li>";
            echo "</ul>";
            echo "</div>";
            echo "<br><br><h4>article_2 <a href='cotizaciones/'>article_3</a></h4>";        
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="a5")
          {
            echo "<h2 class='padd'>CUMMINS<span>lateral_1</span></h2>";
            echo "<div class='overhaul'>";
            echo "<h3>articlee_23</h3>";
            echo "<ul class='over'>";
            echo "<li>4B</li>";
            echo "<li>4BT</li>";
            echo "<li>4BTA</li>";
            echo "<li>6B</li>";
            echo "<li>6BT</li>";
            echo "<li>6BTA</li>";
            echo "<li>6C</li>";
            echo "<li>6CT</li>";
            echo "<li>6CTA</li>";
            echo "<li>KT19</li>";
            echo "<li>KTA19</li>";
            echo "<li>KTTA19</li>";
            echo "<li>K38</li>";
            echo "<li>KTA38</li>";
            echo "<li>K50</li>";
            echo "<li>KTA50</li>";
            echo "<li>VT28</li>";
            echo "<li>VTA28</li>";
            echo "<li>ISB</li>";
            echo "<li>ISC</li>";
            echo "<li>ISM</li>";
            echo "<li>ISX</li>";
            echo "<li>855</li>";
            echo "<li>NT855</li>";
            echo "<li>L10 QSM</li>";
            echo "<li>QSM11</li>";
            echo "<li>QSX</li>";
            echo "<li>N14</li>";
            echo "<li>B/ISB</li>";
            echo "<li>L10/M11</li>"; 
            echo "<li>K/KT</li>"; 
            echo "<li>C/ISC</li>";           
            echo "</ul>";
            echo "<h3>articlee_24</h3>";
            echo "<ul>";
            echo "<li>articlee_39</li>";
            echo "<li>articlee_40</li>";
            echo "<li>articlee_41</li>";
            echo "<li>articlee_42</li>";
            echo "<li>articlee_43</li>";
            echo "<li>articlee_36</li>";
            echo "<li>articlee_46</li>";
            echo "<li>articlee_44</li>";
            echo "<li>articlee_45</li>";
            echo "</ul>";
            echo "</div>";
            echo "<br><br><h4>article_2 <a href='cotizaciones/'>article_3</a></h4>";           
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="a6")
          {
            echo "<h2 class='padd'>DETROIT<span>lateral_1</span></h2>";
            echo "<div class='overhaul'>";
            echo "<h3>articlee_23</h3>";
            echo "<ul class='over'>";
            echo "<li>60 SERIE</li>";
            echo "<li>353</li>";
            echo "<li>3V53</li>";
            echo "<li>453</li>";
            echo "<li>4V53</li>";
            echo "<li>653</li>";
            echo "<li>6V53</li>";
            echo "<li>6V71N</li>";
            echo "<li>6V71T</li>";
            echo "<li>6V92</li>";
            echo "<li>6V92TT</li>";
            echo "<li>871</li>";
            echo "<li>8V71</li>";
            echo "<li>8V92T</li>";
            echo "<li>8V92TT</li>";
            echo "<li>12V71N</li>";
            echo "<li>12V71T</li>";
            echo "<li>12V92</li>";
            echo "<li>12V92TT</li>";
            echo "<li>16V92</li>";
            echo "<li>16V92T</li>";
            echo "<li>16V149</li>";         
            echo "</ul>";
            echo "<h3>articlee_24</h3>";
            echo "<ul>";
            echo "<li>articlee_39</li>";
            echo "<li>articlee_40</li>";
            echo "<li>articlee_47</li>";
            echo "<li>articlee_42</li>";
            echo "<li>articlee_43</li>";
            echo "<li>articlee_36</li>";
            echo "<li>articlee_48</li>";
            echo "<li>articlee_44</li>";
            echo "<li>articlee_45</li>";
            echo "</ul>";
            echo "</div>";
            echo "<br><br><h4>article_2 <a href='cotizaciones/'>article_3</a></h4>";          
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="a7")
          {
            echo "<h2 class='padd'>FORD<span>lateral_1</span></h2>";
            echo "<div class='overhaul'>";
            echo "<h3>articlee_23</h3>";
            echo "<ul class='over'>";
            echo "<li>120 GAS</li>";
            echo "<li>134 GAS</li>";
            echo "<li>172 GAS</li>";
            echo "<li>172 DIESEL</li>";
            echo "<li>158 GAS</li>";
            echo "<li>158 DIESEL</li>";
            echo "<li>201 GAS</li>";
            echo "<li>201 DIESEL</li>";
            echo "<li>256 GAS</li>";
            echo "<li>256 DIESEL</li>"; 
            echo "<li>256T DIESEL</li>";
            echo "<li>268 DIESEL</li>";
            echo "<li>268T DIESEL</li>";
            echo "<li>401 DIESEL</li>";
            echo "<li>401T DIESEL</li>";       
            echo "</ul>";
            echo "</div>";
            echo "<br><br><h4>article_2 <a href='cotizaciones/'>article_3</a></h4>"; 
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="a8")
          {
            echo "<h2 class='padd'>HINO<span>lateral_1</span></h2>";
            echo "<div class='overhaul'>";
            echo "<h3>articlee_23</h3>";
            echo "<ul class='over'>";
            echo "<li>W04C</li>";
            echo "<li>W06E</li>";
            echo "<li>H06C</li>";
            echo "<li>H07C</li>";
            echo "<li>SERIES ENGINES</li>";
            echo "</ul>";
            echo "<h3>articlee_24</h3>";
            echo "<ul>";
            echo "<li>articlee_49</li>";
            echo "<li>articlee_39</li>";
            echo "<li>articlee_40</li>";
            echo "<li>articlee_42</li>";
            echo "<li>articlee_41</li>";
            echo "<li>articlee_36</li>";
            echo "<li>articlee_50</li>";
            echo "<li>articlee_51</li>";
            echo "</ul>";
            echo "</div>";
            echo "<br><br><h4>article_2 <a href='cotizaciones/'>article_3</a></h4>";         
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="a9")
          {
            echo "<h2 class='padd'>IHC<span>lateral_1</span></h2>";
            echo "<div class='overhaul'>";
            echo "<h3>articlee_23</h3>";
            echo "<ul class='over'>";
            echo "<li>D414</li>";   
            echo "<li>DT414</li>";  
            echo "<li>DT1414B</li>";  
            echo "<li>DT436</li>";  
            echo "<li>DT436B</li>";  
            echo "<li>DT466B</li>";  
            echo "<li>DTI466B</li>";  
            echo "<li>DT466C</li>";  
            echo "<li>DTI466C</li>";  
            echo "<li>DT466</li>";  
            echo "<li>DTI466</li>";    
            echo "</ul>";
            echo "</div>";
            echo "<br><br><h4>article_2 <a href='cotizaciones/'>article_3</a></h4>";          
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="a10")
          {
            echo "<h2 class='padd'>ISUZU<span>lateral_1</span></h2>";
            echo "<div class='overhaul'>";
            echo "<h3>articlee_23</h3>";
            echo "<ul class='over'>";
            echo "<li>4BD1/T</li>";
            echo "<li>6BD1/T</li>";
            echo "<li>4BD2TC</li>";
            echo "<li>6BG1/TC/TCN</li>";
            echo "<li>4HE1T</li>";
            echo "<li>6HE1T/TCN</li>";
            echo "<li>6HK1TCN/TS</li>";       
            echo "</ul>";
            echo "<h3>articlee_24</h3>";
            echo "<ul>";
            echo "<li>articlee_39</li>";
            echo "<li>articlee_40</li>";
            echo "<li>articlee_42</li>";
            echo "<li>articlee_43</li>";
            echo "<li>articlee_36</li>";
            echo "<li>articlee_52</li>";
            echo "<li>articlee_50</li>";
            echo "</ul>";
            echo "</div>";
            echo "<br><br><h4>article_2 <a href='cotizaciones/'>article_3</a></h4>";        
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="a11")
          {
            echo "<h2 class='padd'>JOHN DEERE<span>lateral_1</span></h2>";
            echo "<div class='overhaul'>";
            echo "<h3>articlee_53</h3>
                  <ul>
                    <li>300 Series: Saran, France / Dubuque, Iowa</li>
                    <li>400 Series: Waterloo</li>
                    <li>500 Series</li>
                    <li>John Deere® / Yanmar®</li>
                    <li>Power Tech</li>
                  </ul>
                  <h3>articlee_54</h3>
                  <h3 class='padd'>articlee_55</h3>
                  <ul>
                    <li>articlee_57</li>
                    <li>articlee_58</li>
                    <li>articlee_59</li>
                    <li>articlee_60</li>
                    <li>articlee_61</li>
                    <li>articlee_62</li>
                    <li>articlee_63</li>
                    <li>articlee_64</li>
                    <li>articlee_65</li>
                    <li>articlee_66</li>
                    <li>articlee_67</li>
                    <li>articlee_68</li>
                    <li>articlee_69</li>
                    <li>articlee_70</li>
                    <li>articlee_71</li>
                    <li>articlee_72</li>
                  </ul>
                  <h3 class='padd'>articlee_73</h3>
                  <ul>
                    <li>articlee_74</li>
                    <li>articlee_75</li>
                    <li>
                      <ul>
                        <li>articlee_76</li>
                        <li>articlee_77</li>
                        <li>articlee_78</li>
                        <li>articlee_79</li>
                        <li>articlee_80</li>
                        <li>articlee_81</li>
                        <li>articlee_82</li>
                      </ul>
                    </li>
                    <li>articlee_83</li>
                    <li>SPFH</li>
                    <li>articlee_84</li>
                    <li>articlee_85</li>
                    <li>articlee_86</li>
                    <li>articlee_87</li>
                    <li>articlee_88</li>
                    <li>articlee_89</li>
                    <li>articlee_90</li>
                    <li>articlee_91</li>
                    <li>articlee_92</li>
                  </ul>
                  <h3>articlee_93</h3>
                  <ul>
                    <li>articlee_94</li>
                  </ul>
                  <h3>articlee_95</h3>
                  <h4>articlee_96</h4>   
                  <p>articlee_97</p>
                  <p>articlee_98</p>";

            echo "</div>";
            echo "<br><br><h4>article_2 <a href='cotizaciones/'>article_3</a></h4>";          
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="a12")
          {
            echo "<h2 class='padd'>KUBOTA<span>lateral_1</span></h2>";
            echo "<div class='overhaul'>";
            echo "<h3>articlee_23</h3>";
            echo "<ul class='over'>";
            echo "<li>D722</li>";
            echo "<li>D750</li>";
            echo "<li>D850</li>";
            echo "<li>D905</li>";
            echo "<li>D1005</li>";
            echo "<li>D1105</li>";
            echo "<li>D1402</li>";
            echo "<li>D1403</li>";
            echo "<li>D1703</li>";
            echo "<li>V1100</li>";
            echo "<li>V1200</li>";
            echo "<li>V1205</li>";
            echo "<li>V1305</li>";
            echo "<li>V1505</li>";
            echo "<li>V1702</li>";
            echo "<li>V1902</li>";
            echo "<li>V1903</li>";
            echo "<li>V2003</li>";
            echo "<li>V2003T</li>";
            echo "<li>V2203</li>";     
            echo "</ul>";
            echo "</div>";
            echo "<br><br><h4>article_2 <a href='cotizaciones/'>article_3</a></h4>";          
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="a13")
          {
            echo "<h2 class='padd'>MASSEY FERGUSON<span>lateral_1</span></h2>";
            echo "<div class='overhaul'>";
            echo "<h3>articlee_23</h3>";
            echo "<ul class='over'>";
            echo "<li>Z120</li>";
            echo "<li>Z129</li>";
            echo "<li>Z134</li>";
            echo "<li>Z145</li>";
            echo "<li>G176</li>";
            echo "<li>G3.152</li>";
            echo "<li>A3.152</li>";
            echo "<li>D3.152</li>";
            echo "<li>4.203</li>";
            echo "<li>D4.203</li>";
            echo "<li>4.203.2</li>"; 
            echo "<li>D4.212</li>";
            echo "<li>4.236</li>";
            echo "<li>G4.236</li>";
            echo "<li>T4.236</li>";
            echo "<li>4.248</li>";
            echo "<li>4.248.2</li>";
            echo "<li>4.318</li>";
            echo "<li>4.108</li>";
            echo "<li>6.354</li>";
            echo "<li>6.354.1</li>";
            echo "<li>6.354.2</li>";
            echo "<li>6.354.4</li>";
            echo "<li>T6.354</li>";
            echo "<li>T6.354.1</li>";
            echo "<li>T6.354.2</li>";
            echo "<li>T6.354.4</li>";
            echo "<li>1004.40</li>";
            echo "<li>1004.40T</li>";
            echo "<li>1006.60</li>";
            echo "<li>1006.60T</li>";
            echo "</ul>";
            echo "</div>";
            echo "<br><br><h4>article_2 <a href='cotizaciones/'>article_3</a></h4>";          
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="a14")
          {
            echo "<h2 class='padd'>MAZDA<span>lateral_1</span></h2>";
            echo "<div class='overhaul'>";
            echo "<h3>articlee_23</h3>";
            echo "<ul class='over'>";
            echo "<li>UA</li>";
            echo "<li>VA</li>";
            echo "<li>D5</li>";
            echo "<li>F2</li>";
            echo "<li>FE</li>";
            echo "</ul>";
            echo "</div>";
            echo "<br><br><h4>article_2 <a href='cotizaciones/'>article_3</a></h4>";         
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="a15")
          {
            echo "<h2 class='padd'>NAVISTAR<span>lateral_1</span></h2>";
            echo "<div class='overhaul'>";
            echo "<h3>articlee_23</h3>";
            echo "<ul class='over'>";
            echo "<li>DT360</li>";
            echo "<li>DT408</li>";
            echo "<li>D414</li>";
            echo "<li>DT414</li>";
            echo "<li>D436</li>";
            echo "<li>DT436</li>";
            echo "<li>DT466</li>";
            echo "<li>DT466E</li>";
            echo "<li>I530E</li>";
            echo "<li>D530</li>";
            echo "<li>6.9L</li>";
            echo "<li>7.3L</li>";
            echo "<li>T444E</li>";        
            echo "</ul>";
            echo "<h3>articlee_24</h3>";
            echo "<ul>";
            echo "<li>articlee_39</li>";
            echo "<li>articlee_40</li>";
            echo "<li>articlee_42</li>";
            echo "<li>articlee_43</li>";
            echo "<li>articlee_36</li>";
            echo "<li>articleee_102</li>";
            echo "<li>articlee_50</li>";
            echo "<li>articlee_51</li>";
            echo "</ul>";
            echo "</div>";
            echo "<br><br><h4>article_2 <a href='cotizaciones/'>article_3</a></h4>";          
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="a16")
          {
            echo "<h2 class='padd'>NISSAN<span>lateral_1</span></h2>";
            echo "<div class='overhaul'>";
            echo "<h3>articlee_23</h3>";
            echo "<ul class='over'>";
            echo "<li>D11</li>";
            echo "<li>A12</li>";
            echo "<li>A15</li>";
            echo "<li>J15</li>";
            echo "<li>H20</li>";
            echo "<li>H20-ii</li>";
            echo "<li>H25</li>";
            echo "<li>H30</li>";
            echo "<li>Z24</li>";
            echo "<li>P40</li>";
            echo "<li>PPU 240/241</li>";
            echo "<li>SD22</li>";
            echo "<li>SD25</li>";
            echo "<li>SD33</li>";
            echo "<li>TB42</li>";
            echo "<li>TD42</li>";
            echo "<li>FD6</li>";
            echo "<li>K21</li>";
            echo "<li>K25</li>";        
            echo "</ul>";
            echo "</div>";
            echo "<br><br><h4>article_2 <a href='cotizaciones/'>article_3</a></h4>";          
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="a17")
          {
            echo "<h2 class='padd'>PERKINS<span>lateral_1</span></h2>";
            echo "<div class='overhaul'>";
            echo "<h3>articleee_103</h3>
                  <h3 class='padd'>articleee_104</h3>
                  <ul>
                    <li>Allis Chalmers</li>
                    <li>Noble</li>
                    <li>JLG</li>
                    <li>LoadLifter</li>
                    <li>ManitexLiftking</li>
                    <li>Manitou</li>
                    <li>OmegaLift</li>
                    <li>Tovel</li>
                    <li>Bobcat</li>
                    <li>Caterpillar</li>
                    <li>Clark Equipment</li>
                    <li>Eaton Corp</li>
                    <li>Fg Wilson</li>
                    <li>Gehl Mfg</li>
                    <li>Hyster</li>
                    <li>Ingersoll Rand Compressors</li>
                    <li>Jcb</li>
                    <li>Lincoln Electric</li>
                    <li>Massey Ferguson Industrial</li>
                    <li>Melroe</li>
                    <li>Michigan</li>
                    <li>Owattona Mfg</li>
                    <li>Perkins Usa</li>
                    <li>Sullair Corp</li>
                    <li>Towmotor</li>
                    <li>Vermeer Mfg</li>
                  </ul>
                  <h3 class='padd'>articleee_105</h3>
                  <ul>
                    <li>Jacobsen Mfg Co</li>
                    <li>Landini Tractors</li>
                    <li>Massey Ferguson Agricultural</li>
                    <li>Mccormick</li>
                    <li>New Holland</li>
                    <li>New Idea</li>
                    <li>Sperry New Holland</li>
                    <li>White Farm</li>
                  </ul>
                  <h3 class='padd'>articleee_106</h3>
                  <ul>
                    <li>Perkins Sabre</li>
                    <li>Marine</li>
                  </ul>
                  <h3>articleee_107</h3>
                  <h4>articleee_108</h4> 
                  <p>articleee_109</p>
                  <p>articleee_110</p>";
                              
            echo "</div>";
            echo "<br><br><h4>article_2 <a href='cotizaciones/'>article_3</a></h4>";          
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="a18")
          {
            echo "<h2 class='padd'>THERMO-KING<span>lateral_1</span></h2>";
            echo "<div class='overhaul'>";
            echo "<h3>articlee_23</h3>";
            echo "<ul class='over'>";
            echo "<li>D214</li>";
            echo "<li>X214</li>";
            echo "<li>426</li>";
            echo "<li>X426</li>";
            echo "<li>X430</li>";
            echo "<li>X430LS</li>";
            echo "</ul>";
            echo "<h3>articlee_24</h3>";
            echo "<ul>";
            echo "<li>articleee_111</li>";
            echo "<li>articleee_112</li>";
            echo "<li>articleee_113</li>";
            echo "<li>articleee_41</li>";
            echo "<li>articleee_114</li>";
            echo "<li>articleee_50</li>";
            echo "<li>articleee_42</li>";
            echo "<li>articleee_115</li>";
            echo "<li>articleee_116</li>";
            echo "<li>articleee_102</li>";
            echo "<li>articleee_117</li>";
            echo "</ul>";
            echo "</div>";
            echo "<br><br><h4>article_2 <a href='cotizaciones/'>article_3</a></h4>";          
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="a19")
          {
            echo "<h2 class='padd'>TOYOTA<span>lateral_1</span></h2>";
            echo "<div class='overhaul'>";
            echo "<h3>articlee_24</h3>";
            echo "<ul class='over'>";
            echo "<li>2R</li>";
            echo "<li>3P</li>";
            echo "<li>4P</li>";
            echo "<li>4Y</li>";
            echo "<li>5R</li>";
            echo "<li>5R-L</li>";
            echo "<li>5K</li>";
            echo "<li>5P</li>";
            echo "<li>2J</li>";
            echo "<li>F</li>";
            echo "<li>2F</li>";
            echo "<li>3F</li>";
            echo "</ul>";
            echo "</div>";
            echo "<br><br><h4>article_2 <a href='cotizaciones/'>article_3</a></h4>";         
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="a20")
          {
            echo "<h2 class='padd'>WAUKESHA<span>lateral_1</span></h2>";
            echo "<div class='overhaul'>";
            echo "<h3>articlee_24</h3>";
            echo "<ul class='over'>";
            echo "<li>D155G</li>";
            echo "<li>D176G</li>";
            echo "</ul>";
            echo "</div>";
            echo "<br><br><h4>article_2 <a href='cotizaciones/'>article_3</a></h4>";          
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="a21")
          {
            echo "<h2 class='padd'>YANMAR<span>lateral_1</span></h2>";
            echo "<div class='overhaul'>";
            echo "<h3>articleee_118</h3>
                  <ul>
                    <li>Gehl</li>
                    <li>Hi Power Genset Model</li>
                    <li>Komatsu</li>
                    <li>Takeuchi</li>
                    <li>Thermo King</li>
                  </ul>
                  <br>
                  <h4>articleee_119</h4>
                  <p>articleee_120</p>
                  <h3>articleee_121</h3>                  
                  <h4>articleee_122</h4>   
                  <p>articleee_123</p>
                  <p>articleee_124</p>";
            echo "</div>";
            echo "<br><br><h4>article_2 <a href='cotizaciones/'>article_3</a></h4>";          
          } else {

            echo "<h2 class='padd'>articleee_125</h2>";
            echo "<div class=''><h3>articleee_126</h3></div>";

          }
        ?>  
      </article>
      <div class="clear"></div>
    </section>
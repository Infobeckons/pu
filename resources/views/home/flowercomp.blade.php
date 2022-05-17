<title>Flower Competition - Panjab University Rose Festival</title>
            <!-- SITE-HEADER -->
           @include('home/header')
            <!-- END SITE-HEADER -->

            <!-- SITE-CONTENT -->
            <div id="content" class="site-content">

                <!-- PRIMARY -->
                <div id="primary" class="content-area">

                    <!-- MAIN -->
                    <main id="main" class="site-main" role="main">

                        <!-- FEATURE IMAGE -->
                        <section class="m-header">
                         <?php $use=DB::select("select * from header"); ?>@if(isset($use)) 
								@foreach($use as $us)

                            <figure><img src="<?php echo 'uploads/gallery/'.$us->icon;?>" class="img-responsive center-block main-logo"></figure>
                            	@endforeach
                            	@endif
                        </section>          
                        <!-- END FEATURE IMAGE -->

                        <!-- PAGE TITLE -->
                        <div id="page_title" class="wdp_margin_top_6">
                            <div class="container text-center">
                                <img src="{{url('resources/assets/home/images/leaves-rose.png')}}" class="center-block img-responsive flower-img" >                                
                                <h2>Flower Competition</h2>
                                <img src="{{url('resources/assets/home/images/line.png')}}" class="center-block img-responsive btm-img" />
                            </div>
                        </div>
                        <!-- END PAGE TITLE -->


                        <!-- CONTACT -->
                        <section id="wdp_contact">

                            <div class="container-fluid wdp_margin_top_4">
                                <div class="row">

                                    <div class="wdp_contact_item">
                                        <div class="container">
                                            <h4 class="wdp_event_title text-center">Panjab university Rose Festival</h4>
 <div class="container">
        <!--<div class="heading">
                      <h2>To be applied offline only</h2>
                </div>-->

        <h4>Rules For Exhibitors:</h4>
        <ol>
            <li> There will be an entry fee of Rs. 50/- per participant per exhibit for each class for

                taking part in the competition.</li>

            <li>Last date for receipt of entry form is 08.02.2020 till 5:00 p.m. at Rose Festival Secretariat, Single Window Enquiry, Near Post Office, Panjab University and on 09.02.2020 till 10:00 a.m. at Prof. R.C. Paul Rose Garden, Panjab University, Chandigarh.</li>

            <li>Exhibits must be arranged on 9th February, 2020 by 11:00 a.m.</li>

            <li>One can give any number of entries for competition.</li>

            <li>The entry to the competition Pandal will be permitted only to the competitors taking

            part in the competition.</li>
            <li>All the exhibits must have been grown in exhibitors own garden. In case of doubt, the

            organizers reserve the right to inspect the garden of exhibitors.</li>

            <li>No exhibitors, mali or spectators will be allowed where judgment is taking place.</li>

            <li>Though all possible care of the exhibits will be taken for any damage or loss but

                organisers shall be responsible for any damage or loss of the exhibitors.</li>

            <li>The decision of judges will be final. However in case of dispute, the Organising

                Committee will take the decision which will be binding.</li>

            <li>The pots will be allowed to be removed on 12th February, 2020 (Monday) between 9:30

                a.m. to 12:00 noon.</li>

            <li>Suitable container will be provided for the display of cut flowers.</li>
        </ol>
        Further enquiries if any may be addressed to: -

        </p> <br>
        <h4>Er. Amandeep Singla,</h4>
        <h4>Junior Engineer (Horticulture)</h4>
        <h4>Construction Office,</h4><br>
        <h4>Panjab University, Sector-14,</h4>
        <h4>Chandigarh</h4>
        <h4>Tel. 0172-2534356, 0172-2534365,(Mobile) 99140-03004</h4>



        <!--<h4>1st Day</h4>
        <p>Inauguration </p>
        <p>Flower and Photography Competition</p>
      <p>Fashion Competition </p><br>
      
        <h4>2nd Day</h4>
        <h4>Competitions: </h4>
        <p>Singing</p>
        <p>Rangoli</p>
        <p>Rose Quiz</p>
        <p>Collage Making </p>
        <p>Slogan Writing</p>
        <p>Face Painting </p>
      <p>Poetic Recitation</p>
      <p>Creative Mehandi</p>
      <p>Rose Prince &amp; Rose Princess</p>
      <p>Painting</p>
      <p>Fancy Dress </p>
        <p>Laughter Show</p><br>
        
        <h4>2nd Day </h4>
      <p>12th February, 2017 3rd Day </p>
      <p>747 </p>
      <h4>For more information &amp; sponsorship: Please contact: 99140 03004, 98148 93401, 99145 27023 0172-2534365, e-teal: purosefestival14@gmail.com pu rosefestival 
      10th-12th, February, 2017 
      Special Attractions 
      Fashion Competition 
      Rose Prince &amp; Princess 
      Rangoli &amp; Flower Competition 
      Fancy Dress 
      Dancing Singing Competition
      Photography Competition
        Painting Competition</h4>
      
      </div>-->

    </div>
    <div class="container">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <center>
                <div class="dayheading"><h2 >Class-A</h2></div>
                <h3>(Open to All)</h3></center>
            <table class="table">
                <thead>
                    <tr>
                        <th>Section</th>
                        <th></th>
                        <th>Name of Arrangement</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>A<sub>1</sub></td>
                        <td></td>
                        <td>Arrangement with Roses only.</td>
                    </tr>
                    <tr>
                        <td>A<sub>2</sub></td>
                        <td></td>
                        <td>Arrangement with Flowers other than Roses.</td>
                    </tr>
                    <tr>
                        <td>A<sub>3</sub></td>
                        <td></td>
                        <td>Arrangement with Dry Flowers.</td>
                    </tr>
                    <tr>
                        <td>A<sub>4</sub></td>
                        <td></td>
                        <td>Arrangement with Fresh Foliage.</td>
                    </tr>
                    <tr>
                        <td>A<sub>5</sub></td>
                        <td></td>
                        <td>Making of Garlands.</td>
                    </tr>
                    <tr>
                        <td>A<sub>6</sub></td>
                        <td></td>
                        <td>Making of Bouquets.</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-2"></div>
    </div>
    <!---- END OF CLASS A-->
    <div class="container">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <center>
               <div class="dayheading"><h2 >Class-B</h2></div>
                <h3>(Cut Flower)<u>Open to All</u></h3></center>
            <table class="table">
                <thead>
                    <tr>
                        <th>Section</th>
                        <th>Name of Flowers</th>
                        <th>No. of Stems</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>B<sub>1</sub></td>
                        <td>Antirrhinum</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>B<sub>2</sub></td>
                        <td>Aster</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>B<sub>3</sub></td>
                        <td>Stocks Double</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>B<sub>4</sub></td>
                        <td>Stocks Single</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>B<sub>5</sub></td>
                        <td>Carnation</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>B<sub>6</sub></td>
                        <td>Candytuft</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>B<sub>7</sub></td>
                        <td>Dahlia</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>B<sub>8</sub></td>
                        <td>Gladiolus</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>B<sub>9</sub></td>
                        <td>Gerbera</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>B<sub>10</sub></td>
                        <td>Marigold</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>B<sub>11</sub></td>
                        <td>Pansy</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>B<sub>12</sub></td>
                        <td>Larkspur</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>B<sub>13</sub></td>
                        <td>Lupin</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>B<sub>14</sub></td>
                        <td>Rose Hybrid Tea</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>B<sub>15</sub></td>
                        <td>Rose Floribunda</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>B<sub>16</sub></td>
                        <td>Rose Hybrid Tea in three stages i.e.
                            unopened bud, semi open and open bud.</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>B<sub>17</sub></td>
                        <td>Rose Hybrid Tea collection of three named varieties</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>B<sub>18</sub></td>
                        <td>Rose Hybrid Tea collection of three named varieties</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>B<sub>19</sub></td>
                        <td>Any other flowers</td>
                        <td>2</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-2"></div>
    </div>                                      

<!---- END OF CLASS B --->
    <div class="container">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <center>
               <div class="dayheading"><h2 >Class-C</h2></div>
                <h3><u>Flower and Plants Grown in Pots</u></h3></center>
            <table class="table">
                <thead>
                    <tr>
                        <th>Section</th>
                        <th>Name of Flowers</th>
                        <th>No. of Stems</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>C<sub>1</sub></td>
                        <td>Aster</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>C<sub>2</sub></td>
                        <td>Antirrhinum </td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>c<sub>3</sub></td>
                        <td>Verbena</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>c<sub>4</sub></td>
                        <td>Salvia</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>c<sub>5</sub></td>
                        <td>Brachycome</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>C<sub>6</sub></td>
                        <td>Cineraria</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>C<sub>7</sub></td>
                        <td>Carnation</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>C<sub>8</sub></td>
                        <td>Collection of Cacti</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>C<sub>9</sub></td>
                        <td>Bonsai</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>C<sub>10</sub></td>
                        <td>Dahlia</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>C<sub>11</sub></td>
                        <td>Stock</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>C<sub>12</sub></td>
                        <td>Dianthus</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>C<sub>13</sub></td>
                        <td>Geranium</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>C<sub>14</sub></td>
                        <td>Marigold</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>C<sub>15</sub></td>
                        <td>Nemesia</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>C<sub>16</sub></td>
                        <td>Nasturtium</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>C<sub>17</sub></td>
                        <td>Petunia Double Hybrid</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>C<sub>18</sub></td>
                        <td>Petunia Single Hybrid</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>C<sub>19</sub></td>
                        <td>Pansy</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>C<sub>20</sub></td>
                        <td>Phlox</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>C<sub>21</sub></td>
                        <td>Kale</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>C<sub>22</sub></td>
                        <td>Rose Hybrid Tea</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>C<sub>23</sub></td>
                        <td>Rose Floribunda</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>C<sub>24</sub></td>
                        <td>Any other flower</td>
                        <td>4</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-2"></div>
    </div>                            <!--- END OF CLASS C--->
    <div class="container">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <center>
                 <div class="dayheading"><h2 >Class-D</h2></div>
                <h3><u>Vegetable & Fruit Carving</u></h3></center>
            <table class="table">
                <thead>
                    <tr>
                        <th>Section</th>
                        <th>Name of Flowers</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>D<sub>1</sub></td>
                        <td>Vegetable & Fruit Carving</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-2"></div>
    </div>
                                        </div> 

                                    </div>

                                </div>
                            </div>

                        </section>
                        <!-- END CONTACT -->


                        <!-- CONTACT BAR -->
                       @include('home/footer')
                        <!-- END CONTACT BAR -->

                   
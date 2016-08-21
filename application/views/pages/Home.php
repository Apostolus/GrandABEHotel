<div class="container-fluid">
  <br>
  <!-- CAROUSEL -->
  <div id="imgCarousel" class="carousel slide" data-ride="carousel">
    <!--Indicator-->
    <ol class="carousel-indicators">
      <li data-target="#imgCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#imgCarousel" data-slide-to="1"></li>
      <li data-target="#imgCarousel" data-slide-to="2"></li>
      <li data-target="#imgCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper-->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="assets/img/home1.jpg" alt="Room 1" width="100%">
        <div class="carousel-caption">
          <h3>Room 1</h3>
          <img src="assets/img/line.svg" width="50%" style="margin:2vw" class="hidden-xs">
          <p class="hidden-xs">Lorem Ipsum </p>
        </div>
      </div>

      <div class="item">
        <img src="assets/img/home2.jpg" alt="Room 2" width="100%">
        <div class="carousel-caption">
          <h3>Room 2</h3>
          <img src="assets/img/line.svg" width="50%" style="margin:2vw" class="hidden-xs">
          <p class="hidden-xs">Ipsum Lorem</p>
        </div>
      </div>
    
      <div class="item">
        <img src="assets/img/home3.jpg" alt="Room 3" width="100%">
        <div class="carousel-caption">
          <h3>Room 3</h3>
          <img src="assets/img/line.svg" width="50%" style="margin:2vw" class="hidden-xs">
          <p class="hidden-xs">Whatnot</p>
        </div>
      </div>

      <div class="item">
        <img src="assets/img/home4.jpg" alt="Room 4" width="100%">
        <div class="carousel-caption">
          <h3>Room 4</h3>
          <img src="assets/img/line.svg" width="50%" style="margin:2vw" class="hidden-xs">
          <p class="hidden-xs">HEEEEY</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#imgCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#imgCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!-- BOOKING -->
  <div class="bookingDiv">
    <div class="row">
    <center>
      <div class="col-xs-12">
    <form>
      <table style="width:60%; color:yellow;">
        <tr>
          <td>Check-In</td>
          <td>Check-Out</td>
          <td>Adults</td>
          <td>Children</td>
          <td>Promo Code</td>
        </tr>
        <tr>
          <td><input type="date" name="checkInDate"></td>
          <td><input type="date" name="checkOutDate"></td>
          <td><input type="text" name="adultCount" onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="numbers only"></td>
          <td><input type="text" name="childCount" onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="numbers only"></td>
          <td><input type="text" name="promoCode"></td>
          <td><input type="submit" value="Book"></td>
        </tr>
      </table>
    </form>
    </div>
    </center>
    </div>
  </div>

  <!-- FACILITIES DESC -->
  <div class="facilitiesDiv">
    <center>
      <div class="row" style="width:75%">
        <a href="#">
        <div class="col-xs-12 col-md-4">
          <div class="col-xs-12 facilityDesc"><img src="assets/img/placeholderIcon.png" width="50vh"></div>
          <div class="col-xs-12 facilityDesc"><img src="assets/img/line.svg" width="75%"></div>
          <div class="col-xs-12 facilityDesc"><h3 style="color:#ddd395;">SOMETHING</h3></div>
          <div class="col-xs-12 facilityDesc"><p style="color:white;">TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT</p></div>          
        </div>
       </a>
          <hr class="col-xs-12 visible-xs visible-sm">

        <a href="#">
        <div class="col-xs-12 col-md-4">
          <div class="col-xs-12 facilityDesc"><img src="assets/img/placeholderIcon.png" width="50vh"></div>
          <div class="col-xs-12 facilityDesc"><img src="assets/img/line.svg" width="75%"></div>
          <div class="col-xs-12 facilityDesc"><h3 style="color:#ddd395;">SOMETHING</h3></div>
          <div class="col-xs-12 facilityDesc"><p style="color:white;">TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT</p></div>
        </div>
          <hr class="col-xs-12 visible-xs visible-sm">
        </a>

        <a href="#">
        <div class="col-xs-12 col-md-4">
          <div class="col-xs-12 facilityDesc"><img src="assets/img/placeholderIcon.png" width="50vh"></div>
          <div class="col-xs-12 facilityDesc"><img src="assets/img/line.svg" width="75%"></div>
          <div class="col-xs-12 facilityDesc"><h3 style="color:#ddd395;">SOMETHING</H3></div>
          <div class="col-xs-12 facilityDesc"><p style="color:white;">TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT</p></div>
        </div>
        </a>
      </div>
    </center>
  </div>

  <!-- ROOM IMAGES -->
  <div class="roomImages hidden-xs hidden-sm">
    <div class="row">
      <div class="col-md-6 roomImgDiv"><img class="roomImg" src="assets/img/home1.jpg"></div>
      <div class="col-md-6 roomImgDiv"><img class="roomImg" src="assets/img/home2.jpg"></div>

      <div class="col-md-6 roomImgDiv"><img class="roomImg" src="assets/img/home3.jpg"></div>
      <div class="col-md-6 roomImgDiv"><img class="roomImg" src="assets/img/home4.jpg"></div>
    </div>
  </div>

  <!-- DESCRIPTIONS -->
  <div class="roomDetails" style="color: #ddd395;">
    <br>
    <br>
    <center>
    <div class="row" style="width:75%">
      <div class="col-md-4"><img src="assets/img/home1.jpg" width="100%"></div>
      <div class="col-md-8" style="text-align:left">
        <h3>Lorem Ipsum</h3><br>
        <p style="color:white;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
          Fusce mollis, erat in viverra luctus, mi lectus eleifend mauris, et vehicula lacus mi vitae sem. 
          Phasellus scelerisque mauris ex, sit amet faucibus metus ornare et. Etiam vestibulum odio quis tincidunt aliquet. 
          Sed sit amet ante at elit tempor maximus. Donec hendrerit vitae libero in rutrum. 
          Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Duis a risus libero.</p>
        <button type="button" class="btn btn-primary btn-md">READ MORE</button>
      </div>
    </div>

    <!-- DIVIDER -->
    <br>
    <div class="row">
      <div class="col-xs-12" style="background-color:#141414; height:2vw"></div>
    </div>
    <br>

    <div class="row" style="width:75%">
      <div class="col-md-4"><img src="assets/img/home2.jpg" width="100%"></div>
      <div class="col-md-8" style="text-align:left">
        <h3>Lorem Ipsum</h3><br>
        <p style="color:white;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
          Fusce mollis, erat in viverra luctus, mi lectus eleifend mauris, et vehicula lacus mi vitae sem. 
          Phasellus scelerisque mauris ex, sit amet faucibus metus ornare et. Etiam vestibulum odio quis tincidunt aliquet. 
          Sed sit amet ante at elit tempor maximus. Donec hendrerit vitae libero in rutrum. 
          Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Duis a risus libero.</p>
        <button type="button" class="btn btn-primary btn-md">READ MORE</button>
      </div>
    </div>
    </center>
    <br>
    <br>
  </div>

  <!-- RESERVE BUTTON DIV -->
  <div class="reserve">
    <center>
      <div class="row">
        <div class="col-xs-12" style="color:#ddd395"><h2>Reserve Your Luxury Suite Now</h2></div>
      </div>
      <br>
      <br>
      <br>
      <div class="row">
        <div class="col-xs-12"><img src="assets/img/line.svg" width="50%"></div>
      </div>
      <br>
      <br>
      <br>
      <div class="row">
        <div class="col-xs-12"><button type="button" class="btn btn-primary btn-md">ONLINE RESERVATION</button></div>
       </div>
    </center>
  </div>

</div>
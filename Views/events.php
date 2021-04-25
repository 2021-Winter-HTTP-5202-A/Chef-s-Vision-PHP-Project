<?php
require_once 'header.php';

if(!isset($_SESSION['username']))
{
    header('Location: login_page.php');
}
?>
<div class="page_container">
    <div class="container">
<div class="page-event">
    <div class="cover">
        <h2>Upcoming Events for you</h2>
    </div>
        <div class="upcoming-event-list">
            <div class="event-block">
                <div class="row">
                    <div class="col-lg-2 sec-1">
                        <table>
                            <tr>
                                <td>
                                    <div class="month">jan</div>
                                    <div class="month-date-devider"></div>
                                    <div class="date">11</div>
                                </td>
                                <td class="title">Bake some cake </td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-lg-5 sec-2">
                        <img src="../Library/cake.jpg" />
                    </div>
                    <div class="col-lg-5 sec-3">
                        <div class="title">Bake some cake</div>
                        <div class="venue">
                            <table>
                                <tr>
                                    <td><i class="fa fa-map-marker"></i></td>
                                    <td>
                                        <div>Toronto</div>
                                        <div class="dim-color">
                                            <a href="https://www.google.com/maps/place/Humber+College/@43.7290039,-79.6073741,15z/data=!4m2!3m1!1s0x0:0x747f0c3b5cdecaa0?sa=X&ved=2ahUKEwjC_-Xm17rvAhUCFlkFHc27BZAQ_BIwLHoECEYQBQ" target="blank">Get Directions</a>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="time">
                            <table>
                                <tr>
                                    <td><i class="fa fa-clock-o"></i></td>
                                    <td>
                                        <div>Saturday, Jan 11, 2021 at 4:30 PM</div>

                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="sort-story">This is a great opportunity for all you wonder people out there to learn to bake some delicious cake!!</div>
                        <div class="text-center">
                            <input type="submit" value="Book a reservation" id="btn" name="contactUs" class="btn btn-info btn-block rounded-custom py-2">
                        </div>
                    </div>
                </div>
            </div>


            <div class="event-block">
                <div class="row">
                    <div class="col-lg-2 sec-1">
                        <table>
                            <tr>
                                <td>
                                    <div class="month">feb</div>
                                    <div class="month-date-devider"></div>
                                    <div class="date">20</div>
                                </td>
                                <td class="title">Cooking competition </td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-lg-5 sec-2">
                        <img src="../Library/comp.jpg" />
                    </div>
                    <div class="col-lg-5 sec-3">
                        <div class="title">Cooking competition</div>
                        <div class="venue">
                            <table>
                                <tr>
                                    <td><i class="fa fa-map-marker"></i></td>
                                    <td>
                                        <div>Toronto</div>
                                        <div class="dim-color">
                                            <a href="https://www.google.com/maps/place/Humber+College/@43.7290039,-79.6073741,15z/data=!4m2!3m1!1s0x0:0x747f0c3b5cdecaa0?sa=X&ved=2ahUKEwjC_-Xm17rvAhUCFlkFHc27BZAQ_BIwLHoECEYQBQ" target="blank">Get Directions</a>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="time">
                            <table>
                                <tr>
                                    <td><i class="fa fa-clock-o"></i></td>
                                    <td>
                                        <div>Sunday, Feb 20, 2021 at 1:30 PM</div>

                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="sort-story">It is that time of the month. Time to prove your cooking skills and exciting prizes!</div>
                        <div class="text-center">
                            <input type="submit" value="Book a reservation" id="btn" name="contactUs" class="btn btn-info btn-block rounded-custom py-2">
                        </div>
                    </div>
                </div>
            </div>
        </div>

</div>
    </div>
</div>
<?php
require_once 'footer.php';
?>


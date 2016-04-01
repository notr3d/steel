	<?php get_header(); ?>
    <div class="container-fluid contacts">
        <div class="container contacts__wrapper">
           <div class="container contacts__heading">                        
                <h1>Contact us</h1>      
           </div>           
           <div class="col-sm-6 contacts__left">                
                <form class="contacts__form">
                    <div class="col-sm-12 form-group">
                        <input type="text" class="form-control" id="name" placeholder="Name*">
                    </div>
                    <div class="col-sm-6 form-group">
                        <input type="email" class="form-control" id="email" placeholder="Email*">
                    </div>
                    <div class="col-sm-6 form-group">
                        <input type="email" class="form-control" id="email" placeholder="Phone number">
                    </div>                    
                    <div class="col-xs-12 form-group">
                        <textarea class="form-control" rows="3" placeholder="Message..."></textarea>
                    </div>
                    <div class="text-center"> 
                        <button type="submit" class="btn btn-default form__submit">Send</button>
                    </div>
                </form>
           </div> 
           <div class="col-sm-6 contacts__right">
               <div class="row">
                   <address class="col-sm-6">
                        The trade production</br>
                        and export profile enterprise</br>
                        <strong>OOO "Metallica"</strong></br>
<!--                        <a href="mailto:sale@mtllk.ru">sale@mtllk.ru</a>-->
                    </address>
                    <address class="col-sm-6">
                        Russian Federation, Tula,</br>
                   			Venevskoye roadway, 4, bld. 5a, 300004</br>
                        Phone +7 (800) 333-70-44
                    </address>    
               </div>
<!--
               <div class="row">
                   <address class="col-sm-6">
                        Zamil Steel Holding Co. Ltd.</br>
                        1st Industrial City,</br>
                        PO Box 877, Dammam 31421</br>
                        <strong>Saudi Arabia</strong>
                    </address>
                    <address class="col-sm-6">
                        Phone +966 (13) 847 1840</br>
                        Fax +966 (13) 847 1291</br>
                        <a href="mailto:mail@sendmail.com">mail@sendmail.com</a>
                    </address>    
               </div>                                          
-->
            </div>
        </div>
    </div>        
    <div class="map" id="map"></div>
    <?php get_footer(); ?>
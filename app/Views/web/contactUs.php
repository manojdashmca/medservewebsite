<!-- Breadcrumbs-->
<section class="breadcrumbs">
    <div class="container">
        <ul class="breadcrumbs-path">
            <li><a href="index.html">Home</a></li>
            <li class="active">Contacts</li>
        </ul>
    </div>
</section>
<!--Mailform-->
<section class="section section-md bg-gray-100">
    <div class="container">
        <div class="row row-40">
            <div class="col-lg-7 col-xl-8">
                <h5>Get In Touch</h5>
                <!--RD Mailform-->
                <form class="rd-form rd-mailform text-left" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                    <div class="form-wrap">
                        <label class="form-label" for="contact-name">Name</label>
                        <input class="form-input" id="contact-name" type="text" name="name" data-constraints="@Required">
                    </div>
                    <div class="form-wrap">
                        <label class="form-label" for="contact-phone">Phone</label>
                        <input class="form-input" id="contact-phone" type="text" name="phone" data-constraints="@Required @PhoneNumber">
                    </div>
                    <div class="form-wrap">
                        <label class="form-label" for="contact-email">E-Mail</label>
                        <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Required @Email">
                    </div>
                    <div class="form-wrap">
                        <label class="form-label" for="contact-message">Message</label>
                        <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                    </div>
                    <!--Google captcha-->
                    <div class="form-wrap form-validation-left">
                        <div class="recaptcha" id="captcha1" data-sitekey="6LfZlSETAAAAAC5VW4R4tQP8Am_to4bM3dddxkEt" data-auto-size=""></div>
                    </div>
                    <div class="form-button group-sm text-center text-lg-left">
                        <button class="btn btn-primary" type="submit">Send</button>
                        <button class="btn btn-white" type="reset">Reset</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-5 col-xl-4">
                <h5>Contact Details</h5>
                <div class="contact-list">
                    <dl>
                        <dt>E-mail</dt>
                        <dd><span class="icon icon-primary mdi mdi-email-outline"></span><a class="link" href="mailto:#">hello@medserve.co.in</a></dd>
                    </dl>
                    <dl>
                        <dt>Address</dt>
                        <dd><span class="icon icon-primary mdi mdi-map-marker"></span><a class="link" href="#">Polt No- 106/2, Kurua, Bhadrak, Odisha</a></dd>
                    </dl>
                    <dl>
                        <dt>Phone</dt>
                        <dd><span class="icon icon-primary mdi mdi-phone"></span><a class="link link-md" href="tel:#">+91 8722 040 200</a></dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Google Map-->
<section class="section">
    <!--Please, add the data attribute data-key="YOUR_API_KEY" in order to insert your own API key for the Google map.-->
    <!--Please note that YOUR_API_KEY should replaced with your key.-->
    <!--Example: <div class="google-map-container" data-key="YOUR_API_KEY">-->
    <div class="google-map-container" data-center="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-zoom="5" data-icon="images/gmap_marker.png" data-icon-active="images/gmap_marker_active.png" data-styles="[{&quot;featureType&quot;:&quot;landscape&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;:60}]},{&quot;featureType&quot;:&quot;road.local&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;:40},{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;visibility&quot;:&quot;simplified&quot;}]},{&quot;featureType&quot;:&quot;administrative.province&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;water&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;},{&quot;lightness&quot;:30}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ef8c25&quot;},{&quot;lightness&quot;:40}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;poi.park&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#b6c54c&quot;},{&quot;lightness&quot;:40},{&quot;saturation&quot;:-40}]},{}]">
        <div class="google-map"></div>
        <ul class="google-map-markers">
            <li data-location="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-description="9870 St Vincent Place, Glasgow"></li>
        </ul>
    </div>
</section>
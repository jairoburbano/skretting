<?php
/**
 *
 *
 * @package		skretting
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		1.0.0
 *
 */
$page = '';
$subpage = '';
$type = 'page';
$title = ' ';
$subpage_title = ' ';
include 'header.php';  ?>
<div class="wrap contacto">
    <h1 class="title title--main">Contacto</h1><!-- /.title -->
    <div class="box--flex">
        <div class="box__mid content">
            <p class="bajada">
                In tempus condimentum convallis. Nunc nec dolor blandit, auctor elit nec, sollicitudin lectus. Nunc placerat urna non sem vestibulum, a viverra massa mollis.
            </p><!-- /.bajada -->
            <p>
                Morbi metus felis, finibus vitae tempus id, mattis id turpis. Donec ac lorem nunc.
            </p>
            <p>
                Nunc finibus lacus nec tempus venenatis. Fusce pulvinar tincidunt quam ut luctus. Proin in risus id est sollicitudin eleifend. Vivamus ut porttitor est. Vivamus et malesuada neque. Quisque consequat dictum posuere.
            </p>
        </div><!-- /.box__mid -->
        <div class="box__mid formulario-contacto">
            <form class="contacto-form" data-mensaje="Mensaje de exito">
                <div class="input-group group">
                    <label for="nickname">Nombre <span>*</span></label>
                    <input type="text" id="nickname" name="nickname">
                </div><!-- /.input-group -->
                <div class="input-group group">
                    <label for="email">Email <span>*</span></label>
                    <input type="text" id="email" name="email">
                </div><!-- /.input-group -->
                <div class="textarea-group group">
                    <label for="mensaje">Mensaje <span>*</span></label>
                    <textarea id="mensaje" name="mensaje"></textarea>
                </div><!-- /.textarea-group -->
                <div class="send-group">
                    <p><span>*</span>Campos obligatorios</p>
                    <input type="submit" value="Enviar">
                </div><!-- /.send-group -->
            </form>
        </div><!-- /.box__mid -->
    </div><!-- /.box--flex -->
</div><!-- /.wrap -->
<div class="wrap">
    <div id="map"></div><!-- /#map -->
    <div class="directions">
        <div class="directions__item">
            <h2 class="direction__title">Osorno</h2><!-- /.direction__title -->
            <p>
                Ruta 5 Sur Nr. 775, Casilla 100 Osorno - Chile
            </p>
            <a href="tel:+56 64 2241200" title="Contactanos" class="direction__phone">
                <span><svg><use xlink:href="#shape-icon-phone" /></svg></span>
                +56 64 2241200
            </a>
            <a href="https://www.google.com/maps/@-41.460047,-72.97776,16z?hl=es-ES" target="_blank" title="Ver en mapa" class="btn--map point-map" data-lat="-41.460047" data-lng="-72.9777597">
                <span><svg><use xlink:href="#shape-icon-place" /></svg></span>
                Ver en mapa
            </a>
        </div><!-- /.directions__item -->
        <div class="directions__item">
            <h2 class="direction__title">Puerto Montt</h2><!-- /.direction__title -->
            <p>
                Camino a Pargua 1001, Casilla 201 Puerto Montt - Chile
            </p>
            <a href="tel:+56 65 2299500" title="Contactanos" class="direction__phone">
                <span><svg><use xlink:href="#shape-icon-phone" /></svg></span>
                +56 65 2299500
            </a>
            <a href="https://www.google.com/maps/@-41.481773,-73.010701,16z?hl=es-ES" target="_blank" title="Ver en mapa" class="btn--map point-map" data-lat="-41.481773" data-lng="-73.0107007">
                <span><svg><use xlink:href="#shape-icon-place" /></svg></span>
                Ver en mapa
            </a>
        </div><!-- /.directions__item -->
        <div class="directions__item">
            <h2 class="direction__title">Pargua</h2><!-- /.direction__title -->
            <p>
                Ruta 5 Sur Nr. 1078,5 Pargua - Comuna de Calbuco
            </p>
            <a href="tel:+56 65 2467602" title="Contactanos" class="direction__phone">
                <span><svg><use xlink:href="#shape-icon-phone" /></svg></span>
                +56 65 2467602
            </a>
            <a href="https://www.google.com/maps/@-30.764036,-71.54548,16z?hl=es-ES" target="_blank" title="Ver en mapa" class="btn--map point-map" data-lat="-30.764036" data-lng="-71.5454797">
                <span><svg><use xlink:href="#shape-icon-place" /></svg></span>
                Ver en mapa
            </a>
        </div><!-- /.directions__item -->
    </div><!-- /.directions -->
</div><!-- /.wrap -->
<?php include 'footer.php'; ?>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script>
    if($(window).width() > 740) {
        function initialize() {

            var styles = [
                {"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},
                {"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},
                {"featureType":"road","elementType":"geometry.stroke","stylers":[{"visibility":"off"}]},
                {"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#404040"}]},
                {"featureType":"road","elementType":"labels.text.stroke","stylers":[{"color":"#ffffff"}]},
                {"featureType":"road","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},
                {"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#00497b"}]},
                {"featureType":"landscape","elementType":"geometry.fill","stylers":[{"color":"#e6e6e6"}]}
            ];



            $('.point-map').click(function(e){
                originalPin(e, $(this).data('lat'), $(this).data('lng'));
                $('.point-map').removeClass('active');
                $(this).addClass('active');
            });
            var zoomLevel = 16;
            var mapOptions = {
                center: {lat: -41.460047, lng: -72.9777597},
                zoom: zoomLevel,
                maxZoom:zoomLevel,
                minZoom:zoomLevel,
                disableDefaultUI: true,
                scrollwheel: false,
                disableDoubleClickZoom: true,
                keyboardShortcuts: false,
                zoomControl: true,
                zoomControlOptions: {
                    position: google.maps.ControlPosition.TOP_LEFT
                },
                streetViewControl: false,
            };

            var map = new google.maps.Map(document.getElementById("map"), mapOptions);
            map.setOptions({styles: styles});
            marker = new google.maps.Marker({
                position: {lat: -41.460047, lng: -72.9777597},
                map: map,
                animation: google.maps.Animation.DROP,
                icon: 'img/marker.svg',
                clickable: false
            });
            function originalPin(e, lat, lng){
                e.preventDefault();
                markerPosition = new google.maps.LatLng(lat, lng);
                marker.setMap(null);
                map.panTo(markerPosition);
                marker = new google.maps.Marker({
                    position: markerPosition,
                    map: map,
                    animation: google.maps.Animation.DROP,
                    icon: 'img/marker.svg',
                    clickable: false
                });
                return false;
            }
            function secondPin(e, lat, lng){
                e.preventDefault();
                markerPosition = new google.maps.LatLng(lat, lng);
                marker.setMap(null);
                map.panTo(markerPosition);
                marker = new google.maps.Marker({
                    position: markerPosition,
                    map: map,
                    animation: google.maps.Animation.DROP,
                    icon: 'img/marker.svg',
                    clickable: false
                });
                return false;
            }
            function thirdPin(e, lat, lng){
                e.preventDefault();
                markerPosition = new google.maps.LatLng(lat, lng);
                marker.setMap(null);
                map.panTo(markerPosition);
                marker = new google.maps.Marker({
                    position: markerPosition,
                    map: map,
                    animation: google.maps.Animation.DROP,
                    icon: 'img/marker.svg',
                    clickable: false
                });
                return false;
            }
            google.maps.event.addListener(map, 'dragend', function(){
                $c = map.getCenter();
                $ll = new google.maps.LatLng($c.d, $c.e);
            });
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    }
</script>
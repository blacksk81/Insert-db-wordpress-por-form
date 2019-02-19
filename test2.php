<?php get_header( 'test' ) //template name: insert hostel ?>

<div class="container">
    <div class="row">
        <div class="col-12" style="margin: 120px;">
            <h1>Registro</h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3 mt-5">
      <form action="#" method="post">
        <div class="form-group">
        <label>Hostal Name</label>
          <input type="text"  name="nombre" class="form-control" id="tag" placeholder="Name Hostal" required ><br>
          <!-- <textarea  type="text"  name="msn" class="form-control" required></textarea><br> -->
          <label>Stops</label><br>
          <select class="form-control" name="stops">
            <option selected="selected" disabled>Select your hotel</option>
            <option value="Jose Antonio Hotel Av. 28 de Julio 398">Jose Antonio Hotel Av. 28 de Julio 398</option>
            <option value="Larcomar Malecón de la Reserva 610">Larcomar Malecón de la Reserva 610</option>
            <option value="Hilton Hotel Av. La Paz 1099">Hilton Hotel Av. La Paz 1099</option>
            <option value="Hotel Maria Angola Av. La Paz 610">Hotel Maria Angola Av. La Paz 610</option>
            <option value="Hotel Double Tree Calle Independencia 141">Hotel Double Tree Calle Independencia 141</option>
            <option value="Hotel Boulevard Av. Jose Pardo 771">Hotel Boulevard Av. Jose Pardo 771</option>
            <option value="Hostal Torreblanca Av. José Pardo 1453">Hostal Torreblanca Av. José Pardo 1453</option>
          </select>
          <br>
          <label>Google Maps Code</label>
          <textarea  type="text"  name="mapa" class="form-control" required></textarea>
        </div>
        <input class="btn btn-primary" type="submit" value="Save">
        <br><br>
      </div>
      </form>
    </div>
</div>
<?php
    // cargar hostales
    error_reporting(0);
    global $wpdb;
    $registros = $wpdb->get_results($wpdb->prepare("INSERT INTO wp_hostels (nombre, stops, mapa) VALUES ('$_POST[nombre]','$_POST[stops]','$_POST[mapa]')"));
?>
<?php get_footer(); ?>
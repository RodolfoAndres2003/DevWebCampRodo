<h2 class="dashboard__heading"><?php echo $titulo; ?></h2>
<main class="bloques">
    <div class="bloques__grid">
    <div class="bloque">
            <h3 class="bloque__heading">Total Ingresos</h3>
                <p class="bloque__texto--cantidad">$
                    <?php echo $ingresos; ?>
                </p>
        </div>
        <div class="bloque">
            <h3 class="bloque__heading">Ultimos registros</h3>
            <?php foreach($registros as $registro){ ?>
                <div class="bloque__contenido">
                    <p class="bloque__texto">
                        <?php echo $registro->usuario->nombre . ' ' . $registro->usuario->apellido . ' Modalidad: ' . $registro->paquete->nombre; ?>
                    </p>
                </div>
            <?php } ?>
        </div>
        <div class="bloque">
            <h3 class="bloque__heading">Eventos con Menos lugares disponibles</h3>
            <?php foreach($menos_disponibles as $evento){ ?>
                <div class="bloque__contenido">
                    <p class="bloque__texto  bloque__texto--disponibles">
                        <?php echo $evento->nombre ?><br><span><?php echo $evento->disponibles ?></span><?php echo ' - Lugares Disponibles'; ?>
                    </p>
                </div>
            <?php } ?>
        </div>
        <div class="bloque">
            <h3 class="bloque__heading">Eventos con Mas lugares disponibles</h3>
            <?php foreach($mas_disponibles as $evento){ ?>
                <div class="bloque__contenido">
                    <p class="bloque__texto bloque__texto--disponibles">
                        <?php echo $evento->nombre ?><br><span><?php echo $evento->disponibles ?></span><?php echo ' - Lugares Disponibles'; ?>
                    </p>
                </div>
            <?php } ?>
        </div>
    </div>
</main>

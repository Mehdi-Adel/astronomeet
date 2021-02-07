<footer class="footer">
<?php
            astronomeet_theme_nav_menu('footer-menu');
            ?>

</footer>

<!-- Remplacé par wp_footer: -->
<!-- <script src="../js/app.js"></script> -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.js"></script>
<script src="https://cdn.jsdelivr.net/combine/npm/jquery.scrollex@0.2.1,npm/jquery.scrollex@0.2.1/jquery.scrollex.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rellax/1.10.0/rellax.min.js"></script>

<script>
var rellax = new Rellax('.rellax');

</script>

<?php wp_footer(); ?>

</body>

</html>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Inscription au meet</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>
            <div class="modal-body">
                Confirmer votre participation à l'événement ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                <button class="inscriptionButton btn btn-primary" type="submit" data-id="<?php echo $currentMeetId ?>" data-dismiss="modal">Parcticiper</button>
            </div>
        </div>
    </div>
</div>
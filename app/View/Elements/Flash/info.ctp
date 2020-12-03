<!-- Modal -->

        <div class="modal fade" id="myModal" tabindex="0" role="dialog" aria-labelledby="myModalLabel">
          </br></br></br>
          <div class="modal-dialog" role="document">
            
            <div class="col-lg-12">
            <div class="modal-content">
              <div class="modal-header alert alert-info">
                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-info-circle fa-2x"></i> Mensaje de Notificación</h4>
              </div>
              <div class="modal-body">
                <?php echo $message ?>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal"> <i class="fa fa-check-circle fa-1x"></i> Aceptar</button>
              </div>
            </div>
              </div><!--fin del col--> 
            
          </div>
        </div>


<script>
    $('#myModal').modal('toggle');
</script>

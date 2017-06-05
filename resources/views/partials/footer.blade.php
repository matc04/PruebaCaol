
  <!-- Footer -->
        <footer class="footer-MaterialDark">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Prototipo</h5>
                        <p class="grey-text text-lighten-4">
                            Prueba Caol.<br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="NavLateralDivider"></div>
            <div class="footer-copyright">
                <div class="container center-align">
                    &#174; 2017 AGENCE 
                </div>
            </div>
        </footer>

         <script>
		   $(document).ready(function(){
		     $('#pizza').click(function(){
                if ($('#lista_analista').val() != null && $('#lista_analista').val() != ''){
                  $('#entrada').attr('action', '{{ url('pizza') }}');    
                } else {
                  alert("Debe indicar al menos un consultor");
                }
             });
             $('#relatorio').click(function(){
                if ($('#lista_analista').val() != null && $('#lista_analista').val() != ''    ){
                    $('#entrada').attr('action', '{{ url('relatorio') }}');
                }else{
                    alert("Debe indicar al menos un consultor");
                }
             });
             $('#grafico').click(function(){
                if ($('#lista_analista').val() != null && $('#lista_analista').val() != ''){
                    $('#entrada').attr('action', '{{ url('grafico') }}');
                } else {
                    alert("Debe indicar al menos un consultor");
                }
             });
		   });
	
	</script>
 </BODY></HTML>
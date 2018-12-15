    <!-- vue js -->
    <!-- <script src="{{URL::to('public/js')}}/vendorDashboard.js"></script> -->
    <!-- vue js -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="{{URL::to('public/bootstrap-4.1')}}/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="{{URL::to('public/bootstrap-4.1')}}/assets/js/vendor/popper.min.js"></script>
    <script src="{{URL::to('public/bootstrap-4.1')}}/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!-- Graphs -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script> -->
    <script>
      // var ctx = document.getElementById("myChart");
      // var myChart = new Chart(ctx, {
      //   type: 'line',
      //   data: {
      //     labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
      //     datasets: [{
      //       data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
      //       lineTension: 0,
      //       backgroundColor: 'transparent',
      //       borderColor: '#007bff',
      //       borderWidth: 4,
      //       pointBackgroundColor: '#007bff'
      //     }]
      //   },
      //   options: {
      //     scales: {
      //       yAxes: [{
      //         ticks: {
      //           beginAtZero: false
      //         }
      //       }]
      //     },
      //     legend: {
      //       display: false,
      //     }
      //   }
      // });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- dropdown  -->
    <script type="text/javascript">
      $('li.has-sub > a').click(function(){
        if (jQuery(this).hasClass("subDrop")) {
          jQuery(this).siblings("ul").slideUp();
          jQuery(this).removeClass("subDrop");
          jQuery(this).children("span.positive").html("+");
        }
        else{
          jQuery(this).siblings("ul").slideDown();
          jQuery(this).addClass("subDrop");
          jQuery(this).children("span.positive").html("-");
        }
      });
      // $('#sub_category_id').change(function(){
      //           id = this.value;
      //           $("#features_div").html('');
      //           $.get('http://localhost/Eitmad_my/ecommerce/vendor/product/'+this.value + '/features', function(features){
                     
      //                   $.each(features, function(index, feature) { 
      //                   feature_s = feature.replace(/\s+/g, '');                             
      //                       content = '<div class="form-group col-md-12 col-sm-12 ">                                                    <label for="product_'+feature_s+'">Product '+feature+'<span class="text-danger">*</span></label>                                                        <input type="text" name="product_'+feature_s+'" parsley-trigger="change"                                                               placeholder="Enter product '+feature+'" class="form-control edit_input" id="product_'+feature_s+'"  }}">                                                   </div>'                        
      //                       $("#features_div").append(content);
                                                    
      //                   });
      //           });
      //       });
      var deleteProduct = function(id){
                if (confirm('Are you sure you want to delete this?')) {
                    event.preventDefault();
                    document.getElementById('delete-form'+id).submit(); 
                }           
            }
      


    </script>
    <!-- dropdown  -->
  </body>
</html>
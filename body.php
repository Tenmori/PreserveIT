<div id='background'>
        <div id='mySidenav' class='sidenav'>
          <a href='javascript:void(0)' class='closebtn' onclick='closeNav()'>&times;</a>
          <a href='#' id='fruit'>Fruit</a>
          <div class='items1'>
            <ul>
            <?php echo "$htmlfruitList"; ?> 
            </ul>
          </div>
          <a href='#'>Services</a>
          <a href='#'>Clients</a>
          <a href='#'>Contact</a>
        </div>
        <span id='open' onclick='openNav()'>&#9776;</span>
        <div id='title' class='row'>
          <h1>Preservit</h1>
        </div>
        <div class='row'>
          <div class='col-sm-6 col-sm-offset-3'>
              <div id='imaginary_container'>
                  <div class='input-group stylish-input-group'>
                      <input type='text' class='form-control'  placeholder='Search' >
                      <span class='input-group-addon'>
                          <button type='submit'>
                              <image src='image/search2.png' width='15' height='15' alt='submit'>
                          </button>
                      </span>
                  </div>
              </div>
          </div>
      	</div>

        <script>
        $('#fruit').click(function() {
          if ($('.items1').is(':visible') == false) {
            $('.items1').show('slow');
          } else if($('.items1').is(':visible') == true) {
            $('.items1').hide('slow');
          }
        });
        function openNav() {
            document.getElementById('mySidenav').style.width = '250px';
        }

        function closeNav() {
            document.getElementById('mySidenav').style.width = '0';
        }
        </script>
      </div>"
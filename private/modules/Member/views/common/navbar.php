
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">STARTigniter</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" role="form">
          <?php if(isset($logged)){echo '<a href="'.base_url().'admin/logout" class="btn btn-success">Logout</a>';}
          else {echo '<a href="'.base_url().'/" class="btn btn-success">Public Area</a>';}
          ?>           
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">Recipes</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="<?php if ($this->params['controller'] == 'recipes') echo 'active'?>" id="fullRecipe"><a href="/">Home</a></li>
            <li class="<?php if ($this->params['controller'] == 'rss') echo 'active'?>" id="fullRecipe"><a href="/rss">Rss</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
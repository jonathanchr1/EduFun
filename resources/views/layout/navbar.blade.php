<div class="row" style="background-color: #e3f2fd">
    <div class="col-12">
        <nav class="navbar navbar-expand-sm" style="background-color: #e3f2fd">
            <ul class="navbar-nav">
                <li class>
                    <h3 style="color: #6495ED; padding-left: 10px; padding-right: 15px">EduFun</h3>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('view.home') }}">Home</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Category</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('view.cate.ds') }}">Data Science</a></li>
                    <li><a class="dropdown-item" href="{{ route('view.cate.ns') }}">Network Security</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('view.writers') }}">Writers</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('view.about') }}">About Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('view.popular.course') }}">Popular</a>
                </li>
            </ul>
        </nav>
    </div>
</div>
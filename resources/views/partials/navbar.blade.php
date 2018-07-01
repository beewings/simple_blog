
<style>
.dropbtn {
    background-color: #f8f9fa;
    color: black;
    padding: 16px;
    font-size: 16px;
    border: solid #28a745 1px;
    border-radius: 15px;
}

.dropdown {
    position: relative;
    display: inline-block;

}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #ddd}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
</style>

<nav class="navbar navbar-expand-lg navbar-light bg-light" >
  <a class="navbar-brand" href="{{ route('article.home') }}"><img src="/img/insect1.png" alt="" style="width: 100px; margin-right: 250px; margin-left: 70px;
  height: auto;
  float: left;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Tìm Bài Viết" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm Kiếm</button>
    </form>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
      <li class="nav-item" style="margin-left: 250px">
        <i class="material-icons">favorite</i>
        <i class="material-icons">favorite</i>
        <p style="display: inline;">Anh Yêu Em</p>
        <i class="material-icons">favorite</i>
        <i class="material-icons">favorite</i>



      </li>
      <li class="nav-item dropdown" style="margin-left: 80px; width: 120px; ">
        <div class="dropdown">
          <button class="dropbtn">Tạo Bài</button>
          <div class="dropdown-content" >
            <a href="{{ route('article.create' ) }}" >Bài viết</a>
            <a href="#" >Ảnh</a>
            <a href="#" >Video</a>
          </div>
        </div>
      </li>
      
      
    </ul>
    
  </div>
</nav>
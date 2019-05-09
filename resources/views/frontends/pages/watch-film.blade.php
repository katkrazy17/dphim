@extends('frontends.master')
@section('title','Avengers - Modify')
@section('css')
<link rel="stylesheet" href="{{ asset('vendor/css/fr-watch-page.css') }}">
@endsection
@section('content')
<!--START WATCH CONTENT-->
		<!--Embed Area-->
		
		<div class="container mt-5 shadow">
			<div class="embed-responsive embed-responsive-16by9">
			    <iframe width="1280" height="720" src="https://www.youtube.com/embed/TcMBFSGVi1c" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>
		<!--Details Area-->
		<div class="container mt-3">
			<div class="card bg-info border-0 rounded-0">
		        <div class="row no-gutters">
		            <div class="col-auto">
		                <img src="https://upload.wikimedia.org/wikipedia/vi/thumb/2/2d/Avengers_Endgame_bia_teaser.jpg/280px-Avengers_Endgame_bia_teaser.jpg" class="img-fluid" alt="avg">
		            </div>
		            <div class="col">
		                <div class="card-block px-2 mt-3">
		                    <h4 class="card-title">Avengers: Endgame</h4>
		                    <p class="card-text">Lượt xem: 13424</p>
		                    <p class="card-text">Phụ đề: Có</p>
		                    <p class="card-text">Thời lượng: 304 phút</p>
		                    <p class="card-text">Chất lượng: HD</p>
		                    <p class="card-text">Thể loại: Đang cập nhật</p>
		                    <p class="card-text">IMDb: 9/10</p>
		                </div>
		            </div>
		            <div class="col">
		                <div class="card-block px-2 mt-3">
		                    <h4 class="card-title">Biệt Đội Báo Thù: Hồi Kết</h4>
		                    <p class="card-text">Đạo diễn: Đang cập nhật</p>
		                    <p class="card-text">Diễn viên: Đang cập nhật</p>
		                    <p class="card-text">Năm phát hành: 2019</p>
		                    <p class="card-text">Nhà sản xuất: Marvel Cinematic Universe</p>
		                    <p class="card-text">Quốc gia: Mỹ</p>
		                </div>
		            </div>
		        </div>
		    </div>
		    <div class="description mt-3">
		    	<h2>Nội dung</h2>
		    	<p class="text-justify">Avatar là câu chuyện về người anh hùng “bất đắc dĩ” Jake Sully – một cựu sĩ quan thủy quân lục chiến bị liệt nửa thân. Người anh em sinh đôi của anh được chọn để tham gia vào chương trình cấy gien với người ngoài hành tinh Na’vi nhằm tạo ra một giống loài mới có thể hít thở không khí tại hành tinh Pandora. Giống người mới này được gọi là Avatar. Sau khi anh của Jake bị giết, Jake được chọn để thay thế anh mình và đã trở thành một Avatar, Jake có nhiệm vụ đi tìm hiểu và nghiên cứu hành tinh Pandora. Những thông tin mà anh thu thập được rất có giá trị cho chiến dịch xâm chiếm hành tinh xanh thứ hai này của loài người.</p>
		    </div>
			<div class="content-one">
				<div class="text-center">
		          <h3>Phim liên quan</h3>
		        </div>
				      <div class="mt-4 mb-2">
				        <div class="row shadow">
				          <div id="carousel-one" class="carousel slide" data-ride="false">
				            <div class="carousel-inner pl-5 pr-5">
				              <div class="carousel-item active">
				                <div class="d-none d-lg-block">
				                  <div class="slide-box">
				                    <div class="d-inline p-1">
				                      <div class="images">
				                        <img src="https://znews-photo.zadn.vn/w860/Uploaded/xbhunku/2019_03_28/avengersendgamepostertophalf.jpg" alt="First slide">
				                      </div>
				                      <div class="middle">
				                        <div class="m-4 text text-left text-success">
				                          <h5 class="m-0">Avengers: Endgame <small>(2019)</small></h5>
				                          <h6 class="m-0">Biệt đội báo thù: phần kết</h6>
				            
				                        </div>
				                        <div class="linked">
				                          <a href="#" class="btn btn-warning text-white">WATCH</a>
				                          <a href="#" class="btn btn-success">TRAILER</a>
				                        </div>
				                      </div>
				                    </div>
				                    <div class="d-inline p-1">
				                      <div class="images">
				                        <img src="http://media.idownloadblog.com/wp-content/uploads/2016/06/macOS-Sierra-Wallpaper-Macbook-Wallpaper.jpg" alt="First slide">
				                      </div>
				                      <div class="middle">
				                        <div class="m-5 text text-left text-success">
				                          <h4>Film-name-here</h4>
				                        </div>  
				                      </div>
				                    </div>
				                    <div class="d-inline p-1">
				                      <div class="images">
				                        <img src="http://papers.co/wallpaper/papers.co-vy04-lake-night-romantic-pattern-background-36-3840x2400-4k-wallpaper.jpg" alt="First slide">
				                      </div>
				                      <div class="middle">
				                        <div class="m-5 text text-left text-success">
				                          Film Detail
				                        </div>  
				                      </div>
				                    </div>
				                    <div class="d-inline p-1">
				                      <div class="images">
				                        <img src="https://wallpapersite.com/images/pages/pic_w/6412.jpg" alt="First slide">
				                      </div>
				                      <div class="middle">
				                        <div class="m-5 text text-left text-success">
				                          Film Detail
				                        </div>  
				                      </div>
				                    </div>
				                  </div>
				                </div>
				              </div>
				              <!--SLIDE 2 3 4-->
				              <div class="carousel-item ">
				                <div class="d-none d-lg-block">
				                  <div class="slide-box">
				                    <div class="d-inline p-1">
				                      <div class="images">
				                        <img src="https://znews-photo.zadn.vn/w860/Uploaded/xbhunku/2019_03_28/avengersendgamepostertophalf.jpg" alt="First slide">
				                      </div>
				                      <div class="middle">
				                        <div class="m-5 text text-left text-success">
				                          Film Detail
				                        </div>  
				                      </div>
				                    </div>
				                    <div class="d-inline p-1">
				                      <div class="images">
				                        <img src="https://znews-photo.zadn.vn/w860/Uploaded/xbhunku/2019_03_28/avengersendgamepostertophalf.jpg" alt="First slide">
				                      </div>
				                      <div class="middle">
				                        <div class="m-5 text text-left text-success">
				                          Film Detail
				                        </div>  
				                      </div>
				                    </div>
				                    <div class="d-inline p-1">
				                      <div class="images">
				                        <img src="https://znews-photo.zadn.vn/w860/Uploaded/xbhunku/2019_03_28/avengersendgamepostertophalf.jpg" alt="First slide">
				                      </div>
				                      <div class="middle">
				                        <div class="m-5 text text-left text-success">
				                          Film Detail
				                        </div>  
				                      </div>
				                    </div>
				                    <div class="d-inline p-1">
				                      <div class="images">
				                        <img src="https://znews-photo.zadn.vn/w860/Uploaded/xbhunku/2019_03_28/avengersendgamepostertophalf.jpg" alt="First slide">
				                      </div>
				                      <div class="middle">
				                        <div class="m-5 text text-left text-success">
				                          Film Detail
				                        </div>  
				                      </div>
				                    </div>
				                  </div>
				                </div>
				              </div>
				              <div class="carousel-item ">
				                <div class="d-none d-lg-block">
				                  <div class="slide-box">
				                    <div class="d-inline p-1">
				                      <div class="images">
				                        <img src="https://znews-photo.zadn.vn/w860/Uploaded/xbhunku/2019_03_28/avengersendgamepostertophalf.jpg" alt="First slide">
				                      </div>
				                      <div class="middle">
				                        <div class="m-5 text text-left text-success">
				                          Film Detail
				                        </div>  
				                      </div>
				                    </div>
				                    <div class="d-inline p-1">
				                      <div class="images">
				                        <img src="https://znews-photo.zadn.vn/w860/Uploaded/xbhunku/2019_03_28/avengersendgamepostertophalf.jpg" alt="First slide">
				                      </div>
				                      <div class="middle">
				                        <div class="m-5 text text-left text-success">
				                          Film Detail
				                        </div>  
				                      </div>
				                    </div>
				                    <div class="d-inline p-1">
				                      <div class="images">
				                        <img src="https://znews-photo.zadn.vn/w860/Uploaded/xbhunku/2019_03_28/avengersendgamepostertophalf.jpg" alt="First slide">
				                      </div>
				                      <div class="middle">
				                        <div class="m-5 text text-left text-success">
				                          Film Detail
				                        </div>  
				                      </div>
				                    </div>
				                    <div class="d-inline p-1">
				                      <div class="images">
				                        <img src="https://znews-photo.zadn.vn/w860/Uploaded/xbhunku/2019_03_28/avengersendgamepostertophalf.jpg" alt="First slide">
				                      </div>
				                      <div class="middle">
				                        <div class="m-5 text text-left text-success">
				                          Film Detail
				                        </div>  
				                      </div>
				                    </div>
				                  </div>
				                </div>
				              </div>
				              <div class="carousel-item ">
				                <div class="d-none d-lg-block">
				                  <div class="slide-box">
				                    <div class="d-inline p-1">
				                      <div class="images">
				                        <img src="https://znews-photo.zadn.vn/w860/Uploaded/xbhunku/2019_03_28/avengersendgamepostertophalf.jpg" alt="First slide">
				                      </div>
				                      <div class="middle">
				                        <div class="m-5 text text-left text-success">
				                          Film Detail
				                        </div>  
				                      </div>
				                    </div>
				                    <div class="d-inline p-1">
				                      <div class="images">
				                        <img src="https://znews-photo.zadn.vn/w860/Uploaded/xbhunku/2019_03_28/avengersendgamepostertophalf.jpg" alt="First slide">
				                      </div>
				                      <div class="middle">
				                        <div class="m-5 text text-left text-success">
				                          Film Detail
				                        </div>  
				                      </div>
				                    </div>
				                    <div class="d-inline p-1">
				                      <div class="images">
				                        <img src="https://znews-photo.zadn.vn/w860/Uploaded/xbhunku/2019_03_28/avengersendgamepostertophalf.jpg" alt="First slide">
				                      </div>
				                      <div class="middle">
				                        <div class="m-5 text text-left text-success">
				                          Film Detail
				                        </div>  
				                      </div>
				                    </div>
				                    <div class="d-inline p-1">
				                      <div class="images">
				                        <img src="https://znews-photo.zadn.vn/w860/Uploaded/xbhunku/2019_03_28/avengersendgamepostertophalf.jpg" alt="First slide">
				                      </div>
				                      <div class="middle">
				                        <div class="m-5 text text-left text-success">
				                          Film Detail
				                        </div>  
				                      </div>
				                    </div>
				                  </div>
				                </div>
				              </div>
				            </div>
				            <a class="carousel-control-prev bg-secondary" href="#carousel-one" data-slide="prev">
				              <span class="carousel-control-prev-icon"></span>
				            </a>
				            <a class="carousel-control-next bg-secondary" href="#carousel-one" data-slide="next">
				              <span class="carousel-control-next-icon"></span>
				            </a>
				          </div>
				        </div>
				      </div>
			</div>
		</div>
@endsection
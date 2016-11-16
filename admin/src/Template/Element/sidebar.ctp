<?php
$setActive = $this->request->url;
$setActive = explode("/", $setActive);
$setActive = $setActive[0];
$tabindex = "";
if (in_array($setActive, array('catproducts', 'products', 'brands'))) {
	$tabindex = 0;
}
if (in_array($setActive, array('catalogues', 'news'))) {
	$tabindex = 1;
}
if (in_array($setActive, array('logos','banners', 'slideshows', 'advertisements', 'projects'))) {
	$tabindex = 2;	
}
if (in_array($setActive, array('registers','contacts'))) {
	$tabindex = 3;	
}
if (in_array($setActive, array('users','roles'))) {
	$tabindex = 4;	
}
?>

<script type="text/javascript">
	ddaccordion.init({
		headerclass: "submenuheader",
		contentclass: "submenu",
		revealtype: "click",
		mouseoverdelay: 200,
		collapseprev: true,
		defaultexpanded: [<?php echo $tabindex; ?>],
		onemustopen: false,
		animatedefault: false,
		persiststate: false,
		toggleclass: ["", ""],
		animatespeed: "fast",
		oninit:function(headers, expandedindices){
            //do nothing
        },
        onopenclose:function(header, index, state, isuseractivated){
            //do nothing
        }
    })
</script>


<nav class="large-3 medium-4 columns" id="actions-sidebar">

	<!-- Menu mới -->
	<div id="accordian">
		<div class="left_col scroll-view">
			<div class="navbar nav_title" style="border: 0;">
				<a href="<?php echo DOMAINAD ?>homes/index" class="site_title"><i class="fa fa-paw"></i> <span>Quản trị Admin!</span></a>
			</div>

			<div class="clearfix"></div>
			
			<!-- menu profile quick info -->
			<div class="profile">
				<div class="profile_info">
					<?php $user = $this->request->session()->read('Auth.User'); ?>
					<ul class="list-inline">
						<li style="color: #fff; border-right: 1px solid #fff; padding-right: 10px;"><a style="text-decoration: underline;color: #fff" target="_blank" href="<?php echo DOMAIN ?>" >Trang chủ</a></li>
						<li><span>Welcome,</span> <?php echo $user['first_name'] ?> <?php echo $user['last_name'] ?></li>
					</ul>
				</div>
			</div>
			<!-- /menu profile quick info -->

			<div class="clearfix"></div>

			<!-- sidebar menu -->
			<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
				<div class="menu_section">
					<h3>General</h3>
					<ul class="nav side-menu">
						<li><a class="submenuheader"><i class="fa fa-product-hunt"></i> Sản phẩm <span class="fa fa-chevron-down"></span></a>
							<ul class="nav child_menu submenu">
								<li><a href="<?php echo DOMAINAD ?><?php echo "catproducts"; ?>" <?php if ($setActive == 'catproducts') {
									echo 'class="current"';
								} ?>>Danh mục sản phẩm</a></li>
								<li><a href="<?php echo DOMAINAD ?><?php echo "products"; ?>" <?php if ($setActive == 'products') {
									echo 'class="current"';
								} ?>>Danh sách sản phẩm</a></li>
								<li><a href="<?php echo DOMAINAD ?><?php echo "brands"; ?>" <?php if ($setActive == 'brands') {
									echo 'class="current"';
								} ?>>Thương hiệu</a></li>
							</ul>
						</li>
						<li><a class="submenuheader" ><i class="fa fa-desktop"></i> Quản lý Posts <span class="fa fa-chevron-down"></span></a>
							<ul class="nav child_menu submenu">
								<li>
									<a href="<?php echo DOMAINAD ?><?php echo "catalogues"; ?>"<?php if ($setActive == 'catalogues') {
										echo 'class="current"';
									} ?>>
									Danh mục</a>
								</li>
								<li>
									<a href="<?php echo DOMAINAD ?><?php echo "news"; ?>"<?php if ($setActive == 'news') {
										echo 'class="current"';
									} ?>>
									Danh sách</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="<?php echo DOMAINAD ?><?php echo "posts"; ?>"><i class="fa fa-pagelines"></i> Quản lý Pages </span></a>
						</li>
						<li><a class="submenuheader"><i class="fa fa-image"></i> Quản lý Images <span class="fa fa-chevron-down"></span></a>
							<ul class="nav child_menu submenu">
								<li>
									<a href="<?php echo DOMAINAD ?><?php echo "logos"; ?>" <?php if ($setActive == 'logos') {
										echo 'class="current"';
									} ?>>
									Logo</a>
								</li>
								<li>
									<a href="<?php echo DOMAINAD ?><?php echo "banners"; ?>" <?php if ($setActive == 'banners') {
										echo 'class="current"';
									} ?>>
									Banner</a>
								</li>
								<li>
									<a href="<?php echo DOMAINAD ?><?php echo "slideshows"; ?>" <?php if ($setActive == 'slideshows') {
										echo 'class="current"';
									} ?>>
									Slider</a>
								</li>
								<li>
									<a href="<?php echo DOMAINAD ?><?php echo "advertisements"; ?>" <?php if ($setActive == 'advertisements') {
										echo 'class="current"';
									} ?>>
									Quảng cáo</a>
								</li>
								<li>
									<a href="<?php echo DOMAINAD ?><?php echo "projects"; ?>" <?php if ($setActive == 'projects') {
										echo 'class="current"';
									} ?>>Đối tác</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="<?php echo DOMAINAD ?><?php echo "videos";?>"><i class="fa fa-video-camera"></i> Quản lý Video </a>
						</li>
						<li><a class="submenuheader"><i class="fa fa-clone"></i> Quản lý Contacts <span class="fa fa-chevron-down"></span></a>
							<ul class="nav child_menu submenu">
								<li><a href="<?php echo DOMAINAD ?>registers" <?php if ($setActive == 'registers') {
									echo 'class="current"';
								} ?>>Email đăng ký</a></li>
								<li><a href="<?php echo DOMAINAD ?>contacts" <?php if ($setActive == 'contacts') {
									echo 'class="current"';
								} ?>>Liên hệ</a></li>
							</ul>
						</li>
						<li>
							<a href="<?php echo DOMAINAD ?><?php echo "settings/edit/1"; ?>"><i class="fa fa-key"></i> Cấu hình </span></a>
						</li>
					</ul>
				</div>
				<div class="menu_section">
					<h3>Live On</h3>
					<ul class="nav side-menu">
						<li>
							<a href="<?php echo DOMAINAD ?><?php echo "orders"; ?>"><i class="fa fa-bell"></i> Quản lý Orders </span></a>
						</li>
						<li><a class="submenuheader"><i class="fa fa-user"></i> Quản lý Users <span class="fa fa-chevron-down"></span></a>
							<ul class="nav child_menu submenu">
								<li><a href="<?php echo DOMAINAD ?>users" <?php if ($setActive == 'users') {
									echo 'class="current"';
								} ?>>Users</a></li>
								<li><a href="<?php echo DOMAINAD ?>roles" <?php if ($setActive == 'roles') {
									echo 'class="current"';
								} ?>>Roles</a></li>
							</ul>
						</li>
					</ul>
				</div>

			</div>
			<!-- /sidebar menu -->

			<!-- /menu footer buttons -->
			<div class="sidebar-footer hidden-small">
				<a data-toggle="tooltip" data-placement="top" title="Settings">
					<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
				</a>
				<a data-toggle="tooltip" data-placement="top" title="FullScreen">
					<span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
				</a>
				<a data-toggle="tooltip" data-placement="top" title="Lock">
					<span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
				</a>
				<a href="<?php echo DOMAINAD ?>/users/logout" data-toggle="tooltip" data-placement="top" title="Logout">
					<span class="glyphicon glyphicon-off" aria-hidden="true"></span>
				</a>
			</div>
			<!-- /menu footer buttons -->
		</div>
	</div>
</nav>


<!-- Ajax -->
<!-- <script type="text/javascript">
	/*jQuery time*/
	$(document).ready(function(){
		$("#accordian h3").click(function(){
        //slide up all the link lists
        $("#accordian ul ul").slideUp();
        //slide down the link list below the h3 clicked - only if its closed
        if(!$(this).next().is(":visible"))
        {
        	$(this).next().slideDown();
        }
    })
	})
</script> -->

<!-- <script>
	$(".list-unstyled a").click(function() {
		$('a').removeClass('abc');
		$(this).addClass("abc");
	});
</script>
-->

<!-- Change with AJAX -->

<!-- <script>
	$(document).ready(function(){
		$("#accordian ul li a").click(function(e){
			e.preventDefault();
			var page = $(this).attr('href');
			$.get(page, function(html){
				$('#content').html(html);
			});
		});
	});
</script>

<script>
	$('a').click(function (event) {

    // Prevent default click action
    event.preventDefault();     

    // Detect if pushState is available
    if(history.pushState) {
    	history.pushState(null, null, $(this).attr('href'));
    }
    return false;
});
</script> -->
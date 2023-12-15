<nav class="navbar navbar-expand-lg navbar-light">
	<div class="container-fluid">
		<div class="sider-toggle">
			<a id="sidebarCollapse" href="javascript:void(0)" role="button" class="caret">
				<img src="{{ asset('assets/images/arrow.svg') }}" alt=""> 
			</a>
			<h2>			
				
			</h2>
		</div>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<div class="super-dlf">
				<!--<div class="user-img">
					<img src="images/profile-img.png" alt="">
				</div>-->
				<div class="admin">
					<h6>Super Admin <span>CRM</span></h6>
				</div>
				<!----popup img---->
				<div class="click-here">
					<a href="#"><img src="{{ asset('assets/images/arrow.svg') }}" alt=""></a>
				</div>
				<div class="custom-model-main">
					<div class="custom-model-inner">
						<div class="custom-model-wrap">
							<div class="pop-up-content-wrap">
								<div class="edit-box">
									<div class="admin mobile">
										<h6>Super Admin <span>CRM</span></h6>
									</div>
									<h5><a href="">Setting <i class="fa fa-cog" aria-hidden="true"></i></a></h5>
									<!-- Button trigger modal -->
									<h5><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#changepasswordlt">Change password <i class="fa fa-key" aria-hidden="true"></i></a></h5>
									<h5><a href="{{route('logout')}}">Logout<i class="fas fa-sign-out-alt"></i></a></h5>
								</div>
							</div>
						</div>
					</div>
					<div class="bg-overlay"></div>
				</div>
			</div><!---close super admin--->
		</div>
	</div>
</nav><!---close navbar---->